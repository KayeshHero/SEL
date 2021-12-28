<?php

	$name = $_GET["NAME"];

	$address = $_GET["ADDRESS"];

	$phone = $_GET["PHONE"];

	$person = $_GET["PERSON"];

	$no_of_days = $_GET["DAYS"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO adventure VALUES ( '', '$name', '$address', '$phone', '$person', '$no_of_days' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Name = $name <br> Adress = $address <br> Phone = $phone <br> Person = $person <br> Days = $no_of_days";



	echo "<p><a href=read.php>READ all records</a>";

?>