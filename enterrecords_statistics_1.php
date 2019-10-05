<?php include("../conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Dashboard</title>
    <?php 
include("common_css.php");
     ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
    function edValueKeyPress()
    {
        var edValue = document.getElementById("edValue");
        var s = edValue.value;

       
        

        // var val = Math.floor(1000 + Math.random() * 9000);
        // console.log(val);
        var seq = (Math.floor(Math.random() * 10000) + 10000).toString().substring(2);
        var tgen=s+seq;
        document.getElementById("tcode").value = tgen;
       
        // var lblValue = document.getElementById("lblValue");
        // lblValue.innerText = "The text box contains: "+s;

        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
    }
</script> 
<script>
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script> 
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
     <?php include('../header.php'); ?>
      <?php include('../sidebar.php'); ?>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Student
            <small>Excel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Add User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
             <center><h3 class="box-title">Add Student</h3></center>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">
             







<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h1 class="title">Add User</h1>
                                    <!-- <p class="category">Complete profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Upload File</label>
                                                    <input type="File" placeholder="Phone No" name="file" required class="form-control" accept=".csv" >
                                                </div>
                                            </div>
                                        <button type="submit" class="btn btn-primary pull-right" name="import">Add User</button>
                                        <div class="clearfix"></div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <!-- <img class="img" id="blah" src="http://placehold.it/350" alt="your image" width="350" height="350" /> -->
                                    </a>
                                </div>
                                <!-- <div class="content">
                                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="card-content">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <center>Enter the details carefully</center>
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

       <?php include("../footer.php"); ?>
    </div><!-- ./wrapper -->

   <?php include("common_jquery.php"); ?>
  </body>
</html>
<?php


if (isset($_POST["import"])) {

    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {

    	 $imageNameNew=uniqid('', true). ".csv";
 		 $imageDestination='Profile_Photos/'.$imageNameNew;
  			move_uploaded_file($imageTmpName,$imageDestination);
        
        $file = fopen($fileName, "r");
        $header=fgetcsv($file, 10000, ",");
        $head_count=count($header);
        for ($i=0; $i < $head_count ; $i++) { 
        	$head_fields=$header[$i];
        	echo $head_fields;
        	echo "<br>";
        }
        $file = fopen($fileName, "r");
        	$c=0;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        	$c=$c+1;
        	if ($c<=7) {
        		continue;
        	}
        	else{
        	echo "<pre>";
        	print_r(fgetcsv($file, 10000, ","));
        	echo "</pre>";
       	    $total_head=count($column);
       	    echo $total_head;
       	}
        	// echo $column[1]$column[2]', '$column[3]', '$column[4];
            
     // echo '<script>alert("Done"); window.location="../"</script>';
    }
}
}
?>