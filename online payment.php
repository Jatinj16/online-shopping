<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<script>

$(document).ready(function(e) 

{
    
	$("#t1").click(function()
	{
		$("#t3").hide(1000);
		$("#t2").show(1000);
	});
	
});

</script>

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

<div class="col-md-12" >

<br />
<br />

<div class="col-md-4"></div>

<div class="col-md-4" id="t3">

<form method="post">

<label>Name</label>
<input type="text" class="form-control" name="fname"/>
<br />

<label>Card no.</label>
<input type="text" class="form-control" name="card" maxlength="16"/>
<br />

<label>cvv</label>
<input type="text" class="form-control" name="cvv" maxlength="3"/>
<br />

<label>expiry</label>
<input type="date" class="form-control" name="expiry" maxlength="7"/>
<br />

<label>Card Type</label><select name="type" class="form-control"><option>Select</option><option>Visa</option><option>Credit</option><option>Debit</option></select>
<br />

<button type="button" class="form-control btn btn-success" id="t1">Submit</button>

</div>
<div class="col-lg-4" id="t2" style="display:none">

<br />
<br />
<br />
<br />
<br />
<br />
<br />


<button type="submit" class="form-control btn btn-info" name="sub"  >Confirm</button>

<br />
<br />
<br />
<br />

<button type="submit" class="form-control btn btn-danger" name="cancel"  >Cancel</button>


</div>

</form>

</div>

</body>
</html>

<?php
include('conn.php');

$user=$_SESSION['user'];

if(isset($_POST['sub']))
  {
	  $nm=$_POST['fname'];
	  $cr=$_POST['card'];
	  $cv=$_POST['cvv'];
	  $ex=$_POST['expiry'];
	  $ty=$_POST['type'];
	  
	$sql=mysqli_query($conn,"insert into onlinepayment (fname,cardno,cvv,expiry,type)values('$nm',$cr,$cv,'$ex','$ty')")  ;
	  
	  if($sql)
	    {
		?>   
        
        <script> window.location='online gift shoping.php'; </script>
        	
		<?php
		}
  }


?>
<?php


if(isset($_POST['cancel']))
  {
	  
	?>   
        
        <script> window.location='online gift shoping.php'; </script>
        	
		<?php
	
	  
  }
	  
	  
?>