<!-- account popup -->
<div class="modal fade account_modal" id="account_modal" tabindex="-1" aria-labelledby="account_title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content account_box">
      <div class="row g-0">

        <div class="col-xxl-5 col-xl-5 col-lg-5 d-none d-lg-flex account_side">
          <img src="{{ asset('assets/images/cup.png') }}" class="account_side_img" alt="" aria-hidden="true">
          <p class="sub_heading white_text account_side_title">Welcome to Shuki Crafts</p>
          <p class="white_text account_side_text">Sign in to track your orders, save your addresses and check out faster.</p>
        </div>

        <div class="col-xxl-7 col-xl-7 col-lg-7 col-12 account_main">
          <button type="button" class="search_close account_close" data-bs-dismiss="modal" aria-label="Close">
            <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
          </button>
          <h2 id="account_title" class="visually-hidden">Login or register</h2>

          <ul class="nav account_switch" role="tablist">
            <li role="presentation">
              <button class="account_switch_btn active" id="account_login_tab" data-bs-toggle="tab" data-bs-target="#account_login" type="button" role="tab" aria-controls="account_login" aria-selected="true">Login</button>
            </li>
            <li role="presentation">
              <button class="account_switch_btn" id="account_register_tab" data-bs-toggle="tab" data-bs-target="#account_register" type="button" role="tab" aria-controls="account_register" aria-selected="false">Register</button>
            </li>
          </ul>

          <div class="tab-content">

            <div class="tab-pane fade show active" id="account_login" role="tabpanel" aria-labelledby="account_login_tab" tabindex="0">
              <form class="account_form" action="#" method="post">
              @csrf
                <div class="account_field">
                  <label for="login_username" class="shuki_label">Username or email address <span aria-hidden="true">*</span></label>
                  <input type="text" id="login_username" name="username" class="shuki_input" autocomplete="username" required>
                </div>
                <div class="account_field">
                  <label for="login_password" class="shuki_label">Password <span aria-hidden="true">*</span></label>
                  <div class="password_field">
                    <input type="password" id="login_password" name="password" class="shuki_input" autocomplete="current-password" required>
                    <button type="button" class="password_toggle" aria-label="Show password" aria-pressed="false"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                  </div>
                </div>
                <div class="account_row">
                  <label class="shuki_check"><input type="checkbox" name="rememberme" value="forever"> <span>Remember me</span></label>
                  <a href="{{ route('password.request') }}" class="account_link shuki_hover_line">Lost your password?</a>
                </div>
                <button type="submit" class="detail_buy_btn shuki_submit_btn account_submit">Log in</button>
                <p class="account_switch_text">New to Shuki Crafts? <button type="button" class="account_text_btn shuki_hover_line" data-account-tab="register">Create an account</button></p>
              </form>
            </div>

            <div class="tab-pane fade" id="account_register" role="tabpanel" aria-labelledby="account_register_tab" tabindex="0">
              <form class="account_form" action="#" method="post">
              @csrf
                <div class="account_field">
                  <label for="register_email" class="shuki_label">Email address <span aria-hidden="true">*</span></label>
                  <input type="email" id="register_email" name="email" class="shuki_input" autocomplete="email" required>
                </div>
                <div class="account_field">
                  <label for="register_password" class="shuki_label">Password <span aria-hidden="true">*</span></label>
                  <div class="password_field">
                    <input type="password" id="register_password" name="password" class="shuki_input" autocomplete="new-password" minlength="8" required>
                    <button type="button" class="password_toggle" aria-label="Show password" aria-pressed="false"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
                  </div>
                  <p class="account_hint">Use at least 8 characters.</p>
                </div>
                <p class="account_privacy">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="{{ route('privacy-policy') }}" class="shuki_hover_line">privacy policy</a>.</p>
                <button type="submit" class="detail_buy_btn shuki_submit_btn account_submit">Register</button>
                <p class="account_switch_text">Already have an account? <button type="button" class="account_text_btn shuki_hover_line" data-account-tab="login">Log in</button></p>
              </form>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- account popup -->
