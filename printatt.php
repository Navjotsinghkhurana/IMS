
<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body >

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gndp_college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['sub']))
{
	error_reporting(0);
	$dpstart=$_GET['dpstart'];
	$dpend=$_GET['dpend'];
	$batch=$_GET['batch'];


// Graphics
	echo '<center><h1><b>Attendance Sheet</b></h1></center><br>';
	echo "<center><h2><b>From ".$dpstart." to ".$dpend."</b></h2></center>";



	$st_total_attendace=array();
	$st_total_dates=array();
	$all_students_t=array();
	$date_sql="SELECT * from attendance_comp where date < '$dpstart' and batch='$batch'";
	$date_query=mysqli_query($conn,$date_sql);
	while ($date_fetch=mysqli_fetch_array($date_query)) 
	{
	$date_st=$date_fetch['date'];
		if (in_array($date_st, $st_total_dates))
		 {
			

		}
		else
		{
			
			array_push($st_total_dates, $date_st);

		}

	}
	$num_total_dates=count($st_total_dates);
	// echo 'Total number of dates before'.$dpstart.'is'.$num_total_dates."<br>";

	for ($j=0; $j < $num_total_dates ; $j++) 
			{ 
				
				for ($k=1; $k <=8 ; $k++)
				 { 
					$specific_date_sql="SELECT * from attendance_comp where date ='$st_total_dates[$j]' and batch='$batch' and Lect_no='$k'";
				$specific_date_query=mysqli_query($conn,$specific_date_sql); 
				$specific_date_fetch=mysqli_fetch_array($specific_date_query);

				do {
					$roll_no=$specific_date_fetch['roll_no'];
					$attendance=$specific_date_fetch['attendance'];

					if (in_array($roll_no, $all_students_t))
					 {
						$st_total_attendace[$roll_no][$j][$k][]=$attendance;
									

					}
					else
					{
						$all_students_t[]=$roll_no;
						$st_total_attendace[$roll_no][$j][$k][]=$attendance;
					}
					
				} while ($specific_date_fetch=mysqli_fetch_array($specific_date_query));
				// echo "<pre>";
				// print_r($st_total_attendace[1251]);
				// echo "</pre><br>";
				}

			}
			// echo "<pre>";
			// 	print_r($st_total_attendace);
			// 	echo "</pre><br>";
// echo $st_total_attendace[1271][0]."<br>";


	$date_sql="SELECT * from attendance_comp where batch='$batch' and date between '$dpstart' and '$dpend'order by date asc";
	$date_query=mysqli_query($conn,$date_sql);
	$date_num=mysqli_num_rows($date_query);
	if ($date_num!=0) {
		
	
	$date_fetch=mysqli_fetch_array($date_query);
	$alldate=array();
	$record=0;
	$alldatecount=0;
	echo "<table border=2 style='border-collapse:collapse;'>";
	
	do {
		
		$date=$date_fetch['date'];
		if (in_array($date, $alldate))
		 {
			

		}
		else
		{
			$alldatecount=$alldatecount+1;
			array_push($alldate, $date);
			$record=$record+1;

			
			// echo $record."-".$date."<BR>";

			// echo "<th>".$date."</th>";

		}

	} while ($date_fetch=mysqli_fetch_array($date_query));




			
			// echo "<th colspan=$alldatecount>Date</th>";
			echo "<tr>";
			// echo "<th>Name Of Student </th>";
			echo "<th>Roll No.</th>";
			for ($j=0; $j <$alldatecount ; $j++) 
			{ 
		
			echo "<th colspan=8>".$alldate[$j]."</th>";
			
			
			
			}
			echo "<th>Previous Attendance</th>";
			echo "<th>Attendance</th>";
			echo "<th>Total attendance</th>";
			echo "<th>Signature</th>";
			echo "</tr>";
			echo "<tr>";
			// echo "<td>xxxx</td>";
			echo "<td><b>0000</b></td>";
			$all_students=array();
			$all_students_att=array();
			for ($j=0; $j < $alldatecount ; $j++) 
			{ 
				for ($i=1; $i <=8 ; $i++) { 
						
						echo "<td style='border-right-style:solid;'><b>".$i."</b></td>";
						
					}
				for ($k=1; $k <=8 ; $k++)
				 { 
					$specific_date_sql="SELECT * from attendance_comp where date ='$alldate[$j]' and batch='$batch' and Lect_no='$k'";
				$specific_date_query=mysqli_query($conn,$specific_date_sql); 
				$specific_date_fetch=mysqli_fetch_array($specific_date_query);

				do {
					$roll_no=$specific_date_fetch['roll_no'];
					$attendance=$specific_date_fetch['attendance'];

					if (in_array($roll_no, $all_students))
					 {
						$all_students_att[$roll_no][$j][$k][]=$attendance;
									

					}
					else
					{
						$all_students[]=$roll_no;
						$all_students_att[$roll_no][$j][$k][]=$attendance;
					}
					
				} while ($specific_date_fetch=mysqli_fetch_array($specific_date_query));
				// echo "<pre>";
				// print_r($all_students_att);
				// echo "</pre><br>";
				}
			}
			echo "<td><center><b>Previous Att</b></center></td>";
			echo "<td><b><center>Current Att</center></b></td>";
			echo "<td><b><center>Total Attendance</center></b></td>";
			echo "<td><b>Signature of Student</b></td>";
			echo "</tr>";

										// echo "<pre>";
										// print_r($all_students_att);
										// echo "</pre>";




			foreach ($all_students as $key => $value)
			 {
			 			echo "<tr>";

					 	//Print Name
						
						// echo "<td>";
						// echo "Name";
						// echo "</td>";

						//Print Roll No
						echo "<td>";
						echo $value;
						echo "</td>";
						$att=0;
						$p_at=0;
				for ($j=0; $j < $alldatecount ; $j++) 
				{ 
							
						
						
							 	// echo "string";
								
								for ($l=1; $l <= 8 ; $l++) { 
									
									// echo "<pre>";
									// echo $value;
									// print_r($all_students_att[$value][$j][$l]);
									// echo "</pre>";
									
									// echo $all_students_att[$value][$j][$l][0];
									if ($all_students_att[$value][$j][$l][0]==1) {
										$att=$att+1;
									echo "<td style='color:green'>";
									echo "1";
									echo "</td>";
									}
									else
									{
									echo "<td style='color:red'>";
									echo "0";
									echo "</td>";
									}

									// For Previous Attendance
									if ($st_total_attendace[$value][0][$l][0]==1) {
										$p_at=$p_at+1;
									
									}
									


								
								}
							
									
									
					}

					
					$t_at=$p_at+$att;
					echo "<td><center>".$p_at."</center></td>";		
					echo "<td><center>".$att."</center></td>";		
					echo "<td><center><b>".$t_at."</b></center></td>";		
					echo "<td></td>";
					echo "</tr>";	
					
				}
				


	echo "</table>";
	}
	else{
		echo "No Record";
	}

}
 ?>
 </body>
</html>
<?php 
	$date_sql="SELECT * from attendance_comp where batch='2015' and roll_no=1271";
	$date_query=mysqli_query($conn,$date_sql);
	$date_num=mysqli_num_rows($date_query);
	// echo $date_num;



 ?>