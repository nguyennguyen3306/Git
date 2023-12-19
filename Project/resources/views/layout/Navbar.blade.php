<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets\img\logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="assets\lib\perfect-scrollbar\css\perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css"
        href="assets\lib\material-design-icons\css\material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets\lib\jquery.vectormap\jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" type="text/css" href="assets\lib\jqvmap\jqvmap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\lib\datetimepicker\css\bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets\css\app.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
                <div class="be-navbar-header"><a class="navbar-brand" href="/"></a>
                </div>

                <div class="page-title"><span>Dashboard</span></div>

                @yield('user')

                @yield('role')

                @yield('schedule')

                @yield('process')

                @yield('edu')

                @yield('CourseCate')

                <div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false"><img
                                    src="assets\img\avatar.png" alt="Avatar"><span class="user-name">Túpac
                                    Amaru</span></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    {{-- ======================================================= --}}


















                                    
                                    <div class="user-name">Túpac Amaru</div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="pages-profile.html"><span
                                        class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item"
                                    href="#"><span class="icon mdi mdi-settings"></span>Settings</a><a
                                    class="dropdown-item" href="/logout"><span
                                        class="icon mdi mdi-power"></span>Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right be-icons-nav">
                        <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#"
                                role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false"><span
                                    class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                            <ul class="dropdown-menu be-notifications">
                                <li>
                                    <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                                    <div class="list">
                                        <div class="be-scroller-notifications">
                                            <div class="content">
                                                <ul>
                                                    <li class="notification notification-unread"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar2.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Jessica
                                                                        Caruso</span> accepted your invitation to join
                                                                    the team.</div><span class="date">2 min ago</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="notification"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar3.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Joel
                                                                        King</span> is now following you</div><span
                                                                    class="date">2 days ago</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="notification"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar4.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">John
                                                                        Doe</span> is watching your main repository
                                                                </div><span class="date">2 days ago</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="notification"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar5.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info"><span class="text"><span
                                                                        class="user-name">Emily Carter</span> is now
                                                                    following you</span><span class="date">5 days
                                                                    ago</span></div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false"><span
                                    class="icon mdi mdi-apps"></span></a>
                            <ul class="dropdown-menu be-connections">
                                <li>
                                    <div class="list">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\github.png"
                                                            alt="Github"><span>GitHub</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\bitbucket.png"
                                                            alt="Bitbucket"><span>Bitbucket</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\slack.png"
                                                            alt="Slack"><span>Slack</span></a></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\dribbble.png"
                                                            alt="Dribbble"><span>Dribbble</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\mail_chimp.png"
                                                            alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\dropbox.png"
                                                            alt="Dropbox"><span>Dropbox</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                










                </div>
            </div>
        </nav>
        <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="/">Dashboard</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                        <div class="left-sidebar-content">
                            <ul class="sidebar-elements">
                                <li class="divider">Menu</li>
                                <li class="active"><a href="/"><i
                                            class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI
                                            Elements</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="/users">User</a>
                                        </li>
                                        <li><a href="/role">Role</a>
                                        </li>
                                        <li><a href="/schedule">Schedule</a>
                                        </li>
                                        <li><a href="/process">Process</a>
                                        </li>
                                        <li><a href="/education">Education</a>
                                        </li>
                                        <li><a href="/CourseCate">CourseCate</a>
                                        </li>
                                        <li><a href="ui-notifications.html">Notifications</a>
                                        </li>
                                        <li><a href="ui-icons.html">Icons</a>
                                        </li>
                                        <li><a href="ui-grid.html">Grid</a>
                                        </li>
                                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                        </li>
                                        <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                                        </li>
                                        <li><a href="ui-typography.html">Typography</a>
                                        </li>
                                        <li><a href="ui-dragdrop.html"><span
                                                    class="badge badge-primary float-right">New</span>Drag &amp;
                                                Drop</a>
                                        </li>
                                        <li><a href="ui-sweetalert2.html"><span
                                                    class="badge badge-primary float-right">New</span>Sweetalert 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="charts.html"><i
                                            class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="charts-flot.html">Flot</a>
                                        </li>
                                        <li><a href="charts-sparkline.html">Sparklines</a>
                                        </li>
                                        <li><a href="charts-chartjs.html">Chart.js</a>
                                        </li>
                                        <li><a href="charts-morris.html">Morris.js</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="form-elements.html">Elements</a>
                                        </li>
                                        <li><a href="form-validation.html">Validation</a>
                                        </li>
                                        <li><a href="form-multiselect.html">Multiselect</a>
                                        </li>
                                        <li><a href="form-wizard.html">Wizard</a>
                                        </li>
                                        <li><a href="form-masks.html">Input Masks</a>
                                        </li>
                                        <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                        </li>
                                        <li><a href="form-upload.html">Multi Upload</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="tables-general.html">General</a>
                                        </li>
                                        <li><a href="tables-datatables.html">Data Tables</a>
                                        </li>
                                        <li><a href="tables-filters.html"><span
                                                    class="badge badge-primary float-right">New</span>Table Filters</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-layers"></i><span>Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="pages-blank.html">Blank Page</a>
                                        </li>
                                        <li><a href="pages-blank-header.html">Blank Page Header</a>
                                        </li>
                                        <li><a href="pages-login.html">Login</a>
                                        </li>
                                        <li><a href="pages-login2.html">Login v2</a>
                                        </li>
                                        <li><a href="pages-404.html">404 Page</a>
                                        </li>
                                        <li><a href="pages-sign-up.html">Sign Up</a>
                                        </li>
                                        <li><a href="pages-forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li><a href="pages-profile.html">Profile</a>
                                        </li>
                                        <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                                        </li>
                                        <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                                        </li>
                                        <li><a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li><a href="pages-timeline2.html">Timeline v2</a>
                                        </li>
                                        <li><a href="pages-invoice.html"><span
                                                    class="badge badge-primary float-right">New</span>Invoice</a>
                                        </li>
                                        <li><a href="pages-calendar.html">Calendar</a>
                                        </li>
                                        <li><a href="pages-gallery.html">Gallery</a>
                                        </li>
                                        <li><a href="pages-code-editor.html"><span
                                                    class="badge badge-primary float-right">New </span>Code Editor</a>
                                        </li>
                                        <li><a href="pages-booking.html"><span
                                                    class="badge badge-primary float-right">New</span>Booking</a>
                                        </li>
                                        <li><a href="pages-loaders.html"><span
                                                    class="badge badge-primary float-right">New</span>Loaders</a>
                                        </li>
                                        <li><a href="pages-ajax-loader.html"><span
                                                    class="badge badge-primary float-right">New</span>AJAX Loader</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider">Features</li>
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-inbox"></i><span>Email</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="email-inbox.html">Inbox</a>
                                        </li>
                                        <li><a href="email-read.html">Email Detail</a>
                                        </li>
                                        <li><a href="email-compose.html">Email Compose</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="layouts-primary-header.html">Primary Header</a>
                                        </li>
                                        <li><a href="layouts-success-header.html">Success Header</a>
                                        </li>
                                        <li><a href="layouts-warning-header.html">Warning Header</a>
                                        </li>
                                        <li><a href="layouts-danger-header.html">Danger Header</a>
                                        </li>
                                        <li><a href="layouts-search-input.html">Search Input</a>
                                        </li>
                                        <li><a href="layouts-offcanvas-menu.html">Off Canvas Menu</a>
                                        </li>
                                        <li><a href="layouts-top-menu.html"><span
                                                    class="badge badge-primary float-right">New</span>Top Menu</a>
                                        </li>
                                        <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                                        </li>
                                        <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                                        </li>
                                        <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                                        </li>
                                        <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                                        </li>
                                        <li><a href="layouts-boxed-layout.html"><span
                                                    class="badge badge-primary float-right">New</span>Boxed Layout</a>
                                        </li>
                                        <li><a href="pages-blank-aside.html">Page Aside</a>
                                        </li>
                                        <li><a href="layouts-collapsible-sidebar.html">Collapsible Sidebar</a>
                                        </li>
                                        <li><a href="layouts-sub-navigation.html"><span
                                                    class="badge badge-primary float-right">New</span>Sub
                                                Navigation</a>
                                        </li>
                                        <li><a href="layouts-mega-menu.html"><span
                                                    class="badge badge-primary float-right">New</span>Mega Menu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i
                                            class="icon mdi mdi-pin"></i><span>Maps</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="maps-google.html">Google Maps</a>
                                        </li>
                                        <li><a href="maps-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-folder"></i><span>Menu
                                            Levels</span></a>
                                    <ul class="sub-menu">
                                        <li class="parent"><a href="#"><i
                                                    class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                </li>
                                                <li class="parent"><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#"><i
                                                                    class="icon mdi mdi-undefined"></i><span>Level
                                                                    3</span></a>
                                                        </li>
                                                        <li><a href="#"><i
                                                                    class="icon mdi mdi-undefined"></i><span>Level
                                                                    3</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#"><i
                                                    class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                </li>
                                                <li class="parent"><a href="#"><i
                                                            class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#"><i
                                                                    class="icon mdi mdi-undefined"></i><span>Level
                                                                    3</span></a>
                                                        </li>
                                                        <li><a href="#"><i
                                                                    class="icon mdi mdi-undefined"></i><span>Level
                                                                    3</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="documentation.html"><i
                                            class="icon mdi mdi-book"></i><span>Documentation</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="progress-widget">
                    <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current
                            Project</span></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="be-content">
            <div class="main-content container-fluid">
                {{-- ===============================CONTENT================================================== --}}
                @yield('main')









































                {{-- ===============================END CONTENT================================================== --}}
                <nav class="be-right-sidebar">
                    <div class="sb-content">
                        <div class="tab-navigation">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1"
                                        aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2"
                                        aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3"
                                        aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div>
                        <div class="tab-panel">
                            <div class="tab-content">
                                <div class="tab-pane tab-chat active" id="tab1" role="tabpanel">
                                    <div class="chat-contacts">
                                        <div class="chat-sections">
                                            <div class="be-scroller-chat">
                                                <div class="content">
                                                    <h2>Recent</h2>
                                                    <div class="contact-list contact-list-recent">
                                                        <div class="user"><a href="#"><img
                                                                    src="assets\img\avatar1.png" alt="Avatar">
                                                                <div class="user-data"><span
                                                                        class="status away"></span><span
                                                                        class="name">Claire Sassu</span><span
                                                                        class="message">Can you share the...</span>
                                                                </div>
                                                            </a></div>
                                                        <div class="user"><a href="#"><img
                                                                    src="assets\img\avatar2.png" alt="Avatar">
                                                                <div class="user-data"><span
                                                                        class="status"></span><span
                                                                        class="name">Maggie jackson</span><span
                                                                        class="message">I confirmed the info.</span>
                                                                </div>
                                                            </a></div>
                                                        <div class="user"><a href="#"><img
                                                                    src="assets\img\avatar3.png" alt="Avatar">
                                                                <div class="user-data"><span
                                                                        class="status offline"></span><span
                                                                        class="name">Joel King </span><span
                                                                        class="message">Ready for the meeti...</span>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                    <h2>Contacts</h2>
                                                    <div class="contact-list">
                                                        <div class="user"><a href="#"><img
                                                                    src="assets\img\avatar4.png" alt="Avatar">
                                                                <div class="user-data2"><span
                                                                        class="status"></span><span
                                                                        class="name">Mike Bolthort</span></div>
                                                            </a></div>
                                                        <div class="user"><a href="#"><img
                                                                    src="assets\img\avatar5.png" alt="Avatar">
                                                                <div class="user-data2"><span
                                                                        class="status"></span><span
                                                                        class="name">Maggie jackson</span></div>
                                                            </a></div>
                                                        <div class="user"><a href="#"><img
                                                                    src="assets\img\avatar6.png" alt="Avatar">
                                                                <div class="user-data2"><span
                                                                        class="status offline"></span><span
                                                                        class="name">Jhon Voltemar</span></div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-input">
                                            <input type="text" placeholder="Search..." name="q"><span
                                                class="mdi mdi-search"></span>
                                        </div>
                                    </div>
                                    <div class="chat-window">
                                        <div class="title">
                                            <div class="user"><img src="assets\img\avatar2.png" alt="Avatar">
                                                <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                            </div><span class="icon return mdi mdi-chevron-left"></span>
                                        </div>
                                        <div class="chat-messages">
                                            <div class="be-scroller-messages">
                                                <div class="content">
                                                    <ul>
                                                        <li class="friend">
                                                            <div class="msg">Hello</div>
                                                        </li>
                                                        <li class="self">
                                                            <div class="msg">Hi, how are you?</div>
                                                        </li>
                                                        <li class="friend">
                                                            <div class="msg">Good, I'll need support with my pc
                                                            </div>
                                                        </li>
                                                        <li class="self">
                                                            <div class="msg">Sure, just tell me what is going on
                                                                with your computer?</div>
                                                        </li>
                                                        <li class="friend">
                                                            <div class="msg">I don't know it just turns off suddenly
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-input">
                                            <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                                                <input type="text" placeholder="Message..." name="q"
                                                    autocomplete="off"><span
                                                    class="send-msg mdi mdi-mail-send"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane tab-todo" id="tab2" role="tabpanel">
                                    <div class="todo-container">
                                        <div class="todo-wrapper">
                                            <div class="be-scroller-todo">
                                                <div class="todo-content"><span class="category-title">Today</span>
                                                    <ul class="todo-list">
                                                        <li>
                                                            <div
                                                                class="custom-checkbox custom-control custom-control-sm">
                                                                <span class="delete mdi mdi-delete"></span>
                                                                <input class="custom-control-input" type="checkbox"
                                                                    checked="" id="tck1">
                                                                <label class="custom-control-label"
                                                                    for="tck1">Initialize the project</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-checkbox custom-control custom-control-sm">
                                                                <span class="delete mdi mdi-delete"></span>
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="tck2">
                                                                <label class="custom-control-label"
                                                                    for="tck2">Create the main structure </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-checkbox custom-control custom-control-sm">
                                                                <span class="delete mdi mdi-delete"></span>
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="tck3">
                                                                <label class="custom-control-label"
                                                                    for="tck3">Updates changes to GitHub </label>
                                                            </div>
                                                        </li>
                                                    </ul><span class="category-title">Tomorrow</span>
                                                    <ul class="todo-list">
                                                        <li>
                                                            <div
                                                                class="custom-checkbox custom-control custom-control-sm">
                                                                <span class="delete mdi mdi-delete"></span>
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="tck4">
                                                                <label class="custom-control-label"
                                                                    for="tck4">Initialize the project </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-checkbox custom-control custom-control-sm">
                                                                <span class="delete mdi mdi-delete"></span>
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="tck5">
                                                                <label class="custom-control-label"
                                                                    for="tck5">Create the main structure </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-checkbox custom-control custom-control-sm">
                                                                <span class="delete mdi mdi-delete"></span>
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="tck6">
                                                                <label class="custom-control-label"
                                                                    for="tck6">Updates changes to GitHub </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div
                                                                class="custom-checkbox custom-control custom-control-sm">
                                                                <span class="delete mdi mdi-delete"></span>
                                                                <input class="custom-control-input" type="checkbox"
                                                                    id="tck7">
                                                                <label class="custom-control-label" for="tck7"
                                                                    title="This task is too long to be displayed in a normal space!">This
                                                                    task is too long to be displayed in a normal space!
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-input">
                                            <input type="text" placeholder="Create new task..."
                                                name="q"><span class="mdi mdi-plus"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane tab-settings" id="tab3" role="tabpanel">
                                    <div class="settings-wrapper">
                                        <div class="be-scroller-settings"><span class="category-title">General</span>
                                            <ul class="settings-list">
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" checked="" name="st1"
                                                            id="st1"><span>
                                                            <label for="st1"></label></span>
                                                    </div><span class="name">Available</span>
                                                </li>
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" checked="" name="st2"
                                                            id="st2"><span>
                                                            <label for="st2"></label></span>
                                                    </div><span class="name">Enable notifications</span>
                                                </li>
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" checked="" name="st3"
                                                            id="st3"><span>
                                                            <label for="st3"></label></span>
                                                    </div><span class="name">Login with Facebook</span>
                                                </li>
                                            </ul><span class="category-title">Notifications</span>
                                            <ul class="settings-list">
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" name="st4" id="st4"><span>
                                                            <label for="st4"></label></span>
                                                    </div><span class="name">Email notifications</span>
                                                </li>
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" checked="" name="st5"
                                                            id="st5"><span>
                                                            <label for="st5"></label></span>
                                                    </div><span class="name">Project updates</span>
                                                </li>
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" checked="" name="st6"
                                                            id="st6"><span>
                                                            <label for="st6"></label></span>
                                                    </div><span class="name">New comments</span>
                                                </li>
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" name="st7" id="st7"><span>
                                                            <label for="st7"></label></span>
                                                    </div><span class="name">Chat messages</span>
                                                </li>
                                            </ul><span class="category-title">Workflow</span>
                                            <ul class="settings-list">
                                                <li>
                                                    <div class="switch-button switch-button-sm">
                                                        <input type="checkbox" name="st8" id="st8"><span>
                                                            <label for="st8"></label></span>
                                                    </div><span class="name">Deploy on commit</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <script src="assets\lib\jquery\jquery.min.js" type="text/javascript"></script>
            <script src="assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js" type="text/javascript"></script>
            <script src="assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js" type="text/javascript"></script>
            <script src="assets\js\app.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-flot\jquery.flot.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-flot\jquery.flot.pie.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-flot\jquery.flot.time.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-flot\jquery.flot.resize.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-flot\plugins\jquery.flot.orderBars.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-flot\plugins\curvedLines.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-flot\plugins\jquery.flot.tooltip.js" type="text/javascript"></script>
            <script src="assets\lib\jquery.sparkline\jquery.sparkline.min.js" type="text/javascript"></script>
            <script src="assets\lib\countup\countUp.min.js" type="text/javascript"></script>
            <script src="assets\lib\jquery-ui\jquery-ui.min.js" type="text/javascript"></script>
            <script src="assets\lib\jqvmap\jquery.vmap.min.js" type="text/javascript"></script>
            <script src="assets\lib\jqvmap\maps\jquery.vmap.world.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    //-initialize the javascript
                    App.init();
                    App.dashboard();

                });
            </script>
</body>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    
</script>
</html>
