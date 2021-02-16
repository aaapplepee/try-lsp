<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="nav-brand">
            <h3>Pengaduan Masyarakat</h3>
        </div>
        <div class="nav-list">
            <a href="index.php" class="nav-item">Home</a>
            <a href="register.php" class="nav-item">Register</a>
            <a href="login.php" class="nav-item">Login</a>
        </div>
    </header>
    <!-- End Navbar -->

    <!-- Section Form Login  -->
        <section class="section-login">
        <div class="login-image">
            <img src="assets/image/login.png" alt="" height="500px">
        </div>

        <div class="section-form">
            <div class="kotak_login">
                <h1 class="tulisan_login">Silahkan Login!</h1>

                <form action="" method="post">
                <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form_login" placeholder="Username ..">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form_login" placeholder="Password ..">

                    <button type="submit" class="tombol_login" name="login">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
    <!-- End Section Form Login  -->
</body>

</html>