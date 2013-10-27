<?php

	require_once('./config/config.php');


	//establish connection
	$con = mysqli_connect(HOST, USER, PASSWORD);

	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	//create the database
	$querry="CREATE DATABASE IF NOT EXISTS ". DBNAME;
	mysqli_query($con, $querry);
	
	//If it can't connect then, die and display a message.
	if (!$con) {
		echo "Couldn't not establish connection to the database";
	  die('Could not connect: ' . mysqli_error());
	}


	//close connection
	mysqli_close($con);

	//Load the initial data from the SQL file.
	$dbSQLLoad = new PDO('mysql:dbname='.DBNAME.';host='.HOST, USER, PASSWORD);
	$sql = file_get_contents("ll_table.sql");
	$qr = $dbSQLLoad->exec($sql);






?>