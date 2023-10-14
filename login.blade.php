<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css"> -->
</head>

<body>
    <!-- @include('layouts.nav')  -->
    <div class="wrapper">
        <form action="proses-login.php" method="POST" enctype="multipart/form-data">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
            </div>

            <input class="btn btn-primary" type="submit" value="kirim"> 

            <div class="register-link">
                <p>Tidak punya akun? <a href="register">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>