<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1> Login</h1>
<form action="/login" method="post">
    @csrf
    <p>
        <input type="text" name="username" placeholder="User name">
    </p>
    <p>
        <input type="password" name="password" placeholder="Password">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
</form>
</body>
</html>
