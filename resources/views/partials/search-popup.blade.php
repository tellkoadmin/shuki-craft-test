<!-- search popup -->
<div class="modal fade search_modal" id="search_modal" tabindex="-1" aria-labelledby="search_title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content search_box">

      <h2 id="search_title" class="visually-hidden">Search Shuki Crafts</h2>

      <form class="search_form" role="search" action="{{ route('search') }}" method="get">
        <svg class="search_form_icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.5" cy="10.5" r="7"/><line x1="15.5" y1="15.5" x2="21" y2="21"/></svg>
        <label for="search_input" class="visually-hidden">Search products and categories</label>
        <input type="search" id="search_input" name="q" class="search_input sub_heading" placeholder="Search dinnerware, tea sets, gifts…" autocomplete="off">
        <button type="button" class="search_close" data-bs-dismiss="modal" aria-label="Close search">
          <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
        </button>
      </form>

      <div class="search_body">

        <p class="search_label">Shop by category</p>
        <div class="row g-3 search_cats">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 search_item" data-keywords="dinnerware dinner plates sets white porcelain designer">
              <a href="{{ route('dinnerware') }}" class="search_cat">
                <span class="search_cat_icon"><img src="{{ asset('assets/images/dinnerware.png') }}" alt="" aria-hidden="true"></span>
                <span class="search_cat_name">Dinnerware</span>
              </a>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 search_item" data-keywords="tea and coffee tea coffee cups saucers mugs">
              <a href="{{ route('tea-and-coffee') }}" class="search_cat">
                <span class="search_cat_icon"><img src="{{ asset('assets/images/tea.png') }}" alt="" aria-hidden="true"></span>
                <span class="search_cat_name">Tea and Coffee</span>
              </a>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 search_item" data-keywords="serveware serving platters bowls">
              <a href="{{ route('serveware') }}" class="search_cat">
                <span class="search_cat_icon"><img src="{{ asset('assets/images/serveware.png') }}" alt="" aria-hidden="true"></span>
                <span class="search_cat_name">Serveware</span>
              </a>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 search_item" data-keywords="gift packs gifts wedding corporate seasonal">
              <a href="{{ route('gift-packs') }}" class="search_cat">
                <span class="search_cat_icon"><i class="fa-solid fa-gift" aria-hidden="true"></i></span>
                <span class="search_cat_name">Gift Packs</span>
              </a>
            </div>
        </div>

        <p class="search_label">Quick links</p>
        <div class="search_links">
            <a href="{{ route('dinnerware', ['type' => 'dinner-sets']) }}" class="search_link search_item" data-keywords="dinner sets dinnerware">Dinner Sets</a>
            <a href="{{ route('dinnerware', ['type' => 'white-porcelain']) }}" class="search_link search_item" data-keywords="white porcelain dinnerware">White Porcelain</a>
            <a href="{{ route('dinnerware', ['type' => 'designer-ware']) }}" class="search_link search_item" data-keywords="designer ware dinnerware">Designer Ware</a>
            <a href="{{ route('tea-and-coffee', ['type' => 'tea-sets']) }}" class="search_link search_item" data-keywords="tea sets tea coffee">Tea Sets</a>
            <a href="{{ route('tea-and-coffee', ['type' => 'cups-saucers']) }}" class="search_link search_item" data-keywords="cups and saucers tea coffee">Cups &amp; Saucers</a>
            <a href="{{ route('tea-and-coffee', ['type' => 'coloured-mugs']) }}" class="search_link search_item" data-keywords="coloured mugs tea coffee">Coloured Mugs</a>
            <a href="{{ route('serveware') }}" class="search_link search_item" data-keywords="platters serveware">Platters</a>
            <a href="{{ route('serveware') }}" class="search_link search_item" data-keywords="bowls serveware">Bowls</a>
            <a href="{{ route('serveware') }}" class="search_link search_item" data-keywords="serving sets serveware">Serving Sets</a>
            <a href="{{ route('gift-packs') }}" class="search_link search_item" data-keywords="seasonal items gift packs">Seasonal Items</a>
            <a href="{{ route('gift-packs') }}" class="search_link search_item" data-keywords="wedding gifts gift packs">Wedding Gifts</a>
            <a href="{{ route('gift-packs') }}" class="search_link search_item" data-keywords="corporate gifts gift packs">Corporate Gifts</a>
        </div>

        <p class="search_empty" hidden>No matching categories. Try “plates”, “tea” or “gifts”.</p>

      </div>
      
    </div>
  </div>
</div>
<!-- search popup -->
