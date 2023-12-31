<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/image/logo.ico">
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="../assets/css/style_login.css">
    <title>Login</title>

</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="../proses/login_proses.php" class="sign-in-form" method="post">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Masukkan kata sandi" required>
                    </div>
                    <button class="btn mt-3 text-white" type="submit" name="loginbtn">Masuk</button>
                </form>
                <form action="../proses/register_proses.php" class="sign-up-form" method="post">
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" name="username" id="username"
                            placeholder="Masukkan username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama lengkap" required>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" class="form-control" name="telepon" id="telepon" placeholder="Nomor telepon" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" name="k_password" id="k_password"
                            placeholder="Konfirmasi Password" required>
                    </div>
                    <button class="btn btn-success mt-3" type="submit" name="daftarbtn">Register</button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum Memiliki Akun ?</h3>
                    <p>
                        Segera Daftarkan Akun Anda, Dan Nikmati Keseruan Berbelanja!!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                </div>
               
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Memiliki Akun?</h3>
                    <p>
                        Segera Masuk Aplikasi dan Nikmati Keseruan Berbelanja!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                </div>
                
            </div>
        </div>
    </div>

    <script src="../assets/js/app.js"></script>
</body>

</html>