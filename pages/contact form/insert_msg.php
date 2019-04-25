<?php
		
	include('../database_connection.php');
		
	$sql="INSERT INTO message (fname, femail, fmsg)

	VALUES

	('$_POST[fname]','$_POST[femail]','$_POST[fmsg]')";

       

	/*if (!mysql_query($sql,$con))

		{

			die('Error: ' . mysql_error());

		}
	*/
	echo "1 record added";

       

	
?>