<?php

include("conn.php");
session_start();

$us=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from checkout where userid='$us'");
$a=mysqli_fetch_array($sql);
if($a)
{	
	echo   $a['id'];
}

?>
    <?php  echo $us;    ?>
        <div class="col-md-6">
        <form method="post" ><a href="#"><button type="submit" name="sub" class=" btn btn-success btn-lg" style="margin-left:95%">Pay Now</button></a></form> 
        </div>      
<?php
if(isset($_POST['sub']))
{   
	$s=mysqli_query($conn,"delete from cart where userid='$us'");
	if($s)
	{
    header('location:payment.php');
	}	
}

?>