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

<div class="col-md-12" style="background-image:url(p%20images/Login.jpg);height:975px">

<div class="col-md-4">

<form  method="post" action="log.php">

<legend style="color:#000;margin-top:100px;font-size:36px;text-align:center;font-family:'Arial Black', Gadget, sans-serif">Login</legend> 


<input type="email" class="form-control" placeholder="Email" name="em"/>
<br />
<input type="password" class="form-control" placeholder="password" name="ps"/>
<br />
<button type="submit" class="btn btn-success form-control" name="sub">Submit</button>
<br />
 <button type="" class="btn btn-link form-control"><a href="Signup.php" style="font-size:24px; color: greenyellow;">Sign Up</a></button>


</form>

</div>

</div>


</body>
</html>
