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
      var Branch = document.getElementById("Branch").value;
      var Batch = document.getElementById("Batch").value;
      

       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("list").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "showstlist.php?branch=" + Branch+"&batch="+Batch, true);
        xmlhttp.send();
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
           Provisional Certificate
           
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
              
                <form method="get" action="printprovisional.php">
                  <div class="row">
<div class="col-md-4">
  
    <h5>Select Branch</h5>
    <select class="select-style Type" name="Department" onclick="getlist();" required id="Branch" onselect="getlist();">
            
            <option value="civil">Civil Engineering</option>
            <option value="Comp"> Computer Engineering</option>
            <option value="elec"> Electrical Engineering</option>
             <option value="ece"> Electronics and Communication Engineering</option>
            <option value="Mech"> Mechnical Engineering</option>
             <option value="Auto"> Automobile Engineering</option>
            </select>
  
  

</div>

    
    <div class="col-md-2">
  
    <h5>Select Batch</h5>
    <select class="select-style Type" name="Batch" required id="Batch" onselect="getlist();" onkeydown="getlist();" onclick="getlist();">
            
            <option value="2015">2015 </option>
            <option value="2016">2016 </option>
            <option value="2017">2017 </option>
            
            </select>
  
  

</div>  
<div class="col-md-3">
  
    <h5>Student List</h5>
    <div>
       <select class="select-style Type" name="id" id="list" required="">
            
            <option value="">Select the previous fields </option>
            
            
            </select>
  
    </div>
   
  

</div>  


<div class="col-md-4">
  <h5>  </h5>
  <button type="submit" name="entbtn" class="btn btn-success">Get Provisional</button>
  
</div>
    
</form>
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