<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cv;
use App\Models\Follow_up;
use App\Models\Status;

class modeltes extends Controller
{
    //


    public function elq(){


//echo "elq test"."<br>";


$users = User::all();
$cvs = Cv::all();

 





//echo $status->name;

foreach ($cvs as $cv) {


    
$cv['final_status']= $this->get_cv_state($cv->id);

//echo $cv->id."<br>";


   
}



return $cvs;
//return  $this->get_cv_state(5); 


//return $cvs;
//$cvs->put('test', 'test');

//$cv_fp=Follow_up::where('cv_id','3')->orderBy('id', 'DESC')->first();
//return $cvs;

//return  $this->get_cv_state(3); 




    }

    public function get_cv_state($cv_id){


       

        try {
            //echo "from function ";
        $cv_fp=Follow_up::where('cv_id',$cv_id)->orderBy('id', 'DESC')->first();
        

        if (is_null($cv_fp))
        {

            return "";
        }

        else{

            $status=Status::where('id',$cv_fp->status_id)->first();
            return   $status->name;
        

        }



     



       








        //echo $cv_fp->state_id."hhh";
        //return $cv_fp->state_id;

       
        }
          //catch exception
          catch(Exception $e) {
           

            return "";
          }


    }



}
