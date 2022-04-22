<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?= $lang['t-producto'] ?></title>
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
                            <h4 class="mb-sm-0"><?= $lang['t-ListOfProducts'] ?></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active"><?= $lang['t-products'] ?></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header">
                                <h4 class="card-title mb-0">Lista de Productos</h4>
                            </div>

                            <div class="card-body">
                                <div id="customerList">


                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">

                                            <div>
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
                                                    <th class="sort" data-sort="products_name"><?= $lang["t-products"] ?></th>
                                                    <th class="sort" data-sort="Mark"><?= $lang["t-Mark"] ?></th>
                                                    <th class="sort" data-sort="Model"><?= $lang["t-Model"] ?></th>
                                                    <th class="sort" data-sort="Descontinuado"><?= $lang["t-Discontinued"] ?></th>
                                                    <th class="sort" data-sort="Note"><?= $lang["t-Note"] ?></th>
                                                    <th class="sort" data-sort="Status"><?= $lang["t-Status"] ?></th>
                                                    <th class="sort" data-sort="Status"><?= $lang["t-Action"] ?></th>
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
                                                    <td class="products_name">Acordeón</td>
                                                    <td class="Mark">CASIO</td>
                                                    <td class="Model">FR-18</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">Acordeon Electronico</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Órgano</td>
                                                    <td class="Mark">CASIO</td>
                                                    <td class="Model">Celviano</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">De soplo mecánico</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Armonio</td>
                                                    <td class="Mark">CASIO</td>
                                                    <td class="Model"> palisandro 17DX</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">órgano portátil</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Flauta</td>
                                                    <td class="Mark">Yamaha </td>
                                                    <td class="Model">Sopranino</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – madera</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Clarinete</td>
                                                    <td class="Mark">Yamaha</td>
                                                    <td class="Model">Bb Bass</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – madera</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Corno inglés</td>
                                                    <td class="Mark">Roland</td>
                                                    <td class="Model">Corno</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – madera</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Chirimía</td>
                                                    <td class="Mark">Korg</td>
                                                    <td class="Model">George </td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – madera</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Dulzaina</td>
                                                    <td class="Mark">Korg</td>
                                                    <td class="Model">Paco Blasco</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – madera</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Saxofón</td>
                                                    <td class="Mark">Fender</td>
                                                    <td class="Model">Tenor</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Serpentón</td>
                                                    <td class="Mark">Gibson</td>
                                                    <td class="Model">Antiguo</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trompeta</td>
                                                    <td class="Mark">Yamaha</td>
                                                    <td class="Model">Profesional</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trompeta</td>
                                                    <td class="Mark">STOMVI</td>
                                                    <td class="Model">Intermedio</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trompeta</td>
                                                    <td class="Mark">Fides</td>
                                                    <td class="Model">Principiantes</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trombón</td>
                                                    <td class="Mark">Eastman</td>
                                                    <td class="Model">ETB526</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trombón</td>
                                                    <td class="Mark">Jupiter</td>
                                                    <td class="Model">JSL1150FROQ</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trombón</td>
                                                    <td class="Mark">Courtois</td>
                                                    <td class="Model">AC280</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trombón</td>
                                                    <td class="Mark">Bach</td>
                                                    <td class="Model">TR450</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Trombón</td>
                                                    <td class="Mark">Yamaha</td>
                                                    <td class="Model">YSL-448GE</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Tuba</td>
                                                    <td class="Mark">Liverpool</td>
                                                    <td class="Model">Bombardino</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Tuba</td>
                                                    <td class="Mark">Liverpool</td>
                                                    <td class="Model">Trombón</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Tuba</td>
                                                    <td class="Mark">Roland</td>
                                                    <td class="Model">Wagner</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">viento – metal</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Batería</td>
                                                    <td class="Mark">Calcio</td>
                                                    <td class="Model">VRLA</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">percusión o idiófonos</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="products_name">Bateria</td>
                                                    <td class="Mark">Gibson</td>
                                                    <td class="Model">Voyager</td>
                                                    <td class="Descontinuado">No</td>
                                                    <td class="Note">percusión o idiófonos</td>
                                                    <td class="Status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                            </div>
                        </div>
                    </div>

                </div>





                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabe">Añadir producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form>

                                <div class="modal-body">

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field" class="form-label">ID</label>
                                        <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label"><?= $lang["t-products"] ?></label>
                                        <input type="text" id="customername-field" class="form-control" placeholder="<?= $lang["t-products"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label"><?= $lang["t-Mark"] ?></label>
                                        <input type="email" id="email-field" class="form-control" placeholder="<?= $lang["t-Mark"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-Model"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-Model"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label"><?= $lang["t-Discontinued"] ?></label>
                                        <input type="text" id="date-field" class="form-control" placeholder="<?= $lang["t-Discontinued"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label"><?= $lang["t-Note"] ?></label>
                                        <input type="text" id="date-field" class="form-control" placeholder="<?= $lang["t-Note"] ?>" required />
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
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= $lang["t-CloseCategory"] ?></button>
                                        <button type="submit" class="btn btn-success" id="add-btn"><?= $lang["t-AddProduct"] ?></button>
                                        <button type="button" class="btn btn-success" id="edit-btn"><?= $lang["t-UpdateCategory"] ?></button>
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


<script src="assets/js/pages/listjs.init.js"></script>


<script src="assets/js/app.js"></script>
</body>

</html>