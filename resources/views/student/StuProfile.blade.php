
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Panel | UvaLMS</title>

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
                <span class="brand-text font-weight-light"><B>Student</B></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel-->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">D.K.M.U.K.Karunasagara</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/student" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   My Profile
                                </p>
                            </a>
                        </li>

                        <!--Books-->
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Book Details
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/Stu-borrow-Detail" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borrow Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/Stu-extend-Return" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Extend Return Date</p>
                                </a>
                            </li>
                            </ul>
                        </li>

                        <!--Fines-->
                        <li class="nav-item">
                            <a href="/Stu-fine-Details" class="nav-link">
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
                                <li class="breadcrumb-item active">Student Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-danger">
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
                                        <b>Name : </b><p class="font-italic">D.K.M.U.K.Karunasagara</p>
                                        <b>Index :</b><p class="font-italic">23318</p> <br> <br><br><br><br>
                                    </div>  
                                        
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                    <div class="col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Student Details</h3>

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
                                            if(isset($_GET['done'])){
                                                $dis="disabled";  
                                            }else{
                                            //$dis="disabled"; 
                                            }
                                        ?>
                                            
                                           
                                        <form method="post" action="/SaveEditedData">
                                            {{csrf_field()}}
                                           
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="text" class="form-control" id="exampleFName" name="s_fname" value="{{$st_data->First_Name}}" <?php echo $dis;?>>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Registration Number</label>
                                                <input type="text" class="form-control" id="exampleRegNo" name="s_rnumber" value="{{$st_data->Stu_Id}}" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Class</label>
                                                <input type="text" class="form-control" id="exampleClass" name="s_class" value="{{$st_data->Class}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date of Birth</label>
                                                <input type="date" class="form-control" id="exampleDOB" name="s_dob" value="{{$st_data->DOB}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Telephone Number</label>
                                                <input type="number" class="form-control" id="exampleTeleNo" name="s_tel" value="{{$st_data->TeleNum}}" <?php echo $dis;?>>
                                            </div>
                                            
                                            <div style="float: right;padding-right: -20px;">
                                                <br>
                                                <a href="student?edit=Edit" class="btn btn-warning">Edit</a> 
                                                <a href="student?done=Done" class="btn btn-primary">Done</a>
                                            </div>
                                    
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="text" class="form-control" id="exampleLName" name="s_lname" value="{{$st_data->Last_Name}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Grade</label>
                                                <input type="text" class="form-control" id="exampleGrade" name="s_grade" value="{{$st_data->Grade}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Gender</label>
                                                <input type="text" class="form-control" id="exampleGender" name="s_gender" value="{{$st_data->Gender}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input type="text" class="form-control" id="exampleAdd" name="s_address" value="{{$st_data->Address}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email Address</label>
                                                <input type="email" class="form-control" id="exampleemail" name="s_email" value="{{$st_data->Email}}" <?php echo $dis;?>>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <br>
                                                <input type="submit" class="btn btn-success" value="Save" name="save" > 
                                            </div>
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