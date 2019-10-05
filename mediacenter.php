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
    <script> 
   function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("file1").files[0];
  var caption= _("captionji").value;
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



<style type="text/css">
  #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.image_modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.image_modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.image_modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .image_modal-content {
        width: 100%;
    }
}
</style>

<script>
// Get the modal
function modaling(src,alt)
{
var modal = document.getElementById('image_modal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText =document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src =src;
    captionText.innerHTML =alt;


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
}
</script>




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
            Media Center
            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#Uploadmodal" >Upload Media </button>
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
                $get_dates_sql="SELECT * from comp_links_3 order by date DESC";
                $get_dates_query=mysqli_query($conn,$get_dates_sql);
                while ($fetch_data=mysqli_fetch_array($get_dates_query)) 
                {
                      $name_fetched=$fetch_data['uploaded_by'];
                      $caption_fetched=$fetch_data['caption'];
                      $address_fetched=$fetch_data['address'];
                      $file_type=end(explode('.', $address_fetched));
                      if (in_array($file_type, $Image_file_type))
                       {
                        $i_logo="fa fa-camera";
                        $media='<img src="'.$address_fetched.'" alt="'.$caption_fetched.'" class="margin" style=width:200px;height:200px onclick="modaling(this.src,this.alt);"  />';
                      }
                       else if (in_array($file_type, $Video_file_type))
                       {
                       $i_logo="fa fa-video-camera";
                        $media='<video width="200" height="200" controls alt=" '.$caption_fetched.'"  >
                                    <source src="'.$address_fetched.'" type="video/mp4">                                    
                               </video>';
                      }
                      else
                       {
                         $i_logo="fa fa-envelope";
                      $address="https://docs.google.com/gview?url=http://gndpclogin.webinfoera.com/".$address_fetched."&embedded=true";
                      $media='<iframe src="'.$address.'" style="width:300px; height:250px;" frameborder="0" alt="Please Wait while Pdf is loading"></iframe>';

                        }
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
                <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                    <div class="timeline-body">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                      quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class='timeline-footer'>
                      <a class="btn btn-primary btn-xs">Read more</a>
                      <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-user bg-aqua"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-comments bg-yellow"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                    <div class="timeline-body">
                      Take me to your leader!
                      Switzerland is small and neutral!
                      We are more like Germany, ambitious and misunderstood!
                    </div>
                    <div class='timeline-footer'>
                      <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-camera bg-purple"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                    <div class="timeline-body">
                      <img src="http://placehold.it/150x100" alt="..." class='margin' />
                      <img src="http://placehold.it/150x100" alt="..." class='margin'/>
                      <img src="http://placehold.it/150x100" alt="..." class='margin'/>
                      <img src="http://placehold.it/150x100" alt="..." class='margin'/>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-video-camera bg-maroon"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>
                    <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>
                    <div class="timeline-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen></iframe>                        
                      </div>
                    </div>
                    <div class="timeline-footer">
                      <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-code"></i> Timeline Markup</h3>
                </div>
                <div class="box-body">
                  <pre style="font-weight: 600;">
&lt;ul class="timeline">

    &lt;!-- timeline time label -->
    &lt;li class="time-label">
        &lt;span class="bg-red">
            10 Feb. 2014
        &lt;/span>
    &lt;/li>
    &lt;!-- /.timeline-label -->

    &lt;!-- timeline item -->
    &lt;li>
        &lt;!-- timeline icon -->
        &lt;i class="fa fa-envelope bg-blue">&lt;/i>
        &lt;div class="timeline-item">
            &lt;span class="time">&lt;i class="fa fa-clock-o">&lt;/i> 12:05&lt;/span>

            &lt;h3 class="timeline-header">&lt;a href="#">Support Team&lt;/a> ...&lt;/h3>

            &lt;div class="timeline-body">
                ...
                Content goes here
            &lt;/div>

            &lt;div class='timeline-footer'>
                &lt;a class="btn btn-primary btn-xs">...&lt;/a>
            &lt;/div>
        &lt;/div>
    &lt;/li>
    &lt;!-- END timeline item -->

    ...

&lt;/ul>
                  </pre>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
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
  <input type="text" class="form-control" id="captionji" placeholder="Caption ..." name="caption" required />
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
