<?php
include('conn.php');
   if(isset($_POST['sub']))
  {
	$pi=$_FILES['pics']['name'];  
	$fn=$_POST['fname'];  
	$ln=$_POST['lname'];  
	$em=$_POST['email'];
	$ps=$_POST['password'];
	$ph=$_POST['contact'];
	$pc=$_POST['pincode'];
	$gd=$_POST['g'];
	$ad=$_POST['address'];
	$ct=$_POST['city'];
	$a=date('d/m/y');
	
	$sql=mysqli_query($conn,"insert into signup(pic,fname,lname,email,password,contact,pincode,gender,address,city,date)
	values('$pi','$fn','$ln','$em','$ps','$ph','$pc','$gd','$ad','$ct','$a')");
  
   if($sql)
     {	 
	   move_uploaded_file($_FILES['pics']['tmp_name'],"userpic/".$pi);
	   echo " <script>  alert('data inserted '); window.location='signup.php' </script>  "; 
     }
	  
	 else{
		     echo mysqli_error($conn,);
		 }	 
  }
?>
