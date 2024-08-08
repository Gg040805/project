@if (session()->has('login'))
    <script>
        window.alert("{{ session('login') }}");
    </script>

@elseif (session()->has('logins'))
<script>
     window.alert("{{ session('logins') }}");
</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            background-color: #87CEEB; /* light blue background */
        }
        form {
            background-color: #FFFFFF; /* white background for the form */
            padding: 20px;
            border: 1px solid #CCCCCC;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #333333; /* dark gray text */
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #CCCCCC;
            border-radius: 5px;
        }
        button[type="submit"] {
            background-color: #4CAF50; /* green background for the submit button */
            color: #FFFFFF; /* white text */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41; /* darker green on hover */
        }
    </style>
</head>
<body>
    <form method="POST" action="/login">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>