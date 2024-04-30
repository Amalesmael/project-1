@extends('layout')
@section('body-content')

<h1 class="text-center wow animate__rotateIn m-1"  data-wow-duration="1s">
FISRT,HOW ARE YOU
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="80" fill="currentColor" class="bi bi-question-lg" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14"/>
  </svg>
</h1>
<h3 class="text-center wow animate__rotateIn" data-wow-duration="1s">
    we hope you are good
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8"/>
      </svg>
</h3>
<div class="container">


<div class="owl-carousel">
<div class="img" hight="25%" >
    <img class="img" src="{{asset("img/egpyt.png")}}" alt="">
</div>
<div class="img" >
    <img class="img" src="{{asset("img/كويت.jpeg")}}" alt="">
</div>
<div class="img">
    <img class="img" src="{{asset("img/الامارات.png")}}" alt="">
</div>
<div class="img">
    <img class="img" src="{{asset("img/السعودية.png")}}" alt="">
</div>
<div class="img">
    <img class="img" src="{{asset("img/عمان.png")}}" alt="">
</div>
<div class="img">
    <img class="img" src="{{asset("img/قطر.png")}}" alt="">
</div>
<div class="img">
    <img class="img" src="{{asset("img/bahren.webp")}}" alt="">
</div>
</div>

   <!-- start stats -->
   <div class="row m-3">
    <div class="stats">
        <h2 class=" text-success bg-danger-subtle p-2">Our Stats</h2>
        <div class="container">
            <div class="box">
                <i class="far fa-user fa-2x fa-fw"></i>
                <span class="number p-3" data-goal="200">0</span>
                <span class="text p-4">users</span>
            </div>
            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                  </svg>
                <span class="number mb-3 mt-3" data-goal="150">0</span>
                <span class="text">Satisfied</span>
            </div>
            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-neutral" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4 10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5zm3-4C7 5.672 6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8s1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5S9.448 8 10 8s1-.672 1-1.5z"/>
                  </svg>
                <span class="number mb-3 mt-3" data-goal="40">0</span>
                <span class="text">Neutral</span>
            </div>
            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                  </svg>
                <span class="number mb-3 mt-3" data-goal="10">0</span>
                <span class="text">Unhappy</span>
            </div>

        </div>
    </div>
</div>

    <!-- end stats -->
    <div class="d-flex justify-content-center mb-4">
        <div>
            <form action="{{ url('/') }}" method="POST" >
                @csrf
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Your inquiry</label>
                    <textarea name="ask" type="texterea" class="form-control" rows="4" cols="50" id="exampleInputPassword1">
                    </textarea>
                  </div>
                <button type="submit" class="btn btn-primary">send</button>
              </form>
        </div>
    </div>

    <div class="d-flex justify-content-center m-4">
        <button class="btn btn-success " >
          <a href="{{url('login')}}" class="text-white">
               LOG IN
          </a>
        </button>
    </div>







</div>
@endsection
