@extends('layouts.app')

@section('title', 'Tea and Coffee')
@section('description', 'Shop Dankotuwa porcelain tea sets, coffee sets, cups and mugs from Shuki Crafts.')
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-3.jpg') }}" class="inner_banner_img" alt="Porcelain tea and coffee set">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Tea and Coffee</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Tea and Coffee</h1>
    <p class="inner_text">Tea sets, coffee sets, cups and mugs for every ritual.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- intro section -->
 <div class="container-fluid bg_grey listing_intro">
  <div class="container">

    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-12 text-center m-auto">
      <p>At Shuki Crafts, we are passionate about the art of porcelain craftsmanship. Our journey began with a vision to blend tradition with contemporary aesthetics, creating exquisite porcelain pieces that elevate spaces and capture hearts.</p>
    </div>

  </div>
 </div>
<!-- intro section -->

<div class="clearfix"></div>

 <!-- product listing section -->
 <div class="container-fluid bg_grey listing_section">
  <div class="container">
    <div class="row">

      <!-- filtering -->
      <div class="col-12">
        <div class="listing_chips" role="group" aria-label="Filter by type">
          <button type="button" class="listing_chip listing_chip_active" data-type="all" aria-pressed="true">All</button>
          <button type="button" class="listing_chip" data-type="tea-sets" aria-pressed="false">Tea Sets</button>
          <button type="button" class="listing_chip" data-type="coffee-sets" aria-pressed="false">Coffee Sets</button>
          <button type="button" class="listing_chip" data-type="cups-saucers" aria-pressed="false">Cups &amp; Saucers</button>
          <button type="button" class="listing_chip" data-type="coloured-mugs" aria-pressed="false">Coloured Mugs</button>
        </div>

        <div class="listing_toolbar">

          <div class="listing_select_wrap">
            <label for="listing_sort" class="visually-hidden">Sort products</label>
            <select id="listing_sort" class="listing_select">
              <option value="popular">Sort By Popularity</option>
              <option value="newest">Sort By Newest</option>
              <option value="price_low">Price: Low to High</option>
              <option value="price_high">Price: High to Low</option>
            </select>
          </div>

          <div class="listing_toolbar_right">
            <div class="listing_select_wrap listing_view_wrap">
              <label for="listing_view" class="visually-hidden">Products per row</label>
              <select id="listing_view" class="listing_select">
                <option value="4">List 4</option>
                <option value="3">List 3</option>
              </select>
            </div>
            <p class="listing_count" aria-live="polite">12 Products</p>
          </div>

        </div>
      </div>
      <!-- filtering -->

    </div>

    <div class="row g-4 listing_grid">
      <!-- product cards -->

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="21450" data-popular="0" data-types="tea-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Empress 17Pcs Tea set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Empress 17Pcs Tea set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹21,450.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="6650" data-popular="1" data-types="tea-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Golden Platinum 12 Pcs Tea set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Golden Platinum 12 Pcs Tea set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹6,650.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="7500" data-popular="2" data-types="tea-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Infinity Gold 17Pcs Tea set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Infinity Gold 17Pcs Tea set</a></h3>
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="2260" data-popular="3" data-types="tea-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Lasting Rose 12Pcs Tea set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
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
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="2300" data-popular="4" data-types="coffee-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Menuna Gold 12Pcs Coffee set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Menuna Gold 12Pcs Coffee set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹2,300.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="2300" data-popular="5" data-types="coffee-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Shamari Gold Mix 12Pcs Coffee set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Shamari Gold Mix 12Pcs Coffee set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹2,300.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="7500" data-popular="6" data-types="tea-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Infinity Platinum 17Pcs Tea set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="6250" data-popular="7" data-types="tea-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Vienna Blue 12 Pcs Tea set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Vienna Blue 12 Pcs Tea set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹6,250.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="2260" data-popular="8" data-types="tea-sets">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/cup-set.jpg') }}" class="product_img" alt="Dankotuwa Premium Angel 12 Pcs Tea set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Angel 12 Pcs Tea set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹2,260.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="350" data-popular="9" data-types="cups-saucers">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-7.jpg') }}" class="product_img" alt="Dankotuwa Premium Opus Shape Demi cup 1 Coffee cup &amp; 1 Saucer" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="350" data-popular="10" data-types="cups-saucers">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-7.jpg') }}" class="product_img" alt="Dankotuwa Premium Opus Shape Non Stackable 1 tea cup &amp; 1 Saucer" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col" data-price="799" data-popular="11" data-types="coloured-mugs">
        <div class="product_card">
          <div class="product_img_box">
            <span class="product_badge">11% OFF</span>
            <img src="{{ asset('assets/images/pro-1.jpg') }}" class="product_img" alt="Dankotuwa Premium Porcelain Colour Mug 2 Pcs" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
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

      <!-- product cards -->
    </div>

    <!-- pagination -->
    <nav class="listing_pagination_nav" aria-label="Product pages">
      <ul class="listing_pagination"></ul>
    </nav>
    <!-- pagination -->

  </div>
 </div>
 <!-- product listing section -->

<div class="clearfix"></div>

    @include('partials.faq')

<div class="clearfix"></div>


@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush

@push('scripts')
<!-- product listing: filter by type, sort, products per row, pages -->
<script>
  (function () {
    var grid = document.querySelector('.listing_grid');
    if (!grid) return;

    var PER_PAGE = 12;
    var sort = document.getElementById('listing_sort');
    var view = document.getElementById('listing_view');
    var count = document.querySelector('.listing_count');
    var pager = document.querySelector('.listing_pagination');
    var chips = document.querySelectorAll('.listing_chip');
    var cols = Array.prototype.slice.call(grid.querySelectorAll('.listing_col'));
    var params = new URLSearchParams(window.location.search);
    var type = params.get('type') || 'all';
    var page = 1;

    if (!document.querySelector('.listing_chip[data-type="' + type + '"]')) type = 'all';

    function refresh() {
      grid.classList.remove('listing_refresh');
      void grid.offsetWidth;
      grid.classList.add('listing_refresh');
    }

    function render() {
      var matching = cols.filter(function (col) {
        return type === 'all' || col.dataset.types.split(' ').indexOf(type) !== -1;
      });
      var pages = Math.max(1, Math.ceil(matching.length / PER_PAGE));
      page = Math.min(page, pages);

      cols.forEach(function (col) { col.hidden = true; });
      matching.slice((page - 1) * PER_PAGE, page * PER_PAGE).forEach(function (col) { col.hidden = false; });
      count.textContent = matching.length + (matching.length === 1 ? ' Product' : ' Products');

      chips.forEach(function (chip) {
        var on = chip.dataset.type === type;
        chip.classList.toggle('listing_chip_active', on);
        chip.setAttribute('aria-pressed', on);
      });

      pager.innerHTML = '';
      pager.parentElement.hidden = pages < 2;
      for (var i = 1; i <= pages; i++) {
        var li = document.createElement('li');
        var btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'listing_page' + (i === page ? ' listing_page_active' : '');
        btn.textContent = i;
        btn.setAttribute('aria-label', 'Page ' + i);
        if (i === page) btn.setAttribute('aria-current', 'page');
        btn.dataset.page = i;
        li.appendChild(btn);
        pager.appendChild(li);
      }
    }

    chips.forEach(function (chip) {
      chip.addEventListener('click', function () {
        type = chip.dataset.type;
        page = 1;
        var url = new URL(window.location.href);
        type === 'all' ? url.searchParams.delete('type') : url.searchParams.set('type', type);
        history.replaceState(null, '', url);
        render();
        refresh();
      });
    });

    pager.addEventListener('click', function (e) {
      var btn = e.target.closest('[data-page]');
      if (!btn) return;
      page = +btn.dataset.page;
      render();
      refresh();
      grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    sort.addEventListener('change', function () {
      cols.sort(function (a, b) {
        if (sort.value === 'price_low') return a.dataset.price - b.dataset.price;
        if (sort.value === 'price_high') return b.dataset.price - a.dataset.price;
        if (sort.value === 'newest') return b.dataset.popular - a.dataset.popular;
        return a.dataset.popular - b.dataset.popular;
      });
      cols.forEach(function (col) { grid.appendChild(col); });
      page = 1;
      render();
      refresh();
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

    render();
  })();
</script>
<!-- product listing: filter by type, sort, products per row, pages -->
@endpush
