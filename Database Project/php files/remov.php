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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			 
			  $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			
			 $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

		  

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			$sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

		  

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			$sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			$sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			$sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			 $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			 $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user' ";

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			 $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			 $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
		if( $_POST['name11'])
		{
			$id = $_POST['name11'];
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			 $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
		if( $_POST['name12'])
		{
			$id = $_POST['name12'];
			$sql_select="DELETE FROM dailytarget WHERE EXERCISE_id = '$id' AND Username = '$user' ";

		  

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
			 $sql_select="DELETE FROM EXERCISE WHERE EXERCISE_id = '$id' AND Username = '$user'";

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
    <h1> Remove Exercise </h1>
    <p> Once you have saved the changes press Log button to take your Logs.
	Or select home from menu bar.</p>
	<form action = "log.php" method = "post"><button type = "submit" class = "btn home-btn">Log</button></form>
    </div>
    </div>
</section>	

<h1>   </h1>


<style>
*
{
  box-sizing: border-box;
}
.column 
{
  float: left;
  width: 50%;
  padding: 50px; 
  position: center;
}
.row:after 
{
  content: "";
  display: table;
  clear: both;
}
</style>

<div  id = "col1" class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercises Selected</h2>
	<br>
<?php 

	$sql_select="select exercise_id,name from exercise where username ='$user'";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
              echo "<table>";
	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>"."&nbsp&nbsp&nbsp&nbsp;".$row["EXERCISE_ID"]."</td>";
				  echo "<td>"."&nbsp&nbsp&nbsp&nbsp;".$row["NAME"]."</td>";
				  echo "</tr>";
			
                } 
               echo "</table>";





?>
  </div>
  
  <div class="column" style="background-color:#bbb;">
    <h2>Enter Execise ID </h2>
     <br>
   <form action = "remov.php" method = "post">
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
   <input type="text" name="name11" >
   <input type="text" name="name12" >
</div>
</div>
<div class = "button">
<br>
<input type="submit" name ="submit" value = "Save"></form>
</div>

</body>
</form>
</html>