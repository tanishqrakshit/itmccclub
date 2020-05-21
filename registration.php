<?php


$conn=mysqli_connect
('localhost','id4379397_gutssy','gutssy','id4379397_icclub');
if(isset($_POST['first']))
{
	$first=$_POST['first'];
	$last=$_POST['last'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$Mobile=$_POST['mobile'];
$query="insert into registration values
('$first','$last','$user','$pass','$mobile')";


$res=mysqli_query($conn,$query);
if($res>0)
{	echo "<b>Registration Succesfull </b>";

header('location:login.php');
}
 
 else
 echo"<br>Please fill all the fields</br>";

}

?>






<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
  
  
      <style>
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -15px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-size: cover;
    background-image: url("cricket.jpg");
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -15px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(40% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
      <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Register<span>&nbsp Here</span></div>
		</div>
		<br>
		<form name="form1" method="POST">
		<div class="login">
				<input type="text" placeholder="First Name" name="first" required ><br>
				<input type="text" placeholder="Last Name" name="last" required ><br>
				<input type="text" placeholder="Username" name="user" required><br>
				<input type="password" placeholder="Password" name="pass" required><br>
				<input type="text" placeholder="Mobile Number" name="mobile" required><br><br>

			<button>Submit</button><br><br><a href="login.php"><h2>Login</h2></a> <a href="index.html"><h2>Home</h2></a>
		</div>
	
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</form>
  

</body>

</html>
