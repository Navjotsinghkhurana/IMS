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
      var sem = document.getElementById("sem").value;
      

       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showall").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "AJAX/getsubjects.php?Department=" + Branch+"&sem="+sem, true);
        xmlhttp.send();
}
function enterdata(sub_id){
      var subject_id = sub_id;
      var teacher_id = document.getElementById(subject_id).value;
      

       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              getlist();
                // document.getElementById("showall").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "AJAX/insertdata.php?subject_id=" + subject_id+"&teacher_id="+teacher_id, true);
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
    <select class="select-style Type" name="Department" onclick="getlist();" required id="Branch" onselect="getlist();">
            
            <option value="1">Civil Engineering</option>
            <option value="62"> Computer Engineering</option>
            <option value="2"> Electrical Engineering</option>
             <option value="3"> Electronics and Communication Engineering</option>
            <option value="4"> Mechnical Engineering</option>
             <option value="5"> Automobile Engineering</option>
            </select>
  
  

</div>

    
    <div class="col-md-2">
  
    <h5>Select Semester</h5>
    <select class="select-style Type" name="sem" required id="sem" onselect="getlist();" onkeydown="getlist();" onclick="getlist();">
            
            <option value="1">Semester 1 </option>
            <option value="2">Semester 2 </option>
            <option value="3">Semester 3 </option>
            <option value="4">Semester 4 </option>
            <option value="5">Semester 5 </option>
            <option value="6">Semester 6 </option>
            
            
            </select>
  
  

</div>  
<div class="col-md-3">
  
    <h5>Student List</h5>
    <div>
      <!--  <select class="select-style Type" name="id" id="list" required="">
            
            <option value="">Select the previous fields </option>
            
            
            </select> -->
            Press Go!
  
    </div>
   
  

</div>  


<div class="col-md-4">
  <h5>  </h5>
  <button type="button" name="entbtn" class="btn btn-success">Go</button>
  
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


