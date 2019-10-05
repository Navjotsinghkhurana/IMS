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
        <section class="content-header">
          <h1>
            Profile Edit
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Profile</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">
              


              <div class=" container">


    <div class="col-md-8">
      <div class=" profile">

    <div class="profile-bottom">
      <h3><i class="fa fa-user"></i>My Profile</h3>
      <div class="profile-bottom-top">
      <div class="col-md-4 profile-bottom-img">
        <img src='<?php echo $_SESSION["image"];?>' alt="image" width="100%" height="100%" >
      </div>
      <div class="col-md-8 profile-text">
        <h3><b>Name:</b><?php echo $_SESSION["name"];?></h3>
        Department: <?php echo $_SESSION["Department"];?><br>
        
        Email : <?php echo $_SESSION["email"];?><br>
          Address : <?php echo $_SESSION["address"];?><br>
        Phone No. :<?php echo $_SESSION["phone_no"];?><br>
      </div>
      <div class="clearfix"></div>
      </div>
     <h2><a href="#" data-toggle="modal" data-target="#changeimage"><i class="fa fa-image"></i>Change Profile Image</a></h2>
       
        <h2><a href="#" data-toggle="modal" data-target="#changepassword"><i class="fa fa-cog"></i>Change Password</a></h2>
        
      
      <!-- <div class="profile-btn">

                <button type="button" href="#" class="btn bg-red">Save changes</button>
           <div class="clearfix"></div>
      </div> -->
       
      
    </div>
  </div>
  
<div class="modal fade" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Change Password</h4>
              </div>
              <div class="modal-body">
                <form method="post">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Current Password</label>
                    <input type="password" class="form-control" id="recipient-name" name="current">
                  </div>
                 
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">New Password</label>
                    <input type="password" class="form-control" id="new" name="newpass">
                  </div>

                   <div class="form-group">
                    <label for="recipient-name" class="control-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="conf" name="conpass" onkeyup="my()">
                  </div>
                <h6>New Password and confirm password should match to change the password*</h6>
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="change" id="myBtn" disabled="disabled">Change<n/button>
                </form>
              </div>
            </div>
          </div>
        </div>




<div class="modal fade" id="changeimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Change Image</h4>
              </div>
              <div class="modal-body">
                <form method="post" enctype="multipart/form-data" >
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Select Image</label>
                    
                    <input type='file' onchange="readURL(this);" name='myimage' required accept="image/x-png,image/gif,image/jpeg" style="margin-bottom:3%;"/>
                  <center><img id="blah" src="http://placehold.it/180" alt="your image" width="180" height="180" style="display: none;" /></center>
                  </div>
                <h6>Upload your image carefully</h6>
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="changeimage" id="changeimages" style="display: none;" >Change</button>
                </form>
              </div>
            </div>
          </div>
        </div>


<script>
  function readURL(input) {
    document.getElementById("blah").style.display = "block";
    document.getElementById("changeimages").style.display = "block";

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script> 
<script type="text/javascript">
  

function my()
{


  var x = document.getElementById("new").value;
  var y = document.getElementById("conf").value;
  document.getElementById("myBtn").disabled = true;

  if (x==y)
  {

  document.getElementById("myBtn").disabled = false;
}
}




</script>
  </div>
</div>




            </div><!-- /.box-body -->
            <div class="box-footer">
             Enter the details carefully
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
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




<?php 


if (isset($_POST['change']))

 {

  $current=$_POST['current'];
  $newpassword=$_POST['newpass'];
  $Confirmpassword=$_POST['conpass'];
  if ($newpassword==$Confirmpassword) {

    $username=$_SESSION['uid'];
    echo $username;
    $sql_pa="SELECT * From users where username='$username'";
    $query_pa=mysqli_query($conn,$sql_pa);
    $fetch=mysqli_fetch_array($query_pa);
    echo $fetch['password'];
    if ($fetch['password']==$current) {
      $sql_ch="UPDATE users set password='$newpassword' where username='$username'";
      $query_ch=mysqli_query($conn,$sql_ch);
      if ($query_ch) {
        echo "<script>alert('Password Successfully Changed'); window.location='profile.php'</script>";
      }
    }
    else
    {
      echo "<script>alert('Current Password is incorrect'); window.location='profile.php'</script>";
    }
    
  
  }

  else
  {
    echo "<script>alert('password does not match');</script>";
  }
  
}





 ?>



 <?php 
 error_reporting(E_ALL);
if (isset($_POST['changeimage']))

 {
$username=$_SESSION['uid'];
$type=$_SESSION["type"];

$image=$_FILES['myimage']['name'];
$imageTmpName=$_FILES['myimage']['tmp_name'];
$imageSize=$_FILES['myimage']['size'];
$imageError=$_FILES['myimage']['error'];
$imageType=$_FILES['myimage']['type'];


$imageExt= explode('.',$image);
  $imageActualExt= strtolower(end($imageExt));

$allowed= array('jpg','jpeg','png','pdf');

if(in_array($imageActualExt,$allowed))
 {
  if ($imageError==0) 
  {
    if($imageSize< 10000000)
        {
  $imageNameNew=uniqid('', true). ".".$imageActualExt;
  $imageDestination='profile/'.$username."1111".$imageNameNew;
  $upload=move_uploaded_file($imageTmpName,$imageDestination);
  if ($upload)
   {
    $sql_enter="UPDATE $type SET Image='$imageDestination' where username='$username'";
    $query_enter=mysqli_query($conn,$sql_enter);

   echo '<script>alert("Image Uploaded"); window.location="index.php";</script>';
    }

}
}
}

}




  ?>