<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Pengaturan </title>

    <!-- Bootstrap -->
    <link href="/LMS/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/LMS/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/LMS/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/LMS/build/css/custom.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div id="sidebar" class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><span>E-Learning SD </span></a>
                    </div>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="home"><i class="fa fa-home"></i> Beranda </a></li>
                                <li><a href="pelajaran"><i class="fa fa-edit"></i> Mata Pelajaran </a></li>
                                <li><a href="setting"><i class="fa fa-desktop"></i> Pengaturan </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu" id="navbarResponsive">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="dashboard_graph">
                            <div class="row x_title">
                                <div class="col-md-6">
                                <p><img src="img/profile.jpg" style=" float:left;" />
                                    <h1>Pengaturan</h1>
                                </div>
                            </div>

                            <section class="setting">
                                <div class="row">
                                    <div class="col-md-4">

                                        <a href="profil"><i class="fa fa-user"></i> Profil </a><br><br>

                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i
                                                class="fa fa-arrow-left"></i>
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>