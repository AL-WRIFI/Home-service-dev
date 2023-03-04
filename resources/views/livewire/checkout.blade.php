<div class="container-fluid px-1 py-5 mx-auto">
<div class="row d-flex justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-7">
<div class="card b-0">
<h3 class="heading">طلب خدمة</h3>
<p class="desc">التواصل مع الدعم <span class="yellow-text">738324002</span><br>الطلب المهني يجيك لباب بيتك!</p>


    <div class="progress-container">
        <div class="progress" id="progress" style="width:{{$barLength}}%; height: 9px; background-color:#3498db;"></div>
        <div class="circle {{ $Steps >= 1 ? 'active' : '' }} ">1</div>
        <div class="circle {{ $Steps >= 2 ? 'active' : '' }} ">2</div>
        <div class="circle {{ $Steps >= 3 ? 'active' : '' }} ">3</div>
        <div class="circle {{ $Steps >= 4 ? 'active' : '' }} ">4</div>
    </div>          



   
<div class="show" style="{{ $Steps != 1 ? 'display:none' : '' }}">
<h5 class="sub-heading">Select Service(s)</h5>

{{-- step 1 --}}
<div class="row ">
<div class="service-1 pt-2 container  text-black form-card">
<div class="col-row   ">   

@forelse ($services as $service)

<div class="row row1 text-center pb-1 text-black  ">


    <div class="col-2 p-0">
        <img class="serv-img" src="{{ asset('storage/' . $service->image) }}">
    </div>
    <div class="col-3  p-0 text-end ">
        <div>
            <h5>{{ $service->name }}</h5>
        </div>
    </div>
    <div class="col-3  p-0">


        <div class="plus-row justify-content-center align-items-center">
            <button class="button-plus " wire:click="increment({{ $service->id }})">+</button>
            <input wire:model="quantity.{{ $service->id }}" class="  serv-input  px-2   py-2 " />
            <button class="button-plus    " wire:click="decrease({{ $service->id }})">-</button>
        </div>

    </div>

    <div class="col-2  p-0">
        <h5><span style="color:#1a73e8">$ </span>
            {{$service->price * $quantity[$service->id]}}
        </h5>
    </div>
    <div class="col-2  p-0 text-center">
        @if ($cart->where('id', $service->id)->count())
        <button type="button" class="btn serv-btn  " wire:click="removeFromCart({{ $service->id }})">ازالـة</button>
        @else
        <button type="button" class="btn serv-btn   " wire:click="addToCart({{ $service }})"> <span>
                اضافه
            </span> </button>
        @endif
    </div>


</div>
<hr class=" serv-hr  text-black">
@empty
@endforelse
</div>
</div>

</div>
<button class="btn btn-primary" id="next"  wire:click="Next">Next</button>
</div>
{{-- end steps 1 --}}



{{-- steps 2 --}}
<div class="show" style="{{ $Steps != 2 ? 'display:none' : '' }}" >
      <div class="row" >
         <div class="service-1  form-card">
            <div class="col-row"> 
            
               <div class="col-3  ms-auto me-4 mb-2  text-end  " style="color: #2215da;">
                        <h5>التاريخ</h5>
                    </div>
                    <div class="row row1 text-center pb-1 text-black  ">
                        <div class="col-6 ms-auto me-4  text-end ">

                            <input class="input_date" type="date" name="date" wire:model="date" value="dd/mm/yy">

                        </div>
                    </div>

                    <div class="col-5 position-relative ms-auto me-4 mt-3  text-end  " style="color:  #6411ff;">
                        <h5> حدد الفترة الزمنيه </h5>
                    </div>

                    <div class="col-11  ms-auto me-4 text-end text-black " style=" height: 0.6px; top: -7px; position: relative;">
                        <hr class="  text-black">
                    </div>

                    <div class="position-relative ms-auto me-4 mb-2  pb-3 text-end  ">


                        <div class="row-date row text-center mx-2 me-0">

                            <div class="col-4 col-md-3 my-1 px-2"  >
                            
                                <div type="button" class="button cell py-1 " style="{{ $time != '9:50' ? '' :  'background-color:#2215da'}}" wire:click="$set('time','9:50')">
                                     9:50AM
                                </div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" style="{{ $time != '10:00' ? '' :  'background-color:#2215da'}}" wire:click="$set('time','10:00')">
                                    10:00AM</div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2 ">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>


                            <div class="col-4 col-md-3 my-1 px-2 d   ">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>


                            <div class="col-4 col-md-3 my-1 px-2 ">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>


                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>

                            <div class="col-4 col-md-3 my-1 px-2">
                                <div type="button" class="button cell py-1" wire:click="$set('time','10:00AM')">
                                    10:00AM</div>
                            </div>


                        </div>
                    </div>
                </div>
              </div>
           </div>
        <button class="btn btn-primary " id="prev"  wire:click="Previous">Prev</button>
         <button class="btn btn-primary " id="next"  wire:click="Next">Next</button>
   </div>
  {{-- end steps 2 --}}



  {{-- steps 3 --}}
  <div class="show" style="{{ $Steps != 3 ? 'display:none' : '' }}">
    <div class="dital row " >

                <div class="row " style=" flex-direction: row-reverse">
                    <div class="col-6   text-end  " style="    color: rgb(70 70 70);">
                        <h5> الطلب </h5>
                    </div>
                </div>

                <div class="col-6  ms-auto me-2  ">

                    <div class=" row row-serv text-end   ">

                        @foreach ($cart as $item)
                        <div class="col  salla-item  ">
                            <h6>{{ $item->name }}</h6>
                        </div>

                        @endforeach

                    </div>
                </div>

                <div class="row text-center  mt-3" style=" flex-direction: row-reverse">
                    <div class="col-6  text-end   " style="    color: rgb(70 70 70);">
                        <h5> تفاصيل الطلب</h5>
                    </div>
                </div>
                <hr style="margin-bottom: 0.5px;">
                <div class="row text-center  mt-3" style=" flex-direction: row-reverse">

                    <div class="col-6  text-end   " style="    color: rgb(70 70 70);">
                        <h5> التاريخ</h5>
                    </div>
                    <div class="col-6  text-end   " style="    color: rgb(70 70 70);">
                        <h5> الموقع</h5>
                    </div>
                  </div>
                <div class=" row text-black text-center mt-2" style=" flex-direction: row-reverse">
                    <div class="col-3 m-0 ps-1" style=" background-color: #ffffff;">
                        <h5 style="  border-bottom: 1px solid yellow;">{{ $date ?? 'لم يتمم التحديد'}} </h5>
                    </div>
                    <div class="col-3 m-0 pe-1  " style="background-color: #ffffff;">
                        <h5 style=" border-bottom: 1px solid yellow;"> {{ $time ?? 'لم يتم التحديد'}} </h5>
                    </div>
                    <div class=" col-3  m-0 ps-1 text-black">
                        <select wire:model="city" style="width:100% ; background-color: #f9f9f9;   border-radius: 3px;">
                            <option value="صنعاء" ><h5>صنعاء </h5></option>
                        </select>
                    </div>

                    <div class="col-3 m-0 pe-1 text-black ">
                        <select wire:model="state" style="width:100% ; background-color: #f9f9f9;      border-radius: 3px;">
                            <option value="السنينة">السنينة</option>
                            <option value="حدة">حدة</option>
                            <option value="مذبح">مذبح</option>
                            <option value="شميلة">شميلة</option>
                            <option value="الحصبة">الحصبة</option>
                        </select>
                    </div>

                </div>
                <div class="row  mt-3 mb-2" style=" flex-direction: row-reverse">
                    <div class="col-6   text-end  " style="    color: rgb(70 70 70);">
                        <h5> ملاحظه للفني </h5>
                    </div>
                    <div class="col-6   text-end  " style="color: rgb(70 70 70);">
                        <h5>
                            اضافه صوره </h5>
                    </div>
                    
                </div>
                <div class="row " style=" flex-direction:row-reverse">
                    <div class="col-6   text-end  text-black" style="color: rgb(238, 255, 0);">

                        <textarea name="notes" wire:model="note" placeholder="ملاحظات..." style=" overflow-wrap: break-word; resize: horizontal; width:90%; background-color: #f9f9f9; border-bottom: 1px solid yellow; border-radius: 5px;"></textarea>

                    </div>
                    <div class=" col-6   text-end  text-black " style="color: rgb(238, 255, 0);">
                        <div class="dropzone"> 
                        <input type="file" wire:model="photo" >
                        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                </div>
                <hr style="margin-bottom: 0.5px;">
                <div class="col-3  ms-auto me-1 mt-2 text-end  " style="color: rgb(70 70 70);">
                    <h5>
                        طريقة الدفع </h5>

                </div>
                <div class="  ms-auto me-1 mb-1  pb-1 text-end  text-black ">

                    <div class=" row  text-center " style=" flex-direction: row-reverse">
                        <div class="col-md-4  col-6 ms-3 pt-1 pb-1 text-black">
                            <select style="width:100% ; background-color: #f9f9f9;    border-radius: 3px;">
                                <option> كاش </option>
                                <option>الكريمي </option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-primary" id="prev"  wire:click="Previous">Prev</button>
            <button class="btn btn-primary " id="next"  wire:click="Next">Next</button>
     </div>      
    {{-- end steps 3 --}}

     <div class="show" style="{{$Steps != 4 ? 'display:none' : ''}}">
        
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="container profile-page">
        <div class="row">
            @foreach ($providers as $provider)
                <div class="col-xl-6 col-lg-7 col-md-12 " >
                    <div class="card1 profile-header ">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="profile-image"> <img src="{{asset('storage/'.$provider->user->image)}}" alt=""> </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <h6 class="m-t-0 m-b-0"><strong>{{$provider->user->name}}</strong></h6>
                                    <span class="job_post"><strong>{{$provider->phone}}</strong><span>
                                    <p> {{$provider->description}}</p>
                                    <div>
                                        @if($provid != '')
                                            <button class="btn btn-primary text-center" style="width:75px;height:30px ; padding:0%" wire:click="$set('provid',null)">ازالـة</button>
                                        @else
                                        <button class="btn btn-primary text-center" style="width:75px;height:30px ; padding:0%" wire:click="$set('provid',{{$provider->id}})">اختيار</button>
                                        @endif
                                    </div>
                                </div>                
                            </div>
                        </div>                    
                    </div>
                </div>
            @endforeach
        
	    </div>
    </div>
    <button class="btn btn-primary" id="prev"  wire:click="Previous">الخلف</button>
    <button class="btn btn-primary" id="prev"  wire:click="createOrder">ارسال</button>
     </div>
<!-- <button id="next1" class="btn-block btn-primary mt-3 mb-1 next">NEXT<span class="fa fa-long-arrow-right"></span></button> -->


</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>

<script>
    $(document).ready(function () {
        
    $('.cell').click(function () {
        $('.cell').removeClass('select');
        $(this).addClass('select');
    });
    
    });
    </script>