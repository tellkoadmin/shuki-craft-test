@extends('layouts.app')

@section('title', 'About Us')
@section('description', 'Discover Shuki Crafts: premium Dankotuwa porcelain that blends tradition with contemporary aesthetics.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-1.jpg') }}" class="inner_banner_img" alt="Shuki Crafts porcelain dinnerware on a dining table">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">About Us</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">About Us</h1>
    <p class="inner_text">Discover the difference premium Dankotuwa porcelain makes — for your home, your guests, and every moment worth celebrating.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- about us section -->
 <div class="container-fluid white_bg pt-5 pb-5">
  <div class="container">

    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 text-center m-auto">
      <h2 class="heading">Welcome to Shuki Crafts, where porcelain artistry meets timeless elegance.</h2>
      <p>At Shuki Crafts, we are passionate about the art of porcelain craftsmanship. Our journey began with a vision to blend tradition with contemporary aesthetics, creating exquisite porcelain pieces that elevate spaces and capture hearts.</p>
      <p>Artisans at our partner brands, deeply rooted in the age-old traditions of porcelain crafting, infuse their expertise and creativity into every piece we offer. They take pride in crafting each item by hand, ensuring that it not only meets our rigorous quality standards but also tells a unique story of artistry and dedication.</p>
      <p>Explore our carefully curated collection and discover the perfect porcelain masterpiece that resonates with your style and sensibilities. We are dedicated to sharing the magic of porcelain with the world, one exquisite piece at a time.</p>
      <p>At ShukiCrafts, we look forward to becoming a part of your journey to create spaces that radiate timeless beauty and charm.</p>
    </div>

  </div>
 </div>
<!-- about us section -->

<div class="clearfix"></div>

<!-- why dankotuwa section -->
 <div class="container mt-5 mb-0">
  <div class="row">

    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 text-center m-auto">
      <h2 class="heading">Why Dankotuwa?</h2>
      <p>Timeless beauty for tables that deserve distinction.</p>
    </div>

    <div class="clearfix"></div>

     <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
      <div class="p-4 bg_black h-100">
        <h3 class="sub_heading white_text">Heritage Craftsmanship</h3>
        <p class="white_text">Hand-finished porcelain from Sri Lanka's finest artisans since 1951</p>
      </div>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
      <div class="p-4 bg_black h-100">
        <h3 class="sub_heading white_text">Timeless Design</h3>
        <p class="white_text">Elegant pieces that complement any home, from classic to contemporary</p>
      </div>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
      <div class="p-4 bg_black h-100">
        <h3 class="sub_heading white_text">Built to Last</h3>
        <p class="white_text">Durable, chip-resistant porcelain designed for generations of use</p>
      </div>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
      <div class="p-4 bg_black h-100">
        <h3 class="sub_heading white_text">Eco-Conscious</h3>
        <p class="white_text">Sustainable production supporting traditional craftsmanship and artisan communities</p>
      </div>
     </div>

  </div>
 </div>
<!-- why dankotuwa section -->

<div class="clearfix"></div>

<!-- special note and statement section -->
<div class="container mt-5 mb-5">
  <div class="row">

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 d-flex flex-wrap align-content-center">
      <h2 class="heading">Exclusive porcelain products, Delivered to your doorstep.</h2>
      <p>Find Porcelain, and Giftware delivered to anywhere in India. ( Island-wide delivery launching soon )</p>
    </div>

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
      <img src="{{ asset('assets/images/note_img.png') }}" alt="" class="note_img w-100 m-auto">
    </div>

  </div>
</div>
<!-- special note and statement section -->

<div class="clearfix"></div>

<!-- our category section -->
 <div class="container-fluid category_section" id="our_categories">
  <div class="container">

    <div class="row">

      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 m-auto text-center category_head">
        <h2 class="heading white_text">Our Categories</h2>
        <p class="white_text">A few things we think you'll love — explore our porcelain by category.</p>
      </div>

      <!-- tab section -->
      <div class="col-12">

        <ul class="nav category_tabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="category_tab active" id="cat_dinnerware_tab" data-bs-toggle="tab" data-bs-target="#cat_dinnerware" type="button" role="tab" aria-controls="cat_dinnerware" aria-selected="true">
              <img src="{{ asset('assets/images/dinnerware.png') }}" class="category_tab_img" alt="" aria-hidden="true">
              <span class="sub_heading category_tab_title">Dinnerware</span>
              <span class="category_tab_text">Premium Simplicity</span>
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="category_tab" id="cat_tea_tab" data-bs-toggle="tab" data-bs-target="#cat_tea" type="button" role="tab" aria-controls="cat_tea" aria-selected="false">
              <img src="{{ asset('assets/images/tea.png') }}" class="category_tab_img" alt="" aria-hidden="true">
              <span class="sub_heading category_tab_title">Tea And Coffee</span>
              <span class="category_tab_text">Premium Simplicity</span>
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="category_tab" id="cat_serveware_tab" data-bs-toggle="tab" data-bs-target="#cat_serveware" type="button" role="tab" aria-controls="cat_serveware" aria-selected="false">
              <img src="{{ asset('assets/images/serveware.png') }}" class="category_tab_img" alt="" aria-hidden="true">
              <span class="sub_heading category_tab_title">Serveware</span>
              <span class="category_tab_text">Premium Simplicity</span>
            </button>
          </li>
        </ul>

        <div class="tab-content category_content">
          <div class="tab-pane fade show active" id="cat_dinnerware" role="tabpanel" aria-labelledby="cat_dinnerware_tab" tabindex="0">
            <div class="row g-4">

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <span class="product_badge">11% OFF</span>
                      <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Porcelain Colour Mug 2 Pcs" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading"><del class="product_old_price">₹899.00</del> ₹799.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <img src="{{ asset('assets/images/pro-5.jpg') }}" class="product_img" alt="Dankotuwa Premium Simplicity Shape Dinner plate 6 Pcs set" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Simplicity Shape Dinner plate 6 Pcs set</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading">₹2,400.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <img src="{{ asset('assets/images/pro-6.jpg') }}" class="product_img" alt="Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading">₹2,700.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <img src="{{ asset('assets/images/pro-7.jpg') }}" class="product_img" alt="Dankotuwa Premium Opus Shape Demi cup 1 Coffee cup &amp; 1 Saucer" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Opus Shape Demi cup 1 Coffee cup &amp; 1 Saucer</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading">₹350.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

            <div class="text-center">
              <a href="{{ route('dinnerware') }}" class="shuki_btn_outline shuki_btn_light category_btn">View All Dinnerware</a>
            </div>
          </div>

          <div class="tab-pane fade" id="cat_tea" role="tabpanel" aria-labelledby="cat_tea_tab" tabindex="0">
            <div class="row g-4">

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <img src="{{ asset('assets/images/pro-1.jpg') }}" class="product_img" alt="Dankotuwa Premium Infinity Platinum 17Pcs Tea set" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Infinity Platinum 17Pcs Tea set</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading">₹7,500.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <img src="{{ asset('assets/images/pro-7.jpg') }}" class="product_img" alt="Dankotuwa Premium Opus Shape Demi cup 1 Coffee cup &amp; 1 Saucer" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Opus Shape Demi cup 1 Coffee cup &amp; 1 Saucer</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading">₹350.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <img src="{{ asset('assets/images/pro-3.jpg') }}" class="product_img" alt="Dankotuwa Premium Opus Shape Non Stackable 1 tea cup &amp; 1 Saucer" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Opus Shape Non Stackable 1 tea cup &amp; 1 Saucer</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading">₹350.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 category_product_col">
                  <div class="product_card">
                    <div class="product_img_box">
                      <span class="product_badge">11% OFF</span>
                      <img src="{{ asset('assets/images/pro-6.jpg') }}" class="product_img" alt="Dankotuwa Premium Porcelain Colour Mug 2 Pcs" loading="lazy">
                    </div>
                    <div class="product_body">
                      <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</a></h3>
                      <div class="product_price_row">
                        <p class="product_price sub_heading"><del class="product_old_price">₹899.00</del> ₹799.00</p>
                        <button type="button" class="product_cart_btn" aria-label="Add to cart">
                          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                          <span class="product_cart_tip">Add to Cart</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

            <div class="text-center">
              <a href="{{ route('tea-and-coffee') }}" class="shuki_btn_outline shuki_btn_light category_btn">View All Tea and Coffee</a>
            </div>
          </div>

          <div class="tab-pane fade" id="cat_serveware" role="tabpanel" aria-labelledby="cat_serveware_tab" tabindex="0">
            <div class="row g-4">
              <div class="col-12">
                <div class="category_soon">
                  <span class="track_icon"><i class="fa-solid fa-hourglass-half" aria-hidden="true"></i></span>
                  <h3 class="sub_heading">Serveware is coming soon</h3>
                  <p>Platters, bowls and serving sets are on their way. In the meantime, explore our dinnerware and tea sets.</p>
                </div>
              </div>
            </div>

            <div class="text-center">
              <a href="{{ route('serveware') }}" class="shuki_btn_outline shuki_btn_light category_btn">View All Serveware</a>
            </div>
          </div>
        </div>

      </div>
      <!-- tab section -->

    </div>

  </div>
 </div>
<!-- our category section -->

<div class="clearfix"></div>

 <!-- special note and statement section -->
 

  <div class="clearfix"></div>

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


@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
