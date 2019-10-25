<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Magazine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <style>
  .carousel-inner img {
  -webkit-filter: grayscale(90%);
  filter: grayscale(90%); /* make all photos black and white */
  width: 100%; /* Set width to 100% */
  margin: auto;
  height:20px;
}

.logo-small {
  color: #f4511e;
  font-size: 20px;
}

.btn:hover{
background-color:white;
color:#f4511e
}

.btn{
background-color:#f4511e;
}
.carousel-caption h3 {
  color: #ffffff !important;
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

.carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #f4511e;
}

.carousel-indicators li {
  border-color: #f4511e;
}

.carousel-indicators li.active {
  background-color: #f4511e;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
}
  </style>
  
  
  
  </head>





<body>

<nav class="navbar navbar-inverse">
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
      
    
     
       <li><a href=""><b>eMAGAZINE</b></a></li>
    </ul>

   

    <ul class="nav navbar-nav navbar-right">
      <li><a href="contactus.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact us</a></li>
      
    </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker logo-small"></span> Tiruapti,INDIA</p>
      <p><span class="glyphicon glyphicon-phone logo-small"></span> +91 9000650004</p>
      <p><span class="glyphicon glyphicon-envelope logo-small"></span><a href="mailto:divyabatchu611@gmail.com"> divyabatchu611@gmail.com</a></p>
    </div>
	<form name="contactform" method="post" action="mail.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
  </div>
</div>

</div>


<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"Opportunities are usually disguise as hardwork,so most people don't recognise them."<br><span style="font-style:normal;">Ann Landers</span></h4>
    </div>
    <div class="item">
      <h4>"It is very easy to defeat someone, but it is very hard to someone!!"<br><span style="font-style:normal;">-A.P.J. Abdul Kalam</span></h4>
    </div>
    <div class="item">
      <h4>"It is very easy to defeat someone, but it is very hard to someone!!"<br><span style="font-style:normal;">Chandler Bing, Actor</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>
