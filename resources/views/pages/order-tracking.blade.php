@extends('layouts.app')

@section('title', 'Order Tracking')
@section('description', 'Track your Shuki Crafts order with your Order ID and billing email.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-3.jpg') }}" class="inner_banner_img" alt="Porcelain tea and coffee set">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Order Tracking</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Order Tracking</h1>
    <p class="inner_text">Enter your Order ID to see where your order is.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- order tracking section -->
 <div class="container-fluid bg_grey policy_section">
  <div class="container">
    <div class="row g-4">

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-12">
          <aside class="policy_nav" aria-label="Customer care pages">
            <p class="policy_nav_title">Customer Care</p>
            <ul class="policy_nav_list">
              <li><a href="{{ route('shipping') }}" class="policy_nav_link">Shipping, Returns &amp; Tracking</a></li>
              <li><a href="{{ route('refund-policy') }}" class="policy_nav_link">Refund Policy</a></li>
              <li><a href="{{ route('privacy-policy') }}" class="policy_nav_link">Privacy Policy</a></li>
              <li><a href="{{ route('terms') }}" class="policy_nav_link">Terms &amp; Conditions</a></li>
              <li><a href="{{ route('order-tracking') }}" class="policy_nav_link policy_nav_active" aria-current="page">Order Tracking</a></li>
              <li><a href="{{ route('contact') }}" class="policy_nav_link">Contact Us</a></li>
            </ul>
          </aside>
      </div>

      <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-12">
        <div class="policy_box track_box">
          <h2 class="heading">Track Your Order</h2>
          <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>

          <form class="row g-3 track_form" action="{{ route('order-tracking.track') }}" method="post">
              @csrf
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
              <label for="track_order_id" class="shuki_label">Order ID <span aria-hidden="true">*</span></label>
              <input type="text" id="track_order_id" name="orderid" class="shuki_input" placeholder="Found in your order confirmation email" required>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
              <label for="track_email" class="shuki_label">Billing email <span aria-hidden="true">*</span></label>
              <input type="email" id="track_email" name="order_email" class="shuki_input" placeholder="Email you used during checkout" autocomplete="email" required>
            </div>
            <div class="col-12">
              <button type="submit" class="detail_buy_btn shuki_submit_btn">Track</button>
            </div>
          </form>

          <p class="track_help">Questions about delivery? Read our <a href="{{ route('shipping') }}" class="shuki_hover_line">Shipping, Returns &amp; Tracking</a> policy or <a href="{{ route('contact') }}" class="shuki_hover_line">contact us</a>.</p>
        </div>
      </div>

    </div>
  </div>
 </div>
<!-- order tracking section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
