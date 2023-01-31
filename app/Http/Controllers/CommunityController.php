<?php

namespace App\Http\Controllers;
use App\Models\posts_categories;
use App\Models\posts_topics;
use App\Models\Posts;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //
    public function index(){
        $category = posts_categories::all();
        $topics = posts_topics::all();
        return view('pages.community.index', compact( 'category', 'topics'));
    }

    public function showpost($categoryid, $topicid){
        // $postsData = Posts::where('category_id',$categoryid)->where('topic_id', $topicid)->where('post_status', 1)->Orderby('created_at', 'desc')->List();
        // $posts = $postsData->toArray();
        return view('pages.community.posts', compact( 'posts', 'postsData'));
    }

    public function postdetails($categoryid, $topicid, $id){
        // $postsData = Posts::where('category_id',$categoryid)->where('topic_id', $topicid)->where('post_status', 1)->where('id', $id)->Orderby('created_at', 'desc')->List();
        // $posts = $postsData->toArray();
        return view('pages.community.postdetail', compact( 'posts', 'postsData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            // 'post_name' => 'required|string|max:500',
            'post_description' => 'required|string|max:6000',
        ]);

        try{
            if(auth()->user() != null && auth()->user() != ""){

                $category_id = posts_topics::select('category_id')->where('id', $request->topic)->first();

                $save = Posts::create([
                    'user_id' => auth()->user()->id,
                    'category_id' => $category_id->category_id,
                    'topic_id' => $request->topic,
                    'post_name' => $request->post_description,
                    'post_description' => $request->post_description,
                    'post_status' => 1,
                    'up_vote' => 0,
                    'down_vote' => 0,
                    'note' => rand(1000, 100000)
                ]);

                $inquiry = inquiry::create([
                    'inquiry_number' => 'INTKT' . rand('000000', '999999'),
                    'user_id' => Auth::user()->id,
                    'title' => $request->topic,
                    'message' => $request->post_description,
                ]);
    
                $data = array(
                    'name' => 'Dr. Garcia',
                    'content' => Auth::user()->email.' #'.Auth::user()->id. ' Has asked query on '.$request->topic. ' from lecture on <br />==========================<br />'. $request->post_description,
                );
       
                Mail::send('mail', $data, function($message) {
                    $message->to('onlinetraining@usbiomag.com', 'Dr. Garcia')->subject('#'.Auth::user()->id.' - Ask query from LMS Course');
                    $message->from('forumenquiry@usbiomag.com', "Community enquiry");
                });
    
                $notification = new notification();
                $notification->notification_type = 'inquiry';
                $notification->notification_description = Auth::user()->firstname . ' ' . Auth::user()->lastname . ' ask some query about the course';
                $notification->save();

                return back()->with('success', 'Post is created successfully');
            }else{
                return redirect('/login');
            }

        }catch(Exception $ex){
            return back()->with('error', $ex->getMessage());
        }
    }

    public function create(){

    }

    public function addcomment(){

    }

    public function addchildcomment(){

    }

    public function communityuser(){

    }
}
