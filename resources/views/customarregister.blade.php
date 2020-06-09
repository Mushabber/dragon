@extends('layouts.frontend_master')

@section('frontend_content')
  <!-- .breadcumb-area start -->
      <div class="breadcumb-area bg-img-4 ptb-100">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="breadcumb-wrap text-center">
                          <h2>Account</h2>
                          <ul>
                              <li><a href="{{ url('/') }}">Home</a></li>
                              <li><span>Register</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- .breadcumb-area end -->
      <!-- checkout-area start -->
      <div class="account-area ptb-100">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                      <div class="account-form form-style">
                        <form action="{{ url('customar/register/post') }}" method="post">
                          @csrf
                          <p>Full Name *</p>
                          <input type="text" name="name">
                          <p>Email Address *</p>
                          <input type="email" name="email">
                          <p>Password *</p>
                          <input type="Password" name="password">
                          <p>Confirm Password *</p>
                          <input type="Password" name="confirm_password">
                          <button type="submit">Register</button>
                        </form>
                          <div class="text-center">
                              <a href="{{ url('login') }}">Or Login</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- checkout-area end -->
@endsection