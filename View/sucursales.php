<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?= $lang['t-sucursal'] ?></title>
    <?php include 'layouts/title-meta.php'; ?>

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
                            <h4 class="mb-sm-0"><?= $lang["t-BranchList"] ?></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active"><?= $lang["t-NameBranch"] ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0"><?= $lang["t-BranchList"] ?></h4>
                            </div>

                            <div class="card-body">
                                <div id="sucursalesTableList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <button type="button" class="btn btndel remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                    <i class="ri-delete-bin-fill align-center text-white" style="font-size: 16px"></i>
                                                </button>

                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalEditAddSucursal">
                                                    <i class=" ri-file-add-fill align-center" style="font-size: 16px;"></i>
                                                </button>

                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalEditAddSucursal">
                                                    <i class=" ri-printer-line align-center" style="font-size: 16px"></i>
                                                </button>
                                            </div>
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
                                        <table class="table align-middle table-nowrap" id="sucursalTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="sucursal_name">Sucursal</th>
                                                    <th class="sort" data-sort="imagen">Imagen</th>
                                                    <th class="sort" data-sort="direccion">Direcci??n</th>
                                                    <th class="sort" data-sort="telefono">Tel??fono</th>
                                                    <th class="sort" data-sort="ciudad">Ciudad</th>
                                                    <th class="sort" data-sort="email">Email</th>
                                                    <th class="sort" data-sort="status">Estado</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="sucursal_name">Mary Cousar</td>
                                                    <td>
                                                        <img class="imagen" src="./assets/images/bg-auth.jpg" alt="" width="10px" height="10px">
                                                    </td>
                                                    <td class="direccion">Santa Ana</td>
                                                    <td class="telefono">7845-9854</td>
                                                    <td class="ciudad">Santa Ana</td>
                                                    <td class="email">marycousar@gmail.com</td>
                                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditAddSucursal">Edit</button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2103</a></td>
                                                    <td class="sucursal_name">Susana</td>
                                                    <td>
                                                        <img class="imagen" src="./assets/images/bg-auth.jpg" alt="" width="10px" height="10px">
                                                    </td>
                                                    <td class="direccion">avenida fray felipe</td>
                                                    <td class="telefono">1111-9854</td>
                                                    <td class="ciudad">Chalchuapa</td>
                                                    <td class="email">tecana@gmail.com</td>
                                                    <td class="status"><span class="badge badge-soft-danger text-uppercase">Block</span></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditAddSucursal">Edit</button>
                                                            </div>
                                                            <div class="remove">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
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
                                                <p class="text-muted mb-0">
                                                    We've searched more than 150+ Orders We did not find any
                                                    orders for you search
                                                </p>
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
                    </div>

                </div>




                <div class="modal fade" id="showModalEditAddSucursal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="titleModalEditAdd"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field" class="form-label">ID</label>
                                        <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3" id="boxPreviewImage">
                                        <img src="" id="previewEditImgSucursal" alt="preview Edit category" width="200" height="150px" style="display: none;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sucursalname-field" class="form-label">Nombre</label>
                                        <input type="text" id="sucursalname-field" class="form-control" placeholder="Enter Name" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="imagen-field" class="form-label">Imagen</label>
                                        <input type="file" id="imagen-field" class="form-control" value="" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccion-field" class="form-label">Descripci??n</label>
                                        <input type="text" id="direccion-field" class="form-control" placeholder="Enter description" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono-field" class="form-label">Tel??fono</label>
                                        <input type="text" id="telefono-field" class="form-control" placeholder="78459885" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="ciudad-field" class="form-label">Ciudad</label>
                                        <input type="text" id="ciudad-field" class="form-control" placeholder="Santa Ana" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Email</label>
                                        <input type="text" id="email-field" class="form-control" placeholder="jaunperez@gmail.com" required />
                                    </div>

                                    <div>
                                        <label for="status-field" class="form-label">Status</label>
                                        <select class="form-control" data-trigger name="status-field" id="status-field">
                                            <option value="">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Block</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                        <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



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

            </div>
        </div>
        <?php include 'layouts/footer.php'; ?>
    </div>
</div>


<?php include 'layouts/customizer.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/libs/list.js/list.min.js"></script>
<script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>


<script src="assets/js/pages/sucursal-list-table.js"></script>


<script src="assets/js/app.js"></script>
</body>

</html>