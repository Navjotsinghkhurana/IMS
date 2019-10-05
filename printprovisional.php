<?php include("conecton.php"); ?>
<?php 
$id=$_GET['id'];
$sql="SELECT * from student where id='$id'";
$query=mysqli_query($conn,$sql);
$fetch=mysqli_fetch_array($query);
$Name=$fetch['Name'];
$father_name=$fetch['father_name'];
$Batch=$fetch['Batch'];
$Registration_no=$fetch['Registration_no'];
$Department=$fetch['Department'];
echo '';



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cettificate</title>
 	<head>
    <meta charset="UTF-8">
    
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
 </head>
 <body>
 
<div class="container">
	<div class="col-md-12 text-center"><h2><b><u>PROVISIONAL CERTIFICATE LETTER</u></b></h2></div><br>
	<br>
	<br>
	<br>
	<div class="col-md-offset-2"><h3>This is to certify that Mr./Ms. _____ <?php echo "<b>".$Name."</b>"; ?> ______ </h3></div><div class="col-md-4"></div>
	<div class="col-md-offset-2"><h3>S/O or D/O _____ <?php echo "<b>".$father_name."</b>"; ?> ______  is studying in</h3></div>
	<div class="col-md-offset-2"><h3>the final year for the degree of _____ <?php echo "<b>Computer Engineering</b>"; ?> ______.  </h3></div><div class="col-md-4"></div>
	<br>
	<br>
	<div class="col-md-offset-2"><h3>Signature of Candidate with Date: 
</h3></div><div class="col-md-4"></div>
<br>
<br>

<div class="col-md-offset-2"><h3>Signature of the Institute Head/Dean/Registrar/Head of Department with
<b>Date and Seal:</b>  </h3></div><div class="col-md-4"></div>
<br>
<br>
<br>
<div class="col-md-offset-2"><hr></div><div class="col-md-4"></div>
</div>



 </body>
 </html>
