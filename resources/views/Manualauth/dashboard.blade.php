<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

</head>
<body>



    <h2>Welcome, {{ $user->name }}</h2>
    <p>Email: {{ $user->email }}</p>

    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
