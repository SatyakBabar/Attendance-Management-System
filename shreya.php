<!DOCType html><?php session_start();?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shreya</title>
<meta content="width=device-width, initial-scale=1" name="viewport"/>

        <meta content="Project in Taikisha Engineering India Ltd." name="description"/>
        <meta content="Satyak Babar" name="author"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body background="bg2.jpg">
<p id="date"></p>
<script>
document.getElementById("date").innerHTML = Date();
</script>
<div class="container">
<h2 align="center">Shreya Contractor</h2>
<br><br>
  <form action="" method="post" align="center" class="form-horizontal">

  <label class="control-label col-sm-5" ">Painter</label>
  <div class="col-sm-3">
  <input class="form-control" name="painter" placeholder="Enter number" Type="number" value="0">
  </div>
  
  <br><br>
  <label class="control-label col-sm-5" ">Blaster</label>
  <div class="col-sm-3">
  <input class="form-control" name="blaster" placeholder="Enter number" Type="number" value="0">
  </div>
  
  <br><br>

  <label class="control-label col-sm-5" ">Sander</label>
  <div class="col-sm-3">
  <input class="form-control" name="sander" placeholder="Enter number" Type="number" value="0">
  </div>
  <br><br>

  <label class="control-label col-sm-5" ">PT Operator</label>
  <div class="col-sm-3">
  <input class="form-control" name="pto" placeholder="Enter number" Type="number" value="0">
  </div>
  <br><br>

  <label class="control-label col-sm-5" ">Supervisor</label>
  <div class="col-sm-3">
  <input class="form-control" name="supervisor" placeholder="Enter number" Type="number" value="0">
  </div>
  <br><br>

  <label class="control-label col-sm-5" ">Helper</label>
  <div class="col-sm-3">
  <input class="form-control" name="helper" placeholder="Enter number" Type="number" value="0">
  </div>
  <br><br>

  <label class="control-label col-sm-5" ">Security</label>
  <div class="col-sm-3">
  <input class="form-control" name="security" placeholder="Enter number" Type="number" value="0">
  </div>
  <br><br>

  <label class="control-label col-sm-5" ">Mathadi</label>
  <div class="col-sm-3">
  <input class="form-control" name="mathadi" placeholder="Enter number" Type="number" value="0">
  </div>
  <br><br>
  <br><br>


 <center><input Type="submit" value="Submit" name="submit"/></center>


</form>

</div>
<?php
//Complete the command below and remove the comment tag
//$con = mysqli_connect("servername","username","password","databasename");if(isset($_POST['submit'])){
  $p= mysqli_real_escape_string($con, $_POST['painter']);
  $b= mysqli_real_escape_string($con, $_POST['blaster']);
  $s= mysqli_real_escape_string($con, $_POST['sander']);
  $pt= mysqli_real_escape_string($con, $_POST['pto']);
  $su= mysqli_real_escape_string($con, $_POST['supervisor']);
  $he= mysqli_real_escape_string($con, $_POST['helper']);
  $se= mysqli_real_escape_string($con, $_POST['security']);
  $ma= mysqli_real_escape_string($con, $_POST['mathadi']);

  
  $insert_user = "UPDATE `Shreya` SET `Number`='$p' WHERE `ID`=1;";
  $insert_user1 = "UPDATE `Shreya` SET `Number`='$b' WHERE `ID`=2;";
  $insert_user2 = "UPDATE `Shreya` SET `Number`='$s' WHERE `ID`=3;";
  $insert_user3 = "UPDATE `Shreya` SET `Number`='$pt' WHERE `ID`=4;";
  $insert_user4 = "UPDATE `Shreya` SET `Number`='$su' WHERE `ID`=5;";
  $insert_user5 = "UPDATE `Shreya` SET `Number`='$he' WHERE `ID`=6;";
  $insert_user6 = "UPDATE `Shreya` SET `Number`='$se' WHERE `ID`=7;";
  $insert_user7 = "UPDATE `Shreya` SET `Number`='$ma' WHERE `ID`=8;";




  $insert_user8 = "UPDATE `Shreya` SET `Number`=sum(`Number`) where `ID`=9";




  $insert_user11 = "UPDATE `Shreya` SET `Total`=`Number`*`Rate` ";

  mysqli_query($con, $insert_user);
  mysqli_query($con, $insert_user1);
  mysqli_query($con, $insert_user2);
  mysqli_query($con, $insert_user3);
  mysqli_query($con, $insert_user4);
  mysqli_query($con, $insert_user5);
  mysqli_query($con, $insert_user6);
  mysqli_query($con, $insert_user7);
  mysqli_query($con, $insert_user8);

  mysqli_query($con, $insert_user11);
  header('location: final.html'); 
}
?>
</body>
</html>
