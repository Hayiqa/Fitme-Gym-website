<html>
<head>
<title>FitMe</title>

<?php  // creating a database connection 

   $db_sid = 
   " (DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = LAPTOP-63D4ST3P)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = Hayiqa)
    )
  )";   
   $db_user = "system";   // Oracle username e.g "scott"
   $db_pass = "dudepe12";    // Password for user e.g "1234"
   $con = oci_connect($db_user,$db_pass,$db_sid); 
   
   
   session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
   $user=$_SESSION['superhero'];
?>
 
<link rel = "stylesheet" href="v.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>

<!-------------------------- Header -------------------->
<section id = "header">

<nav class="navbar navbar-light">
    <a class="navbar-brand" href="#"><img src = "logo-fit.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/register/website.php"><b>HOME</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/register/startwork.php"><b>START</b></a>
        </li> 
      </ul>
    </div>
</nav>

</section>
<!-------------------------- Welcome -------------------->
<Section id = "welcome">
 <div class = "container">
  <div class = "welcome text-center">
   <h1> Your Workout Plan</h1>
    </div>
    </div>
</section>



<form action = "exe.php" method = "post">
 <!-------------------------- About -------------------->
<section id = "report">
<br>
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 14%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<br>
<div class="row">
  <div class="column" style="background-color:#bbb;">
    <p><b>USERNAME</b></p>
<?php 

	$sql_select="select Username".
                  " from EXERCISE where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";
           

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" ."&nbsp;&nbsp;&nbsp;".  $row["USERNAME"] . "    ". "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <p><b>EXERCISE_ID</b></p>
   <?php 

	$sql_select="select EXERCISE_id".
                  " from EXERCISE where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";
           

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" ."&nbsp;". $row["EXERCISE_ID"] . "    ". "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
  <div class="column" style="background-color:#bbb;">
    <p><b>EQUIPMENT_ID</b></p>
    <?php 

	$sql_select="select equipment_id ".
                  " from EXERCISE where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
				  echo "<td>" ."&nbsp;". $row["EQUIPMENT_ID"] . "    ". "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <p><b>DURATION</b></p>
   <?php 

	$sql_select="select Duration ".
                  " from EXERCISE where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";


	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" . "&nbsp;".$row["DURATION"] ."</td>";;
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
  <div class="column" style="background-color:#bbb;">
    <p><b>MUSCLE_GROUP</b></p>
    <?php 

	$sql_select="select Muscle_group ".
                  " from EXERCISE where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" ."&nbsp;". $row["MUSCLE_GROUP"] .  "    "."</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
   <div class="column" style="background-color:#ccc;">
    <p><b>NAME</b></p>
    <?php 

	$sql_select="select name".
                  " from EXERCISE where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
				  echo "<td>" ."&nbsp;".  $row["NAME"] .  "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
   <div class="column" style="background-color:#bbb;">
    <p><b>NUTRITION_INTAKE</b></p>
    <?php 

	$sql_select="select Nutrition_intake from EXERCISE where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
				  echo "<td>" ."&nbsp;".  $row["NUTRITION_INTAKE"] . "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
</div>

</section>