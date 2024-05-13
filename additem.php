<html>
<head>
<title>additem</title>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>

function add()
            {
			 var w=document.forms['ad']['t'].value;
			  if(w=="")
			   {
				 alert("fill all the filled");
			   }
			
			 var x=document.forms['ad']['p'].value;
			  if(x=="")
			   {
				 alert("fill all the filled");
			   }
			 
			 var y=document.forms['ad']['d'].value;
			  if(y=="")
			   {
				 alert("fill all the filled");
			   }
			 
			 var z=document.forms['ad']['img'].value;	 
			 if(z=="")
			   {
				 alert("fill all the filled");
			   }
			}
             
</script>

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

<div class="col-md-12">
<div class="col-md-4">

<form method="post" enctype="multipart/form-data" name="ad" onSubmit="add()">

<input type="text" class="form-control" placeholder="name" name="t"/>
<br>
<input type="text" class="form-control" placeholder="price" name="p"/>
<br>
<input type="text" class="form-control" placeholder="description" name="d"/>
<br>
<input type="file" class="form-control" name="img"/>
<br>
<button type="submit" class="btn-success form-control" name="sub">Submit</button>

</form>

</div>
</div>

</body>

<?php

include('conn.php');
  if(isset($_POST['sub']))
    {
	 $tx=$_POST['t'];  
	 $pr=$_POST['p']; 
	 $ds=$_POST['d'];
	 $im=$_FILES['img']['name'];  
    
	
$sql=mysqli_query($conn,"insert into additem(name,rs,description,pic)value('$tx','$pr','$ds','$im')");
	
	
	if($sql)     
	  {  
	    move_uploaded_file($_FILES['img']['tmp_name'],"pic/".$im);	
?> 
        
		<script> alert('Data inserted'); </script>    
		
<?php
	  }
	
	else
	  {
		  echo mysqli_error($conn);
	  }
		
	}

   
?>

</html>