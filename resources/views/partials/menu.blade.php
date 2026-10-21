@php
    // which menu item / icon is highlighted for the current page
    $menu_active = match (true) {
        request()->routeIs('home') => 'home',
        request()->routeIs('about') => 'about',
        request()->routeIs('dinnerware') => 'dinnerware',
        request()->routeIs('tea-and-coffee', 'product') => 'tea-and-coffee',
        request()->routeIs('serveware') => 'serveware',
        request()->routeIs('gift-packs') => 'gift-packs',
        request()->routeIs('contact') => 'contact',
        request()->routeIs('account') => 'account',
        request()->routeIs('cart') => 'cart',
        default => null,
    };
@endphp
<!-- menu bar -->
<nav class="navbar navbar-expand-xl menu_bar" data-bs-theme="dark">
  <div class="container-fluid menu_container">

    <a class="navbar-brand logo_box" href="{{ route('home') }}">
      <img src="{{ asset('assets/images/logo.png') }}" class="logo_img" alt="Shuki Crafts" width="900" height="168">
    </a>

    <div class="menu_icons order-xl-3">
      <button type="button" class="menu_icon_link" aria-label="Search" data-bs-toggle="modal" data-bs-target="#search_modal">
        <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.5" cy="10.5" r="7"/><line x1="15.5" y1="15.5" x2="21" y2="21"/></svg>
      </button>
      <span class="menu_icon_divider"></span>
      @if ($menu_active === 'account')
      <a href="{{ route('account') }}" class="menu_icon_link menu_icon_active" aria-label="My account" aria-current="page">
        <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="7.5" r="4.5"/><path d="M3.5 21.5c0-4.7 3.8-8 8.5-8s8.5 3.3 8.5 8"/></svg>
      </a>
      @else
      <button type="button" class="menu_icon_link" aria-label="My account" data-bs-toggle="modal" data-bs-target="#account_modal">
        <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="7.5" r="4.5"/><path d="M3.5 21.5c0-4.7 3.8-8 8.5-8s8.5 3.3 8.5 8"/></svg>
      </button>
      @endif
      <span class="menu_icon_divider"></span>
      <a href="{{ route('cart') }}" @class(['menu_icon_link', 'menu_icon_active' => $menu_active === 'cart']) aria-label="Cart" @if ($menu_active === 'cart') aria-current="page" @endif>
        <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
        <span class="cart_count" hidden>0</span>
      </a>
    </div>

    <button class="navbar-toggler menu_toggler order-xl-4" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse menu_links order-xl-2" id="main_menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a @class(['nav-link menu_link shuki_hover_line', 'active' => $menu_active === 'home']) href="{{ route('home') }}" @if ($menu_active === 'home') aria-current="page" @endif>Home</a></li>
        <li class="nav-item"><a @class(['nav-link menu_link shuki_hover_line', 'active' => $menu_active === 'about']) href="{{ route('about') }}" @if ($menu_active === 'about') aria-current="page" @endif>About Us</a></li>

        <li class="nav-item dropdown menu_dropdown">
          <a @class(['nav-link menu_link shuki_hover_line dropdown-toggle', 'active' => $menu_active === 'dinnerware']) href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dinnerware <i class="fa-solid fa-chevron-down menu_arrow" aria-hidden="true"></i></a>
          <ul class="dropdown-menu menu_drop_list">
            <li><a class="dropdown-item menu_drop_link" href="{{ route('dinnerware', ['type' => 'dinner-sets']) }}"><span class="shuki_hover_line">Dinner Sets</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('dinnerware', ['type' => 'white-porcelain']) }}"><span class="shuki_hover_line">White Porcelain</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('dinnerware', ['type' => 'designer-ware']) }}"><span class="shuki_hover_line">Designer Ware</span></a></li>
            <li><a class="dropdown-item menu_drop_link menu_drop_all" href="{{ route('dinnerware') }}"><span class="shuki_hover_line">View All Dinnerware</span> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown menu_dropdown">
          <a @class(['nav-link menu_link shuki_hover_line dropdown-toggle', 'active' => $menu_active === 'tea-and-coffee']) href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tea and Coffee <i class="fa-solid fa-chevron-down menu_arrow" aria-hidden="true"></i></a>
          <ul class="dropdown-menu menu_drop_list">
            <li><a class="dropdown-item menu_drop_link" href="{{ route('tea-and-coffee', ['type' => 'tea-sets']) }}"><span class="shuki_hover_line">Tea Sets</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('tea-and-coffee', ['type' => 'cups-saucers']) }}"><span class="shuki_hover_line">Cups &amp; Saucers</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('tea-and-coffee', ['type' => 'coloured-mugs']) }}"><span class="shuki_hover_line">Coloured Mugs</span></a></li>
            <li><a class="dropdown-item menu_drop_link menu_drop_all" href="{{ route('tea-and-coffee') }}"><span class="shuki_hover_line">View All Tea and Coffee</span> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown menu_dropdown">
          <a @class(['nav-link menu_link shuki_hover_line dropdown-toggle', 'active' => $menu_active === 'serveware']) href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Serveware <i class="fa-solid fa-chevron-down menu_arrow" aria-hidden="true"></i></a>
          <ul class="dropdown-menu menu_drop_list">
            <li><a class="dropdown-item menu_drop_link" href="{{ route('serveware') }}"><span class="shuki_hover_line">Platters</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('serveware') }}"><span class="shuki_hover_line">Bowls</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('serveware') }}"><span class="shuki_hover_line">Serving Sets</span></a></li>
            <li><a class="dropdown-item menu_drop_link menu_drop_all" href="{{ route('serveware') }}"><span class="shuki_hover_line">View All Serveware</span> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown menu_dropdown">
          <a @class(['nav-link menu_link shuki_hover_line dropdown-toggle', 'active' => $menu_active === 'gift-packs']) href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gift Packs <i class="fa-solid fa-chevron-down menu_arrow" aria-hidden="true"></i></a>
          <ul class="dropdown-menu menu_drop_list">
            <li><a class="dropdown-item menu_drop_link" href="{{ route('gift-packs') }}"><span class="shuki_hover_line">Seasonal Items</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('gift-packs') }}"><span class="shuki_hover_line">Wedding Gifts</span></a></li>
            <li><a class="dropdown-item menu_drop_link" href="{{ route('gift-packs') }}"><span class="shuki_hover_line">Corporate Gifts</span></a></li>
            <li><a class="dropdown-item menu_drop_link menu_drop_all" href="{{ route('gift-packs') }}"><span class="shuki_hover_line">View All Gift Packs</span> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></li>
          </ul>
        </li>

        <li class="nav-item"><a @class(['nav-link menu_link shuki_hover_line', 'active' => $menu_active === 'contact']) href="{{ route('contact') }}" @if ($menu_active === 'contact') aria-current="page" @endif>Contact Us</a></li>
      </ul>
    </div>

  </div>
</nav>
<!-- menu bar -->
