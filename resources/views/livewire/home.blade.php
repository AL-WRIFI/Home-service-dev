

<div class="service-1 pb-5">
  <div class="container  " style="max-width: 860px; ">

      <div class=" text-center p-3 pb-2">
          <h3>الخدمات</h3>
      </div>
      <div class="row-service row row1 text-white pt-4 pb-4">
    @foreach ($categories as $category)
        <!--item-->
        
        <div class=" col-3   col-lg-2  m-1  text-center " style=" border:rgb(151, 148, 148) solid 1px">
          <a href="{{route('select_services',[$category->id])}}">
              <div class="single-service text-black-20 ">
                  <img src="{{asset('storage/'.$category->image)}}" style=" margin-bottom: 20px; ">
                  <h5>{{$category->name}}</h5>
              </div>
          </a>
        </div>
        <!-- End-->
        
    @endforeach
     </div>
    </div>
  </div>