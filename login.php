<?php include('conecton.php'); 
// unset cookies
// if (isset($_SERVER['HTTP_COOKIE'])) {
//     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//     foreach($cookies as $cookie) {
//         $parts = explode('=', $cookie);
//         $name = trim($parts[0]);
//         setcookie($name, '', time()-1000);
//         setcookie($name, '', time()-1000, '/');
//     }
// }
?>

<?php 
error_reporting(0);
if (isset($_GET['logout'])) {
	session_destroy();
	session_start();
          unset($_COOKIE['uid']);
          $cookie_name = "uid";
          $cookie_value = 1;
          setcookie($cookie_name, '',time() -3600, "/");


}
if ($_SESSION['login']==true) {
 
  echo '<script>window.location="/college"</script>';
}
 ?>
<?php 
if (isset($_POST['subbtn'])|| isset($_COOKIE['uid']))
 {
  
if (isset($_COOKIE['uid'])) {
echo "Coookie Found";
 $uid=$_COOKIE['uid'];
 $Password=$_COOKIE['Password'];

}
else
{
  $uid=$_POST['id']; 
  $Password=$_POST['Password']; 
}
  

  

      $select="SELECT * from users WHERE username='$uid' and  password='$Password'";
      $res=mysqli_query($conn, $select);
      $existance=mysqli_num_rows($res);
      if ($existance==1) 
      {
         
        $data=mysqli_fetch_array($res);  
      $type=$data['type'];
      $_SESSION["type"]=$type;
      $_SESSION["uid"]=$uid;

          $cookie_name = "uid";
          $cookie_value = $uid;
          setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

           $cookie_name = "Password";
           $cookie_value = $Password;
           setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

          $cookie_name = "type";
          $cookie_value = $type;
          setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

      $registered=$data['registered'];

      if ($registered==1)
       {
        $usercheck_sql="SELECT * from $type WHERE usernames='$uid'";
        $usercheck_query=mysqli_query($conn, $usercheck_sql);
          $usercheck_fetch=mysqli_fetch_array($usercheck_query);

        
          $_SESSION['id']=$id;
          $_SESSION['login']=true;
          $_SESSION['logged_in'] = true;
          
       
          if ($type=="student")
           {
             $_SESSION['student']=true;
             $_SESSION['admin'] = false;
           }

           else
           {
            $_SESSION['teacher']=true;
            }
    
           echo '<script>window.location="/college";</script>';
       }
       else
       {
          echo '<script>alert("Account Not Approved yet");</script>';  
       }
      }


    else
    {
      echo '<script>alert("Incorrect Credentials");</script>';
    }
 
}





 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GNDPC | login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index2.html"><b>User</b> Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to Proceed</p>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Enter Your ID" name="id" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="subbtn">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>


