@extends('layout')
@section('body-content')
<div class=" d-flex justify-content-center wow animate__bounceInDown"  data-wow-duration="2s">
    <div class="formlogin bg-danger-subtle p-5 m-4 shadow-lg p-3 mb-5 bg-body-tertiary rounded w-25">
        <h4 class="text-center pb-4">
            LOG IN
        </h4>
    <form class="text-center"  action="{{ url('login') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">LOG IN</button>
      </form>

</div>
</div>
















@endsection
