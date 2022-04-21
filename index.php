<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Home</title>
    <?php include 'layouts/title-meta.php'; ?>
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<div id="layout-wrapper">
    <?php include 'layouts/menu.php'; ?>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Santa Ana, Centro</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Inventario</a></li>
                                    <li class="breadcrumb-item active">Inicio</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div class="h-100">
                            <div class="row mb-3 pb-1">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-16 mb-1">Buenos días, Balmore!</h4>
                                            <p class="text-muted mb-0">Esto pasa hoy en tu inventario.</p>
                                        </div>
                                        <div class="mt-3 mt-lg-0">
                                            <form action="javascript:void(0);">
                                                <div class="row g-3 mb-0 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control border-0 dash-filter-picker shadow" data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                                            <div class="input-group-text bg-primary border-primary text-white"><i class="ri-calendar-2-line"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xl-3 col-md-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><?= $lang['t-sucursal'] ?></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-success fs-14 mb-0">
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span class="counter-value" data-target="1">0</span>
                                                    </h4>
                                                    <a href="sucursales.php" class="text-decoration-underline"><?= $lang['t-vertodos'] ?></a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-info text-white rounded fs-2 shadow">
                                                        <i class="bx bx-store-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 offset-xl-8">
                                </div>


                                <div class="col-xl-3 col-md-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><?= $lang['t-proveedor'] ?></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-danger fs-14 mb-0">

                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span class="counter-value" data-target="12">0</span>
                                                    </h4>
                                                    <a href="proveedores.php" class="text-decoration-underline"><?= $lang['t-vertodos'] ?></a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-warning rounded fs-3">
                                                        <i class="bx bxs-user-account"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><?= $lang['t-producto'] ?></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-success fs-14 mb-0">

                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span class="counter-value" data-target="20">0</span>
                                                    </h4>
                                                    <a href="productos.php" class="text-decoration-underline"><?= $lang['t-vertodos'] ?></a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger text-white rounded fs-2 shadow">
                                                        <i class="bx bx-package"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><?= $lang['t-compras'] ?></p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span class="counter-value" data-target="10">0</span>
                                                    </h4>
                                                    <a href="compras.php" class="text-decoration-underline"><?= $lang['t-vertodos'] ?></a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success rounded fs-3">
                                                        <i class="bx bx-dollar-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><?= $lang['t-ventas'] ?></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="text-success fs-14 mb-0">
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <span class="counter-value" data-target="20">0</span>
                                                    </h4>
                                                    <a href="ventas.php" class="text-decoration-underline"><?= $lang['t-vertodos'] ?></a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger text-white rounded fs-2 shadow">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- POSIBLES GRAFICAS  -->
                            <!-- <div class="row">
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Compras</h4>
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-primary btn-sm shadow-none">
                                                    1Y
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-header p-0 border-0 bg-soft-light">
                                            <div class="row g-0 text-center">
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                                        <p class="text-muted mb-0">Orders</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                                        <p class="text-muted mb-0">Earnings</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                                        <p class="text-muted mb-0">Refunds</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                        <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                                        <p class="text-muted mb-0">Conversation Ratio</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body p-0 pb-2">
                                            <div class="w-100">
                                                <div id="customer_impression_charts" data-colors='["--vz-success", "--vz-primary", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Store Visits by Source</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Download Report</a>
                                                        <a class="dropdown-item" href="#">Export</a>
                                                        <a class="dropdown-item" href="#">Import</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div id="store-visits-source" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' class="apex-charts" dir="ltr">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1"><?= $lang['t-topproveedores'] ?></h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted"><?= $lang['t-ordenarpor'] ?><i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Nombre</a>
                                                        <a class="dropdown-item" href="#">Compras</a>
                                                        <a class="dropdown-item" href="#">Productos</a>
                                                        <a class="dropdown-item" href="#">Costo</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                        <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.php" class="text-reset">Econo music</a></h5>
                                                                        <span class="text-muted">Nombre</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">12</h5>
                                                                <span class="text-muted">Compras</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">12</h5>
                                                                <span class="text-muted">Productos</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">$1,798</h5>
                                                                <span class="text-muted">Costo</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                        <img src="assets/images/products/img-5.png" alt="" class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.php" class="text-reset">Alicia</a></h5>
                                                                        <span class="text-muted">Nombre</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">10</h5>
                                                                <span class="text-muted">Compras</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">12</h5>
                                                                <span class="text-muted">Productos</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="fs-14 my-1 fw-normal">$3996</h5>
                                                                <span class="text-muted">Costo</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                    </div>
                                                </div>
                                                <ul class="pagination pagination-separated pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link">←</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">→</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1"><?= $lang['t-topproductos'] ?></h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted"><?= $lang['t-ordenarpor'] ?><i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Nombre</a>
                                                        <a class="dropdown-item" href="#">Precio</a>
                                                        <a class="dropdown-item" href="#">Existencia</a>
                                                        <a class="dropdown-item" href="#">Compras</a>
                                                        <a class="dropdown-item" href="#">proveedor</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.php" class="text-reset">Violín</a></h5>
                                                                        <span class="text-muted">Nombre</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">$120</p>
                                                                <span class="text-muted">Precio</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">12</p>
                                                                <span class="text-muted">Existencias</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">12</p>
                                                                <span class="text-muted">Compras</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">Econo music</p>
                                                                <span class="text-muted">Proveedor</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.php" class="text-reset">Guitarra</a></h5>
                                                                        <span class="text-muted">Nombre</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">$1400</p>
                                                                <span class="text-muted">Precio unitario</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">11</p>
                                                                <span class="text-muted">Disponible</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">9</p>
                                                                <span class="text-muted">Compras</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">Alicia</p>
                                                                <span class="text-muted">Proveedor</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                    </div>
                                                </div>
                                                <ul class="pagination pagination-separated pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link">←</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">→</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> -->


                        </div>


                    </div>

                </div>
            </div>

            <?php include 'layouts/footer.php'; ?>
        </div>
    </div>


    <?php include 'layouts/customizer.php'; ?>

    <?php include 'layouts/vendor-scripts.php'; ?>
    
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>


    <script src="assets/js/app.js"></script>
    </body>

    </html>