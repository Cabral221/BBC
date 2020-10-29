<style>
</style>
<?php $message->from($email, $name) ?>
<div>
    <img src="{{ url('images/logo.png') }}" alt="" srcset="">
    <h1>BBC University -- Administration</h1>
    <p>Hello, we are receved a mail from web site. </p>
    <p>Expediteur : <strong>{{ strtoupper($name) }}</strong></p>
    <p>Son E-mail : <strong>{{ $email }}</strong></p>
    <br>
    <hr>
    <p>{{ $content }}</p>
</div>
<h1>BBC University</h1>
<p>Salut c'est {{ $name }}</p>