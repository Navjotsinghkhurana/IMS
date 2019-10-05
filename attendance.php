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
            Attendance
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/college"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Attendance</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title">Attendance</h3></center>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">
             <?php 
             // error_reporting(0);
             //color of div
             $color_div=array(" box box-solid bg-light-blue"," box box-solid bg-aqua"," box box-solid bg-red"," box box-solid bg-green"," box box-solid bg-yellow"," box box-solid bg-purple"," box box-solid bg-blue"," box box-solid bg-maroon");

 
    $teacher_code=$_SESSION["user_id"];
    $sql="SELECT * From timetable WHERE day='$day'AND teacher_id='$teacher_code' order by lect_no ASC ";
      
      $query=mysqli_query($conn,$sql);
     
      $lect=array();
      echo '<div class="row show-grid">';
      while ($fetch=mysqli_fetch_array($query)){
        $checksubcode=$fetch['sub_code'];
        $class_id=$fetch['class_id'];        
        $lec=$fetch['lect_no'];
        // $section=$fetch['Section'];
        $checkalreadysql="SELECT * from attendance_comp  WHERE Day='$day' and att_date='$date' AND teacher_code='$teacher_code' AND lect_no='$lec' AND class_id='$class_id'";
        $checkalreadyquery=mysqli_query($conn,$checkalreadysql);
        // $checkalreadyfetch=mysqli_fetch_array($checkalreadyquery);
        $checkalreadyrow=mysqli_num_rows($checkalreadyquery);
        if ($checkalreadyrow>=1) {
          // echo "string";
        }
        else{
        $scode=$fetch['sub_code'];
        // $checksubcode=$scode;

        
        // array_push($lect,$fetch['Lect_no']);

        $ssql="SELECT * From subject where sub_code='$scode'";
      
          $squery=mysqli_query($conn,$ssql);
          $sfetch=mysqli_fetch_array($squery);
          $div_color=array_rand($color_div);
          
          $sname=$sfetch['name'];
          $sub_type=$sfetch['Type'];
          echo '<a href="attendanceactive.php?lecture_no='.$lec.'&class_id='.$class_id.'&subcode='.$scode.'" style="color:#d95459;">
              <div class="col-md-4 text-center">
              <!-- Danger box -->
              <div class="'.$color_div[$div_color].'">
                <div class="box-header">
                  <h2 class="box-title">Lecture No:'.$lec.'</h2>
                </div><hr>
                <div class="box-body">
                  '.$sname.'<br><hr> <h5>'.$sub_type.'</h5><br>

                </div><!-- / box-body -->
              </div><!-- / box -->
              </div><!-- /.col -->
              </a>';
}
          // echo '<a href="attendanceactive.php?lecture_no='.$lec.'&section='.$section.'&subcode='.$scode.'" style="color:#d95459;">
          //         <div class="col-md-4 text-center"><h4>Lecture No.<br>'.$lec.'</h4>'.$sname.'<br><h5>'.$sub_type.'</h5><br><h5>'.$section.'</h5></div></a>';
        // }while($sfetch=mysqli_fetch_array($squery));
      //  }
      // }
      }
     
      echo "</div>";

      
      








 ?>
             
            </div><!-- / box-body -->
            <div class="box-footer text-center">
              
            </div><!-- / box-footer-->
          </div><!-- / box -->

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