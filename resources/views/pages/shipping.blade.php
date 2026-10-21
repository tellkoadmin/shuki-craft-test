@extends('layouts.app')

@section('title', 'Shipping, Returns and Tracking')
@section('description', 'Shipping charges, packaging guarantee and delivery times for Shuki Crafts orders.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-4.jpg') }}" class="inner_banner_img" alt="Porcelain serveware on a dining table">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Shipping, Returns &amp; Tracking</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Shipping &amp; Returns</h1>
    <p class="inner_text">Shipping charges, packaging and delivery times.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- shipping section -->
 <div class="container-fluid bg_grey policy_section">
  <div class="container">
    <div class="row g-4">

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-12">
          <aside class="policy_nav" aria-label="Customer care pages">
            <p class="policy_nav_title">Customer Care</p>
            <ul class="policy_nav_list">
              <li><a href="{{ route('shipping') }}" class="policy_nav_link policy_nav_active" aria-current="page">Shipping, Returns &amp; Tracking</a></li>
              <li><a href="{{ route('refund-policy') }}" class="policy_nav_link">Refund Policy</a></li>
              <li><a href="{{ route('privacy-policy') }}" class="policy_nav_link">Privacy Policy</a></li>
              <li><a href="{{ route('terms') }}" class="policy_nav_link">Terms &amp; Conditions</a></li>
              <li><a href="{{ route('order-tracking') }}" class="policy_nav_link">Order Tracking</a></li>
              <li><a href="{{ route('contact') }}" class="policy_nav_link">Contact Us</a></li>
            </ul>
          </aside>
      </div>

      <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-12">
        <article class="policy_box">
            <h2 class="sub_heading">Shipping Charges</h2>
            <table class="policy_table">
            <thead><tr><th scope="col">Order value</th><th scope="col">Shipping charge</th></tr></thead>
            <tbody>
            <tr><td>Less than ₹5000</td><td>₹100</td></tr>
            <tr><td>Between ₹5000 and ₹7500</td><td>₹200</td></tr>
            <tr><td>More than ₹7500</td><td>Free</td></tr>
            </tbody>
            </table>
            <h2 class="sub_heading">Packaging & Guarantee</h2>
            <ul>
            <li>All the fragile products are carefully packaged using bubble wrap, thermocol and high-quality brown cartons to avoid any form of damage</li>
            <li>We take 100% guarantee for any breakage in <strong>transit </strong>and provide free replacement of the damaged products in case anything happens</li>
            </ul>
            <h2 class="sub_heading">Delivery Time</h2>
            <ul>
            <li>We generally take 4-7 business days for delivering the orders</li>
            <li>The delivery time is indicative and is estimated based on the location, distance and our courier partners</li>
            </ul>
        </article>
      </div>

    </div>
  </div>
 </div>
<!-- shipping section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
