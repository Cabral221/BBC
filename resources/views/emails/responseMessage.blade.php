@component('mail::message')
# Dear {{ strtoupper($nameToSend) }},

@component('mail::panel')
 {!! $sms !!}
@endcomponent
<br>
@component('mail::button', ['url' => env('APP_URL')])
Come back when you want
@endcomponent

Thanks,<br>
BBC University 
@endcomponent
