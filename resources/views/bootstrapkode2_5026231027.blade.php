<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
        .container-fluid {
            height: 100vh;
        }
        .left-section {
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
        }
        .right-section {
            background: #0c2d57;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            width: 100%;
            max-width: 350px;
        }
        .form-control {
            background: white;
        }
        .logo {
            max-width: 150px; /* Pastikan ukuran sesuai */
            height: auto;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row h-100">
        <!-- Bagian Kiri (Logo) -->
        <div class="col-md-6 left-section text-center">
            <img src="C:\ITS\PERKULIAHAN\SMT 4\Pemrograman Web\FEB5026231027\Group 8465.png" alt="Logo" class="img-fluid logo">
            <h2 class="fw-bold mt-3"></h2>
        </div>

        <!-- Bagian Kanan (Form Login) -->
        <div class="col-md-6 right-section">
            <div class="login-box">
                <h3 class="text-center">Masuk Ke Akun</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="masukkan password anda">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>
                <p class="text-center mt-3">
                    <a href="#" class="text-white">Belum punya akun? daftar</a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
