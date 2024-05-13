<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login form</title>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>

<!----------------------------Body-------------------------------->

<body>

<!-----------------------------Home------------------------------->
<br />
<br />
<br />


<div class="col-md-4">

<form  method="post">

<input type="email" class="form-control" placeholder="Email" name="em"/>
<br />
<input type="password" class="form-control" placeholder="password" name="ps"/>
<br />
<button type="submit" class="btn btn-success form-control" name="sub">Submit</button>
<br />

</form>

</div>
<?php

   
    if(isset($_POST['sub'])){
		
       $a=$_POST['em'];
        $b=$_POST['ps'];	   
	   
       if(empty($a) or empty($b) ){


       		if(empty($a)){
				$mess="please enter your email";
				
				}   
		   
		     else
			    if(empty($b)){
             
			 
			      $mess="please enter your password";					
					
					}
			 
			 
			 
		   
		   }



else{
	 include("conn.php");
	$sql=mysqli_query($conn,"insert into validation(email,password)values('$a','$b') ");
  
    if($sql)
	  {
	?>
    
    <script> alert("your data is inserted") </script>
      
	<?php	  
	  }
	
	
	}









	   
	   
	   
		
		}






?>

<?php

if(isset($mess)){
	
	echo $mess;
	
	
	}



?>




</body>
</html>
