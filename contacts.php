<HTML>
<HEAD>			<!--header & Footer 2-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A New Website.">
  <meta name="author" content="Ravi Saxena">
<link rel="icon" href="icon.png" type="image/png" sizes="32x32">
<TITLE>
Contact:Brainstorming
</TITLE>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery.buttons.js"></script>
<link rel="stylesheet" type="text/css" href="style3.css">
<style>
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
.t{color : Blue;}
.g{color:Red;}
.h{color:Green;}
.btn.btn-danger.navbar-btn{background:green;border:2px;position:relative;border-radius:25%;align:center;width:device-width;}
.btn.btn-danger.navbar-btn:hover{background:skyblue;border:0px;position:relative;}
input[type=submit]{border-radius:5%;}
.y{background-color:palegreen;}
.glyphicon-ok{color:333333;}
@media only screen and (max-width:1025px){.push{position:absolute;}}

</style>
</HEAD>
<BODY class="t y">
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

<div class="container">

<form action="contacts.php" method="POST">					<!--html form linked to new 2.php-->
	<center style="padding:0%">
	<span class="glyphicon glyphicon-pencil" style="color:green;"></span> Name: <span class="glyphicon glyphicon-ok" style="display:none;" id="check_1"></span><br><input type="text" name="contact_name" style="border-radius:50%;text-align:center" onmouseout="myfunction()" id="con_name"><br><br>
	Email Address: <span class="glyphicon glyphicon-ok" style="display:none;" id="check_2"></span><br><input type="text" name="contact_email" style="width:200px;height:relative;border-radius:50%;text-align:center" onmouseout="myfunction()" id="con_email"><br><br>
	<span class="glyphicon glyphicon-comment" style="color:green;"></span> Message: <span class="glyphicon glyphicon-ok" style="display:none;" id="check_3"></span><br><textarea name="contact_text" rows="3" cols="30" style="border-radius:10%;text-align:center" onmouseout="myfunction()" id="con_msg"></textarea><br><br>
	<input type="submit" value="Send">
	</center>
</form>

</div><br>
<div class="push"></div>
<footer class="container-fluid text-center push" style="background-color: #004d40;color:white;padding:0%;bottom:0px;width:100%;">
  <center>
  <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id4"><span class="glyphicon glyphicon-envelope"></span> Contact</button>
  <h6>Dated 9/12/16.</h6>
  </center>
</footer>

<script>
function myfunction() {
    var x,y,z;

    x = document.getElementById("con_name").value;

    if (x!="") 
	{
        document.getElementById("check_1").style.display="block";
    }
	else
	{
		document.getElementById("check_1").style.display="none";
	}
	
	y = document.getElementById("con_email").value;

    if (y!="") 
	{
        document.getElementById("check_2").style.display="block";
    }
	else
	{
		document.getElementById("check_2").style.display="none";
	}
	
	z = document.getElementById("con_msg").value;

    if (z!="") 
	{
        document.getElementById("check_3").style.display="block";
    }
	else
	{
		document.getElementById("check_3").style.display="none";
	}
}
    
</script>

</BODY>
</HTML>
