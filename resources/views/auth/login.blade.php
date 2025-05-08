<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Menu Lagu</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #141625;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: #1f2235;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .login-box h2 {
            color: #4fc3f7;
            margin-bottom: 25px;
        }

        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background-color: #2c2f48;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
        }

        .login-box button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            margin-top: 15px;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
        }

        .login-box a {
            display: block;
            margin-top: 20px;
            color: #66bfff;
            text-decoration: none;
        }

        .error {
            color: #ff7272;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Menu Lagu</h2>
        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif
        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="/register">Belum punya akun?</a>
    </div>
</body>
</html>
