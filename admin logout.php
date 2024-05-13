<?php
  session_start();
  
if(isset($_SESSION['admin']))
     {
		 
		 
		 session_destroy();
		?> 
		 
         <script> alert('you are logged out');
		 window.location='online gift shoping.php' 
		  </script>
		 
		 <?php
	 
		 }

?>
