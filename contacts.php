<HTML>
<HEAD>			<!--header & Footer 2-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A New Website.">
<meta name="author" content="Ravi Saxena">
<link rel="icon" href="icon.png" type="image/png" sizes="32x32">
<TITLE>
Contact
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
</style>
</HEAD>
<BODY class="t y">
<nav class="navbar navbar-inverse" style="background-color: #26a69a;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;"><h5>Search The Content</h5></a>
    </div><br/><br/>
	<button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="home">HOME</button>
	<button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id1">MENU</button>
    <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id2">ARCHIVE</button>
    <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id3">My Artworks</button>
  </div>
</nav>

<div class="container">

<form action="contacts.php" method="POST">					<!--html form linked to new 2.php-->
	<center style="padding:0%">
	Name:<br><input type="text" name="contact_name" style="border-radius:50%;text-align:center"><br><br>
	Email Address:<br><input type="text" name="contact_email" style="width:200px;height:relative;border-radius:50%;text-align:center" ><br><br>
	Message:<br><textarea name="contact_text" rows="3" cols="30" style="border-radius:10%;text-align:center"></textarea><br><br>
	<input type="submit" value="Send">
	</center>
</form>

</div><br>
<footer class="container-fluid text-center" style="background-color: #004d40;color:white;padding:0%;bottom:0px;position:absolute;width:100%;">
  <center>
  <button class="btn btn-danger navbar-btn" style="border-radius:20%;" id="id4">Contact</button>
  <h6>Dated 9/12/16.</h6>
  </center>
</footer>
</BODY>
</HTML>
