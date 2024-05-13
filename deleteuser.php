<?php

include("conn.php");
$id=$_REQUEST['x'];
$sql=mysqli_query($conn,"delete from signup where id='$id'");

if($sql)
  {
  ?>
  
  <script> 
  alert("user has deleted"); 
  window.location="userlist.php";
  </script>
  
  <?php
  }


?>