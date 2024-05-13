<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>bh
<script src="jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>


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

<li><a href="">user:- <?php echo  $usr ?></a></li>
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

<br />

<br />
<br />


<table class="table table-bordered">

<tr><th>Userid</th><th>Item</th><th>price</th><th>Quantity</th><th>Total</th><th>Date</th><th>Status</th><th>Delete</th></tr>


<?php

include('conn.php');
if(isset($_SESSION['user']))
   {
	   $a=$_SESSION['user'];
	if($a)   
	   {
  $sql=mysqli_query($conn,"select * from order1 where userid='$a'"); 
	   
   while($a=mysqli_fetch_array($sql))
     
   {
   
?>

<tr>    

<th><?php echo $a['userid'] ?> </th>
<th><?php echo $a['item'] ?></th>
<th><?php echo $a['price'] ?> </th>
<th><?php echo $a['quantity'] ?> </th>
<th><?php echo $a['total'] ?> </th>
<th><?php echo $a['date'] ?></th>
<th><?php echo $a['status'] ?></th>
<th><button class="btn btn-danger"><a href="?x=<?php echo $a['id']?>">Delete</a></button></th>

</tr>

<?php 
} 
   }
   }
   else{
      echo "<script>alert('login first');
            window.location='online gift shoping.php';
            </script>";
   }
?>
  
   
</table>


</body>
</html>