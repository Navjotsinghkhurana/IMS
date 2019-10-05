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

function showchat() {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("chat").innerHTML = this.responseText;
               
            }
        };
        xmlhttp.open("GET", "showchat.php" , true);
        xmlhttp.send();
        console.log("Helloji");
       
 var element = document.getElementById("chat");
                element.scrollTop = element.scrollHeight;
    
}
setInterval(showchat, 1000);

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
            Chat Room
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/college"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Chat Room</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title">Chat Room</h3></center>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">

            

          <div class='row'>
            <div class='col-md-12' >
              <!-- DIRECT CHAT -->
              <div id="myDirectChat" class="box box-warning direct-chat direct-chat-warning" >
                <div class="box-header with-border">
                  <h3 class="box-title">Batch Chat</h3>
                  <div class="box-tools pull-right" >
                    <!-- <span data-toggle="tooltip" title="3 New Messages" class='badge bg-yellow'>3</span> -->
                   <!--  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" >
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages" id="chat" style="height: 400px;">
                    <?php 
                    // reading();
                     ?>
                    <?php 
                      // while (true) {
                      //   reading();
                      //   sleep(5);
                      // }




                     ?>
                     <?php
if (isset($_POST['btnmsg']) && $_POST['msg']!="") {

     
      $msg=$_POST['msg']; 
      $msg=nl2br($msg);   
      $uid=$_SESSION["uid"];
      $name=$_SESSION["name"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gndp_college";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
      $sql="INSERT INTO comp_chat_3 (id, date, time, message_by, username, message) VALUES (NULL, '$date', '$time', '$name', '$uid', '$msg');";
      $checkquery=mysqli_query($conn,$sql);
      $_POST['msg']="";
          
          // $sendMessage=$name."Sent Message in chatroom \n".$msg;
          // sendMessage($sendMessage);
          
          
        } 
          

?>
                    <!-- Message. Default to the left -->
                    

                   




                  </div><!--/.direct-chat-messages-->


                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class='contacts-list'>
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='dist/img/user1-128x128.jpg'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Count Dracula
                              <small class='contacts-list-date pull-right'>2/28/2015</small>
                            </span>
                            <span class='contacts-list-msg'>How have you been? I was...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='dist/img/user7-128x128.jpg'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Sarah Doe
                              <small class='contacts-list-date pull-right'>2/23/2015</small>
                            </span>
                            <span class='contacts-list-msg'>I will be waiting for...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='dist/img/user3-128x128.jpg'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nadia Jolie
                              <small class='contacts-list-date pull-right'>2/20/2015</small>
                            </span>
                            <span class='contacts-list-msg'>I'll call you back at...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='dist/img/user5-128x128.jpg'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nora S. Vans
                              <small class='contacts-list-date pull-right'>2/10/2015</small>
                            </span>
                            <span class='contacts-list-msg'>Where is your new...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='dist/img/user6-128x128.jpg'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              John K.
                              <small class='contacts-list-date pull-right'>1/27/2015</small>
                            </span>
                            <span class='contacts-list-msg'>Can I take a look at...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='dist/img/user8-128x128.jpg'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Kenneth M.
                              <small class='contacts-list-date pull-right'>1/4/2015</small>
                            </span>
                            <span class='contacts-list-msg'>Never mind I found...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                    </ul><!-- /.contatcts-list -->
                  </div><!-- /.direct-chat-pane -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <form  method="post">
                    <div class="input-group">
                      <input type="text" name="msg" placeholder="Type Message ..." class="form-control"/>
                      <span class="input-group-btn">
                        <button name="btnmsg" class="btn btn-warning btn-flat">Send</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div><!--/.direct-chat -->
            </div><!-- /.col -->
            
            
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
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>

  </body>
</html>

<?php 
                

function reading(){
//Notice module programming
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gndp_college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn)
 { 
    $department=$_SESSION['Department'];
    
    $sql="SELECT * From comp_chat_3";
    $query=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_array($query);
    do {
      $date_post=$fetch['date'];
      $time_post=$fetch['time'];
      $message_by=$fetch['message_by'];
      $message=$fetch['message'];
      //current username
      $me=$fetch['username'];
      //get Photo
      $sql_photo="SELECT * from users Where username='$me'";
      $query_photo=mysqli_query($conn,$sql_photo);
     $fetch_photo=mysqli_fetch_array($query_photo);

     $type=$fetch_photo['type'];
     
         $usercheck_sql="SELECT * from $type WHERE username='$me'";
        $usercheck_query=mysqli_query($conn, $usercheck_sql);
          $usercheck_fetch=mysqli_fetch_array($usercheck_query);
          $photo=$usercheck_fetch['Image'];
         

      if ($me==$_SESSION['uid']) {
      //   echo '<div class="col-md-4" ><h6>'.$date_post.'</h6></div>';
      //   echo '<div class="col-md-7" style="background-color:#ccc;border: 2px solid #a1a1a1;
      //         padding: 5px 10px; 
      //         background: #dddddd;              
      //         border-radius: 25px;">';
      // echo '<h4 style="color:#FBB03B;"><strong style="color:blue;"></strong>'.$message_by.'</h4>
          
      //     <h5><strong style="color:#1ABC9C;">'.$message.'</strong></h5>';

      //     echo "</div>";

          echo " <div class='direct-chat-msg right'>";
        echo " <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-right'>".$message_by."</span>
                        <span class='direct-chat-timestamp pull-left'>".$date_post."-".$time_post."</span>
              </div>";
        echo '<img class="direct-chat-img" src="'.$photo.'" alt="No Image" />';
        echo '<div class="direct-chat-text">';
        echo $message;
        echo "</div>
              </div>";


      }
      else
      {
        echo " <div class='direct-chat-msg'>";
        echo " <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-left'>".$message_by."</span>
                        <span class='direct-chat-timestamp pull-right'>".$date_post."-".$time_post."</span>
              </div>";
        echo '<img class="direct-chat-img" src="'.$photo.'" alt="No Image" />';
        echo '<div class="direct-chat-text">';
        echo $message;
        echo "</div>
              </div>";

      // echo '<div class="col-md-7" style="background-color:#ccc;border: 2px solid #a1a1a1;
      //         padding: 5px 10px; 
      //         background: #dddddd;              
      //         border-radius: 25px;">';
      // echo '<h4 style="color:red;"><strong style="color:#1ABC9C;"></strong>'.$message_by.'</h4>
          
      //     <h5><strong style="color:#1ABC9C;">'.$message.'</strong></h5>';

      //     echo "</div>";
      //     echo '<div class="col-md-4"><h6>'.$date_post.'</h6></div>';


        }
       
    } while ($fetch=mysqli_fetch_array($query));
    echo '<script> var element = document.getElementById("chat");
    element.scrollTop = element.scrollHeight </script>';
 }
 else
 {
  header("location: login.php");
 }
}
 ?> 
<?PHP
function sendMessage($message){
    $content = array(
        "en" => '$message'
        );

    $fields = array(
        'app_id' => "72048456-2552-4de2-ac74-cb2adb0c95c4",
        'included_segments' => array('All'),
        'data' => array("foo" => "bar"),
        'large_icon' =>"ic_launcher_round.png",
        'contents' => $content
    );

    $fields = json_encode($fields);
// print("\nJSON sent:\n");
// print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                               'Authorization: Basic M2ZmNDQ3MDMtZWYzZC00YzhmLTg5OWUtOTk1ODIxNThmNTFi'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

$response = sendMessage();
$return["allresponses"] = $response;
$return = json_encode( $return);
// print("\n\nJSON received:\n");
// print($return);
// print("\n");
?>