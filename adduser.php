<?php include("../conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Dashboard</title>
    <?php 
include("common_css.php");
     ?>

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
      
     <?php include('../header.php'); ?>
      <?php include('../sidebar.php'); ?>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Staff
            <small>Staff,Lecturer,Clerk,Accountant</small>
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
             <center><h3 class="box-title">Add Staff</h3></center>
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
                                    <h1 class="title">Add User</h1>
                                    <!-- <p class="category">Complete profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Full Name</label>
                                                    <input type="text" placeholder="Full Name" name="Fullname" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                   
                                                    <input type="text" placeholder="Username" name="Username" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                               <div class="form-group label-floating">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control" required  name="Category" >
            
                                                    <option value="General">General</option>
                                                    <option value="SC">SC</option>
                                                    <option value="OBC"> OBC</option>
                                                    
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
                                                    <label class="control-label">Religion</label>
                                                    <select class="form-control" required  name="Religion" >
            
                                                    <option value="Sikh">Sikh</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Muslim"> Muslim</option>
                                                    <option value="Christion"> christion</option>
                                                    <option value="Jewish"> Jewish</option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control" required  name="Gender" >
            
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other"> Other</option>
                                                   
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Designation</label>
                                                   <input type="text" placeholder="Designation" name="Designation" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Short Name</label>
                                                   <input type="text" placeholder="Short Name" name="Shortname" required onfocusout="edValueKeyPress()" id="edValue" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" placeholder="Email" name="email" required class="form-control" />
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Appointed As</label>
                                                   <select class="form-control" name="Appointed" required ">
            
                                                    <option value="15">Teacher</option>
                                                    <option value="21">Clerk</option>
                                                    <option value="26">Head of Department</option>
                                                    <option value="11">Attendent</option>
                                                    <option value="12">Security Gaurd</option>
                                                    
                                                    
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
                                                   <input type="Text" placeholder="Father's Name" name="fathername" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mother's Name</label>
                                                    <input type="text" placeholder="Mother's Name" name="mothername" required class="form-control" />
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
                                                    <input type="text" placeholder="Qualification" name="Qualification" required class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Department</label>
                                                    <select class="form-control" required  name="Department" >
            
                                                    <option value="1">Civil Engineering</option>
                                                    <option value="62"> Computer Engineering</option>
                                                    <option value="2"> Electrical Engineering</option>
                                                     <option value="3"> Electronics and Communication Engineering</option>
                                                    <option value="4"> Mechnical Engineering</option>
                                                     <option value="5"> Automobile Engineering</option>
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
                                                    <select class="form-control" name="bloodgroup" required >
        
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
                                                        <textarea class="form-control" rows="5" name="Address" required></textarea>
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
                                        <img class="img" id="blah" src="http://placehold.it/350" alt="your image" width="350" height="350" />
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
              <center>Enter the details carefully</center>
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

       <?php include("../footer.php"); ?>
    </div><!-- ./wrapper -->

   <?php include("common_jquery.php"); ?>
  </body>
</html>
<?php
if (isset($_POST['Submit']))
 {
  

  
$Username=$_POST['Username'];
$Category=$_POST['Category'];
$Name=$_POST['Fullname'];
$Shortname=$_POST['Shortname'];
$email=$_POST['email'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$dob=$_POST['dob'];
$doj=$_POST['doj'];
$Qualification=$_POST['Qualification'];
$bloodgroup=$_POST['bloodgroup'];
$image=$_FILES['myimage'];
$phone=$_POST['phone'];
$Address=$_POST['Address'];
$Department=$_POST['Department'];
$user_level=$_POST['Appointed'];
$Designation=$_POST['Designation'];
$Religion=$_POST['Religion'];
$Gender=$_POST['Gender'];

$Username=$Department.$Username;
$empty="";
$Checksql="SELECT * from user_login where username='$username'";
$checkquery=mysqli_query($conn,$Checksql);
$checkfetch=mysqli_num_rows($checkquery);
if ($checkfetch>0) 
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
  $imageDestination='Profile_Photos/'.$imageNameNew;
  move_uploaded_file(
    $imageTmpName,$imageDestination);





  $insert_sql="INSERT INTO staff (staff_id, name, short_name, username, level, father, mother, dob, address, gender, blood_group, department, doj, staff_email, alt_email, phone, alt_phone, religion, category, staff_image, father_image, staff_uidai_number, staff_uidai_image, designation, qualification, status) VALUES (NULL, '$Name', '$Shortname', '$Username', '$user_level', '$fathername', '$mothername', '$dob', '$Address', '$Gender', '$bloodgroup', '$Department', '$doj', '$email', '$empty', '$phone', '$empty', '$Religion', '$Category', '$imageDestination', '$empty', '$empty', '$empty', '$Designation', '$Qualification', '1');";
$insert_query=mysqli_query($conn, $insert_sql);
 $insert_id = mysqli_insert_id($conn);

function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
 
$Password=random_code(8);
$user_sql="INSERT INTO user_login (tid, user_id, username, password, user_level, login_log, logout_log, status) VALUES (NULL, '$insert_id', '$Username', '$Password', '$user_level', '$empty', '$empty', '1');";
   $user_query=mysqli_query($conn,$user_sql);

  
  // $datesql = "UPDATE users SET registering_date='$date'  WHERE username='$username'";
  // $updating=mysqli_query($conn,$datesql);

  
if ($insert_query && $user_query) {
    echo "<script>alert('Thanks For Registering. Your account will be approved soon.'); window.location = reload;</script>";
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