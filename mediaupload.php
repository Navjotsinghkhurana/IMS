<?php include("conecton.php"); ?>
<?php

    $uid=$_SESSION["uid"];
      $name=$_SESSION["name"];
      
      $caption=$_GET['caption'];   
      // $caption="Text";   

      $imageExt= explode('.',$_FILES['file1']['name']);
      $imageActualExt= strtolower(end($imageExt));

    $source_file = $_FILES['file1']['tmp_name'];
    

     $imageNameNew=uniqid('', true). ".".$imageActualExt;
  $imageDestination='useful/'.$uid.$imageNameNew;
      $upload=move_uploaded_file( $source_file, $imageDestination );
      if ($upload)
      {
      echo "upload Completed";
     $sql="INSERT INTO comp_links_3 (id, date, time, uploaded_by, username, address, caption) VALUES (NULL, '$date', '$time', '$name', '$uid', '$imageDestination', '$caption')";
      $checkquery=mysqli_query($conn,$sql);
      }   

?>