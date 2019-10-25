<html>
<head>
<title>Create Event</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(img2.jpg);color:white;"bgcolor="cyan" >
<div class="container-fluid" style="margin-left:400px;border:2px 
dashed blue;width:600px;height:425px;float:left;">
<form action="store.php" method="post">
<table align="center"width="50%" border="0"cellspacing="3"cellpadding="15">
<h1 align="center"><i>Fill Credentials to Raise event</i></h1><hr>
<tr>
<td align="center">Event date</td>
<td style="color:black;"align="center"><input type="date" name="edate" placeholder="yyyy-mm-dd" required></td>
</tr>
<tr>
<td align="center">Event Name</td>
<td align="center"><input type="text" name="ename" required></td>
</tr>
<tr>
<td align="center">Target Year</td>
<td align="center"><input type="text" name="targyear" placeholder="I/II/III/IV year" required></td>
</tr>
<tr>
<td align="center">Time</td>
<td style="color:black;"align="center"><input type="time" name="time" required></td>
</tr>
<tr>
<td align="center">Venue</td>
<td align="center"><input type="text" name="venue" required>
</td>
</tr>
<tr>
<td style="color:black;"align="center"><input type="reset"value="RESET">
</td>
<td style="color:black;"align="center"><input type="submit" name="submit" value="SUBMIT"onClick="alert('Triggered suucessfully')"></td>
</tr>
</table>
</form>
</div>
</body>
</html>