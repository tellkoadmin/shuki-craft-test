@extends('layouts.app')

@section('title', 'Dankotuwa Premium Vienna Blue 12 Pcs Tea set')
@section('description', 'Embrace the art of tea with the Vienna Blue 12-piece tea set, featuring 6 cups and 6 saucers.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-1.jpg') }}" class="inner_banner_img" alt="Shuki Crafts porcelain dinnerware on a dining table">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li><a href="{{ route('dinnerware') }}" class="shuki_hover_line">Tea and Coffee</a></li>
        <li aria-current="page">Vienna Blue 12 Pcs Tea Set</li>
      </ol>
    </nav>
    <p class="inner_title main_heading">Tea and Coffee</p>
    <p class="inner_text">Discover the difference premium Dankotuwa porcelain makes — for your home, your guests, and every moment worth celebrating.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- product detail section -->
 <div class="container-fluid bg_grey detail_section">
  <div class="container">

    <a href="{{ route('dinnerware') }}" class="detail_back shuki_hover_line"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i> Back to All Product Page</a>

    <div class="row g-4">

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
        <!-- image carousel -->
        <div id="detail_carousel" class="carousel slide carousel-fade detail_gallery" data-bs-ride="false" data-bs-interval="false">

          <div class="carousel-inner detail_main">
              <div class="carousel-item active">
                <a href="{{ asset('assets/images/cup-set.jpg') }}" class="detail_zoom" data-fancybox="product_gallery" data-caption="Dankotuwa Premium Vienna Blue 12 Pcs Tea Set" aria-label="View larger image 1">
                  <img src="{{ asset('assets/images/cup-set.jpg') }}" class="detail_img" alt="Dankotuwa Premium Vienna Blue tea cup and saucer, view 1">
                </a>
              </div>

              <div class="carousel-item">
                <a href="{{ asset('assets/images/cup-set.jpg') }}" class="detail_zoom" data-fancybox="product_gallery" data-caption="Dankotuwa Premium Vienna Blue 12 Pcs Tea Set" aria-label="View larger image 2">
                  <img src="{{ asset('assets/images/cup-set.jpg') }}" class="detail_img" alt="Dankotuwa Premium Vienna Blue tea cup and saucer, view 2">
                </a>
              </div>

              <div class="carousel-item">
                <a href="{{ asset('assets/images/cup-set.jpg') }}" class="detail_zoom" data-fancybox="product_gallery" data-caption="Dankotuwa Premium Vienna Blue 12 Pcs Tea Set" aria-label="View larger image 3">
                  <img src="{{ asset('assets/images/cup-set.jpg') }}" class="detail_img" alt="Dankotuwa Premium Vienna Blue tea cup and saucer, view 3">
                </a>
              </div>

              <div class="carousel-item">
                <a href="{{ asset('assets/images/cup-set.jpg') }}" class="detail_zoom" data-fancybox="product_gallery" data-caption="Dankotuwa Premium Vienna Blue 12 Pcs Tea Set" aria-label="View larger image 4">
                  <img src="{{ asset('assets/images/cup-set.jpg') }}" class="detail_img" alt="Dankotuwa Premium Vienna Blue tea cup and saucer, view 4">
                </a>
              </div>
          </div>

          <div class="carousel-indicators detail_thumbs">
              <button type="button" data-bs-target="#detail_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Show image 1">
                <img src="{{ asset('assets/images/cup-set.jpg') }}" alt="">
              </button>
              <button type="button" data-bs-target="#detail_carousel" data-bs-slide-to="1" aria-label="Show image 2">
                <img src="{{ asset('assets/images/cup-set.jpg') }}" alt="">
              </button>
              <button type="button" data-bs-target="#detail_carousel" data-bs-slide-to="2" aria-label="Show image 3">
                <img src="{{ asset('assets/images/cup-set.jpg') }}" alt="">
              </button>
              <button type="button" data-bs-target="#detail_carousel" data-bs-slide-to="3" aria-label="Show image 4">
                <img src="{{ asset('assets/images/cup-set.jpg') }}" alt="">
              </button>
          </div>

        </div>
        <!-- image carousel -->
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
        <div class="detail_box">
          <!-- detail -->
          <p class="product_stock product_in_stock">In Stock</p>
          <h1 class="detail_title heading">Dankotuwa Premium Vienna Blue 12 Pcs Tea Set</h1>
          <p class="detail_text">Embrace the art of tea with the Vienna Blue 12-piece tea set. Immerse yourself in the delicate beauty of this collection, featuring 6 cups and 6 saucers, designed to elevate your tea-drinking experience.</p>

          <p class="detail_price heading">₹6,250.00</p>

          <div class="detail_actions">
            <div class="detail_qty">
              <button type="button" class="detail_qty_btn" data-step="-1" aria-label="Decrease quantity">−</button>
              <label for="detail_qty_input" class="visually-hidden">Quantity</label>
              <input type="number" id="detail_qty_input" class="detail_qty_input" value="1" min="1" max="10" inputmode="numeric">
              <button type="button" class="detail_qty_btn" data-step="1" aria-label="Increase quantity">+</button>
            </div>
            <button type="button" class="detail_cart_btn"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg><span class="detail_cart_label">Add to Cart</span></button>
            <a href="{{ route('checkout') }}" class="detail_buy_btn">Buy it Now</a>
          </div>

          <p class="detail_pay_label">Secure Checkout With</p>
          <div class="detail_pay">
              <img src="{{ asset('assets/images/payment.png') }}" class="detail_pay_img" alt="We accept Visa, Mastercard, BHIM UPI, Paytm and PhonePe" width="1200" height="197" loading="lazy">
            </div>

          <div class="accordion faq_box detail_accordion" id="detail_accordion">

            <div class="accordion-item faq_item">
              <h2 class="accordion-header" id="detail_features_head">
                <button class="accordion-button faq_btn sub_heading" type="button" data-bs-toggle="collapse" data-bs-target="#detail_features" aria-expanded="true" aria-controls="detail_features">Key Features</button>
              </h2>
              <div id="detail_features" class="accordion-collapse collapse show" aria-labelledby="detail_features_head" data-bs-parent="#detail_accordion">
                <div class="accordion-body faq_body">
                  <ul class="detail_list">
                    <li>Set Includes: 6 tea cups and 6 saucers, each thoughtfully crafted for a refined tea time.</li>
                    <li>Material: High-quality porcelain showcasing an intricate blue pattern.</li>
                    <li>Timeless Elegance: The Vienna Blue tea set adds a touch of classic charm to your tea rituals.</li>
                    <li>Perfect Pairing: Ideal for serving a variety of teas with grace and style.</li>
                    <li>Affordable Luxury: Enjoy the sophistication of fine tea service at an accessible price.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item faq_item">
              <h2 class="accordion-header" id="detail_info_head">
                <button class="accordion-button faq_btn sub_heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detail_info" aria-expanded="false" aria-controls="detail_info">Additional Information</button>
              </h2>
              <div id="detail_info" class="accordion-collapse collapse" aria-labelledby="detail_info_head" data-bs-parent="#detail_accordion">
                <div class="accordion-body faq_body">
                  <table class="detail_table">
                    <tr><th scope="row">Brand</th><td>Dankotuwa</td></tr>
                    <tr><th scope="row">Material</th><td>Porcelain</td></tr>
                    <tr><th scope="row">Pieces</th><td>12 (6 cups, 6 saucers)</td></tr>
                    <tr><th scope="row">Collection</th><td>Vienna Blue</td></tr>
                  </table>
                </div>
              </div>
            </div>

          </div>

          <div class="detail_review">
            <button type="button" class="shuki_btn_outline shuki_btn_light detail_review_btn" data-bs-toggle="modal" data-bs-target="#review_modal">Submit My Review</button>
            <fieldset class="detail_rating">
              <legend class="visually-hidden">Your rating</legend>
                <input type="radio" id="star_5" name="detail_rating" value="5" checked>
                <label for="star_5" title="5 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">5 stars</span></label>
                <input type="radio" id="star_4" name="detail_rating" value="4">
                <label for="star_4" title="4 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">4 stars</span></label>
                <input type="radio" id="star_3" name="detail_rating" value="3">
                <label for="star_3" title="3 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">3 stars</span></label>
                <input type="radio" id="star_2" name="detail_rating" value="2">
                <label for="star_2" title="2 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">2 stars</span></label>
                <input type="radio" id="star_1" name="detail_rating" value="1">
                <label for="star_1" title="1 star"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">1 star</span></label>
            </fieldset>
          </div>
          <!-- detail -->
        </div>
      </div>

    </div>

  </div>
 </div>
 <!-- product detail section -->

<div class="clearfix"></div>

  <!-- related product section -->
 <div class="container-fluid bg_grey related_section">
   <div class="container">
    <div class="row">

       <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 text-center m-auto related_head">
          <h2 class="heading">Related Products</h2>
          <p>Timeless beauty for tables that deserve distinction.</p>
       </div>

       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- related products sets -->
        <div class="row g-4">

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 listing_col">
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
          </div>

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 listing_col">
            <div class="product_card">
              <div class="product_img_box">
                <img src="{{ asset('assets/images/pro-2.jpg') }}" class="product_img" alt="Dankotuwa Premium Simplicity Shape Dinner plate 6 Pcs set" loading="lazy">
              </div>
              <div class="product_body">
                <p class="product_stock product_in_stock">In Stock</p>
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

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 listing_col">
            <div class="product_card">
              <div class="product_img_box">
                <img src="{{ asset('assets/images/pro-3.jpg') }}" class="product_img" alt="Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set" loading="lazy">
              </div>
              <div class="product_body">
                <p class="product_stock product_in_stock">In Stock</p>
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

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 listing_col">
            <div class="product_card">
              <div class="product_img_box">
                <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Angel 21 Pcs Dinner set" loading="lazy">
              </div>
              <div class="product_body">
                <p class="product_stock product_in_stock">In Stock</p>
                <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Angel 21 Pcs Dinner set</a></h3>
                <div class="product_price_row">
                  <p class="product_price sub_heading">₹12,500.00</p>
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
        <!-- related products sets -->
       </div>

    </div>
   </div>
 </div>
  <!-- related product section -->

<div class="clearfix"></div>


<!-- statement section -->

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
<!-- statement section -->

<div class="clearfix"></div>

@include('partials.faq')

<div class="clearfix"></div>


@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->


<!-- review popup -->
<div class="modal fade account_modal" id="review_modal" tabindex="-1" aria-labelledby="review_title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content account_box">
      <div class="account_main">
        <button type="button" class="search_close account_close" data-bs-dismiss="modal" aria-label="Close">
          <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
        </button>
        <h2 id="review_title" class="sub_heading">Write a review</h2>
        <p class="review_product">Dankotuwa Premium Vienna Blue 12 Pcs Tea Set</p>

        <form class="account_form review_form" action="#" method="post">
              @csrf
          <fieldset class="review_rating_field">
            <legend class="shuki_label">Your rating <span aria-hidden="true">*</span></legend>
            <div class="detail_rating">
                <input type="radio" id="review_star_5" name="review_rating" value="5" checked required>
                <label for="review_star_5" title="5 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">5 stars</span></label>
                <input type="radio" id="review_star_4" name="review_rating" value="4" required>
                <label for="review_star_4" title="4 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">4 stars</span></label>
                <input type="radio" id="review_star_3" name="review_rating" value="3" required>
                <label for="review_star_3" title="3 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">3 stars</span></label>
                <input type="radio" id="review_star_2" name="review_rating" value="2" required>
                <label for="review_star_2" title="2 stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">2 stars</span></label>
                <input type="radio" id="review_star_1" name="review_rating" value="1" required>
                <label for="review_star_1" title="1 star"><i class="fa-solid fa-star" aria-hidden="true"></i><span class="visually-hidden">1 star</span></label>
            </div>
          </fieldset>
          <div class="account_field">
            <label for="review_text" class="shuki_label">Your review <span aria-hidden="true">*</span></label>
            <textarea id="review_text" name="comment" class="shuki_input shuki_textarea" rows="4" required></textarea>
          </div>
          <div class="row g-3">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
              <label for="review_name" class="shuki_label">Name <span aria-hidden="true">*</span></label>
              <input type="text" id="review_name" name="author" class="shuki_input" autocomplete="name" required>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
              <label for="review_email" class="shuki_label">Email <span aria-hidden="true">*</span></label>
              <input type="email" id="review_email" name="email" class="shuki_input" autocomplete="email" required>
            </div>
          </div>
          <button type="submit" class="detail_buy_btn shuki_submit_btn account_submit">Submit Review</button>
        </form>

        <div class="review_done" hidden>
          <span class="received_check" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
          <p class="sub_heading">Thank you for your review</p>
          <p>Your review is awaiting approval.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- review popup -->
@endpush

@push('scripts')
<!-- product listing: sort and products per row -->
<script>
  (function () {
    var grid = document.querySelector('.listing_grid');
    if (!grid) return;

    var sort = document.getElementById('listing_sort');
    var view = document.getElementById('listing_view');
    var cols = Array.prototype.slice.call(grid.querySelectorAll('.listing_col'));

    sort.addEventListener('change', function () {
      var sorted = cols.slice().sort(function (a, b) {
        if (sort.value === 'price_low') return a.dataset.price - b.dataset.price;
        if (sort.value === 'price_high') return b.dataset.price - a.dataset.price;
        if (sort.value === 'newest') return b.dataset.popular - a.dataset.popular;
        return a.dataset.popular - b.dataset.popular;
      });
      sorted.forEach(function (col) { grid.appendChild(col); });
      grid.classList.remove('listing_refresh');
      void grid.offsetWidth;
      grid.classList.add('listing_refresh');
    });

    view.addEventListener('change', function () {
      var four = view.value === '4';
      cols.forEach(function (col) {
        col.classList.toggle('col-xxl-3', four);
        col.classList.toggle('col-xl-3', four);
        col.classList.toggle('col-xxl-4', !four);
        col.classList.toggle('col-xl-4', !four);
      });
    });
  })();
</script>
<!-- product listing: sort and products per row -->

<!-- product detail: quantity and add to cart -->
<script>
  (function () {
    var input = document.getElementById('detail_qty_input');
    if (!input) return;

    document.querySelectorAll('.detail_qty_btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var min = +input.min || 1;
        var max = +input.max || 99;
        var next = (parseInt(input.value, 10) || min) + +btn.dataset.step;
        input.value = Math.min(max, Math.max(min, next));
      });
    });

    input.addEventListener('change', function () {
      var min = +input.min || 1;
      var max = +input.max || 99;
      input.value = Math.min(max, Math.max(min, parseInt(input.value, 10) || min));
    });

    // short confirmation on the button until the cart is connected
    var cart = document.querySelector('.detail_cart_btn');
    var label = cart.querySelector('.detail_cart_label');
    cart.addEventListener('click', function () {
      label.textContent = 'Added (' + input.value + ')';
      cart.classList.add('detail_cart_added');
      clearTimeout(cart._timer);
      cart._timer = setTimeout(function () {
        label.textContent = 'Add to Cart';
        cart.classList.remove('detail_cart_added');
      }, 2000);
    });
  })();
</script>
<!-- product detail: quantity and add to cart -->

<!-- product detail: review popup -->
<script>
  (function () {
    var modal_el = document.getElementById('review_modal');
    if (!modal_el) return;
    var form = modal_el.querySelector('.review_form');
    var done = modal_el.querySelector('.review_done');

    // start the popup with the rating chosen beside the button
    modal_el.addEventListener('show.bs.modal', function () {
      var picked = document.querySelector('input[name="detail_rating"]:checked');
      if (picked) document.getElementById('review_star_' + picked.value).checked = true;
      form.hidden = false;
      done.hidden = true;
    });

    // until reviews are connected, show the "awaiting approval" message
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      form.hidden = true;
      done.hidden = false;
      form.reset();
    });
  })();
</script>
<!-- product detail: review popup -->
@endpush
