@extends('layouts.app')

@section('title', 'Search results')
@section('description', 'Search Shuki Crafts porcelain dinnerware, tea sets and gifts.')
@section('noindex', true)
@section('hero_class', 'inner_hero')

@section('hero')
<!-- inner banner -->
<div class="inner_banner">
  <img src="{{ asset('assets/images/slider-2.jpg') }}" class="inner_banner_img" alt="Porcelain dinnerware collection">
  <div class="inner_banner_caption">
    <nav aria-label="breadcrumb">
      <ol class="inner_breadcrumb">
        <li><a href="{{ route('home') }}" class="shuki_hover_line">Home</a></li>
        <li aria-current="page">Search</li>
      </ol>
    </nav>
    <h1 class="inner_title main_heading">Search Results</h1>
    <p class="inner_text">Find the perfect porcelain for your table.</p>
  </div>
</div>
<!-- inner banner -->
@endsection

@section('content')
<div class="clearfix"></div>

<!-- search results section -->
 <div class="container-fluid bg_grey listing_section search_page">
  <div class="container">

    <form class="search_page_form" role="search" action="{{ route('search') }}" method="get">
      <label for="search_page_input" class="visually-hidden">Search products</label>
      <svg class="search_form_icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.5" cy="10.5" r="7"/><line x1="15.5" y1="15.5" x2="21" y2="21"/></svg>
      <input type="search" id="search_page_input" name="q" class="search_page_input" placeholder="Search dinnerware, tea sets, gifts…" autocomplete="off">
      <button type="submit" class="detail_buy_btn shuki_submit_btn search_page_btn">Search</button>
    </form>

    <div class="listing_toolbar search_toolbar">
      <h2 class="sub_heading search_summary" aria-live="polite">Showing all 25 products</h2>
      <div class="listing_select_wrap">
        <label for="search_sort" class="visually-hidden">Sort results</label>
        <select id="search_sort" class="listing_select">
          <option value="relevance">Sort By Relevance</option>
          <option value="price_low">Price: Low to High</option>
          <option value="price_high">Price: High to Low</option>
        </select>
      </div>
    </div>

    <div class="row g-4 listing_grid search_grid">
      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="21450" data-order="0" data-search="dankotuwa premium empress 17pcs tea set and coffee cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="37400" data-order="1" data-search="dankotuwa premium empress 21 pcs dinner set dinnerware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Empress 21 Pcs Dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Empress 21 Pcs Dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹37,400.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="6650" data-order="2" data-search="dankotuwa premium golden platinum 12 pcs tea set and coffee cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="7500" data-order="3" data-search="dankotuwa premium infinity gold 17pcs tea set and coffee cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="13500" data-order="4" data-search="dankotuwa premium infinity gold 21 pcs dinner set dinnerware designer ware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-6.jpg') }}" class="product_img" alt="Dankotuwa Premium Infinity Gold 21 Pcs Dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Infinity Gold 21 Pcs Dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹13,500.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="13500" data-order="5" data-search="dankotuwa premium infinity platinum 21 pcs dinner set dinnerware designer ware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-6.jpg') }}" class="product_img" alt="Dankotuwa Premium Infinity Platinum 21 Pcs Dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Infinity Platinum 21 Pcs Dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹13,500.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2260" data-order="6" data-search="dankotuwa premium lasting rose 12pcs tea set and coffee cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2300" data-order="7" data-search="dankotuwa premium menuna gold 12pcs coffee set tea and cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2300" data-order="8" data-search="dankotuwa premium shamari gold mix 12pcs coffee set tea and cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="14050" data-order="9" data-search="dankotuwa premium shamari gold mix 21 pcs dinner set dinnerware designer ware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-5.jpg') }}" class="product_img" alt="Dankotuwa Premium Shamari Gold mix 21 Pcs Dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Shamari Gold mix 21 Pcs Dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹14,050.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="14050" data-order="10" data-search="dankotuwa premium silver mix 21 pcs dinner set dinnerware designer ware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-7.jpg') }}" class="product_img" alt="Dankotuwa Premium Silver Mix 21 Pcs Dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Silver Mix 21 Pcs Dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹14,050.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="24500" data-order="11" data-search="dankotuwa premium vienna blue 21 pcs dinner set dinnerware designer ware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Vienna Blue 21 Pcs Dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Vienna Blue 21 Pcs Dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹24,500.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="12500" data-order="12" data-search="dankotuwa premium angel 21 pcs dinner set dinnerware designer ware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-6.jpg') }}" class="product_img" alt="Dankotuwa Premium Angel 21 Pcs Dinner set" loading="lazy">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="7500" data-order="13" data-search="dankotuwa premium infinity platinum 17pcs tea set and coffee cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="6250" data-order="14" data-search="dankotuwa premium vienna blue 12 pcs tea set and coffee cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2260" data-order="15" data-search="dankotuwa premium angel 12 pcs tea set and coffee cups saucers designer ware dinner sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="350" data-order="16" data-search="dankotuwa premium opus shape demi cup 1 coffee &amp; saucer tea and cups saucers dinner sets new arrivals white porcelain set">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="24000" data-order="17" data-search="dankotuwa premium golden platinum 21pcs dinner set dinnerware designer ware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-7.jpg') }}" class="product_img" alt="Dankotuwa Premium Golden Platinum 21pcs dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Golden Platinum 21pcs dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹24,000.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2100" data-order="18" data-search="dankotuwa premium purity shape dinner plate 6 pcs set dinnerware plates white porcelain sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Purity Shape Dinner plate 6 Pcs set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Purity Shape Dinner plate 6 Pcs set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹2,100.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="14050" data-order="19" data-search="dankotuwa premium menuna gold 21 pcs dinner set dinnerware sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Menuna Gold 21 Pcs Dinner set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Menuna Gold 21 Pcs Dinner set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹14,050.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2700" data-order="20" data-search="dankotuwa premium aurora shape dinner plate 6 pcs set dinnerware plates white porcelain sets new arrivals">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2100" data-order="21" data-search="dankotuwa premium eden shape dinner plate 6 pcs set dinnerware plates white porcelain sets new arrivals">
        <div class="product_card">
          <div class="product_img_box">
            <img src="{{ asset('assets/images/pro-4.jpg') }}" class="product_img" alt="Dankotuwa Premium Eden Shape Dinner plate 6 Pcs set" loading="lazy">
          </div>
          <div class="product_body">
            <p class="product_stock product_in_stock">In Stock</p>
            <h3 class="product_name"><a href="{{ route('product') }}">Dankotuwa Premium Eden Shape Dinner plate 6 Pcs set</a></h3>
            <div class="product_price_row">
              <p class="product_price sub_heading">₹2,100.00</p>
              <button type="button" class="product_cart_btn" aria-label="Add to cart">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="6.5" width="17" height="15" rx="3"/><path d="M8.5 6.5V6a3.5 3.5 0 0 1 7 0v.5"/><path d="M8.5 10.5a3.5 3.5 0 0 0 7 0"/></svg>
                    <span class="product_cart_tip">Add to Cart</span>
                  </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="350" data-order="22" data-search="dankotuwa premium opus shape non stackable 1 tea cup &amp; saucer and coffee cups saucers designer ware dinner sets new arrivals set">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="2400" data-order="23" data-search="dankotuwa premium simplicity shape dinner plate 6 pcs set dinnerware plates white porcelain sets new arrivals cutlery">
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

      <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 listing_col search_result" data-price="799" data-order="24" data-search="dankotuwa premium porcelain colour mug 2 pcs coloured mugs coffee tea new arrivals">
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

    </div>

    <div class="policy_box search_empty_box" hidden>
      <span class="track_icon"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></span>
      <h2 class="heading">No products found</h2>
      <p class="search_empty_text">We couldn’t find anything for <strong class="search_empty_term"></strong>. Try a different word or one of these:</p>
      <div class="search_links">
            <a href="{{ route('search', ['q' => 'tea set']) }}" class="search_link">Tea sets</a>
            <a href="{{ route('search', ['q' => 'coffee set']) }}" class="search_link">Coffee sets</a>
            <a href="{{ route('search', ['q' => 'dinner set']) }}" class="search_link">Dinner sets</a>
            <a href="{{ route('search', ['q' => 'dinner plate']) }}" class="search_link">Dinner plates</a>
            <a href="{{ route('search', ['q' => 'mug']) }}" class="search_link">Mugs</a>
            <a href="{{ route('search', ['q' => 'gold']) }}" class="search_link">Gold</a>
      </div>
    </div>

  </div>
 </div>
<!-- search results section -->

<div class="clearfix"></div>
@endsection

@push('modals')
  <!--=============================================-->
  <!--===================footer====================-->
@endpush

@push('scripts')
<!-- search results: filter by the search words and sort -->
<script>
  (function () {
    var grid = document.querySelector('.search_grid');
    if (!grid) return;

    var input = document.getElementById('search_page_input');
    var sort = document.getElementById('search_sort');
    var summary = document.querySelector('.search_summary');
    var empty = document.querySelector('.search_empty_box');
    var cols = Array.prototype.slice.call(grid.querySelectorAll('.search_result'));
    var term = (new URLSearchParams(window.location.search).get('q') || '').trim();
    var words = term.toLowerCase().split(/\s+/).filter(Boolean);

    input.value = term;

    // a product matches when every search word appears in its name, type or category
    var shown = 0;
    cols.forEach(function (col) {
      var match = words.every(function (w) { return col.dataset.search.indexOf(w.replace(/s$/, '')) !== -1; });
      col.hidden = !match;
      if (match) shown++;
    });

    if (words.length) {
      document.title = 'Search results for “' + term + '” - Shuki Crafts India';
      summary.textContent = shown + (shown === 1 ? ' result' : ' results') + ' for “' + term + '”';
    }
    empty.hidden = shown !== 0;
    empty.querySelector('.search_empty_term').textContent = '“' + term + '”';
    document.querySelector('.search_toolbar').hidden = shown === 0;

    sort.addEventListener('change', function () {
      cols.slice().sort(function (a, b) {
        if (sort.value === 'price_low') return a.dataset.price - b.dataset.price;
        if (sort.value === 'price_high') return b.dataset.price - a.dataset.price;
        return a.dataset.order - b.dataset.order;
      }).forEach(function (col) { grid.appendChild(col); });
      grid.classList.remove('listing_refresh');
      void grid.offsetWidth;
      grid.classList.add('listing_refresh');
    });
  })();
</script>
<!-- search results: filter by the search words and sort -->
@endpush
