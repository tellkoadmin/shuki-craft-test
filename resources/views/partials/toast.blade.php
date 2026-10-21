{{-- short confirmation after a form is sent (contact, newsletter, tracking, account) --}}
@if (session('status') || $errors->any())
<div class="shuki_toast" role="status" aria-live="polite">
  <i @class(['fa-solid', 'fa-circle-check' => ! $errors->any(), 'fa-circle-exclamation' => $errors->any()]) aria-hidden="true"></i>
  <span>{{ $errors->any() ? $errors->first() : session('status') }}</span>
  <button type="button" class="shuki_toast_close" aria-label="Close" onclick="this.parentElement.remove()">&times;</button>
</div>
@endif
