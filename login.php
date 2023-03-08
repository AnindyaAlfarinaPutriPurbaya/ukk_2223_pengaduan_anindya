<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Favicons -->
    <link href="assets1/img/favicon.png" rel="icon">
    <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets1/css/style.css" rel="stylesheet">
</head>
<body style="background-image: url('assets/img/bg biru 2.jpg'); background-size: cover;">
    
    <div class="row mt-3">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header">
                    LOGIN
                </div>
                <div class="card-body">
                    <form action="config/aksi_login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
                                required>
                        <div class="mb-3">
                            <label class="form-label">Login Sebagai</label>
                            <select class="form-control" name="level">
                                <option value="masyarakat">Masyarakat</option>
                                <option value="petugas">Petugas</option>
                                <option value="petugas">Admin</option>


                            </select>
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" name="kirim" class="btn btn-primary">LOGIN</button>
                    <a href="index.php?page=registrasi" class="m-3">Belum punya akun? Daftar disini!</a>
                </div>
                <form>
            </div>
        </div>
    </div>
    
</body>
</html>