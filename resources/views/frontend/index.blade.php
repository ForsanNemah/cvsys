<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <link rel="manifest" href="content/manifest.json">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- <link rel="stylesheet" href="content/fonts/style.css"> -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="forsan/image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="forsan/image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="aya//site.webmanifest">
    <title>آفاق الدقة للإستقدام!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <link rel="stylesheet" href="{{asset('forsan/css2.css')}}">
    
    <link rel="stylesheet" href="{{asset('forsan/material-dashboard.css')}}">
     
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="g-sidenav-show g-sidenav-pinned brtl" dir="rtl">
    <!-- <noscript>You need to enable JavaScript to run this app.</noscript> -->



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>



    
    <div id="root">
        <div class="main-header">
            <div class="container">
                <div class="row pt-3">

                    <a   href="{{route('home')}}"  class="btn btn-primary">الرئيسية</a>





                    <div class="col-6 z-index-1">
                        <img src="{{asset('forsan/images/m-logo.png')}}" data-m-logo="true" height="60">
                        
                    </div>

                    <div class="col-6 d-flex flex-row-reverse z-index-1">
                        <img src="forsan/images/h-logo.png" data-h-logo="true" height="80">
                    </div>



                    <!--  بداية ازرار الانستجرام والسناب واختر اللغة   -->
                
                    <div class="col-12 d-flex align-items-baseline justify-content-center">
                        <div class="mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex header-info">

                            
                            <div class="btn-group btn-group-sm ml-6" role="group" aria-label="Basic example">


                                <img src="forsan/logo.png" alt="Girl in a jacket" width="200" height="200">


                              
                            </div>


                        </div>
                    </div>
                    <!--  نهاية  ازرار الانستجرام والسناب واختر اللغة   -->
                    
                  
                </div>
            </div>
        </div>

        {{-- <div class="text-center">
            <span class="btn btn-primary">تقدم بطلبك الان</span>
        </div> --}}


        <!-- start Container -->
        <div class="container">
            <div class="container-fluid py-4">
                <form action="{{url('/store')}}" method="POST">
                    @csrf
                    <div class="row rtl filter">
                        <div class="row">

                    
                    <!-- بداية اختر الدولة  -->
                    <div class="col-lg-2 col-md-3">
                        <div class="input-group input-group-outline mb-3">
                            <select name="country_id" class="form-control" data-target="0">
                                <option value="0">اخـتــر الـــدولــة  </option>
                                @foreach ($countries as $country)
                                 
                                <option value="{{$country->id}}">{{$country->country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- نهاية اختر الدوله  -->

                    <!-- بداية اختر الوظيفة -->
                    <div class="col-lg-3 col-md-3">
                        <div class="input-group input-group-outline mb-3">
                            <select name="job_id" class="form-control"  data-target="1">
                                <option value="0">اخـتــر الــــوظــيفـــة   </option>
                                @foreach ($jobs as $job)
                                <option value="{{$job->id}}">{{$job->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- نهاية  اختر  الوظيفة  -->

                    <!-- بداية اختر نوع الاستقدام  -->
                    <div class="col-lg-3 col-md-3">
                        <div class="input-group input-group-outline mb-3">
                            <select name="type_of_estgdam_id" class="form-control"  data-target="2">
                                <option value="0">اخـتــر  نــوع الإســتــقــدام    </option>
                                @foreach ($types_of_estgdam as $type_of_estgdam)
                                <option value="{{$type_of_estgdam->id}}">{{$type_of_estgdam->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- نهاية  اختر نوع الاستقدام  -->

                    {{-- <div class="col-lg-2 col-md-3">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">الخبرة </label>
                            <select class="form-control"name="kh"  data-target="3">
                                <option></option>
                                <option value="8">لم يسبق لها العمل</option>
                                <option value="9">سبق لها العمل</option>
                            </select>
                        </div>
                    </div> --}}

                    <!-- start اختر الديانه  -->
                    <div class="col-lg-2 col-md-3">
                        <div class="input-group input-group-outline mb-3">
                            <select name="religion_id" class="form-control" data-target="4">
                                <option value="0">اخـتــر الديــانــة   </option>
                                @foreach ($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-lg-2 col-md-3 text-center">
                        {{-- <span class="btn btn-primary">بحث</span> --}}
                        <button type="submit" class="btn btn-primary">بحث</button>
                    </div>

                    </div>
                                    </form>


                    <!-- End  الديانه -->











































                    
                    <!--Start  View CVS -->
                    @foreach ($cvs as $cv)





@if($cv->final_status!="blocked" and $cv->final_status!="complated" and strcmp($cv->final_status,"removed" )!=0



)







                    <div class="mt-4 mb-4 col-lg-4 col-md-6"  >
                        <div class="card border overflow-hidden z-index-2" style="height: 450px;">
                            <img src="{{asset("storage/$cv->cv_pic")}}" data-source="true" height="440" class="card-img-top hover-effect" style="object-fit: cover; position: absolute; inset: 0px;">
                            <div class="card-body d-flex flex-column justify-content-end z-index-1 px-0" style="pointer-events: none;">
                                <div class="row bg-white p-1 px-2">
                                    <div class="col-12 text-center">
                                        @if($cv->job)
                                            {{$cv->job->name}}
                                        @else
                                            لا يــوجــد وظـيـفـة 
                                        @endif
                                    </div>
                                    <hr class="dark horizontal m-0 my-1">
                                    <div class="col-6">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <span class="mb-0 text-sm mx-3">
                                            @if($cv->country)
                                                {{$cv->country->country}}
                                            @else
                                                لا يــوجــد دولـــة  
                                            @endif  
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-star-and-crescent"></i>
                                        <span class="mb-0 text-sm mx-3">
                                             @if($cv->religion)
                                                {{$cv->religion->name}}
                                            @else
                                                لا يــوجــد ديــانــة  
                                            @endif  </span> 
                                    </div>
                                </div>
                            </div>

                            <div class="card-header p-0 position-relative mt-n4 z-index-2 bg-white">


                                <div class="border-radius-lg  text-white text-center d-flex">


 


                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-cv_id="{{$cv->id}}">
طلب عبر وتساب 
                                      </button>


                                  
                                </div>

<br>

                                <div class="border-radius-lg  text-white text-center d-flex">
                                    <a href="storage/{{$cv->cv_file}}" target="_blank" class="text-white hover-effect scale w-100 d-flex py-1 justify-content-center align-items-center bg-gradient-success">
                                        <span class="bi bi-file-pdf"></span>  عرض السرة الذاتية 
                                    </a>
                                    </span>
                                </div>




                            </div>
                        </div>
                    </div>

                

                @else

                @endif
        
                    @endforeach
                    <!--End   View CVS -->
                </div>
            </div>
        </div>
    </div>
        <!-- End container  -->
































        <!-- start Footer  -->
        <div class="h-25 bg-gradient-info text-white mt-7">
            <div class="container pt-6">
                <div class="row jrtl">
                    <div class="col-sm-4">
                        <h6 class="text-white fs-5">لماذا  آفاق الدقة للإستقدام!</h6>
                        <div class="text-sm">نسعى ان نكون الافضل في تقديم خدمة الاستقدام من خلال استقطاب افضل الايدي
                            العمالية الماهرة</div>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <h6 class="text-white fs-4">لنبق على تواصل!</h6>
                        <div class="text-sm">
                            <div><i class="fa-solid fa-location-dot mx-1"></i>
                                <a href="https://maps.app.goo.gl/gE2hT8w6R7ZsBMSc7?g_st=iw" target="_blank"
                                    rel="noopener noreferrer" class="text-white">اضغط هنا للوصول الى الموقع</a>
                            </div>
                            <div><i class="fa-solid fa-at mx-1"></i> <a href="mailto:afaq@gmail.com"
                                    class="text-white">afaq@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="light horizontal">
            </div>
            <footer class="footer bottom-2 py-2 w-100 " >
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                <a class="text-white" href="/login">
                                    <span>جميع الحقوق محفوظة لـ آفاق الدقة للإستقدام   2023©</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm madeby text-white text-lg-end">
                               
                                
                                <a href="https://wmc-ksa.com" class="font-weight-bold text-white mx-2"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" width="12"
                                        class="hover-effect">
                                        
                                    </svg> شركة النافذة للتسويق الالكتروني</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


       

    </div>

    
     
</body>

</html>





<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          









            <form dir="rtl"  method="post" action="{{config('app.url'); }}/api/make_cv_order">



                <div class="form-group"     >
                    <input name="cv_id" id="cv_id" type="text" class="form-control" value="{{$cv->id}}" dir="rtl" required>
                </div>
            


                <div class="form-group" dir="rtl" >
                 
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" الاسم" required>
 
                </div>

                 
                <div class="form-group">
                   
                    <input name="phone" type="number" class="form-control" placeholder="رقم جوالك" dir="rtl" required>
                </div>



                <div class="form-group">
                    <select name="branch_id" class="form-control" >
                        <option value="0">اختر الفرع (اختياري)</option>
                @foreach ($branches as $branch)
 
                <option value="{{$branch->id}}">{{$branch->name}}</option>

                @endforeach
            </select>
            </div>












            <div class="form-group">
                <select name="user_id" class="form-control" >
                    <option value="0">اختر الموضف (اختياري)</option>
            @foreach ($emps as $emp)

            <option value="{{$emp->id}}">{{$emp->name}}</option>

            @endforeach
        </select>
        </div>



            
               
            <br>
            <br>
                
            

               
                <button type="submit" class="btn btn-primary">طلب عبر وتساب</button>
              </form>
















 










        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>






<script type="text/javascript">
     
       //alert("wwe");
        //return true; // prevents browser error messages  
    






        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('cv_id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  
//alert(recipient)
  
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body #cv_id').val(recipient)

  



})









</script> 


<style>


::placeholder {
   text-align: center; 
}












.form-label, label {
    font-size: 0.875rem;
    font-weight: 400;
    margin-bottom: 0.5rem;
    color: #000000;
     
}









</style>