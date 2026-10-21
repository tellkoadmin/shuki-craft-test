@extends('layouts.app')

@section('title', 'Serveware')
@section('description', 'Dankotuwa porcelain platters, bowls and serving sets from Shuki Crafts are coming soon.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-4.jpg') }}" class="inner_banner_img" alt="Porcelain serveware on a dining table">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Serveware</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Serveware</h1>
    <p class="inner_text">Platters, bowls and serving sets.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- intro section -->
 <div class="container-fluid bg_grey listing_intro">
  <div class="container">

    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 text-center m-auto">
      <p>At Shuki Crafts, we are passionate about the art of porcelain craftsmanship. Our journey began with a vision to blend tradition with contemporary aesthetics, creating exquisite porcelain pieces that elevate spaces and capture hearts.</p>
    </div>

  </div>
 </div>
<!-- intro section -->

<div class="clearfix"></div>

 <!-- product listing section -->
 <div class="container-fluid bg_grey listing_section">
  <div class="container">
    <div class="row">
      <div class="col-xxl-8 col-xl-8 col-lg-10 col-md-12 col-12 m-auto">
        <div class="policy_box track_box category_soon">
          <span class="track_icon"><i class="fa-solid fa-hourglass-half" aria-hidden="true"></i></span>
          <h2 class="heading">Serveware is coming soon</h2>
          <p>Platters, bowls and serving sets are on their way. In the meantime, explore our dinnerware and tea sets.</p>
          <div class="received_actions">
            <a href="{{ route('dinnerware') }}" class="detail_buy_btn shuki_submit_btn">Shop Dinnerware</a>
            <a href="{{ route('tea-and-coffee') }}" class="shuki_btn_outline shuki_btn_light">Shop Tea and Coffee</a>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
 <!-- product listing section -->

<div class="clearfix"></div>

    @include('partials.faq')

<div class="clearfix"></div>


@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
