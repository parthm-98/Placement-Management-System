<?php session_start(); ?>
<?php include '../db.php'; ?>




s<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome."," . "<br>".$_SESSION['name']. "</h1>";
		 echo "<br>";

		  ?>
        </header>
        <!-- <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div> -->
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <!-- <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term"> -->
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
          <ul>
         <ul>
            <li><a href="hello.php" ><i class="fa fa-fw"></i>Dashboard</a></li>
            <li><a href="clist.php" ><i class="fa  fa-fw"></i>Companies</a></li>
            <!-- <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>View Students</a></li> -->
            <li><a href="applied_comp.php"  class="active"><i class="fa  fa-fw"></i>Applied Companies</a></li>
            <li><a href="s_eligibility.php"><i class="fa  fa-fw"></i>Students Eligibility</a></li>
            <li><a href="logout.php"><i class="fa  fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <!-- <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
               <li><a href="../../Homepage/index.php">Home CIT-PMS</a></li>
                <li><a href="../../Drives/index.php">Drives Home</a></li>
                <li><a href="Notif.php">Notification</a></li>
                <li><a href="Change Password.php">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div> -->

        <div class="templatemo-content-container">

          <div class="templatemo-content-widget no-padding">
		  	<a href="bgo.php" class="templatemo-blue-button">Companies list</a>
            <div class="panel panel-default table-responsive">


			  <!-- <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
				  <td><a   class="white-text templatemo-sort-by">Approval Date</a></td>
                    <td><a   class="white-text templatemo-sort-by">First Name</a></td>
                    <td><a   class="white-text templatemo-sort-by">Last Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">USN </a></td>
                    <td><a class="white-text templatemo-sort-by">Mobile  </a></td>
					   <td><a  class="white-text templatemo-sort-by">Email </a></td>
                       <td><a class="white-text templatemo-sort-by">DOB  </a></td>
   <td><a   class="white-text templatemo-sort-by">Sem </a></td>
   <td><a class="white-text templatemo-sort-by">Branch </a></td>
   <td><a  class="white-text templatemo-sort-by">SSLC </td>
   <td><a  class="white-text templatemo-sort-by">PU/Dip </a></td>
			      <td><a  class="white-text templatemo-sort-by">BE </a></td>
			      <td><a class="white-text templatemo-sort-by">Backlogs </span></a></td>
				     <td><a   class="white-text templatemo-sort-by">History Of Backlogs </span></a></td>
				     <td><a  class="white-text templatemo-sort-by">Detain Years </a></td>

				  </thead>
			   </tr>




                </tbody>
              </table> -->



              <?php


                  $sapid=$_SESSION['sapid'];

                  $query="SELECT * FROM applied_comp WHERE sapid={$sapid}";
                  $select_all_posts_query=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($select_all_posts_query)){

                                  $cc_id=$row['c_id'];
                                  $mquery="SELECT * FROM companies WHERE c_id={$cc_id}";
                                  $select_all_query=mysqli_query($connection,$mquery);

                                  while($row=mysqli_fetch_assoc($select_all_query)){

?>
                            <div class="panel panel-default table-responsive" style="border:2px solid cyan;padding:10px;margin:10px;box-shadow:3px 3px">


                                    <h1 style="text-decoration:underline"><b></b><?php echo $row['name'] ?></h1>
                                    <p><b>Email:</b><?php echo $row['email'] ?></p>
                                    <p><b>Contact:</b><?php echo $row['contact'] ?></p>

                                    <p><b>Intake:</b><?php echo $row['intake'] ?></p>
                                    <p><b>Company Id:</b><?php echo $cc_id ?></p>
                                    <p><b>Job type:</b><?php echo $row['type'] ?></p>


                                  </div>



                <?php  }  }
?>





			  </div>
			  </div>
			  </div>



        </div>
      </div>
    </div>
  </body>
</html>
