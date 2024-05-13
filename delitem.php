
<?php

include('conn.php');
$id=$_REQUEST['x'];
$sql=mysqli_query($conn,"delete from additem where id=$id");
if($sql)
   {  
    ?>
    <script> 
	    alert("your item has been deleted"); 
        window.location='itemlist.php'
    </script>
	<?php
	}

?>
