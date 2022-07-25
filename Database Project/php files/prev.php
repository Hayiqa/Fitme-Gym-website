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
 
<link rel = "stylesheet" href="prev.css">
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
          <a class="nav-link" href="http://localhost/register/work.php"><b>WORKOUT PLAN</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/register/view.php"><b>YOUR WORKOUT PLAN</b></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="http://localhost/register/prev.php"><b>PREVIOUS LOGS</b></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="http://localhost/register/sug.php"><b>SUGGESTIONS</b></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="http://localhost/register/in.php"><b>MUSCLE GAIN</b></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="http://localhost/register/we.php"><b>WEIGHT LOSS</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/register/login.php"><b>LOG OUT</b></a>
        </li>
      </ul>
    </div>
</nav>

</section>
<!-------------------------- Welcome -------------------->
<Section id = "welcome">
 <div class = "container">
  <div class = "welcome text-center">
   <h1> Your Previous Logs</h1>
    </div>
    </div>
</section>



<form action = "exe.php" method = "post">
 <!-------------------------- About -------------------->
<section id = "report">
<br>
<style>
#col1{
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
#col1 .column {
  float: left;
  width: 16.65%;
  padding: 60px;
}

/* Clear floats after the columns */
#col1 .row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<div  id = "col1" class="row">
  <div class="column" style="background-color:#aaa;">
    <p><b>USERNAME</b></p>
	<br>
<?php 

	$sql_select="select Username ".
                  " from logs where username ='$user'";
				 

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
  
  <div class="column" style="background-color:#bbb;">
    <p><b>WEIGHT</b></p>
     <br>
    <?php 

	$sql_select="select WEIGHT".
                  " from logs where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";


	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" ."&nbsp;". $row["WEIGHT"] . "    ". "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
</div>
  <div class="column" style="background-color:#aaa;">
    <p><b>HEIGHT</b></p>
     <br>
     <?php 

	$sql_select="select HEIGHT".
                  " from logs where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
				  echo "<td>" ."&nbsp;". $row["HEIGHT"] . "    ". "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
</div>
  <div class="column" style="background-color:#bbb;">
    <p><b>BMI</p></b>
     <br>
     <?php 

	$sql_select="select BMI".
                  " from logs where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" . "&nbsp;".$row["BMI"] . "    ". "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
</div>
<div class="column" style="background-color:#aaa;">
    <p><b>DAY</p></b>
     <br>
    <?php 

	$sql_select="select DAY".
                  " from logs where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";


	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" ."&nbsp;". $row["DAY"] .  "    "."</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
</div>
<div class="column" style="background-color:#bbb;">
   <p><b>CALORY_INTAKE</p></b>
     <br>
   <?php 

	$sql_select="select CALORY_INTAKE".
                  " from logs where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";
          

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
				  echo "<td>" ."&nbsp;&nbsp;&nbsp;".  $row["CALORY_INTAKE"] . "    ". "</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
</div>
</div>

</section>