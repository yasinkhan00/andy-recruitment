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
        // dd($request->all());
        // $sup = job_category::all()->where('deleted_at',null)->where('job_id',0);
        // return view('pages.index');
        // dd($request->keyword);
        $job_search = jobs::with('job_location','job_salary','job_timing','company_details','how_to_apply','other_details','job_days','job_type','job_category')->where('deleted_at',null)->where('job_title', 'like', '%'.$request->keyword.'%')->get();
        $keyword = $request->keyword;
        // dd($job_search);
        // $job_category = job_category::where('deleted_at',null)->get();

        // $job_details = other_details::select('experience')
            // ->groupBy('experience')
            // ->get();
            // dd($job_details);

        return view('pages.job-list',compact('job_search','keyword'));

    }
}
