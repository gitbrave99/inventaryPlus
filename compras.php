<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?= $lang["t-Buy"] ?></title>
    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0"><?= $lang["t-ListBuys"] ?></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active"><?= $lang["t-Buy"] ?></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light text-primary rounded-circle shadow fs-3">
                                            <i class="ri-money-dollar-circle-fill align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Total <?= $lang["t-Buy"] ?>s</p>
                                        <h4 class=" mb-0">$<span class="counter-value" data-target="2390.68">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <!-- <span class="badge badge-soft-success"><i class="ri-arrow-up-s-fill align-middle me-1"></i>6.24 %<span> -->
                                        </span></span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light text-primary rounded-circle shadow fs-3">
                                            <i class="ri-arrow-right-circle-fill align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"><?= $lang["t-Buy"]?>s</p>
                                        <h4 class=" mb-0"><span class="counter-value" data-target="10">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <!-- <span class="badge badge-soft-success"><i class="ri-arrow-up-s-fill align-middle me-1"></i>3.67 %<span> -->
                                        </span></span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0"><?= $lang["t-ListBuys"] ?></h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <button type="button" class="btn btndel remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                <i class="ri-delete-bin-fill align-center text-white" style="font-size: 16px"></i>
                                            </button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal">
                                                <i class=" ri-file-add-fill align-center" style="font-size: 16px;"></i>
                                            </button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal">
                                                <i class=" ri-printer-line align-center" style="font-size: 16px"></i>
                                            </button>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search" placeholder="<?= $lang["t-search"] ?>">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="hstack flex-wrap gap-2">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" data-bs-toggle="tooltip" data-bs-placement="top" title="Seleccionar todas" value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="proveedor_name"><?= $lang["t-proveedor"] ?></th>
                                                    <th class="sort" data-sort="customer_name"><?= $lang["t-Customer"] ?></th>
                                                    <th class="sort" data-sort="Image"><?= $lang["t-Image"] ?></th>
                                                    <th class="sort" data-sort="Factura"><?= $lang["t-Invoice"] ?></th>
                                                    <th class="sort" data-sort="Date"><?= $lang["t-Date"] ?></th>
                                                    <th class="sort" data-sort="Sub"><?= $lang["t-Sub"] ?></th>
                                                    <th class="sort" data-sort="IVA">IVA</th>
                                                    <th class="sort" data-sort="Total">Total</th>
                                                    <th class="sort" data-sort="action"><?= $lang["t-Action"] ?></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">

                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">kevin</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">01</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Melvin Orellana</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">02</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Mauricio Pleitez</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">03</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">David Hernandez</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">04</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Balmore Landaverde</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">05</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Roberto Moreno</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">06</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Diego Moreno</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">07</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Gorge Preza</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">08</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option5">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2105</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Laura Maria</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">09</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option12">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2112</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="customer_name">Sindy Monrroy</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Factura">010</td>
                                                    <td class="Date">14 Apr, 2021</td>
                                                    <td class="Sub">$50</td>
                                                    <td class="IVA">10%</td>
                                                    <td class="Total">$55</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                </lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                    orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Top Proveedores</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="simple_pie_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Top productos</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="barChartTopProductos" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->





                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field" class="form-label">ID</label>
                                        <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label"><?= $lang["t-proveedor"] ?></label>
                                        <input type="text" id="customername-field" class="form-control" placeholder="<?= $lang["t-proveedor"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label"><?= $lang["t-Customer"] ?></label>
                                        <input type="email" id="email-field" class="form-control" placeholder="<?= $lang["t-Customer"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-Image"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-Image"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label"><?= $lang["t-Invoice"] ?></label>
                                        <input type="text" id="date-field" class="form-control" placeholder="<?= $lang["t-Invoice"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label"><?= $lang["t-Date"] ?></label>
                                        <input type="text" id="date-field" class="form-control" placeholder="<?= $lang["t-Date"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label"><?= $lang["t-Sub"] ?></label>
                                        <input type="text" id="date-field" class="form-control" placeholder="<?= $lang["t-Sub"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">IVA</label>
                                        <input type="text" id="date-field" class="form-control" placeholder="IVA" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Total</label>
                                        <input type="text" id="date-field" class="form-control" placeholder="Total" required />
                                    </div>

                                    <div>
                                        <label for="status-field" class="form-label"><?= $lang["t-Status"] ?></label>
                                        <select class="form-control" data-trigger name="status-field" id="status-field">
                                            <option value="">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Block</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= $lang['t-CloseCategory'] ?></button>
                                        <button type="submit" class="btn btn-success" id="add-btn"><?= $lang['t-AddBuy'] ?></button>
                                        <button type="button" class="btn btn-success" id="edit-btn"><?= $lang['t-UpdateCategory'] ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                        <h4>Are you Sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- CUSTOMIZER THEME  -->
<!-- <?php include 'layouts/customizer.php'; ?> -->

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- prismjs plugin -->
<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/libs/list.js/list.min.js"></script>
<script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- piecharts init -->
<script src="assets/js/pages/apexcharts-pie.init.js"></script>
<!-- listjs init -->
<script src="assets/js/pages/listjs.init.js"></script>

<!-- charts owns  -->
<script src="assets/js/pages/charts-own.js"></script>


<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>