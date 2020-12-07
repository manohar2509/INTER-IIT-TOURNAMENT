<html>
<head>
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
</style>
</head>
	<h1 style="text-align: center"> INTER IIT TOURNAMENT </h1>
<?php
$username = $_POST['user'];
$password = $_POST['pass']; 
if ($username && $password) 
{
    if ($username == 'eval' && $password == 'eva')
    {   
		
        header('Location: Home.php');
        ?>
        <p style="text-align: center;"> <?php echo "Login Successful"; ?> <br/> <br/>
            <form action="Home.php" method="POST" style="text-align: center;">

                <input type="submit" value="Go To Main Website" name="from_other"
                    style="height: 30px; font-size: medium;"> 

            </form>
        </p>
        <?php
    }
    else
    {

        ?>
        <p style="text-align: center;"> <?php echo "Password or Username Invalid"; ?> <br/> <br/>
            <form action="login-page.php" method="POST" style="text-align: center;">
                <input type="submit" value="Click here to go back to Login page" 
                    style="height: 30px; font-size: medium;"> 

            </form>
        </p>
        <?php
    }
}
else
{
    ?>
        <p style="text-align: center;"> <?php echo "Please enter username and password"; ?> <br/> <br/>
            <form action="login-page.php" method="POST" style="text-align: center;">
                <input type="submit" value="Click here to go back to Login page" 
                    style="height: 30px; font-size: medium;text-align:center;"> 
            
            </form>
        </p>
        <?php
}
?>
</html>