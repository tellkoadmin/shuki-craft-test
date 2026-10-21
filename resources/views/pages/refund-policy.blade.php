@extends('layouts.app')

@section('title', 'Refund policy')
@section('description', 'How Shuki Crafts handles damaged products, returns, exchanges and cancellations.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-5.jpg') }}" class="inner_banner_img" alt="Porcelain gift pack">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Refund Policy</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Refund Policy</h1>
    <p class="inner_text">How we handle damaged products, returns and cancellations.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- refund policy section -->
 <div class="container-fluid bg_grey policy_section">
  <div class="container">
    <div class="row g-4">

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-12">
          <aside class="policy_nav" aria-label="Customer care pages">
            <p class="policy_nav_title">Customer Care</p>
            <ul class="policy_nav_list">
              <li><a href="{{ route('shipping') }}" class="policy_nav_link">Shipping, Returns &amp; Tracking</a></li>
              <li><a href="{{ route('refund-policy') }}" class="policy_nav_link policy_nav_active" aria-current="page">Refund Policy</a></li>
              <li><a href="{{ route('privacy-policy') }}" class="policy_nav_link">Privacy Policy</a></li>
              <li><a href="{{ route('terms') }}" class="policy_nav_link">Terms &amp; Conditions</a></li>
              <li><a href="{{ route('order-tracking') }}" class="policy_nav_link">Order Tracking</a></li>
              <li><a href="{{ route('contact') }}" class="policy_nav_link">Contact Us</a></li>
            </ul>
          </aside>
      </div>

      <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-12">
        <article class="policy_box">
            <ol>
            <li>We pack our products with a lot of care and love so that it reaches our customers safely. In the unlikely event that your product arrives damaged, please send us a photo of the damaged product and box within 48 hours of receiving your order. You can reach us via email at <a href="mailto:info@shukicrafts.com">info@shukicrafts.com</a> or call or WhatsApp us on <a href="tel:+918374728076">+918374728076</a> We will resolve any issues immediately for you.</li>
            <li>We do not offer returns or exchanges on products which are delivered in perfect condition.</li>
            <li>Orders once placed cannot be cancelled. Hence, we request you to be completely sure of your purchase decision before buying a product. In case of any queries regarding a product before ordering, you can reach us via Email at <a href="mailto:info@shukicrafts.com">info@shukicrafts.com</a> or Call or WhatsApp us at <a href="tel:+918374728076">+91 8374728076</a>. We would be happy to assist you.</li>
            </ol>
        </article>
      </div>

    </div>
  </div>
 </div>
<!-- refund policy section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
