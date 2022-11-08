<!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body>
    <p><strong>Email Address:</strong> {{ $data['email'] }}</p>
    <p><strong>Password:</strong> {{ $data['password'] }}</p>
    <p><a href="{{ route('login') }}">Please Login Here</a></p>
    <p>Thank you</p>
</body>

</html>