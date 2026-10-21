<!--=============================================-->
<!--===================footer====================-->
  
   <footer class="container-fluid bg_black footer_section">

      <div class="container">
        <div class="row">

          <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 footer_main">

            <a class="logo_box footer_logo" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" class="logo_img" alt="Shuki Crafts" width="900" height="168">
            </a>

            <p class="white_text footer_about">At Shuki Crafts, we are passionate about the art of porcelain craftsmanship. Our journey began with a vision to blend tradition with contemporary aesthetics, creating exquisite porcelain pieces that elevate spaces and capture hearts.</p>

            <div class="footer_divider"></div>

            <div class="row footer_links">

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <ul class="footer_list footer_main_list">
                  <li><a href="{{ route('home') }}" class="footer_main_link shuki_hover_line">Home</a></li>
                  <li><a href="{{ route('about') }}" class="footer_main_link shuki_hover_line">About Us</a></li>
                  <li><a href="{{ route('contact') }}" class="footer_main_link shuki_hover_line">Contact Us</a></li>
                  <li><a href="{{ route('shipping') }}" class="footer_main_link shuki_hover_line">Shipping &amp; Returns</a></li>
                  <li><a href="{{ route('refund-policy') }}" class="footer_main_link shuki_hover_line">Refunds</a></li>
                  <li><a href="{{ route('order-tracking') }}" class="footer_main_link shuki_hover_line">Order Tracking</a></li>
                </ul>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                <p class="footer_group_title">Dinnerware</p>
                <ul class="footer_list footer_sub_list">
                  <li><a href="{{ route('dinnerware', ['type' => 'dinner-sets']) }}" class="footer_sub_link shuki_hover_line">Dinner Sets</a></li>
                  <li><a href="{{ route('dinnerware', ['type' => 'white-porcelain']) }}" class="footer_sub_link shuki_hover_line">White Porcelain</a></li>
                  <li><a href="{{ route('dinnerware', ['type' => 'designer-ware']) }}" class="footer_sub_link shuki_hover_line">Designer Ware</a></li>
                </ul>

                <p class="footer_group_title">Serveware</p>
                <ul class="footer_list footer_sub_list">
                  <li><a href="{{ route('serveware') }}" class="footer_sub_link shuki_hover_line">Platters</a></li>
                  <li><a href="{{ route('serveware') }}" class="footer_sub_link shuki_hover_line">Bowls</a></li>
                  <li><a href="{{ route('serveware') }}" class="footer_sub_link shuki_hover_line">Serving Sets</a></li>
                </ul>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                <p class="footer_group_title">Tea &amp; Coffee</p>
                <ul class="footer_list footer_sub_list">
                  <li><a href="{{ route('tea-and-coffee', ['type' => 'tea-sets']) }}" class="footer_sub_link shuki_hover_line">Tea Sets</a></li>
                  <li><a href="{{ route('tea-and-coffee', ['type' => 'cups-saucers']) }}" class="footer_sub_link shuki_hover_line">Cups &amp; Saucers</a></li>
                  <li><a href="{{ route('tea-and-coffee', ['type' => 'coloured-mugs']) }}" class="footer_sub_link shuki_hover_line">Coloured Mugs</a></li>
                </ul>

                <p class="footer_group_title">Gift Packs</p>
                <ul class="footer_list footer_sub_list">
                  <li><a href="{{ route('gift-packs') }}" class="footer_sub_link shuki_hover_line">Seasonal Items</a></li>
                  <li><a href="{{ route('gift-packs') }}" class="footer_sub_link shuki_hover_line">Wedding Gifts</a></li>
                  <li><a href="{{ route('gift-packs') }}" class="footer_sub_link shuki_hover_line">Corporate Gifts</a></li>
                </ul>
              </div>

            </div>

          </div>

          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 footer_side">

            <form class="footer_subscribe" action="{{ route('newsletter.subscribe') }}" method="post">
                @csrf
              <label for="footer_email" class="visually-hidden">Email Address</label>
              <input type="email" id="footer_email" name="email" class="footer_input" placeholder="Email Address" required>
              <button type="submit" class="footer_subscribe_btn">Subscribe</button>
            </form>

            <p class="footer_label">Address</p>
            <p class="footer_info">No 640, Rd No 10/2, Vaidehi Nagar,<br>Vanasthalipuram, Hyderabad - 500070</p>

            <div class="row footer_contact">
              <div class="col-6">
                <p class="footer_label">Phone</p>
                <p class="footer_info"><a href="tel:8374728076" class="shuki_hover_line">8374728076</a></p>
              </div>
              <div class="col-6">
                <p class="footer_label">Email</p>
                <p class="footer_info"><a href="mailto:hi@shukicrafts.com" class="shuki_hover_line">hi@shukicrafts.com</a></p>
              </div>
            </div>

            <p class="footer_label">Follow Us on</p>
            <div class="footer_social">
              <a href="#" class="footer_social_link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
              <a href="#" class="footer_social_link" aria-label="X (Twitter)"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
              <a href="#" class="footer_social_link" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
              <a href="#" class="footer_social_link" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
              <a href="#" class="footer_social_link" aria-label="YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
            </div>

            <ul class="footer_list footer_policy_list">
              <li><a href="{{ route('privacy-policy') }}" class="footer_sub_link shuki_hover_line">Privacy Policy</a></li>
              <li><a href="{{ route('terms') }}" class="footer_sub_link shuki_hover_line">Terms and conditions</a></li>
            </ul>

          </div>

        </div>
      </div>

   </footer>

   <!-- copyright bar -->
   <div class="container-fluid bg_grey footer_bottom">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <p class="footer_copy">2026 © Shuki Crafts (OPC) Private Limited</p>
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-md-end">
            <p class="footer_copy">Designed &amp; Developed By <a href="https://tellko.com" class="footer_credit" aria-label="Tellko" target="_blank" rel="noopener"><img src="{{ asset('assets/images/tellko.png') }}" alt="Tellko"></a></p>
          </div>

        </div>
      </div>
   </div>
   <!-- copyright bar -->

<!--=============================================-->
<!--===================footer====================-->
