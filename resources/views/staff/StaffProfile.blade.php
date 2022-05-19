
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Panel | UvaLMS</title>

    <!--favicon icons-->
    <link rel="shortcut icon" href="favicon/icon.png" type="image/x-icon" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin/header')


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 0, 224));">
            <!-- School Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/schoolLogo.png" alt="School Logo" height="50px">
                <span class="brand-text font-weight-light"><B>Staff</B></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel-->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">R.M.Rathnayakaa</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/staff" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   My Profile
                                </p>
                            </a>
                        </li>

                        <!--Books-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Book Details
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/borrow-Detail" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borrow Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/extend-Return" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Extend Return Date</p>
                                </a>
                            </li>
                            </ul>
                        </li>

                        <!--Fines-->
                        <li class="nav-item">
                            <a href="/fine-Details" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Fine Details
                                </p>
                            </a>
                        </li>

                    </ul>                    
                </nav>
            </div><!--end Sidebar -->

        </aside><!-- End of Main Sidebar Container -->

        

        {{-- page top content --}}
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Staff Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title"> My Profile</h3>
                            </div> 
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div> 
                                    <div class="col-md-6"> 
                                        <br><br>                               
                                        <img src ="{{url('/user/stuAvator.png')}}" class="img-thumbnail" style="border:0px;"> 
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <br><br>
                                        <b>Name : </b><p class="font-italic">D.M.Rathnayaka</p>
                                        <b>Staff ID :</b><p class="font-italic">54</p> <br> 
                                    </div>  
                                        
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                    <div class="col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Staff Member Details</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php 
                                            if(isset($_GET['edit'])){
                                                $dis=""; 
                                            }else{
                                            $dis="disabled"; 
                                            }
                                            if(isset($_GET['save'])){
                                                $dis="disabled";  
                                            }else{
                                            //$dis="disabled"; 
                                            }
                                        ?>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="email" class="form-control" id="exampleFName"  <?php echo $dis;?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Staff ID</label>
                                            <input type="email" class="form-control" id="exampleRegNo" <?php echo $dis;?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date of Birth</label>
                                            <input type="email" class="form-control" id="exampleDOB" <?php echo $dis;?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Telephone Number</label>
                                            <input type="email" class="form-control" id="exampleTeleNo" <?php echo $dis;?>>
                                        </div>
                            
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last Name</label>
                                            <input type="email" class="form-control" id="exampleLName"  <?php echo $dis;?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Gender</label>
                                            <input type="email" class="form-control" id="exampleGender" <?php echo $dis;?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="email" class="form-control" id="exampleAdd" <?php echo $dis;?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Address</label>
                                            <input type="email" class="form-control" id="exampleemail" <?php echo $dis;?>>
                                        </div>
                                        <form method="GET">
                                            <br>
                                            <input type="submit" class="btn btn-warning" value="Edit" name="edit" > 
                                            <input type="submit" class="btn btn-primary" value="Save" name="save">
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>    
                    </div>
                </div>
            </div>
        </div><!--content-wrapper-->

        



        @include('admin/footer')
    </div><!--wrapper-->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- Uva collage app -->
    <script src="dist/js/adminlte.js"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>



</body>
</html>