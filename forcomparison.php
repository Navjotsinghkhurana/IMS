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
  </head>



  <script type="text/javascript">
  	function getvalue()
  	{


  		var Registration = document.getElementById("Registration").value;
  		var batch=Registration.substring(0,2);
  		var dept_code=Registration.substring(0,2);
  		if (batch==00) {

  			var batch=Registration.substring(0,3);
  			var batch=2+batch;
  			var dept_code=Registration.substring(5,7);
  			if (dept_code==62) {
  				var dept='Comp';
  			}
  			if (dept_code==53) {
  				var dept='Mechanical';
  			}
  			if (dept_code==61) {
  				var dept='electronics';
  			}
  			if (dept_code==52) {
  				var dept='electrical';
  			}
  			if (dept_code==51) {
  				var dept='Civil';
  			}
  			if (dept_code==93) {
  				var dept='Automobile';
  			}
  		}



  		if (batch==19||batch==20) {
  			var batch=Registration.substring(0,4);
  			var dept_code=Registration.substring(6,8);
  			if (dept_code==62) {
  				var dept='Comp';
  			}
  			if (dept_code==53) {
  				var dept='Mechanical';
  			}
  			if (dept_code==61) {
  				var dept='electronics';
  			}
  			if (dept_code==52) {
  				var dept='electrical';
  			}
  			if (dept_code==51) {
  				var dept='Civil';
  			}
  			if (dept_code==93) {
  				var dept='Automobile';
  			}
  		}
  		if (batch<=18) 
  		{
  			var batch=20+batch;
  			var dept_code=Registration.substring(5,7);
  			if (dept_code==62) {
  				var dept='Comp';
  			}
  			if (dept_code==53) {
  				var dept='Mechanical';
  			}
  			if (dept_code==61) {
  				var dept='electronics';
  			}
  			if (dept_code==52) {
  				var dept='electrical';
  			}
  			if (dept_code==51) {
  				var dept='Civil';
  			}
  			if (dept_code==93) {
  				var dept='Automobile';
  			}
  		}

  		document.getElementById("batch").value=batch;
  		document.getElementById("dept").value=dept;
  		console.log(batch);

      	// var Batch = document.getElementById("Batch").value;
  	}
  </script>
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
            Enter Data
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Data</h3>
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
                                    <h1 class="title">Enter Registration</h1>
                                    <!-- <p class="category">Complete profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Registration</label>
                                                    <input type="text" placeholder="Registration" name="Registration" required class="form-control" id="Registration" onkeydown="getvalue();" onkeyup="getvalue();" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Semester Result</label><br>
                                                   
                                                    Sem 1<input type="checkbox" name="Sem_1"  checked value=1 /><br>
                                                    Sem 2<input type="checkbox" name="Sem_2"  checked value=1 /><br>
                                                    Sem 3<input type="checkbox" name="Sem_3"  checked value=1 /><br>
                                                    Sem 4<input type="checkbox" name="Sem_4"  checked value=1 /><br>
                                                    Sem 5<input type="checkbox" name="Sem_5"  checked value=1 /><br>
                                                    Sem 6<input type="checkbox" name="Sem_6"  checked value=1 /><br>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Batch</label>
                                                     <input type="text" placeholder="Batch" name="batch" id="batch" required class="form-control" />
                                                      <label class="control-label">Department</label>
                                                     <input type="text" placeholder="Batch" name="dept"  id="dept" required class="form-control" />
                                                    
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
                                        <!--  -->
                                        <button type="submit" class="btn btn-primary pull-right" name="sub">Submit</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
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
   <!--  <script src='../../plugins/fastclick/fastclick.min.js'></script> -->
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>
<?php 

error_reporting(E_ALL);
if ($conn) {
	echo '<script>alert("No Internet Connectioin");"</script>';
}

if (isset($_POST['sub'])) {

$Registration=$_POST['Registration'];
$batch=$_POST['batch'];
$dept=$_POST['dept'];
$Sem_1=$_POST['Sem_1'];
$Sem_2=$_POST['Sem_2'];
$Sem_3=$_POST['Sem_3'];
$Sem_4=$_POST['Sem_4'];
$Sem_5=$_POST['Sem_5'];
$Sem_6=$_POST['Sem_6'];

// echo $Registration;
// echo $batch;
// echo $dept;
// echo $Sem_1;
// echo $Sem_2;
// echo $Sem_3;
// echo $Sem_4;
// echo $Sem_5;
// echo $Sem_6;

$check_record_sql="SELECT * FROM comparison where registration_no='$Registration'";
$check_record_query=mysqli_query($conn,$check_record_sql);
$check_record_num=mysqli_num_rows($check_record_query);
if ($check_record_num==0) {


$sqlji="INSERT INTO comparison (id, registration_no, batch, department, Sem_1, Sem_2, Sem_3, Sem_4, Sem_5, Sem_6) VALUES (NULL, '$Registration', '$batch', '$dept', '$Sem_1', '$Sem_2', '$Sem_3', '$Sem_4', '$Sem_5', '$Sem_6');";
$query=mysqli_query($conn,$sqlji);
 $stid=$_SESSION["uid"];
$last_id = mysqli_insert_id($conn);
$sql_for_by="INSERT INTO comparison_by (id, stid, c_tid, date) VALUES (NULL, '$stid', '$last_id', '$date')";
$sql_for_by_query=mysqli_query($conn,$sql_for_by);


if ($query) {
echo '<script>alert("Data Inserted"); window.reload;</script>';
}
else
{
	echo '<script>alert("Not Inserted")</script>';
}

}
else
{

echo '<script>alert("Already Entered")</script>';

}
}

 ?>