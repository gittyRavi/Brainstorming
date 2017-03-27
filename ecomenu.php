<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A New Website.">
  <meta name="author" content="Ravi Saxena">
<link rel="icon" href="icon.png" type="image/png" sizes="32x32">
<title>Brainstorming:ECO</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery.buttons.js"></script>
<script src="jquery.archive_buttons.js"></script>

<link rel="stylesheet" type="text/css" href="style3.css">

<style> 
body,html
	{
		text-align: center;
		width: device-width;
	}
	H1{background-color:pink;}
	
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

						color: red;
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
			H3
				{
					horizontal-align:center;
					vertical-align:center;
					text-align:center;
					margin:0px;
					color: white;
				}
			button a
				{
					text-decoration: none;
					color:white;
				}
			body
				{
					background-color:rgba(0,0,0,0.4);
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
.btn.btn-danger.navbar-btn{background:green;border:2px;position:relative;border-radius:25%;align:center;width:device-width;}
.btn.btn-danger.navbar-btn:hover{background:skyblue;border:0px;position:relative;}
@media only screen and (min-width:720px) and (max-width:850px){.push{height:300px;}}
@media only screen and (min-width:851px) and (max-width:1025px){.push{height:640px;}}

</style>

<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script tpye="text/javascript">
$(document).ready(function()
{
    var url = window.location.href;
    var search_val_raw = url.split("?q=")[1];
    var search_val_count = search_val_raw.split("+");
    var search_val;

    for(var i = 0; i < search_val_count.length; i++)
    {
        search_val = search_val_count[i];

        $("#search-results p:contains(" + search_val + ")").show();
    }
});
</script>

<style type="text/css">
#search-results p{display: none;}
</style>-->

</head>
<body>


<nav class="navbar navbar-inverse" style="background-color: #26a69a;opacity:0.9;">
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

<div class="container" id="content" style="margin-top:-8em;margin-bottom:-50px;">

<H1 class="class3" style="font-family: 'jokerman',sans-serif!important;border-radius:100px;"><center>Ecology, Environment & Animals</center></H1>

<z class="t" align="center">
<center>
<z class="blink_text"><u>Click on the tabs to know about the "Following Animals & Plants" in each category.</u></z>
</center>
</z>
<br/>

<center>
<table>										 <!--table open-->

<tr>											<!--row1-->
<td><a href="new_look(webpage_bald_eagle).php">
<button class="circle" style="background: red;">
<H3 style="font-size:0.8em;">
Eagle
</H3>
</button></a>
</td>
<td><a href="new_look(webpage_gangetic_dolphin).php">
<button class="circle" style="background: violet;">
<H3 style="font-size:0.85em;">
Dolphin
</H3>
</button></a>
</td>
<td><a href="sunderbans.php">
<button class="circle" style="background: red;">
<H3 style="font-size:0.8em;">
Sunder-<br/>
bans
</H3>
</button></a>
</td>
<td><a href="andes.php">
<button class="circle" style="background: violet;">
<H3 style="font-size:0.9em;">
Andes
</H3>
</button></a>
</td>
</tr>

<tr>											<!--row2-->
<td><a href="new_look(webpage_green_sea_turtle).php">
<button class="circle" style="background: pink;">
<H3 style="font-size:0.9em;">
Turtle
</H3>
</button></a>
</td>
<td><a href="new_look(webpage_snow_leopard).php">
<button class="circle" style="background: green;">
<H3 style="font-size:0.75em;">
Leopard
</H3>
</button></a>
</td>
<td><a href="namib_desert.php">
<button class="circle" style="background: pink;">
<H3 style="font-size:0.8em;">
Namib<br/>
Desert
</H3>
</button></a>
</td>
<td><a href="congo_forest.php">
<button class="circle" style="background: green;">
<H3 style="font-size:0.8em;">
Congo<br/>
Forest
</H3>
</button></a>
</td>
</tr>

<tr>											<!--row3-->
<td><a href="new_look(webpage_western_hoolock_gibbon).php">
<button class="circle" style="background: green;">
<H3 style="font-size:0.85em;">
Gibbon
</H3>
</button></a>
</td>
<td><a href="new_look(webpage_scimitar_babbler).php">
<button class="circle" style="background: pink;">
<H3 style="font-size:0.75em;">
Scimitar
</H3>
</button></a>
</td>
<td><a href="great_barrier_reef.php">
<button class="circle" style="background: green;">
<H3 style="font-size:0.75em;">
Great<br/>
B.Reef
</H3>
</button></a>
</td>
<td><a href="sahara_desert.php">
<button class="circle" style="background: pink;">
<H3 style="font-size:0.85em;">
Sahara<br/>
Desert
</H3>
</button></a>
</td>
</tr>

<tr>											<!--row4-->
<td><a href="new_look(webpage_bengal_tiger).php">
<button class="circle" style="background: violet;">
<H3 style="font-size:0.85em;">
Tiger
</H3>
</button></a>
</td>
<td><a href="new_look(webpage_sea_otter).php">
<button class="circle" style="background: red;">
<H3 style="font-size:0.85em;">
Sea<br/>
Otter
</H3>
</button></a>
</td>
<td><a href="pantanal.php">
<button class="circle" style="background: violet;">
<H3 style="font-size:0.8em;">
Pantan-<br/>
al
</H3>
</button></a>
</td>
<td><a href="arctic_region.php">
<button class="circle" style="background: red;">
<H3 style="font-size:0.85em;">
Arctic
</H3>
</button></a>
</td>
</tr>
</table>									<!--table1 close-->
</center>

<H1 style="border-radius:100px; background-color:violet;"> &nbsp </H1>
<H1 style="border-radius:100px;"> &nbsp </H1>
<H1 style="border-radius:100px; background-color:violet;"> &nbsp </H1>

</div>
<br/>
<div class="push"></div>

<footer class="container-fluid text-center" style="background-color: #004d40;opacity:0.9;color:white;padding:1%;bottom:0px;position:relative;width:100%;">
  <center>
  <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id4"><span class="glyphicon glyphicon-envelope"></span> Contact</button>
  <h6>Dated 9/12/16.</h6>
  </center>
</footer>



</body>
</html>
