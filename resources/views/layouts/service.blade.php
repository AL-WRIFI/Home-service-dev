<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الخدمات</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/wizard.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />

    @livewireStyles
</head>

<body style="background-color: #e3e3e336;">


<header class="site-header sticky-top py-1" style=" background-color: black; ">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
   
  </nav>
</header>

<div>

    {{ $slot }}

</div>








    <div class=" pt-5">

        <nav class="navbar navbar-expand  d-sm-none d-md-none fixed-bottom ">
            <div class="container ">



                <ul class="navbar-nav  text-center text-black col-12  " style="height: 50px;">

                    <li class="nav-item col-4 ">
                        <a class="nav-link  " aria-current="page" href="#"><img class="" src="homeicon.png" alt=""
                                style="width: 30px;height: 25px;" /></a>
                        <h6> الرئيسية </h6>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link  " href="#"> <img class="mb-2 " src="homeicon.png" alt=""
                                style="width: 30px;height: 25px;" />
                            <h6 class="text-black "> الرئيسية </h6>
                        </a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link " href="#"><img class="mb-2 " src="homeicon.png" alt=""
                                style="width: 30px;height: 25px;" />
                            <h6 class="text-black "> الرئيسية </h6>
                        </a>
                    </li>


                </ul>
                <!-- <div class="search rounded-pill ps-3 pe-3  d-flex">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <a class="btn rounded-pill main-btn" href="#">Login</a>
            </div>-->

        </nav>
    </div>



    @livewireScripts
    
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
    <script type="text/javascript" src="{{asset('assets/js/all.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>