<?php

namespace App\Http\Controllers;
use App\Models\job_category;
use App\Models\jobs;
use App\Models\job_location;
use App\Models\job_salary;
use App\Models\job_timing;
use App\Models\job_days;
use App\Models\company_details;
use App\Models\job_type;
use App\Models\how_to_apply;
use App\Models\other_details;
use App\Models\apply;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sup = jobs::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days','job_type','job_category')->where('deleted_at',null)->get();
       
        $sup_id = jobs::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days','job_type','job_category')->where('deleted_at',null)->orderBy('id','DESC')->limit(10)->get();

        $full_time = job_type::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days')->where('deleted_at',null)->where('job_type_name','Full Time')->get();
        
        $part_time = job_type::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days')->where('deleted_at',null)->where('job_type_name','Part Time')->get();
        
        // $job_count = jobs::with('job_category')->groupBy('id','job_cat')->get();
        $job_count = jobs::with('job_category')
                 ->select('job_cat', DB::raw('count(*) as total'))
                 ->groupBy('job_cat')
                 ->where('deleted_at',null)
                 ->get();
        

        return view('pages.index',compact('sup','job_count','sup_id','full_time','part_time'));
    }

    public function search(Request $request)
    {
   
        $job_search = jobs::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days','job_type','job_category')->where('deleted_at',null)->where('job_title', 'like', '%'.$request->keyword.'%')->get();
        $keyword = $request->keyword;
        

        return view('pages.job-list',compact('job_search','keyword'));

    }

    public function search2(Request $request)
    {
   
        $job_search = jobs::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days','job_type','job_category')->where('deleted_at',null)->where('job_cat', $request->id)->get();
        // dd($job_search[0]->job_category->category_name);
        $keyword = $job_search[0]->job_category->category_name;
        

        return view('pages.job-list',compact('job_search','keyword'));

    }

    public function jobdetail(Request $request, $id)
    {
        // dd($id);
        $job_search = jobs::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days','job_type','job_category')->where('deleted_at',null)->where('id', $id)->first();

        // dd($job_search);

         return view('pages.job-detail',compact('job_search'));
    }

    public function apply(Request $requset, $id)
    {

        $job = jobs::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days','job_type','job_category')->where('deleted_at',null)->where('id', $id)->first();
        return view('pages.apply',compact('job'));

    }

    public function store(Request $request)
    {
        //dd($request->all());
         $this->validateItems($request);
        try{
            if($request){

               // dd($request->file('cv'));
                if ($request->file('cv') != null) {
                $uploads = basename('cv-'.time().'-'.rand(000000,999999).'.'.$request->file('cv')->getClientOriginalExtension());
                // dd($uploads);
                $path = $request->file('cv')->move('public/uploads',$uploads);
                // dd($path);

                // store into db
                apply::insert([
                    'job_id' => $request->job_id,
                    'name' => $request->first_name,
                    'surname' => $request->surname,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'cv' => $uploads
                ]);

                $request->session()->flash('msg-success', 'Applied Successfully!');
                return redirect()->route('apply',[$request->job_id]);

            }

            } else{
                return redirect()->back()->with('msg-error','Error!');
            }

        }
        catch (Exception $e) {

            return report($e);
            
        }
    }



    public function validateItems(Request $request)
    {
        $request->validate([     
            'first_name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'cv' => 'required|mimes:pdf|max:204800',
            
        ]);
    }

    public function about(){

        return view('pages.about'); 
    }

    public function team(){

        return view('pages.team'); 
    }

    public function contact(){

        return view('pages.contact'); 
    }
}
