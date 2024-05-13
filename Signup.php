<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


<script>

function hide()
             {
				 var a=document.getElementById("p1");
				 if(a.type=="password")
				   { 
				     a.type="text";
					 document.getElementById("p111").className="glyphicon glyphicon-eye-close";
				   }
				 else
				   {
					a.type="password"   
					document.getElementById("p111").className="glyphicon glyphicon-eye-open";
				   }
			 }


function pswrd()
            {
			 var a=document.getElementById("p1");
			 	
			if(document.getElementById("p1").value.length<=5)	
			  {
				document.getElementById("p11").innerHTML="Weak";
				document.getElementById("p11").style.color="red";  
			  }
		    else if(document.getElementById("p1").value.length<=7)
              {
                document.getElementById("p11").innerHTML="Good";
				document.getElementById("p11").style.color="Orange";
			  }
			else if(document.getElementById("p1").value.length<=9)
              {
                document.getElementById("p11").innerHTML="Strong";
				document.getElementById("p11").style.color="green";
			  }
			else
			  {
				  document.getElementById("p11").innerHTML="Excelent";
				document.getElementById("p11").style.color="green";
			  }
			}

function cpswrd()
               {  
                var a=document.getElementById("p1").value;
                var b=document.getElementById("p2").value;
				var c=Number(a)+Number(b);
				if(a!=b)
				  {
					document.getElementById("p22").innerHTML="Incorrect password"; 
				  }
                else
				  {
					document.getElementById("p22").innerHTML="Correct password";
				  }
			   }

</script>

<style>
.bg{
	background-image:url(p%20images/Signup.jpg);
	height:975px;
	width:100%;
	background-repeat: no-repeat;
	background-size: cover;
}
	
</style>


</head>

<!----------------------------Body------------------------------>

<body>

<nav class="navbar navbar-default navbar-fixed-top">

<div class="navbar-header">
<a href="#" class="navbar-brand" style="font-size:24px">Gift</a>

<!------------------------scrollspy----------------------------->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sspy">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<!--------------------------Navbar icon------------------------->

</div>

<div class="container">

<div class="collapse navbar-collapse" id="sspy">

<ul class="nav navbar-nav">

<li><a href="online gift shoping.php" class="glyphicon glyphicon-home" style="font-size:16px">Home</a></li>

</ul>


</div>
</div>

</nav>

<!-----------------------------Home------------------------------->


<div class="col-md-12 bg">

<div class="col-md-4">

<form method="post" action="sign.php" enctype="multipart/form-data">
<legend style="color:#000;font-size:36px;text-align:center;font-family:'Arial Black', Gadget, sans-serif;margin-top:50px">SIGNUP</legend> 

<input type="file" class="form-control" name="pics" />

<br />

<input type="text" class="form-control" placeholder="First Name" name="fname"/>

<br />

<input type="text" class="form-control" placeholder="Last Name" name="lname"/>

<br />

<input type="email" class="form-control" placeholder="Email" name="email"/>

<br />

<div class="input-group">
<input type="password" class="form-control" id="p1" onkeyup="pswrd()" onkeydown="pswrd()"placeholder="Password" name="password"/>
<span class="input-group-addon" onclick="hide()" ><i class="glyphicon glyphicon-eye-open" id="p111"></i></span>
</div>
<p id="p11"></p>
<br />
<input type="password" class="form-control" id="p2" onkeyup="cpswrd()" placeholder="Confirm Password"/><label id="p22"></label>
<br>
<br />
<input type="Number" class="form-control" placeholder="Contact Number" name="contact"/>
<br />
<input type="text" class="form-control" placeholder="PINCODE" name="pincode"/>

<br />

<label>Gender</label>
 <input type="radio"  name="g" value="male" /> Male 
 <input type="radio"  name="g" value="female"/> Female

<br />
<br />

<input type="text" class="form-control" placeholder="Address" name="address"/>

<br />

<select class="form-control" name="city"><option><b>SELECT CITY</b></option><option>Gwalior</option><option>Bhopal</option>Indore<option>Delhi</option><option>Mumbai</option>Chandigarh<option>Kolkatta</option><option>Benglore</option></select> 

<br />

<button type="submit" class="btn-success form-control" name="sub" >Submit</button>

<br />

<button type="button" class="btn btn-link form-control"><a href="Login.php" style="font-size:24px">Login</a></button>


</form>

</div>

</div>


</body>
</html>
