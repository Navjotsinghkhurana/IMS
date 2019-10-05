<?php
error_reporting(0);
// Checking if logged in 
if (!isset($_SESSION['login'])) {
 
  echo '<script>window.location="http://localhost/IMS/Dashboard/Login"</script>';
} 
//Selecting Table for information
// echo "string";
// echo $_SESSION['login'];
      $user_id=$_SESSION["user_id"];
	$root_table=$_SESSION["root_table"];
  
 	if($root_table=="staff")
 	{ 	  
 	  $user_id=$_SESSION["user_id"];
 	  
 	  $sql="SELECT * from $root_table WHERE staff_id='$user_id'";
      $query=mysqli_query($conn,$sql);
      $fetch=mysqli_fetch_array($query);
      $Name=$fetch['name']; 
      $Username=$fetch['username'];     
      $Image=$fetch['staff_image'];
      $Designation=$fetch['designation'];
      $Department=$fetch['department']; 
      $Email=$fetch['staff_email'];
      $Address=$fetch['address'];
      $Phone=$fetch['phone'];
     

      // $t_code=$fetch['teacher_code'];
      // $address=$fetch['Address'];
      // $phone_no=$fetch['Phone_no'];

      // Storing Session Values
      $_SESSION["Email"]=$Email;
      $_SESSION["Image"]=$Image;
      $_SESSION["Name"]=$Name;
      $_SESSION["Designation"]=$Designation;
      $_SESSION["Department"]=$Department;
      $_SESSION["Address"]=$Address;
      $_SESSION["Phone_no"]=$Phone;
      $_SESSION["username"]=$Username;

     //  if($designation=="administrator007")
     //                {
					// 	$_SESSION['admin'] = true;
					// }
					// else{
					// 	$_SESSION['admin']=false;
					// }

		}
		if($root_table=="student")
 	{
 	  
 	  $user_id=$_SESSION["user_id"]; 	  
 	    $sql="SELECT * from $root_table WHERE student_id='$user_id'";
      $query=mysqli_query($conn, $sql);
      $fetch=mysqli_fetch_array($query);
      $Name=$fetch['name'];
      $Username=$fetch['username'];
      $roll_no=$fetch['roll_no'];
      $Image=$fetch['student_image'];
      $Department=$fetch['department'];
      $Class=$fetch['class'];
      $Address=$fetch['address'];
      $Phone=$fetch['phone'];
      $Registration_no=$fetch['registration_number'];
      $Email=$fetch['student_email'];
      // $Batch=$fetch['Batch'];
      if ($Image=="stu_image") {
         $Image="http://localhost/IMS/Dashboard/Profile/student.jpg";
      }

      // Storing Session Values 
      $_SESSION["Email"]=$Email;
      $_SESSION["Address"]=$Address;
      $_SESSION["Image"]=$Image;
      $_SESSION["Phone_no"]=$Phone;
      $_SESSION["Name"]=$Name;
      $_SESSION["roll_no"]=$roll_no;
      $_SESSION["Department"]=$Department;
      $_SESSION["username"]=$Username;
      // $_SESSION["Registration_no"]=$Registration_no;
      // $_SESSION['Batch']=$Batch;

      // $sql="SELECT * from present where batch='$Batch'";
      // $query=mysqli_query($conn,$sql);
      // $fetch=mysqli_fetch_array($query);
      // $Semester=$fetch['Semester'];
      // $_SESSION["Semester"]=$Semester;

      

		}
 ?>