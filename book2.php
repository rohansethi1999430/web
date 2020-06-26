<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Book Appointment</title>
</head><?php session_start();include "dbconfig.php"; ?>
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
.contact-form{
    background: #fff;
    margin-top: 0%;
    margin-bottom: 5%;
    width: 100%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding-top: 10%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 0%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
body{
    
    position:relative;
    
background-image:height 1000px,width 100%;
background-repeat: no-repeat;
background-attachment: fixed;
height: 800px;
}
.overlay,.sideMenu{position:fixed;bottom:0}
.overlay{top:0;left:-100%;right:100%;margin:auto;background-color:rgba(0,0,0,.5);z-index:998;transition:all ease 0.2s}
.overlay.open{left:0;right:0}
.sidebarNavigation{margin-bottom:0;z-index:999;justify-content:flex-start}
.sidebarNavigation .leftNavbarToggler{margin-right:10px;order:-1}
.sideMenu{left:-100%;top:52px;transition:all ease 0.5s;overflow:hidden;width:100%;z-index:999;max-width:80%;margin-bottom:0;padding:1rem}
.sideMenu.open{left:0;display:block;overflow-y:auto}
.sideMenu ul{margin:0;padding:0 15px}</style>
<body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sidebarNavigation" data-sidebarClass="navbar-dark bg-dark" >
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Book Appointment</a>
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="new.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
               
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </div>
    </nav>
    <img src="admin.png" alt="" width="700px">
    <div style="float:right" class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <div class="container contact-form"style="padding:0" >
   
    <form action="book2.php" method="post">
	
                <h3>Add Booking Details :-</h3>
               <div class="row" style="padding:0px">
                    <div class="col-md-6"style="padding:0px" 
                        <div class= "form-group">
                        <label><b>Name:</b></label><br>
		<input type="text" placeholder="Enter Full name of patient" name="fname" required  class="form-control""><br>
		
		<label><b>Time:</b></label><br>
		<input type="radio" name="time" value="3 PM-4 PM" > 3 PM-4 PM
		<input type="radio" name="time" value="4 PM-5 PM"> 4 PM-5 PM
		<input type="radio" name="time" value="5 PM-6 PM"> 5 PM-6 PM<br>
	
		<label style="font-size:20px" >City:</label>
		<select class = "form-control input-lg" name="city" id="city-list"  class="form-control"  onChange="getTown(this.value);" style="width:100%;height:35px;border-radius:9px">
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
		<select  class="form-control" id="town-list" name="Town" onChange="getClinic(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Town</option>
		</select>
		
		<label style="font-size:20px" >Clinic:</label><br>
		<select  class="form-control" id="clinic-list" name="Clinic" onChange="getDoctorday(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Clinic</option>
		</select>
		
		<label style="font-size:20px" >Doctor:</label><br>
		<select  class="form-control" id="doctor-list" name="Doctor" onChange="getDate(this.value);" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Doctor</option>
		</select>
		
		
		<label><b>Date of Visit:</b></label><br>
		<input class ="form-control" type="date" name="dov" onChange="getDay(this.value);"  required><br><br>
		<div id="datestatus"> </div>
		<center>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" />
                        </div>
                        </center>
                    </div>
                    
                </div>
            </form>
            
</div>
    </div>
    <script>
    window.onload=function(){if(window.jQuery){$(document).ready(function(){$(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show();$("body").append("<div class='overlay'></div>");
        $(".navbar-toggle, .navbar-toggler").on("click",function(){$(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass"));$(".sideMenu, .overlay").toggleClass("open");$(".overlay").on("click",function(){$(this).removeClass("open");
            $(".sideMenu").removeClass("open")})});
            $("body").on("click",".sideMenu.open .nav-item",function(){if(!$(this).hasClass("dropdown")){$(".sideMenu, .overlay").toggleClass("open")}});$(window).resize(function(){if($(".navbar-toggler").is(":hidden")){$(".sideMenu, .overlay").hide()}
    else{$(".sideMenu, .overlay").show()}})})}else{console.log("sidebarNavigation Requires jQuery")}}
    </script>

<?php

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
						echo "<h2>Booking successful!!</h2>";
						
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
