<html>
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
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript">

</script>
</head><?php include "dbconfig.php"; ?>

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

<body style="color:white;background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(https://images.unsplash.com/photo-1536064479547-7ee40b74b807?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80)">
<div class="container" >
<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	<form action="book.php" method="post">
	
		<label><b>Name:</b></label><br>
		<input type="text" placeholder="Enter Full name of patient" name="fname" required class = "form-control input-lg"><br>
		
		<label><b>Time:</b></label><br>
		<input type="radio" name="time" value="3 PM-4 PM" > 3 PM-4 PM
		<input type="radio" name="time" value="4 PM-5 PM"> 4 PM-5 PM
		<input type="radio" name="time" value="5 PM-6 PM"> 5 PM-6 PM<br>
	
		<label style="font-size:20px" >City:</label>
		<select class = "form-control input-lg" name="city" id="city-list" class="demoInputBox"  onChange="getTown(this.value);" style="width:100%;height:35px;border-radius:9px">
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
        
	
		<label style="font-size:20px" >Town:</label><br>
		<select class = "form-control input-lg" id="town-list" name="Town" onChange="getClinic(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Town</option>
		</select>
		
		<label style="font-size:20px" >Clinic:</label><br>
		<select class = "form-control input-lg" id="clinic-list" name="Clinic" onChange="getDoctorday(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Clinic</option>
		</select>
		
		<label style="font-size:20px" >Doctor:</label><br>
		<select class = "form-control input-lg" id="doctor-list" name="Doctor" onChange="getDate(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Doctor</option>
		</select>
		
		
		<label><b>Date of Visit:</b></label><br>
		<input class = "form-control input-lg" type="date" name="dov" onChange="getDay(this.value);"  required><br><br>
		<div id="datestatus"> </div>
		
		<div class="col-xs-6 col-sm-6 col-md-6">
			<button class="btn btn-lg btn-success btn-block" type="submit" style="position:center" name="submit" value="Submit">Book Appointment</button>
		</div>
		</div>
		</div>
<?php
session_start();
if(isset($_POST['submit']))
{
		
		
		$fname=$_POST['fname'];
		$time=$_POST['time'];
		$username=$_SESSION['username'];
		$cid=$_POST['Clinic'];
		$did=$_POST['Doctor'];
		$dov=$_POST['dov'];
		$status="Booking Registered.Wait for the update";
		$timestamp=date('Y-m-d H:i:s');
		$sql = "INSERT INTO book (Username,Fname,Time,CID,DID,DOV,Timestamp,Status) VALUES ('$username','$fname','$time','$cid','$did','$dov','$timestamp','$status') ";
		if(!empty($_POST['fname'])&&!empty($_POST['time'])&&!empty($_SESSION['username'])&&!empty($_POST['Clinic'])&&!empty($_POST['Doctor']) && !empty($_POST['dov']))
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
</body>
</html>
