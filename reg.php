<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Appointment Details</title>
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
<body>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	 -->
<div class="container-fluid">
<form action="reg.php" method="post">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Appointment Details:-</h3>
				<div class="form-group col-lg-12" >
                <label><b>Name:</b></label><br>
	        	<input type="text" class="form-control" placeholder="Enter Full name of patient" name="fname" required><br>
				</div>

				<div class="form-group col-lg-12" >
					<label><b>Gender</b></label><br>
                    <input type="radio" name="gender" value="female">  Female
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="other"> Other<br><br>
				</div>
				<div class="form-group col-lg-12" >
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
				</div>
				<div class="form-group col-lg-12" >
                <label style="font-size:20px" >Town:</label><br>
                <select id="town-list" name="Town" onChange="getClinic(this.value);" style="width:100%;height:35px;border-radius:9px">
                <option value="">Select Town</option>
                </select>
				</div>

				<div class="form-group col-lg-12" >
                <label style="font-size:20px" >Clinic:</label><br>
                <select id="clinic-list" name="Clinic" onChange="getDoctorday(this.value);" style="width:100%;height:35px;border-radius:9px">
                <option value="">Select Clinic</option>
		        </select>
				</div>
				
				<div class="form-group col-lg-6">
                    <label style="font-size:20px" >Doctor:</label><br>
                    <select id="doctor-list" name="Doctor" onChange="getDate(this.value);" style="width:100%;height:35px;border-radius:9px">
                    <option value="">Select Doctor</option>
                    </select>
				</div>
				
				<div class="form-group col-lg-6">
                <label><b>Date of Visit:</b></label><br>
                <input type="date" name="dov" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required><br><br>
                <div id="datestatus"> </div>
				</div>
								
				
			</div>
		
			<div class="col-md-6" >
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<button type="submit" class="btn btn-primary"name="submit"value="Submit">Submit</button>
			</div>
<?php

if(isset($_POST['submit']))
{
		
		include 'dbconfig.php';
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
                        
						header( "Refresh:4; url=u1login.php");

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
		</div>
	</section>
    </form>
</div>
</body>
</html>