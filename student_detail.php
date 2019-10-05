<?php include("conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | Dashboard</title>
    <?php include('tags.php'); ?>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
     <?php include('header.php'); ?>
      <?php include('sidebar.php'); ?>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blank page
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Student Data</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
         
          <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h1 class="title">Student Details</h1>
                                    <!-- <p class="category">Complete profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <div class="row">

                                           <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">User Name</label>
                                                    <input type="text" placeholder="User Name" name="username" required class="form-control" />
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">University Roll No</label>
                                                    <input type="number" placeholder="University Roll No" name="un_roll" required class="form-control" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" placeholder="Enter your Name" name="name" required class="form-control" />
                                                </div>
                                            </div>
                                         
                                                                            
                                         
                                      </div>

                                      <div class="row">
                                          <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Father Name</label>
                                                    <input type="text" placeholder="Father Name" name="f_name" required class="form-control" />
                                                </div>
                                            </div>                                               


                                               <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mother Name</label>
                                                    <input type="text" placeholder="Mother Name" name="m_name" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Class</label>
                                                    <input type="text" placeholder="Class" name="class" required class="form-control" />
                                                </div>
                                            </div>



                                      </div>

                                       <div class="row">

                                        <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Batch</label>
                                                    <input type="number" placeholder="Batch" name="batch" required class="form-control" />
                                                </div>
                                            </div>
                                           

                                             <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Gender</label> <br>
                                                    <label> 
                                                      <input type="radio" name="Gender" class="minimal" checked value="Male"> Male
                                                    </label> 
                                                    <label> 
                                                      <input type="radio" name="Gender" class="minimal" value="Female"> Female
                                                    </label>

                                                     <label> 
                                                      <input type="radio" name="Gender" class="minimal" value="Other"> Other
                                                    </label>

                                                </div>
                                            </div>
                                         
                                        <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date" placeholder="Enter of Date of Birth" name="dob" required class="form-control" />
                                                </div>
                                            </div>                                       
                                         
                                      </div>


                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fist Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Adress</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div> -->
                                      

                                                <div class="row">

                                                   <div class="col-md-4">
                                               <div class="form-group label-floating">
                                                    <label class="control-label">Department</label>
                                                    <select class="form-control" required  name="department" >
            
                                                    <option value="61">Computer Science Engg</option>
                                                    <option value="62">Information Technology</option>
                                                    <option value="63"> Civil Engg</option>
                                                    <option value="64">Auto Mobile Engg</option>
                                                    <option value="65">Electronic and Comm Engg</option>
                                                    <option value="66">Electrical Engg</option>
                                                    <option value="67">Production Engg</option>
                                                     </select>                                          
                                                
                                                    
                                         
                                                </div>                                      
                                        </div>


                                               <div class="col-md-4">
                                               <div class="form-group label-floating">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control" required  name="category" >
            
                                                    <option value="general">General</option>
                                                    <option value="sc">SC</option>
                                                    <option value="obc"> OBC</option>
                                                    <option value="bc">BC</option>
                                                     </select>                                          
                                                
                                                    
                                         
                                                </div>                                      
                                        </div>


                                           <div class="col-md-4">
                                               <div class="form-group label-floating">
                                                    <label class="control-label">Religion</label>
                                                    <select class="form-control" required  name="religion" >
            
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Muslim">Muslim</option>
                                                    <option value="Sikh"> Sikh</option>
                                                    <option value="other">Other</option>
                                                     </select>                                          
                                                
                                                    
                                         
                                                </div>                                      
                                        </div>
                                      
                            
                                            
                                          </div>


                                              <div class="row">


                                                 <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">10th Marks Percentage</label>
                                                   <input type="number" placeholder="Enter your 10th Marks Percentage" name="10th_per" required class="form-control" />
                                                </div>
                                            </div>



                                                <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">12th Marks Percentage</label>
                                                   <input type="number" placeholder="Enter your 12th Marks Percentage" name="12th_per" required class="form-control" />
                                                </div>
                                            </div> 

                                                   <div class="col-md-4">
                                               <div class="form-group label-floating">
                                                    <label class="control-label">Blood Group</label>
                                                    <select class="form-control" required  name="blood_group" >
            
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+"> B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                     </select>                                          
                                                
                                                    
                                         
                                                </div>                                      
                                        </div>
                                            
                                    
                                            
                                            
                                        </div>                       




                                         <div class="row">                                        
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone No</label>
                                                   <input type="number" placeholder="Enter your Number" name="phone" required class="form-control" />
                                                </div>
                                            </div>

                                                  
                                            

                                                <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email ID</label>
                                                   <input type="email" placeholder="Enter your Email ID" name="email" required class="form-control" />
                                                </div>
                                            </div> 


                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                   <input type="text" placeholder="Enter your Address" name="address" required class="form-control" />
                                                </div>
                                            </div>                                             
                                        </div>  </div>

                                         
                                    <div class="row">
                                       <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Image</label>
                                                    <input type='file' onchange="readURL(this);" name='image' required accept="image/x-png,image/gif,image/jpeg" class="form-control" />
                                                </div>
                                            </div> 


                                           

                                          </div>
                                        <button type="submit" class="btn btn-primary pull-right" name="Submit">Submit</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>




        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
      </div><!-- /.content-wrapper -->

       <?php include("footer.php"); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>