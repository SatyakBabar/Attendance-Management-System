<?php
$db_host = ''; // Enter hostname
$db_user = ''; // Enter Username
$db_pass = ''; // Enter Password
$db_name = ''; // Enter Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
	$insert_user11 = "UPDATE `Report` SET `Number`=((SELECT SUM(`Number`) FROM KeeShop1) + (SELECT `Number` FROM Meghraj WHERE `ID`=1)+(SELECT `Number` FROM Meghraj WHERE `ID`=2)+(SELECT `Number` FROM Meghraj WHERE `ID`=3)) WHERE `ID`=1;";
	mysqli_query($conn, $insert_user11);
	$insert_user12 = "UPDATE `Report` SET `Cost`=((SELECT SUM(`Total`) FROM KeeShop1) + (SELECT `Total` FROM Meghraj WHERE `ID`=1)+(SELECT `Total` FROM Meghraj WHERE `ID`=2)+(SELECT `Total` FROM Meghraj WHERE `ID`=3)) WHERE `ID`=1;";
 	 mysqli_query($conn, $insert_user12);


 	 $insert_user21 = "UPDATE `Report` SET `Number`=( (SELECT `Number` FROM Meghraj WHERE `ID`=4)+(SELECT `Number` FROM Meghraj WHERE `ID`=5)+(SELECT `Number` FROM Meghraj WHERE `ID`=6)+(SELECT `Number` FROM Meghraj WHERE `ID`=28)+(SELECT `Number` FROM Meghraj WHERE `ID`=29)+(SELECT `Number` FROM Meghraj WHERE `ID`=30)+(SELECT `Number` FROM Miscellaneous WHERE `ID`=5)+(SELECT `Number` FROM Miscellaneous WHERE `ID`=6)) WHERE `ID`=2;";
	mysqli_query($conn, $insert_user21);
	$insert_user22 = "UPDATE `Report` SET `Cost`=( (SELECT `Total` FROM Meghraj WHERE `ID`=4)+(SELECT `Total` FROM Meghraj WHERE `ID`=5)+(SELECT `Total` FROM Meghraj WHERE `ID`=6)+(SELECT `Total` FROM Meghraj WHERE `ID`=28)+(SELECT `Total` FROM Meghraj WHERE `ID`=29)+(SELECT `Total` FROM Meghraj WHERE `ID`=30)+(SELECT `Total` FROM Miscellaneous WHERE `ID`=5)+(SELECT `Total` FROM Miscellaneous WHERE `ID`=6)) WHERE `ID`=2;";
 	 mysqli_query($conn, $insert_user22);

 	 $insert_user31 = "UPDATE `Report` SET `Number`=((SELECT SUM(`Number`) FROM KEE) + (SELECT SUM(`Number`) FROM Samiksha)+(SELECT SUM(`Number`) FROM Synergy)) WHERE `ID`=3;";
	mysqli_query($conn, $insert_user31);
	$insert_user32 = "UPDATE `Report` SET `Cost`=((SELECT SUM(`Total`) FROM KEE) + (SELECT SUM(`Total`) FROM Samiksha)+(SELECT SUM(`Total`) FROM Synergy)) WHERE `ID`=3;";
	mysqli_query($conn, $insert_user32);


	$insert_user41 = "UPDATE `Report` SET `Number`=( (SELECT `Number` FROM Meghraj WHERE `ID`=7)+(SELECT `Number` FROM Meghraj WHERE `ID`=8)+(SELECT `Number` FROM Meghraj WHERE `ID`=9)+(SELECT `Number` FROM Meghraj WHERE `ID`=10)+(SELECT `Number` FROM Meghraj WHERE `ID`=11)+(SELECT `Number` FROM Meghraj WHERE `ID`=12)+(SELECT `Number` FROM Meghraj WHERE `ID`=13)+(SELECT `Number` FROM Meghraj WHERE `ID`=14)+(SELECT `Number` FROM Meghraj WHERE `ID`=15)+(SELECT `Number` FROM Meghraj WHERE `ID`=16)+(SELECT `Number` FROM Meghraj WHERE `ID`=17)+(SELECT `Number` FROM Meghraj WHERE `ID`=18)+(SELECT `Number` FROM Meghraj WHERE `ID`=19)+(SELECT `Number` FROM Meghraj WHERE `ID`=20)+(SELECT `Number` FROM Meghraj WHERE `ID`=21)+(SELECT `Number` FROM Meghraj WHERE `ID`=22)+(SELECT `Number` FROM Meghraj WHERE `ID`=23)+(SELECT `Number` FROM Meghraj WHERE `ID`=24)+(SELECT `Number` FROM Meghraj WHERE `ID`=25)+(SELECT `Number` FROM Meghraj WHERE `ID`=26)+(SELECT `Number` FROM Meghraj WHERE `ID`=27)+(SELECT `Number` FROM Meghraj WHERE `ID`=47)+(SELECT `Number` FROM Meghraj WHERE `ID`=48)+(SELECT `Number` FROM Meghraj WHERE `ID`=49)+(SELECT `Number` FROM Meghraj WHERE `ID`=50)+(SELECT `Number` FROM Meghraj WHERE `ID`=51)+(SELECT `Number` FROM Meghraj WHERE `ID`=52)+(SELECT `Number` FROM Meghraj WHERE `ID`=53)+(SELECT `Number` FROM Meghraj WHERE `ID`=54)+(SELECT `Number` FROM Meghraj WHERE `ID`=55)+(SELECT `Number` FROM Shreya WHERE `ID`=7)+(SELECT `Number` FROM Miscellaneous WHERE `ID`=1)+(SELECT `Number` FROM Miscellaneous WHERE `ID`=2)+(SELECT `Number` FROM Miscellaneous WHERE `ID`=3)+(SELECT `Number` FROM Miscellaneous WHERE `ID`=4)) WHERE `ID`=4;";
	mysqli_query($conn, $insert_user41);
	$insert_user42 ="UPDATE `Report` SET `Cost`=( (SELECT `Total` FROM Meghraj WHERE `ID`=7)+(SELECT `Total` FROM Meghraj WHERE `ID`=8)+(SELECT `Total` FROM Meghraj WHERE `ID`=9)+(SELECT `Total` FROM Meghraj WHERE `ID`=10)+(SELECT `Total` FROM Meghraj WHERE `ID`=11)+(SELECT `Total` FROM Meghraj WHERE `ID`=12)+(SELECT `Total` FROM Meghraj WHERE `ID`=13)+(SELECT `Total` FROM Meghraj WHERE `ID`=14)+(SELECT `Total` FROM Meghraj WHERE `ID`=15)+(SELECT `Total` FROM Meghraj WHERE `ID`=16)+(SELECT `Total` FROM Meghraj WHERE `ID`=17)+(SELECT `Total` FROM Meghraj WHERE `ID`=18)+(SELECT `Total` FROM Meghraj WHERE `ID`=19)+(SELECT `Total` FROM Meghraj WHERE `ID`=20)+(SELECT `Total` FROM Meghraj WHERE `ID`=21)+(SELECT `Total` FROM Meghraj WHERE `ID`=22)+(SELECT `Total` FROM Meghraj WHERE `ID`=23)+(SELECT `Total` FROM Meghraj WHERE `ID`=24)+(SELECT `Total` FROM Meghraj WHERE `ID`=25)+(SELECT `Total` FROM Meghraj WHERE `ID`=26)+(SELECT `Total` FROM Meghraj WHERE `ID`=27)+(SELECT `Total` FROM Meghraj WHERE `ID`=47)+(SELECT `Total` FROM Meghraj WHERE `ID`=48)+(SELECT `Total` FROM Meghraj WHERE `ID`=49)+(SELECT `Total` FROM Meghraj WHERE `ID`=50)+(SELECT `Total` FROM Meghraj WHERE `ID`=51)+(SELECT `Total` FROM Meghraj WHERE `ID`=52)+(SELECT `Total` FROM Meghraj WHERE `ID`=53)+(SELECT `Total` FROM Meghraj WHERE `ID`=54)+(SELECT `Total` FROM Meghraj WHERE `ID`=55)+(SELECT `Total` FROM Shreya WHERE `ID`=7)+(SELECT `Total` FROM Miscellaneous WHERE `ID`=1)+(SELECT `Total` FROM Miscellaneous WHERE `ID`=2)+(SELECT `Total` FROM Miscellaneous WHERE `ID`=3)+(SELECT `Total` FROM Miscellaneous WHERE `ID`=4)) WHERE `ID`=4;";
 	 mysqli_query($conn, $insert_user42);




 	 $insert_user51 = "UPDATE `Report` SET `Number`=( (SELECT `Number` FROM Shreya WHERE `ID`=1)+(SELECT `Number` FROM Shreya WHERE `ID`=2)+(SELECT `Number` FROM Shreya WHERE `ID`=3)+(SELECT `Number` FROM Shreya WHERE `ID`=4)+(SELECT `Number` FROM Shreya WHERE `ID`=5)+(SELECT `Number` FROM Shreya WHERE `ID`=6)) WHERE `ID`=5;";
 	 mysqli_query($conn, $insert_user51);
 	 $insert_user52 = "UPDATE `Report` SET `Cost`=( (SELECT `Total` FROM Shreya WHERE `ID`=1)+(SELECT `Total` FROM Shreya WHERE `ID`=2)+(SELECT `Total` FROM Shreya WHERE `ID`=3)+(SELECT `Total` FROM Shreya WHERE `ID`=4)+(SELECT `Total` FROM Shreya WHERE `ID`=5)+(SELECT `Total` FROM Shreya WHERE `ID`=6)) WHERE `ID`=5;";
 	 mysqli_query($conn, $insert_user52);

 	 $insert_user61 = "UPDATE `Report` SET `Number`=(SELECT `Number` FROM Shreya WHERE `ID`=8) WHERE `ID`=6;";
 	 mysqli_query($conn, $insert_user61);
 	 $insert_user72 = "UPDATE `Report` SET `Cost`= (SELECT `Total` FROM Shreya WHERE `ID`=8) WHERE `ID`=6;";
 	 mysqli_query($conn, $insert_user62);



$insert_user111 = "INSERT INTO `Report` (`ID`, `Department`, `Number`, `Cost`) VALUES (NULL, 'TOTAL', (SELECT SUM(`Number`) FROM Report), NULL) ";
   mysqli_query($conn, $insert_user111);

 
$sql = 'SELECT * 
    FROM Report';
    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));

}
?>
<html>
<script type="text/javascript">
footer{
    position:fixed;
    height:50px;
    background-color:red;
    bottom:0px;
    left:0px;
    right:0px;
    margin-bottom:0px;
}
</script>
<head>
  <title>View</title>
  <style type="text/css">
    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>
<body background="bg2.jpg">
  <h1>Report</h1>
  <div>
  <table class="data-table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Department</th>
        <th>Number</th>
        <th>Cost</th>
      </tr>
    </thead>
    <tbody>
    </div>
    
<div>
    <?php
    $no   = 1;
    $total  = 0;
    while ($row = mysqli_fetch_array($query))
    {
      
      echo '<tr>
          <td>'.$row['ID'].'</td>
          <td>'.$row['Department'].'</td>
          <td>'.$row['Number'].'</td>
          <td>'.$row['Cost'].'</td>
        </tr>';
      
    }?>
</div>

<script>
function myFunction() {
    window.print();
}
</script>
<footer>
    <button class="btn btn-info right-block" onclick="myFunction()">Print Report</button>
</footer>
    </tbody>
  </table>
</body>
</html>