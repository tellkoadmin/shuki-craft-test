@extends('layouts.app')

@section('title', 'Checkout')
@section('description', 'Complete your Shuki Crafts order.')
@section('noindex', true)
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-3.jpg') }}" class="inner_banner_img" alt="Porcelain tea and coffee set">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li><a href="{{ route('cart') }}" class="shuki_hover_line">Cart</a></li>
        <li aria-current="page">Checkout</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Checkout</h1>
    <p class="inner_text">Almost there — enter your details to place your order.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- checkout section -->
 <div class="container-fluid bg_grey detail_section checkout_section">
  <div class="container">

    <a href="{{ route('cart') }}" class="detail_back shuki_hover_line"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i> Back to Cart</a>

    <form id="checkout_form" class="row g-4" action="#" method="post">
              @csrf

      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-12">

        <p class="checkout_notice"><i class="fa-regular fa-user" aria-hidden="true"></i> Returning customer? <button type="button" class="account_text_btn shuki_hover_line" data-account-tab="login">Click here to login</button></p>

        <!-- billing details -->
        <div class="checkout_box">
          <h2 class="sub_heading checkout_step"><span class="checkout_step_no" aria-hidden="true">1</span> Billing details</h2>
          <div class="row g-3">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="billing_first_name" class="shuki_label">First name <span aria-hidden="true">*</span></label>
                <input type="text" id="billing_first_name" name="billing_first_name" class="shuki_input" autocomplete="billing given-name" required>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="billing_last_name" class="shuki_label">Last name <span aria-hidden="true">*</span></label>
                <input type="text" id="billing_last_name" name="billing_last_name" class="shuki_input" autocomplete="billing family-name" required>
              </div>
              <div class="col-12">
                <label for="billing_company" class="shuki_label">Company name (optional)</label>
                <input type="text" id="billing_company" name="billing_company" class="shuki_input" autocomplete="billing organization">
              </div>
              <div class="col-12">
                <p class="shuki_label">Country / Region</p>
                <p class="checkout_country">India</p>
              </div>
              <div class="col-12">
                <label for="billing_address_1" class="shuki_label">Street address <span aria-hidden="true">*</span></label>
                <input type="text" id="billing_address_1" name="billing_address_1" class="shuki_input" placeholder="House number and street name" autocomplete="billing address-line1" required>
                <label for="billing_address_2" class="visually-hidden">Apartment, suite, unit, etc. (optional)</label>
                <input type="text" id="billing_address_2" name="billing_address_2" class="shuki_input checkout_address_2" placeholder="Apartment, suite, unit, etc. (optional)" autocomplete="billing address-line2">
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                <label for="billing_city" class="shuki_label">Town / City <span aria-hidden="true">*</span></label>
                <input type="text" id="billing_city" name="billing_city" class="shuki_input" autocomplete="billing address-level2" required>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                <label for="billing_state" class="shuki_label">State <span aria-hidden="true">*</span></label>
                <select id="billing_state" name="billing_state" class="shuki_input shuki_select" autocomplete="billing address-level1" required>
                  <option value="">Select a state</option><option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Ladakh">Ladakh</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Odisha">Odisha</option><option value="Puducherry">Puducherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option>
                </select>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                <label for="billing_postcode" class="shuki_label">PIN Code <span aria-hidden="true">*</span></label>
                <input type="text" id="billing_postcode" name="billing_postcode" class="shuki_input" inputmode="numeric" pattern="[0-9]{6}" maxlength="6" autocomplete="billing postal-code" required>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="billing_phone" class="shuki_label">Phone <span aria-hidden="true">*</span></label>
                <input type="tel" id="billing_phone" name="billing_phone" class="shuki_input" autocomplete="tel" required>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="billing_email" class="shuki_label">Email address <span aria-hidden="true">*</span></label>
                <input type="email" id="billing_email" name="billing_email" class="shuki_input" autocomplete="email" required>
              </div>
          </div>
        </div>
        <!-- billing details -->

        <!-- shipping details -->
        <div class="checkout_box">
          <h2 class="sub_heading checkout_step"><span class="checkout_step_no" aria-hidden="true">2</span> Shipping</h2>
          <label class="shuki_check checkout_ship_toggle"><input type="checkbox" id="ship_different" name="ship_to_different_address" aria-controls="shipping_fields" aria-expanded="false"> <span>Ship to a different address?</span></label>
          <div class="collapse" id="shipping_fields">
            <div class="row g-3 checkout_shipping_fields">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="shipping_first_name" class="shuki_label">First name <span aria-hidden="true">*</span></label>
                <input type="text" id="shipping_first_name" name="shipping_first_name" class="shuki_input" autocomplete="shipping given-name" data-required>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                <label for="shipping_last_name" class="shuki_label">Last name <span aria-hidden="true">*</span></label>
                <input type="text" id="shipping_last_name" name="shipping_last_name" class="shuki_input" autocomplete="shipping family-name" data-required>
              </div>
              <div class="col-12">
                <label for="shipping_company" class="shuki_label">Company name (optional)</label>
                <input type="text" id="shipping_company" name="shipping_company" class="shuki_input" autocomplete="shipping organization">
              </div>
              <div class="col-12">
                <p class="shuki_label">Country / Region</p>
                <p class="checkout_country">India</p>
              </div>
              <div class="col-12">
                <label for="shipping_address_1" class="shuki_label">Street address <span aria-hidden="true">*</span></label>
                <input type="text" id="shipping_address_1" name="shipping_address_1" class="shuki_input" placeholder="House number and street name" autocomplete="shipping address-line1" data-required>
                <label for="shipping_address_2" class="visually-hidden">Apartment, suite, unit, etc. (optional)</label>
                <input type="text" id="shipping_address_2" name="shipping_address_2" class="shuki_input checkout_address_2" placeholder="Apartment, suite, unit, etc. (optional)" autocomplete="shipping address-line2">
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                <label for="shipping_city" class="shuki_label">Town / City <span aria-hidden="true">*</span></label>
                <input type="text" id="shipping_city" name="shipping_city" class="shuki_input" autocomplete="shipping address-level2" data-required>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                <label for="shipping_state" class="shuki_label">State <span aria-hidden="true">*</span></label>
                <select id="shipping_state" name="shipping_state" class="shuki_input shuki_select" autocomplete="shipping address-level1" data-required>
                  <option value="">Select a state</option><option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Ladakh">Ladakh</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Odisha">Odisha</option><option value="Puducherry">Puducherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option>
                </select>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                <label for="shipping_postcode" class="shuki_label">PIN Code <span aria-hidden="true">*</span></label>
                <input type="text" id="shipping_postcode" name="shipping_postcode" class="shuki_input" inputmode="numeric" pattern="[0-9]{6}" maxlength="6" autocomplete="shipping postal-code" data-required>
              </div>
            </div>
          </div>
        </div>
        <!-- shipping details -->

        <!-- additional information -->
        <div class="checkout_box">
          <h2 class="sub_heading checkout_step"><span class="checkout_step_no" aria-hidden="true">3</span> Additional information</h2>
          <label for="order_comments" class="shuki_label">Order notes (optional)</label>
          <textarea id="order_comments" name="order_comments" class="shuki_input shuki_textarea" placeholder="Notes about your order, e.g. special notes for delivery." rows="4"></textarea>
        </div>
        <!-- additional information -->

      </div>

      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12">
        <!-- order summary -->
        <div class="cart_summary checkout_summary">
          <h2 class="heading cart_title">Your Order</h2>

          <ul class="checkout_items">
            <li class="checkout_item">
              <span class="checkout_item_img"><img src="{{ asset('assets/images/cup-set.jpg') }}" alt="" loading="lazy"><span class="checkout_item_qty" aria-label="Quantity 1">1</span></span>
              <span class="checkout_item_name">Dankotuwa Premium Vienna Blue 12 Pcs Tea set</span>
              <span class="checkout_item_price">₹6,250.00</span>
            </li>
            <li class="checkout_item">
              <span class="checkout_item_img"><img src="{{ asset('assets/images/pro-1.jpg') }}" alt="" loading="lazy"><span class="checkout_item_qty" aria-label="Quantity 1">1</span></span>
              <span class="checkout_item_name">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</span>
              <span class="checkout_item_price">₹799.00</span>
            </li>
            <li class="checkout_item">
              <span class="checkout_item_img"><img src="{{ asset('assets/images/pro-3.jpg') }}" alt="" loading="lazy"><span class="checkout_item_qty" aria-label="Quantity 1">1</span></span>
              <span class="checkout_item_name">Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set</span>
              <span class="checkout_item_price">₹2,700.00</span>
            </li>
          </ul>

          <div class="checkout_coupon">
            <label for="coupon_code" class="visually-hidden">Coupon code</label>
            <input type="text" id="coupon_code" name="coupon_code" class="shuki_input" placeholder="Coupon code">
            <button type="button" class="shuki_btn_outline shuki_btn_light checkout_coupon_btn">Apply</button>
          </div>

          <dl class="cart_totals checkout_totals">
            <div class="cart_totals_row">
              <dt class="sub_heading">Subtotal</dt>
              <dd class="sub_heading">₹9,749.00</dd>
            </div>
            <div class="cart_totals_row">
              <dt class="sub_heading">Shipping</dt>
              <dd class="sub_heading">Free</dd>
            </div>
            <div class="cart_totals_row cart_totals_grand">
              <dt class="heading">Total</dt>
              <dd class="heading">₹9,749.00</dd>
            </div>
          </dl>
          <p class="checkout_ship_note">Shipping is ₹100 under ₹5000, ₹200 between ₹5000 and ₹7500, and free above ₹7500.</p>

          <!-- payment -->
          <fieldset class="checkout_payment">
            <legend class="sub_heading">Payment</legend>
            <label class="checkout_method">
              <input type="radio" name="payment_method" value="online" checked required>
              <span class="checkout_method_body">
                <span class="checkout_method_title">Pay online</span>
                <span class="checkout_method_text">Credit / debit cards, UPI and netbanking through our secure payment partner.</span>
              </span>
            </label>
            <div class="detail_pay">
              <img src="{{ asset('assets/images/payment.png') }}" class="detail_pay_img" alt="We accept Visa, Mastercard, BHIM UPI, Paytm and PhonePe" width="1200" height="197" loading="lazy">
            </div>
          </fieldset>
          <!-- payment -->

          <p class="account_privacy">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="{{ route('privacy-policy') }}" class="shuki_hover_line">privacy policy</a>.</p>

          <label class="shuki_check checkout_terms"><input type="checkbox" name="terms" required> <span>I have read and agree to the website <a href="{{ route('terms') }}" class="shuki_hover_line">terms and conditions</a> <span aria-hidden="true">*</span></span></label>

          <button type="submit" class="detail_buy_btn cart_buy_btn checkout_place_btn">Place Order</button>
        </div>
        <!-- order summary -->
      </div>

    </form>

  </div>
 </div>
<!-- checkout section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush

@push('scripts')
<!-- checkout: different shipping address, place order -->
<script>
  (function () {
    var form = document.getElementById('checkout_form');
    if (!form) return;

    var toggle = document.getElementById('ship_different');
    var box = document.getElementById('shipping_fields');
    var collapse = bootstrap.Collapse.getOrCreateInstance(box, { toggle: false });

    // shipping fields are only required when shipping to a different address
    toggle.addEventListener('change', function () {
      box.querySelectorAll('[data-required]').forEach(function (field) { field.required = toggle.checked; });
      toggle.setAttribute('aria-expanded', toggle.checked);
      toggle.checked ? collapse.show() : collapse.hide();
    });

    // until payment is connected, a valid order goes to the thank you page
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      window.location.href = '{{ route('checkout.received') }}';
    });
  })();
</script>
<!-- checkout: different shipping address, place order -->
@endpush
