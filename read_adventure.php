<?php	require_once('db_connect.php');	$connect = mysqli_connect( HOST, USER, PASS, DB )		or die("Can not connect");	$results = mysqli_query( $connect, "SELECT * FROM adventure" )		or die("Can not execute query");	echo "<table border> \n";	echo "<th>ID</th> <th>NAME</th> <th>ADDRESS</th> <th>PHONE</th> <th>PERSON</th> <th>DAYS</th> <th>Delete</th> <th>Update</th> \n";	while( $rows = mysqli_fetch_array( $results ) ) {		extract( $rows );		echo "<tr>";		echo "<td> $ID </td>";		echo "<td> $NAME </td>";		echo "<td> $ADDRESS </td>";		echo "<td> $PHONE </td>";		echo "<td> $PERSON </td>";		echo "<td> $DAYS </td>";		echo "<td> <a href = 'delete.php?id=$ID'> Delete </a> </td>";		echo "<td> <a href = 'update_input.php?id=$ID'> Update </a> </td>";		echo "</tr> \n";	}	echo "</table> \n";	echo "<p><a href=create_input.php>CREATE a new record</a>";?>