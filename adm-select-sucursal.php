<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}
// Include config file
// require_once "layouts/config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: index.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}

?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Selccionar Sucursal</title>
    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                        <h5 class="mb-0 pb-1 text-decoration-underline"></h5>
                    </div>
                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                        
                        <div class="col">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Santa Ana</h5>
                                        <p class="text-muted mb-0">Centro</p>
                                    </div>
                                </div>
                                <h6 class="mb-1">$8,785</h6>
                                <p class="card-text text-muted">Expense Account</p>
                                <a href="index.php" class="btn btn-primary btn-sm">Seleccionar</a>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Santa Ana</h5>
                                        <p class="text-muted mb-0">Metrocentro</p>
                                    </div>
                                </div>
                                <h6 class="mb-1">$1,542</h6>
                                <p class="card-text text-muted">Expense Account</p>
                                <a href="index.php" class="btn btn-primary btn-sm">Seleccionar</a>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-sm rounded-circle" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Santa Ana</h5>
                                        <p class="text-muted mb-0">UNICAES</p>
                                    </div>
                                </div>
                                <h6 class="mb-1">$798</h6>
                                <p class="card-text text-muted">Expense Account</p>
                                <a href="index.php" class="btn btn-primary btn-sm">Seleccionar</a>
                            </div>
                        </div><!-- end col -->
                        
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy; <script>
                                document.write(new Date().getFullYear())
                            </script> InventFlow-Company</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- particles js -->
<script src="assets/libs/particles.js/particles.js"></script>
<!-- particles app js -->
<!-- <script src="assets/js/pages/particles.app.js"></script> -->
<!-- password-addon init -->
<!-- <script src="assets/js/pages/password-addon.init.js"></script> -->
</body>

</html>