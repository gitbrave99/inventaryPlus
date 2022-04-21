 <?php include 'layouts/head-main.php'; ?>

 <head>

     <title>Restaurar contraseña</title>
     <?php include 'layouts/title-meta.php'; ?>

     <?php include 'layouts/head-css.php'; ?>

 </head>

 <?php include 'layouts/body.php'; ?>

 <div class="auth-page-wrapper pt-5">
     <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
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
                     <div class="text-center mt-sm-5 mb-4 text-white-50">
                         <div>
                             <a href="index.php" class="d-inline-block auth-logo">
                                 <img src="assets/images/logocompany.png" alt="" height="65">
                             </a>
                         </div>
                         <p class="mt-3 fs-15 fw-medium">InventPlus</p>
                     </div>
                 </div>
             </div>

             <div class="row justify-content-center">
                 <div class="col-md-8 col-lg-6 col-xl-5">
                     <div class="card mt-4">

                         <div class="card-body p-4">
                             <div class="text-center mt-2">
                                 <h5 class="text-primary">Olvidaste la contraseña?</h5>
                                 <p class="text-muted">Restaurar contraseña</p>

                                 <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
                                 </lord-icon>

                             </div>
                             <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                                 Ingresa tu email para darte instrucciones
                             </div>
                             <div class="p-2">
                                
                                 <form action="#" method="post">
                                     <div class="mb-4 ">
                                         <label class="form-label">Email</label>
                                         <input type="email" class="form-control" id="email" placeholder="juanto@gmail.com">
                                         
                                     </div>

                                     <div class="text-center mt-4">
                                         <button class="btn btn-success w-100" type="submit">Enviar</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="mt-4 text-center">
                         <p class="mb-0">Recuerdo mi contraseña<a href="login.php" class="fw-semibold text-primary text-decoration-underline"> Iniciar sesión</a> </p>
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
                         <p class="mb-0 text-muted">&copy; <script>
                                 document.write(new Date().getFullYear())
                             </script> © InventPlus-Company.</p>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
 </div>
 <?php include 'layouts/vendor-scripts.php'; ?>
 <script src="assets/libs/particles.js/particles.js"></script>
 <script src="assets/js/pages/particles.app.js"></script>
 </body>

 </html>