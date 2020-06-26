<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
	<head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta charset="UTF-8">
        <title>Home || </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link href="css/animate.css" rel="stylesheet">
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,800');
@import url('https://fonts.googleapis.com/css?family=Chela+One');


.header{
background-image: url("admin.png");
background-image:width="700px";
background-repeat: no-repeat;
background-attachment: fixed;
height: 1000px;
transition: 0.5s ease-in-out;
}
.logo{
	width:100px;
}
.logo-title{
	color: #fff;
font-family: 'Open Sans', sans-serif;
font-weight:400;
letter-spacing: 5px;
text-transform: uppercase;
}
.top-title{
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	margin-top: 150px;
}
.top-title h1{
font-family: 'Chela One', cursive;
}
.menu{
padding: 50px;
padding-top: 200px;
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
background: #d83f87;
height: 510px;
opacity:1;
position: relative;
z-index: 5;
transition: background .4s linear;
-webkit-transition: background .4s linear;
-moz-transition: background .4s linear;
-ms-transition: background .4s linear;
-o-transition: background .4s linear;
}
.menu a:hover{
text-decoration: none;
}
.menu li{
list-style: none;
}
.menu li a{
color: #fff;
display: block;
font-family: 'Open Sans', sans-serif;
font-weight:800;
font-size: 25px;
position: relative;
text-transform: uppercase;
}
.mh-1:hover .menu{
background: #ddd;
z-index: 12;
overflow: hidden;
}
.menu a:hover::before {
left: -20px;
width: 15px;
}
.menu a::before{
background: #fff;
bottom: 6px;
content: "";
display: block;
left: 5px;
height: 1px;
position: absolute;
transition: all .2s ease-out;
-webkit-transition: all .2s ease-out;
-moz-transition: all .2s ease-out;
-ms-transition: all .2s ease-out;
-o-transition: all .2s ease-out;
width: 0;
}
.myheader{
	height: 200px;
	background-color: #ccc;
}
.myheader .menu{
padding: 50px;
padding-top:10px;
height: 130px;
position: fixed;
top: 0;
width: 30%;
}
.myheader .header-left{
position: fixed;
top: 0;
background-color:#151724;
width: 60%;
padding: 14px;
height: 130px;
}
.myheader .menu li a{
font-size: 15px;
}
.myheader .top-title{
    position: fixed;
    top: -120px;
    text-align: center;
    left: 30%;
}
.myheader .top-title h1{
	font-size:25px;
}
.myheader .logo-title{
	font-size: 14px;
	letter-spacing: 2px;
}
/* EFFECTS
***************/

.glow {
  text-shadow: 0 0 0 rgba(0, 0, 0, 0);
    -webkit-transition: text-shadow 1s linear;
       -moz-transition: text-shadow 1s linear;
         -o-transition: text-shadow 1s linear;
            transition: text-shadow 1s linear;
}

.glow.in {
  text-shadow:
    0.025em 0.025em 0.025em rgba(0, 0, 0, 0.8),
    0 0 0.5em rgba(255, 255, 255, 0.3);
}

.fade {
  opacity: 0;
    -webkit-transition: opacity 1s linear;
       -moz-transition: opacity 1s linear;
         -o-transition: opacity 1s linear;
            transition: opacity 1s linear;
}

.fade.in {
  opacity: 1;
}


footer{
	margin-top:800px;
}

    </style>
	<body>
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="header-left">
							<img src="images/manipal.png" class="logo" alt="Logo">
						</div>
						<div class="top-title">
							<!-- <h1 class="animated infinite bounceInDown">At Your Service 24ₓ7</h1>
							<h6 class="logo-title animated pulse">Co-operation is the best solution</h6> -->
						</div>
					</div>
					<div class="col-md-4">
						<div class="menu">
							<li class="f-item-1"><a href="book2.php">Book Appointment</a></li><br>
							<li class="f-item-2"><a href="s_booking.php">Show Appointment</a></li><br>
							<li class="f-item-3"><a href="c_booking.php">Cancel Appointment</a></li><br>
							<!-- <li class="f-item-4"><a href="mh-4">Teams</a></li>
							<li class="f-item-5"><a href="mh-5">Find Us</a></li> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				$( ".f-item-1" ).hover(function() {
					$('.menu').css("background-color", "#8165a6");
					}, function(){
					$('.menu').css("background-color", "#d83f87");
					});
				// f-item-2
				$( ".f-item-2" ).hover(function() {
					$('.menu').css("background-color", "#735ed5");
					}, function(){
					$('.menu').css("background-color", "#d83f87");
					});
				// f-item-3
				$( ".f-item-3" ).hover(function() {
					$('.menu').css("background-color", "#797b7b");
					}, function(){
					$('.menu').css("background-color", "#d83f87");
				});
				// f-item-4
				$( ".f-item-4" ).hover(function() {
					$('.menu').css("background-color", "#1ea2e0");
					}, function(){
					$('.menu').css("background-color", "#d83f87");
				});
				// f-item-5
				$( ".f-item-5" ).hover(function() {
					$('.menu').css("background-color", "#4a90e2");
					}, function(){
					$('.menu').css("background-color", "#d83f87");
				});
			});
		</script>
		<!-- <script>
		$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		if (scroll >=50) {
		$(".header").addClass("myheader");
		} else {
		$(".header").removeClass("myheader");
		}
			});
		</script> -->
        <?php
if(isset($_POST['check']))
{
		include 'dbconfig.php';
		$name=$_SESSION['user'];
		$sql = "Select * from book where name='$name'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($rows = mysqli_fetch_assoc($result)) 
			{
				echo "Username:".$rows["username"]."Name:".$rows["name"]."Date of Visit:".$rows["dov"]."Town:".$rows["town"]."<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
}
if(isset($_POST['cancel']))
{
	header( "Refresh:1; url=cancelbookingpatient.php"); 
}
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=cover.php"); 
}
?>
	</body>
    
</html>
