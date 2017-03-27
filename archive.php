<HTML>
<HEAD>			<!--header & Footer 2-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A New Website.">
  <meta name="author" content="Ravi Saxena">
<TITLE>
Archive:Brainstorming
</TITLE>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery.buttons.js"></script>
<script src="jquery.archive_buttons.js"></script>
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/CSS" href="mystyle.css">
<link rel="icon" href="icon.png" type="image/png" sizes="32x32">
<style>
H1{background-color:pink;}
 
	html,body{
		-webkit-animation: mymove 20s infinite; /* Chrome, Opera, and Safari */
		animation: mymove 20s infinite; /* Standard syntax */
		background-color: black;
		}
 
		@-webkit-keyframes mymove 				/* Chrome, Opera, and Safari */
		{
		0% {background-color: black;}
		50% {background-color: yellow;}
		100% {background-color: black;}
		}
 
		@keyframes mymove						/* Standard syntax */
		{
		0% {background-color: black;}
		50% {background-color: yellow;}
		100% {background-color: black;}
		}       
		 .circle {
			width: 50px;
			height: 50px;
			-webkit-border-radius: 25px;
			-moz-border-radius: 25px;
			border-radius: 25px;
				}
				
		.blink_text 											/* for blink operation. */
				{
						animation:2s blinker linear infinite;
						-webkit-animation:2s blinker linear infinite;
						-moz-animation:2s blinker linear infinite;

						color: white;
				}

			@-moz-keyframes blinker
				{  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}

			@-webkit-keyframes blinker
				{  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}

			@keyframes blinker {  
						0% { opacity: 1.0; }
						50% { opacity: 0.0; }
						100% { opacity: 1.0; }
				}
.container-fluid
	{
		width: 100%;
		text-align: center;
		> li {
				float: none;
				display: inline-block;
			}
	}
.navbar-header
	{
		width: 100%;
		text-align: center;
		> li {
				float: none;
				display: inline-block;
			}
	}
.navbar-brand {
    position: absolute;
    width: 100%;
    left: 0;
    top: 0;
    text-align: center;
    margin: auto;
}
.btn.btn-danger.navbar-btn{border:2px;position:relative;border-radius:25%;align:center;width:device-width;}
.btn.btn-danger.navbar-btn:hover{background:skyblue;border:0px;position:relative;}
</style>
</HEAD>
<BODY>
<nav class="navbar navbar-inverse" style="background-color: #26a69a;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;"><h5>Search The Content</h5></a>
    </div><br/><br/>
	<button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="home"><span class="glyphicon glyphicon-home"></span> HOME</button>
	<button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id1"><span class="glyphicon glyphicon-text-background"></span> MENU</button>
    <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id2"><span class="glyphicon glyphicon-tags"></span> ARCHIVE</button>
    <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id3"><span class="glyphicon glyphicon-user"></span> My Artworks</button>
  </div>
</nav>

<div>
<H1 class="class1"><center>Archive</center></H1>

<z class="t" align="center">
<center>
<z class="blink_text"><u>Click on the Tabs</u></z>
</center>
</z>
<br/>

<button class="circle" id="id5" style="background: red;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:1em;color: white;margin:0px;">
C++
</H3>
</button>
<br/>
<br/>

<button class="circle" id="id6" style="background: pink;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:1em;color: white;margin:0px;">
Java
</H3>
</button>
<br/>

<H5 style="text-align:center;background-color:orange;position:relative;color:grey;opacity:0.8">"Click on this button <a href="archive.php">
<button class="circle" style="background: palegreen;">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding-right:2px;font-size:0.9em;color: blue;opacity:1;margin:0px;">Reload 
</H3>
</button>
</a> to reload the Archive".
</H5>

<button class="circle" id="id7" style="background: green;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:0.9em;color: white;margin:0px;"> 
ECO
</H3>
</button>
<br/>
<br/>

<button class="circle" id="id8" style="background: violet;left: 25%">
<H3 style="horizontal-align:center;vertical-align:center;text-align:center;padding:1px;font-size:0.8em;color: white;margin:0px;">
MUSIC
</H3>
</button>
<br/>
<br/>
<H1 style="border-radius:100px; background-color:orange;"> &nbsp </H1>
<H1 style="border-radius:100px; background-color:yellowgreen;"><center><a href="yt-js-player.html"><button class="btn btn-danger navbar-btn" style="height:25px;border-radius:20px;background-color:blue;opacity:0.5;" id="yt-js-player"><span class="glyphicon glyphicon-film"></span> YT-JS-Player</button></a></center></H1>
<H1 style="border-radius:100px; background-color:orange;"> &nbsp </H1>
<br/>
</div>
<footer class="container-fluid text-center" style="background-color: #004d40;color:white;padding:0%;bottom:-250px;position:absolute;width:100%;">
  <center>
  <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id4"><span class="glyphicon glyphicon-envelope"></span> Contact</button>
  <h6>Dated 9/12/16.</h6>
  </center>
</footer>
</BODY>
</HTML>
