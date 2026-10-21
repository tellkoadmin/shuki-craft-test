@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('description', 'How Shuki Crafts collects, uses and shares information about you.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/dankotuwa-1.jpg') }}" class="inner_banner_img" alt="Black plates with gold cutlery">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Privacy Policy</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Privacy Policy</h1>
    <p class="inner_text">How we collect, use and protect your information.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- privacy policy section -->
 <div class="container-fluid bg_grey policy_section">
  <div class="container">
    <div class="row g-4">

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-12">
          <aside class="policy_nav" aria-label="Customer care pages">
            <p class="policy_nav_title">Customer Care</p>
            <ul class="policy_nav_list">
              <li><a href="{{ route('shipping') }}" class="policy_nav_link">Shipping, Returns &amp; Tracking</a></li>
              <li><a href="{{ route('refund-policy') }}" class="policy_nav_link">Refund Policy</a></li>
              <li><a href="{{ route('privacy-policy') }}" class="policy_nav_link policy_nav_active" aria-current="page">Privacy Policy</a></li>
              <li><a href="{{ route('terms') }}" class="policy_nav_link">Terms &amp; Conditions</a></li>
              <li><a href="{{ route('order-tracking') }}" class="policy_nav_link">Order Tracking</a></li>
              <li><a href="{{ route('contact') }}" class="policy_nav_link">Contact Us</a></li>
            </ul>
          </aside>
      </div>

      <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-12">
        <article class="policy_box">
            <p>We know that you care how information about you is used and shared, and we appreciate your trust. This Privacy Policy explains how ShukiCrafts, www.shukicrafts.com (collectively, “we,” “us” or “our”) collect, use and share information about you when you use our websites and online services (“Services”) or otherwise interact with us.</p>
            <p>Please read this Privacy Policy carefully and contact us if you have any questions – our contact details can be found on our <a href="{{ route('contact') }}">contact page</a>.</p>
            <p>If you provide us with your personal information, then this indicates that you have had sufficient opportunity to access, and have read and accepted, this Privacy Policy. If you do not wish to provide personal information to us, then you do not have to do so, however it may affect your use of this website or any products and services offered on it.</p>
            <h2 class="sub_heading">Collection of Personal Information</h2>
            <p>Personal Information: The types of personal information we collect will depend on the purposes(s) for which we are collecting it. For example, we may ask for:</p>
            <ul>
            <li>Name;</li>
            <li>Contact details including email address, address and telephone number;</li>
            <li>Date of birth;</li>
            <li>Demographic information such as postcode;</li>
            <li>Credit card or other payment details (if you are buying a product from us);</li>
            <li>Preferences and opinions; and</li>
            <li>Any other information requested on this website or otherwise requested by us or provided by you.</li>
            </ul>
            <p>Non-identifiable information: Data that have never been labelled with individual identifiers or from which identifiers have been permanently removed, and by means of which no specific individual can be identified. When you visit our website, we automatically record non-identifiable information that your browser sends. This data may include:</p>
            <ul>
            <li>Your computer’s ip address;</li>
            <li>Browser type;</li>
            <li>Webpage you were visiting before you came to our website</li>
            <li>The pages within www.tweeinone.com you visit</li>
            <li>The time spent on those pages, items, and information searched on our website, access times, dates and other statistics</li>
            </ul>
            <p>Non-identifiable information is collected for analysis and evaluation in order to help us improve our website and the services and products we provide. This data will not be used in association with any other personal information.</p>
            <h2 class="sub_heading">How We Collect Your Information</h2>
            <p>We may collect your information in a number of ways, including:</p>
            <ul>
            <li>Directly from you, including but not limited to, when you:</li>
            </ul>
            <ul>
            <li>Browse Our Website;</li>
            <li>Save An Item;</li>
            <li>Register On Our Website;</li>
            <li>Logging Into The Website Once Registered;</li>
            <li>Making A Purchase From Us;</li>
            <li>Contacting Our Customer Care, Either About An Order Or For Any Other Reason;</li>
            <li>Interacting With Us On Our Social Media; Or</li>
            <li>Having A Conversation With Our Team Members</li>
            <li>From third parties such as our related entities, business or commercial partners.</li>
            </ul>
            <h2 class="sub_heading">How We Use Your Information</h2>
            <p>Use the information for purposes including:</p>
            <ul>
            <li>To create orders, transaction records, agreements for the sale of products or services, accounts, tax invoices or receipts;</li>
            <li>To communicate with you, about products and services, competition results, special offers, and events which might interest you;</li>
            <li>To perform research and analysis;</li>
            <li>For market research and business development including website development and gauging website traffic and trends;</li>
            <li>To deliver personalised site content to you;</li>
            <li>For marketing including direct marketing;</li>
            <li>To run competitions or offer additional benefits to you; and</li>
            <li>To send you promotional information about third parties that we think may be of interest to you.</li>
            <li>To comply with laws or regulations or to comply with any directions given by regulators or authorities.</li>
            </ul>
            <h2 class="sub_heading">Disclosure of Personal Information to Third Parties</h2>
            <p>We may disclose your personal information to:</p>
            <ul>
            <li>Assist us in providing products and services you have requested, such as delivery service providers;</li>
            <li>Credit reporting agencies and courts, tribunals and regulatory authorities where customers fail to pay for goods or services provided by us to them;</li>
            <li>Courts, tribunals, regulatory authorities and law enforcement offices as required by law, in connection with any actual or prospective legal proceedings, or in order to establish, exercise or defend our legal rights, and</li>
            <li>Conduct market research and marketing strategy analysis;</li>
            </ul>
            <p>Where we disclose your personal information to third parties for these purposes, we will request that they follow this Privacy Policy when handling your personal information.</p>
            <p>If there is a change of control of our business or a sale or transfer of business assets, we reserve the right to transfer to the extent permitted by law our user databases, together with any personal information and non-personal information contained in those databases. This information may be disclosed to a potential purchaser.</p>
            <h2 class="sub_heading">How to Access or Correct Your Personal Information</h2>
            <p>Under the Privacy Act, individuals have a right to access their complete records. You may ask us in writing to provide you with details of the personal information we hold about you. We will endeavour to process your request as soon as possible.</p>
            <p>You can update your personal information anytime by accessing your account on our website by logging on to your account. If you wish for your personal information to be removed from our database, please contact us from our <a href="{{ route('contact') }}">contact page</a>.</p>
            <h2 class="sub_heading">How to Make a Complaint about a Breach of Privacy</h2>
            <p>If you have any questions, comments or complaints regarding our practices, or if you are of the view that we have not adhered to this privacy policy, you can contact us by email to <a href="mailto:info@shukicrafts.com">info@shukicrafts.com</a></p>
            <h2 class="sub_heading">Cookie Policy</h2>
            <p>We use “cookies” when you visit our website. It is a technology that enables us to personalise our service to you and track the patterns of behaviour of visitors to the website.</p>
            <p>By using our website, you agree to us placing cookies on your device and accessing them when you visit the website in the future. You can modify the settings on your device to prevent cookie use. Please note by disabling cookies, you user experience may be affected and you might not be able to take advantage of certain functions.</p>
            <p>There are three main types of cookies – here’s how and why we use them:</p>
            <ul>
            <li>Analytics cookies: these cookies allow us to measure and analyse how our customers use the website, to improve both its functionality and your shopping experience.</li>
            <li>Customer preference cookies: when you are browsing or shopping, these cookies will remember your preferences (like your language or location), so we can make your shopping experience as seamless as possible, and more personal to you.</li>
            <li>Targeting or advertising cookies: these cookies are used to deliver marketing and advertising materials that are relevant to you.</li>
            </ul>
            <h2 class="sub_heading">Changes to This Policy</h2>
            <p>This Privacy Policy may be amended, including with changes, additions and deletions, from time to time in our sole discretion. Your continued use of our website following any amendments indicates that you accept the amendments. We recommend that you check this Privacy Policy regularly, prior to providing personal information, to ensure you are aware of any changes, and only proceed to provide personal information if you accept the new Privacy Policy.</p>
            <p>If you have any questions, feedback or complaints please contact us at: <a href="mailto:info@shukicrafts.com">info@shukicrafts.com</a> </p>
        </article>
      </div>

    </div>
  </div>
 </div>
<!-- privacy policy section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush
