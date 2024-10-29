@extends('layouts.main')
@section('container')
<main class="form-signin">
  @if (session('LoginError'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        {{ session('LoginError') }}
    </div>
    @endif
    <form action="/login" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please Login </h1>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      
      {{-- <small class="d-block text-center mt-3">Not Registered <a href="/register">Register Now!</a></small> --}}
    </form>
  </main>
@endsection