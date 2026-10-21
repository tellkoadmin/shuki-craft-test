@extends('layouts.app')

@section('title', 'Lost password')
@section('description', 'Reset your Shuki Crafts account password.')
@section('noindex', true)
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/dankotuwa-2.jpg') }}" class="inner_banner_img" alt="Dark green cup and saucer with gold rim">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Lost Password</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Lost Password</h1>
    <p class="inner_text">We’ll email you a link to create a new password.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- lost password section -->
 <div class="container-fluid bg_grey policy_section">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-12 m-auto">
        <div class="policy_box track_box account_card">
          <span class="track_icon"><i class="fa-solid fa-key" aria-hidden="true"></i></span>
          <h2 class="heading">Lost your password?</h2>
          <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
          <form class="row g-3 track_form" action="{{ route('password.email') }}" method="post">
              @csrf
            <div class="col-12">
              <label for="lost_user" class="shuki_label">Username or email <span aria-hidden="true">*</span></label>
              <input type="text" id="lost_user" name="user_login" class="shuki_input" autocomplete="username" required>
            </div>
            <div class="col-12">
              <button type="submit" class="detail_buy_btn shuki_submit_btn">Reset password</button>
            </div>
          </form>
          <p class="track_help">Remembered your password? <button type="button" class="account_text_btn shuki_hover_line" data-account-tab="login">Back to login</button></p>
        </div>
      </div>
    </div>
  </div>
 </div>
<!-- lost password section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
