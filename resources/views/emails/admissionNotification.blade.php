@component('mail::message')
# Request for admission

First name :  {{ $request['firstname'] }}<br>
Last name : {{ $request['lastname'] }}<br>
Email : {{ $request['email'] }}<br>
Phone : {{ $request['phone'] }}<br>

@component('mail::panel')
Program : <b>{{ $request['program_id']->libele }}</b><br>
Class : <b>{{ $request['filiere_id']->libele }}</b><br>
@endcomponent

@component('mail::button', ['url' => route('admin.params.admissions.show',$idRequest)])
Study this request 
@endcomponent


<br>
<p sttle="text-align:center">BBC University</p>
@endcomponent