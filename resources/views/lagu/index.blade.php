<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Lagu</title>
    <style>
        body {
            background-color: #121212;
            font-family: 'Segoe UI', sans-serif;
            color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #1e1e2e;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        h2, h3 {
            color: #4fc3f7;
        }
        input, button {
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 6px;
        }
        input {
            background: #2b2b3c;
            color: #f0f0f0;
            width: calc(100% - 12px);
        }
        button {
            background-color: #4caf50;
            color: white;
            margin-top: 10px;
        }
        .update-btn {
            background-color: #03a9f4;
        }
        .logout-btn {
            background-color: #f44336;
            float: right;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        li {
            background: #2e2e3f;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }
        form {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat datang, {{ auth()->user()->name }}</h2>
        <form method="GET" action="/logout">
            <button class="logout-btn">Logout</button>
        </form>

        <h3>Tambah Lagu</h3>
        <form method="POST" action="/lagu">
            @csrf
            <input type="text" name="judul" placeholder="Judul Lagu">
            <input type="text" name="penyanyi" placeholder="Penyanyi">
            <input type="text" name="genre" placeholder="Genre">
            <input type="number" name="durasi" placeholder="Durasi (menit)">
            <button type="submit">Tambah Lagu</button>
        </form>

        <h3>Daftar Lagu</h3>
        <ul>
        @foreach($lagu as $l)
            <li>
                <form method="POST" action="/lagu/{{ $l->id }}">
                    @csrf @method('PUT')
                    <input type="text" name="judul" value="{{ $l->judul }}">
                    <input type="text" name="penyanyi" value="{{ $l->penyanyi }}">
                    <input type="text" name="genre" value="{{ $l->genre }}">
                    <input type="number" name="durasi" value="{{ $l->durasi }}">
                    <button type="submit" class="update-btn">Update</button>
                </form>
            </li>
        @endforeach
        </ul>
    </div>
</body>
</html>
