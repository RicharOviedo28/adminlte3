<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wolfsyncro/adminlte3/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('home')}}" class="nav-link">Inicio</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            Cerrar Sesion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{url('home')}}" class="brand-link">
                <img src="{{url('wolfsyncro/adminlte3/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{url('wolfsyncro/adminlte3/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                        <p style="color:grey;font-size:12px">{{Auth::user()->email}}</p>

                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{url('home')}}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    Home
                                    <span class="right badge badge-success">Nuevo</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Componentes AdminLTE</li>
                        <li
                            class="nav-item has-treeview {{ request()->is('dashboard-v1','dashboard-v2','dashboard-v3') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ request()->is('dashboard-v1','dashboard-v2','dashboard-v3') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    Dashboard
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('dashboard-v1')}}"
                                        class="nav-link {{ request()->is('dashboard-v1') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-primary"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('dashboard-v2')}}"
                                        class="nav-link {{ request()->is('dashboard-v2') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-primary"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('dashboard-v3')}}"
                                        class="nav-link {{ request()->is('dashboard-v3') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-primary"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('widgets')}}"
                                class="nav-link {{ request()->is('widgets') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    Widgets
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item has-treeview {{ request()->is('chartjs','flot','inline') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('chartjs','flot','inline') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-pie-chart"></i>
                                <p>
                                    Charts
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('chartjs')}}"
                                        class="nav-link {{ request()->is('chartjs') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-success"></i>
                                        <p>ChartsJS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('flot')}}"
                                        class="nav-link {{ request()->is('flot') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-success"></i>
                                        <p>Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('inline')}}"
                                        class="nav-link {{ request()->is('inline') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-success"></i>
                                        <p>Inline</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{ request()->is('elementos-generales','elementos-avanzados','elementos-editor') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ request()->is('elementos-generales','elementos-avanzados','elementos-editor') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-edit"></i>
                                <p>
                                    Form
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('elementos-generales')}}"
                                        class="nav-link {{ request()->is('elementos-generales') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-info"></i>
                                        <p>Generales</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('elementos-avanzados')}}"
                                        class="nav-link {{ request()->is('elementos-avanzados') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-info"></i>
                                        <p>Avanzados</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('elementos-editor')}}"
                                        class="nav-link {{ request()->is('elementos-editor') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-info"></i>
                                        <p>Editor</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{ request()->is('general','icons','buttons', 'sliders') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ request()->is('general','icons','buttons', 'sliders') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-tree"></i>
                                <p>
                                    UI Elements
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('general')}}"
                                        class="nav-link {{ request()->is('general') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-danger"></i>
                                        <p>General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('icons')}}"
                                        class="nav-link {{ request()->is('icons') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-danger"></i>
                                        <p>Icons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('buttons')}}"
                                        class="nav-link {{ request()->is('buttons') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-danger"></i>
                                        <p>Buttons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('sliders')}}"
                                        class="nav-link {{ request()->is('sliders') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-danger"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{ request()->is('table-simple','table-data') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ request()->is('table-simple','table-data') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    Table
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('table-simple')}}"
                                        class="nav-link {{ request()->is('table-simple') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-warning"></i>
                                        <p>Simple</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('table-data')}}"
                                        class="nav-link {{ request()->is('table-data') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-warning"></i>
                                        <p>DataTable</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('calendar')}}"
                                class="nav-link {{ request()->is('calendar') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    Calendar
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item has-treeview {{ request()->is('mailbox-inbox','mailbox-read', 'mailbox-compose') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ request()->is('mailbox-inbox','mailbox-read', 'mailbox-compose') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-envelope-o"></i>
                                <p>
                                    Mailbox
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('mailbox-inbox')}}"
                                        class="nav-link {{ request()->is('mailbox-inbox') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-info"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('mailbox-read')}}"
                                        class="nav-link {{ request()->is('mailbox-read') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-info"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('mailbox-compose')}}"
                                        class="nav-link {{ request()->is('mailbox-compose') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-info"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{ request()->is('pages-invoice','pages-profile') ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ request()->is('pages-invoice','pages-profile') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    Pages
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('pages-invoice')}}"
                                        class="nav-link {{ request()->is('pages-invoice') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-success"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('pages-profile')}}"
                                        class="nav-link {{ request()->is('pages-profile') ? 'active' : '' }}">
                                        <i class="fa fa-circle-o nav-icon text-success"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <script src="{{ asset('wolfsyncro/adminlte3/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('wolfsyncro/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('wolfsyncro/adminlte3/plugins/fastclick/fastclick.js') }}"></script>
    <script src="{{ asset('wolfsyncro/adminlte3/dist/js/adminlte.min.js') }}"></script>

    @yield('scripts')

</body>

</html>
