<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>

<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>

<!----------------------------Body-------------------------------->

<body>

<!----------------------------Navbar------------------------------->

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

<div class="col-md-12" style="background-image:url(p%20images/Admin.jpg);height:975px">

<div class="col-md-4" style="margin-left:800px">

<form method="post" action="ad.php" enctype="multipart/form-data">
<fieldset style="margin-top:50px;color:#333">
<legend style="color:#000;font-size:36px;text-align:center;font-family:'Arial Black', Gadget, sans-serif">Login</legend> 

<ul>
<input type="email" class="form-control" placeholder="Email" name="em"/>
<br />
<input type="password" class="form-control" placeholder="password" name="ps"/>
<br />

<!--<input type="file" class="form-control" placeholder="password" name="ps"/>--->

<button type="submit" class="btn-success form-control" name="sub">Submit</button>
</ul>

</fieldset>
</form>

</div>

</div>


</body>
</html>


