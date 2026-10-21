@extends('layouts.app')

@section('title', 'Reset password')
@section('description', 'Create a new password for your Shuki Crafts account.')
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
        <li aria-current="page">Reset Password</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Reset Password</h1>
    <p class="inner_text">Choose a new password for your account.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- reset password section -->
 <div class="container-fluid bg_grey policy_section">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-12 m-auto">
        <div class="policy_box track_box account_card">
          <span class="track_icon"><i class="fa-solid fa-lock" aria-hidden="true"></i></span>
          <h2 class="heading">Set a new password</h2>
          <p>Enter a new password below.</p>
          <form class="row g-3 track_form" action="{{ route('password.update') }}" method="post">
              @csrf
            <div class="col-12">
              <label for="reset_pass" class="shuki_label">New password <span aria-hidden="true">*</span></label>
              <div class="password_field"><input type="password" id="reset_pass" name="password_1" class="shuki_input" autocomplete="new-password" minlength="8" required><button type="button" class="password_toggle" aria-label="Show password" aria-pressed="false"><i class="fa-regular fa-eye" aria-hidden="true"></i></button></div>
              <p class="account_hint">Use at least 8 characters.</p>
            </div>
            <div class="col-12">
              <label for="reset_pass_confirm" class="shuki_label">Re-enter new password <span aria-hidden="true">*</span></label>
              <div class="password_field"><input type="password" id="reset_pass_confirm" name="password_2" class="shuki_input" autocomplete="new-password" data-match="reset_pass" required><button type="button" class="password_toggle" aria-label="Show password" aria-pressed="false"><i class="fa-regular fa-eye" aria-hidden="true"></i></button></div>
            </div>
            <div class="col-12">
              <button type="submit" class="detail_buy_btn shuki_submit_btn">Save</button>
            </div>
          </form>
          <p class="track_help">Remembered your password? <button type="button" class="account_text_btn shuki_hover_line" data-account-tab="login">Back to login</button></p>
        </div>
      </div>
    </div>
  </div>
 </div>
<!-- reset password section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
