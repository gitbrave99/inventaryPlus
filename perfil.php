<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Profile | Velzon - Admin & Dashboard Template</title>
    <?php include 'layouts/title-meta.php'; ?>
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>
    <div class="main-content">

        <div class="page-content">
        <div class="container-fluid">
                <div class="profile-foreground position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg">
                        <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                    </div>
                </div>
                <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                    <div class="row g-4">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="assets/images/perfilblanco.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-2">
                                <h3 class="text-white mb-1">Balmore Alejanro</h3>
                                <p class="text-white-75">Gerente</p>
                                <div class="hstack text-white-50 gap-1">
                                    <div><i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Nombre sucursal</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="d-flex">
                                <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                            <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Informacion</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="flex-shrink-0">
                                    <a href="editar-perfil.php" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                </div>
                            </div>
                            <div class="tab-content pt-4 text-muted">
                                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">Info</h5>
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Full Name :</th>
                                                                    <td class="text-muted">Balmore landaverde</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Mobile :</th>
                                                                    <td class="text-muted">+(1) 987 6543</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">E-mail :</th>
                                                                    <td class="text-muted">daveadame@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Location :</th>
                                                                    <td class="text-muted">California, United States</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Joining Date</th>
                                                                    <td class="text-muted">24 Nov 202</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="documents" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4">
                                                <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                                <div class="flex-shrink-0">
                                                    <input class="form-control d-none" type="file" id="formFile">
                                                    <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">File Name</th>
                                                                    <th scope="col">Type</th>
                                                                    <th scope="col">Size</th>
                                                                    <th scope="col">Upload Date</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div class="avatar-title bg-soft-primary text-primary rounded fs-20 shadow">
                                                                                    <i class="ri-file-zip-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0)">Artboard-documents.zip</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Zip File</td>
                                                                    <td>4.57 MB</td>
                                                                    <td>12 Dec 2021</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                <i class="ri-equalizer-fill"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div class="avatar-title bg-soft-danger text-danger rounded fs-20 shadow">
                                                                                    <i class="ri-file-pdf-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Bank Management System</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>PDF File</td>
                                                                    <td>8.89 MB</td>
                                                                    <td>24 Nov 2021</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                <i class="ri-equalizer-fill"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div class="avatar-title bg-soft-secondary text-secondary rounded fs-20 shadow">
                                                                                    <i class="ri-video-line"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Tour-video.mp4</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>MP4 File</td>
                                                                    <td>14.62 MB</td>
                                                                    <td>19 Nov 2021</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                <i class="ri-equalizer-fill"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink4">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div class="avatar-title bg-soft-success text-success rounded fs-20 shadow">
                                                                                    <i class="ri-file-excel-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Account-statement.xsl</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>XSL File</td>
                                                                    <td>2.38 KB</td>
                                                                    <td>14 Nov 2021</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                <i class="ri-equalizer-fill"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div class="avatar-title bg-soft-info text-info rounded fs-20 shadow">
                                                                                    <i class="ri-folder-line"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Project Screenshots Collection</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Floder File</td>
                                                                    <td>87.24 MB</td>
                                                                    <td>08 Nov 2021</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                <i class="ri-equalizer-fill"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink6">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div class="avatar-title bg-soft-danger text-danger rounded fs-20 shadow">
                                                                                    <i class="ri-image-2-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Velzon-logo.png</a></h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>PNG File</td>
                                                                    <td>879 KB</td>
                                                                    <td>02 Nov 2021</td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                <i class="ri-equalizer-fill"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink7">
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <a href="javascript:void(0);" class="text-success "><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<script src="assets/js/pages/profile.init.js"></script>

<script src="assets/js/app.js"></script>
</body>

</html>