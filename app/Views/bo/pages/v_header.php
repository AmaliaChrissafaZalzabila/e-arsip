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
                                <i class="ph-folder"></i>
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
                                <i class="ph-envelope"></i>
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
                        <li class="menunav-item nav-item-sub <?= isset($open_layout) ? $open_layout : ''; ?>">
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