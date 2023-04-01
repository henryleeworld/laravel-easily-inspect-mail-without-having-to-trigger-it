@component('mail::message')
# {{ __('Thanks for using mailbook') }}

{{ __('Mailbook has been successfully installed.') }}

@component('mail::button', ['url' => 'https://github.com/Xammie/mailbook#readme'])
{{ __('Documentation') }}
@endcomponent

{{ __('If you enjoy mailbook don\'t forget to [give it a ⭐️]') }}(https://github.com/Xammie/mailbook)

{{ __('Cheers,') }}<br>
{{ __('Mailbook') }}
@endcomponent
