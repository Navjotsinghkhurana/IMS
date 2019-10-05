<?php include("../conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Dashboard</title>
    <?php 
include("common_css.php");
     ?>



    <script type="text/javascript">
      
function getlist(){
       
      var Batch = document.getElementById("year").value;
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showall").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "AJAX/getcredentials.php?Batch="+Batch, true);
        xmlhttp.send();
}


 function getexcel()
 {
      var Batch = document.getElementById("year").value;
      window.location="AJAX/getcredentials_excel.php?Batch="+Batch;
       // var xmlhttp = new XMLHttpRequest();
       //  xmlhttp.onreadystatechange = function() {
       //      if (this.readyState == 4 && this.status == 200) {
       //          document.getElementById("showall").innerHTML = this.responseText;
       //      }
       //  };
       //  xmlhttp.open("GET", "AJAX/getcredentials_excel.php?Batch="+Batch, true);
       //  xmlhttp.send();
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
           Subject Allotment
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Enter the details carefully</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">
              
                <form method="post">
                  <div class="row">
<div class="col-md-4">
  
    <h5>Select Branch</h5>
    <select class="select-style Type" name="year" onclick="getlist();" required id="year" onselect="getlist();">
            <?php 

            $GetClass_sql="SELECT DISTINCT batch from student";
            $GetClass_query=mysqli_query($conn,$GetClass_sql);
            while ($GetClass_Fetch=mysqli_fetch_array($GetClass_query)) {
             $Batch=$GetClass_Fetch['batch'];
             
             echo '<option value="'.$Batch.'">'.$Batch.'</option>';

            }

             ?>
            
            </select>
  
  

</div>

    
    <div class="col-md-2">
  
    <!-- <h5>Select Semester</h5>
    <select class="select-style Type" name="sem" required id="sem" onselect="getlist();" onkeydown="getlist();" onclick="getlist();"  >
            
            <option value="1">Semester 1 </option>
            <option value="2">Semester 2 </option>
            <option value="3">Semester 3 </option>
            <option value="4">Semester 4 </option>
            <option value="5">Semester 5 </option>
            <option value="6">Semester 6 </option>
            
            
            </select> -->
            <!-- Select Batch -->
  
  

</div>  
<!-- <div class="col-md-3">
  
    <h5>Student List</h5>
    <div>
       <select class="select-style Type" name="id" id="list" required="">
            
            <option value="">Select the previous fields </option>
            
            
            </select>
            Press Go!
  
    </div>
   
  

</div>   -->


<div class="col-md-4">
  <h5>  </h5>
  <button type="button" name="entbtn" onclick="getexcel();" class="btn btn-success">Get Excel</button>
  
</div>
    
</form>
</div>

<div id="showall">
  
</div>



            </div><!-- /.box-body -->
            <div class="box-footer">
             Enter the details carefully
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

       <?php include("../footer.php"); ?>
    </div><!-- ./wrapper -->

    <?php include("common_jquery.php"); ?>
  </body>
</html>

