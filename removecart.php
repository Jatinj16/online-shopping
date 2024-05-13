<?php
include('conn.php');
$id=$_REQUEST['x1'];

 $sql=mysqli_query($conn,"delete from cart where id='$id'"); 
   
   if($sql)
     
   {
	   ?>
   <script>
   alert('item removed');
   window.location='mycart.php';
   </script>
   <?php
   }

?>