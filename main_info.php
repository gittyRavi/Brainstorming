<!DOCTYPE html>
<html lang="en">
<head>
  <title>About & Artworks</title>
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
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	.circle
	{
		height:2em;
		width:2em;
		border-radius:100%;
		background-color:lightblue;
		position:absolute;
		margin:auto;
	}
	p.circle
	{
		background-color:orange;
	}
	img	
	{
		border-radius:10%;
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
	@media screen and (min-width: 431px) 
	{
		.img-responsive
		{
			height:165px;
		}
	}

	@media screen and and (max-device-width: 430px)
	{ 
		.img-responsive
		{
			height:auto;
		}
	}
	pre
	{
		background-color:rgba(0,0,0,0.5);
		border:0px;
		color:white;
	}
  </style>
</head>
<body style="background-color:grey;">

<nav class="navbar navbar-inverse" style="background-color: orange;">

<button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="" style="color:red;font-family:jokerman;"><span class="glyphicon glyphicon-tree-conifer"></span> Artworks <span class="glyphicon glyphicon-tree-conifer"></span></a>

<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">

<li>
<a href="yt-js-player.html"><span class="glyphicon glyphicon-film"></span> YT-JS-Player</a>
</li>

<li>
<a href="database_music.php"><span class="glyphicon glyphicon-music"></span> Database-Songs</a>
</li>

<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> ~About My Works</a></li>

<li>
<a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a>
</li>

<li>
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

<div class="jumbotron" style="background-color:black;">
  <div class="container text-center" style="background-color:black;">
    <h1 style="color:grey;font-family:jokerman;">Art & Photoshop Works</h1>      
    <p style="color:orange;">Somethings that represents "Me"...</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3 style="color:white;">Some of my & my Siblings' Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p class="circle">1</p>
      <img src="photoshop_work/planetbinarystarsatellite.gif" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p class="circle">2</p>
      <img src="photoshop_work/Untitled-3.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p class="circle">3</p>
      <img src="photoshop_work/Untitled-4.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p class="circle">4</p>
      <img src="photoshop_work/Untitled-5.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
	  <p class="circle">5</p>
      <img src="photoshop_work/Untitled-7.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p class="circle">6</p>
      <img src="photoshop_work/computer-fine-art-einstein2.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p class="circle">7</p>
      <img src="photoshop_work/Untitled-6.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p class="circle">8</p>
      <img src="photoshop_work/Untitled-8.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>

<div class="container">
  <h3><u style="color:red;">This website is created by me </u><u style="color:orange;">{ روی ساکسےنا  :) }</u></h3>
  <p style="color:yellow;"><u>Send me your messages through the contact tab link.</u></p>
  <p style="color:blue;"><u>You can contribute your code to my github repository for new data.</u></p>
  <a href="https://github.com/gittyRavi/Brainstorming" style="text-decoration:none;"><p style="color:white;"><img src="GitHub-Mark.png" style="width:50px;height:relative;"></img>Github Link</p></a>
  <br/>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>Learn and add details about/in basics of C++.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>Learn and add details about/in basics of Java.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>You can browse and suggest edits for tabs.</b></pre>
  <pre style="text-indent:2.5em;position: center center"><div class="circle" style="vertical-align:center;margin-top:-0.3em"></div><b>Send your photoshop queries/suggestions to me.</b></pre>
  
</div>
<br/>

<footer class="container-fluid text-center" style="background-color:orange;color:white;bottom:0px;">
  <p style="opacity:0.8;">Visit Archive</p>
</footer>

</body>
</html>
