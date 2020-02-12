@component('mail::message')
# Introduction

your pre-registration has been sent. We will study it as soon as possible.

First name :  {{ $request['firstname'] }}<br>
Last name : {{ $request['lastname'] }}<br>
Email : {{ $request['email'] }}<br>
Phone : {{ $request['phone'] }}<br>

@component('mail::panel')
Program : <b>{{ $request['program_id']->libele }}</b><br>
Level : <b>{{ $request['niveau_id']->libele }}</b><br>
Faculty : <b>{{ $request['filiere_id']->lebele }}</b><br>
@endcomponent

@component('mail::button', ['url' => env('APP_URL')])
Visit us when you want
@endcomponent

Thank you for your trust<br>
{{ 'BBC University' ?? config('app.name') }}
@endcomponent