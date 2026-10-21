@extends('layouts.app')

@section('title', 'My account')
@section('description', 'Your Shuki Crafts account: orders, addresses and personal details.')
@section('noindex', true)
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/dankotuwa-4.jpg') }}" class="inner_banner_img" alt="Porcelain plates and gold cutlery on a dark table">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">My Account</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">My Account</h1>
    <p class="inner_text">Track your orders and manage your details.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- my account section -->
 <div class="container-fluid bg_grey policy_section account_section">
  <div class="container">
    <div class="row g-4">

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-12">
        <aside class="policy_nav account_nav" aria-label="Account menu">
          <div class="account_profile">
            <span class="account_avatar" aria-hidden="true">RC</span>
            <div>
              <p class="account_name">Rohit Choudhary</p>
              <p class="account_email" title="rohit.choudhary@example.com">rohit.choudhary@example.com</p>
            </div>
          </div>
          <ul class="policy_nav_list" role="tablist" aria-orientation="vertical">
              <li role="presentation">
                <button class="policy_nav_link account_tab active" id="acc_dashboard_tab" data-bs-toggle="pill" data-bs-target="#acc_dashboard" type="button" role="tab" aria-controls="acc_dashboard" aria-selected="true"><i class="fa-solid fa-gauge" aria-hidden="true"></i> Dashboard</button>
              </li>
              <li role="presentation">
                <button class="policy_nav_link account_tab" id="acc_ongoing_tab" data-bs-toggle="pill" data-bs-target="#acc_ongoing" type="button" role="tab" aria-controls="acc_ongoing" aria-selected="false"><i class="fa-solid fa-truck-fast" aria-hidden="true"></i> Ongoing Orders</button>
              </li>
              <li role="presentation">
                <button class="policy_nav_link account_tab" id="acc_orders_tab" data-bs-toggle="pill" data-bs-target="#acc_orders" type="button" role="tab" aria-controls="acc_orders" aria-selected="false"><i class="fa-solid fa-box" aria-hidden="true"></i> My Orders</button>
              </li>
              <li role="presentation">
                <button class="policy_nav_link account_tab" id="acc_addresses_tab" data-bs-toggle="pill" data-bs-target="#acc_addresses" type="button" role="tab" aria-controls="acc_addresses" aria-selected="false"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Addresses</button>
              </li>
              <li role="presentation">
                <button class="policy_nav_link account_tab" id="acc_details_tab" data-bs-toggle="pill" data-bs-target="#acc_details" type="button" role="tab" aria-controls="acc_details" aria-selected="false"><i class="fa-solid fa-user" aria-hidden="true"></i> Personal Details</button>
              </li>
              <li><a href="{{ route('home') }}" class="policy_nav_link account_logout"><i class="fa-solid fa-right-from-bracket" aria-hidden="true"></i> Log out</a></li>
          </ul>
        </aside>
      </div>

      <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-12">
        <div class="tab-content account_content">

          <!-- dashboard -->
          <div class="tab-pane fade show active" id="acc_dashboard" role="tabpanel" aria-labelledby="acc_dashboard_tab" tabindex="0">
            <div class="policy_box">
              <h2 class="heading">Hello, Rohit</h2>
              <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>

              <div class="row g-3 account_stats">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                  <div class="account_stat"><i class="fa-solid fa-box" aria-hidden="true"></i><p class="heading">5</p><p>Total orders</p></div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                  <div class="account_stat"><i class="fa-solid fa-truck-fast" aria-hidden="true"></i><p class="heading">2</p><p>Ongoing orders</p></div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12">
                  <div class="account_stat"><i class="fa-solid fa-circle-check" aria-hidden="true"></i><p class="heading">3</p><p>Delivered</p></div>
                </div>
              </div>

              <div class="account_block_head">
                <h3 class="sub_heading">Latest ongoing order</h3>
                <button type="button" class="account_text_btn shuki_hover_line" data-account-goto="ongoing">View all ongoing orders</button>
              </div>
            </div>

            <div class="order_card">
              <div class="order_card_head">
                <div>
                  <p class="order_card_no">Order #SC1046</p>
                  <p class="order_card_meta">Placed on 20 Oct 2026 &middot; 1 item &middot; ₹6,450.00</p>
                </div>
                <span class="order_status order_status_processing">Processing</span>
              </div>
              <ul class="order_items">
                  <li class="order_item">
                    <img src="{{ asset('assets/images/cup-set.jpg') }}" class="order_item_img" alt="" loading="lazy">
                    <div class="order_item_info">
                      <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Vienna Blue 12 Pcs Tea set</a>
                      <span class="order_item_meta">Qty 1 &middot; ₹6,250.00</span>
                    </div>
                  </li>
              </ul>
              <ol class="order_tracker" aria-label="Order progress: Packed">
                  <li class="order_step order_step_done"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Order placed</span></li>
                  <li class="order_step order_step_current"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Packed</span></li>
                  <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Shipped</span></li>
                  <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Delivered</span></li>
                </ol>
              <div class="order_card_foot">
                <p class="order_eta">Expected delivery: <strong>27 Oct 2026</strong></p>
                <div class="order_card_actions">
                  <a href="{{ route('order-tracking') }}" class="detail_buy_btn shuki_submit_btn order_btn">Track Order</a>
                  <a href="{{ route('contact') }}" class="shuki_btn_outline shuki_btn_light order_btn_light">Need Help?</a>
                </div>
              </div>
            </div>

            <div class="row g-3 account_quick">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12"><button type="button" class="account_quick_link" data-account-goto="orders"><i class="fa-solid fa-box" aria-hidden="true"></i> My Orders</button></div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12"><button type="button" class="account_quick_link" data-account-goto="addresses"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Addresses</button></div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12"><button type="button" class="account_quick_link" data-account-goto="details"><i class="fa-solid fa-user" aria-hidden="true"></i> Personal Details</button></div>
            </div>
          </div>
          <!-- dashboard -->

          <!-- ongoing orders -->
          <div class="tab-pane fade" id="acc_ongoing" role="tabpanel" aria-labelledby="acc_ongoing_tab" tabindex="0">
            <div class="policy_box account_head_box">
              <h2 class="heading">Ongoing Orders</h2>
              <p>Orders that are on their way to you. We generally take 4-7 business days for delivering the orders.</p>
            </div>

            <div class="order_card">
              <div class="order_card_head">
                <div>
                  <p class="order_card_no">Order #SC1046</p>
                  <p class="order_card_meta">Placed on 20 Oct 2026 &middot; 1 item &middot; ₹6,450.00</p>
                </div>
                <span class="order_status order_status_processing">Processing</span>
              </div>
              <ul class="order_items">
                  <li class="order_item">
                    <img src="{{ asset('assets/images/cup-set.jpg') }}" class="order_item_img" alt="" loading="lazy">
                    <div class="order_item_info">
                      <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Vienna Blue 12 Pcs Tea set</a>
                      <span class="order_item_meta">Qty 1 &middot; ₹6,250.00</span>
                    </div>
                  </li>
              </ul>
              <ol class="order_tracker" aria-label="Order progress: Packed">
                  <li class="order_step order_step_done"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Order placed</span></li>
                  <li class="order_step order_step_current"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Packed</span></li>
                  <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Shipped</span></li>
                  <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Delivered</span></li>
                </ol>
              <div class="order_card_foot">
                <p class="order_eta">Expected delivery: <strong>27 Oct 2026</strong></p>
                <div class="order_card_actions">
                  <a href="{{ route('order-tracking') }}" class="detail_buy_btn shuki_submit_btn order_btn">Track Order</a>
                  <a href="{{ route('contact') }}" class="shuki_btn_outline shuki_btn_light order_btn_light">Need Help?</a>
                </div>
              </div>
            </div>

            <div class="order_card">
              <div class="order_card_head">
                <div>
                  <p class="order_card_no">Order #SC1043</p>
                  <p class="order_card_meta">Placed on 16 Oct 2026 &middot; 2 items &middot; ₹2,999.00</p>
                </div>
                <span class="order_status order_status_shipped">Shipped</span>
              </div>
              <ul class="order_items">
                  <li class="order_item">
                    <img src="{{ asset('assets/images/pro-3.jpg') }}" class="order_item_img" alt="" loading="lazy">
                    <div class="order_item_info">
                      <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set</a>
                      <span class="order_item_meta">Qty 1 &middot; ₹2,100.00</span>
                    </div>
                  </li>
                  <li class="order_item">
                    <img src="{{ asset('assets/images/pro-1.jpg') }}" class="order_item_img" alt="" loading="lazy">
                    <div class="order_item_info">
                      <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</a>
                      <span class="order_item_meta">Qty 1 &middot; ₹799.00</span>
                    </div>
                  </li>
              </ul>
              <ol class="order_tracker" aria-label="Order progress: Shipped">
                  <li class="order_step order_step_done"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Order placed</span></li>
                  <li class="order_step order_step_done"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Packed</span></li>
                  <li class="order_step order_step_current"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Shipped</span></li>
                  <li class="order_step"><span class="order_step_dot" aria-hidden="true"></span><span class="order_step_label">Delivered</span></li>
                </ol>
              <div class="order_card_foot">
                <p class="order_eta">Expected delivery: <strong>22 Oct 2026</strong></p>
                <div class="order_card_actions">
                  <a href="{{ route('order-tracking') }}" class="detail_buy_btn shuki_submit_btn order_btn">Track Order</a>
                  <a href="{{ route('contact') }}" class="shuki_btn_outline shuki_btn_light order_btn_light">Need Help?</a>
                </div>
              </div>
            </div>

          </div>
          <!-- ongoing orders -->

          <!-- my orders -->
          <div class="tab-pane fade" id="acc_orders" role="tabpanel" aria-labelledby="acc_orders_tab" tabindex="0">
            <div class="policy_box">
              <h2 class="heading">My Orders</h2>
              <table class="order_table">
                <thead>
                  <tr><th scope="col">Order</th><th scope="col">Date</th><th scope="col">Status</th><th scope="col">Total</th><th scope="col"><span class="visually-hidden">Actions</span></th></tr>
                </thead>
                <tbody>
                <tr class="order_row">
                  <th scope="row" data-label="Order">#SC1046</th>
                  <td data-label="Date">20 Oct 2026</td>
                  <td data-label="Status"><span class="order_status order_status_processing">Processing</span></td>
                  <td data-label="Total">₹6,450.00 <span class="order_count">for 1 item</span></td>
                  <td data-label="Actions"><button type="button" class="order_view_btn collapsed" data-bs-toggle="collapse" data-bs-target="#order_detail_sc1046" aria-expanded="false" aria-controls="order_detail_sc1046">View <i class="fa-solid fa-chevron-down" aria-hidden="true"></i></button></td>
                </tr>
                <tr class="order_detail_row">
                  <td colspan="5">
                    <div class="collapse" id="order_detail_sc1046">
                      <div class="order_detail">
                        <ul class="order_items">
                          <li class="order_item">
                            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="order_item_img" alt="" loading="lazy">
                            <div class="order_item_info">
                              <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Vienna Blue 12 Pcs Tea set</a>
                              <span class="order_item_meta">Qty 1 &middot; ₹6,250.00</span>
                            </div>
                          </li>
                        </ul>
                        <dl class="order_sums">
                          <div><dt>Subtotal</dt><dd>₹6,250.00</dd></div>
                          <div><dt>Shipping</dt><dd>₹200.00</dd></div>
                          <div class="order_sums_total"><dt>Total</dt><dd>₹6,450.00</dd></div>
                        </dl>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="order_row">
                  <th scope="row" data-label="Order">#SC1043</th>
                  <td data-label="Date">16 Oct 2026</td>
                  <td data-label="Status"><span class="order_status order_status_shipped">Shipped</span></td>
                  <td data-label="Total">₹2,999.00 <span class="order_count">for 2 items</span></td>
                  <td data-label="Actions"><button type="button" class="order_view_btn collapsed" data-bs-toggle="collapse" data-bs-target="#order_detail_sc1043" aria-expanded="false" aria-controls="order_detail_sc1043">View <i class="fa-solid fa-chevron-down" aria-hidden="true"></i></button></td>
                </tr>
                <tr class="order_detail_row">
                  <td colspan="5">
                    <div class="collapse" id="order_detail_sc1043">
                      <div class="order_detail">
                        <ul class="order_items">
                          <li class="order_item">
                            <img src="{{ asset('assets/images/pro-3.jpg') }}" class="order_item_img" alt="" loading="lazy">
                            <div class="order_item_info">
                              <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Aurora Shape Dinner plate 6 Pcs set</a>
                              <span class="order_item_meta">Qty 1 &middot; ₹2,100.00</span>
                            </div>
                          </li>
                          <li class="order_item">
                            <img src="{{ asset('assets/images/pro-1.jpg') }}" class="order_item_img" alt="" loading="lazy">
                            <div class="order_item_info">
                              <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</a>
                              <span class="order_item_meta">Qty 1 &middot; ₹799.00</span>
                            </div>
                          </li>
                        </ul>
                        <dl class="order_sums">
                          <div><dt>Subtotal</dt><dd>₹2,899.00</dd></div>
                          <div><dt>Shipping</dt><dd>₹100.00</dd></div>
                          <div class="order_sums_total"><dt>Total</dt><dd>₹2,999.00</dd></div>
                        </dl>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="order_row">
                  <th scope="row" data-label="Order">#SC1031</th>
                  <td data-label="Date">28 Sep 2026</td>
                  <td data-label="Status"><span class="order_status order_status_delivered">Delivered</span></td>
                  <td data-label="Total">₹899.00 <span class="order_count">for 1 item</span></td>
                  <td data-label="Actions"><button type="button" class="order_view_btn collapsed" data-bs-toggle="collapse" data-bs-target="#order_detail_sc1031" aria-expanded="false" aria-controls="order_detail_sc1031">View <i class="fa-solid fa-chevron-down" aria-hidden="true"></i></button></td>
                </tr>
                <tr class="order_detail_row">
                  <td colspan="5">
                    <div class="collapse" id="order_detail_sc1031">
                      <div class="order_detail">
                        <ul class="order_items">
                          <li class="order_item">
                            <img src="{{ asset('assets/images/pro-1.jpg') }}" class="order_item_img" alt="" loading="lazy">
                            <div class="order_item_info">
                              <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Porcelain Colour Mug 2 Pcs</a>
                              <span class="order_item_meta">Qty 1 &middot; ₹799.00</span>
                            </div>
                          </li>
                        </ul>
                        <dl class="order_sums">
                          <div><dt>Subtotal</dt><dd>₹799.00</dd></div>
                          <div><dt>Shipping</dt><dd>₹100.00</dd></div>
                          <div class="order_sums_total"><dt>Total</dt><dd>₹899.00</dd></div>
                        </dl>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="order_row">
                  <th scope="row" data-label="Order">#SC1024</th>
                  <td data-label="Date">12 Sep 2026</td>
                  <td data-label="Status"><span class="order_status order_status_delivered">Delivered</span></td>
                  <td data-label="Total">₹7,150.00 <span class="order_count">for 1 item</span></td>
                  <td data-label="Actions"><button type="button" class="order_view_btn collapsed" data-bs-toggle="collapse" data-bs-target="#order_detail_sc1024" aria-expanded="false" aria-controls="order_detail_sc1024">View <i class="fa-solid fa-chevron-down" aria-hidden="true"></i></button></td>
                </tr>
                <tr class="order_detail_row">
                  <td colspan="5">
                    <div class="collapse" id="order_detail_sc1024">
                      <div class="order_detail">
                        <ul class="order_items">
                          <li class="order_item">
                            <img src="{{ asset('assets/images/pro-5.jpg') }}" class="order_item_img" alt="" loading="lazy">
                            <div class="order_item_info">
                              <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Infinity Platinum Dinner Set 20 Pcs</a>
                              <span class="order_item_meta">Qty 1 &middot; ₹6,950.00</span>
                            </div>
                          </li>
                        </ul>
                        <dl class="order_sums">
                          <div><dt>Subtotal</dt><dd>₹6,950.00</dd></div>
                          <div><dt>Shipping</dt><dd>₹200.00</dd></div>
                          <div class="order_sums_total"><dt>Total</dt><dd>₹7,150.00</dd></div>
                        </dl>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="order_row">
                  <th scope="row" data-label="Order">#SC1017</th>
                  <td data-label="Date">25 Aug 2026</td>
                  <td data-label="Status"><span class="order_status order_status_delivered">Delivered</span></td>
                  <td data-label="Total">₹8,900.00 <span class="order_count">for 1 item</span></td>
                  <td data-label="Actions"><button type="button" class="order_view_btn collapsed" data-bs-toggle="collapse" data-bs-target="#order_detail_sc1017" aria-expanded="false" aria-controls="order_detail_sc1017">View <i class="fa-solid fa-chevron-down" aria-hidden="true"></i></button></td>
                </tr>
                <tr class="order_detail_row">
                  <td colspan="5">
                    <div class="collapse" id="order_detail_sc1017">
                      <div class="order_detail">
                        <ul class="order_items">
                          <li class="order_item">
                            <img src="{{ asset('assets/images/pro-4.jpg') }}" class="order_item_img" alt="" loading="lazy">
                            <div class="order_item_info">
                              <a href="{{ route('product') }}" class="order_item_name shuki_hover_line">Dankotuwa Premium Opus Shape Dinner Set 33 Pcs</a>
                              <span class="order_item_meta">Qty 1 &middot; ₹8,900.00</span>
                            </div>
                          </li>
                        </ul>
                        <dl class="order_sums">
                          <div><dt>Subtotal</dt><dd>₹8,900.00</dd></div>
                          <div><dt>Shipping</dt><dd>Free</dd></div>
                          <div class="order_sums_total"><dt>Total</dt><dd>₹8,900.00</dd></div>
                        </dl>
                      </div>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- my orders -->

          <!-- addresses -->
          <div class="tab-pane fade" id="acc_addresses" role="tabpanel" aria-labelledby="acc_addresses_tab" tabindex="0">
            <div class="policy_box">
              <h2 class="heading">Addresses</h2>
              <p>The following addresses will be used on the checkout page by default.</p>
              <div class="row g-3">
          <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
            <div class="address_card">
              <div class="address_card_head">
                <h3 class="sub_heading">Billing address</h3>
                <button type="button" class="order_view_btn collapsed" data-bs-toggle="collapse" data-bs-target="#address_form_billing" aria-expanded="false" aria-controls="address_form_billing">Edit <i class="fa-solid fa-pen" aria-hidden="true"></i></button>
              </div>
              <address class="address_text">Rohit Choudhary<br>Flat 12, Lakeview Residency<br>Road No 3, Banjara Hills<br>Hyderabad, Telangana - 500034<br>India<br>rohit.choudhary@example.com<br>9876543210</address>
              <div class="collapse" id="address_form_billing">
                <form class="row g-3 address_form" action="{{ route('account.address') }}" method="post">
              @csrf
                  <div class="col-6"><label for="billing_first" class="shuki_label">First name *</label><input type="text" id="billing_first" class="shuki_input" value="Rohit" autocomplete="given-name" required></div>
                  <div class="col-6"><label for="billing_last" class="shuki_label">Last name *</label><input type="text" id="billing_last" class="shuki_input" value="Choudhary" autocomplete="family-name" required></div>
                  <div class="col-12"><label for="billing_street" class="shuki_label">Street address *</label><input type="text" id="billing_street" class="shuki_input" value="Flat 12, Lakeview Residency, Road No 3, Banjara Hills" autocomplete="street-address" required></div>
                  <div class="col-6"><label for="billing_city" class="shuki_label">Town / City *</label><input type="text" id="billing_city" class="shuki_input" value="Hyderabad" autocomplete="address-level2" required></div>
                  <div class="col-6"><label for="billing_pin" class="shuki_label">PIN code *</label><input type="text" id="billing_pin" class="shuki_input" value="500034" inputmode="numeric" autocomplete="postal-code" required></div>
                  <div class="col-12"><label for="billing_state" class="shuki_label">State *</label><input type="text" id="billing_state" class="shuki_input" value="Telangana" autocomplete="address-level1" required></div>
                  <div class="col-12"><button type="submit" class="detail_buy_btn shuki_submit_btn">Save address</button></div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
            <div class="address_card">
              <div class="address_card_head">
                <h3 class="sub_heading">Shipping address</h3>
                <button type="button" class="order_view_btn collapsed" data-bs-toggle="collapse" data-bs-target="#address_form_shipping" aria-expanded="false" aria-controls="address_form_shipping">Edit <i class="fa-solid fa-pen" aria-hidden="true"></i></button>
              </div>
              <address class="address_text">Rohit Choudhary<br>Flat 12, Lakeview Residency<br>Road No 3, Banjara Hills<br>Hyderabad, Telangana - 500034<br>India</address>
              <div class="collapse" id="address_form_shipping">
                <form class="row g-3 address_form" action="{{ route('account.address') }}" method="post">
              @csrf
                  <div class="col-6"><label for="shipping_first" class="shuki_label">First name *</label><input type="text" id="shipping_first" class="shuki_input" value="Rohit" autocomplete="given-name" required></div>
                  <div class="col-6"><label for="shipping_last" class="shuki_label">Last name *</label><input type="text" id="shipping_last" class="shuki_input" value="Choudhary" autocomplete="family-name" required></div>
                  <div class="col-12"><label for="shipping_street" class="shuki_label">Street address *</label><input type="text" id="shipping_street" class="shuki_input" value="Flat 12, Lakeview Residency, Road No 3, Banjara Hills" autocomplete="street-address" required></div>
                  <div class="col-6"><label for="shipping_city" class="shuki_label">Town / City *</label><input type="text" id="shipping_city" class="shuki_input" value="Hyderabad" autocomplete="address-level2" required></div>
                  <div class="col-6"><label for="shipping_pin" class="shuki_label">PIN code *</label><input type="text" id="shipping_pin" class="shuki_input" value="500034" inputmode="numeric" autocomplete="postal-code" required></div>
                  <div class="col-12"><label for="shipping_state" class="shuki_label">State *</label><input type="text" id="shipping_state" class="shuki_input" value="Telangana" autocomplete="address-level1" required></div>
                  <div class="col-12"><button type="submit" class="detail_buy_btn shuki_submit_btn">Save address</button></div>
                </form>
              </div>
            </div>
          </div>
              </div>
            </div>
          </div>
          <!-- addresses -->

          <!-- personal details -->
          <div class="tab-pane fade" id="acc_details" role="tabpanel" aria-labelledby="acc_details_tab" tabindex="0">
            <div class="policy_box">
              <h2 class="heading">Personal Details</h2>
              <form class="row g-3 account_details_form" action="{{ route('account.details') }}" method="post">
              @csrf
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
                  <label for="details_first" class="shuki_label">First name <span aria-hidden="true">*</span></label>
                  <input type="text" id="details_first" class="shuki_input" value="Rohit" autocomplete="given-name" required>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
                  <label for="details_last" class="shuki_label">Last name <span aria-hidden="true">*</span></label>
                  <input type="text" id="details_last" class="shuki_input" value="Choudhary" autocomplete="family-name" required>
                </div>
                <div class="col-12">
                  <label for="details_display" class="shuki_label">Display name <span aria-hidden="true">*</span></label>
                  <input type="text" id="details_display" class="shuki_input" value="Rohit" aria-describedby="details_display_hint" required>
                  <p class="account_hint" id="details_display_hint">This will be how your name will be displayed in the account section and in reviews.</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
                  <label for="details_email" class="shuki_label">Email address <span aria-hidden="true">*</span></label>
                  <input type="email" id="details_email" class="shuki_input" value="rohit.choudhary@example.com" autocomplete="email" required>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
                  <label for="details_phone" class="shuki_label">Phone</label>
                  <input type="tel" id="details_phone" class="shuki_input" value="9876543210" autocomplete="tel">
                </div>

                <div class="col-12">
                  <fieldset class="account_fieldset">
                    <legend class="sub_heading">Password change</legend>
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="details_current_pass" class="shuki_label">Current password (leave blank to leave unchanged)</label>
                        <div class="password_field"><input type="password" id="details_current_pass" class="shuki_input" autocomplete="current-password"><button type="button" class="password_toggle" aria-label="Show password" aria-pressed="false"><i class="fa-regular fa-eye" aria-hidden="true"></i></button></div>
                      </div>
                      <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
                        <label for="details_new_pass" class="shuki_label">New password (leave blank to leave unchanged)</label>
                        <div class="password_field"><input type="password" id="details_new_pass" class="shuki_input" autocomplete="new-password" minlength="8"><button type="button" class="password_toggle" aria-label="Show password" aria-pressed="false"><i class="fa-regular fa-eye" aria-hidden="true"></i></button></div>
                      </div>
                      <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-12">
                        <label for="details_confirm_pass" class="shuki_label">Confirm new password</label>
                        <div class="password_field"><input type="password" id="details_confirm_pass" class="shuki_input" autocomplete="new-password" data-match="details_new_pass"><button type="button" class="password_toggle" aria-label="Show password" aria-pressed="false"><i class="fa-regular fa-eye" aria-hidden="true"></i></button></div>
                      </div>
                    </div>
                  </fieldset>
                </div>

                <div class="col-12">
                  <button type="submit" class="detail_buy_btn shuki_submit_btn">Save changes</button>
                </div>
              </form>
            </div>
          </div>
          <!-- personal details -->

        </div>
      </div>

    </div>
  </div>
 </div>
<!-- my account section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush

@push('scripts')
<!-- my account: dashboard shortcuts open the matching tab -->
<script>
  document.querySelectorAll('[data-account-goto]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var tab = document.getElementById('acc_' + btn.dataset.accountGoto + '_tab');
      if (!tab) return;
      bootstrap.Tab.getOrCreateInstance(tab).show();
      tab.closest('.account_section').scrollIntoView({ behavior: 'smooth' });
    });
  });
</script>
<!-- my account: dashboard shortcuts open the matching tab -->
@endpush
