<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>User Login</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
</head>
<?php 
session_start();
include "dbconfig.php"; ?>
<script>
function getTown(val) {
	$.ajax({
	type: "POST",
	url: "get_town.php",
	data:'countryid='+val,
	success: function(data){
		$("#town-list").html(data);
	}
	});
}
function getClinic(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'townid='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
function getDoctorday(val) {
	$.ajax({
	type: "POST",
	url: "getdoctordaybooking.php",
	data:'cid='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}

function getDay(val) {
	var cidval=document.getElementById("clinic-list").value;
	var didval=document.getElementById("doctor-list").value;
	$.ajax({
	type: "POST",
	url: "getDay.php",
	data:'date='+val+'&cidval='+cidval+'&didval='+didval,
	success: function(data){
		$("#datestatus").html(data);
	}
	});
}

</script>
<style>
    .colorgraph {
    height: 5px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }
</style>
<body>
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
         <form action="book.php" method="post">
	
		<label ><b>Name:</b></label><br>
		<input  placeholder="Enter Full name of patient" name="fname" required ><br>
		
		<label><b>Gender</b></label><br>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other<br><br>
	
		<label style="font-size:20px" >City:</label><br>
		<select name="city" id="city-list" class="demoInputBox"  onChange="getTown(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select City</option>
		<?php
		$sql1="SELECT distinct(city) FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["city"]; ?>"><?php echo $rs["city"]; ?></option>
		<?php
		}
		?>
		</select>
        <br>
	
		<label style="font-size:20px" >Town:</label><br>
		<select id="town-list" name="Town" onChange="getClinic(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Town</option>
		</select><br>
		
		<label style="font-size:20px" >Clinic:</label><br>
		<select id="clinic-list" name="Clinic" onChange="getDoctorday(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Clinic</option>
		</select><br>
		
		<label style="font-size:20px" >Doctor:</label><br>
		<select id="doctor-list" name="Doctor" onChange="getDate(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Doctor</option>
		</select><br>
		
		
		<label><b>Date of Visit:</b></label><br>
		<input type="date" name="dov" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required><br><br>
		<div id="datestatus"> </div>
		
		<div class="container">
			<button type="submit" style="position:center" name="submit" value="Submit">Submit</button>
		
<?php

if(isset($_POST['submit']))
{
		
		
		$fname=$_POST['fname'];
		$gender=$_POST['gender'];
		$username=$_SESSION['username'];
		$cid=$_POST['Clinic'];
		$did=$_POST['Doctor'];
		$dov=$_POST['dov'];
		$status="Booking Registered.Wait for the update";
		$timestamp=date('Y-m-d H:i:s');
		$sql = "INSERT INTO book (Username,Fname,Gender,CID,DID,DOV,Timestamp,Status) VALUES ('$username','$fname','$gender','$cid','$did','$dov','$timestamp','$status') ";
		if(!empty($_POST['fname'])&&!empty($_POST['gender'])&&!empty($_SESSION['username'])&&!empty($_POST['Clinic'])&&!empty($_POST['Doctor']) && !empty($_POST['dov']))
		{
			$checkday = strtotime($dov);
			$compareday = date("l", $checkday);
			$flag=0;
			require_once("dbconfig.php");
			$query ="SELECT * FROM doctor_availability WHERE DID = '" .$did. "' AND CID='".$cid."'";
			$results = $conn->query($query);
			while($rs=$results->fetch_assoc())
			{
				if($rs["day"]==$compareday)
				{
					$flag++;
					break;
				}
			}
			if($flag==0)
			{
				echo "<h2>Select another date as Doctor Unavailable on ".$compareday."</h2>";
			}
			else
			{
				if (mysqli_query($conn, $sql)) 
				{
						echo "<h2>Booking successful!! Redirecting to home page....</h2>";
						header( "Refresh:2; url=u1login.php");

				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
		else
		{
			echo "Enter data properly!!!!";
		}
}
?>
	</form>
	</div>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>
<?php

$error='';
if (isset($_POST['login'])) {
if (empty($_POST['uname']) || empty($_POST['psw'])) {
$error = "Username or Password is invalid";
}
else
{
	include 'dbconfig.php';
	$username=$_POST['uname'];
	$password=$_POST['psw'];

	$query = mysqli_query($conn,"select * from patient where password='$password' AND username='$username'");
	$rows = mysqli_fetch_assoc($query);
	$num=mysqli_num_rows($query);
	if ($num == 1) {
		$_SESSION['username']=$rows['username'];
		$_SESSION['user']=$rows['name'];
		header( "Refresh:1; url=u1login.php");
	}
	else
	{
        $error = "Username or Password is invalid";
        
	}
	mysqli_close($conn);
}
}
?>
</body>
</html>
