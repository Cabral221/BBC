<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
<body>
	<h1>BBC University - Followers</h1>
	<p>if you want to send grouped emails, you only have to copy the following text containing all the emails and separate with commas.</p>
    <br>
        (  @foreach ($emails as $email)
            @if(!$loop->last)
                {{ $email->email }},
            @else
                {{ $email->email }}
            @endif
        @endforeach )
    <br>
    <br>
    <br>

    <h3>View all in table</h3>
    <h4>Counter : {{ $emails->count() }}</h4>
    <table>
        <thead>
            <tr>
                <th>Follower</th>
                <th>follow at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emails as $email)
                <tr>
                    <td>{{ $email->email }}</td>
                    <td>{{ $email->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>