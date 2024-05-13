<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>payment</title>

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


</head>

<body>

<body data-spy="scroll"  data-target=".navbar" data-offset="50" >

<!--------------------- navbar coding------------------------------------------->


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

</ul>
</li>

</ul>

</div>
</div>

</nav>

  
<!-----------------------scrollspy----------------------------------------------->

       
<button type="button"   class="navbar-toggle"  data-toggle="collapse" data-target="#miss">  
        <span class="icon-bar"></span>
        

</button>

</div>

<div class="collapse navbar-collapse" id="miss" >
   <ul class="nav navbar-nav " style="margin-left:15%">
        <li><a href="home.php"><span style="color:#FFF">HOME</span> </a></li>
         </ul>
</div>
</nav>

<div class="container">
<form method="post" style="margin-top:10%">
<input type="button" value="payment" class="btn btn-info btn-warning "  style="height:50px" />
<input type="submit" value="case on delivery" class="btn btn-primary  form-control" name="cod" style="margin-top:2%" />
<input type="submit" value="online payment" class="btn btn-success  form-control" name="op" style="margin-top:2%" />
</form>
</div>

<?php

$user=$_SESSION["user"];
include('conn.php');
if(isset($_POST['cod']))
{if(mysqli_query($conn,"update checkout set status='cod' where status='unpaid' and userid='$user'"))
{
}
if(mysqli_query($conn,"update order1 set status='cod' where status='unpaid' and userid='$user'"))
 {
  header('location:online gift shoping.php');
 }
  else
   echo mysqli_error($conn,);
}

if(isset($_POST['op']))
{if(mysqli_query($conn,"update checkout set status='op' where status='unpaid' and userid='$user'"))
{
}
if(mysqli_query($conn,"update order1 set status='op' where status='unpaid' and userid='$user'"))
 {
  header('location:online gift shoping.php');
 }
  else
   echo mysqli_error($conn,);
}
?>

</body>
</html>