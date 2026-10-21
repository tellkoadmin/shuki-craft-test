@extends('layouts.app')

@section('title', 'Cart')
@section('description', 'Review the porcelain in your Shuki Crafts cart.')
@section('noindex', true)
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-1.jpg') }}" class="inner_banner_img" alt="Shuki Crafts porcelain dinnerware on a dining table">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Cart</li>
      </ol>
    </nav>
    <p class="inner_title main_heading">Cart</p>
    <p class="inner_text">Discover the difference premium Dankotuwa porcelain makes — for your home, your guests, and every moment worth celebrating.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- cart section -->
 <div class="container-fluid bg_grey detail_section">
  <div class="container">

    <a href="{{ route('dinnerware') }}" class="detail_back shuki_hover_line"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i> Back to All Product Page</a>

    <div class="row g-4">

      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-12">
        <!-- cart list -->
        <div class="cart_list">
        <div class="cart_item" data-price="6250">
          <a href="{{ route('product') }}" class="cart_item_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="cart_item_img" alt="Dankotuwa Premium Vienna Blue 12 Pcs Tea set" loading="lazy">
          </a>
          <div class="cart_item_body">
            <h2 class="cart_item_name"><a href="{{ route('product') }}">Dankotuwa Premium Vienna Blue 12 Pcs Tea set</a></h2>
            <div class="cart_item_row">
              <div class="detail_qty">
                <button type="button" class="detail_qty_btn cart_qty_btn" data-step="-1" aria-label="Decrease quantity">−</button>
                <label for="cart_qty_1" class="visually-hidden">Quantity</label>
                <input type="number" id="cart_qty_1" class="detail_qty_input cart_qty_input" value="1" min="1" max="10" inputmode="numeric">
                <button type="button" class="detail_qty_btn cart_qty_btn" data-step="1" aria-label="Increase quantity">+</button>
              </div>
              <div class="cart_item_price">
                <span class="cart_item_label">Price</span>
                <span class="cart_item_value sub_heading">₹6,250.00</span>
              </div>
            </div>
            <div class="cart_item_row">
              <p class="cart_item_total">Total - <span class="cart_item_total_value">₹6,250.00</span></p>
              <button type="button" class="cart_remove_btn" aria-label="Remove Dankotuwa Premium Vienna Blue 12 Pcs Tea set from cart"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16"/><path d="M9 7V4.5h6V7"/><path d="M6 7l1 13h10l1-13"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg></button>
            </div>
          </div>
        </div>

        <div class="cart_item" data-price="799">
          <a href="{{ route('product') }}" class="cart_item_img_box">
            <img src="{{ asset('assets/images/pro-1.jpg') }}" class="cart_item_img" alt="Dankotuwa Premium Porcelain Colour Mug 2 Pcs" loading="lazy">
          </a>
          <div class="cart_item_body">
            <h2 class="cart_item_name"><a href="{{ route('product') }}">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</a></h2>
            <div class="cart_item_row">
              <div class="detail_qty">
                <button type="button" class="detail_qty_btn cart_qty_btn" data-step="-1" aria-label="Decrease quantity">−</button>
                <label for="cart_qty_2" class="visually-hidden">Quantity</label>
                <input type="number" id="cart_qty_2" class="detail_qty_input cart_qty_input" value="1" min="1" max="10" inputmode="numeric">
                <button type="button" class="detail_qty_btn cart_qty_btn" data-step="1" aria-label="Increase quantity">+</button>
              </div>
              <div class="cart_item_price">
                <span class="cart_item_label">Price</span>
                <span class="cart_item_value sub_heading">₹799.00</span>
              </div>
            </div>
            <div class="cart_item_row">
              <p class="cart_item_total">Total - <span class="cart_item_total_value">₹799.00</span></p>
              <button type="button" class="cart_remove_btn" aria-label="Remove Dankotuwa Premium Porcelain Colour Mug 2 Pcs from cart"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16"/><path d="M9 7V4.5h6V7"/><path d="M6 7l1 13h10l1-13"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg></button>
            </div>
          </div>
        </div>

        <div class="cart_item" data-price="2700">
          <a href="{{ route('product') }}" class="cart_item_img_box">
            <img src="{{ asset('assets/images/pro-3.jpg') }}" class="cart_item_img" alt="Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set" loading="lazy">
          </a>
          <div class="cart_item_body">
            <h2 class="cart_item_name"><a href="{{ route('product') }}">Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set</a></h2>
            <div class="cart_item_row">
              <div class="detail_qty">
                <button type="button" class="detail_qty_btn cart_qty_btn" data-step="-1" aria-label="Decrease quantity">−</button>
                <label for="cart_qty_3" class="visually-hidden">Quantity</label>
                <input type="number" id="cart_qty_3" class="detail_qty_input cart_qty_input" value="1" min="1" max="10" inputmode="numeric">
                <button type="button" class="detail_qty_btn cart_qty_btn" data-step="1" aria-label="Increase quantity">+</button>
              </div>
              <div class="cart_item_price">
                <span class="cart_item_label">Price</span>
                <span class="cart_item_value sub_heading">₹2,700.00</span>
              </div>
            </div>
            <div class="cart_item_row">
              <p class="cart_item_total">Total - <span class="cart_item_total_value">₹2,700.00</span></p>
              <button type="button" class="cart_remove_btn" aria-label="Remove Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set from cart"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16"/><path d="M9 7V4.5h6V7"/><path d="M6 7l1 13h10l1-13"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg></button>
            </div>
          </div>
        </div>

          <div class="cart_empty" hidden>
            <p>Your cart is empty.</p>
          </div>
        </div>

        <div class="cart_more">
          <a href="{{ route('dinnerware') }}" class="shuki_btn_outline shuki_btn_light cart_more_btn">Shop More</a>
        </div>
        <!-- cart list -->
      </div>

      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12">
        <!-- cart summary -->
        <div class="cart_summary">
          <h1 class="cart_title heading">Cart</h1>
          <p class="cart_intro">Review your items before you check out.</p>

          <dl class="cart_totals">
            <div class="cart_totals_row">
              <dt class="sub_heading">Sub Total</dt>
              <dd class="cart_subtotal sub_heading">₹9,749.00</dd>
            </div>
            <div class="cart_totals_row">
              <dt class="sub_heading">Discount</dt>
              <dd class="cart_discount sub_heading" data-discount="0">₹0.00</dd>
            </div>
            <div class="cart_totals_row cart_totals_grand">
              <dt class="heading">Total</dt>
              <dd class="cart_grand_total heading">₹9,749.00</dd>
            </div>
          </dl>

          <p class="detail_pay_label">Secure Checkout With</p>
          <div class="detail_pay">
              <img src="{{ asset('assets/images/payment.png') }}" class="detail_pay_img" alt="We accept Visa, Mastercard, BHIM UPI, Paytm and PhonePe" width="1200" height="197" loading="lazy">
            </div>

          <a href="{{ route('checkout') }}" class="detail_buy_btn cart_buy_btn">Buy it Now</a>
        </div>
        <!-- cart summary -->
      </div>

    </div>

  </div>
 </div>
 <!-- cart section -->

<div class="clearfix"></div>

  <!-- related product section -->
 <div class="container-fluid bg_grey related_section">
   <div class="container">
    <div class="row">

       <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 text-center m-auto related_head">
          <h2 class="heading">You May Also Like</h2>
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

<!-- cart: quantities, remove and totals -->
<script>
  (function () {
    var list = document.querySelector('.cart_list');
    if (!list) return;

    var format = function (n) {
      return '₹' + n.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    };

    function clamp(input) {
      var min = +input.min || 1;
      var max = +input.max || 99;
      input.value = Math.min(max, Math.max(min, parseInt(input.value, 10) || min));
    }

    function update() {
      var subtotal = 0;
      var count = 0;
      var items = list.querySelectorAll('.cart_item');

      items.forEach(function (item) {
        var qty = +item.querySelector('.cart_qty_input').value;
        var line = qty * +item.dataset.price;
        item.querySelector('.cart_item_total_value').textContent = format(line);
        subtotal += line;
        count += qty;
      });

      // the menu cart icon shows the same number of items as this page
      if (window.shuki_cart) window.shuki_cart.set(count);

      var discount = +document.querySelector('.cart_discount').dataset.discount || 0;
      document.querySelector('.cart_subtotal').textContent = format(subtotal);
      document.querySelector('.cart_discount').textContent = format(discount);
      document.querySelector('.cart_grand_total').textContent = format(Math.max(0, subtotal - discount));
      list.querySelector('.cart_empty').hidden = items.length !== 0;
      document.querySelector('.cart_buy_btn').classList.toggle('cart_buy_disabled', items.length === 0);
    }

    list.addEventListener('click', function (e) {
      var step = e.target.closest('.cart_qty_btn');
      if (step) {
        var input = step.parentElement.querySelector('.cart_qty_input');
        input.value = (+input.value || 1) + +step.dataset.step;
        clamp(input);
        update();
        return;
      }

      var remove = e.target.closest('.cart_remove_btn');
      if (remove) {
        var item = remove.closest('.cart_item');
        item.classList.add('cart_item_removing');
        setTimeout(function () { item.remove(); update(); }, 400);
      }
    });

    list.addEventListener('change', function (e) {
      if (e.target.classList.contains('cart_qty_input')) {
        clamp(e.target);
        update();
      }
    });

    update();
  })();
</script>
<!-- cart: quantities, remove and totals -->
@endpush
