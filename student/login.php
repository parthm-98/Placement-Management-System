<?php include '../db.php'; ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Student Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
		<!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
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
	          <h1>Student Login</h1>
	        </header>
	        <form  action="login.php" class="templatemo-login-form" method="POST">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" class="form-control" placeholder="SAP ID" name="sapid">
		          	</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		              	<input type="password" class="form-control" placeholder="******" name="password">
		          	</div>
	        	</div>
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="register.php" class="blue-text">Sign up now!</a></strong></p>
		</div>
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<!-- <p>Can't Access Account? <strong><a href="Forgot Password.php" class="blue-text">Reset Password!</a></strong></p> -->
		</div>
		<!--Footer-->
		<?php include 'footer.php'; ?>
	</body>
</html>




<?php



if(isset($_POST['sapid']) && isset($_POST['password'])){

	$sapid=trim($_POST['sapid']);
	$the_password=trim($_POST['password']);
	// $email=mysqli_real_escape_string($connection,$email);
	// $the_password=mysqli_real_escape_string($connection,$password);
	$query="SELECT * FROM student WHERE sapid='{$sapid}'";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("LOGIN FAILED".mysqli_error($connection));
	}


	while($row=mysqli_fetch_assoc($result)){

		$db_password=$row['password'];
		$db_sapid=$row['sapid'];
		$db_name=$row['name'];
		echo $db_password;

	}

	// $hash_format="$2y$10$";
	// $salt="chintanparthpujandjsce";
	// $hash_salt=$hash_format.$salt;
	// $encrypt_password=crypt($the_password,$hash_salt);



		$password=crypt($the_password,$db_password);
	 	if($sapid === $db_sapid && $db_password===$password){

					echo 'verified user';
					$_SESSION['name']=$db_name;
					$_SESSION['sapid']=$db_sapid;
					header("Location:./hello.php");


		}


		}


 ?>
