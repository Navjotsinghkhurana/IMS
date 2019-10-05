<?php include("conecton.php"); ?>
<?php 

$Batch=$_GET['batch'];
$branch=$_GET['branch'];

$sql="SELECT * from student where Batch='$Batch' and Department ='$branch' order by  Registration_no ASC  ";
$query=mysqli_query($conn,$sql);
$num=mysqli_num_rows($query);
if ($num==0) {
	echo '<option value="">Select the previous fields </option>';
}
else
{
	while ($fetch=mysqli_fetch_array($query)) 
	{
			$Name=$fetch['Name'];
			$Registration_no=$fetch['Registration_no'];
			$id=$fetch['id'];
			echo '<option value="'.$id.'">'.$Name.'-'.$Registration_no.' </option>';
	}
}



 ?>