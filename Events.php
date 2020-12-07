<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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
	  height:500px;
	  padding:15px;
	  margin-bottom:0px;
	  text-align:center;
	}
	.bar{
		background-color: #b3cccc"
		width:100%;
		height: 50px;
		padding:10px;
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
	table {
	  width:100%;
	}
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	}
	th, td {
	  padding: 15px;
	  text-align: middle;
	}
	#t01 tr:nth-child(even) {
	  background-color: #eee;
	}
	#t01 tr:nth-child(odd) {
	 background-color: #fff;
	}
	#t01 th {
	  background-color: black;
	  color: white;
	}
	#Quick-links
	{
		height:50px;
	  padding: 5px;
	  text-align: center;
	  background-color: #eee;
	  border: solid 1px #c3c3c3;
	}
	#links
	{
		padding: 50px;
		display: none;
	}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
  input[type=submit]{
  background-color: #80ff80;
  border: none;
  text-decoration: none;
  margin: 4px 2px;
}
 input[type=submit]:hover{
		background-color: #eee;
	}
}
}
</style>
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
<div style="text-align:center";><h1>INTER IIT TOURNAMENT</h1></div>
<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <img class = "center"src = "images.jpg" width = "100%" height = "200px">
</div>
<div class = "bar">
	<form action = "Home.php" method = "POST"><input type="submit"name="home" value="Home" style="margin-left:300px;float:left"></form>
	<form action = "Events.php" method = "POST"><input type="submit"name="events"value="Events"style="margin-left:30px;float:left"></form>
	<form action = "lg.php" method = "POST"><input type="submit"name="accomodation" value="Acccomodation"style="margin-left:30px;float:left"></form>
	<form action = "Results.php" method = "POST"><input type="submit"name="results" value="Results"style="margin-left:30px;float:left"></form>
	<form action = "lg2.php" method = "POST"><input type="submit"name="schedule" value="Schedule"style="margin-left:30px;float:left"></form>
	<form action = "Gallery.php" method = "POST"><input type="submit"name="gallery" value="Gallery"style="margin-left:30px;float:left"></form>   
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
    <table id="t01">
		<tr>
			<th>S.no</th>
			<th>Sport</th> 
			<th>Grounds where played</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Athletics</td>
			<td>G-1</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Badminton</td>
			<td>G-2</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Cricket</td>
			<td>G-3,G-4</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Foot-Ball</td>
			<td>G-1,G-5</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Hockey</td>
			<td>G-6,G-7</td>
		</tr>
		<tr>
			<td>6</td>
			<td>March Past</td>
			<td>G-1</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Swimming</td>
			<td>Near G-2</td>
		</tr>
		<tr>
			<td>8</td>
			<td>Volley-Ball</td>
			<td>G-2</td>
		</tr>
		<tr>
			<td>9</td>
			<td>Weight Lifting</td>
			<td>G-1</td>
		</tr>
	</table>
  </div>

  <div class="right">
    <h2>WELCOME</h2>
	<ul>
	<li>For every event supporters can be allowed</li>
    <li>Please check once your respective sport and grounds alloted to them breifly</li>
	</ul>
  </div>
</div>

<div style="background-color:#ffb3d1;text-align:center;padding:10px;margin-top:0px;">© copyright IIT Dharwad</div>

</body>
</html>
