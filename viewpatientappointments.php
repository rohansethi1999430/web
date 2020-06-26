<html>
<head>
<link rel="stylesheet" href="main.css">
<style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
table{
    /* width: 85%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
	background:none; */
	border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
	transition: 0.5s;
	box-shadow: 3px 3px 0px transparent;
	transition: 0.5s;
	background-color: #ECF4FA
}

th{
	border: 3px solid #ccc;
	background-color: #ECF4FA;
    
	text-align: left;
	
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
	transition: 0.5s;
	box-shadow: 3px 3px 0px transparent;
	transition: 0.5s;
	background-color: #ECF4FA
}
tr,td{
	border: 3px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
	transition: 0.5s;
	box-shadow: 3px 3px 0px transparent;
	transition: 0.5s;
	background-color: #ECF4FA
}
.custab{
	border: 3px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "dbconfig.php"; ?>
<body style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(https://images.unsplash.com/photo-1536064479547-7ee40b74b807?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80)">
<?php session_start(); ?>
<br>
<center>
	<?php
	$username=$_SESSION['username'];
	$sql1 = "Select * from book where username ='".$username."' order by DOV desc";
			$result1=mysqli_query($conn, $sql1);  
			echo "<table>
					<tr>
					<th>Appointment-Date</th>
					<th>Time</th>
					<th>Name</th>
					<th>Clinic</th>
					<th>Doctor</th>
					<th>Status</th>
					<th>Booked-On</th>
					</tr>";
			while($row1 = mysqli_fetch_array($result1))
			{
				$sql2="SELECT * from doctor where did=".$row1['DID'];
				$result2= mysqli_query($conn,$sql2);
				while($row2= mysqli_fetch_array($result2))
				{
					$sql3="SELECT * from clinic where CID=".$row1['CID'];
						$result3= mysqli_query($conn,$sql3);
						while($row3= mysqli_fetch_array($result3))
						{
								echo "<tr>";
								echo "<td>" . $row1['DOV'] . "</td>";
								echo "<td>" . $row1['Time'] . "</td>";
								echo "<td>" . $row1['Fname'] . "</td>";
								echo "<td>" . $row3['name']."-".$row3['town'] . "</td>";
								echo "<td>" . $row2['name'] . "</td>";
								echo "<td>" . $row1['Status'] . "</td>";
								echo "<td>" . $row1['Timestamp'] . "</td>";
								echo "</tr>";
						}
				}
				
			}
	?>
</center>           
    </table>
    </div>
</div>
</body>
</html>