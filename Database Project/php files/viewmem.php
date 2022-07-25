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
   
    if($_POST)
   {
	   if($_POST['name1'])
	   {
	     $ex1 = "Cable seated high rope face pull";
		 $dur1 = "30 sec";
		 $m1 = "Back(Trapezius,Rhomboids,and Lats)";
		 
		 
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',1,'','$dur1','$m1','$ex1',15)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
		 
       }
        if( $_POST['name2'])
	   {
	     $ex2 = "Cable seated low rope or V-bar";
		 $dur2 = "40 sec";
		 $m2 = "Back(Trapezius,Rhomboids,and Lats)";
		 
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',2,'','$dur2','$m2','$ex2',20)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	    if( $_POST['name3'])
	   {
	     $ex3 = "Standing supported one-arm dumbbell";
		 $dur3 = "15 sec";
		 $m3 = "Back(Trapezius,Rhomboids,and Lats)";
		 $exid=1;
		 
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',3,'$exid','$dur1','$m3','$ex3',20)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name4'])
	   {
	     $ex4 = "Bent-over barbell row at 35-45 degrees";
		 $dur4 = "20 sec";
		 $m4 = "Back(Trapezius,Rhomboids,and Lats)";
		 
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',4,'','$dur4','$m4','$ex4',10)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name5'])
	   {
	     $ex5 = "Pull-ups and chin-ups ";
		 $dur5 = "20 sec";
		 $m5 = "Back(Trapezius,Rhomboids,and Lats)";
		 $exid=2;
		 
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',5,'$exid','$dur5','$m5','$ex5',30)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	    if( $_POST['name6'])
	   {
	     $ex6 = "Plate-loaded machine pull-downs as a pull-up";
		 $dur6 = "30 sec";
		 $m6 = "Back(Trapezius,Rhomboids,and Lats)";
		 $exid=3;
		 
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',6,' $exid','$dur6','$m6','$ex6',10)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	    if( $_POST['name7'])
	   {
	     $ex7 = "Heavy partial rack deadlift";
		 $dur7 = "15 sec";
		 $m7 = "Back(Trapezius,Rhomboids,and Lats)";
		 $exid=4;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',7,' $exid','$dur7','$m7','$ex7',40)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name8'])
	   {
	     $ex8 = "Outward round movement";
		 $dur8 = "20 sec";
		 $m8 = "Shoulders";
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',8,'','$dur8','$m8','$ex8',30)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name9'])
	   {
	     $ex9 = "Standing barbell overhead press";
		 $dur9 = "5 sec";
		 $m9 = "Shoulders";
		 $exid=4;
		  
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',9,' $exid','$dur9','$m9','$ex9',20)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name10'])
	   {
	     $ex10 = "Standing single or double-kettlebell overhead press";
		 $dur10 = "15 sec";
		 $m10 = "Shoulders";
		  $exid=5;
		  $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',10,' $exid','$dur10','$m10','$ex10',10)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name11'])
	   {
	     $ex11 = "Plate front raise (anterior deltoids)";
		 $dur11 = "20 sec";
		 $m11 = "Shoulders";
		 $exid=1;
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',11,' $exid','$dur11','$m11','$ex11',18)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name12'])
	   {
	     $ex12 = "Dumbbell lateral raise with slow negative ";
		 $dur12 = "10 sec";
		 $m12 = "Shoulders";
		 $exid=1;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',12,' $exid','$dur12','$m12','$ex12',30)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name13'])
	   {
	     $ex13 = "Bent-over single-arm";
		 $dur13 = "20 sec";
		 $m13 = "Shoulders";
		 $exid=1;
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',13,' $exid','$dur13','$m13','$ex13',35)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name14'])
	   {
	     $ex14 = "Inward round movement";
		 $dur14 = "15 sec";
		 $m14 = "Shoulders";
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',14,'','$dur14','$m14','$ex14',15)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name15'])
	   {
	     $ex15 = "Push-ups";
		 $dur15 = "30 sec";
		 $m15 = "Chest";
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',15,'','$dur15','$m15','$ex15',20)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name16'])
	   {
	     $ex16 = "Dips";
		 $dur16 = "20 sec";
		 $m16 = "Chest";
		 $exid=7;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',16,' $exid','$dur16','$m16','$ex16',20)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name17'])
	   {
	     $ex17 = "Cable Flyes";
		 $dur17 = "10 sec";
		 $m17 = "Chest";
		 $exid=6;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',17,' $exid','$dur17','$m17','$ex17',20)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name18'])
	   {
	     $ex18 = "Incline,wide-grip,(ROM) bench press";
		 $dur18 = "10 sec";
		 $m18 = "Chest";
		 $exid=8;
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',18,' $exid','$dur18','$m18,'$ex18',20)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name19'])
	   {
	     $ex19 = "Bench Press";
		 $dur19 = "20 sec";
		 $m19 = "Chest";
		 $exid=9;
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',19,' $exid','$dur19','$m19','$ex19',40)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['name20'])
	   {
	     $ex20 = "Dumbbell or kettlebell goblet squat";
		 $dur20 = "10 sec";
		 $m20 = "Quadriceps";
		 $exid=5;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',20,' $exid','$dur20','$m20','$ex20',15)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	 
   
   

   }
?>
 
<link rel = "stylesheet" href="viewmem.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>

<!-------------------------- Header -------------------->
<section id = "header">

<nav class="navbar navbar-light">
    <a class="navbar-brand" href="#"><img src = "black.png"></a>
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
   <h1>Other Members Workout Plan</h1>
   <p>Select any of the plan that suit your body</p>
    </div>
    </div>
</section>



<form action = "viewmem.php" method = "post">
 <!-------------------------- About -------------------->
 <style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 12.5%;
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

	$sql_select="select Username ".
                  " from EXERCISE";
				 

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

	$sql_select="select EXERCISE_id ".
                  " from EXERCISE";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";
  

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
                  echo "<td>" ."&nbsp;". $row["EXERCISE_ID"] . "    ". "</td>";
                } 
		    echo "</table>";

?>
  </div>
  <div class="column" style="background-color:#bbb;">
    <p><b>EQUIPMENT_ID</b></p>
    <?php 

	$sql_select="select Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake".
                  " from EXERCISE";
				 

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		    echo "<table>";
  

	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
      	       {
		          echo "<tr>";
				  echo "<td>" ."&nbsp;". $row["EQUIPMENT_ID"] ."</td>";
                  echo "</tr>";
                } 
		    echo "</table>";

?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <p><b>DURATION</b></p>
   <?php 

	$sql_select="select Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake".
                  " from EXERCISE";
				 

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

	$sql_select="select Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake".
                  " from EXERCISE";
				 

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

	$sql_select="select Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake".
                  " from EXERCISE";
				 

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

	$sql_select="select Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake".
                  " from EXERCISE";
				 

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
  <div class="column" style="background-color:#ccc;">
    <p><b>Enter Exercise_ID </b></p>
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
   <input type="text" name="name11">
   <input type="text" name="name12" >
   <input type="text" name="name13" >
   <input type="text" name="name14" >
   <input type="text" name="name15" >
   <input type="text" name="name16" >
   <input type="text" name="name17">
   <input type="text" name="name18" >
   <input type="text" name="name19" >
   <input type="text" name="name20" >
  </div>
</div>
<br>
<div class = "loginbox">
<input type="submit" name ="Save" value = "Save">
</div>
</form>
</html>