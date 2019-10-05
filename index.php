<?php include("conecton.php"); ?>
<?php include("getinfo.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Dashboard</title>
    <?php include('tags.php'); ?>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->









 <style>
  #sortable1, #sortable2 {
    border: 1px solid #eee;
    width: 142px;
    min-height: 20px;
    list-style-type: none;
    margin: 0;
    padding: 5px 0 0 0;
    float: left;
    margin-right: 10px;
  }
  #sortable1 li, #sortable2 li {
    margin: 0 5px 5px 5px;
    padding: 5px;
    font-size: 1.2em;
    width: 120px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  } );
  </script>


  


<script type="text/javascript">
  
function updateScroll(){
  
    var element = document.getElementById("notice");
    element.scrollTop = element.scrollHeight;
    var element = document.getElementById("news");
    element.scrollTop = element.scrollHeight;
    stopint();
}
var sd=setInterval(updateScroll,1);
function stopint()
{
  clearInterval(sd);
}






function sendmail()
{
       var mailto = document.getElementById("emailto").value;
       var mailsubject = document.getElementById("mailsubject").value;
       var mailMsg = document.getElementById("mailMsg").value;
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                window.location="/Login";
            }
        };
        xmlhttp.open("GET", "AJAX/sendmail.php?mailto="+mailto+"&mailsubject="+mailsubject+"&mailMsg="+mailMsg, true);
        xmlhttp.send();
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
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">



            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><sup style="font-size: 20px">View</sup></h3>
                  <p>Attendance</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="getprintatt.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Enter</sup></h3>
                  <p>Attendance</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Update yourself</sup></h3>
                  <p>News</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="news1.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Communication</sup></h3>
                  <p>Chat Room</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="chatroom.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <?php 

             $sub_code=array();
             $subject_name=array();
             $subject_short=array();
             $sql="SELECT * from subject WHERE Semester ='$Semester' and Department= '$Department' ";
             $query=mysqli_query($conn, $sql);
             
             while ( $fetch=mysqli_fetch_array($query) ) {
               $sub_code[]=$fetch['sub_code'];
               $subject_name[$fetch['sub_code']]=$fetch['name'];
               $subject_short[$fetch['sub_code']]=$fetch['short_name'];


             }
             
             foreach ($sub_code as $subject )
              {
                // echo $subject;
                $attendance=0;
                $total=0;
                $my_attendance=0;
                   $sql="SELECT * from attendance_comp WHERE sub_code ='$subject' and roll_no= '$roll_no' ";
                   $query=mysqli_query($conn,$sql);
                   
                   while ($fetch=mysqli_fetch_array($query))
                    {
                       // $Total_att_sql="SELECT * from attendance_comp WHERE sub_code ='$subject' ";
                       // $Total_att_query=mysqli_query($conn,$Total_att_sql);
                       // $Total_att=mysqli_num_rows($Total_att_query);

                      $attendance=$fetch['attendance'];
                      // echo $attendance;
                      $total=$total+1;
                        if ($attendance==1) {
                          $my_attendance=$my_attendance+1;
                          
                        }

                                }  

                                echo '<div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                      <div class="inner">
                                        <h3>'.$my_attendance.'</h3>
                                        <p>'.$subject_name[$subject].'</p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                      </div>
                                      <a href="#" class="small-box-footer">Your Total Attendance <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div><!-- ./col -->';           
             }
            






             ?>



            
          
           
          </div><!-- /.row -->



          
          <!-- Main row -->
          <div class="row">

            <!-- Testing panel -->
            <!-- <div class="col-md-12">
              
              <div class="box box-solid box-warning">
                <div class="box-header">
                  <h3 class="box-title">Warning Solid Box</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-warning btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="container">
                  <div class="panel-group" id="accordion"> -->
  <?php 
//Notice module programming

    // $department=$_SESSION['Department'];
    // $all_ids_notice=array();
    // $id_count=1;
    // $sql="SELECT * From college_notice";
    // $query=mysqli_query($conn,$sql);
    // $fetch=mysqli_fetch_array($query);
    // do {
    //   $all_ids_notice[]=$fetch['id'];
    // } while ($fetch=mysqli_fetch_array($query));

    // $count=count($all_ids_notice);
    // $sorted=rsort($all_ids_notice);
    // foreach ($all_ids_notice as $notice_id)
    //  {
      
    //   $sql="SELECT * From college_notice where id='$notice_id'";
    //   $query=mysqli_query($conn,$sql);
    //   $fetch=mysqli_fetch_array($query);
    //   $date=$fetch['date'];
    //   $time=$fetch['time'];
    //   $notice=$fetch['notice'];
    //   $header=$fetch['header'];
    //   echo '<div class="panel panel-default">
    //           <div class="panel-heading">
    //             <h4 class="panel-title">
    //               <a data-toggle="collapse" data-parent="#accordion" href="#notice'.$id_count.'">'.$header.' Date : '.$date.'</a>
    //             </h4>
    //           </div>
    //           <div id="notice'.$id_count.'" class="panel-collapse collapse in">
    //             <div class="panel-body">';

    //   echo '<div style="margin-bottom:5px ; border-bottom:1px dashed red;">';
    //   echo '<h3 style="color:red;"><strong style="color:#1ABC9C;">Heading : </strong>'.$header.'</h3>
    //       <h3 style="color:#07548C;"><strong style="color:#1ABC9C;">Date : </strong>'.$date.'</h3>
          
    //       <h3><strong style="color:#1ABC9C;">Notice : </strong></h3>'.$notice.'<hr>';

    //       echo "</div><hr>";
    //       echo '</div>
    //           </div>
    //         </div>';
    //         $id_count=$id_count+1;
    // }
 ?>
 <!--  </div>
</div> -->
<!--   <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div>  -->
                <!-- </div> --><!-- /.box-body -->
              <!-- </div>/.box -->
            <!-- </div> --><!-- /.col -->

            <!-- College Notice -->
            <div class="col-md-6">
              <!-- Warning box -->
              <div class="box box-solid box-warning">
                <div class="box-header">
                <center> <h3 class="box-title">College Notice <i class="fa fa-bell-o" aria-hidden="true"></i> </h3> </center> 
                  <div class="box-tools pull-right">
                    <button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-warning btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" style="overflow-y: scroll;height: 450px;" id="notice">
                  <?php 
//Notice module programming

    $department=$_SESSION['Department'];
    
    $sql="SELECT * From college_notice";
    $query=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_array($query);
    do {
      $date=$fetch['date'];
      $time=$fetch['time'];
      $notice=$fetch['notice'];
      $header=$fetch['header'];

      echo '<div style="margin-bottom:5px ; border-bottom:1px dashed red;">';
      echo '<h3 style="color:red;"><strong style="color:#1ABC9C;">Heading : </strong>'.$header.'</h3>
          <h3 style="color:#07548C;"><strong style="color:#1ABC9C;">Date : </strong>'.$date.'</h3>
          
          <h3><strong style="color:#1ABC9C;">Notice : </strong></h3>'.$notice.'<hr>';

          echo "</div><hr>";
    } while ($fetch=mysqli_fetch_array($query));
 ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <!-- College NEWS -->
            <div class="col-md-6">
              <!-- Success box -->
              <div class="box box-solid box-success">
                <div class="box-header">
                 <center> <h3 class="box-title">College NEWS <i class="fa fa-newspaper-o" aria-hidden="true"></i> </h3></center>
                  <div class="box-tools pull-right">
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" style="overflow: auto;height: 450px;" id="news">
                 <?php 
//Notice module programming
              $department=$_SESSION['Department'];    
              $sql="SELECT * From college_news";
              $query=mysqli_query($conn,$sql);
              $fetch=mysqli_fetch_array($query);
              do {
                $date=$fetch['date'];
                $time=$fetch['time'];
                $news=$fetch['news'];
                $header=$fetch['header'];

                echo '<div style="margin-bottom:5px ; border-bottom:1px dashed red;">';
                echo '<h3 style="color:red;"><strong style="color:#1ABC9C;">Heading : </strong>'.$header.'</h3>
                    <h3 style="color:#07548C;"><strong style="color:#1ABC9C;">Date : </strong>'.$date.'</h3>
                    
                    <h3><strong style="color:#1ABC9C;">News : </strong></h3>'.$news.'<hr>';

                    echo "</div>";
              } while ($fetch=mysqli_fetch_array($query));
 
                   ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->


            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">


             

              <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">Quick Email</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div>
                <div class="box-body">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" id="emailto" placeholder="Email to:"/>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="mailsubject" placeholder="Subject"/>
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Message" id="mailMsg" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </form>
                </div>
                <div class="box-footer clearfix">
                  <button class="pull-right btn btn-default" id="sendEmail" type="button" onclick="sendmail();">Send <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </div>

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">






              
              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Progress bars -->
                      <div class="clearfix">
                        <span class="pull-left">Task #1</span>
                        <small class="pull-right">90%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #2</span>
                        <small class="pull-right">70%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Task #3</span>
                        <small class="pull-right">60%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #4</span>
                        <small class="pull-right">40%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php include("footer.php"); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>