@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<div>
    <img src="{{ asset('images/logo1.png') }}" width="100px" alt="" srcset="">
</div>
BBC University
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ 'BBC University' }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
