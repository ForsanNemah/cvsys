<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cv_order;
use Illuminate\Support\Facades\Redirect;
class MakeCvOrder extends Controller
{
    //

    

    public function make_cv_order(Request $request)
    {



$last_inserted_cv_order_user_id;

        $data=$request->all();



if($data['user_id']=='0'){








        $cv_orders = Cv_order::where('employee_selected_by_customer','0')->orderBy('id', 'ASC')->get();


//return $cv_orders;
        
        $users=User::where('user_type','employee')
        ->get();

        //return $users;








        $users_array = array();
        $cv_orders_array = array();

        foreach($users as $user){
            //echo $r->name;
           // echo $user->id."<br>" ;
            
            array_push($users_array, $user->id);
            
            
            
                    }




                    foreach($cv_orders as $cv_order){
                        //echo $r->name;
                       // echo $user->id."<br>" ;
                        
                        array_push($cv_orders_array, $cv_order->user_id);
                        
                        
                        
                                }



if(sizeof($cv_orders_array)==0){

    echo "zero orders";
    $last_inserted_cv_order_user_id=$users_array[0];

   

}
else{

    $last_inserted_cv_order_user_id=end($cv_orders_array); 


    if( $last_inserted_cv_order_user_id==end($users_array)){

        $last_inserted_cv_order_user_id=$users_array[0];
    }
    else{


$search_index=array_search($last_inserted_cv_order_user_id, $users_array);

       $last_inserted_cv_order_user_id=$users_array[$search_index+1];
    }



    }







$data['user_id']= $last_inserted_cv_order_user_id;
echo $data['user_id'];

Cv_order::create($data);

$selected_user_info=User::where('id', $last_inserted_cv_order_user_id)->first();

$user_phone_number=$selected_user_info->phone;
$user_email=$selected_user_info->email;
$user_name=$selected_user_info->name;

//echo $selected_user_info->phone;

$this->send_w_app_msg($user_phone_number,"لديك عميل جديد يرجى التواصل معه ");
return Redirect::to('https://api.whatsapp.com/send?phone='.$user_phone_number.'&&text=%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA%20%D8%A7%D9%83%D8%AB%D8%B1%20%D8%B9%D9%86%20%D8%A7%D9%84%D8%B3%D9%8A%D8%B1%D8%A9%20%D8%A7%D9%84%D8%B0%D8%A7%D8%AA%D9%8A%D8%A9%20%D8%B1%D9%82%D9%85%20'.$request->cv_id);





//return $data;

        /*
        $data=$request->all();

        $data['user_id']='1';
        
        Cv_order::create($data);
*/
        //return "made".$users;

        //return Redirect::to('https://api.whatsapp.com/send?phone=966568430828&text=%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA%20%D8%A7%D9%83%D8%AB%D8%B1%20%D8%B9%D9%86%20%D8%A7%D9%84%D8%B3%D9%8A%D8%B1%D8%A9%20%D8%A7%D9%84%D8%B0%D8%A7%D8%AA%D9%8A%D8%A9%20%D8%B1%D9%82%D9%85%20'.$request->cv_id);


}


else{



    $data['employee_selected_by_customer']=1;

    Cv_order::create($data);










    $selected_user_info=User::where('id',$data['user_id'] )->first();

    $user_phone_number=$selected_user_info->phone;
    $user_email=$selected_user_info->email;
    $user_name=$selected_user_info->name;
    
    //echo $selected_user_info->phone;
    
    $this->send_w_app_msg($user_phone_number,"لديك عميل جديد يرجى التواصل معه ");
    return Redirect::to('https://api.whatsapp.com/send?phone='.$user_phone_number.'&&text=%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA%20%D8%A7%D9%83%D8%AB%D8%B1%20%D8%B9%D9%86%20%D8%A7%D9%84%D8%B3%D9%8A%D8%B1%D8%A9%20%D8%A7%D9%84%D8%B0%D8%A7%D8%AA%D9%8A%D8%A9%20%D8%B1%D9%82%D9%85%20'.$request->cv_id);














}

        }






















        function send_w_app_msg($number,$msg) {
        
            $number=str_replace('+', '', $number);
            $number=str_replace(' ', '', $number);
            $msg=str_replace(' ', '%20', $msg);
            
            
            
            //echo $number;
            //echo $msg;
             
                    $ch = curl_init();
                    $url = "http://clp.wmc-ksa.com/w_api/index.php?to=".$number."&&body=".$msg."&&token=kil1y623422ercbl&&instance=instance65274";
                 
                  
                /*
                    $dataArray = ['page' => 2];
                    $data = http_build_query($dataArray);
                    $getUrl = $url."?".$data;
                
                    */
                
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
                
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                
                    curl_setopt($ch, CURLOPT_URL, $url);
                
                    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
                
                       
                
                    $response = curl_exec($ch);
                
                        
                
                    if(curl_error($ch)){
                
                        echo 'Request Error:' . curl_error($ch);
                
                    }else{
                
                        echo $response;
                
                    }
                
                       
                
                    curl_close($ch);
                
                
                     
                  }
            





}
