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
           <li><a href="hello.php"  ><i class="fa fa-fw"></i>Dashboard</a></li>
           <!-- <li><a href="Placement Drives.php"><i class="fa  fa-fw"></i>Companies</a></li> -->
           <!-- <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>View Students</a></li> -->
           <li><a href="app_students.php"><i class="fa  fa-fw"></i>Applied Students</a></li>
           <li><a href=# class="active"><i class="fa  fa-fw"></i>Company Eligibility</a></li>
           <li><a href="analysis.php"><i class="fa  fa-fw"></i>analysis</a></li>
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
		  	<a href="bgo.php" class="templatemo-blue-button">eligibility criteria</a>
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

              <div class="panel panel-default table-responsive" style="border:2px solid cyan;padding:10px;margin:10px;box-shadow:3px 3px">



<p>1.Registered companies DJSCE are expected to submit the form duly by 19th December.
</p>
<P>2.Sponsored companies, i.e. companies under QIP or those who have signed any bond  at the DJSCE must produce No Objection Certificate from the concerned authorities/ agencies prior to registering with SPO.

<P>3.Students can participate in/register for placements only once during their stay.


<P>4.Every company should be ISO Registered</p>
<P>5.Company should offer minimum annual package of INR.400000



<P>6.The last date to de-register from placements is September 25th, 2019. You need to drop a mail to sposecy@iitk.ac.in stating your wtihdrawl. Also, you have to preserve the fee receipt so that you do not have to pay the registration fees when you appear for placements next year.</P>

<P>7.Companies who does not select interns in academic year 2017-18, can either sit for Internships or placements for the session 2018-19.</P>


              </div>



			  </div>
			  </div>
			  </div>



        </div>
      </div>
    </div>
  </body>
</html>
