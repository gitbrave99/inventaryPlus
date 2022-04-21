<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logocompany.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logocompany.png" alt="" height="90">
            </span>
        </a>
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



            </ul>
        </div>
    </div>
</div>
<div class="vertical-overlay"></div>