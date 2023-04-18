{{ __('views.email_hello') }} {{$email_data['name']}}
<br><br><br>

{{ __('views.email_tip') }}
<br><br>
<a href="{{ config('app.url') }}/verify?code={{$email_data['verification_code']}}">{{ __('views.email_click') }}</a>

<br><br>
{{ __('views.email_thank') }}
<br>
