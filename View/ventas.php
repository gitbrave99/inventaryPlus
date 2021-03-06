<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Ventas</title>
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
                            <h4 class="mb-sm-0"><?= $lang["t-SellList"] ?></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active"><?= $lang["t-Sale"] ?>s</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
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
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Total <?= $lang["t-Sale"] ?>s</p>
                                        <h4 class=" mb-0">$<span class="counter-value" data-target="2390.68">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        </span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"><?= $lang["t-Sale"] ?>s</p>
                                        <h4 class=" mb-0"><span class="counter-value" data-target="10">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        </span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0"><?= $lang["t-SellList"] ?></h4>
                            </div>

                            <div class="card-body">
                                <div id="supplierTableList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <button type="button" class="btn btndel" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                    <i class="ri-delete-bin-fill align-center text-white" style="font-size: 16px"></i>
                                                </button>

                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalEditAddSupplier">
                                                    <i class=" ri-file-add-fill align-center" style="font-size: 16px;"></i>
                                                </button>

                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalEditAddSupplier">
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
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="nofactura">No. Factura</th>
                                                    <th class="sort" data-sort="fecha">Fecha</th>
                                                    <th class="sort" data-sort="descuento">Descuento</th>
                                                    <th class="sort" data-sort="subtotal">Sub Total</th>
                                                    <th class="sort" data-sort="total">total</th>
                                                    <th class="sort" data-sort="verdetalle">Ver detalle</th>
                                                    <th class="sort" data-sort="status">Estatus</th>
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
                                                    <td class="nofactura">12</td>
                                                    <td class="fecha">12/07/12</td>
                                                    <td class="descuento">0</td>
                                                    <td class="subtotal">12</td>
                                                    <td class="total">14</td>
                                                    <td class="verdetalle">
                                                        <button type="button" class="btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showmodalDetalleVenta">
                                                            <i class="mdi mdi-eye-arrow-right mdi-24px badge-soft-secondary"></i>
                                                        </button>
                                                    </td>
                                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditAddSupplier">Edit</button>
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
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2001</a></td>
                                                    <td class="nofactura">13</td>
                                                    <td class="fecha">9/07/12</td>
                                                    <td class="descuento">0</td>
                                                    <td class="subtotal">2</td>
                                                    <td class="total">3</td>
                                                    <td class="verdetalle">
                                                        <button type="button" class="btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showmodalDetalleVenta">
                                                            <i class="mdi mdi-eye-arrow-right mdi-24px badge-soft-secondary"></i>
                                                        </button>
                                                    </td>
                                                    <td class="status"><span class="badge badge-soft-danger text-uppercase">Block</span></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditAddSupplier">Edit</button>
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
                            </div>
                        </div>
                    </div>

                </div>





                <!-- MODAL MOSTRAR DETALLE VENTA  -->
                <div class="modal fade fadeInLeft" id="showmodalDetalleVenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="titleModaldetalleCompra">Detalle de VENTA</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div id="detalleVentaTableList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalEditAdddetalleventa"><i class="ri-add-line align-bottom me-1"></i> Add</button>
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
                                            <table class="table align-middle table-nowrap" id="detalleVentaTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAlldtventa" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="dtvproductname">Producto</th>
                                                        <th class="sort" data-sort="dtvcantidad">Cantidad</th>
                                                        <th class="sort" data-sort="dtvpreciounitario">Precio Unitario</th>
                                                        <th class="sort" data-sort="dtvmonto">Monto</th>
                                                        <th class="sort" data-sort="status">Estado</th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all-dtventa">
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="checkAlldtventa" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="dtvid" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="dtvproductname">Viol??n ac??stico</td>
                                                        <td class="dtvcantidad">12</td>
                                                        <td class="dtvpreciounitario">784.5</td>
                                                        <td class="dtvmonto">800</td>
                                                        <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditAdddetalleventa">Edit</button>
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
                                                                <input class="form-check-input" type="checkbox" name="checkAlldtventa" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="dtvid" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2103</a></td>
                                                        <td class="dtvproductname">Guitarra</td>
                                                        <td class="dtvcantidad">2</td>
                                                        <td class="dtvpreciounitario">500</td>
                                                        <td class="dtvmonto">600</td>
                                                        <td class="status"><span class="badge badge-soft-danger text-uppercase">Block</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModalEditAdddetalleventa">Edit</button>
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






                <!-- DMODAL EXTRA EDITAR DETALLE VENTA  -->
                <div class="modal fade" id="showModalEditAdddetalleventa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="titleModalEditAdd"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="dtvid-field" class="form-label">ID</label>
                                        <input type="text" id="dtvid-field" class="form-control" placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="dtvproductname-field" class="form-label">Producto</label>
                                        <input type="text" id="dtvproductname-field" class="form-control" placeholder="Enter Name" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="dtvcantidad-field" class="form-label">Cantidad</label>
                                        <input type="text" id="dtvcantidad-field" class="form-control" placeholder="Enter description" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="dtvpreciounitario-field" class="form-label">Precio Unitario</label>
                                        <input type="text" id="dtvpreciounitario-field" class="form-control" placeholder="78459885" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="dtvmonto-field" class="form-label">Monto</label>
                                        <input type="text" id="dtvmonto-field" class="form-control" placeholder="Santa Ana" required />
                                    </div>
                                    <div>
                                        <label for="dtvstatus-field" class="form-label">Status</label>
                                        <select class="form-control" data-trigger name="dtvstatus-field" id="dtvstatus-field">
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


                <!-- modal editar venta  -->
                <div class="modal fade" id="showModalEditAddSupplier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <div class="mb-3">
                                        <label for="fecha-field" class="form-label">Fecha</label>
                                        <input type="date" id="fecha-field" class="form-control" placeholder="Select Date" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="descuento-field" class="form-label">descuento</label>
                                        <input type="text" id="descuento-field" class="form-control" placeholder="Enter description" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="subtotal-field" class="form-label">subtotal</label>
                                        <input type="text" id="subtotal-field" class="form-control" placeholder="78459885" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="total-field" class="form-label">Total</label>
                                        <input type="text" id="total-field" class="form-control" placeholder="Santa Ana" required />
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


<script src="assets/js/pages/venta-list-table.js"></script>
<script src="assets/js/pages/detalleVenta-list-table.js"></script>


<script src="assets/js/app.js"></script>
</body>

</html>