<?php include("conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Dashboard</title>
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
    <script>
    function edValueKeyPress()
    {
        var edValue = document.getElementById("edValue");
        var s = edValue.value;

       
        

        // var val = Math.floor(1000 + Math.random() * 9000);
        // console.log(val);
        var seq = (Math.floor(Math.random() * 10000) + 10000).toString().substring(2);
        var tgen=s+seq;
        document.getElementById("tcode").value = tgen;
       
        // var lblValue = document.getElementById("lblValue");
        // lblValue.innerText = "The text box contains: "+s;

        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
    }
</script> 
<script>
  function readURL(input) {
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
            Add User
            <small>Lecturer,Clerk,Accountant</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Add User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">
             







<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Full Name</label>
                                                    <input type="text" placeholder="Full Name" name="name" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                   
                                                    <input type="text" placeholder="Username" name="username" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" placeholder="Email" name="email" required class="form-control" />
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
                                                    <label class="control-label">Short Name</label>
                                                   <input type="text" placeholder="Short Name" name="shortname" required onfocusout="edValueKeyPress()" id="edValue" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Your Code</label>
                                                     <input type="text" placeholder="Teacher Code" name="t_code" id="tcode" required="" readonly class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Appointed As</label>
                                                   <select class="form-control" name="type" required ">
            
                                                    <option value="teacher">Teacher</option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Upload Photo</label>
                                                    <input type='file' onchange="readURL(this);" name='myimage' required accept="image/x-png,image/gif,image/jpeg" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Father's Name</label>
                                                   <input type="Text" placeholder="Father's Name" name="fname" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mother's Name</label>
                                                    <input type="text" placeholder="Mother's Name" name="mname" required class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">DOB:    Date of Birth</label>
                                                    <input type="date" placeholder="Date of Birth" name="dob" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">DOJ:   Date of joining</label>
                                                   <input type="date" placeholder="Date of Join" name="doj" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Qualification</label>
                                                    <input type="text" placeholder="Qualification" name="qual" required class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Department</label>
                                                    <select class="form-control" required  name="Department" >
            
                                                    <option value="Civil">Civil Engineering</option>
                                                    <option value="Comp"> Computer Engineering</option>
                                                    <option value="Elec"> Electrical Engineering</option>
                                                     <option value="ece"> Electronics and Communication Engineering</option>
                                                    <option value="Mech"> Mechnical Engineering</option>
                                                     <option value="Auto"> Automobile Engineering</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone No.</label>
                                                    <input type="number" placeholder="Phone No" name="phone" required class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Blood Group</label>
                                                    <select class="form-control" name="blood_group" required >
        
                                                        <option value="A-">A-</option>
                                                        <option value="A+">A+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="O+">O+</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> Enter Your Address Below</label>
                                                        <textarea class="form-control" rows="5" name="address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right" name="Submit">Add User</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" id="blah" src="http://placehold.it/180" alt="your image" width="180" height="180" />
                                    </a>
                                </div>
                                <!-- <div class="content">
                                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="card-content">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            </div><!-- /.box-body -->
            <div class="box-footer">
              Footer
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
if (isset($_POST['Submit']))
 {
  


  
$username=$_POST['username'];
$t_code=$_POST['t_code'];
$name=$_POST['name'];
$shortname=$_POST['shortname'];
$email=$_POST['email'];
$fathername=$_POST['fname'];
$mothername=$_POST['mname'];
$dob=$_POST['dob'];
$doj=$_POST['doj'];
$qualification=$_POST['qual'];
$blood_group=$_POST['blood_group'];
$image=$_FILES['myimage'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$designation=$_POST['designation'];
$department=$_POST['Department'];
$appointment_type=$_POST['type'];
$type="teacher";

$Checksql="SELECT * from users where username='$username' AND password='$password'";
$checkquery=mysqli_query($conn,$Checksql);
$checkfetch=mysqli_fetch_array($checkquery);
if ($checkfetch) 
  {
    echo "<script>alert('Username already exists'); window.location = 'studentform.php';</script>";
   }
else
   {

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
    if($imageSize< 1000000)
        {
  $imageNameNew=uniqid('', true). ".".$imageActualExt;
  $imageDestination='profile/'.$imageNameNew;
  move_uploaded_file(
    $imageTmpName,$imageDestination);

$user_sql="INSERT INTO users (id, username, password, type, registered, registering_date) VALUES (NULL, '$username', '$password', '$type', 0, NULL)";
   $user_query=mysqli_query($conn,$user_sql);



  $insert_sql="INSERT INTO teacher (id, username, teacher_code, short_name, Name, Father_name, Mother_name, DOB, DOJ, Department, Qualification, Blood_group, Image, email, Phone_no, Address, Appointment_type, Designation) VALUES (NULL, '$username', '$t_code', '$shortname', '$name', '$fathername', '$mothername', '$dob', '$doj', '$department', '$qualification', '$blood_group', '$imageDestination', '$email', '$phone', '$address', '$appointment_type', '$designation')";


$t=time();
//$_SESSION["lecarray"]=array();
//extracting day out of timestamp
$timestamp = strtotime($t);
$day = date('l');
//extracting date out of timestamp
$date=date("Y-m-d",$t);

  
  echo $date;
  
  $datesql = "UPDATE users SET registering_date='$date'  WHERE username='$username'";
  $updating=mysqli_query($conn,$datesql);

  $insert_query=mysqli_query($conn, $insert_sql);
if ($insert_query) {
    echo "<script>alert('Thanks For Registering. Your account will be approved soon.'); window.location = 'gndpclogin.webinfoera.com';</script>";
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

}

?>