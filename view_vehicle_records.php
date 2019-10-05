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
        <!-- Content Header (Page header) -->
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
         
          <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Vehicle Records</h3>

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
                  <th>User ID</th>
                  <th>Vehicle Number</th>
                  <th>Vehicle Owner</th>
                  <th>Vehicle Proof</th>
                  <th>Vehicle Type</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php 
                                            $vehicle_sql = "SELECT * FROM vehicle_records";
                                            $vehicle_query = mysqli_query($conn, $vehicle_sql);
                                            $count=1;
                                            while($fetch = mysqli_fetch_array($vehicle_query)){
                                                 echo "<tr'>
                                                          <td> ".$count++." </td>
                                                          <td> ".$fetch['user_id']." </td>
                                                          <td> ".$fetch['vehicle_number']." </td>
                                                          <td> ".$fetch['vehicle_owner']." </td>
                                                          <td> ".$fetch['vehicle_proof']." </td>
                                                          <td> ".$fetch['vehicle_type']." </td>
                                                          <td> <a href='view_vehicle_records.php?id=".$fetch['tid']."'> <i class='material-icons'>delete</i> </a> </td>
                                                          <td> <a href='view_vehicle_records.php?id=".$fetch['tid']."'> <i class='material-icons'>create</i> </a> </td>
                                                          </tr>";
                                            }
                                            echo '</tbody> </table>';
                                         ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->



        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                       
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
<?php
    if(isset($_POST['add']))
{
                               $user_id = $_POST['user_id'];
                               $vehicle_number = $_POST['vehicle_number'];
                               $vehicle_owner = $_POST['vehicle_owner'];
                               $image=$_FILES['vehicle_proof'];
                               $vehicle_type = $_POST['vehicle_type'];

                               $image=$_FILES['vehicle_proof']['name'];
$imageTmpName=$_FILES['vehicle_proof']['tmp_name'];
$imageSize=$_FILES['vehicle_proof']['size'];
$imageError=$_FILES['vehicle_proof']['error'];
$imageType=$_FILES['vehicle_proof']['type'];


$imageExt= explode('.',$image);
  $imageActualExt= strtolower(end($imageExt));

$allowed= array('jpg','jpeg','png','pdf');

if(in_array($imageActualExt,$allowed))
 {
  if ($imageError==0) 
  {
    if($imageSize< 1000000)
        {
  $imageNameNew=uniqid('', true). ".".$imageActualExt;
  $imageDestination='proof_images/'.$imageNameNew;
  move_uploaded_file(
    $imageTmpName,$imageDestination);

                               
                            
                               $add_vehicle = "INSERT INTO vehicle_records VALUES(null, '$user_id', '$vehicle_number', '$vehicle_owner', '$imageDestination', '$vehicle_type')";
                               $add_vehicle_query = mysqli_query($conn, $add_vehicle);
                            if($add_vehicle_query)
                               {
                                echo "<script>alert('Vehicle added'); window.location = 'vehicle_record.php';</script>";
                               }
                               else {
                                 echo "<script>alert('Error'); window.location = 'vehicle_record.php';</script>";
                               }
                        }
                        
            else
            {
            echo "Your file is too big!";
            }
  }      else
      {
        echo "There was an error uploading your file!";
      }
}

 else{
  echo"YOU CANNOT UPLOAD FILES OF THIS TYPE!";
}

}
 ?>

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

if(isset($_GET['id']))
   {
     $id=$_GET['id'];
     $delete="DELETE from vehicle_records where tid='$id'";
     mysqli_query($conn, $delete);
     echo "<script>alert('deleted'); window.location = 'view_vehicle_records.php';</script>";
   }
?>