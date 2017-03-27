<!DOCTYPE html>
<html lang="en">

<head>
  <title>Brainstorming:Menu</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A New Website.">
  <meta name="author" content="Ravi Saxena">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="icon.png" type="image/png" sizes="32x32">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"type='text/css'>
  <link rel="stylesheet" href="sidebar.css">
  <style>
  @media screen and (min-width: 431px) 
	{
		sup{}
	}

  @media screen and (max-device-width: 430px)
	{ 
		sup{display:none;}
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
        @media only screen and (max-width:320px){.push{height:0px;}}
	@media only screen and (min-width:321px) and (max-width:450px){.push{height:10px;}}
	@media only screen and (min-width:720px) and (max-width:850px){.push{height:270px;}}
	@media only screen and (min-width:851px) and (max-width:1025px){.push{height:640px;}}
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

<a class="navbar-brand" href="" style="color:white;opacity:0.8;font-size:16px;">Search The Menu <sup style="color:orange;">css-bootstrap page</sup></a>

<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">

<li>
<a href="yt-js-player.html"><span class="glyphicon glyphicon-film"></span> YT-JS-Player</a>
</li>

<li>
<a href="database_music.php"><span class="glyphicon glyphicon-music"></span> Database-Songs</a>
</li>

<li><a href="main_info.php"><span class="glyphicon glyphicon-user"></span> ~About My Works</a></li>

<li>
<a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a>
</li>

<li class="active">
<a href="menu.php"><span class="glyphicon glyphicon-text-background"></span> Menu</a>
</li>

<li class="dropdown">
<a href="archive.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tags"></span> Archive<b class="caret"></b></a>
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
<a href="contacts.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
</li>

</ul>
</div>

</nav>
	
<!--Sidebar start-->

<nav class="social" style="position:fixed;margin-top:120px;;z-index:1;">
    <ul>
        <li><a href="https://twitter.com/RaviSaxena21">Twitter <i class="fa fa-twitter" style="background-color:skyblue;color:white;"></i></a></li>
        <li><a href="https://www.facebook.com/profile.php?id=100004184418770">Facebook <i class="fa fa-facebook" style="background-color:#3b5998;color:white;"></i></a></li>
        <li><a href="https://in.pinterest.com">Pinterest <i class="fa fa-pinterest" style="background-color:red;color:white;"></i></a></li>
        <li><a href="https://github.com/gittyRavi">Github <i class="fa fa-github" style="background-color:white;color:black;"></i></a></li>
    </ul>
</nav>

<!--Sidebar end-->
<!--search box start--
    <div class="search-wrapper" style="margin-left:52px;">
                    <form action="D:/HD Songs" method="get" id="search">
                        <label class="search-field-label">
                            <input type="text" class="search-field" name="q" id="q" placeholder="Search menu" value="" autocomplete="on">
                        </label>
                    </form>
    </div>
--search box end-->
  
<div class="container y">

  <br/>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>Here you can learn about basics of C++. <b style="color:orangered;">[All Links Are Provided In The Archive]</b></b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>And you can learn about basics of Java.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>Also you can browse through music videos and songs in database.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>And search the Youtube videos.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>You can also learn about your Environment and send me your ideas for conservations.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>You can also view the source codes of the pages to learn and understand web-development basics.</b></pre>
  <h3><u>Hi friends, this is a new website created by me { रवि सक्सेना :) }</u></h3>
  <p>1-> I have created these pages using <span style="color:#3b5998;">html,css,javascript,jquery & php</span>.</p>
  <p>2-> I am eagerly waiting for your reviews as you can send me your messages through the <br/>&nbsp &nbsp &nbsp contact tab link.</p>
  <br/>
  <br/>  
</div>

<br/>
<div class="push"></div>
<footer class="container-fluid text-center" style="background-color: green;color:white;padding:2%;bottom:-70px;position:relative;width:100%;">
  <p style="opacity:0.8;">Visit Archive</p>
</footer>

</body>
</html>
