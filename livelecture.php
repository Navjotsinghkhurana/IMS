<?php include("conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Media Center</title>
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
    <div class="wrapper">
      <?php include('header.php'); ?>
      <?php include('sidebar.php'); ?>

     

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Lecture Center
            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#Uploadmodal" >Upload Lecture </button>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/college"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- <li><a href="#">UI</a></li>
            <li class="active">Timeline</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <!-- The time line -->
              <ul class="timeline">
<!-- modal for Image -->



<div id="image_modal" class="image_modal">
  <span class="close">&times;</span>
  <img class="image_modal-content" id="img01">
  <div id="caption"></div>
</div>


<!-- end Modal -->
                <?php 
                $Image_file_type=array('JPEG','jpg','PNG','png','gif');
                 $Video_file_type=array('mp4','ogg','MOV','mov','MP4');
                $total_date=array();
                $span_bg=array("bg-red","bg-blue","bg-aqua","bg-maroon","bg-yellow","bg-green","bg-purple","bg-gray");
                $get_dates_sql="SELECT * from comp_lect_3 order by date DESC";
                $get_dates_query=mysqli_query($conn,$get_dates_sql);
                while ($fetch_data=mysqli_fetch_array($get_dates_query)) 
                {
                      $name_fetched=$fetch_data['uploaded_by'];
                      $caption_fetched=$fetch_data['caption'];
                      $address_fetched=$fetch_data['address'];
                      $shortlink=explode("/", $address_fetched);
                      $final_link="https://www.youtube.com/embed/".$shortlink[3];
                     
                        $i_logo="fa fa-camera";
                        $media='<div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="'.$final_link.'" frameborder="0" allowfullscreen></iframe>                        
                                </div>';
                      
                      $time_fetched=$fetch_data['time'];
                      $dates_fetched=$fetch_data['date'];
                      $originalDate =$dates_fetched;
                      $newDate = date("d M  .Y", strtotime($originalDate));
                      if (in_array($dates_fetched, $total_date))
                       {
                        
                        echo '<li>
                                <i class="'.$i_logo.' '.$span_bg[$cl_span].'"></i>
                                <div class="timeline-item">
                                  <span class="time"><i class="fa fa-clock-o"></i> '.$time_fetched.'</span>
                                  <h3 class="timeline-header"><a href="#">'.$name_fetched.'</a> '.$caption_fetched.'</h3>
                                  <div class="timeline-body">
                                  '.$media.'
                                    
                                  </div>
                                 
                                </div>
                              </li>'  ;
                      }
                      else
                      {
                        
                        // $diff=strtotime($time)-strtotime($time_fetched);
                        // // echo $diff;
                        // $seconds = $diff/60;
                        
                        // echo round($seconds);

                        array_push($total_date, $dates_fetched);
                         // Time Line Lable
                  $cl_span=array_rand($span_bg);
                 
                  echo ' <li class="time-label">
                          <span class="'.$span_bg[$cl_span].'">
                           '.$newDate.'
                          </span>
                        </li>';




                        echo '<li>
                                <i class="'.$i_logo.' '.$span_bg[$cl_span].'"></i>
                                <div class="timeline-item">
                                  <span class="time"><i class="fa fa-clock-o"></i> '.$time_fetched.'</span>
                                  <h3 class="timeline-header"><a href="#">'.$name_fetched.'</a> '.$caption_fetched.'</h3>
                                  <div class="timeline-body">
                                  '.$media.'
                                    
                                  </div>
                                 
                                </div>
                              </li>'  ;






                      }
                 
                }





                 ?>
                <!-- timeline time label -->
                

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include("footer.php"); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>

<!-- Modal -->
<!-- Modal -->
<div id="Uploadmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
         <h2 class="modal-title"><b>Upload Lecture</b></h2>
      </div>
      <div class="modal-body">
  <form  enctype="multipart/form-data" method="get" >
  <input type="text" class="form-control" placeholder="Caption ..." name="caption" required />
  <br>
  <input type="text" class="form-control" placeholder="Link" name="link" required />
  <br>
  
  <button value="Upload File"  class="btn btn-success" name="submit"> Upload Lecture </button> 
 
</form> 
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </body>
</html>
<?php
if (isset($_GET['submit'])) {
 
    $uid=$_SESSION["uid"];
      $name=$_SESSION["name"];
      
      $caption=$_GET['caption'];   
      $link=$_GET['link'];   
      

     $sql="INSERT INTO comp_lect_3 (id, date, time, uploaded_by, username, address, caption) VALUES (NULL, '$date', '$time', '$name', '$uid', '$link', '$caption')";
      $checkquery=mysqli_query($conn,$sql);
      if ($checkquery) {
       echo '<script>alert("Lecture Streaming"); window.location="livelecture.php"</script>';
      }
    }

?>