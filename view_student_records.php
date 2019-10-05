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
      <div class="content-wrapper">
        <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Student Records</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
         
       <div class="box">
                <div class="box-header">
              <h3 class="box-title">Vehicles Info</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
                 
            <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Sr no.</th>
                  <th>User Id</th>
                  <th>Name</th>
                  <th>CLass</th>
                  <th>Batch</th>
                  <th>Department</th>
                  <th>Status</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php 
                                            $student_sql = "SELECT * FROM students";
                                            $student_query = mysqli_query($conn, $student_sql);
                                            $count=1;
                                            while($fetch = mysqli_fetch_array($student_query)){
                                                 echo "<tr'>
                                                          <td> ".$count++." </td>
                                                          <td> ".$fetch['username']." </td>
                                                          <td> ".$fetch['name']." </td>
                                                          <td> ".$fetch['class']." </td>
                                                          <td> ".$fetch['batch']." </td>
                                                          <td> ".$fetch['department']." </td>
                                                          <td> ".$fetch['status']." </td>
                                                          <td> <a href='view_students.php?id=".$fetch['id']."'> <i class='material-icons'>delete</i> </a> </td>
                                                          <td> <a href='edit_students.php?id=".$fetch['id']."'> <i class='material-icons'>edit</i> </a> </td>
                                                          </tr>";
                                            }
                                            echo '</tbody> </table>';
                                         ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->



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
      </div><!-- /.content-wrapper -->

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