<?php


    $dept=$_SESSION['dept'];
    $query="SELECT * FROM student WHERE dept={$dept}";
    $select=mysqli_query($connection,$query);
      while($row=mysqli_fetch_assoc($select)){

                    $sapid=$row['sapid'];

                    $mquery="SELECT * FROM applied_comp WHERE sapid={$sapid}";
                    $select_all_query=mysqli_query($connection,$mquery);

                    while($roww=mysqli_fetch_assoc($select_all_query)){


                        $c_id=$roww['c_id'];

                        $dquery="SELECT name FROM companies WHERE c_id={$c_id}";
                        $exc=mysqli_query($connection,$dquery);
                        $string=$string.",".$exc;





?>

                      <p>Email:<?php echo $row['email'] ?></p>
                      <p>Contact:<?php echo $row['contact'] ?></p>
                      <p>Name:<?php echo $row['name'] ?></p>
                      <p>CGPA:<?php echo $row['cgpa'] ?></p>
                      <p>SAP ID:<?php echo $sapid ?></p>
                      <p>Applied Companies:<?php echo $string ?></p>
                      <a  href=app_students.php?sapid=<?php echo $sapid; ?> ><button type="button"  name="reject">Reject</button></a>



  <?php  }


  if(isset($_GET['sapid'])){

      $id=$_GET['sapid'];


      $cquery="DELETE FROM applied_comp WHERE sapid={$id} AND c_id={$c_id}";
      $cresult=mysqli_query($connection,$cquery);
      header("Location:app_students.php");
        if(!$cresult){
          die("Deletion Failed ".mysqli_error($connection));
        }

      ?>


    <?php

 }}
?>
