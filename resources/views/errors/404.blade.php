@extends('layouts.app')

@section('title', 'Page not found')
@section('description', 'The page you are looking for is not available.')
@section('noindex', true)
@section('hero_class', 'inner_hero error_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-1.jpg') }}" class="inner_banner_img" alt="Gold-rimmed porcelain dinnerware on a dining table">
  <div class="inner_banner_caption">
    <h1 class="inner_title main_heading">404</h1>
    <p class="inner_text">The page you are looking for is not available!</p>
    <div class="error_actions">
      <a href="{{ route('home') }}" class="shuki_btn_outline">Back to Home</a>
      <button type="button" class="shuki_btn_outline" data-bs-toggle="modal" data-bs-target="#search_modal">Search Products</button>
    </div>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- explore categories section -->
 <div class="container-fluid bg_grey error_section">
  <div class="container">
    <h2 class="sub_heading text-center error_cats_title">Explore Our Categories</h2>
    <div class="row g-3">
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
        <a href="{{ route('dinnerware') }}" class="search_cat">
          <span class="search_cat_icon"><img src="{{ asset('assets/images/dinnerware.png') }}" alt="" aria-hidden="true"></span>
          <span class="search_cat_name">Dinnerware</span>
        </a>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
        <a href="{{ route('tea-and-coffee') }}" class="search_cat">
          <span class="search_cat_icon"><img src="{{ asset('assets/images/tea.png') }}" alt="" aria-hidden="true"></span>
          <span class="search_cat_name">Tea and Coffee</span>
        </a>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
        <a href="{{ route('serveware') }}" class="search_cat">
          <span class="search_cat_icon"><img src="{{ asset('assets/images/serveware.png') }}" alt="" aria-hidden="true"></span>
          <span class="search_cat_name">Serveware</span>
        </a>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
        <a href="{{ route('gift-packs') }}" class="search_cat">
          <span class="search_cat_icon"><i class="fa-solid fa-gift" aria-hidden="true"></i></span>
          <span class="search_cat_name">Gift Packs</span>
        </a>
      </div>
    </div>
  </div>
 </div>
<!-- explore categories section -->

<div class="clearfix"></div>

 <!-- special note and statement section -->

  <div class="container-fluid white_bg pt-5 pb-5">
    <div class="container">

        <div class="row trust_row">

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 trust_col">
            <img src="{{ asset('assets/images/support.svg') }}" class="trust_icon" alt="" aria-hidden="true">
            <h3 class="trust_title sub_heading">Quick Support</h3>
            <p class="trust_text">We are available Monday&#8209;Friday (10AM&nbsp;-&nbsp;6PM) on chat &amp; call to help you out.</p>
          </div>

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 trust_col">
            <img src="{{ asset('assets/images/price.svg') }}" class="trust_icon" alt="" aria-hidden="true">
            <h3 class="trust_title sub_heading">Honest Pricing</h3>
            <p class="trust_text">We are a no discount store and have a pricing which is the minimum we can offer.</p>
          </div>

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 trust_col">
            <img src="{{ asset('assets/images/distpatch.svg') }}" class="trust_icon" alt="" aria-hidden="true">
            <h3 class="trust_title sub_heading">12 Hr Dispatch</h3>
            <p class="trust_text">We make sure your orders get dispatched soon so that it reaches you asap.</p>
          </div>

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 trust_col">
            <img src="{{ asset('assets/images/payment.svg') }}" class="trust_icon" alt="" aria-hidden="true">
            <h3 class="trust_title sub_heading">Secure Payment</h3>
            <p class="trust_text">Your payment is safe with us as we work with trusted &amp; approved partners only.</p>
          </div>

        </div>

    </div>
  </div>

 <!-- special note and statement section -->

<div class="clearfix"></div>

@include('partials.faq')

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
