@extends('layout')
@section('body-content')

<h1 class="text-center m-5 wow animate__bounceInDown"  data-wow-duration="2s">
    ABOUT US
</h1>

<div class="container">
<div class="row mb-4">
    <div class="col">
<div class="card wow animate__bounceInLeft"  data-wow-duration="2s" >
    <img src="{{asset("img/palastine.png")}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">We support the Palestinian cause with all our might</p>
    </div>
  </div>
    </div>
    <div class="col">
        <div class="card bg-danger-subtle wow animate__bounceInDown"  data-wow-duration="2s" >
            <img src="{{asset("img/manger.png")}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Our managers provide full support to employees to serve you in the best way</p>
            </div>
          </div>
            </div>
            <div class="col">
                <div class="card wow animate__bounceInRight"  data-wow-duration="2s">
                    <img src="{{asset("img/staff.png")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">The employees give their best for you</p>
                    </div>
                  </div>
                    </div>
</div>
<div class="row mb-4">
    <div class="col-4 ">
<div class="card bg-danger-subtle wow animate__bounceInLeft"  data-wow-duration="2s" >
    <img src="{{asset("img/place.jpeg")}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">We take care in the place that the decorations are comfortable for the eyes and mind and that the place is far from noise</p>
    </div>
  </div>
    </div>
    <div class="col-4">
        <div class="card wow animate__bounceInDown"  data-wow-duration="2s" >
            <img src="{{asset("img/wwbsite.jpg")}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Every now and then the site is modified to make it easier to use
          </div>
        </div>
            </div>
            <div class="col-4">
                <div class="card bg-danger-subtle wow animate__bounceInRight"  data-wow-duration="2s" >
                    <img src="{{asset("img/help.png")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Do you need help, do not think twice and contact us</p>
                    </div>
                  </div>
                    </div>
</div>





</div>







@endsection
