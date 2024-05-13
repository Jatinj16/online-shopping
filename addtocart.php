<?php

session_start();
if(isset($_SESSION['user']))
{
include('conn.php');
$x=$_REQUEST['x'];
$sql=mysqli_query($conn,"select * from additem where id='$x'");
$a=mysqli_fetch_array($sql);

$itid=$a['id'];
$itnm=$a['name'];
$pr=$a['rs'];
$ur=$_SESSION['user'];
$dt=date('d/m/y');
$sql1=mysqli_query($conn,"insert into cart(itmid,itname,price,userid,date,status)values($itid,'$itnm',$pr,'$ur','$dt','unpaid')");
	if($sql1)
	{ 
		echo "<script> window.location='online gift shoping.php';</script>";
	}
}
else
{
	echo"<script>alert('login first');
				window.location = 'login.php';
		</script>";
    echo mysqli_error($conn,);	
}

?>