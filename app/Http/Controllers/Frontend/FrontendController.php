<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Cv;
use App\Models\Job;
use App\Models\Country;
use App\Models\Religion;
use App\Models\Follow_up;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Type_of_estgdam;
use App\Http\Controllers\Controller;

use App\Models\Status;

class FrontendController extends Controller
{
    public function index( )
    {
        $follow_ups = Follow_up::all();
        $cvs=Cv::all();
        $countries = Country::all();
        $jobs= Job::all();
        $types_of_estgdam = Type_of_estgdam::all();
        $religions = Religion::all();
        $branches = Branch::all();


        $emps = User::where('user_type','employee')->get();












        foreach ($cvs as $cv) {

            $cv['final_status']= $this->get_cv_state($cv->id);

               
            }







        //return $types_of_estgdam;
        return view('frontend.index',compact('follow_ups','cvs','countries','jobs','types_of_estgdam','religions','branches','emps'));
    }



    public function search(Request $requet)
    {
        try {
            $fiter = $requet->validate([
                'country_id'=>'required',
                'job_id'=>'required',
                'type_of_estgdam_id'=>'required',
                'religion_id'=>'required',
            ]);


            $cvs = Cv::where('country_id',$requet->country_id)
                ->where('job_id',$requet->job_id)
                ->where('type_of_estgdam_id',$requet->type_of_estgdam_id)
                ->where('religion_id',$requet->religion_id)
                ->get();

                $countries = Country::all();
                $jobs= Job::all();
                $types_of_estgdam = Type_of_estgdam::all();
                $religions = Religion::all();
                $follow_ups = Follow_up::all();
                return view('frontend.index',compact('follow_ups','cvs','countries','jobs','types_of_estgdam','religions'));
            } 

        catch (\Throwable $th) {

            echo '<script type="text/javascript">
                
            alert("    لم يتم العثور على نتائج    ");
           
            
            </script>
            
            ';


         //sleep(3000);

            return redirect()->route('home');

        }


    }













    public function get_cv_state($cv_id){

        try {
        $cv_fp=Follow_up::where('cv_id',$cv_id)->orderBy('id', 'DESC')->first();
        

        if (is_null($cv_fp))
        {

            return "";
        }

        else{

            $status=Status::where('id',$cv_fp->status_id)->first();
            return   $status->name;
        

        }

       
        }
          catch(Exception $e) {
           

            return "";
          }


    }


}
