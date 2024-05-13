<?php

include('conn.php');
session_start();
if(isset($_POST['sub']))
{
	$em=$_POST['em'];
	$ps=$_POST['ps'];
	
	$sql=mysqli_query($conn,"select * from signup  where email='$em' and password='$ps'  ");
	$a=mysqli_fetch_array($sql);
      if($a)
     {
		 $_SESSION['user']=$em;
		 ?>
         <script> alert("welcome");
          window.location="online gift shoping.php";
         </script>
         
         <?php }
	
	 else
	  {  echo mysqli_error($conn,);
		 ?>
		 <script> 
		 alert("wrong id and password"); 
         window.location="login.php";
         </script> 
		 <?php
	  } 
	 
  }

?>