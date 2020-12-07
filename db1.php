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
$sql1= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-1',
	'H-6',
	'1'
    ),
	(
	'$sport2',
	'H-1',
	'H-6',
	'2'
    ),
	(
	'$sport3',
	'H-1',
	'H-6',
	'3'
    ),
	(
	'$sport4',
	'H-1',
	'H-6',
	'4'
    ),
	(
	'$sport5',
	'H-1',
	'H-6',
	'5'
    ),
	(
	'$sport6',
	'H-1',
	'H-6',
	'6'
    ),
	(
	'$sport7',
	'H-1',
	'H-6',
	'7'
    ),
	(
	'$sport7',
	'H-1',
	'H-6',
	'8'
    )";
$sql2= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-1',
	'H-6',
	'9'
    ),
	(
	'$sport2',
	'H-1',
	'H-6',
	'10'
    ),
	(
	'$sport3',
	'H-1',
	'H-6',
	'11'
    ),
	(
	'$sport4',
	'H-1',
	'H-6',
	'12'
    ),
	(
	'$sport5',
	'H-1',
	'H-6',
	'13'
    ),
	(
	'$sport6',
	'H-1',
	'H-6',
	'14'
    ),
	(
	'$sport7',
	'H-1',
	'H-6',
	'15'
    ),
	(
	'$sport8',
	'H-1',
	'H-6',
	'16'
    )";
$sql3= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-1',
	'H-6',
	'17'
    ),
	(
	'$sport2',
	'H-1',
	'H-6',
	'18'
    ),
	(
	'$sport3',
	'H-1',
	'H-6',
	'19'
    ),
	(
	'$sport4',
	'H-1',
	'H-6',
	'20'
    ),
	(
	'$sport5',
	'H-1',
	'H-6',
	'21'
    ),
	(
	'$sport6',
	'H-1',
	'H-6',
	'22'
    ),
	(
	'$sport7',
	'H-1',
	'H-6',
	'23'
    ),
	(
	'$sport8',
	'H-1',
	'H-6',
	'24'
    )";
$sql4= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-1',
	'H-6',
	'25'
    ),
	(
	'$sport2',
	'H-1',
	'H-6',
	'26'
    ),
	(
	'$sport3',
	'H-1',
	'H-6',
	'27'
    ),
	(
	'$sport4',
	'H-1',
	'H-6',
	'28'
    ),
	(
	'$sport5',
	'H-1',
	'H-6',
	'29'
    ),
	(
	'$sport6',
	'H-1',
	'H-6',
	'30'
    ),
	(
	'$sport7',
	'H-1',
	'H-6',
	'31'
    ),
	(
	'$sport8',
	'H-1',
	'H-6',
	'32'
    )";
$sql5= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-1',
	'H-6',
	'33'
    ),
	(
	'$sport2',
	'H-1',
	'H-6',
	'34'
    ),
	(
	'$sport3',
	'H-1',
	'H-6',
	'35'
    ),
	(
	'$sport4',
	'H-1',
	'H-6',
	'36'
    ),
	(
	'$sport5',
	'H-1',
	'H-6',
	'37'
    ),
	(
	'$sport6',
	'H-1',
	'H-6',
	'38'
    ),
	(
	'$sport7',
	'H-1',
	'H-6',
	'39'
    ),
	(
	'$sport8',
	'H-1',
	'H-6',
	'40'
    )";
$sql6= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-2',
	'H-7',
	'1'
    ),
	(
	'$sport2',
	'H-2',
	'H-7',
	'2'
    ),
	(
	'$sport3',
	'H-2',
	'H-7',
	'3'
    ),
	(
	'$sport4',
	'H-2',
	'H-7',
	'4'
    ),
	(
	'$sport5',
	'H-2',
	'H-7',
	'5'
    ),
	(
	'$sport6',
	'H-2',
	'H-7',
	'6'
    ),
	(
	'$sport7',
	'H-2',
	'H-7',
	'7'
    ),
	(
	'$sport8',
	'H-2',
	'H-7',
	'8'
    )";
$sql7= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-2',
	'H-7',
	'9'
    ),
	(
	'$sport2',
	'H-2',
	'H-7',
	'10'
    ),
	(
	'$sport3',
	'H-2',
	'H-7',
	'11'
    ),
	(
	'$sport4',
	'H-2',
	'H-7',
	'12'
    ),
	(
	'$sport5',
	'H-2',
	'H-7',
	'13'
    ),
	(
	'$sport6',
	'H-2',
	'H-7',
	'14'
    ),
	(
	'$sport7',
	'H-2',
	'H-7',
	'15'
    ),
	(
	'$sport8',
	'H-2',
	'H-7',
	'16'
    )";
$sql8= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-2',
	'H-7',
	'17'
    ),
	(
	'$sport2',
	'H-2',
	'H-7',
	'18'
    ),
	(
	'$sport3',
	'H-2',
	'H-7',
	'19'
    ),
	(
	'$sport4',
	'H-2',
	'H-7',
	'20'
    ),
	(
	'$sport5',
	'H-2',
	'H-7',
	'21'
    ),
	(
	'$sport6',
	'H-2',
	'H-7',
	'22'
    ),
	(
	'$sport7',
	'H-2',
	'H-7',
	'23'
    ),
	(
	'$sport8',
	'H-2',
	'H-7',
	'24'
    )";
$sql9= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-2',
	'H-7',
	'25'
    ),
	(
	'$sport2',
	'H-2',
	'H-7',
	'26'
    ),
	(
	'$sport3',
	'H-2',
	'H-7',
	'27'
    ),
	(
	'$sport4',
	'H-2',
	'H-7',
	'28'
    ),
	(
	'$sport5',
	'H-2',
	'H-7',
	'29'
    ),
	(
	'$sport6',
	'H-2',
	'H-7',
	'30'
    ),
	(
	'$sport7',
	'H-2',
	'H-7',
	'31'
    ),
	(
	'$sport8',
	'H-2',
	'H-7',
	'32'
    )";
$sql10= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-2',
	'H-7',
	'33'
    ),
	(
	'$sport2',
	'H-2',
	'H-7',
	'34'
    ),
	(
	'$sport3',
	'H-2',
	'H-7',
	'35'
    ),
	(
	'$sport4',
	'H-2',
	'H-7',
	'36'
    ),
	(
	'$sport5',
	'H-2',
	'H-7',
	'37'
    ),
	(
	'$sport6',
	'H-2',
	'H-7',
	'38'
    ),
	(
	'$sport7',
	'H-2',
	'H-7',
	'39'
    ),
	(
	'$sport8',
	'H-2',
	'H-7',
	'40'
    )";
$sql11= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-3',
	'H-8',
	'1'
    ),
	(
	'$sport2',
	'H-3',
	'H-8',
	'2'
    ),
	(
	'$sport3',
	'H-3',
	'H-8',
	'3'
    ),
	(
	'$sport4',
	'H-3',
	'H-8',
	'4'
    ),
	(
	'$sport5',
	'H-3',
	'H-8',
	'5'
    ),
	(
	'$sport6',
	'H-3',
	'H-8',
	'6'
    ),
	(
	'$sport7',
	'H-3',
	'H-8',
	'7'
    ),
	(
	'$sport8',
	'H-3',
	'H-8',
	'8'
    )";
$sql12= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-3',
	'H-8',
	'9'
    ),
	(
	'$sport2',
	'H-3',
	'H-8',
	'10'
    ),
	(
	'$sport3',
	'H-3',
	'H-8',
	'11'
    ),
	(
	'$sport4',
	'H-3',
	'H-8',
	'12'
    ),
	(
	'$sport5',
	'H-3',
	'H-8',
	'13'
    ),
	(
	'$sport6',
	'H-3',
	'H-8',
	'14'
    ),
	(
	'$sport7',
	'H-3',
	'H-8',
	'15'
    ),
	(
	'$sport8',
	'H-3',
	'H-8',
	'16'
    )";
$sql13= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-3',
	'H-8',
	'17'
    ),
	(
	'$sport2',
	'H-3',
	'H-8',
	'18'
    ),
	(
	'$sport3',
	'H-3',
	'H-8',
	'19'
    ),
	(
	'$sport4',
	'H-3',
	'H-8',
	'20'
    ),
	(
	'$sport5',
	'H-3',
	'H-8',
	'21'
    ),
	(
	'$sport6',
	'H-3',
	'H-8',
	'22'
    ),
	(
	'$sport7',
	'H-3',
	'H-8',
	'23'
    ),
	(
	'$sport8',
	'H-3',
	'H-8',
	'24'
    )";
$sql14= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-3',
	'H-8',
	'25'
    ),
	(
	'$sport2',
	'H-3',
	'H-8',
	'26'
    ),
	(
	'$sport3',
	'H-3',
	'H-8',
	'27'
    ),
	(
	'$sport4',
	'H-3',
	'H-8',
	'28'
    ),
	(
	'$sport5',
	'H-3',
	'H-8',
	'29'
    ),
	(
	'$sport6',
	'H-3',
	'H-8',
	'30'
    ),
	(
	'$sport7',
	'H-3',
	'H-8',
	'31'
    ),
	(
	'$sport8',
	'H-3',
	'H-8',
	'32'
    )";
$sql15= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-3',
	'H-8',
	'33'
    ),
	(
	'$sport2',
	'H-3',
	'H-8',
	'34'
    ),
	(
	'$sport3',
	'H-3',
	'H-8',
	'35'
    ),
	(
	'$sport4',
	'H-3',
	'H-8',
	'36'
    ),
	(
	'$sport5',
	'H-3',
	'H-8',
	'37'
    ),
	(
	'$sport6',
	'H-3',
	'H-8',
	'38'
    ),
	(
	'$sport7',
	'H-3',
	'H-8',
	'39'
    ),
	(
	'$sport8',
	'H-3',
	'H-8',
	'40'
    )";
$sql16= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-4',
	'H-9',
	'1'
    ),
	(
	'$sport2',
	'H-4',
	'H-9',
	'2'
    ),
	(
	'$sport3',
	'H-4',
	'H-9',
	'3'
    ),
	(
	'$sport4',
	'H-4',
	'H-9',
	'4'
    ),
	(
	'$sport5',
	'H-4',
	'H-9',
	'5'
    ),
	(
	'$sport6',
	'H-4',
	'H-9',
	'6'
    ),
	(
	'$sport7',
	'H-4',
	'H-9',
	'7'
    ),
	(
	'$sport8',
	'H-4',
	'H-9',
	'8'
    )";
$sql17= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-4',
	'H-9',
	'9'
    ),
	(
	'$sport2',
	'H-4',
	'H-9',
	'10'
    ),
	(
	'$sport3',
	'H-4',
	'H-9',
	'11'
    ),
	(
	'$sport4',
	'H-4',
	'H-9',
	'12'
    ),
	(
	'$sport5',
	'H-4',
	'H-9',
	'13'
    ),
	(
	'$sport6',
	'H-4',
	'H-9',
	'14'
    ),
	(
	'$sport7',
	'H-4',
	'H-9',
	'15'
    ),
	(
	'$sport8',
	'H-4',
	'H-9',
	'16'
    )";
$sql18= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-4',
	'H-9',
	'17'
    ),
	(
	'$sport2',
	'H-4',
	'H-9',
	'18'
    ),
	(
	'$sport3',
	'H-4',
	'H-9',
	'19'
    ),
	(
	'$sport4',
	'H-4',
	'H-9',
	'20'
    ),
	(
	'$sport5',
	'H-4',
	'H-9',
	'21'
    ),
	(
	'$sport6',
	'H-4',
	'H-9',
	'22'
    ),
	(
	'$sport7',
	'H-4',
	'H-9',
	'23'
    ),
	(
	'$sport8',
	'H-4',
	'H-9',
	'24'
    )";
$sql19= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-4',
	'H-9',
	'25'
    ),
	(
	'$sport2',
	'H-4',
	'H-9',
	'26'
    ),
	(
	'$sport3',
	'H-4',
	'H-9',
	'27'
    ),
	(
	'$sport4',
	'H-4',
	'H-9',
	'28'
    ),
	(
	'$sport5',
	'H-4',
	'H-9',
	'29'
    ),
	(
	'$sport6',
	'H-4',
	'H-9',
	'30'
    ),
	(
	'$sport7',
	'H-4',
	'H-9',
	'31'
    ),
	(
	'$sport8',
	'H-4',
	'H-9',
	'32'
    )";
$sql20= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-4',
	'H-9',
	'33'
    ),
	(
	'$sport2',
	'H-4',
	'H-9',
	'34'
    ),
	(
	'$sport3',
	'H-4',
	'H-9',
	'35'
    ),
	(
	'$sport4',
	'H-4',
	'H-9',
	'36'
    ),
	(
	'$sport5',
	'H-4',
	'H-9',
	'37'
    ),
	(
	'$sport6',
	'H-4',
	'H-9',
	'38'
    ),
	(
	'$sport7',
	'H-4',
	'H-9',
	'39'
    ),
	(
	'$sport8',
	'H-4',
	'H-9',
	'40'
    )";
$sql21= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-5',
	'H-10',
	'1'
    ),
	(
	'$sport2',
	'H-5',
	'H-10',
	'2'
    ),
	(
	'$sport3',
	'H-5',
	'H-10',
	'3'
    ),
	(
	'$sport4',
	'H-5',
	'H-10',
	'4'
    ),
	(
	'$sport5',
	'H-5',
	'H-10',
	'5'
    ),
	(
	'$sport6',
	'H-5',
	'H-10',
	'6'
    ),
	(
	'$sport7',
	'H-5',
	'H-10',
	'7'
    ),
	(
	'$sport8',
	'H-5',
	'H-10',
	'8'
    )";
$sql22= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-5',
	'H-10',
	'9'
    ),
	(
	'$sport2',
	'H-5',
	'H-10',
	'10'
    ),
	(
	'$sport3',
	'H-5',
	'H-10',
	'11'
    ),
	(
	'$sport4',
	'H-5',
	'H-10',
	'12'
    ),
	(
	'$sport5',
	'H-5',
	'H-10',
	'13'
    ),
	(
	'$sport6',
	'H-5',
	'H-10',
	'14'
    ),
	(
	'$sport7',
	'H-5',
	'H-10',
	'15'
    ),
	(
	'$sport8',
	'H-5',
	'H-10',
	'16'
    )";
$sql23= "INSERT INTO accomodation". 
   " (Sport,
	HostelNo_Men,
	HostelNo_Women,
	RoomNo)".
"VALUES".
    "(
	'$sport1',
	'H-5',
	'H-10',
	'17'
    ),
	(
	'$sport2',
	'H-5',
	'H-10',
	'18'
    ),
	(
	'$sport3',
	'H-5',
	'H-10',
	'19'
    ),
	(
	'$sport4',
	'H-5',
	'H-10',
	'20'
    ),
	(
	'$sport5',
	'H-5',
	'H-10',
	'21'
    ),
	(
	'$sport6',
	'H-5',
	'H-10',
	'22'
    ),
	(
	'$sport7',
	'H-5',
	'H-10',
	'23'
    ),
	(
	'$sport8',
	'H-5',
	'H-10',
	'24'
    )";
		 mysqli_select_db( $con,'madras' );
         $retval = mysqli_query( $con,$sql1 );
         if(! $retval ) {
            die('Could not create table1: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'delhi' );
         $retval = mysqli_query( $con,$sql2 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bombay' );
         $retval = mysqli_query( $con,$sql3 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'kanpur' );
         $retval = mysqli_query( $con,$sql4 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'kharagpur' );
         $retval = mysqli_query( $con,$sql5 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'roorkee' );
         $retval = mysqli_query( $con,$sql6 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'guwahati' );
         $retval = mysqli_query( $con,$sql7 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'hyderabad' );
         $retval = mysqli_query( $con,$sql8 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'indore' );
         $retval = mysqli_query( $con,$sql9 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'varanasi' );
         $retval = mysqli_query( $con,$sql10 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'dhanbad' );
         $retval = mysqli_query( $con,$sql11 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bhuvaneswar' );
         $retval = mysqli_query( $con,$sql12 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'gandhinagar' );
         $retval = mysqli_query( $con,$sql13 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'ropar' );
         $retval = mysqli_query( $con,$sql14 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'patna' );
         $retval = mysqli_query( $con,$sql15 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'mandi' );
         $retval = mysqli_query( $con,$sql6 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'jhodpur' );
         $retval = mysqli_query( $con,$sql17 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'tirupati' );
         $retval = mysqli_query( $con,$sql18 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'bhilai' );
         $retval = mysqli_query( $con,$sql19 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'goa' );
         $retval = mysqli_query( $con,$sql20 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'jammu' );
         $retval = mysqli_query( $con,$sql21 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'dharwad' );
         $retval = mysqli_query( $con,$sql22 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_select_db( $con,'palakkad' );
         $retval = mysqli_query( $con,$sql23 );
         if(! $retval ) {
            die('Could not create table: ' . mysqli_error($con));
         }
		 mysqli_close($con);
		 echo "Suucefully Completed";
		 header('Location: db2.php');
	?>