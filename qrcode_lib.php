<?php 
$SERIALNO=$_GET['SERIALNO'];
if (isset($_GET['p'])) {
$SERIALNO=$SERIALNO."&p=r";
}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>QR Code Scanner</title>
    <script type="text/javascript" src="instascan.min.js"></script>
  </head>
  <body>
  	<center><h1><b><i><a href="issuebook.php">Go Back</a></i></b></h1></center>
    <center><video id="preview" style="width: 80%;height: 700px;"></video></center>
    <br>
    <center>Scanning QR Code</center>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
      	var SERIALNO="<?php echo $SERIALNO ?>";
      	window.location="library.php?userid="+content+"&SERIALNO="+SERIALNO;


        console.log(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
  </body>
</html>