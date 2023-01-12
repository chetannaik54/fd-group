<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //
    public function gallery(){
        return view('pages.gallery');
    }

    public function home1(){
        return view('home1');
    }

    public function home2(){
        return view('home2');
    }

    public function home3(){
        return view('home3');
    }

    public function home4(){
        return view('home4');
    }

    public function home5(){
        return view('home5');
    }

    public function home6(){
        return view('home6');
    }

    public function jobslanding(){
        return view('jobslanding');
    }

    public function autocompleteSearch(Request $request){
        $query = $request->get('query');
        $searchResult = Http::get('https://newsapi.org/v2/everything?q=Apple&from=2023-01-04&sortBy=popularity&apiKey=9afae3f6f72e46f0b654ceb1cf5d3afd');
        $filterResult = json_decode($searchResult->body(), true);
        $filterResult = $filterResult['articles'];
        // $filterResult = blog::where('name', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }

    public function searchResult(Request $request){
        return view('pages.search-result');
    }

    public function privacy(){
        return view('pages.privacy');
    }

    public function copyright(){
        return view('pages.copyright');
    }

    public function locations(){
        $locations = array(
            array(
                'company' => 'Fidelis Technologies.',
                'city' => 'Hubli',
                'address' => 'IBMR, Co-working & Startups, 3rd floor, Akshay Plaza, Akshay colony, Vidyanagar, Hubli - 580021'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Bengaluru',
                'address' => 'No. 357, 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka 560034, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Mumbai',
                'address' => 'Suprabhat, Bldg No. 46, Office No: 2250 Gandhinagar, Bandra (East), Near MIG Cricket Club, Bandra Kalanagar Complex, Opp MHADA Office, Mumbai – 400051, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Jammu & Kashmir',
                'address' => '#72, Naikpora, Padshahi Bagh Srinagar, Kashmir-190008, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Hyderabad',
                'address' => 'Phoenix Tech Tower Private Limited, Genpact Road Plot No.14/46, 1st Floor, Phoenix Tech Tower, Uppal, Hyderabad, Telangana-500039, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Chennai',
                'address' => 'KRM Plaza, 8th, South Tower, KRM Plaza, Harrington Road 2, Chetpet, Chennai, Tamil Nadu-600031, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Delhi/ NCR',
                'address' => 'Unitech Cyber Park, Tower- B, 10th Floor, Unitech Cyber Park, Sector 39, Gurugram, Haryana-12200, INDIA'
            ),
            array(
                'company' => 'Fidelis Group, INC,',
                'city' => 'United States',
                'address' => '2609 Crooks Road #216,Troy, Michigan State, USA 48084',
                'email' => 'info-usa@fidelisgroup.in'
            ),
            array(
                'company' => 'Fidelis Technologies Pte Ltd',
                'city' => 'Singapore APAC',
                'address' => '111 Somerset Road, #08-10A, 111 Somerset, Singapore, 238164, Singapore',
                'email' => 'info-sg@fidelisgroup.in'
            ),
            array(  
                'company' => 'Fidelis Technologies',
                'city' => 'Dubai',
                'address' => 'Office 08 J-0118, Warehouse -P1, Block J, Saih Shuaib 2, Dubai, UAE',
                'email' => 'info-uae@fidelisgroup.in'
            )
        );

        return view('pages.locations', compact('locations'));
    }

    public function casestudies(){
        $sampleblogs = Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey=9afae3f6f72e46f0b654ceb1cf5d3afd');
        $sampleblogs = json_decode($sampleblogs->body(), true);
        $sampleblogs = $sampleblogs['articles'];

        return view('pages.case-studies', compact('sampleblogs'));
    }

    public function casedetails(){
        return view('pages.case-details');
    }

    public function clients_speak(){
        return view('pages.clients-speak');
    }

    public function why_choose_us(){
        return view('pages.why-choose-us');
    }

    public function partners_alliances(){
        return view('pages.partners-alliances');
    }

    public function corporate_governance(){
        return view('pages.corporate-governance');
    }

    public function mission_vision_values(){
        return view('pages.mission-vision-values');
    }

    public function journey(){
        return view('pages.journey');
    }

    public function people(){
        return view('pages.people-culture');
    }
    
    public function our_competencies(){
        $competencies = array(
            array(
                'name' => 'Robotic Process Automation',
                'category' => 'Business Process',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/018-bot.png'
            ),
            array(
                'name' => 'Business Process Management And Automation',
                'category' => 'Business Process',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/077-learning.png  '
            ),
            array(
                'name' => 'Business Intelligence And Analytical Services',
                'category' => 'Information Management',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/073-laptop.png'
            ),
            array(
                'name' => 'Database And Storage Admin',
                'category' => 'Information Management',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/036-chip.png'
            ),
            array(
                'name' => 'Application Development',
                'category' => 'Applications',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/080-machine.png'
            ),
            array(
                'name' => 'ERP Application Management Services',
                'category' => 'Applications',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/129-web.png'
            ),
            array(
                'name' => 'Application Management',
                'category' => 'Applications',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/039-data.png'
            ),
            array(
                'name' => 'Applications QA And Validation',
                'category' => 'Applications',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/003-analytics.png'
            ),
            array(
                'name' => 'Devops Advisory',
                'category' => 'Applications',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/094-networking.png'
            ),
            array(
                'name' => 'Cloud Computing',
                'category' => 'Platform And Infrastructure',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/040-network.png'
            ),
            array(
                'name' => 'IT And Infra Management',
                'category' => 'Platform And Infrastructure',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/082-chip.png'
            ),
            array(
                'name' => 'Data Center Enablement',
                'category' => 'Platform And Infrastructure',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/130-web.png'
            ),
            array(
                'name' => 'Managed Services',
                'category' => 'Managed services to keep your critical processes running 24x7x365 seamlessly',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/089-touch-screen.png'
            ),
            array(
                'name' => 'Skill Development',
                'category' => 'Accelerate value through carefully nurtured human capital with best practices',
                'icon' => 'https://fidelisgroup.in/wp-content/uploads/2020/10/066-humanoid.png'
            )
        );

        return view('pages.competencies', compact('competencies'));
    }

    public function about_us(){
        return view('pages.about-us');
    }

    public function journal(){
        return view('pages.blog');
    }

    public function article(){
        return view('pages.article');
    }

    public function retail_ecommerce(){
        return view('pages.retail-ecommerce');
    }

    public function enterprise_technology(){
        return view('pages.enterprise-technology');
    }

    public function manufacturing(){
        return view('pages.manufacturing');
    }

    public function healthcare(){
        return view('pages.healthcare');
    }

    public function fintech(){
        return view('pages.fintech');
    }

    public function banking(){
        return view('pages.banking');
    }

    public function contactus(){
        return view('pages.contact-us');
    }

    public function careers(){
        return view('pages.careers');
    }

    public function careerdetails(Request $request){
        return view('pages.career-detail');
    }

    public function refer_candidate(){
        return view('pages.career-refer-candidate');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function noc(){
        return view('pages.fidelis-noc');
    }

    public function soc(){
        return view('pages.fidelis-soc');
    }

    public function life_Culture_fidelis(){
        // return view('pages.life-at-fidelis');
        return view('jobslanding');
    }

    public function industries(){
        return view('pages.industries');
    }

    public function robotic_process_automation(){
        return view('pages.robotic-process-automation');
    }

    public function business_process_management_automation(){
        return view('pages.business-process-management-automation');
    }

    public function business_intelligence_analytical_services(){
        return view('pages.business-intelligence-analytical-services');
    }

    public function database_storage_admin(){
        return view('pages.database-storage-admin');
    }

    public function application_development(){
        return view('pages.application-development');
    }

    public function erp_application_development_services(){
        return view('pages.erp-application-development-services');
    }

    public function application_management(){
        return view('pages.application-management');
    }

    public function application_validation(){
        return view('pages.application-qa-validation');
    }

    public function devops_advisory(){
        return view('pages.devops-advisory');
    }

    public function cloud_computing(){
        return view('pages.cloud-computing');
    }

    public function it_infra_management(){
        return view('pages.it-infra-management');
    }

    public function data_center_enablement(){
        return view('pages.data-center-enablement');
    }

    public function managed_services(){
        return view('pages.managed-services');
    }

    public function contingent_staffing(){
        return view('pages.contingent-staffing');
    }

    public function msp_parternship(){
        return view('pages.msp-parternship');
    }

    public function short_term_engagement(){
        return view('pages.short-term-engagement');        
    }

    public function talent_kloud(){
        return view('pages.talent-kloud');
    }

    public function compliance(){
        return view('pages.compliance');
    }

    public function learning_academy(){
        return view('pages.learning-academy');
    }
}
