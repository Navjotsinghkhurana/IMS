<?php 
function AllotedNumber($conn,$VehicleType,$UserReservation)
			{


			}
 include("conecton.php");
if (isset($_GET['userid'])) 
{
	// $SERIALNO=$_GET['SERIALNO'];
	$userid=$_GET['userid'];
	$action=1;
	$one=1;
	$zero=0;

	// $check_user_sql=
	 // if ( ctype_digit($userid)) { 
          
  //       // if true then return Yes 
  //       $user_type="student";
  //       echo "Yes\n"; 
  //   } else { 
          
  //       // if False then return No 
  //       echo "No\n"; 
  //       $user_type="faculty";
  //   } 

// 	if (isset($_GET['p'])) {
	// $UserReservation="Female";
	$UserReservation="Male";

		$check="SELECT * from vehicle_records where user_id='$userid'";
		$check_q=mysqli_query($conn,$check);
		$check_n=mysqli_num_rows($check_q);
		if ($check_n==0) {
			echo '<script>alert("User Vehicle Not Registered"); window.location="issuebook.php"</script>';
		}
		else
		{

			$fetch_b=mysqli_fetch_array($check_q);
			$VehicleNumber=$fetch_b['vehicle_number'];
			$VehicleType=$fetch_b['vehicle_type'];
			// $AllotedPLace=AllotedNumber($conn,$VehicleType,$UserReservation);
			$AllotedPLace;
			$BlockName=array();
				$Action="Entry";

				if ($UserReservation=="Female" || $UserReservation=="Faculty" || $UserReservation=="Event" ) {
					$check_alloted_blocks="SELECT * from parking_area where block_type='$VehicleType' AND reservation_category='$UserReservation'";
				}
				else
				{
				$check_alloted_blocks="SELECT * from parking_area where block_type='$VehicleType'";

			     }

			     // echo $check_alloted_blocks;
				$check_alloted_blocks_query=mysqli_query($conn,$check_alloted_blocks);
				// echo $check_alloted_blocks_query;
				while ($check_alloted_blocks_fetch=mysqli_fetch_array($check_alloted_blocks_query))
				{

					$Block_name=$check_alloted_blocks_fetch['block_name'];
					$Block_size=$check_alloted_blocks_fetch['block_size'];
					$Block_end=$check_alloted_blocks_fetch['block_end'];
					$Block_start=$check_alloted_blocks_fetch['block_start'];
					$Block_Reservation=$check_alloted_blocks_fetch['reservation_category'];
// echo $Block_start;
					

					$check_parking_available="SELECT * from parking_allotment where alloted_block='$Block_name' and action='$zero'";
					$check_parking_available_q=mysqli_query($conn,$check_parking_available);
					$CountExit=mysqli_num_rows($check_parking_available_q);
					$check_parking_available="SELECT * from parking_allotment where alloted_block='$Block_name' and action='$one'";
					$check_parking_available_q=mysqli_query($conn,$check_parking_available);
					$CountEntry=mysqli_num_rows($check_parking_available_q);
					// $fetch_data=mysqli_fetch_array($check_parking_available_q);
					// print_r($fetch_data);
$check=($CountEntry-$CountExit);
// echo "string";
// echo $check;
// echo $Block_size;


					if ($Block_size > $check && $VehicleType=="2W") {
						$AllotedPLace=$Block_name;
						// return($AllotedPLace);
						// break;
					}
					if ( $check < $Block_size && $VehicleType=="4W") {
// echo "string";
for ($probableAllot=$Block_start; $probableAllot <=$Block_end ; $probableAllot++) { 
	
			$getallot="SELECT * from parking_allotment WHERE alloted_block='$Block_name'  AND alloted_number='$probableAllot' ORDER by tid DESC ";
			$getallot_query=mysqli_query($conn,$getallot);
			$fetch_allot=mysqli_fetch_array($getallot_query);
			$Parked=$fetch_allot['action'];
			if ($Parked < 1) {
				$AllotedPLace=$Block_name;
				$AllotedNumber=$probableAllot;

				$insert_record="INSERT INTO parking_allotment (tid, user_id, user_type, purpose, vehicle_type, vehicle_number, alloted_block, alloted_number, date, time, action) VALUES (NULL, '$userid', '$UserReservation', '$action', '$VehicleType', '$VehicleNumber', '$AllotedPLace', '$AllotedNumber', '$date', '$time', '$action');";
			$insert_record_query=mysqli_query($conn,$insert_record);
			if ($insert_record_query) {
				echo '<script>alert("Park At '.$AllotedPLace.'-'.$AllotedNumber.'"); window.location="vehicle_qrcode.php"</script>';
			// 	echo '<script>alert("Park At '.$AllotedPLace.'-'.$AllotedNumber.'");"</script>';
			}
			break;

			}
			// echo "-<pre>";
			// 			print_r($fetch_allot);
			// $checkif=$fetch_allot['']
						}
			
			}
						
						}
						// echo $fetch_data;
						// print_r($fetch_data);
						// echo "string";
						// 	for ($i=$Block_start; $i <= $Block_end ; $i++) { 
								

						// 	}
						// $AllotedPLace=$Block_name;
						// return($AllotedPLace);
						// break;
					}

			
	
}

// }

 ?>