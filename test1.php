<!DOCTYPE html>
<html>

	<head>
		
		<link rel="stylesheet" type="text/css" href="css/timeline.css">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style>
	
	#left-nav1 {
width: 348px;
border: 1px solid #dfe0e4;
background-color: #f4511e;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
margin-top: 170px;
float: left;
margin-left:20px;
}
	
	.navbar {
  margin-bottom: 0;
  background-color: #f4511e;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
}
	
	.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: #f4511e !important;
  background-color: #fff !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}
	
	
	#right-nav {
float:right;
width:800px;

background-color:#ffffff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;

margin-top:100px;
margin-right:100px;

}

	#left-nav {
float:left;
width:200px;

background-color:#ffffff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
margin-left:20px;
margin-top:170px;


}

.post-text {
width:99%;
height:200px;
border:3px solid #f5411e;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
font-size:19px;
text-indent:5px;
}


.user-comment-name {
font-weight:bold;
font-size:20px;
color:#f4511es;
font-size:22px;
text-indent:5px;
}
	</style>
	
	</head>
	
	

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                       
      </button>
      <a class="navbar-brand" href="svet.png" target="_blank"><img src="svet.png" height="35px" width="40px" alt="SVEC"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
      <li clas="active"><a href="main.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="events.php">Upcoming Events</a></li>
        </ul>
      </li>
      <li><a href="test1.php">Newsfeed</a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
      <li><a href="">         </a></li>
     
     
       <li><a href=""><b>eMAGAZINE</b></a></li>
    </ul>

   

    <ul class="nav navbar-nav navbar-right">
      <li><a href="contactus.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact us</a></li>
      
    </ul>
    </div>
  </div>
</nav>

 <div id="left-nav">
 <img src="welcome.gif" width="280" height="300" style="position:fixed;">
 </div>
  

	<div id="right-nav" class="text-center">
			<h1 class="text-center">&nbsp;&nbsp;Update Status</h1>
	<div>
			<form method="post" enctype="multipart/form-data">
				<textarea placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
				<textarea placeholder="posted by" name="postby" class="post-text" required></textarea>
				<input type="file" name="image">
				<button class="btn-share" name="Submit" value="Log out">Share</button>
			</form>
	<?php
	//include('includes/database.php');
	$conn=mysqli_connect("localhost", "root", "","emagzine");
							
		if (!isset($_FILES['image']['tmp_name'])) {
		echo "";
		}else{
		$file=$_FILES['image']['tmp_name'];
		$image = $_FILES["image"] ["name"];
		$image_name= addslashes($_FILES['image']['name']);
		$size = $_FILES["image"] ["size"];
		$error = $_FILES["image"] ["error"];
		$postby=$_POST['postby'];
		

		if ($error > 0){
					die("Error uploading file! Code $error.");
				}else{
					if($size > 10000000) //conditions for the file
					{
					die("Format is not allowed or file size is too big!");
					}
					
				else
					{

				move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
				$location="upload/" . $_FILES["image"]["name"];
				
				$content=$_POST['content'];
				
				$check="select * from photos where location like '$location';";
				$res=mysqli_query($conn,$check);
				if($res->num_rows==0)
				{
							
				
				
				$stmt = $conn->prepare("INSERT INTO photos (location,postby,content) VALUES (?,?,?)");

				$stmt->bind_param('sss',$location,$postby,$content);

				 if (!$stmt->execute()) {
					echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
					}
				}
				//$update=mysqli_query($conn,"INSERT INTO post (user_id,post_image,content,created) VALUES ('$id','$location','$content','$time')");

				}
					
				
				
				}
		}
?>

		
			
		<br />
		

<?php
	//include("includes/database.php");
	$conn = mysqli_connect("localhost", "root", "","emagzine");
			$comment=mySQLi_query($conn,"SELECT * from photos") or die(mySQLi_error($conn));
			while($row=mySQLi_fetch_array($comment)){	
			
?>			

				<div class="post-text text-center">
				<img height="160" width="300" src="<?php echo $row['location']; ?>">
				&nbsp;&nbsp;Posted by --  <?php echo $row['postby']?><br>
			<p style="border:1px dotted black;"><strong>CAPTION --</strong> <?php echo $row['content']?>
			
			
			</div>
			<br />

<?php
}
?>
</body>
</html>