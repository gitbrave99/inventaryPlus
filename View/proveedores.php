<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?= $lang['t-proveedor'] ?></title>
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
                            <h4 class="mb-sm-0"><?= $lang["t-ListOfSuppliers"] ?></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active">Proveedores</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0"><?= $lang["t-ListOfSuppliers"] ?></h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="supplierTableList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <!-- Borrar -->
                                            <button type="button" class="btn btndel remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                <i class="ri-delete-bin-fill align-center text-white" style="font-size: 16px"></i>
                                            </button>
                                            <!-- Agregar -->
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalEditAddSupplier">
                                                <i class=" ri-file-add-fill align-center" style="font-size: 16px;"></i>
                                            </button>
                                            <!-- Imprimir -->
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="print-btn" data-bs-target="#showModalEditAddSupplier">
                                                <i class=" ri-printer-line align-center" style="font-size: 16px"></i>
                                            </button>

                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search" placeholder="Search...">
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
                                                    <th class="sort" data-sort="email"><?= $lang["t-Direction"] ?></th>
                                                    <th class="sort" data-sort="phone"><?= $lang["t-Phone"] ?></th>
                                                    <th class="sort" data-sort="Country"><?= $lang["t-Country"] ?></th>
                                                    <th class="sort" data-sort="email"><?= $lang["t-Email"] ?></th>
                                                    <th class="sort" data-sort="Url">Url</th>
                                                    <th class="sort" data-sort="Status"><?= $lang["t-Status"] ?></th>
                                                    <th class="sort" data-sort="action"><?= $lang["t-Action"] ?></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">

                                            <?php
                                                include_once '../Controller/Supplier/readSupplier.php';
                                            ?>

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
                                                <?= $lang["t-Previous"] ?>
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                <?= $lang["t-Next"] ?>
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

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>

<script type="text/javascript">
    // Pasamos el arreglo de la tabla a js, para poder manejar esos datos en tiempo real en el archivo proveedores.js
    // $datosSupplier viene de View/Data/Proveedores/proveedores_data.php
    var passedArray =
        <?php echo json_encode($datosSupplier); ?>
</script>


<!-- CUSTOMIZER THEME  -->
<!-- <?php include 'layouts/customizer.php'; ?> -->

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- prismjs plugin -->
<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/libs/list.js/list.min.js"></script>
<script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

<!-- listjs init -->
<script src="assets/js/pages/proveedores-list-table.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/proveedores.js"></script>

<?php
    include_once 'public/proveedores-create-modal.html';
    include_once 'public/proveedores-edit-modal.html';
    include_once 'public/proveedores-delete-modal.html';
 ?>

</body>

</html>