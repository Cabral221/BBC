@component('mail::message')
# Message from BBC

- {{ $name }}
- {{ $email }}

@component('mail::panel')
{{ $msg }}
@endcomponent

@component('mail::button', ['url' => route('admin.blog.messages.show',$idMes)])
Watch from the website 
@endcomponent


Reply directly from here or log in to the administration panel to reply to this message.
<br>
<p sttle="text-align:center">BBC University</p>
@endcomponent