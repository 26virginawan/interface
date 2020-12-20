<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>E Learning SD </title>

    <!-- Bootstrap -->
    <link href="/LMS/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/LMS/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/LMS/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/LMS/build/css/custom.min.css" rel="stylesheet">
    <link href="css/pelajaran.css" rel="stylesheet">

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
                        </div>
                    </div>
                </div>
            </div>



            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="dashboard_graph">
                            <div class="row ">
                                <div class="col-md-6">
                                    <h3>Matematika</h3>
                                </div>
                            </div>
                            <div class="row x_title ">
                                <div class="col-sm-12 text-left">
                                    <h3>Absen</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <h1>Hadir</h1>
                                        <input type="checkbox" name="check" id="txt" class="form-check"> <label
                                            for="txt"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <h1>Izin</h1>
                                        <input type="checkbox" name="check" id="txt" class="form-check"> <label
                                            for="txt"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <h1>Telat</h1>
                                        <input type="checkbox" name="check" id="txt" class="form-check"> <label
                                            for="txt"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <h1>Tidak Hadir</h1>
                                        <input type="checkbox" name="check" id="txt" class="form-check"> <label
                                            for="txt"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="matematika"><button type="button"
                                            class="btn btn-success btn-lg">Simpan</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>