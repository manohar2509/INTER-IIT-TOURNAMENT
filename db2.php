<html>
<?php
$host="localhost"; //hostname
$username="root"; //username
$password=""; //password
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
$result1 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  madras");
$result2 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  delhi");
$result3 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  bombay");
$result4 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  kanpur");
$result5 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  kharagpur");
$result6 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  roorkee");
$result7 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  guwahati");
$result8 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  hyderabad");
$result9 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  indore");
$result10 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  varanasi");
$result11 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  dhanbad");
$result12 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  bhuvaneswar");
$result13 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  gandhinagar");
$result14 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  ropar");
$result15 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  patna");
$result16 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  mandi");
$result17 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  jhodpur");
$result18 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  tirupati");
$result19 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  bhilai");
$result20 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  goa");
$result21 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  jammu");
$result22 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  dharwad");
$result23 = mysqli_query($con,"CREATE DATABASE IF NOT EXISTS  palakkad");
		$sql = "CREATE TABLE IF NOT EXISTS smen( ".
            "Id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,".
			"athletics INT NOT NULL,".
            "badminton INT NOT NULL,".
			"cricket INT NOT NULL,".
			"football INT NOT NULL,".
			"hockey INT NOT NULL,".
            "marchpast INT NOT NULL,".
			"swimming INT NOT NULL,".
			"volleyball INT NOT NULL,".
			"weightlifting INT NOT NULL,".
            "t INT NOT NULL,".
			"p INT NOT NULL)";
		
         mysqli_select_db( $con,'madras' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table1: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'delhi' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bombay' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'kanpur' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'kharagpur' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'roorkee' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'guwahati' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'hyderabad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'indore' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'varanasi' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'dhanbad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bhuvaneswar' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'gandhinagar' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'ropar' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'patna' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'mandi' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'jhodpur' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'tirupati' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bhilai' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'goa' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'jammu' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'dharwad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'palakkad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 		$sql = "CREATE TABLE IF NOT EXISTS swomen( ".
            "Id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,".
			"athletics INT NOT NULL,".
            "badminton INT NOT NULL,".
			"cricket INT NOT NULL,".
			"football INT NOT NULL,".
			"hockey INT NOT NULL,".
            "marchpast INT NOT NULL,".
			"swimming INT NOT NULL,".
			"volleyball INT NOT NULL,".
			"weightlifting INT NOT NULL,".
            "t INT NOT NULL,".
			"p INT NOT NULL)";
		
         mysqli_select_db( $con,'madras' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table1: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'delhi' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bombay' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'kanpur' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'kharagpur' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'roorkee' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'guwahati' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'hyderabad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'indore' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'varanasi' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'dhanbad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bhuvaneswar' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'gandhinagar' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'ropar' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'patna' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'mandi' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'jhodpur' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'tirupati' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bhilai' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'goa' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'jammu' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'dharwad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'palakkad' );
         $retval = mysqli_query( $con,$sql );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_close($con);
		 echo "Suucefully Completed";
		 header('Location: db3.php');
?>
</html>