<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/test" method="post"></form>
    @csrf
    <label for="name">Username</label>
    <input type="text" name="name">
    <br>
    <label for="email">Email</label>
    <input type="password" name="email">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password">
    <br>
    <label for="c_password">Confirm password</label>
    <input type="password" name="password_confirmation">
    <br>
    <button type="submit">Submit</button>
</body>
</html>