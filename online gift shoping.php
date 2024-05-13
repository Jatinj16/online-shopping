<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>online gift shoping</title>
<link href="download.jpg" rel="shortcut icon" />

<style>

#t1{background-image:url(1.jpg);height:300px;background-size:cover}
#t1:hover{background-image:url(2.jpg);height:300px;background-size:cover}

#t2{background-image:url(3.jpg);height:300px;background-size:cover}
#t2:hover{background-image:url(4.jpg);height:300px;background-size:cover}

#t3{background-image:url(5.jpg);height:300px;background-size:cover}
#t3:hover{background-image:url(6.jpg);height:300px;background-size:cover}

</style>

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<!----------------------------Body-------------------------------->

<body >

<!----------------------------Navbar------------------------------->

<nav class="navbar navbar-default navbar-fixed-top">

<div class="navbar-header">
<a href="#" class="navbar-brand" style="font-size:24px">Gift</a>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sspy">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>

<div class="container">

<div class="collapse navbar-collapse" id="sspy">

<ul class="nav navbar-nav">

<li><a href="online gift shoping.php" class="glyphicon glyphicon-home" style="font-size:16px">Home</a></li>
<li><a href="mycart.php" class="glyphicon glyphicon-shopping-cart" style="font-size:16px">Cart</a></li>
<li><a href="About Us.php" class="glyphicon glyphicon-hand-right" style="font-size:16px">About Us</a></li>
<li><a href="Contact Us.php" class="glyphicon glyphicon-phone" style="font-size:16px">Contact Us</a></li>
<li><a href="my order.php" class="glyphicon glyphicon-gift" style="font-size:16px">My Order</a></li>

</ul>

<ul class="nav navbar-nav  pull-right" >
<?php     
include('conn.php');
session_start();
if(isset($_SESSION['user']))
  { 
    $usr=$_SESSION['user'];
    $sql=mysqli_query($conn,"select * from signup where email='$usr'");
	  $a=mysqli_fetch_array($sql);
    if($a)
	  {	  
?>

<li><a href="">user=> <?php echo  $usr ?></a></li>
<li><a href="user logout.php">logout</a></li>
<?php
	  }
  }
  ?>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="glyphicon glyphicon-user" style="font-size:16px"></span>
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="Login.php">login</a></li>
<li><a href="Admin.php">Admin</a></li>

</ul>
</li>

</ul>

</div>
</div>

</nav>

<!------------------------navbar end-------------------------->

<br />
<br />
<br />



<div class="col-md-12" style="background-image:url(p%20images/gifted.png);height:200px;background-repeat: no-repeat;background-position: center;margin: auto;"></div>

<!------------------------------Search bar------------------->

<div class="container" >
<div class="col-lg-12" style="margin-top:10px">

<div class="col-md-10" >

<form method="post" action="search.php">

<input type="search"  class="form-control " style="height:50px;color:#F00;font-size:24px;font-family:'Comic Sans MS', cursive" name="search"/>



</div>

<div class="col-md-2"><button type="submit" style="height:50px" class="form-control btn-success" name="b"><span class="glyphicon glyphicon-search" style="font-size:24px"></span></button></div>


</form>

</div>
</div>

<!---------------------------Carousel--------------------------------->

<br />

<div class="carousel slide" data-ride="carousel" id="t1" style="width:100%;height:350px">
     
     <ul class="carousel-indicators">
     <li class="active" data-slide-to="0" data-target="#t1"></li>
     <li data-slide-to="1" data-target="#t1"></li>
     <li data-slide-to="2" data-target="#t1"></li>
     <li data-slide-to="3" data-target="#t1"></li>
     <li data-slide-to="4" data-target="#t1"></li>
     </ul> 

    <div class="carousel-inner">

    <div class="active item"><img src="p images/g2.jpg" style="width:100%;height:350px"/></div>
    <div class="item"><img src="p images/f2.jpg" style="width:100%;height:350px"/></div>
    <div class="item"><img src="p images/f3.jpg" style="width:100%;height:350px"/></div>
    <div class="item"><img src="p images/g.jpg" style="width:100%;height:350px"/></div>
    <div class="item"><img src="p images/g1.jpg" style="width:100%;height:350px"/></div>
    
    </div>

    <a href="#t1" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span></a>
    
    <a href="#t1" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span></a>

</div>

<!-----------------------------Home------------------------->

<br />
<br />
<br />

<?php

include('conn.php');
   
  $sql=mysqli_query($conn,"select * from additem "); 
   
   while($a=mysqli_fetch_array($sql))
   
   
   
   {
   
   

?>


<div class="col-md-4 panel panel-default">

  <div class="panel-heading" style="background:#9FC"><?php  echo $a['name']  ?></div>
  
  <div class="panel-body">
  <img src="pic/<?php  echo $a['pic']  ?>" style="height:300px;width:100%"/></div> 
  <div class="panel-footer" style="background:#9FC"><span>Rs.</span> <?php  echo $a['rs']  ?> <a href="addtocart.php?x=<?php   echo $a['id']   ?>" > <button type="button" class="btn btn-success pull-right">Add to cart</button></a><br />
  <br />

</div>


</div>





 






<?php    }    ?>


</body>
</html>
