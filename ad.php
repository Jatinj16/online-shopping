<?php

include('conn.php');
session_start();
if(isset($_POST['sub']))
{
	$em=$_POST['em'];
	$ps=$_POST['ps'];
	$sql=mysqli_query($conn,"select * from admin  where email='$em' and password='$ps'");
	$a=mysqli_fetch_array($sql);
	
    if($a)
     { $_SESSION['admin']=$em;
		?>
        <script> alert("welcome Admin");
        window.location="Admin1.php";
        </script>
        <?php }
	else
	  {
		 ?>
		 <script> 
		 alert("wrong id and password"); 
         window.location="admin.php";
         </script> 
		 <?php
	  } 	 
}

?>