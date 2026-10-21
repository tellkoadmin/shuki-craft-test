<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- JQUERY VALIDATE -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!--owl carousel-->
<script src="{{ asset('assets/owl/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/owl/owl.js') }}"></script>
<!--owl carousel-->

<!-- gallery -->
<script src="{{ asset('assets/gallery/fancybox.min.js') }}"></script>
<!-- gallery -->



<!-- top news rotation -->
<script>
  document.querySelectorAll('.top_news').forEach(function (news) {
    var items = news.querySelectorAll('.top_news_item');
    var current = 0;
    var paused = false;

    if (items.length < 2) return;

    news.addEventListener('mouseenter', function () { paused = true; });
    news.addEventListener('mouseleave', function () { paused = false; });

    setInterval(function () {
      if (paused || document.hidden) return;

      var next = (current + 1) % items.length;

      news.classList.add('top_news_started');
      items[current].classList.remove('top_news_active');
      items[current].classList.add('top_news_out');
      items[next].classList.remove('top_news_out');
      items[next].classList.add('top_news_active');

      current = next;
    }, 3500);
  });
</script>
<!-- top news rotation -->

<!-- account: popup tabs, show password, matching passwords -->
<script>
  (function () {
    var modal_el = document.getElementById('account_modal');

    // open the popup on a given tab ("login" or "register") from any button with data-account-tab
    document.addEventListener('click', function (e) {
      var opener = e.target.closest('[data-account-tab]');
      if (!opener || !modal_el) return;
      var tab = document.getElementById('account_' + opener.dataset.accountTab + '_tab');
      if (tab) bootstrap.Tab.getOrCreateInstance(tab).show();
      bootstrap.Modal.getOrCreateInstance(modal_el).show();
    });

    if (modal_el) {
      modal_el.addEventListener('shown.bs.modal', function () {
        var field = modal_el.querySelector('.tab-pane.active input:not([type=checkbox])');
        if (field) field.focus();
      });

      // until the shop backend is connected, a valid login / register goes to the account page
      modal_el.querySelectorAll('.account_form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
          e.preventDefault();
          window.location.href = '{{ route('account') }}';
        });
      });
    }

    // show / hide password
    document.querySelectorAll('.password_toggle').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var input = btn.parentElement.querySelector('input');
        var show = input.type === 'password';
        input.type = show ? 'text' : 'password';
        btn.setAttribute('aria-pressed', show);
        btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
        btn.querySelector('i').className = show ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye';
      });
    });

    // "confirm password" fields must match the field named in data-match
    document.querySelectorAll('[data-match]').forEach(function (confirm) {
      var original = document.getElementById(confirm.dataset.match);
      function check() {
        confirm.setCustomValidity(confirm.value && confirm.value !== original.value ? 'Passwords do not match.' : '');
      }
      confirm.addEventListener('input', check);
      original.addEventListener('input', check);
    });
  })();
</script>
<!-- account: popup tabs, show password, matching passwords -->

<!-- cart count on the menu cart icon -->
<script>
  (function () {
    // kept in the browser between pages until the shop cart is connected
    var KEY = 'shuki_cart_count';
    var badges = document.querySelectorAll('.cart_count');

    function read() {
      try { return Math.max(0, parseInt(localStorage.getItem(KEY), 10) || 0); } catch (e) { return 0; }
    }
    function write(n) {
      try { localStorage.setItem(KEY, n); } catch (e) {}
    }
    function show(n, pop) {
      badges.forEach(function (badge) {
        badge.textContent = n > 99 ? '99+' : n;
        badge.hidden = n < 1;
        var link = badge.closest('a');
        if (link) link.setAttribute('aria-label', n ? 'Cart, ' + n + (n === 1 ? ' item' : ' items') : 'Cart');
        if (pop) {
          badge.classList.remove('cart_count_pop');
          void badge.offsetWidth;
          badge.classList.add('cart_count_pop');
        }
      });
    }

    window.shuki_cart = {
      set: function (n) { write(n); show(n, false); },
      add: function (qty) { var n = read() + qty; write(n); show(n, true); }
    };

    show(read(), false);

    document.addEventListener('click', function (e) {
      // product cards: add one, say "Added!" on the tooltip for a moment
      var card_btn = e.target.closest('.product_cart_btn');
      if (card_btn && !card_btn.disabled) {
        window.shuki_cart.add(1);
        var tip = card_btn.querySelector('.product_cart_tip');
        if (tip) {
          tip.textContent = 'Added!';
          clearTimeout(card_btn._tip_timer);
          card_btn._tip_timer = setTimeout(function () { tip.textContent = 'Add to Cart'; }, 1500);
        }
        return;
      }
      // product page: add the chosen quantity
      var detail_btn = e.target.closest('.detail_cart_btn');
      if (detail_btn) {
        var qty = document.getElementById('detail_qty_input');
        window.shuki_cart.add(Math.max(1, parseInt(qty && qty.value, 10) || 1));
      }
    });

    // an order has just been placed: the cart is empty again
    if (document.querySelector('.received_box')) window.shuki_cart.set(0);
  })();
</script>
<!-- cart count on the menu cart icon -->

<!-- search popup -->
<script>
  (function () {
    var modal_el = document.getElementById('search_modal');
    if (!modal_el) return;

    var modal = bootstrap.Modal.getOrCreateInstance(modal_el);
    var input = document.getElementById('search_input');
    var items = modal_el.querySelectorAll('.search_item');
    var empty = modal_el.querySelector('.search_empty');

    // filter category tiles and quick links while typing
    function filter() {
      var term = input.value.trim().toLowerCase();
      var shown = 0;

      items.forEach(function (item) {
        var text = (item.textContent + ' ' + (item.dataset.keywords || '')).toLowerCase();
        var match = !term || text.indexOf(term) !== -1;
        item.hidden = !match;
        if (match) shown++;
      });

      empty.hidden = shown !== 0;
    }

    input.addEventListener('input', filter);

    modal_el.addEventListener('shown.bs.modal', function () { input.focus(); });
    modal_el.addEventListener('hidden.bs.modal', function () { input.value = ''; filter(); });

    // Enter searches all products on the search results page
    modal_el.querySelector('.search_form').addEventListener('submit', function (e) {
      if (!input.value.trim()) {
        e.preventDefault();
        input.focus();
      }
    });

    // category tiles jump to that tab in "Our Categories"
    modal_el.querySelectorAll('[data-cat-tab]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        var tab = document.getElementById(link.dataset.catTab);
        if (!tab) return;
        e.preventDefault();
        modal_el.addEventListener('hidden.bs.modal', function go() {
          modal_el.removeEventListener('hidden.bs.modal', go);
          bootstrap.Tab.getOrCreateInstance(tab).show();
          document.getElementById('our_categories').scrollIntoView({ behavior: 'smooth' });
        });
        modal.hide();
      });
    });

    // keyboard shortcut: "/" or Ctrl/Cmd + K
    document.addEventListener('keydown', function (e) {
      var typing = /input|textarea|select/i.test(e.target.tagName) || e.target.isContentEditable;
      if ((e.key === '/' && !typing) || ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k')) {
        e.preventDefault();
        modal.show();
      }
    });
  })();
</script>
<!-- search popup -->

<!-- scroll top button -->
<script>
  (function () {
    var btn = document.querySelector('.scroll_top_btn');
    if (!btn) return;

    var ring = btn.querySelector('.scroll_top_progress');
    var length = 2 * Math.PI * 22;

    ring.style.strokeDasharray = length;

    function update() {
      var max = document.documentElement.scrollHeight - window.innerHeight;
      var progress = max > 0 ? window.scrollY / max : 0;
      ring.style.strokeDashoffset = length * (1 - progress);
      btn.classList.toggle('scroll_top_show', window.scrollY > 600);
    }

    window.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
    update();

    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  })();
</script>
<!-- scroll top button -->
