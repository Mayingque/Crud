@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="container">
      <div class="row d-flex justify-content-center align-items-center text-center">
          <div class="col-md-8">
              <div class="card o-hidden border-0 shadow-lg my-5">
                  
                  <div class="card-body">
                  <div class="pull-left">
                        <h1 style="font-family: Arial Black; margin-bottom: 30px;">LOGIN</h1>
                    </div>
                    @if (session('success'))
                        <div style="color: red; font-size: 14px; font-family: Arial; margin-bottom: 20px; margin-right: 30%;">
                            {{ session('success') }}
                        </div>
                    @endif
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                                  <input type="text" id="email_address" class="form-control" name="email" style="width: 70%; margin-left: 15%; font-size: 20px; font-family: Arial;" placeholder="Email Address" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                          </div>
                          <div class="form-group row">
                                  <input type="password" id="password" class="form-control" name="password" style="width: 70%; margin-left: 15%; font-size: 20px; font-family: Arial;" placeholder="Password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                          </div>
                              <button type="submit" class="btn" style="width: 70%; margin-bottom: 30px; background-color: #3b5998; color: white">
                                  Login
                              </button>
                   
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection