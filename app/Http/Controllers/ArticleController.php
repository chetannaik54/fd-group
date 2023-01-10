<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flobbos\Pagebuilder\Contracts\ElementContract;
use Flobbos\Pagebuilder\Contracts\LanguageContract;
use Flobbos\Pagebuilder\Contracts\PagebuilderContract;
use Exception;

class ArticleController extends Controller{
    
    protected $builder;

    public function __construct(PagebuilderContract $builder) {
        $this->builder = $builder;
        //Init pagebuilder model class
        $this->builder->setClass('article');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('pagebuilder.pages.index')->with(['articles'=>$this->builder->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(LanguageContract $lang, ElementContract $element_types){
        return view('pagebuilder.pages.create')->with([
            'languages' => $lang->get(),
            'element_types' => $element_types->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        try{
            $article = $this->builder->create($request);
            return response()->json([
                'success'=>true,
                'return_url' => route('pagebuilder.pages.edit',$article->id)
            ],200);
        } catch (Exception $ex) {
            return response()->json(['success'=>false,'message'=>$ex->getMessage().'--'.$ex->getLine().'--'.$ex->getFile()],422);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, LanguageContract $lang, ElementContract $element_types){
        return view('pagebuilder.pages.edit')->with([
            'article'=>$this->builder->find($id),
            'languages'=>$lang->get(),
            'element_types' => $element_types->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        try{
            $this->builder->update($id, $request);
            return response()->json([
                'success'=>true,
                'return_url'=>route('pagebuilder.pages.edit',$id)
            ],200);
        } catch (Exception $ex) {
            return response()->json(['success'=>false,'message'=>$ex->getMessage().' --- '.$ex->getLine().' ---- '.$ex->getFile()],422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        try{
            $this->builder->delete($id);
            return redirect()->route('pagebuilder.pages.index')->withMessage(trans('pagebuilder::crud.record_deleted'));
        } catch (Exception $ex) {
            return redirect()->route('pagebuilder.pages.index')->withErrors($ex->getMessage());
        }
    }
}
