<?php
$host="localhost"; //hostname
$username="root"; //username
$password=""; //password
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
	$sport1 = "athletics";
	$sport2 = "badminton";
	$sport3 = "cricket";
	$sport4 = "football";
	$sport5 = "hockey";
	$sport6 = "swimming";
	$sport7 = "volleyball";
	$sport8 = "weightlifting";
$sql= "INSERT INTO smen". 
   " (athletics,
	badminton,
	cricket,
	football,
	hockey,
	marchpast,
	swimming,
	volleyball,
	weightlifting,
	t,
	p)".
"VALUES".
    "(
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0'
    )";
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
$sql= "INSERT INTO swomen". 
   " (athletics,
	badminton,
	cricket,
	football,
	hockey,
	marchpast,
	swimming,
	volleyball,
	weightlifting,
	t,
	p)".
"VALUES".
    "(
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0',
	'0'
    )";
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
		 header('Location: login-page.php');
?>