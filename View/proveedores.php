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
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <!-- Borrar -->
                                            <button type="button" class="btn btndel remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                <i class="ri-delete-bin-fill align-center text-white" style="font-size: 16px"></i>
                                            </button>
                                            <!-- Agregar -->
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#createModal">
                                                <i class=" ri-file-add-fill align-center" style="font-size: 16px;"></i>
                                            </button>
                                            <!-- Imprimir -->
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="print-btn" data-bs-target="">
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
                                                <!-- <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="proveedor_name">Yamaha</td>
                                                    <td class="email">Pasadena California 865 st</td>
                                                    <td class="phone">580-464-4694</td>
                                                    <td class="phone">LA California</td>
                                                    <td class="phone">Yamaha@velzon.com</td>
                                                    <td class="Url"><a href="https://www.yamaha.com/">https://www.yamaha.com/</a></td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal"><?= $lang["t-Edit"] ?></button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><?= $lang["t-Remove"] ?></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr> -->


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
                <!-- Aqui se incluyen los modals -->

                <?php
                    include_once 'public/proveedores-create-modal.html';
                    include_once 'public/proveedores-edit-modal.html';
                ?>
                

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

<!-- listjs init -->
<script src="assets/js/pages/listjs.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>