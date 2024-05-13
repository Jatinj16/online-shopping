<html>
<head>
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

<table class="table table-bordered">

<tr><th>ID</th><td>Name</td><td>Price</td><td>description</td><td>Image</td><td>Update</td><td>Delete</td></tr>

<?php

include('conn.php');
   
  $sql=mysqli_query($conn,"select * from additem "); 
   
   while($a=mysqli_fetch_array($sql))
     
   {
   
?>

<tr>    

<th><?php  echo $a['id']  ?></th>
<th><?php  echo $a['name']  ?></th>
<th><?php  echo $a['rs']  ?></th>
<th><?php  echo $a['description']  ?></th>
<th><img src="pic/<?php  echo $a['pic']  ?>" style="height:100px;width:100px"/></th>
<th><a href="Updateitem.php?y=<?php  echo $a['id']  ?>">Update</a></th>
<th><a href="delitem.php?x=<?php  echo $a['id']  ?>">Delete</a></th>

</tr>

<?php    }    ?>

</table>

</body>
</html>