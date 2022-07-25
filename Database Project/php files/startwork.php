<html>

<head>
<title>FitMe </title>

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



    if ($_POST)
	{
		if( $_POST['name1'])
		{
			$id = $_POST['name1'];
			$dur = $_POST['name11'];
			$status = $_POST['name21'];
			
			  $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name2'])
		{
			$id = $_POST['name2'];
			$dur = $_POST['name12'];
			$status = $_POST['name22'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name3'])
		{
			$id = $_POST['name3'];
			$dur = $_POST['name13'];
			$status = $_POST['name23'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name4'])
		{
			$id = $_POST['name4'];
			$dur = $_POST['name14'];
			$status = $_POST['name24'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name5'])
		{
			$id = $_POST['name5'];
			$dur = $_POST['name15'];
			$status = $_POST['name25'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name6'])
		{
			$id = $_POST['name6'];
			$dur = $_POST['name16'];
			$status = $_POST['name26'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name7'])
		{
			$id = $_POST['name7'];
			$dur = $_POST['name17'];
			$status = $_POST['name27'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name8'])
		{
			$id = $_POST['name8'];
			$dur = $_POST['name18'];
			$status = $_POST['name28'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
	    }
		if( $_POST['name9'])
		{
			$id = $_POST['name9'];
			$dur = $_POST['name19'];
			$status = $_POST['name29'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
		if( $_POST['name10'])
		{
			$id = $_POST['name10'];
			$dur = $_POST['name20'];
			$status = $_POST['name30'];
			
			 $sql_select="insert into DailyTarget(username,EXERCISE_id,status,Duration)
                           values ('$user','$id','$status','$dur')";

		  

		     $query_id3 = oci_parse($con, $sql_select);
        	 $runselect = oci_execute($query_id3);
			 if($runselect)
			 {
			   echo "Inserted Successfully";
			 }
		     else
			 {
			   echo "Data not inserted";
		     }
		}
	}

?>

<link rel = "stylesheet" href="stwrk.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
<body>

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
      </ul>
    </div>
</nav>

</section>

<!---------- New section ------------------>
<Section id = "welcome">
 <div class = "container">
  <div class = "welcome text-center">
    <h1> Start Exercise </h1>
    <p> Once you have saved the changes press Log button to take your Logs.</p>
	<form action = "log.php" method = "post"><button type = "submit" class = "btn home-btn">Log</button></form>
    </div>
    </div>
</section>	

<h1>   </h1>

<body>
<style>
#col1{
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
#col1 .column {
  float: left;
  width: 33%;
  padding: 50px;
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
    <h2>Exercise Number And Duration</h2>
	<br>
<?php 

	$sql_select="select Exercise_id,duration from Exercise where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
              echo "<table>";
	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>"."&nbsp&nbsp&nbsp&nbsp;".$row["EXERCISE_ID"]."</td>";
				  echo "<td>"."&nbsp&nbsp&nbsp&nbsp;".$row["DURATION"]."</td>";
				  echo "</tr>";
			
                } 
               echo "</table>";





?>
  </div>
  
  <div class="column" style="background-color:#bbb;">
    <h2>Exercises And Equipment ID </h2>
     <br>
    <?php 

	$sql_select="select name,equipment_id from Exercise  Where username = '$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
              echo "<table>";
	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>"."&nbsp&nbsp&nbsp&nbsp;".$row["NAME"]."</td>";
				  echo "<td>"."&nbsp&nbsp&nbsp&nbsp;".$row["EQUIPMENT_ID"]."</td>";
				  echo "</tr>";
			
                } 
               echo "</table>";
?>
</div>
  <div class="column" style="background-color:#aaa;">
    <h2>Equipment Needed </h2>
     <br>
    <?php 

	$sql_select="select equipment_id,name from equipment";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
              echo "<table>";
	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
				  echo "<td>"."&nbsp&nbsp".$row["EQUIPMENT_ID"]."</td>";
                  echo "<td>"."&nbsp&nbsp&nbsp&nbsp;".$row["NAME"]."</td>";
				  echo "</tr>";
			
                } 
               echo "</table>";
?>
</div>
</div>
<!--------------- FORM ----------------------->
<form action = "startwork.php" method = "post">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*
{
  box-sizing: border-box;
}


.column 
{
  float: left;
  width: 33.33%;
  padding: 50px;
  height: 500px; 
  position: center;
}

.column h2
{
   text-align: center;
}

.row:after 
{
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<h1>   </h1>

<div class="oo" >
<h1>Enter Your Data</h1>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Enter Exercise Number</h2>
	<br>
    <input type="text" name="name1">
   <input type="text" name="name2" >
   <input type="text" name="name3" >
   <input type="text" name="name4" >
   <input type="text" name="name5" >
   <input type="text" name="name6" >
   <input type="text" name="name7">
   <input type="text" name="name8" >
   <input type="text" name="name9" >
   <input type="text" name="name10" >
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Your Duration</h2>
	<br>
   <input type="text" name="name11">
   <input type="text" name="name12" >
   <input type="text" name="name13" >
   <input type="text" name="name14" >
   <input type="text" name="name15">
   <input type="text" name="name16" >
   <input type="text" name="name17" >
   <input type="text" name="name18" >
   <input type="text" name="name19" >
   <input type="text" name="name20" >
  </div>
  
  <div class="column" style="background-color:#ccc;">
    <h2>Status</h2>
	<br>
   <input type="text" name="name21" placeholder = "Completed/Not completed">
   <input type="text" name="name22" >
   <input type="text" name="name23" >
   <input type="text" name="name24" >
   <input type="text" name="name25" >
   <input type="text" name="name26" >
   <input type="text" name="name27" >
   <input type="text" name="name28" >
   <input type="text" name="name29" >
   <input type="text" name="name30" >
  </div>
</div>
</div>

<div class = "button">
<h1>   </h1>
<input type="submit" name ="submit" value = "Save">
</div>

</body>
</form>
</html>