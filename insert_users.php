<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
if(!empty($firstname) ||!empty($lastname) || !empty($password)|| !empty($email) ||
!empty($mobile) ||!empty($address) || !empty($gender) ||
!empty($dob) ){
	#code
	$con=new mysqli("localhost","root","","emagzine");
	if(mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else {
	if($email != "") {
    $result = mysqli_query($con,"SELECT email FROM userdetails where email='".$email."'");
    $num_rows = mysqli_num_rows($result);
    if($num_rows >= 1){
        echo "email exist";
    }else{
		
		$con->query("INSERT into userdetails (firstname,lastname,password,email,mobile,address,gender,dob,country) 
		values('".$firstname."','".$lastname."','".$password."','".$email."','".$mobile."','".$address."','".$gender."','".$dob."')");	
			header('Location:index.html');
		}
	
		$con->close();
	}
	}
}
else
{
	echo "All fields are required";
}

?>