@extends('layouts.app')

@section('title', 'Order received')
@section('description', 'Thank you for your Shuki Crafts order.')
@section('noindex', true)
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-1.jpg') }}" class="inner_banner_img" alt="Gold-rimmed porcelain dinnerware on a dining table">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Order Received</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Thank You</h1>
    <p class="inner_text">Your order has been received.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- order received section -->
 <div class="container-fluid bg_grey policy_section">
  <div class="container">
    <div class="row g-4">

      <div class="col-12">
        <div class="policy_box received_box">
          <span class="received_check" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
          <h2 class="heading">Thank you. Your order has been received.</h2>
          <p>We’ve sent a confirmation to <strong>rohit.choudhary@example.com</strong>. We generally take 4-7 business days for delivering the orders.</p>

          <ul class="received_overview">
            <li><span>Order number</span><strong>SC1047</strong></li>
            <li><span>Date</span><strong>October 21, 2026</strong></li>
            <li><span>Email</span><strong>rohit.choudhary@example.com</strong></li>
            <li><span>Total</span><strong>₹9,749.00</strong></li>
            <li><span>Payment method</span><strong>Pay online</strong></li>
          </ul>

          <ol class="order_tracker received_tracker" aria-label="Order progress: Order placed">
            <li class="order_step order_step_current"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Order placed</span></li>
            <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Packed</span></li>
            <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Shipped</span></li>
            <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Delivered</span></li>
          </ol>

          <div class="received_actions">
            <a href="{{ route('dinnerware') }}" class="detail_buy_btn shuki_submit_btn">Continue Shopping</a>
            <a href="{{ route('order-tracking') }}" class="shuki_btn_outline shuki_btn_light">Track Order</a>
            <a href="{{ route('account') }}" class="shuki_btn_outline shuki_btn_light">My Account</a>
          </div>
        </div>
      </div>

      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-12">
        <div class="policy_box">
          <h2 class="sub_heading">Order details</h2>
          <table class="received_table">
            <thead><tr><th scope="col">Product</th><th scope="col">Total</th></tr></thead>
            <tbody>
                  <tr><td><a href="{{ route('product') }}" class="shuki_hover_line">Dankotuwa Premium Vienna Blue 12 Pcs Tea set</a> <strong>&times; 1</strong></td><td>₹6,250.00</td></tr>
                  <tr><td><a href="{{ route('product') }}" class="shuki_hover_line">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</a> <strong>&times; 1</strong></td><td>₹799.00</td></tr>
                  <tr><td><a href="{{ route('product') }}" class="shuki_hover_line">Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set</a> <strong>&times; 1</strong></td><td>₹2,700.00</td></tr>
            </tbody>
            <tfoot>
              <tr><th scope="row">Subtotal</th><td>₹9,749.00</td></tr>
              <tr><th scope="row">Shipping</th><td>Free</td></tr>
              <tr><th scope="row">Payment method</th><td>Pay online</td></tr>
              <tr class="received_total"><th scope="row">Total</th><td>₹9,749.00</td></tr>
            </tfoot>
          </table>
        </div>
      </div>

      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12">
        <div class="policy_box received_addresses">
          <div class="address_card">
            <h2 class="sub_heading">Billing address</h2>
            <address class="address_text">Rohit Choudhary<br>Flat 12, Lakeview Residency<br>Road No 3, Banjara Hills<br>Hyderabad, Telangana - 500034<br>India<br>9876543210<br>rohit.choudhary@example.com</address>
          </div>
          <div class="address_card">
            <h2 class="sub_heading">Shipping address</h2>
            <address class="address_text">Rohit Choudhary<br>Flat 12, Lakeview Residency<br>Road No 3, Banjara Hills<br>Hyderabad, Telangana - 500034<br>India</address>
          </div>
        </div>
      </div>

    </div>
  </div>
 </div>
<!-- order received section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
