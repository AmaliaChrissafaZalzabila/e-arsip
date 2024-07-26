<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?= isset($title) ? $title : 'Limitless - Responsive Web Application Kit by Eugene Kopyov'; ?></title>

    <!-- Global stylesheets -->
    <link href="<?= base_url('assets/bo/fonts/inter/inter.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/bo/icons/phosphor/styles.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/bo/css/ltr/all.min.css'); ?>" id="stylesheet" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/bo/css/icons/icomoon/styles.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?= base_url('assets/bo/demo/demo_configurator.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/main/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/main/bootstrap.bundle.min.js'); ?>"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <!-- PAGES -->
    <script src="<?= base_url('assets/bo/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/pages/dashboard.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/streamgraph.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/sparklines.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/lines.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/areas.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/donuts.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/bars.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/progress.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/heatmaps.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/pies.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/bullets.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/demo_pages/navigation_horizontal_mega.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/pages/sidebar_components.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/pages/navbar_components.js'); ?>"></script>


    <!-- VENDOR -->
    <script src="<?= base_url('assets/bo/js/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/forms/selects/select2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/forms/selects/bootstrap_multiselect.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/forms/inputs/dual_listbox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/pickers/datepicker.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/dragula.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/media/glightbox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/trees/fancytree_all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/sliders/nouislider.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/prism.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/pickers/color/spectrum.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/moment/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/pickers/daterangepicker.js'); ?>"></script>

    <script src="<?= base_url('assets/bo/js/vendor/visualization/d3/d3.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/visualization/d3/d3_tooltip.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/plugins/ui/prism.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/prism.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/plugins/ui/slinky.min.js'); ?>"></script>
    <!-- /theme JS files -->

</head>

<body>

    <?php if ((isset($multipleNavbar) ? $multipleNavbar : 1) == 0) { ?>

        <div class="<?= isset($navbar) ? $navbar : 'navbar-static'; ?>">
            <!-- Main navbar -->
            <div class="navbar navbar-dark navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="d-flex d-lg-none me-2">
                        <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                            <i class="ph-list"></i>
                        </button>
                    </div>

                    <div class="navbar-brand flex-1 flex-lg-0">
                        <a href="index.html" class="d-inline-flex align-items-center">
                            <img src="<?= base_url('assets/bo/images/logo_icon.svg'); ?>" alt="" />
                            <img src="<?= base_url('assets/bo/images/logo_text_light.svg'); ?>" class="d-none d-sm-inline-block h-16px ms-3" alt="" />
                        </a>
                    </div>

                    <ul class="nav flex-row">
                        <li class="nav-item d-lg-none">
                            <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
                                <i class="ph-magnifying-glass"></i>
                            </a>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ph-chats"></i>
                                <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                            </a>

                        </li>
                    </ul>
                    <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                        <li class="nav-item ms-lg-2">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
                                <i class="ph-bell"></i>
                                <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                            </a>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                            <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                                <div class="status-indicator-container">
                                    <img src="<?= base_url('assets/bo/images/demo/users/hasan.png'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                    <span class="status-indicator bg-success"></span>
                                </div>
                                <span class="d-none d-lg-inline-block mx-lg-2">CV AMINS</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-user-circle me-2"></i>
                                    My profile
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-currency-circle-dollar me-2"></i>
                                    My subscription
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shopping-cart me-2"></i>
                                    My orders
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-envelope-open me-2"></i>
                                    My inbox
                                    <span class="badge bg-primary rounded-pill ms-auto">26</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    Account settings
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-sign-out me-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /main navbar -->

            <!-- Alternative navbar -->
            <div class="navbar navbar-sm border-bottom">
                <div class="container-fluid">
                    <ul class="nav align-items-center">
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-branch"></i>
                                    <span class="d-none d-md-inline-block ms-2">Branches</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-merge"></i>
                                    <span class="d-none d-md-inline-block ms-2">Merges</span>
                                    <span class="badge bg-yellow text-black rounded-pill ms-1 ms-md-2">5</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-pull-request"></i>
                                    <span class="d-none d-md-inline-block ms-2">Pull Requests</span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav align-items-center">
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-fork"></i>
                                    <span class="d-none d-md-inline-block ms-2">Repositories</span>
                                    <span class="badge bg-yellow text-black rounded-pill ms-1 ms-md-2">28</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /alternative navbar -->

        </div>

    <?php } else { ?>

        <!-- Main navbar -->
        <div class="navbar navbar-dark navbar-expand-lg <?= isset($navbar) ? $navbar : 'navbar-static'; ?>">
            <div class="container-fluid">
                <div class="d-flex d-lg-none me-2">
                    <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                        <i class="ph-list"></i>
                    </button>
                </div>

                <div class="navbar-brand flex-1 flex-lg-0">
                    <a href="index.html" class="d-inline-flex align-items-center">
                        <img src="<?= base_url('assets/bo/images/logo_icon.svg'); ?>" alt="" />
                        <img src="<?= base_url('assets/bo/images/logo_text_light.svg'); ?>" class="d-none d-sm-inline-block h-16px ms-3" alt="" />
                    </a>
                </div>

                <ul class="nav flex-row">
                    <li class="nav-item d-lg-none">
                        <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
                            <i class="ph-magnifying-glass"></i>
                        </a>
                    </li>
                </ul>

                <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                    <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                        <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                            <div class="status-indicator-container">
                                <img src="<?= base_url('assets/bo/images/demo/users/hasan.png'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                <span class="status-indicator bg-success"></span>
                            </div>
                            <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-user-circle me-2"></i>
                                My profile
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                My subscription
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-shopping-cart me-2"></i>
                                My orders
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-envelope-open me-2"></i>
                                My inbox
                                <span class="badge bg-primary rounded-pill ms-auto">26</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-gear me-2"></i>
                                Account settings
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-sign-out me-2"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->

        <!-- Breadcrumbs -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="#" class="breadcrumb-item"></a>
                        <span class="breadcrumb-item active"><?= isset($title) ? $title : ''; ?></span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                    <div class="d-lg-flex mb-2 mb-lg-0">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /breadcrumbs -->
    <?php } ?>

    <!-- Page header -->
    <div class="page-header <?= ((isset($multipleNavbar) ? $multipleNavbar : 1) == 0) ? 'mt-5' : ''; ?>">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">Home - <span class="fw-normal"><?= isset($title) ? $title : ''; ?></span></h4>

                <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>

            <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                    <div class="dropdown w-100 w-sm-auto">
                        <a href="#" class="d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2" data-bs-toggle="dropdown" data-bs-display="static">
                            <img src="<?= base_url('assets/bo/images/brands/tesla.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                            <div class="me-auto me-lg-1">
                                <div class="fs-sm text-muted mb-1">Customer</div>
                                <div class="fw-semibold">Tesla Motors Inc</div>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0">
                            <div class="d-flex align-items-center p-3">
                                <h6 class="fw-semibold mb-0">Customers</h6>
                                <a href="#" class="ms-auto">
                                    View all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>
                            <a href="#" class="dropdown-item active py-2">
                                <img src="<?= base_url('assets/bo/images/brands/tesla.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">Tesla Motors Inc</div>
                                    <div class="fs-sm text-muted">42 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/debijenkorf.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">De Bijenkorf</div>
                                    <div class="fs-sm text-muted">49 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/klm.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">Royal Dutch Airlines</div>
                                    <div class="fs-sm text-muted">18 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/shell.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">Royal Dutch Shell</div>
                                    <div class="fs-sm text-muted">54 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/bp.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">BP plc</div>
                                    <div class="fs-sm text-muted">23 users</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="vr d-none d-sm-block flex-shrink-0 my-2 mx-3"></div>

                    <div class="d-inline-flex mt-3 mt-sm-0">
                        <a href="#" class="status-indicator-container ms-1">
                            <img src="<?= base_url('assets/bo/images/demo/users/face24.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                            <span class="status-indicator bg-warning"></span>
                        </a>
                        <a href="#" class="status-indicator-container ms-1">
                            <img src="<?= base_url('assets/bo/images/demo/users/face1.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                            <span class="status-indicator bg-success"></span>
                        </a>
                        <a href="#" class="status-indicator-container ms-1">
                            <img src="<?= base_url('assets/bo/images/demo/users/face3.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                            <span class="status-indicator bg-danger"></span>
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3">
                            <i class="ph-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Page content -->
    <div class="page-content pt-0">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-expand-lg align-self-start <?= isset($sidebar) ? $sidebar : ''; ?>">
            <!-- Sidebar content -->
            <div class="sidebar-content">
                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-center">
                        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                        <div>
                            <button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->

                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>" class="nav-link <?= isset($active_dashboard) ? $active_dashboard : ''; ?>">
                                <i class="ph-house"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <!-- Main -->
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">DOKUMEN</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-note-blank"></i>
                                <span>Dokumen</span>
                            </a>
                            <ul class="nav-group-sub collapse" data-submenu-title="Themes">
                                <li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
                                <li class="nav-item">
                                    <a href="../../../LTR/material/full/index.html" class="nav-link disabled">Material <span class="opacity-75 fs-sm ms-auto">Coming soon</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="opacity-75 fs-sm ms-auto">Coming soon</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- Main -->
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">SURAT</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-envelope-open"></i>
                                <span>Surat Masuk</span>
                            </a>
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-envelope-open"></i>
                                <span>Surat Keluar</span>
                            </a>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('other_changelog'); ?>" class="nav-link">
                                <i class="ph-list-numbers"></i>
                                <span>Changelog</span>
                                <span class="badge bg-primary align-self-center rounded-pill ms-auto">4.0</span>
                            </a>
                        </li> -->

                        <!-- Layout -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">MASTER</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_layout) ? $open_layout : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-list"></i>
                                <span>Master</span>
                            </a>

                            <ul class="nav-group-sub collapse <?= isset($show_layout) ? $show_layout : ''; ?>" data-submenu-title="Page layouts">
                                <li class="nav-item"><a href="<?= base_url('layout/fixed_navbar'); ?>" class="nav-link <?= isset($active_fixedNavbar) ? $active_fixedNavbar : ''; ?>">Jenis Dokumen</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Unit Kerja</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Pengguna</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Role</a></li>
                        <!-- /layout -->
                    </ul>
                    <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">LAPORAN</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_layout) ? $open_layout : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-lifebuoy"></i>
                                <span>Laporan</span>
                            </a>
                            <ul class="nav-group-sub collapse <?= isset($show_layout) ? $show_layout : ''; ?>" data-submenu-title="Page layouts">
                                <li class="nav-item"><a href="<?= base_url('layout/fixed_navbar'); ?>" class="nav-link <?= isset($active_fixedNavbar) ? $active_fixedNavbar : ''; ?>">Download</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Surat Masuk</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Surat Keluar</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Log Data</a></li>
                        <!-- /layout -->
                    </ul>
                            <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">PENGATURAN</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_layout) ? $open_layout : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-gear"></i>
                                <span>Pengaturan</span>
                            </a>
                            <ul class="nav-group-sub collapse <?= isset($show_layout) ? $show_layout : ''; ?>" data-submenu-title="Page layouts">
                                <li class="nav-item"><a href="<?= base_url('layout/fixed_navbar'); ?>" class="nav-link <?= isset($active_fixedNavbar) ? $active_fixedNavbar : ''; ?>">Pengaturan</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Backup DB</a></li>
                    </ul>
                </div>
                <!-- /main navigation -->
            </div>
            <!-- /sidebar content -->
        </div>
        <!-- /main sidebar -->