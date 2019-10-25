<html>
<head>
<title>Events Page</title>
<style>
.b{
	color:white;
}
a:hover{
color:#f4511e;
}
</style>
</head>
<body style="background-image:url(img2.jpg);color:white;">

<marquee scrollamount="7"
direction="right"
behavior="scroll">
 EVENTS NEAR BY 
</marquee>
<br><br>
<?php 
	$con=mysqli_connect("localhost","root","","charan");
	$sql="SELECT * from pceventslist";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
echo "<table  border=1 font-size=10px align=center cellspacing='3' cellpadding='20' width=50% height=15%><tr style='font-size:22px;'><th>S.No</th><th>Date</th><th>Event</th>
<th>Target</th><th>Time</th><th>Venue</th></tr>";
$SNo=0;
while($row=$result->fetch_assoc())
{
$SNo=$SNo+1;
echo "<tr><td>".$SNo."</td.><td>".$row['Date']."</td><td>".$row['Event']."</td><td>".$row['Target']."</td><td>".$row['Time']."</td><td>".$row['Venue']."</td></tr>";
}
echo "</table>";
}
else
{
	echo "No records";
	$con->close();
}
 ?>
 </br><center><form action="login.php">
    <input type="submit" value="Add/Delete an Event" />
	<button type="submit" value="BACK TO HOME"><a href="main.html">BACK TO HOME</a></button><br><br>
	<a class="b" href="contactus.php">WANT TO REGISTER PLS CONTACT US</a>
</form></center><br>
 </body>
 </html>