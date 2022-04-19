<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logocompany.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logocompany.png" alt="" height="90">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logocompany.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logocompany.png" alt="" height="90">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?= $lang['t-menu'] ?></span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="ventas.php">
                        <i class="mdi mdi-cart-arrow-right"></i> <span><?= $lang['t-ventas'] ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="compras.php">
                        <i class="mdi mdi-cash-register"></i> <span><?= $lang['t-compras'] ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="proveedores.php">
                        <i class="mdi mdi-account-box"></i> <span><?= $lang['t-proveedor'] ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="sucursales.php">
                        <i class="mdi mdi-warehouse"></i> <span><?= $lang['t-sucursal'] ?></span>
                    </a>
                </li>


                <!-- separator title  -->
                <!-- <li class="menu-title"><i class="ri-more-fill"></i> <span ><?= $lang['t-pages'] ?></span></li> -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="usuarios.php">
                        <i class="mdi mdi-account-group"></i> <span><?= $lang['t-empleado'] ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="productos.php">
                        <i class="mdi mdi-archive"></i> <span><?= $lang['t-producto'] ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="categorias.php">
                        <i class="mdi mdi-file-document-multiple"></i> <span><?= $lang['t-categoria'] ?></span>
                    </a>
                </li>
                <!-- 
                <li class="menu-title"><i class="ri-more-fill"></i> <span ><?= $lang['t-components'] ?></span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.php">
                        <i class="mdi mdi-puzzle-outline"></i> <span ><?= $lang['t-widgets'] ?></span>
                    </a>
                </li> -->




            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>