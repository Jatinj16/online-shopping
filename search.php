<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search</title>


<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>

</head>

<body>



<?php

include('conn.php');
   if(isset($_POST['b']))
    {
	 $tx=$_POST['search'];  
	 
  $sql=mysqli_query($conn,"select * from additem  where name like '%$tx%'  "); 
   
   while($a=mysqli_fetch_array($sql))
   
   
   
   {
   
   

?>


<div class="col-md-4 panel panel-default">

  <div class="panel-heading" style="background:#9FC"><?php  echo $a['name']  ?></div>
  
  <div class="panel-body">
  <img src="pic/<?php  echo $a['pic']  ?>" style="height:300px;width:100%"/></div> 
  <div class="panel-footer" style="background:#9FC"><span>Rs.</span> <?php  echo $a['rs']  ?> <a href="addtocart.php?x=<?php   echo $a['id']   ?>" > <button type="button" class="btn btn-success pull-right">Add to cart</button></a><br />
  <br />

</div>


</div>





 






<?php  }  }    ?>






</body>
</html>