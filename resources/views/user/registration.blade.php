@extends('include.layout')
@section('content')

<div class="container">
    <form action="{{ route('registration.post') }}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px; padding:50px; background:#000"> 
        @csrf
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('assets/images/white.png') }}" alt="" style="width: 200px">
        </div>
        <div class="form-group">
            <label style="color: #fff">Name</label>
            <input type="name" class="form-control" placeholder="Name" name="name">
          </div> 
        <div class="form-group">
          <label style="color: #fff">Email address</label>
          <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label style="color: #fff">Password</label>
          <input type="password" class="form-control mb-3" placeholder="Password" name="password">
        </div> 
        <p style="color: #fff">Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('login') }}" style="color: #fff; text-decoration:none">Sign in</a></p>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
  
@endsection
