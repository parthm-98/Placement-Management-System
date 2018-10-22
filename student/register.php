<?php include '../db.php'; ?>

<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$password=trim($_POST['password']);
$email=trim($_POST['email']);
$sapid=trim($_POST['sapid']);
$contact=trim($_POST['contact']);
$dept=trim($_POST['dept']);
$cgpa=trim($_POST['cgpa']);


$error=[

'name'=>'',
'email'=>'',
'password'=>'',
'sapid'=>'',
'contact'=>'',
'dept'=>'',
'cgpa'=>'',



];


if($name=='')	{
	$error['username']="Username is Empty";
}
if($password=='')	{
	$error['password']="Password is Empty";
}
if($email=='')	{
	$error['email']="Email is Empty";
}
if($sapid=='')	{
	$error['sapid']="SAP ID is Empty";
}
if($contact=='')	{
	$error['contact']="Contact is Empty";
}
if($dept=='')	{
	$error['dept']="Department is Empty";
}
if($cgpa=='')	{
	$error['cgpa']="CGPA is Empty";
}




foreach ($error as $key => $value) {

if(empty($value)){


	unset($error[$key]);


}

}


if(!empty($error)){


?>
<script>
	alert('Incomplete Credentials');
</script>
<?php


}else{


	$cquery="SELECT * FROM student WHERE sapid={$sapid}";
	$cresult=mysqli_query($connection,$cquery);
	if(mysqli_num_rows($cresult)==0){

		$the_password=crypt($password,'123abc');
		$query="INSERT INTO student(name,email,contact,password,cgpa,sapid,dept) VALUES('{$name}','{$email}','{$contact}','{$the_password}','{$cgpa}','{$sapid}','{$dept}')";
		$result=mysqli_query($connection,$query);
		header("Location:./login.php");

		if(!$result){

				die('Query Failed '.mysqli_error($connection));
			}

  }else{
		?>
		<script>
			alert('SAP ID already Registered!!');

		</script>

		<?php
	}


}

}




?>














<!DOCTYPE html>
<html lang="en">
	<head>
		<!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Student Register</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
		<!-- Footer -->
        <link type="text/css" rel="stylesheet" href="../css/style.css">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">

		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Student Register</h1>
	        </header>
	        <form method="POST" class="templatemo-login-form" action="register.php">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" name="name" class="form-control" placeholder="Name" >
		          	</div>
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon">@</div>
		              	<input type="email" name="email" class="form-control" placeholder="Email" >
		          	</div>
	        	</div>

				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">#</div>
								<input type="text" name="sapid" class="form-control" placeholder="SAP ID" >
						</div>
	       </div>

				 <div class="form-group">
 					<div class="input-group">
 						<div class="input-group-addon">%</div>
 								<input type="text" name="cgpa" class="form-control" placeholder="CGPA" >
 						</div>
 	       </div>
				 <!-- <div class="form-group">
 					<div class="input-group">
 						<div class="input-group-addon">D</div>
 								<input type="text" name="dept" class="form-control" placeholder="Department" >
 						</div>
 	       </div> -->




				 <div class="form-group">
 					<div class="input-group">
 						<div class="input-group-addon"><i class="fa fa-phone fa-fw"></i></div>
 								<input type="text" name="contact" class="form-control" placeholder="contact" >
 						</div>
 	       </div>

				 <div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
									<input type="password" name="password" class="form-control" placeholder="******" >
							</div>
					</div>


					<div class="form-group">
					<label class="control-label templatemo-block">Department</label>
					<select class="form-control" name="dept">
						<!-- <option value="select">dept</option> -->
						<option value="Computer">Computer</option>
						<option value="IT">IT</option>
						
						<option value="Mechanical">Mechanical</option>
						<option value="EXTC">EXTC</option>
						<option value="Chemical">Chemical</option>
					</select>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="templatemo-blue-button width-100">Register</button>
				</div>
	        </form>
		</div>

		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Have an Account? <strong><a href="login.php" class="blue-text">Sign in here!</a></strong></p>
		</div>
		<!--footer-->
	<?php include 'footer.php'; ?>
	</body>
</html>
