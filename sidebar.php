 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $_SESSION["Image"]; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p> <?php echo $_SESSION["Name"]; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="http://localhost/IMS/Dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
            <!-- Attendance Tree -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Attendance</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <?php
                   // if($_SESSION["type"]=="teacher")
                   // {
                   //  echo '<li><a href="attendance.php"><i class="fa fa-circle-o"></i> Enter Attendance</a></li>';
                   //  }
                    
                        ?>
              <ul class="treeview-menu">
                <li><a href="http://localhost/IMS/Dashboard/attendance.php"><i class="fa fa-circle-o"></i> Enter Attendance</a></li>
                <li><a href="http://localhost/IMS/Dashboard/pages/charts/flot.html"><i class="fa fa-circle-o"></i> View Time Table</a></li>
                <li><a href="http://localhost/IMS/Dashboard/Attendance/attgraph.php"><i class="fa fa-circle-o"></i> View Attendance History</a></li>
              </ul>
            </li>
             <!-- Discussion Tree -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Articles</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              
             <li><a href="http://localhost/IMS/Dashboard/composearticle.php"><i class="fa fa-circle-o text-info"></i>Compose Article</a></li>
             <li><a href="http://localhost/IMS/Dashboard/Articles.php"><i class="fa fa-circle-o text-info"></i>Article</a></li>
              </ul>
            </li>

 <!-- Teacher Tools -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Teacher Tools</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              
             <li><a href="http://localhost/IMS/Dashboard/Teacher/statistics_1.php"><i class="fa fa-circle-o text-info"></i>Enter Data(Internal)</a></li>
            <!--  <li><a href="http://localhost/IMS/Dashboard/Articles.php"><i class="fa fa-circle-o text-info"></i>Article</a></li> -->
              </ul>
            </li>

            <!-- Teacher Tools -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Parking</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              
             <li><a href="http://localhost/IMS/Dashboard/addparkingarea.php"><i class="fa fa-circle-o text-info"></i>Add Parking Area</a></li>
             <li><a href="http://localhost/IMS/Dashboard/vehicle_records.php"><i class="fa fa-circle-o text-info"></i>Vehical Records</a></li>
             <li><a href="http://localhost/IMS/Dashboard/view_vehicle_records.php"><i class="fa fa-circle-o text-info"></i> View Vehical Records</a></li>
             <li><a href="http://localhost/IMS/Dashboard/vehicle_qrcode.php"><i class="fa fa-circle-o text-info"></i> Scan Entery Vehicle</a></li>
            <!--  <li><a href="http://localhost/IMS/Dashboard/Articles.php"><i class="fa fa-circle-o text-info"></i>Article</a></li> -->
              </ul>
            </li>






                <li><a href="http://localhost/IMS/Dashboard/view_student_records.php"><i class="fa fa-circle-o"></i>Student Records Detail</a></li>
                <li><a href="http://localhost/IMS/Dashboard/chatroom.php"><i class="fa fa-circle-o"></i>Chat Room</a></li>
                <li><a href="http://localhost/IMS/Dashboard/comparison.php"><i class="fa fa-circle-o"></i>Comparison Chart</a></li>
                <li><a href="http://localhost/IMS/Dashboard/mediacenter.php"><i class="fa fa-circle-o"></i>Media Center</a></li>
                <li><a href="http://localhost/IMS/Dashboard/livelecture.php"><i class="fa fa-circle-o"></i>Live Lecture</a></li>
                <!-- <li><a href="forcomparison.php"><i class="fa fa-circle-o"></i>Comparison</a></li> -->
                <li><a href="http://localhost/IMS/Dashboard/library.php"><i class="fa fa-circle-o"></i>Library</a></li>
                <li><a href="http://localhost/IMS/Dashboard/libraryhistory.php"><i class="fa fa-circle-o"></i>Library History</a></li>
                <li><a href="http://localhost/IMS/Dashboard/issuebook.php"><i class="fa fa-circle-o"></i>Issue Book</a></li>
                <li><a href="http://localhost/IMS/Dashboard/issuehistory.php"><i class="fa fa-circle-o"></i>Book Issue History</a></li>
                <li><a href="http://localhost/IMS/Dashboard/myid.php"><i class="fa fa-circle-o"></i>My ID</a></li>
                <li><a href="http://localhost/IMS/Dashboard/getprintatt.php"><i class="fa fa-circle-o"></i>Print Attendace</a></li>
                <li><a href="http://localhost/IMS/Dashboard/edit.php"><i class="fa fa-circle-o text-info"></i>Compose Article</a></li>
                <li><a href="http://localhost/IMS/Dashboard/Articles.php"><i class="fa fa-circle-o text-info"></i>Article</a></li>

<?php 
if ($_SESSION['user_level']>=21) {
 echo ' <!-- Clerk Tree -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Clerk Tools</span>
                <i class="fa fa-angle-left pull-right"> </i>
              </a>
              <ul class="treeview-menu">

              <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/enterrecords_statistics_1.php">
                <i class="fa fa-user"></i> <span>Upload Records (CSV)</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
            
             <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/adduser.php">
                <i class="fa fa-user"></i> <span>Add User</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
             <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/getprovisional.php">
                <i class="fa fa-calendar"></i> <span>Print Certificates</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/SubjectAllotment.php">
                <i class="fa fa-calendar"></i> <span>Subject Allotment</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/timetable.php">
                <i class="fa fa-calendar"></i> <span>Time Table</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/addstudent_excel.php">
                <i class="fa fa-calendar"></i> <span>Add Student Excel/CSV</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/addstudent.php">
                <i class="fa fa-calendar"></i> <span>Add Student</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/getcredentials.php">
                <i class="fa fa-book"></i> <span>Get Credentials</span>
                <small class="label pull-right bg-red">1</small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/customlist.php">
                <i class="fa fa-book"></i> <span>Get Credentials</span>
                <small class="label pull-right bg-green">11</small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/Clerk/editstudent.php">
                <i class="fa fa-book"></i> <span>Student details</span>
                <small class="label pull-right bg-green">all</small>
              </a>
            </li>
              </ul>
            </li>';
}


 ?>


                <!-- <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i>News</a></li> -->
            <!-- Article Writing -->
           <!--  <li><a href="Articles.php"><i class="fa fa-circle-o text-info"></i>Article</a></li>
            <li><a href="composearticle.php"><i class="fa fa-circle-o text-info"></i>Compose Article</a></li> -->
            <!-- End Article Writing -->
            <!-- Department News -->
             <!-- <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Department News</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li> -->
             
            <li>
              <a href="http://localhost/IMS/Dashboard/news1.php">
                <i class="fa fa-newspaper-o"></i> <span>News</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/news2.php">
                <i class="fa fa-newspaper-o"></i> <span> Tech News</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>
            <li>
              <a href="http://localhost/IMS/Dashboard/news3.php">
                <i class="fa fa-newspaper-o"></i> <span> Business News</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>
            <!-- <li>
              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li> -->
           
             <li>
              <a href="http://localhost/IMS/Dashboard/contactus.php">
                <i class="fa fa-map-marker"></i> <span>Locate Us</span>
                <small class="label pull-right bg-red"></small>
              </a>
            </li>
            <!-- <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li> -->
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> Documentation</a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
          </ul> -->
        </section>
        <!-- /.sidebar -->
      </aside>