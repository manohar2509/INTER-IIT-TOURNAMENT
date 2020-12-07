<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	#h{
		text-align:center;
	  }
	
	* {
	  box-sizing: border-box;
	}
	.menu {
	  float:left;
	  width:20%;
	  text-align:center;
	}
	.menu a {
	  background-color:#e5e5e5;
	  padding:8px;
	  margin-top:7px;
	  display:block;
	  width:100%;
	  color:black;
	}
	.main {
	  float:left;
	  width:60%;
	  padding:0 20px;
	}
	.right {
	  background-color:#ccccff;
	  float:left;
	  width:20%;
	  height:600px;
	  padding:15px;
	  margin-top:0px;
	  text-align:center;
	}
	.bar{
		background-color:black;
		width:100%;
		height: 50px;
		padding:15px 15px;
		text-align:center;
		margin:0px
	}
    .clear 
    {        
        clear:both;         
    }
	 body 
	{
         background-color:#ccccff;       
        margin: 0;
        padding: 0;
        font-family: Helvetica, Arial, sans-serif;
                
    }
	#Quick-links
	{
	  height:50px;
	  padding-bottom: 25px;
	  text-align: center;
	  background-color: #eee;
	  border: solid 1px #c3c3c3;
	}
	#links
	{
		padding: 50px;
		display: none;
	}
	 input[type=submit] {
  background-color: #80ff80;
  border: none;
  text-decoration: none;
  margin: 4px 2px;
}
 input[type=submit]:hover{
		background-color: #eee;
	}


@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
<script language="JavaScript">
	var i = 0;
	var img = [];
	var time = 1000;
	img[0] = 't3.jpg';
	img[1] = 'i5.jpg';
	img[2] = 'i3.jpg';
	img[3] = 't1.jpg';
	img[4] = 'i4.jpg';
	function scroll()
	{
		document.slide.src = img[i]
		if(i < img.length - 1)
			i++;
		else
			i = 0;
		setTimeout("scroll()",time)
		
	}
	window.onload = scroll;
	function Events(){
		document.getElementById('demo') = "Games";
	}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#Quick-links").click(function(){
    $("#links").slideToggle("slow");
  });
});
</script>
</head>
<body style="font-family:Verdana;">
<div id="h"><h1>INTER IIT TOURNAMENT</h1></div>
<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <img class = "center"src = "images.jpg" style="width:100% " height = "200px">
</div>
<div class = "bar">
	<span class = "home"><form id = "home"action = "Home.php" method = "POST"><input type="submit" value="Home" style="margin-left:300px;float:left"></form></span>
	<form id ="events"action = "Events.php" method = "POST"><input type="submit" value="Events"style="margin-left:30px;float:left"></form>
	<form id = "accomoaction"action = "lg.php" method = "POST"><input type="submit" value="Acccomodation"style="margin-left:30px;float:left"></form>
	<form id =" results"action = "Results.php" method = "POST"><input type="submit" value="Results"style="margin-left:30px;float:left"></form>
	<form id ="schedule"action = "lg2.php" method = "POST"><input type="submit" value="Schedule"style="margin-left:30px;float:left"></form>
	<form id ="gallery"action = "Gallery.php" method = "POST"><input type="submit" value="Gallery"style="margin-left:30px;float:left"></form>   
</div>
<div class="clear"></div>
<div style="overflow:auto">
  <div class="menu">
    	<div id="Quick-links"><h3>Quick Links</h3></div>
	<div id = "links">
	<ul>
		<li style = "text-align:left"><form action = "Chiefguest.php" method = "POST"><input type="submit" value="Chief Guest"></form></li>
		<li style = "text-align:left"><form action = "Importantdates.php" method = "POST"><input type="submit" value="Important Dates"></form></li>
		<li style = "text-align:left"><form action = "Rules.php" method = "POST"><input type="submit" value="Rules"></form></li>
		<li style = "text-align:left"><form action = "Helpdesk.php" method = "POST"><input type="submit" value="Help Desk"></form></li>
	</ul>
	</div>
  </div>

  <div class="main" >
    <img name="slide"style="width:700px;height:600px;">
  </div>

  <div class="right">
    <h2>INSPIRATIONAL QUOTES</h2>
	<ul>
	<li>A GOAL WITHOUT A PLAN IS JUST A WISH</li>
	<li>THE ONES WHO SAY "YOU CANT'T "YOU WON'T" ARE PROBBALY THE ONES SCARED THAT "YOU WILL"</li>
    <li>YOU EARN TROPHIES AT PRACTICE.YOU JUST PICK THEM UP IN COMPETITION</li>
	</ul>
  </div>
</div>

<div style="background-color:#ffb3d1;text-align:center;padding:10px;margin-top:0px;">© copyright IIT Dharwad</div>

</body>
</html>
