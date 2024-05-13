<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>order</title>
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



<?php
include('conn.php');
session_start();

$user=$_SESSION["user"];



?>
<body>
<?php

	
	$sql2=mysqli_query($conn,"select * from order1 where userid='$user' and status='unpaid'");
	?>
    
    
      <div class="jumbotron" id="hm2" style="height:100px;background-color:#FFF">
         <h3 style="margin-top:45px;text-align:center">Your Orders</h3>
         </div>

<div class="container">  
              
    <table class="table-striped table-bordered table-hover table-responsive" style="width:100%;">
  welcome:-  <?php echo $user   ?>
      <thead>
            <tr>
               <th>Order ID</th>
               <th>Item name</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Total</th>
               <th>status</th>
            </tr>
     </thead>
      <tbody>
            <?php while($ar=mysqli_fetch_array($sql2))
	        { ?>
           <tr>
               <td><?php echo $ar["transid"];?></td>
               <td style="text-transform:capitalize"><?php echo $ar["item"];?></td>
               <td><span class="fa fa-rupee"></span> <?php echo $ar["price"];?></td>
               <td><?php echo $ar["quantity"];?></td>
               <td><?php echo $ar["total"];?></td>
               <td><?php echo $ar["status"];?> </td> 
           </tr>
	     <?php
	  } ?>
     </tbody>
     </table>

  
     <br />

         <br />

             
             <div class="col-md-6">
            <form method="post" ><a href="#"><button type="submit" name="sub" class=" btn btn-success btn-lg" style="margin-left:95%">Pay Now</button></a>
             </form>
             
        </div>  
            
<?php
if(isset($_POST['sub']))
{   
	$s=mysqli_query($conn,"delete from cart where userid='$user'");
	if($s)
	{
      echo "<script>window.location = 'payment.php';</script>";
	}	
}

?>

</div>
</body>
</html>

