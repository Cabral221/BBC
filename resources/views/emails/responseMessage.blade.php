@component('mail::message')
# Dear Internet user,

@component('mail::panel')
 {!! $sms !!}
@endcomponent
<br>
@component('mail::button', ['url' => env('APP_URL')])
Button Come back when you want
@endcomponent

Thanks,<br>
BBC University 
@endcomponent
