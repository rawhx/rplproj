<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPL ADMIN</title>

    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="card">
        <div class="background">
            <img src="https://img.freepik.com/free-vector/computer-login-concept-illustration_114360-7962.jpg?w=740&t=st=1671267833~exp=1671268433~hmac=8c72f753c82d505ebcffa65d1c90a2b6f0e81b52c28f4142e39816097cfa62d0" alt="" width="350">
        </div>
        <div class="form">
            <h1>Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="input">
                    <label for="email">Masukkan Nama Atau Username</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="input">
                    <label for="password">Masukkan Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="button">
                    <button type="submit">MASUK</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>