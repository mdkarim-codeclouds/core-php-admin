
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login - CL</title>
    <meta content="Login" name="description">
    <meta content="login" name="keywords">

    <!-- Favicons -->
    <link href="<?=RESOURCES_URL?>/img/favicon.png" rel="icon">
    <link href="<?=RESOURCES_URL?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=RESOURCES_URL?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=RESOURCES_URL?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=RESOURCES_URL?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=RESOURCES_URL?>/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?=RESOURCES_URL?>/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?=RESOURCES_URL?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?=RESOURCES_URL?>/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=RESOURCES_URL?>/css/style.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="<?=RESOURCES_URL?>/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">CL</span>
                                </a>
                            </div><!-- End Logo -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small d-none">Enter your email & password to login</p>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate method="POST">
                                        <input type="hidden" name="form_handler" value="LOGIN" />
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" class="form-control" id="yourEmail" required>
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12 d-none">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Vendor JS Files -->
    <script src="<?=RESOURCES_URL?>/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?=RESOURCES_URL?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=RESOURCES_URL?>/vendor/chart.js/chart.umd.js"></script>
    <script src="<?=RESOURCES_URL?>/vendor/echarts/echarts.min.js"></script>
    <script src="<?=RESOURCES_URL?>/vendor/quill/quill.js"></script>
    <script src="<?=RESOURCES_URL?>/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?=RESOURCES_URL?>/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?=RESOURCES_URL?>/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=RESOURCES_URL?>/js/main.js"></script>

</body>
</html>