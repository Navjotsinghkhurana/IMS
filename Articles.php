<?php include("conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Article Center</title>
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
   function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("file1").files[0];
  var caption= _("caption").value;
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file1", file);
  // formdata.append("caption", caption);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "mediaupload.php?caption="+caption);
  ajax.send(formdata);
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 100;
  location.reload();
  alert("File Was Uploaded");
}

function errorHandler(event) {
  _("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("status").innerHTML = "Upload Aborted";
}
    </script>
    <script type="text/javascript">
      








    </script>

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <?php include('header.php'); ?>
      <?php include('sidebar.php'); ?>

     

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper" style="background-color: #474e5d; color:white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Articles
           <a href="composearticle.php"> <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#Uploadmodal" >Upload Article </button></a>
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

                <?php 
                $Image_file_type=array('JPEG','jpg','PNG','png','gif');
                $total_date=array();
                $span_bg=array("bg-red","bg-blue","bg-aqua","bg-maroon","bg-yellow","bg-green","bg-purple","bg-gray");
                $get_dates_sql="SELECT * from comp_articles order by date DESC";
                $get_dates_query=mysqli_query($conn,$get_dates_sql);
                while ($fetch_data=mysqli_fetch_array($get_dates_query)) 
                {
                      $name_fetched=$fetch_data['uploaded_by'];
                      $aname_fetched=$fetch_data['name'];
                      $aheading_fetched=$fetch_data['heading'];
                      $article_fetched=$fetch_data['article'];
                      // $address_fetched=$fetch_data['address'];
                      // $file_type=end(explode('.', $address_fetched));
                      $i_logo="fa fa-camera";
                     
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
                                  <h3 class="timeline-header"><a href="#"> Uploaded By '.$name_fetched.'</a> <b>Article Name : '.$aname_fetched.'</b></h3><center><b>'.$aheading_fetched.'</b></center><hr>
                                  <div class="timeline-body">
                                  '.$article_fetched.'
                                    
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
                                  <h3 class="timeline-header"><a href="#"> Uploaded By '.$name_fetched.'</a> <b>Article Name : '.$aname_fetched.'</b> </h3><center><b>'.$aheading_fetched.'</b></center><hr>
                                  <div class="timeline-body">
                                  '.$article_fetched.'
                                    
                                  </div>
                                 
                                </div>
                              </li>'  ;






                      }
                 
                }





                 ?>
                <!-- timeline time label -->
                
                <!-- END timeline item -->
                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div><!-- /.col -->
          </div><!-- /.row -->

          

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
        
         <h2 class="modal-title"><b>Uplaod Media</b></h2>
      </div>
      <div class="modal-body">
<form id="mediaupload.php" enctype="multipart/form-data" method="post" >
  <input type="text" class="form-control" id="caption" placeholder="Caption ..." name="caption" required />
  <br>
  <input type="file" name="file1" id="file1" required><br>
  <button type="button" value="Upload File" onclick="uploadFile()" class="btn btn-success"> Upload Media </button> 
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
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
