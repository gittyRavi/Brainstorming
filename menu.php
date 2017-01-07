<!DOCTYPE html>
<html lang="en">

<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="icon.png" type="image/png" sizes="32x32">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  @media screen and (min-width: 431px) 
	{
		sup{}
	}

  @media screen and (min-device-width: 321px) and (max-device-width: 430px)
	{ 
		sup{display:none;}
	}

  @media only screen and (max-device-width: 320px) 
	{
		sup{}
	}
  .circle
	{
		height:2em;
		width:2em;
		border-radius:100%;
		background-color:orange;
		position:absolute;
		margin:auto;
	}
	.nav.navbar-nav.navbar-right li a
	{
		color: rgba(255,255,255,0.8);
		
	}
	.nav.navbar-nav.navbar-right ul.dropdown-menu li a
	{
		color: grey;
		opacity:1;
	}
	.nav.navbar-nav.navbar-right li.active a
	{
		color: white;
		opacity:1;
	}
	.navbar.navbar-inverse
	{
		padding:0%;
	}
	.y
	{
		background-color:rgba(231, 211, 18,0.6);
	}
	pre
	{
		background-color:rgba(255, 255, 255,0.5);
	}
	</style>
</head>

<body class="y">

<nav class="navbar navbar-inverse" style="background-color: green;">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="" style="color:white;opacity:0.8;">Search The Menu <sup style="color:orange;">css-bootstrap page</sup></a>

<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">

<li><a href="main_info.php"><span class="glyphicon glyphicon-user"></span> ~About My Works</a></li>

<li>
<a href="index.html">Home</a>
</li>

<li class="active">
<a href="menu.php">Menu</a>
</li>

<li class="dropdown">
<a href="archive.php" class="dropdown-toggle" data-toggle="dropdown">Archive<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="dropdown-header"><u style="color: #26a69a;">Main Content Page</u></li>
<li><a href="archive.php">Archive:Main</a></li>
<li class="divider"></li>
<li class="dropdown-header" style="color: #26a69a;">Learn</li>
<li><a href="learncplusplus.php">C++</a></li>
<li><a href="learnjava.php">Java</a></li>
<li class="divider"></li>
<li class="dropdown-header" style="color: #26a69a;">Extras</li>
<li><a href="ecomenu.php">Eco</a></li>
<li><a href="search_video.html">Music</a></li>
</ul>
</li>

<li>
<a href="contacts.php">Contact</a>
</li>

</ul>
</div>

</nav>
  
<div class="container y">

  <br/>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>Here you can learn about basics of C++. <b style="color:orangered;">[All Links Are Provided In The Archive]</b></b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>And you can learn about basics of Java.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>Also you can browse through music videos and songs in database.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>And search the Youtube videos.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>You can also learn about your Environment and send me your ideas for conservations.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>You can also view the source codes of the pages to learn and understand web-development basics.</b></pre>
  <h3><u>Hi friends, this is a new website created by me { रवि सक्सेना :) }</u></h3>
  <p>I am eagerly waiting for your reviews as you can send me your messages through the <br/>contact tab link.</p>
  <br/>
  <br/>  
</div>

<br/>

<footer class="container-fluid text-center" style="background-color: green;color:white;padding:2%;bottom:-70px;position:absolute;width:100%;"">
  <p style="opacity:0.8;">Visit Archive</p>
</footer>

</body>
</html>
