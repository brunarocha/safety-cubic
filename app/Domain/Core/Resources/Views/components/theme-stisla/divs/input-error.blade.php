{{-- Example
@component('core::components.theme-stisla.divs.input-error', [
    'message' => trans('user::auth.message_login_email')
])@endcomponent
--}}

<div class="invalid-feedback">
    {{$message}}
</div>