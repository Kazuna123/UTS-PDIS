<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Menu Lagu</title>
    <style>
        body {
            background-color: #1e1e2f;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
        }
        .container {
            max-width: 400px;
            margin: 80px auto;
            background: #2a2a3d;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: none;
        }
        input {
            background: #3a3a4d;
            color: #fff;
        }
        button {
            background-color: #2196f3;
            color: white;
            cursor: pointer;
        }
        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #66bfff;
            text-decoration: none;
        }
        h2 {
            text-align: center;
            color: #66bfff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register Menu Lagu</h2>
        <form method="POST" action="/register">
            @csrf
            <input type="text" name="name" placeholder="Nama">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
        <a href="/login">Sudah punya akun?</a>
    </div>
</body>
</html>
