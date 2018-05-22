<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?php echo asset_url();?>/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="<?php echo asset_url();?>css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="<?php echo base_url(); ?>">ദാക്ഷായണിയമ്മ ബിസ്കട്ട്സ് <br>[ബില്ലിംഗ് സോഫ്റ്റ്‌വെയർ] </a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="#" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Messages

                                <div class="actions">
                                    <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <a href="#" class="listview__item">
                                    <img src="<?php echo asset_url();?>demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="<?php echo asset_url();?>/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="<?php echo asset_url();?>/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="<?php echo asset_url();?>/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="<?php echo asset_url();?>/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                        <a href="#" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Notifications

                                <div class="actions">
                                    <a href="#" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <div class="listview__scroll scrollbar-inner">
                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="<?php echo asset_url();?>/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">Tasks</div>

                            <div class="listview listview--hover">
                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">HTML5 Validation Report</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Google Chrome Extension</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Social Intranet Projects</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Bootstrap Admin Template</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Youtube Client App</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all Tasks</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">Calendar</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Files</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">Email</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">Reports</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">News</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">Gallery</small>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                            <a href="#" class="dropdown-item">Clear Local Storage</a>
                            <a href="#" class="dropdown-item">Settings</a>
                        </div>
                    </li>

                    <li class="hidden-xs-down">
                        <a href="#" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
                    </li>
                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="time__hours"></span>
                        <span class="time__min"></span>
                        <span class="time__sec"></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar sidebar--hidden">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="<?php echo asset_url();?>/demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="<?php echo site_url('Dashboard/logout'); ?>">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="@@indexactive"><a href="<?php echo base_url(); ?>"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="#"><i class="zmdi zmdi-view-week"></i> Variants</a>

                            <ul>
                                <li class="navigation__active"><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li class="@@boxedactive"><a href="boxed-layout.html">Boxed Layout</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                            </ul>
                        </li>

                        <li class="@@typeactive"><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

                        <li class="@@widgetactive"><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li class="@@normaltableactive"><a href="html-table.html">HTML Table</a></li>
                                <li class="@@datatableactive"><a href="data-table.html">Data Table</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@formactive">
                            <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                            <ul>
                                <li class="@@formelementactive"><a href="form-elements.html">Basic Form Elements</a></li>
                                <li class="@@formcomponentactive"><a href="form-components.html">Form Components</a></li>
                                <li class="@@formvalidationactive"><a href="form-validation.html">Form Validation</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@uiactive">
                            <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                            <ul>
                                <li class="@@colorsactive"><a href="colors.html">Colors</a></li>
                                <li class="@@cssanimationsactive"><a href="css-animations.html">CSS Animations</a></li>
                                <li class="@@buttonsactive"><a href="buttons.html">Buttons</a></li>
                                <li class="@@iconsactive"><a href="icons.html">Icons</a></li>
                                <li class="@@listviewactive"><a href="listview.html">Listview</a></li>
                                <li class="@@toolbarsactive"><a href="toolbars.html">Toolbars</a></li>
                                <li class="@@cardsactive"><a href="cards.html">Cards</a></li>
                                <li class="@@alertactive"><a href="alerts.html">Alerts</a></li>
                                <li class="@@badgesactive"><a href="badges.html">Badges</a></li>
                                <li class="@@breadcrumbsactive"><a href="breadcrumbs.html">Bredcrumbs</a></li>
                                <li class="@@jumbotronactive"><a href="jumbotron.html">Jumbotron</a></li>
                                <li class="@@navsactive"><a href="navs.html">Navs</a></li>
                                <li class="@@paginationactive"><a href="pagination.html">Pagination</a></li>
                                <li class="@@progressactive"><a href="progress.html">Progress</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@componentsactive">
                            <a href="#"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                            <ul class="navigation__sub">
                                <li class="@@carouselactive"><a href="carousel.html">Carousel</a></li>
                                <li class="@@collapseactive"><a href="collapse.html">Collapse</a></li>
                                <li class="@@dropdownsactive"><a href="dropdowns.html">Dropdowns</a></li>
                                <li class="@@modalsactive"><a href="modals.html">Modals</a></li>
                                <li class="@@popoveractive"><a href="popover.html">Popover</a></li>
                                <li class="@@tabsactive"><a href="tabs.html">Tabs</a></li>
                                <li class="@@tooltipsactive"><a href="tooltips.html">Tooltips</a></li>
                                <li class="@@notificationsactive"><a href="notifications-alerts.html">Notifications & Alerts</a></li>
                                <li class="@@treeactive"><a href="treeview.html">Tree View</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@chartsactive">
                            <a href="#"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                            <ul>
                                <li class="@@flotchartsactive"><a href="flot-charts.html">Flot</a></li>
                                <li class="@@otherchartsactive"><a href="other-charts.html">Other Charts</a></li>
                            </ul>
                        </li>

                        <li class="@@calendaractive"><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

                        <li class="@@photogalleryactive"><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

                        <li class="navigation__sub @@samplepagesactive">
                            <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                            <ul>
                                <li class="@@profileactive"><a href="profile-about.html">Profile</a></li>
                                <li class="@@messagesactive"><a href="messages.html">Messages</a></li>
                                <li class="@@contactsactive"><a href="contacts.html">Contacts</a></li>
                                <li class="@@newcontactsactive"><a href="new-contact.html">New Contact</a></li>
                                <li class="@@groupsactive"><a href="groups.html">Groups</a></li>
                                <li class="@@pricingtablesactive"><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li class="@@invoiceactive"><a href="invoice.html">Invoice</a></li>
                                <li class="@@todoactive"><a href="todo-lists.html">Todo Lists</a></li>
                                <li class="@@notesactive"><a href="notes.html">Notes</a></li>
                                <li class="@@searchresultsactive"><a href="search-results.html">Search Results</a></li>
                                <li class="@@issuesactive"><a href="issue-tracker.html">Issues Tracker</a></li>
                                <li class="@@faqactive"><a href="faq.html">FAQ</a></li>
                                <li class="@@teamactive"><a href="team.html">Team</a></li>
                                <li class="@@blogactive"><a href="blog.html">Blog</a></li>
                                <li class="@@blogdetailactive"><a href="blog-detail.html">Blog Detail</a></li>
                                <li class="@@qaactive"><a href="questions-answers.html">Questions & Answers</a></li>
                                <li class="@@qadetailactive"><a href="questions-answers-details.html">Questions & Answers Details</a></li>
                                <li class="@@loginactive"><a href="login.html">Login & SignUp</a></li>
                                <li class="@@lockscreenactive"><a href="lockscreen.html">Lockscreen</a></li>
                                <li class="@@lockscreenactive"><a href="404.html">404</a></li>
                                <li class="@@emptyactive"><a href="empty.html">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="themes">
    <div class="scrollbar-inner">
        <a href="#" class="themes__item active" data-sa-value="1"><img src="<?php echo asset_url();?>/img/bg/1.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="2"><img src="<?php echo asset_url();?>/img/bg/2.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="3"><img src="<?php echo asset_url();?>/img/bg/3.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="4"><img src="<?php echo asset_url();?>/img/bg/4.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="5"><img src="<?php echo asset_url();?>/img/bg/5.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="6"><img src="<?php echo asset_url();?>/img/bg/6.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="7"><img src="<?php echo asset_url();?>/img/bg/7.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="8"><img src="<?php echo asset_url();?>/img/bg/8.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="9"><img src="<?php echo asset_url();?>/img/bg/9.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="10"><img src="<?php echo asset_url();?>/img/bg/10.jpg" alt=""></a>
    </div>
</div>

            <section class="content content--full">
                <header class="content__title">
                    <h1>Dashboard</h1>
                    <small>Welcome to the unique SuperAdmin web app experience!</small>
                </header>

                <div class="row quick-stats">
                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>987,459</h2>
                                <small>Total Leads Recieved</small>
                            </div>

                            <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>356,785K</h2>
                                <small>Total Website Clicks</small>
                            </div>

                            <div class="quick-stats__chart peity-bar">4,7,6,2,5,3,8,6,6,4,8</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>$58,778</h2>
                                <small>Total Sales Orders</small>
                            </div>

                            <div class="quick-stats__chart peity-bar">9,4,6,5,6,4,5,7,9,3,6</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>214</h2>
                                <small>Total Support Tickets</small>
                            </div>

                            <div class="quick-stats__chart peity-bar">5,6,3,9,7,5,4,6,5,6,4</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Statistics</h4>
                                <h6 class="card-subtitle">Vestibulum purus quam scelerisque, mollis nonummy metus</h6>

                                <div class="flot-chart flot-curved-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--curved"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Growth Rate</h4>
                                <h6 class="card-subtitle">Commodo luctus nisi erat porttitor ligula eget lacinia odio semnec</h6>

                                <div class="flot-chart flot-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-columns>
                   <!--  <div class="card">
                        <img class="card-img-top" src="/demo/img/widgets/note.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Pellentesque Ligula Fringilla</h4>
                            <h6 class="card-subtitle">by Malinda Hollaway on 19th June 2015 at 09:10 AM</h6>

                            <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.</p>
                            <a href="#" class="view-more text-left">View Article...</a>
                        </div>
                    </div> -->

                    <!-- <div class="card widget-visitors">
                        <div class="card-body">
                            <h4 class="card-title">Realtime Visitors</h4>
                            <h6 class="card-subtitle">Nullam dolor isnibh ultricies vehicula adipiscing</h6>

                            <div class="widget-visitors__stats">
                                <div>
                                    <strong>23528</strong>
                                    <small>Visitor for last 24 hours</small>
                                </div>
                                <div>
                                    <strong>746</strong>
                                    <small>Visitors last 30 minutes</small>
                                </div>
                            </div>

                            <div class="widget-visitors__map map-visitors"></div>
                        </div>

                        <div class="listview listview--bordered">
                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Sunday, September 4, 21:44:02 (2 Mins 56 Seconds)</div>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="/demo/img/flags/United_States_of_America.png" alt=""> United States</span>
                                        <span>Firefox</span>
                                        <span>Mac OSX</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Sunday, September 4, 20:21:01 (5 Mins 12 Seconds)</div>

                                   
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Sunday, September 4, 20:21:10 (10 Mins 43 Seconds)</div>

                                    
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Sunday, September 4, 20:59:04 (1 Min 02 Seconds)</div>

                                  
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Sunday, September 4, 20:58:12 (3 Min 44 Seconds)</div>

                                </div>
                            </div>

                            <div class="p-3"></div>
                        </div>
                    </div> -->

                    <div class="card widget-past-days">
                        <div class="card-body">
                            <h4 class="card-title">For the past 30 days</h4>
                            <h6 class="card-subtitle">Pellentesque ornare sem lacinia quam</h6>
                        </div>

                        <div class="flot-chart flot-chart--sm flot-past-days"></div>

                        <div class="listview listview--bordered">
                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Page Views</small>
                                    <h3>47,896,536</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="peity-bar">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Site Visitors</small>
                                    <h3>24,456,799</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="peity-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Total Clicks</small>
                                    <h3>13,965</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="peity-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Total Returns</small>
                                    <h3>198</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="peity-bar">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card todo">
                        <div class="card-body">
                            <h4 class="card-title">Todo lists</h4>
                            <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
                        </div>
                        <div class="listview">
                            <div class="listview__item">
                                <label class="custom-control custom-control--char todo__item">
                                    <input class="custom-control-input" type="checkbox" value="" checked>
                                    <span class="custom-control--char__helper"><i>F</i></span>
                                    <div class="todo__info">
                                        <span>Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor</span>
                                        <small>Today at 8.30 AM</small>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Messages</span>
                                        <span>!!!</span>
                                    </div>
                                </label>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-control--char todo__item">
                                    <input class="custom-control-input" type="checkbox" value="" checked>
                                    <span class="custom-control--char__helper"><i>N</i></span>
                                    <div class="todo__info">
                                        <span>Nullam id dolor id nibh ultricies vehicula ut id elit</span>
                                        <small>Today at 12.30 PM</small>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Clients</span>
                                        <span>!!</span>
                                    </div>
                                </label>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-control--char todo__item">
                                    <input class="custom-control-input" type="checkbox" value="">
                                    <span class="custom-control--char__helper"><i>C</i></span>
                                    <div class="todo__info">
                                        <span>Cras mattis consectetur purus sit amet fermentum</span>
                                        <small>Tomorrow at 10.30 AM</small>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Clients</span>
                                        <span>!!</span>
                                    </div>
                                </label>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-control--char todo__item">
                                    <input class="custom-control-input" type="checkbox" value="">
                                    <span class="custom-control--char__helper"><i>I</i></span>
                                    <div class="todo__info">
                                        <span>Integer posuere erat a ante venenatis dapibus posuere velit aliquet</span>
                                        <small>05/08/2017 at 08.00 AM</small>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Server</span>
                                        <span>!</span>
                                    </div>
                                </label>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-control--char todo__item">
                                    <input class="custom-control-input" type="checkbox" value="">
                                    <span class="custom-control--char__helper"><i>P</i></span>
                                    <div class="todo__info">
                                        <span>Praesent commodo cursus magnavel scelerisque nisl consectetur</span>
                                        <small>10/08/2016 at 04.00 AM</small>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Server</span>
                                        <span>!!!</span>
                                    </div>
                                </label>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="todos.html" class="view-more">View More</a>
                    </div> -->

                   <!--  <div class="card widget-pie">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="50" data-size="80" data-track-color="rgba(0,0,0,0.5)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">92</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Scheduled</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="11" data-size="80" data-track-color="rgba(0,0,0,0.35)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">11</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Bounced</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="52" data-size="80" data-track-color="rgba(0,0,0,0.35)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">52</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Opened</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="44" data-size="80" data-track-color="rgba(0,0,0,0.35)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">44</span>
                            </div>
                            <div class="widget-pie__title">Storage<br>Remaining</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="78" data-size="80" data-track-color="rgba(0,0,0,0.35)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">78</span>
                            </div>
                            <div class="widget-pie__title">Web Page<br> Views</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="32" data-size="80" data-track-color="rgba(0,0,0,0.35)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">32</span>
                            </div>
                            <div class="widget-pie__title">Server<br> Processing</div>
                        </div>
                    </div> -->

                    <div class="card widget-calendar">
                        <div class="actions">
                            <a href="calendar.html" class="actions__item zmdi zmdi-plus"></a>
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Refresh</a>
                                    <a class="dropdown-item" href="#">Calendar Settings</a>
                                </div>
                            </div>
                        </div>

                        <div class="widget-calendar__header">
                            <div class="widget-calendar__year"></div>
                            <div class="widget-calendar__day"></div>
                        </div>

                        <div class="widget-calendar__body"></div>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© ദാക്ഷായണിയമ്മ ബിസ്കട്ട്സ് . All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="#">Homepage</a>

                        <a class="nav-link" href="#">Company</a>

                        <a class="nav-link" href="#">Support</a>

                        <a class="nav-link" href="#">News</a>

                        <a class="nav-link" href="#">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="<?php echo asset_url();?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="<?php echo asset_url();?>/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/peity/jquery.peity.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="<?php echo asset_url();?>/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="<?php echo asset_url();?>/demo/js/flot-charts/curved-line.js"></script>
        <script src="<?php echo asset_url();?>/demo/js/flot-charts/line.js"></script>
        <script src="<?php echo asset_url();?>/demo/js/flot-charts/chart-tooltips.js"></script>
        <script src="<?php echo asset_url();?>/demo/js/other-charts.js"></script>
        <script src="<?php echo asset_url();?>/demo/js/jqvmap.js"></script>

        <!-- App functions and actions -->
        <script src="<?php echo asset_url();?>/js/app.min.js"></script>
    </body>

</html>