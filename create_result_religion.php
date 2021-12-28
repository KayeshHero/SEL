<?php

	$name = $_GET["NAME"];

	$address = $_GET["ADDRESS"];

	$phone = $_GET["PHONE"];

	$religion = $_GET["RELIGION"];

	$days = $_GET["DAYS"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO religion VALUES ( '', '$name', '$address', '$phone', '$religion', '$days' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Name = $name <br> Adress = $address <br> Phone = $phone <br> Religion = $religion <br> Days = $days";



	echo "<p><a href=read.php>READ all records</a>";

?>