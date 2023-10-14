<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css"> -->
</head>
<body>
<!-- @include('layouts.nav')  -->
    <h1>Register</h1>
    <form action={{url('register')}} method="post">
        @method('POST')
        @csrf
        <div>
        NIK : <input type="text" name="nik" id="">
        </div>
        <div>
        Nama : <input type="text" name="nama" id="">
        </div>
        <div>
        Username : <input type="text" name="username" id="">
        </div>
        <div>
        Password : <input type="password" name="password" id="">
        </div>
        <div>
        Telp : <input type="text" name="telp" id="">
        </div>
        <input class="btn btn-primary" type="submit" value="Register"> 
</form>
</body>
</html>