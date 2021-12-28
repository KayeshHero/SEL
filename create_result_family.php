<?php

	$name = $_GET["NAME"];

	$address = $_GET["ADDRESS"];

	$phone = $_GET["PHONE"];

	$children = $_GET["CHILDREN"];

	$adults = $_GET["ADULTS"];

	$no_of_days = $_GET["DAYS"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO family VALUES ( '', '$name', '$address', '$phone', '$children', '$adults', '$no_of_days' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Name = $name <br> Adress = $address <br> Phone = $phone <br> Children = $children <br> Adults = $adults <br> Days = $no_of_days";



	echo "<p><a href=read.php>READ all records</a>";

?>