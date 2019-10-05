<?php 
                

include('conecton.php');
 
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
 
 
 ?>