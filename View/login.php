 
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Iniciar sesión</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

    </head>

    <?php include 'layouts/body.php'; ?>

        <div class="auth-page-wrapper pt-5">
            <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
                <div class="bg-overlay"></div>
                
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb- text-white-50">
                                <div>
                                    <a href="index.php" class="d-inline-block auth-logo">
                                        <img src="assets/images/logocompany.png" alt="" height="65">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                            
                                <div class="card-body p-4"> 
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Iniciar sesión</h5>
                                    </div>
                                    <div class="p-2 mt-4">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Email o usuario</label>
                                                <input type="text" class="form-control" value="Anna" name="username" id="username" placeholder="Enter username">
                                                <span class="text-danger"></span>
                                            </div>

                                            <div class="mb-3 ">
                                                <div class="float-end">
                                                    <a href="restaurar-password.php" class="text-muted">Has olvidado la contraseña?</a>
                                                </div>
                                                <label class="form-label" for="password-input">Contraseña</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5" value="123456" name="password" placeholder="Enter password" id="password-input">
                                                    <span class="text-danger"></span>
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Iniciar sesión</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <p class="mb-0"><a href="#" class="fw-semibold text-primary text-decoration-underline">Unirse ahora</a> </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script> InventPlus-Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php include 'layouts/vendor-scripts.php'; ?>
        <script src="assets/libs/particles.js/particles.js"></script>
        <script src="assets/js/pages/particles.app.js"></script>
        <script src="assets/js/pages/password-addon.init.js"></script>
    </body>

</html>