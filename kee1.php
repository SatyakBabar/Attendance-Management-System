<!DOCTYPE html><?php session_start();?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KEE SHOP 1</title>
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
<h2 align="center">KEE Shop No.1 Contractor</h2>
<br><br>
  <form action="" method="post" align="center" class="form-horizontal">

  <label class="control-label col-sm-5" ">Supervisor A:</label>
  <div class="col-sm-3">
  <input class="form-control" name="suaa" placeholder="Enter number" type="number" value="0">
  </div>
 

  
  <br><br>
  <label class="control-label col-sm-5" ">Fitter A</label>
  <div class="col-sm-3">
  <input class="form-control" name="fiaa" placeholder="Enter number" type="number" value="0">
  </div>
 
  
  <br><br>

  <label class="control-label col-sm-5" ">Fitter B</label>
  <div class="col-sm-3">
  <input class="form-control" name="fiba" placeholder="Enter number" type="number" value="0">
  </div>
  
  <br><br>
  
 
  <label class="control-label col-sm-5" ">Flattner:</label>
  <div class="col-sm-3">
  <input class="form-control" name="flaa" placeholder="Enter number" type="number" value="0">
  </div>
 
  <br><br>
  <label class="control-label col-sm-5" ">Welder A:</label>
  <div class="col-sm-3">
  <input class="form-control" name="weaa" placeholder="Enter number" type="number" value="0">
  </div>
 
<br><br>
  <label class="control-label col-sm-5" ">Welder B:</label>
  <div class="col-sm-3">
  <input class="form-control" name="weba" placeholder="Enter number" type="number" value="0">
  </div>
  
<br><br>

  <label class="control-label col-sm-5" ">Welder C:</label>
  <div class="col-sm-3">
  <input class="form-control" name="weca" placeholder="Enter number" type="number" value="0">
  </div>
  
<br><br>
  <label class="control-label col-sm-5" ">Org Welder A:</label>
  <div class="col-sm-3">
  <input class="form-control" name="owaa" placeholder="Enter number" type="number" value="0">
  </div>
  
<br><br>
  <label class="control-label col-sm-5" ">Org Welder B:</label>
  <div class="col-sm-3">
  <input class="form-control" name="owba" placeholder="Enter number" type="number" value="0">
  </div>
 
<br><br>
  <label class="control-label col-sm-5" ">Grinder B:</label>
  <div class="col-sm-3">
  <input class="form-control" name="grba" placeholder="Enter number" type="number" value="0">
  </div>
  
<br><br>
  <label class="control-label col-sm-5" ">Grinder C:</label>
  <div class="col-sm-3">
  <input class="form-control" name="grca" placeholder="Enter number" type="number" value="0">
  </div>

<br><br>
  <label class="control-label col-sm-5" ">Cutter B:</label>
  <div class="col-sm-3">
  <input class="form-control" name="cuba" placeholder="Enter number" type="number" value="0">
  </div>
 
  <br><br>
<label class="control-label col-sm-5" ">Cutter C:</label>
  <div class="col-sm-3">
  <input class="form-control" name="cuca" placeholder="Enter number" type="number" value="0">
  </div>

<br><br>
  <label class="control-label col-sm-5" ">Fabricator A:</label>
  <div class="col-sm-3">
  <input class="form-control" name="faaa" placeholder="Enter number" type="number" value="0">
  </div>
  
  <br><br>
  <label class="control-label col-sm-5" ">Fabricator B:</label>
  <div class="col-sm-3">
  <input class="form-control" name="faba" placeholder="Enter number" type="number" value="0">
  </div>

  <br><br>
  <label class="control-label col-sm-5" ">Helper D:</label>
  <div class="col-sm-3">
  <input class="form-control" name="heda" placeholder="Enter number" type="number" value="0">
  </div>

<br><br>

  <center><input type="submit" value="Submit" name="submit"/></center>

</form>
</div>
<?php
//Complete the command below and remove the comment tag
//$con = mysqli_connect("servername","username","password","databasename");if(isset($_POST['submit']))
{
 

  $suaa= mysqli_real_escape_string($con, $_POST['suaa']);
  $fiaa= mysqli_real_escape_string($con, $_POST['fiaa']);
  $fiba= mysqli_real_escape_string($con, $_POST['fiba']);
  $flaa= mysqli_real_escape_string($con, $_POST['flaa']);
  $weaa= mysqli_real_escape_string($con, $_POST['weaa']);
  $weba= mysqli_real_escape_string($con, $_POST['weba']);
  $weca= mysqli_real_escape_string($con, $_POST['weca']);
  $owaa= mysqli_real_escape_string($con, $_POST['owaa']);
  $owba= mysqli_real_escape_string($con, $_POST['owba']);
  $grba= mysqli_real_escape_string($con, $_POST['grca']);
  $grca= mysqli_real_escape_string($con, $_POST['grba']);
  $cuba= mysqli_real_escape_string($con, $_POST['cuba']);
  $cuca= mysqli_real_escape_string($con, $_POST['cuca']);
  $faaa= mysqli_real_escape_string($con, $_POST['faaa']);
  $faba= mysqli_real_escape_string($con, $_POST['faba']);
  $heda= mysqli_real_escape_string($con, $_POST['heda']);
  
  $insert_user = "UPDATE `KeeShop1` SET `Number`='$suaa' WHERE `ID`=1;";
  $insert_user1 = "UPDATE `KeeShop1` SET `Number`='$fiaa' WHERE `ID`=2;";
  $insert_user2 = "UPDATE `KeeShop1` SET `Number`='$fiba' WHERE `ID`=3;";
  $insert_user3 = "UPDATE `KeeShop1` SET `Number`='$flaa' WHERE `ID`=4;";
  $insert_user4 = "UPDATE `KeeShop1` SET `Number`='$weaa' WHERE `ID`=5;";
  $insert_user5 = "UPDATE `KeeShop1` SET `Number`='$weba' WHERE `ID`=6;";
  $insert_user6= "UPDATE `KeeShop1` SET `Number`='$weca' WHERE `ID`=7;";
  $insert_user7 = "UPDATE `KeeShop1` SET `Number`='$owaa' WHERE `ID`=8;";
  $insert_user8 = "UPDATE `KeeShop1` SET `Number`='$owba' WHERE `ID`=9;";
  $insert_user9 = "UPDATE `KeeShop1` SET `Number`='$grba' WHERE `ID`=10;";
  $insert_user10 = "UPDATE `KeeShop1` SET `Number`='$grca' WHERE `ID`=11;";
  $insert_user11= "UPDATE `KeeShop1` SET `Number`='$cuba' WHERE `ID`=12;";
  $insert_user12 = "UPDATE `KeeShop1` SET `Number`='$cuca' WHERE `ID`=13;";
  $insert_user13 = "UPDATE `KeeShop1` SET `Number`='$faaa' WHERE `ID`=14;";
  $insert_user14 = "UPDATE `KeeShop1` SET `Number`='$faba' WHERE `ID`=15;";
  $insert_user15 = "UPDATE `KeeShop1` SET `Number`='$heda' WHERE `ID`=16;";
  $insert_usera = "UPDATE `KeeShop1` SET `Total`=`Number`*`Rate` ";

  mysqli_query($con, $insert_user);
  mysqli_query($con, $insert_user1);
  mysqli_query($con, $insert_user2);
  mysqli_query($con, $insert_user3);
  mysqli_query($con, $insert_user4);
  mysqli_query($con, $insert_user5);
  mysqli_query($con, $insert_user6);
  mysqli_query($con, $insert_user7);
  mysqli_query($con, $insert_user8);
  mysqli_query($con, $insert_user9);
  mysqli_query($con, $insert_user10);
  mysqli_query($con, $insert_user11);
  mysqli_query($con, $insert_user12);
  mysqli_query($con, $insert_user13);
  mysqli_query($con, $insert_user14);
  mysqli_query($con, $insert_user15);
    mysqli_query($con, $insert_usera);

  echo "<script type='text/javascript'> document.location = 'final.html'; </script>";
}
?>
</body>
</html>
