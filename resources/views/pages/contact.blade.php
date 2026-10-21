@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'Get in touch with Shuki Crafts. Call, email or visit us in Hyderabad, or send us a message.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-2.jpg') }}" class="inner_banner_img" alt="Porcelain dinnerware collection">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Contact Us</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Contact Us</h1>
    <p class="inner_text">We’d love to hear from you.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- contact section -->
 <div class="container-fluid bg_grey contact_section">
  <div class="container">
    <div class="row g-4">

      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12">
        <div class="contact_info_box">
          <h2 class="heading">Reach Us</h2>
          <p>We’d love to hear from you! Whether you have questions, feedback, or just want to say hello, our team is here to assist you. Feel free to reach out through the options below:</p>

          <ul class="contact_list">
            <li>
              <span class="contact_icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span>
              <div>
                <p class="contact_label">Address</p>
                <p class="contact_value">No 640, Rd No 10/2, Vaidehi Nagar, Vanasthalipuram, Hyderabad - 500070</p>
              </div>
            </li>
            <li>
              <span class="contact_icon"><i class="fa-solid fa-phone" aria-hidden="true"></i></span>
              <div>
                <p class="contact_label">Phone</p>
                <p class="contact_value"><a href="tel:8374728076" class="shuki_hover_line">8374728076</a></p>
              </div>
            </li>
            <li>
              <span class="contact_icon"><i class="fa-solid fa-envelope" aria-hidden="true"></i></span>
              <div>
                <p class="contact_label">Email</p>
                <p class="contact_value"><a href="mailto:hi@shukicrafts.com" class="shuki_hover_line">hi@shukicrafts.com</a></p>
              </div>
            </li>
            <li>
              <span class="contact_icon"><i class="fa-regular fa-clock" aria-hidden="true"></i></span>
              <div class="contact_hours_wrap">
                <p class="contact_label">Business Hours <span class="contact_status" hidden></span></p>
                <table class="contact_hours">
                  <tr data-days="1,2,3,4,5"><th scope="row"><abbr title="Monday to Friday">Mon&nbsp;–&nbsp;Fri</abbr></th><td>10:00&nbsp;AM&nbsp;–&nbsp;6:00&nbsp;PM</td></tr>
                  <tr data-days="6,0"><th scope="row"><abbr title="Saturday and Sunday">Sat&nbsp;–&nbsp;Sun</abbr></th><td>Closed</td></tr>
                </table>
                <p class="contact_note">Chat &amp; call support during business hours (IST).</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-12">
        <div class="contact_form_box">
          <h2 class="heading">Get in Touch</h2>
          <form class="row g-3 contact_form" action="{{ route('contact.send') }}" method="post">
              @csrf
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
              <label for="contact_name" class="shuki_label">Name <span aria-hidden="true">*</span></label>
              <input type="text" id="contact_name" name="your-name" class="shuki_input" placeholder="Name" autocomplete="name" required>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
              <label for="contact_email" class="shuki_label">Email <span aria-hidden="true">*</span></label>
              <input type="email" id="contact_email" name="your-email" class="shuki_input" placeholder="Email" autocomplete="email" required>
            </div>
            <div class="col-12">
              <label for="contact_subject" class="shuki_label">Subject</label>
              <input type="text" id="contact_subject" name="your-subject" class="shuki_input" placeholder="Subject">
            </div>
            <div class="col-12">
              <label for="contact_message" class="shuki_label">Message</label>
              <textarea id="contact_message" name="your-message" class="shuki_input shuki_textarea" placeholder="Message" rows="5"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="detail_buy_btn shuki_submit_btn">Send Message</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-12">
        <div class="contact_map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7617.978473403135!2d78.56458518715101!3d17.316068452023984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcba18ad4e62d57%3A0x5650202b4f765300!2s640%2C%202%2C%20Road%20No.%2010%2C%20Vaidehi%20Nagar%2C%20Vanasthalipuram%2C%20Hyderabad%2C%20Telangana%20500070%2C%20India!5e0!3m2!1sen!2slk!4v1702451061408!5m2!1sen!2slk" title="Shuki Crafts location on Google Maps" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
 </div>
<!-- contact section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush

@push('scripts')
<!-- contact: highlight today and show open / closed (India time) -->
<script>
  (function () {
    var rows = document.querySelectorAll('.contact_hours tr');
    var status = document.querySelector('.contact_status');
    if (!rows.length || !status) return;

    var parts = new Intl.DateTimeFormat('en-GB', { timeZone: 'Asia/Kolkata', weekday: 'short', hour: 'numeric', minute: 'numeric', hourCycle: 'h23' }).formatToParts(new Date());
    var get = function (type) { return (parts.find(function (p) { return p.type === type; }) || {}).value; };
    var day = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'].indexOf(get('weekday'));
    var minutes = +get('hour') * 60 + +get('minute');

    rows.forEach(function (row) {
      if (row.dataset.days.split(',').indexOf(String(day)) !== -1) row.classList.add('contact_hours_today');
    });

    var open = day >= 1 && day <= 5 && minutes >= 600 && minutes < 1080;
    status.textContent = open ? 'Open now' : 'Closed now';
    status.className = 'contact_status ' + (open ? 'contact_status_open' : 'contact_status_closed');
    status.hidden = false;
  })();
</script>
<!-- contact: highlight today and show open / closed (India time) -->
@endpush
