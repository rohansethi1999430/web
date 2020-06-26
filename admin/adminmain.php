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
<style>

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
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="adminmain.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Doctor</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="add_doc.php">Add Doctor</a>
                        <a class="dropdown-item" href="del_doc.php">Delete Doctor</a>
                        <a class="dropdown-item" href="s_doc.php">Show Doctor</a>
                        <a class="dropdown-item" href="s_doc_shed.php">Show Doctor's Shedule</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Clinic</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="add_cli.php">Add Clinic</a>
                        <a class="dropdown-item" href="del_cli.php">Delete CLinic</a>
                        <a class="dropdown-item" href="add_doc_cli.php">Assign Doctor to Clinic</a>
                        <a class="dropdown-item" href="add_man_cli.php">Assign Manager to Clinic</a>
                        <a class="dropdown-item" href="del_doc_cli.php">Delete Doctor from Clinic</a>
                        <a class="dropdown-item" href="del_man_cli.php">Delete Manager from Clinic</a>
                        <a class="dropdown-item" href="s_cli.php">Show Clinic</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style="padding-right:40px">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Manager</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="add_man.php">Add Manager</a>
                    <a class="dropdown-item" href="del_man.php">Delete Manager</a>
                    <a class="dropdown-item" href="s_man.php">Show Manager</a>
                    </div>
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
    <script>
    window.onload=function(){if(window.jQuery){$(document).ready(function(){$(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show();$("body").append("<div class='overlay'></div>");
        $(".navbar-toggle, .navbar-toggler").on("click",function(){$(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass"));$(".sideMenu, .overlay").toggleClass("open");$(".overlay").on("click",function(){$(this).removeClass("open");
            $(".sideMenu").removeClass("open")})});
            $("body").on("click",".sideMenu.open .nav-item",function(){if(!$(this).hasClass("dropdown")){$(".sideMenu, .overlay").toggleClass("open")}});$(window).resize(function(){if($(".navbar-toggler").is(":hidden")){$(".sideMenu, .overlay").hide()}
    else{$(".sideMenu, .overlay").show()}})})}else{console.log("sidebarNavigation Requires jQuery")}}
    </script>
</body>
</html>