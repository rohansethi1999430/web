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
<title>Admin</title>
</head>
<?php session_start();?>
<style>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sidebarNavigation" data-sidebarClass="navbar-dark bg-dark" >
        <div class="container-fluid">
        <a class="nav-link" style="float:left;border-right:none;color:white"> <?php echo $_SESSION['mgrname']; ?>
                   <span class="sr-only">(current)</span>
               </a> 
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item active">
               
                    <a class="nav-link" href="adminmain.php">Logout
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                
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
           <center>
                        <div class="form-group-">
                        <form method="post">
                        <br><br><br>
                           <button class="btnContact"type="button" name="change" onclick="window.location.href='cbs.php'">Update/View Bookings</button>
                        </div>
                        </center>
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
</body>
</html>