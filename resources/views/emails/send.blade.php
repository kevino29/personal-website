<!DOCTYPE html>

<html>

<head>
    <title>New Message!</title>
</head>

<body>
    <h1>Message from {{ $user['name'] }}</h1>
    <p>{{ $user['name'] }}'s email is: {{ $user['email'] }}</p>

    <p>Here is the message:</p>
    <p>{{ $user['message'] }}</p>
</body>

</html>
