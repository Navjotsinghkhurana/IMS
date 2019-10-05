<?php include("conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Dashboard</title>
    <?php include('tags.php'); ?>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
     <?php include('header.php'); ?>
      <?php include('sidebar.php'); ?>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Parking
        <small>Area</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Allotment</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
         
          <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h1 class="title">Parking Allotment</h1>
                                    <!-- <p class="category">Complete profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <div class="row">
                                           
												<div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Block Name</label>
                                                    <input type="text" placeholder="Block Name" name="Block_Name" required class="form-control" />
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                               <div class="form-group label-floating">
                                                    <label class="control-label">Block type</label>
                                                    <select class="form-control" required  name="Block_type">            
                                                    <option value="2W"> Two Wheeler </option>
                                                    <option value="4W">Four Wheeler</option>                                              
                                                
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                        

                                           
                                         
                                      </div>

                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fist Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Adress</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div> -->
                                       
                                            <div class="row">
                                           <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Block Start</label>
                                                   <input type="text" placeholder="Block Start" name="Block_Start" required class="form-control" />
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Block End</label>
                                                   <input type="text" placeholder="Block End" name="Block_End" required class="form-control" />
                                                </div>
                                            </div>


                                               <div class="col-md-4">
                                               <div class="form-group label-floating">
                                                    <label class="control-label">Reservation</label>
                                                    <select class="form-control" required  name="Reservation" >
           											<option value="All">All</option>
                                                    <option value="Student">All Student</option>
                                                    <option value="Male">Student(Male)</option>
                                                    <option value="Female"> Student Female</option>
                                                    <option value="Faculty">Faculty</option>
                                                    <option value="Event">Event</option>
                                                    
                                                
                                                    
                                                    </select>
                                                </div>
                                      
                                        </div>


                                                  
                                            
                                            </div>
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Block Size</label>
                                                   <input type="text" placeholder="Block Size" name="Block_Size" required class="form-control" />
                                                </div>
                                            </div>

                                                  </div>
                                            
                                            
                                        </div>                                      
                                         
                                    
                                        <button type="submit" class="btn btn-primary pull-right" name="Submit">Submit</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>




        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

       <?php include("footer.php"); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>
<?php
if (isset($_POST['Submit']))
 {
  

  
$block_name=$_POST['Block_Name'];
$block_type=$_POST['Block_type'];
$reservation=$_POST['Reservation'];
$block_start=$_POST['Block_Start'];
$block_end=$_POST['Block_End'];
$block_size=$_POST['Block_Size'];


  $insert_sql="INSERT INTO parking_area (tid, block_name, block_type, block_start, block_end, block_size, reservation_category) VALUES (NULL, '$block_name', '$block_type', '$block_start', '$block_end', '$block_size', '$reservation')";
  $insert_query=mysqli_query($conn, $insert_sql);

}
  ?>