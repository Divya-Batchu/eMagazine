<?php
	$d=$e=$tg=$t=$v="";
	$d=$_POST['edate'];
	$e=$_POST['ename'];
	$tg=$_POST['targyear'];
	$t=$_POST['time'];
	$v=$_POST['venue'];
	$con=mysqli_connect("localhost","root","","charan");
	if(!$con)
	{
		die("Connection failed:".mysqli_connect_error());
	}
	$re="";
	$ch="INSERT INTO pceventslist(Date,Event,Target,Time,Venue)VALUES('".$d."','".$e."','".$tg."','".$t."','".$v."')";
	if(mysqli_query($con,$ch))
	{
		echo "<html>";
		echo "<body>";
		echo "<h3 align='center'>Succesfully Stored</h3>";
		echo "<br><a href='events.php' style='font-size:20px;' target='_parent'> View Events</a>";
		echo "</body>";
		echo "</html>";
	}
	?>