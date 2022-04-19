<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn shadow-none topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="d-none form-control" placeholder="Search..." autocomplete="off"
                            id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon d-none"></span>
                        <span  class=" hidden mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                            id="search-close-options"></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                         
 
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown ms-1 topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="20"
                            class="rounded">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="?lang=en" class="dropdown-item notify-item language py-2" data-lang="en"
                            title="English">
                            <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="?lang=sp" class="dropdown-item notify-item language py-2 language" data-lang="sp"
                            title="Spanish">
                            <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Española</span>
                        </a>

                         
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-category-alt fs-22'></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fw-semibold fs-15">Más aplicaciones </h6>
                                </div>
                                <!-- <div class="col-auto">
                                    <a href="#!" class="btn btn-sm btn-soft-info shadow-none"> View All Apps
                                        <i class="ri-arrow-right-s-line align-middle"></i></a>
                                </div> -->
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://meet.google.com/">
                                        <img src="assets/images/brands/meet.png" alt="Github">
                                        <span>Meet</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://teams.microsoft.com/">
                                        <img src="assets/images/brands/teams.png" alt="bitbucket">
                                        <span>Teams</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://zoom.us/">
                                        <img src="assets/images/brands/zoom.png" alt="dribbble">
                                        <span>Zoom</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://sv.linkedin.com/">
                                        <img src="assets/images/brands/linkedin.png" alt="LinkedIn">
                                        <span>LinkedIn</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://mail.google.com/">
                                        <img src="assets/images/brands/gmail.png" alt="mail_chimp">
                                        <span>Gmail</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://slack.com/">
                                        <img src="assets/images/brands/slack.png" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon light-dark-mode btn-topbar btn-ghost-secondary rounded-circle shadow-none">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                 

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn  shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Balmore Landaverde</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Gerente</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Opciones</h6>
                        <a class="dropdown-item" href="perfil.php"><i
                                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Profile</span></a>
                        <!-- <a class="dropdown-item" href="apps-chat.php"><i
                                class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="apps-tasks-kanban.php"><i
                                class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Taskboard</span></a>
                        <a class="dropdown-item" href="pages-faqs.php"><i
                                class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-profile.php"><i
                                class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Balance : <b>$5971.67</b></span></a> -->
                        <!-- <a class="dropdown-item" href="pages-profile-settings.php"><span
                                class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Settings</span></a> -->
                        <!-- <a class="dropdown-item" href="auth-lockscreen-basic.php"><i
                                class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i>
                                 <span class="align-middle">Lock screen</span>
                        </a> -->
                        <a class="dropdown-item" href="logout.php"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" ><?=$lang['t-logout']?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
