<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body >

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

@yield('main')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>



{{--    <!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <title>AdminLTE 2 | Blank Page</title>--}}
{{--    <!-- Tell the browser to be responsive to screen width -->--}}
{{--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">--}}
{{--    <!-- Bootstrap 3.3.7 -->--}}
{{--    <link rel="stylesheet" href="{{url('/')}}/public/admin1/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="{{url('/')}}/public/admin1/css/font-awesome.min.css">--}}
{{--    <link rel="stylesheet" href="{{url('/')}}/public/admin1/css/AdminLTE.css">--}}
{{--    <link rel="stylesheet" href="{{url('/')}}/public/admin1/css/_all-skins.min.css">--}}
{{--    <link rel="stylesheet" href="{{url('/')}}/public/admin1/css/style.css" />--}}
{{--</head>--}}
{{--<body class="hold-transition skin-blue sidebar-mini">--}}
{{--<!-- Site wrapper -->--}}
{{--<div class="wrapper">--}}

{{--    <header class="main-header">--}}
{{--        <!-- Logo -->--}}
{{--        <a href="../../index2.html" class="logo">--}}
{{--            <!-- mini logo for sidebar mini 50x50 pixels -->--}}
{{--            <span class="logo-mini"><b>A</b>LT</span>--}}
{{--            <!-- logo for regular state and mobile devices -->--}}
{{--            <span class="logo-lg"><b>Admin</b>LTE</span>--}}
{{--        </a>--}}
{{--        <!-- Header Navbar: style can be found in header.less -->--}}
{{--        <nav class="navbar navbar-static-top">--}}
{{--            <!-- Sidebar toggle button-->--}}
{{--            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">--}}
{{--                <span class="sr-only">Toggle navigation</span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--            </a>--}}

{{--            <ul class="nav navbar-nav navbar-right" style="margin-right: 10px">--}}
{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi Admin Manager <b class="caret"></b></a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="#">Thông tin</a></li>--}}
{{--                        <li><a href="#">Thoát tài khoản</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--        </nav>--}}
{{--    </header>--}}
{{--    <!-- =============================================== -->--}}
{{--    <!-- Left side column. contains the sidebar -->--}}
{{--    <aside class="main-sidebar">--}}
{{--        <!-- sidebar: style can be found in sidebar.less -->--}}
{{--        <section class="sidebar">--}}
{{--            <!-- /.search form -->--}}
{{--            <!-- sidebar menu: : style can be found in sidebar.less -->--}}
{{--            <ul class="sidebar-menu" data-widget="tree">--}}
{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fa fa-home"></i> <span>Dashboard</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-left pull-right"></i>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li><a href=""><i class="fa fa-circle-o"></i> Dashboard v1</a></li>--}}
{{--                        <li><a href=""><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="">--}}
{{--                        <i class="fa fa-th"></i> <span>Widgets</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--              <small class="label pull-right bg-green">Hot</small>--}}
{{--            </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--        </section>--}}
{{--        <!-- /.sidebar -->--}}
{{--    </aside>--}}
{{--    <!-- =============================================== -->--}}
{{--    <!-- Content Wrapper. Contains page content -->--}}
{{--    <div class="content-wrapper">--}}
{{--        <!-- Content Header (Page header) -->--}}
{{--        <section class="content-header">--}}
{{--            <h1>--}}
{{--                Blank page--}}
{{--                <small>it all starts here</small>--}}
{{--            </h1>--}}
{{--            <!-- <ol class="breadcrumb">--}}
{{--              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--              <li><a href="#">Examples</a></li>--}}
{{--              <li class="active">Blank page</li>--}}
{{--            </ol> -->--}}
{{--        </section>--}}

{{--        <!-- Main content -->--}}
{{--        <section class="content">--}}

{{--            <!-- Default box -->--}}
{{--            <div class="box">--}}
{{--                <div class="box-header with-border">--}}


{{--                </div>--}}
{{--                <div class="box-body">--}}
{{--                    Start creating your amazing application!--}}
{{--                </div>--}}
{{--                <!-- /.box-body -->--}}
{{--            </div>--}}
{{--            <!-- /.box -->--}}

{{--        </section>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--    <!-- /.content-wrapper -->--}}

{{--    <footer class="main-footer">--}}
{{--        <div class="pull-right hidden-xs">--}}
{{--            <b>Version</b> 2.4.0--}}
{{--        </div>--}}
{{--        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights--}}
{{--        reserved.--}}
{{--    </footer>--}}

{{--</div>--}}
{{--<!-- ./wrapper -->--}}

{{--<!-- jQuery 3 -->--}}

{{--<script src="js/jquery.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/adminlte.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}

