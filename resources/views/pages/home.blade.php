@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Explore our porcelain collection that blends tradition with modern aesthetics. Discover the timeless elegance of Shuki Crafts.')

@section('hero')
<!-- hero carousel -->
<div id="hero_carousel" class="carousel slide carousel-fade hero_carousel" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">

  <div class="carousel-indicators hero_indicators">
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item hero_slide active">
      <img src="{{ asset('assets/images/slider-1.jpg') }}" class="hero_img" alt="Gold-rimmed Dankotuwa porcelain dinnerware set on a dining table">
      <div class="hero_caption">
        <h2 class="hero_title main_heading">Transform Your Table.</h2>
        <p class="hero_text">Discover the difference premium Dankotuwa porcelain makes — for your home, your guests, and every moment worth celebrating.</p>
        <a href="{{ route('dinnerware') }}" class="shuki_btn_outline hero_btn">Explore More</a>
      </div>
    </div>

    <div class="carousel-item hero_slide">
      <img src="{{ asset('assets/images/slider-2.jpg') }}" class="hero_img" alt="Porcelain dinnerware collection">
      <div class="hero_caption">
        <h2 class="hero_title main_heading">Dine in Elegance.</h2>
        <p class="hero_text">Handcrafted dinnerware sets designed for everyday meals and unforgettable occasions.</p>
        <a href="{{ route('dinnerware') }}" class="shuki_btn_outline hero_btn">Explore More</a>
      </div>
    </div>

    <div class="carousel-item hero_slide">
      <img src="{{ asset('assets/images/slider-3.jpg') }}" class="hero_img" alt="Porcelain tea and coffee set">
      <div class="hero_caption">
        <h2 class="hero_title main_heading">The Art of Tea.</h2>
        <p class="hero_text">Fine porcelain tea and coffee sets that turn every cup into a quiet ritual.</p>
        <a href="{{ route('tea-and-coffee') }}" class="shuki_btn_outline hero_btn">Explore More</a>
      </div>
    </div>

    <div class="carousel-item hero_slide">
      <img src="{{ asset('assets/images/slider-4.jpg') }}" class="hero_img" alt="Porcelain serveware on a dining table">
      <div class="hero_caption">
        <h2 class="hero_title main_heading">Serve with Style.</h2>
        <p class="hero_text">Platters, bowls and serveware made to bring the whole table together.</p>
        <a href="{{ route('serveware') }}" class="shuki_btn_outline hero_btn">Explore More</a>
      </div>
    </div>

    <div class="carousel-item hero_slide">
      <img src="{{ asset('assets/images/slider-5.jpg') }}" class="hero_img" alt="Porcelain gift pack">
      <div class="hero_caption">
        <h2 class="hero_title main_heading">Gifts They'll Treasure.</h2>
        <p class="hero_text">Beautifully presented porcelain gifts for weddings, new homes and every celebration.</p>
        <a href="{{ route('gift-packs') }}" class="shuki_btn_outline hero_btn">Explore More</a>
      </div>
    </div>

  </div>
</div>
<!-- hero carousel -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- about us section -->
 <div class="container-fluid white_bg pt-5 pb-5">
  <div class="container">

    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 text-center m-auto">
      <h1 class="heading">where porcelain artistry meets timeless elegance.</h1>
      <p>At Shuki Crafts, we are passionate about the art of porcelain craftsmanship. Our journey began with a vision to blend tradition with contemporary aesthetics, creating exquisite porcelain pieces that elevate spaces and capture hearts.</p>
    </div>

  </div>
 </div>
<!-- about us section -->

<div class="clearfix"></div>

<!-- best seller product section -->
 <div class="container-fluid best_seller_section">
  <div class="row">

      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12 bg_black best_seller_intro">
        <h2 class="heading white_text">Shuki Crafts Bestseller Products</h2>
        <p class="white_text">Discover the difference premium Dankotuwa porcelain makes — for your home, your guests, and every moment worth celebrating.</p>
        <a href="{{ route('search') }}" class="shuki_btn_outline best_seller_btn">View All</a>
      </div>

       <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-12 bg_grey best_seller_products">
        <!-- product carousel -->
        <div class="owl-carousel best_seller_carousel">

          <div class="product_card">
            <div class="product_img_box">
              <span class="product_badge">11% OFF</span>
              <img src="{{ asset('assets/images/pro-1.jpg') }}" class="product_img" alt="Dankotuwa Premium Porcelain Colour Mug 2 Pcs" loading="lazy">
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

          <div class="product_card">
            <div class="product_img_box">
              <img src="{{ asset('assets/images/pro-2.jpg') }}" class="product_img" alt="Dankotuwa Premium Simplicity Shape Dinner plate 6 Pcs set" loading="lazy">
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

          <div class="product_card">
            <div class="product_img_box">
              <img src="{{ asset('assets/images/pro-3.jpg') }}" class="product_img" alt="Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set" loading="lazy">
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

          <div class="product_card">
            <div class="product_img_box">
              <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Eden Shape Dinner plate 6 Pcs set" loading="lazy">
            </div>
            <div class="product_body">
              <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Eden Shape Dinner plate 6 Pcs set</a></h3>
              <div class="product_price_row">
                <p class="product_price sub_heading">₹2,100.00</p>
                <button type="button" class="product_cart_btn" aria-label="Add to cart">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                  <span class="product_cart_tip">Add to Cart</span>
                </button>
              </div>
            </div>
          </div>

          <div class="product_card">
            <div class="product_img_box">
              <img src="{{ asset('assets/images/pro-5.jpg') }}" class="product_img" alt="Dankotuwa Premium Infinity Gold 21 Pcs Dinner set" loading="lazy">
            </div>
            <div class="product_body">
              <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Infinity Gold 21 Pcs Dinner set</a></h3>
              <div class="product_price_row">
                <p class="product_price sub_heading">₹13,500.00</p>
                <button type="button" class="product_cart_btn" aria-label="Add to cart">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                  <span class="product_cart_tip">Add to Cart</span>
                </button>
              </div>
            </div>
          </div>

          <div class="product_card">
            <div class="product_img_box">
              <img src="{{ asset('assets/images/pro-6.jpg') }}" class="product_img" alt="Dankotuwa Premium Lasting Rose 12Pcs Tea set" loading="lazy">
            </div>
            <div class="product_body">
              <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Lasting Rose 12Pcs Tea set</a></h3>
              <div class="product_price_row">
                <p class="product_price sub_heading">₹2,260.00</p>
                <button type="button" class="product_cart_btn" aria-label="Add to cart">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                  <span class="product_cart_tip">Add to Cart</span>
                </button>
              </div>
            </div>
          </div>

          <div class="product_card">
            <div class="product_img_box">
              <img src="{{ asset('assets/images/pro-7.jpg') }}" class="product_img" alt="Dankotuwa Premium Silver Mix 21 Pcs Dinner set" loading="lazy">
            </div>
            <div class="product_body">
              <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Silver Mix 21 Pcs Dinner set</a></h3>
              <div class="product_price_row">
                <p class="product_price sub_heading">₹14,050.00</p>
                <button type="button" class="product_cart_btn" aria-label="Add to cart">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                  <span class="product_cart_tip">Add to Cart</span>
                </button>
              </div>
            </div>
          </div>

        </div>

        <div class="best_seller_nav">
          <button type="button" class="best_seller_arrow best_seller_prev" aria-label="Previous products">
            <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="11 6 5 12 11 18"/></svg>
          </button>
          <button type="button" class="best_seller_arrow best_seller_next" aria-label="Next products">
            <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
          </button>
        </div>
        <!-- product carousel -->
      </div>

  </div>
 </div>
<!-- best seller product section -->

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

<!-- dankotuwa section -->

<div class="container mt-5">
  <div class="row">

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
        <h2 class="heading">Shuki Crafts Refined Dankotuwa Porcelain</h2>
        <p>Timeless beauty for tables that deserve distinction</p>
      </div>

  </div>
</div>

<div class="container-fluid bg_grey collection_section">
  <div class="row">

    <!-- types of cards section -->
    <div class="col-12">
      <div class="collection_grid">

        <div class="collection_tile collection_classic">
          <img src="{{ asset('assets/images/dankotuwa-1.jpg') }}" class="collection_img" alt="Black plates with gold cutlery and a linen napkin" loading="lazy">
          <span class="collection_panel"></span>
          <div class="collection_info">
            <h3 class="sub_heading white_text mb-1">Classic White</h3>
            <p class="white_text">Timeless elegance for everyday and formal dining</p>
            <div class="collection_btn_wrap">
              <div><a href="{{ route('dinnerware', ['type' => 'white-porcelain']) }}" class="shuki_btn_outline collection_btn">View All</a></div>
            </div>
          </div>
        </div>

        <div class="collection_tile collection_contemporary">
          <img src="{{ asset('assets/images/dankotuwa-2.jpg') }}" class="collection_img" alt="Dark green cup and saucer with gold rim" loading="lazy">
          <span class="collection_panel"></span>
          <div class="collection_info">
            <h3 class="sub_heading white_text mb-1">Contemporary Minimalist</h3>
            <p class="white_text">Clean lines and modern aesthetics for today's homes</p>
            <div class="collection_btn_wrap">
              <div><a href="{{ route('dinnerware', ['type' => 'dinner-plates']) }}" class="shuki_btn_outline collection_btn">View All</a></div>
            </div>
          </div>
        </div>

        <div class="collection_tile collection_heritage">
          <img src="{{ asset('assets/images/dankotuwa-3.jpg') }}" class="collection_img" alt="Gold-patterned plates, cup and saucer" loading="lazy">
          <span class="collection_panel"></span>
          <div class="collection_info">
            <h3 class="sub_heading white_text mb-1">Heritage Gold</h3>
            <p class="white_text">Sophisticated gold accents for special occasions</p>
            <div class="collection_btn_wrap">
              <div><a href="{{ route('search', ['q' => 'gold']) }}" class="shuki_btn_outline collection_btn">View All</a></div>
            </div>
          </div>
        </div>

        <div class="collection_tile collection_serving">
          <img src="{{ asset('assets/images/dankotuwa-4.jpg') }}" class="collection_img" alt="Speckled white plates, gold bowl and glassware" loading="lazy">
          <span class="collection_panel"></span>
          <div class="collection_info">
            <h3 class="sub_heading white_text mb-1">Serving &amp; Drinkware</h3>
            <p class="white_text">Platters, bowls, tea cups, and mugs to complete your table</p>
            <div class="collection_btn_wrap">
              <div><a href="{{ route('serveware') }}" class="shuki_btn_outline collection_btn">View All</a></div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- types of cards section -->

  </div>
</div>

<!-- dankotuwa section -->

<div class="clearfix"></div>

<!-- testimonial section -->
<div class="container-fluid bg_grey testi_section pb-0">
 <div class="container">
  <div class="row align-items-center">

    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 bg_black testi_intro">
      <img src="{{ asset('assets/images/cup.png') }}" alt="Blue floral porcelain cup and saucer with gold rim" class="testi_cup">
      <h2 class="heading white_text testi_heading">Thank You For Bringing Shuki Crafts Home</h2>
    </div>

    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 testi_content">
      <img src="{{ asset('assets/images/testi.svg') }}" alt="" class="testi_quote_icon" aria-hidden="true">

      <!-- testi carousel -->
      <div class="owl-carousel testi_carousel">

        <div class="testi_item">
          <p class="testi_text sub_heading">“Loved The Clean Rectangular Shape. The Earthy Finish Gives Them A Very Premium And Sophisticated Look.”</p>
          <p class="testi_name">Rohit Choudhary</p>
          <p class="testi_role">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>

        <div class="testi_item">
          <p class="testi_text sub_heading">“The Gold Rim Tea Set Was The Perfect Wedding Gift. Beautifully Packed And Even More Elegant In Person.”</p>
          <p class="testi_name">Ananya Perera</p>
          <p class="testi_role">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>

        <div class="testi_item">
          <p class="testi_text sub_heading">“Fast Dispatch And Every Piece Arrived Safely. The Dinner Set Has Become Our Everyday Favourite.”</p>
          <p class="testi_name">Kavindu Fernando</p>
          <p class="testi_role">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>

      </div>
      <!-- testi carousel -->

    </div>

  </div>
 </div>
</div>
<!-- testimonial section -->

<div class="clearfix"></div>

@include('partials.faq')

<div class="clearfix"></div>


@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
