<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?= $lang['t-empleado'] ?></title>
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
                            <h4 class="mb-sm-0"><?= $lang["t-ListOfEmployees"] ?></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active"><?= $lang["t-ListOfEmployees"] ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0"><?= $lang["t-ListOfEmployees"] ?></h4>
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
                                                    <th class="sort" data-sort="NameUser"><?= $lang["t-NameUser"] ?></th>
                                                    <th class="sort" data-sort="DuiUser"><?= $lang["t-DuiUser"] ?></th>
                                                    <th class="sort" data-sort="Direction"><?= $lang["t-Direction"] ?></th>
                                                    <th class="sort" data-sort="Email"><?= $lang["t-Email"] ?></th>
                                                    <th class="sort" data-sort="Image"><?= $lang["t-Image"] ?></th>
                                                    <th class="sort" data-sort="Note"><?= $lang["t-Note"] ?></th>
                                                    <th class="sort" data-sort="Phone"><?= $lang["t-Phone"] ?></th>
                                                    <th class="sort" data-sort="RolUser"><?= $lang["t-RolUser"] ?></th>
                                                    <th class="sort" data-sort="NameBranch"><?= $lang["t-NameBranch"] ?></th>
                                                    <th class="sort" data-sort="Status"><?= $lang["t-Status"] ?></th>
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
                                                    <td class="NameUser">Mary Cousar</td>
                                                    <td class="DuiUser">1234567-8</td>
                                                    <td class="Direction">Col Santa Ana Norte, Santa Ana</td>
                                                    <td class="Email">marycousar@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">0581-5656</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Jeff Taylor</td>
                                                    <td class="DuiUser">125347-8</td>
                                                    <td class="Direction">Col Ivu, Santa Ana</td>
                                                    <td class="Email">jefftaylor@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">863-577-5537</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Robert McMahon</td>
                                                    <td class="DuiUser">8734567-8</td>
                                                    <td class="Direction">Col Sihua, Santa Ana</td>
                                                    <td class="Email">robertmcmahon@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Exelente</td>
                                                    <td class="Phone">786-253-9927</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Michael Morris</td>
                                                    <td class="DuiUser">9834567-8</td>
                                                    <td class="Direction">Col Rio Zarco, Santa Ana</td>
                                                    <td class="Email">michaelmorris@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">805-447-8398</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Kevin Dawson</td>
                                                    <td class="DuiUser">9894567-8</td>
                                                    <td class="Direction">Col Pagani, Santa Ana</td>
                                                    <td class="Email">kevindawson@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Exelente</td>
                                                    <td class="Phone">213-741-4294</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Carolyn Jones</td>
                                                    <td class="DuiUser">1234567-8</td>
                                                    <td class="Direction">Col Santa Ana Norte, Santa Ana</td>
                                                    <td class="Email">carolynjones@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">0581-5656</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Glen Matney</td>
                                                    <td class="DuiUser">1234567-8</td>
                                                    <td class="Direction">Col Luis Talpa, Santa Ana</td>
                                                    <td class="Email">glenmatney@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Excelente</td>
                                                    <td class="Phone">231-480-8536</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Herbert Stokes</td>
                                                    <td class="DuiUser">6757567-8</td>
                                                    <td class="Direction">Col Santa Ana Norte, Santa Ana</td>
                                                    <td class="Email">herbertstokes@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado desde 2 años</td>
                                                    <td class="Phone">312-944-1448</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Timothy Smith</td>
                                                    <td class="DuiUser">1234567-8</td>
                                                    <td class="Direction">Col Santa Ana Norte, Santa Ana</td>
                                                    <td class="Email">timothysmith@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">973-277-6950</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Johnny Evans</td>
                                                    <td class="DuiUser">1234987-8</td>
                                                    <td class="Direction">Col Santa Ana Norte, Santa Ana</td>
                                                    <td class="Email">johnnyevans@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">407-645-1767</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Kevin Dawson</td>
                                                    <td class="DuiUser">552546-8</td>
                                                    <td class="Direction">Col Peña Block D, Santa Ana</td>
                                                    <td class="Email">kevindawson@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">213-741-4294</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Luis Mendez</td>
                                                    <td class="DuiUser">1565567-8</td>
                                                    <td class="Direction">Col Santa Ana Norte, Santa Ana</td>
                                                    <td class="Email">Mendez44r@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">9681-5656</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                                    <td class="NameUser">Gladis Leyva</td>
                                                    <td class="DuiUser">1238967-8</td>
                                                    <td class="Direction">Col Santa Lucia, Santa Ana</td>
                                                    <td class="Email">Gladis@velzon.com</td>
                                                    <td class="Image">Image.PNG</td>
                                                    <td class="Note">Empleado Nuevo</td>
                                                    <td class="Phone">5655-9874</td>
                                                    <td class="RolUser">Vendedor</td>
                                                    <td class="NameBranch">OXXO</td>

                                                    <td class="status"><span class="badge badge-soft-success text-uppercase"><?= $lang["t-Active"] ?></span></td>
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
                                <h5 class="modal-title" id="">Agregar Empleado</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field" class="form-label">ID</label>
                                        <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label"><?= $lang["t-NameUser"] ?></label>
                                        <input type="text" id="customername-field" class="form-control" placeholder="<?= $lang["t-NameUser"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label"><?= $lang["t-DuiUser"] ?></label>
                                        <input type="email" id="email-field" class="form-control" placeholder="<?= $lang["t-DuiUser"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-Direction"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-Direction"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-Email"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-Email"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-Image"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-Image"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-Note"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-Note"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-Phone"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-Phone"] ?>" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="tipoemp-field" class="form-label">Tipo</label>
                                        <select class="form-select mb-3" id="tipoemp-field" aria-label="Default select example">
                                            <option disabled selected>Open this select menu</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Gerente</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label"><?= $lang["t-NameBranch"] ?></label>
                                        <input type="text" id="phone-field" class="form-control" placeholder="<?= $lang["t-NameBranch"] ?>" required />
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
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= $lang['t-CloseCategory'] ?></button>
                                        <button type="submit" class="btn btn-success" id="add-btn"><?= $lang['t-AddUser'] ?></button>
                                        <button type="button" class="btn btn-success" id="edit-btn"><?= $lang['t-UpdateCategory'] ?></button>
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