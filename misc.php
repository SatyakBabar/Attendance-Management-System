<!DOCTYPE html><?php session_start();?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Miscellaneous</title>
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
<h2 align="center">Miscellaneous</h5>
<br><br>


</div>

<div class="container">
  <form action="" method="post" align="center" class="form-horizontal">

  <label class="control-label col-sm-5" ">Data Entry Operators</label>
  <div class="col-sm-3">
  <input class="form-control" name="data" placeholder="Enter number" type="number" value="0">
  </div>
 

  
  <br><br>
  <label class="control-label col-sm-5" ">Pur/IT Assistants</label>
  <div class="col-sm-3">
  <input class="form-control" name="it" placeholder="Enter number" type="number" value="0">
  </div>
 
  
  <br><br>

  <label class="control-label col-sm-5" ">QA Inspector(Dalvi)</label>
  <div class="col-sm-3">
  <input class="form-control" name="qai" placeholder="Enter number" type="number" value="0">
  </div>
  
  <br><br>
  
 
  <label class="control-label col-sm-5" ">QA Operators</label>
  <div class="col-sm-3">
  <input class="form-control" name="qao" placeholder="Enter number" type="number" value="0">
  </div>
 
  <br><br>
  <label class="control-label col-sm-5" ">Laser Operators (1)</label>
  <div class="col-sm-3">
  <input class="form-control" name="lo1" placeholder="Enter number" type="number" value="0">
  </div>
 
<br><br>
  <label class="control-label col-sm-5" ">Laser Operators (2)</label>
  <div class="col-sm-3">
  <input class="form-control" name="lo2" placeholder="Enter number" type="number" value="0">
  </div>
  
<br><br>

  
<br><br>

  <center><input type="submit" value="Submit" name="submit"/></center>

</form>
</div>

<?php

//Complete the command below and remove the comment tag
//$con = mysqli_connect("servername","username","password","databasename");

if(isset($_POST['submit'])){


  $p= mysqli_real_escape_string($con, $_POST['data']);
  $b= mysqli_real_escape_string($con, $_POST['it']);
  $s= mysqli_real_escape_string($con, $_POST['qai']);
  $pt= mysqli_real_escape_string($con, $_POST['qao']);
  $su= mysqli_real_escape_string($con, $_POST['lo1']);
  $he= mysqli_real_escape_string($con, $_POST['lo2']);

  
  $insert_user = "UPDATE `Miscellaneous` SET `Number`='$p' WHERE `ID`=1;";
  $insert_user1 = "UPDATE `Miscellaneous` SET `Number`='$b' WHERE `ID`=2;";
  $insert_user2 = "UPDATE `Miscellaneous` SET `Number`='$s' WHERE `ID`=3;";
  $insert_user3 = "UPDATE `Miscellaneous` SET `Number`='$pt' WHERE `ID`=4;";
  $insert_user4 = "UPDATE `Miscellaneous` SET `Number`='$su' WHERE `ID`=5;";
  $insert_user5 = "UPDATE `Miscellaneous` SET `Number`='$he' WHERE `ID`=6;";
  $insert_user11 = "UPDATE `Miscellaneous` SET `Total`=`Number`*`Rate` ";

  mysqli_query($con, $insert_user);
  mysqli_query($con, $insert_user1);
  mysqli_query($con, $insert_user2);
  mysqli_query($con, $insert_user3);
  mysqli_query($con, $insert_user4);
  mysqli_query($con, $insert_user5);

 
  mysqli_query($con, $insert_user11);
  echo "<script type='text/javascript'> document.location = 'final.html'; </script>";
  
}
?>


</body>
</html>
