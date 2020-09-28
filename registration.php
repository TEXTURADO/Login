<?php
include "connection.php"

?>

<!DOCTYPE html>
<html>
<head>
	<title>registration form a website</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
<nav>

	<div class="header">
		<ul>
			<li>Home</li>
             			<li>Service</li>
			<li>Contact</li>
						<li>About</li>
		</ul>

</nav>

	<div class="container">
	<div class="box"><h2>REGISTRATION<h2> </div><br>
<form method="POST" action="#">
<div>
	<b>FIRSTNAME</b>
	<input type="text" placeholder="FIRSTNAME" name="firstname" >   
	<b>LASTNAME</b>
	<input type="text" placeholder="LASTNAME" name="lastname" >
</div><br>
<div>
	<b>EMAIL</b>
	<input type="text" placeholder="EMAIL" name="email">
    <b>TEL-NUM</b>
    <input type="text" placeholder="PHONENUMBER" name="tel_num">
</div><br>
<div>
	<b>GENDER</b>
	<input type="radio" name="gender" value="male" checked="checked"/>MALE
    <input type="radio"name="gender" value="female" checked="checked"/>FEMALE

____

<b>CITY_____</b>

	<select type="text" name="option">
      
		<option value="ACCRA">ACCRA</option>
		<option value="TAKORADI">TAKORADI</option>
	</select>
</div><br> 
<div>
	<b>USERNAME</b>
	<input type="text" placeholder="USERNAME" name="username">
    <b>PASSWORD</b>
    <input type="text" placeholder="PASSWORD" name="password">
</div><br>
<div>
	<b>RE-ENTER</b>
	<input type="text" placeholder="PASSWORD" name="re_enter">
    <b>DEPARTMENT</b>
    <input type="text" placeholder="DEPARTMENT" name="department">
</div>
<div>
	<button input type="submit" name="submit" value="signup">submit</button>
</div>
<p>Aiready a member?<a href="login.php">log in</a></p>
</form>
</div>
<?php
if(isset($_POST['submit']))
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $tel_num=$_POST['tel_num'];
        $gender=$_POST['gender'];
         
        $city=$_POST['option'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $re_enter=$_POST['re_enter'];
        $department=$_POST['department'];

if($password===$re_enter){

$sql="INSERT INTO register(firstname,lastname,email,tel_num,gender,city,username,password,re_enter,department) VALUES('$firstname','$lastname','$email','$tel_num','$gender','$city','$username','$password','$re_enter','$department')";
$result=mysqli_query($db,$sql);
if($result){
	?>
<script type="text/javascript">
	alert("registration was successful,you are a member");
</script>	
<?php
}
else
{
?>
<script type="text/javascript">
	alert("you could not register,try again");
</script>	


<?php
  } 
}
else
{
?>
<script type="text/javascript">
	alert("password do not match");
</script>	
<?php
}

}

?>
</body>
</html>