<?php include("conecton.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Morris.js Charts</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <?php include('header.php'); ?>
      <?php include('sidebar.php'); ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Morris Charts
            <small>Preview sample</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Charts</a></li>
            <li class="active">Morris</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="callout callout-warning">
            <h4>Warning!</h4>
            <p><b>Morris.js</b> charts are no longer maintained by its author. We would recommend using any of the other charts that come with the template.</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Area Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="revenue-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

               <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Sales Graph</h3>
                  <div class="box-tools pull-right">
                    <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-nav" style="height: 250px;"></div>
                </div><!-- /.box-body -->
                <div class="box-footer no-border">
                  <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC"/>
                      <div class="knob-label">Mail-Orders</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC"/>
                      <div class="knob-label">Online</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC"/>
                      <div class="knob-label">In-Store</div>
                    </div><!-- ./col -->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Donut Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Line Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="line-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Bar Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <?php include("footer.php"); ?>
    </div><!-- ./wrapper -->

    
   <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        "use strict";

        // AREA CHART
        var area = new Morris.Area({
          element: 'revenue-chart',
          resize: true,
          data: [
            {y: '2011 Q1', item1: 2666, item2: 2666},
            {y: '2011 Q2', item1: 2778, item2: 2294},
            {y: '2011 Q3', item1: 4912, item2: 1969},
            {y: '2011 Q4', item1: 3767, item2: 3597},
            {y: '2012 Q1', item1: 6810, item2: 1914},
            {y: '2012 Q2', item1: 5670, item2: 4293},
            {y: '2012 Q3', item1: 4820, item2: 3795},
            {y: '2012 Q4', item1: 15073, item2: 5967},
            {y: '2013 Q1', item1: 10687, item2: 4460},
            {y: '2013 Q2', item1: 8432, item2: 5713}
          ],
          xkey: 'y',
          ykeys: ['item1', 'item2'],
          labels: ['Item 1', 'Item 2'],
          lineColors: ['#a0d0e0', '#3c8dbc'],
          hideHover: 'auto'
        });

        // LINE CHART
        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: [
            {y: '2011 Q1', item1: 2666},
            {y: '2011 Q2', item1: 2778},
            {y: '2011 Q3', item1: 4912},
            {y: '2011 Q4', item1: 3767},
            {y: '2012 Q1', item1: 6810},
            {y: '2012 Q2', item1: 5670},
            {y: '2012 Q3', item1: 4820},
            {y: '2012 Q4', item1: 15073},
            {y: '2013 Q1', item1: 10687},
            {y: '2013 Q2', item1: 8432}
          ],
          xkey: 'y',
          ykeys: ['item1'],
          labels: ['Item 1'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });
        // LINE CHART
        var line_nav = new Morris.Line({
    element: 'line-nav',
    resize: true,
    data: [
    <?php 

      // $month;
      // $year;
      // $id;

      // $get_pur_sql="SELECT * FROM purchase_info where Associate_id='$id' AND  Month='$month' AND year='$year'";
      // $get_pur_query=mysqli_query($conn,$get_pur_sql);
      // $get_pur_num=mysqli_num_rows($get_pur_query);
      // $purchases=0;
      // if ($get_pur_num != 0)
      //  {
        
      // $get_pur_fetch=mysqli_fetch_array($get_pur_query);
      // $pur_num=0;
      // $saal=2002;

      // do {
        
      //   $saal=$saal+1;
      //   $time_lelo=$get_pur_fetch['Time'];
      //   // $date_lelo=$get_pur_fetch['date'];
      //   $pamount=$get_pur_fetch['Total_amount'];
      //   $ppv=$get_pur_fetch['Total_PV'];


      //   echo "{
      //       day: '$pamount',
      //       a: $ppv
      //   }, "; 
        
      // } while ($get_pur_fetch=mysqli_fetch_array($get_pur_query));

      // }
      // else
      // {
      //  echo "{y: '2017 Q1', item1: 0},"; 
      // } 



     ?>
        
        {
            day: 'Tue',
            a: 66
        },
         {
            day: 'Wed',
            a: 86
        }, {
            day: 'Thu',
            a: 151
        }, {
            day: 'Fri',
            a: 115
        }, {
            day: 'Sat',
            a: 93
        }, {
            day: 'Sun',
            a: 38
        }
        ],
        xkey: 'day',
        ykeys: ['a'],
        parseTime: false,
    labels: ['PV'],
    lineColors: ['#efefef'],
    lineWidth: 2,
    hideHover: 'auto',
    gridTextColor: "#fff",
    gridStrokeWidth: 0.4,
    pointSize: 4,
    pointStrokeColors: ["#efefef"],
    gridLineColor: "#efefef",
    gridTextFamily: "Open Sans",
    gridTextSize: 10
  });

        //DONUT CHART
        var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#00a65a"],
          data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
          ],
          hideHover: 'auto'
        });
        //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart',
          resize: true,
          data: [
            {y: '2006', a: 100, b: 90},
            {y: '2007', a: 75, b: 65},
            {y: '2008', a: 50, b: 40},
            {y: '2009', a: 75, b: 65},
            {y: '2010', a: 50, b: 40},
            {y: '2011', a: 75, b: 65},
            {y: '2012', a: 100, b: 90}
          ],
          barColors: ['#00a65a', '#f56954'],
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['CPU', 'DISK'],
          hideHover: 'auto'
        });
      });
    </script>

  </body>
</html>
