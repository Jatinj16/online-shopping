<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>


<nav class="jumbotron text-center">
<span style="color:#00F;font-size:36px;font-family:Georgia, 'Times New Roman', Times, serif;">ADMIN</span>
</nav>

<nav class="nav navbar-inverse">

<div class="navbar-header">
<a href="#" class="navbar-brand" style="font-size:24px">Gift</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sspy">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<div class="container-fluid">

<div class="collapse navbar-collapse" id="sspy">

<ul class="nav navbar-nav">
<li><a href="Admin1.php">Home</a></li>
</ul>

<ul class="nav navbar-nav pull-right">

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="glyphicon glyphicon-list" style="font-size:16px">Item</span>
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="additem.php">additem</a></li>
<li><a href="itemlist.php">itemlist</a></li>
</ul>
</li>

<li><a href="userlist.php">UserList</a></li>
<li><a href="#">Query</a></li>
<li><a href="admin logout.php">logout</a></li>

</ul>

</div>

</div>


</nav>

<br>
<br>

<?php

include('conn.php');  

$a=$_REQUEST['y'];
$sql=mysqli_query($conn,"select * from additem where id='$a'");
$aa=mysqli_fetch_array($sql);
if($aa){
?>

<div class="col-md-12">
<div class="col-md-4">

<form method="post" enctype="multipart/form-data" name="ad" onSubmit="add()">

<input type="text" class="form-control" placeholder="name" value="<?php echo $aa['name']; ?>" name="t"/>
<br>
<input type="text" class="form-control" placeholder="price" value="<?php echo $aa['rs']; ?>" name="p"/>
<br>
<input type="text" class="form-control" placeholder="description" value="<?php echo $aa['description']; ?>" name="d"/>
<br>
<input type="file" class="form-control" value="<?php echo $aa['pic'];    ?>" name="img"/>
<br>
<button type="submit" class="btn-success form-control" name="sub">Submit</button>

</form>


<?php    }  ?>


</div>
</div>

</body>





<?php


  if(isset($_POST['sub']))
    {
	$a=$_REQUEST['y'];
	$tx=$_POST['t'];  
	$pr=$_POST['p']; 
	$ds=$_POST['d'];
	$im=$_FILES['img']['name'];  
    
	
$sql=mysqli_query($conn,"update additem set name='$tx', rs='$pr' ,description='$ds' ,pic='$im' where id='$a'  ");
	
	
	if($sql)     
	  {  
	    move_uploaded_file($_FILES['img']['tmp_name'],"pic/".$im);	
?> 
        
		<script> alert('Data updated'); </script>    
		
<?php
	  }
	
	else
	  {
		  echo mysqli_error($conn,);
	  }
		
	}

   
?>


</html>