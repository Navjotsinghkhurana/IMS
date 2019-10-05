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


<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #d9534f;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #5cb85c;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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
            Blank page
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="college/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="attendance.php">Attendance</a></li>
            <li class="active">Fill Attendance</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
             <center> <h3 class="box-title">Enter Attendance</h3></center>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">
              
             <?php 
//attendance module programming







// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn)
 { 

    $teacher_code=$_SESSION["user_id"];
   
      
    
    $lecture_no=$_GET['lecture_no'];
    $class_id=$_GET['class_id'];
    $scode=$_GET["subcode"];



// checking for redundent attendance
  // $date=strtotime($date);  
  $check_sql="SELECT * from attendance_comp where att_date='$date' and lect_no='$lecture_no' and teacher_code='$teacher_code'";
  $check_query=mysqli_query($conn,$check_sql);
  $check_row=mysqli_num_rows($check_query);



  if ($check_row>=1) {
   echo '<script>alert("Attendance Already Filled"); window.location="attendance.php"</script>';
  }



      //sql to fetch data
     echo '<form method="POST">';
      $sql="SELECT * From student WHERE class='$class_id' and status=1";
      $query=mysqli_query($conn,$sql);
      $fetch=mysqli_fetch_array($query);
      //echo '<div class="row show-grid">';
      $starray=array();
      $st_name=array();
      echo '<div class="row show-grid text-center">';
      do{
        $roll=$fetch['roll_no'];
        $username=$fetch['username'];
        $student_name=$fetch['name'];
        array_push($starray,$roll);
        array_push($st_name,$student_name);
        
        // echo $stroll.'<input type=checkbox name=check[]   value='.$stroll.' checked><br>';   

      }
      while ($fetch=mysqli_fetch_array($query));
      sort($starray);
      $noofstudent=count($starray);
      $_SESSION['starray']=$starray;
      $_SESSION['noofstudent']=$noofstudent;


      for ($i=0; $i <$noofstudent ; $i++) { 
        $a="a";
        echo '<div class="col-md-8 col-xs-8">';
        echo '<label class="checkbox" id='.$starray[$i].$a.'>'.$starray[$i];
        echo "<br>";
        echo $st_name[$i].'</lable>';
        echo "</div>";
        echo '<div class="col-md-4 col-xs-4 checkbox">';
        echo '<label class="switch">';
        
        
        // echo '<label class="checkbox">'.$starray[$i];
        echo '<input type=checkbox data-toggle="toggle" name='.$i.'   value='.$starray[$i].' checked id='.$starray[$i].'
        >';
        echo ' <span class="slider round"></span>';
        echo '</label>';
        echo '<br>';
        // echo $starray[$i];

        echo "</div>";
        echo "<br><hr><br>";
      }
      echo "</div>";
      echo '<center><button name="enterattendance" class="btn btn-block btn-success btn-lg">Enter Attendance</button></center>';
      echo "</form>";
      
      

 }
 else
 {
  header("location: loginout.php");
 }
 ?>     



<?php 


    $lecture_no=$_GET['lecture_no'];
    $class_id=$_GET['class_id'];
    $scode=$_GET["subcode"];

// $sql="SELECT * From student where Section='$section'";
// $query=mysqli_query($conn,$sql);
// $fetch=mysqli_fetch_array($query);
// $batch=$fetch['Batch'];

// $teacher_code=$_SESSION["t_code"];
// $chechfor7=1;

// // Check For Repeating Lectures
// $dlno=$lno+1;
// $rep_sql="SELECT * from timetable Where Day='$day' and teacher_code='$teacher_code' and Section='$section' and Lect_no=$dlno and sub_code='$subcode'";
// $rep_query=mysqli_query($conn,$rep_sql);
// $rep_num=mysqli_num_rows($rep_query);
// if ($rep_num!=0) {
//   $rep=2;
//   $dlno=$dlno+1;
  

//   $rep_sql="SELECT * from timetable Where Day='$day' and teacher_code='$teacher_code' and Section='$section' and Lect_no=$dlno and sub_code='$subcode'";
//   $rep_query=mysqli_query($conn,$rep_sql);
//   $d_n=mysqli_num_rows($rep_query);
//   if ($d_n!=0) {
//     $rep=$rep+1;
    
//   }
// }
// else
// {
//   $rep=0;
// }


// if ($rep>=1) {
//   $times=$rep;
// }
// else
// {
//   $times=1;
// }
// for ($che=1; $che <=$times ; $che++) { 

  
// if ($che>1) {
  
//   $lno=$lno+1;
//   if ($lno==7) {
//     $times=$times+1;
//   }
// }

$username=16621400;

if (isset($_POST['enterattendance'])) 
{

$starray=$_SESSION['starray'];
$noofstudent=$_SESSION['noofstudent'];
for ($i=0; $i <$noofstudent ; $i++)
 {  

  $checked=$_POST[$i];
  if ($checked != "") 
  {
    $stroll=$starray[$i];
    $attendance=1;
      $sql="INSERT INTO attendance_comp (att_date, day, lect_no, teacher_code, username, roll_no, attendance, class_id ,sub_code) VALUES ('$date', '$day', '$lecture_no', '$teacher_code', '$username', $stroll, '$attendance', '$class_id' ,'$scode')";
      $query=mysqli_query($conn,$sql);
    

  }
  else
  {
    $stroll=$starray[$i];
    $attendance=0;
      $sql="INSERT INTO attendance_comp (att_date, day, lect_no, teacher_code, username, roll_no, attendance, class_id ,sub_code) VALUES ('$date', '$day', '$lecture_no', '$teacher_code', '$username', $stroll, '$attendance', '$class_id' ,'$scode')";
      $query=mysqli_query($conn,$sql);
  }
}
echo "<script>alert('Attendance Filled'); window.location='attendance.php'; </script>";
    
}


// }


 ?>
            </div><!-- /.box-body -->
            <div class="box-footer">
             
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