<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Temu Janji Poliklinik</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/public/css/welcome_styles.css">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #183F8C;">
      
    </nav>
    <!-- Header-->
    <header class="py-5" style="background-color: #183F8C;"> 
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Sistem Janji Temu <br>Pasien - Dokter</h1>
                      
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row g-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Sebagai Admin</h2>
                    
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-admin.php">
                        Klik Link Berikut
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Sebagai Dokter</h2>
                    
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-dokter.php">
                        Klik Link Berikut
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Sebagai Pasien</h2>
                    
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-pasien.php">
                        Klik Link Berikut
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Footer-->
    <footer style="display: flex; justify-content: center; align-items: center; text-align: center; background-color: #f8f9fa; position: fixed; bottom: 0; left: 0; right: 0; height: 50px;">
    <strong style="padding: 0 10px;">
        Copyright ©
        <script>
            document.write(new Date().getFullYear())
        </script>
        All rights reserved.
    </strong>
    <div class="float-right d-none d-sm-inline-block"></div>
</footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>