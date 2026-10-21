# Shuki Crafts

Laravel site for [shukicrafts.com](https://shukicrafts.com): premium Dankotuwa porcelain.

## Run locally

```bash
composer install
cp .env.example .env && php artisan key:generate   # first time only
php artisan migrate                                 # creates database/database.sqlite tables
php artisan serve                                   # http://localhost:8000
```

## Where things are

| What | Where |
|---|---|
| Page URLs | `routes/web.php` (named routes, plus redirects from the old WordPress URLs) |
| Shared layout (head, top bar, menu, footer, popups, scripts) | `resources/views/layouts/app.blade.php` and `resources/views/partials/` |
| Pages | `resources/views/pages/*.blade.php`, 404 in `resources/views/errors/404.blade.php` |
| CSS, JS, images, fonts | `public/assets/` (`css/shuki.css`, `css/mediaquery.css`) |
| Simple forms (contact, newsletter, tracking, account) | `app/Http/Controllers/FormController.php` |

Link to pages with `route('name')` and to files with `asset('assets/...')`.

## Not connected yet

Products, prices, cart, checkout, login/register, orders and reviews are still static sample
markup from the HTML prototype. The forms in `FormController` validate and show a confirmation
but don't email or save anything yet (see the TODOs).
