<html>
<head>
    <meta charset="UTF-8">
    <title> INTER IIT TOURNAMENT </title>
    <style>
         body 
		{
         background-color:#ccccff;       
         margin: 0;
         padding: 0;
         font-family: Helvetica, Arial, sans-serif;
                
		}
		input [type=text],select
{
	height:30px;
	font-size:100%;
	border-radius:5px;
	padding-bottom: 3px;
	padding-left: 3px;
	margin-top:10px;
	border:1px solid black;
}
		input[type=submit] {
		  background-color: #80ff80;
		  border: none;
		  text-decoration: none;
		  margin-top:10px;
		
		}
		input[type=submit]:hover
		{
		  background-color: #eee;
		}
		label{ 
		font-size:medium;
		float :left;
		}
		#wrapper{
			width:300px;
			height:500px;
			margin:0 auto;
			border:1px solid black;
		}
		.clear 
    {        
        clear:both;         
    }
	.col-25 {
  font-size:medium;
  float: left;
  width: 40%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 60%;
  font-size:medium;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
</head>
    <body>
	<h1 style="text-align: center"> INTER IIT TOURNAMENT </h1>
	<div id="wrapper">
        <form action='p2.php' method='POST'>
		<div class="row">
           <div class = "col-25"> <label for="user" style="font-size:130%;"><b>Username</b></label></div>
           <div class = "col-75"><input type="text" name="user" placeholder="username" style="padding-left:10px;width: 180px; height: 30px; font-size: medium;border-radius:5px;"></div>
		</div>
		<div class="row">
            <div class = "col-25"><label for="pass"style="font-size:130%;"> <b> Password </b></label></div>
            <div class = "col-75"><input type="password" name="pass"placeholder="password"style="padding-left:10px;width: 180px; height: 30px; font-size: medium;border-radius:5px;"></div>
		</div>
                <input type="submit" value="Login" style="width: 300px; height: 30px; font-size: medium;border-radius:5px;"> 
        </form>
	</div>
    </body>
</html>