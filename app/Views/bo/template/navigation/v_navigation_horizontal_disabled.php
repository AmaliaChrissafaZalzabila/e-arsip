<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">

        <!-- Disabled items -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Disabled items</h5>
            </div>

            <div class="card-body">
                <p class="mb-3">Disabled state of horizontal navbar navigation with dropdown menu is also controlled by CSS and JS - CSS disables all pointer events and JS disables click action in submenu. Styles of all disabled state are defined in SASS and can be easily changed in a set of either SASS or CSS variables. To disable single item, add <code>.disabled</code> to any <code>.navbar-nav-link</code> element, to disable nested menu levels in dropdown menu - add <code>.disabled</code> class to <code>.dropdown-submenu</code> container. In this case children list of nav items that comes right after nav link won't be toggleable.</p>

                <p class="fw-semibold">In light navbar:</p>
                <div class="navbar navbar-expand-xl border rounded mb-3">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index.html" class="d-inline-flex align-items-center">
                                <img src="<?= base_url('assets/bo/images/logo_icon.svg'); ?>" alt="">
                                <h4 class="d-none d-sm-inline-block text-body lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none ms-3">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-demo-light">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse order-2 order-xl-1" id="navbar-demo-light">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded disabled">
                                        <i class="ph-circles-four me-2"></i>
                                        Disabled link
                                    </a>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle disabled" data-bs-toggle="dropdown">
                                        <i class="ph-presentation-chart me-2"></i>
                                        Disabled menu
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Link 1</a>
                                        <a href="#" class="dropdown-item">Link 2</a>
                                        <a href="#" class="dropdown-item">Link 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">Link 4</a>
                                        <a href="#" class="dropdown-item">Link 5</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear me-2"></i>
                                        Disabled levels
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Second level</a>
                                        <div class="dropdown-submenu">
                                            <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Third level</a>
                                                <div class="dropdown-submenu disabled">
                                                    <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                                    <div class="dropdown-menu">
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="dropdown-item">Third level</a>
                                            </div>
                                        </div>
                                        <a href="#" class="dropdown-item disabled">Second level</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <ul class="nav order-1 order-xl-2 ms-auto">
                            <li class="nav-item dropdown">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon dropdown-toggle rounded disabled" data-bs-toggle="dropdown">
                                    <i class="ph-chats"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Link 1</a>
                                    <a href="#" class="dropdown-item">Link 2</a>
                                    <a href="#" class="dropdown-item">Link 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Link 4</a>
                                    <a href="#" class="dropdown-item">Link 5</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded disabled" data-bs-toggle="dropdown">
                                    <i class="ph-bell"></i>
                                    <span class="bg-pink position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill p-1 mt-1 me-1"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Link 1</a>
                                    <a href="#" class="dropdown-item">Link 2</a>
                                    <a href="#" class="dropdown-item">Link 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Link 4</a>
                                    <a href="#" class="dropdown-item">Link 5</a>
                                </div>
                            </li>

                            <li class="nav-item nav-item-dropdown-xl dropdown ms-1">
                                <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                    <div class="status-indicator-container">
                                        <img src="<?= base_url('assets/bo/images/demo/users/face11.jpg'); ?>" class="w-32px h-32px rounded-1" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </div>
                                    <span class="d-none d-xl-inline-block mx-xl-2">Victoria</span>
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

                <p class="fw-semibold">In dark navbar:</p>
                <div class="navbar navbar-expand-xl navbar-dark rounded">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="index.html" class="d-inline-flex align-items-center">
                                <img src="<?= base_url('assets/bo/images/logo_icon.svg'); ?>" alt="">
                                <h4 class="d-none d-sm-inline-block text-white lh-1 mb-0 ms-3">Limitless</h4>
                            </a>
                        </div>

                        <div class="d-xl-none ms-3">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-demo-dark">
                                <i class="ph-list"></i>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse order-2 order-xl-1" id="navbar-demo-dark">
                            <ul class="navbar-nav mt-2 mt-xl-0">
                                <li class="nav-item">
                                    <a href="#" class="navbar-nav-link rounded disabled">
                                        <i class="ph-circles-four me-2"></i>
                                        Disabled link
                                    </a>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle disabled" data-bs-toggle="dropdown">
                                        <i class="ph-presentation-chart me-2"></i>
                                        Disabled menu
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Link 1</a>
                                        <a href="#" class="dropdown-item">Link 2</a>
                                        <a href="#" class="dropdown-item">Link 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">Link 4</a>
                                        <a href="#" class="dropdown-item">Link 5</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown ms-xl-1">
                                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="ph-gear me-2"></i>
                                        Disabled levels
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Second level</a>
                                        <div class="dropdown-submenu">
                                            <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Third level</a>
                                                <div class="dropdown-submenu disabled">
                                                    <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                                    <div class="dropdown-menu">
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                        <a href="#" class="dropdown-item">Fourth level</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="dropdown-item">Third level</a>
                                            </div>
                                        </div>
                                        <a href="#" class="dropdown-item disabled">Second level</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <ul class="nav order-1 order-xl-2 ms-auto">
                            <li class="nav-item dropdown">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon dropdown-toggle rounded disabled" data-bs-toggle="dropdown">
                                    <i class="ph-chats"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Link 1</a>
                                    <a href="#" class="dropdown-item">Link 2</a>
                                    <a href="#" class="dropdown-item">Link 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Link 4</a>
                                    <a href="#" class="dropdown-item">Link 5</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown ms-1">
                                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded disabled" data-bs-toggle="dropdown">
                                    <i class="ph-bell"></i>
                                    <span class="bg-pink position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill p-1 mt-1 me-1"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">Link 1</a>
                                    <a href="#" class="dropdown-item">Link 2</a>
                                    <a href="#" class="dropdown-item">Link 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Link 4</a>
                                    <a href="#" class="dropdown-item">Link 5</a>
                                </div>
                            </li>

                            <li class="nav-item nav-item-dropdown-xl dropdown ms-1">
                                <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown">
                                    <div class="status-indicator-container">
                                        <img src="<?= base_url('assets/bo/images/demo/users/face11.jpg'); ?>" class="w-32px h-32px rounded-1" alt="">
                                        <span class="status-indicator bg-success"></span>
                                    </div>
                                    <span class="d-none d-xl-inline-block mx-xl-2">Victoria</span>
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
            </div>
        </div>
        <!-- /disabled items -->


        <!-- Navigation classes -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Navigation classes</h5>
            </div>

            <div class="card-body">
                This table contains all classes related to the horizontal navbar navigation. Navbar navigation links build on default <code>.nav</code> options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code>.nav-item</code> and <code>.nav-link</code>.
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 20%;">Class</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>.nav</code></td>
                            <td>Global wrapper for navigation list. It uses default Bootstrap's styles of <code>.nav</code> component and similar markup options.</td>
                        </tr>
                        <tr>
                            <td><code>.navbar-nav</code></td>
                            <td>for a full-height and lightweight navigation (including support for dropdowns).</td>
                        </tr>
                        <tr>
                            <td><code>.nav-item</code></td>
                            <td>This class is required in an immediate nav link parent element in any <code>.nav</code> container: sidebar, navbar, nav groups, tabs, pills etc.</td>
                        </tr>
                        <tr>
                            <td><code>.nav-item.dropdown</code></td>
                            <td>Combination of these classes is required for items with dropdown menu - nav item with <code>.dropdown</code> class is a dropdown toggle and menu wrapper that declares <code>position: relative;</code>.</td>
                        </tr>
                        <tr>
                            <td><code>.nav-item.nav-item-dropdown-[breakpoint]</code></td>
                            <td>Combination of these classes keeps default dropdown menus appearance on mobile. Use it only in nav links outside <code>.navbar-collapse</code> container as the behaviour of menus in collapsible containers is different</td>
                        </tr>
                        <tr>
                            <td><code>.nav-item.dropup</code></td>
                            <td>Same as <code>.dropdown</code>, but this class is required in bottom navbars, because it triggers dropdown menus above elements in navbar. Dropdown caret direction in bottom navbar also depends on this class.</td>
                        </tr>
                        <tr>
                            <td><code>.navbar-nav-link</code></td>
                            <td>A custom class, unlike Bootstrap's default <code>.nav-link</code> class it doesn't affect navs in dropdowns. This class is responsible for navigation link styling and is also required as a part of nav list element structure. It's also a target for <code>.active</code> and <code>.disabled</code> classes.</td>
                        </tr>
                        <tr>
                            <td><code>.navbar-nav-link-icon</code></td>
                            <td>For navigation items that contain icon only. This class adjusts left and right paddings to make sure that proportions are preserved.</td>
                        </tr>

                        <tr>
                            <td><code>.dropdown-scrollable</code></td>
                            <td>This class sets <code>max-height</code> to the dropdown body and adds vertical scrollbar. Can be added to child container to make only body scrollable or to the entire <code>.dropdown-menu</code>. Default max-height value is <code>340px</code>.</td>
                        </tr>
                        <tr>
                            <td><code>.w-[breakpoint]-[value]</code></td>
                            <td>Set of responsive utility classes that set <code>min-width</code> property to the <code>.dropdown-menu</code> container. Very useful in dropdowns with long content. Available options for <strong>[value]</strong> (in pixels): 200, 250, 300, 350, 400, 450, 500, 550, 600.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /navigation classes -->


        <!-- Navigation markup -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Navigation markup</h5>
            </div>

            <div class="card-body">
                <h6>Navigation alignment</h6>
                <p class="mb-3">Navigation in the navbar can be aligned to the <strong>left</strong>, <strong>right</strong> or <strong>center</strong>. By default it's aligned to the left (right in RTL direction). Since parent container is flexible, you need to use <a href="content_helpers_flex.html">flex utility classes</a> to change default alignment: add <code>.justify-content-[breakpoint]-[property]</code> to <code>.navbar-collapse</code> container and/or responsive <code>spacing</code> utilities to push content to the right and horizontal spacing between navigation containers. On mobiles all navigation items within <code>.navbar-collapse</code> container are stackable by default. Make sure you use same breakpoint in all navbar elements. Examples below demonstrate <strong>left (start)</strong> (default) and <strong>right (end)</strong> nav container alignments.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <p class="fw-semibold">Left navigation alignment:</p>
                        <pre class="language-markup mb-3 mb-lg-4" data-line="5">
									<code>
										&lt;!-- Navbar collapse container -->
										&lt;div class="collapse navbar-collapse" id="navbar-mobile">

											&lt;!-- Left aligned navigation -->
											&lt;ul class="navbar-nav">
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item dropdown">
													&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
														Dropdown
													&lt;/a>

													&lt;div class="dropdown-menu">
														&lt;a href="#" class="dropdown-item">Action&lt;/a>
														&lt;a href="#" class="dropdown-item">Another action&lt;/a>
														&lt;a href="#" class="dropdown-item">One more action&lt;/a>
													&lt;/div>
												&lt;/li>
											&lt;/ul>
											&lt;!-- /left aligned navigation -->

											[...]

										&lt;/div>
										&lt;!-- /navbar collapse container -->
									</code>
								</pre>
                    </div>

                    <div class="col-lg-6">
                        <p class="fw-semibold">Right navigation alignment:</p>
                        <pre class="language-markup mb-3 mb-lg-4" data-line="7">
									<code>
										&lt;!-- Navbar collapse container -->
										&lt;div class="collapse navbar-collapse" id="navbar-mobile">

											[...]

											&lt;!-- Right aligned navigation -->
											&lt;ul class="navbar-nav ms-auto">
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
												&lt;li class="nav-item dropdown">
													&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
														Dropdown
													&lt;/a>

													&lt;div class="dropdown-menu">
														&lt;a href="#" class="dropdown-item">Action&lt;/a>
														&lt;a href="#" class="dropdown-item">Another action&lt;/a>
														&lt;a href="#" class="dropdown-item">One more action&lt;/a>
													&lt;/div>
												&lt;/li>
											&lt;/ul>
											&lt;!-- /right aligned navigation -->

										&lt;/div>
										&lt;!-- /navbar collapse container -->
									</code>
								</pre>
                    </div>
                </div>


                <h6>Navigation item states</h6>
                <p class="mb-3">Navbar navigation items support 2 state classes: <code>active</code> and <code>disabled</code>. In <code>active</code> state nav links appear pressed, with a darker background and stronger text. Please note: <code>.active</code> class doesn't open dropdown menu, it just highlights links. If navigation link has class <code>.disabled</code>, JS blocks user interaction (basically disabled click event) and CSS mutes the link down. If this class is added to the <code>.dropdown-toggle</code> navigation element, dropdown menu won't be toggled. Examples below demonstrate active/disabled states markup.</p>

                <div class="row">
                    <div class="col-lg-6">
                        <p class="fw-semibold">Active item/dropdown state:</p>
                        <pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11">
									<code>
										&lt;!-- Active state -->
										&lt;ul class="navbar-nav">
											&lt;li>&lt;a href="#" class="navbar-nav-link active">Active link&lt;/a>&lt;/li>
											&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
											&lt;li class="nav-item dropdown">
												&lt;a href="#" class="navbar-nav-link dropdown-toggle active" data-bs-toggle="dropdown">
													Active dropdown
												&lt;/a>

												&lt;div class="dropdown-menu">
													&lt;a href="#" class="dropdown-item active">Active action&lt;/a>
													&lt;a href="#" class="dropdown-item">Another action&lt;/a>
													&lt;div class="dropdown-divider">&lt;/div>
													&lt;a href="#" class="dropdown-item">One more action&lt;/a>
												&lt;/div>
											&lt;/li>
										&lt;/ul>
										&lt;!-- /active state -->
									</code>
								</pre>
                    </div>

                    <div class="col-lg-6">
                        <p class="fw-semibold">Disabled item/dropdown state:</p>
                        <pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11">
									<code>
										&lt;!-- Disabled state -->
										&lt;ul class="navbar-nav">
											&lt;li>&lt;a href="#" class="navbar-nav-link disabled">Disabled link&lt;/a>&lt;/li>
											&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
											&lt;li class="nav-item dropdown">
												&lt;a href="#" class="navbar-nav-link dropdown-toggle disabled" data-bs-toggle="dropdown">
													Disabled dropdown
												&lt;/a>

												&lt;div class="dropdown-menu">
													&lt;a href="#" class="dropdown-item disabled">Disabled action&lt;/a>
													&lt;a href="#" class="dropdown-item">Another action&lt;/a>
													&lt;div class="dropdown-divider">&lt;/div>
													&lt;a href="#" class="dropdown-item">One more action&lt;/a>
												&lt;/div>
											&lt;/li>
										&lt;/ul>
										&lt;!-- /disabled state -->
									</code>
								</pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- /navigation markup -->

    </div>
    <!-- /content area -->

</div>
<!-- /main content -->