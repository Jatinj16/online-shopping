<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>

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

<link href="p images/a.jpg" rel="shortcut icon"/>

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

<ul class="nav navbar-nav"></ul>

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

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="glyphicon glyphicon-user" style="font-size:16px">User</span>
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="userlist.php">Userlist</a></li>
<li><a href="purchased.php">Purchased</a></li>
<li><a href="userquery.php">Query</a></li>
</ul>
</li>


<li><a href="admin logout.php">logout</a></li>

</ul>

</div>

</div>


</nav>

</body>
</html>