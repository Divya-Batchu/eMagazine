<?php
setCookie("Username","admin",time()+ 50 * 60,"/","",0);
setCookie("Password","admin",time()+ 50 * 60,"/","",0); ?>
<html> <head> <title>Admin Login</title> </head>
<body style="background-image:url(img2.jpg);align="center"> 
<form action="check.php" method="post">
<table width="20%" bgcolor="orange" align="center">

<tr>
<td colspan=2><center><font size=4><b>Login Page</b></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="userid"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="pwd"></td>
</tr>
<tr><td align="center"><input type="submit"
value="Sign-In"></td></tr>
</form>
</table>
</div>
</body>
</html>