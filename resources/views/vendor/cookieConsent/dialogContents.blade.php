<div class="js-cookie-consent cookie-consent" style="position: fixed;
        bottom: 0;
        width: 100%;
        background: green;
        padding: 0.5%;
        text-align: center;" <span class="cookie-consent__message">
  {!! trans('cookieConsent::texts.message') !!}
  </span>

  <button class="js-cookie-consent-agree cookie-consent__agree"
    style="cursor: pointer;  background-color: green; color: white;">
    {{ trans('cookieConsent::texts.agree') }}
  </button>
</div>
