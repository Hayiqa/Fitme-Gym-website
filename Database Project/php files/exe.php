



<html>
<head>

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
	   if( $_POST['Cable'])
	   {
	     $ex1 = "Cable seated high rope face pull";
		 $dur1 = "30 sec";
		 $m1 = "Back";
		 
		 
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
        if( $_POST['seated'])
	   {
	     $ex2 = "Cable seated low rope or V-bar";
		 $dur2 = "40 sec";
		 $m2 = "Back";
		 
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
	    if( $_POST['dumbbell'])
	   {
	     $ex3 = "Standing supported one-arm dumbbell";
		 $dur3 = "15 sec";
		 $m3 = "Back";
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
	   if( $_POST['Bent-over'])
	   {
	     $ex4 = "Bent-over barbell row at 35-45 degrees";
		 $dur4 = "20 sec";
		 $m4 = "Back";
		 
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
	   if( $_POST['Pull-ups'])
	   {
	     $ex5 = "Pull-ups and chin-ups ";
		 $dur5 = "20 sec";
		 $m5 = "Back";
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
	    if( $_POST['Plate-loaded'])
	   {
	     $ex6 = "Plate-loaded machine pull-downs as a pull-up";
		 $dur6 = "30 sec";
		 $m6 = "Back";
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
	    if( $_POST['Heavy'])
	   {
	     $ex7 = "Heavy partial rack deadlift";
		 $dur7 = "15 sec";
		 $m7 = "Back";
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
	   if( $_POST['Outward'])
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
	   if( $_POST['barbell'])
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
	   if( $_POST['single'])
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
	   if( $_POST['front'])
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
	   if( $_POST['lateral'])
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
	   if( $_POST['single-arm'])
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
	   if( $_POST['Inward'])
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
	   if( $_POST['Push-ups'])
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
	   if( $_POST['Dips'])
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
	   if( $_POST['flyes'])
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
	   if( $_POST['Incline'])
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
	   if( $_POST['Bench'])
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
	   if( $_POST['kettlebell'])
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
	  if( $_POST['Double'])
	   {
	     $ex21 = "Double kettlebell squats ";
		 $dur21 = "15 sec";
		 $m21 = "Quadriceps";
		 $exid=10;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',21,' $exid','$dur21','$m21','$ex21',10)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['squat'])
	   {
	     $ex22 = "Box squat";
		 $dur22 = "10 sec";
		 $m22 = "Quadriceps";
		 $exid=10;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',22,' $exid','$dur22','$m22','$ex22',25)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['back'])
	   {
	     $ex23 = "Barbell back squat";
		 $dur23 = "20 sec";
		 $m23 = "Quadriceps";
		 $exid=10;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',23,' $exid','$dur23','$m23','$ex23',35)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['Machine'])
	   {
	     $ex24 = "Machine hack squat";
		 $dur24 = "30 sec";
		 $m24 = "Quadriceps";
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',24,'','$dur24','$m24','$ex24',15)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	    if( $_POST['Leg'])
	   {
	     $ex25 = "Leg press";
		 $dur25 = "20 sec";
		 $m25 = "Quadriceps";
		 $exid=10;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',25,' $exid','$dur25','$m25','$ex25',30)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			
		 }
		 else{
			 echo "Data not inserted";
		 }
       }
	   if( $_POST['Split'])
	   {
	     $ex26 = "Split squats";
		 $dur26 = "15 sec";
		 $m26 = "Quadriceps";
		 $exid=10;
		 
		 $sql_select="insert into EXERCISE(Username ,EXERCISE_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('$user',26,' $exid','$dur26','$m26','$ex26',40)";

		  

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

<title>FitMe</title>
<link rel = "stylesheet" href="t.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>

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
          <a class="nav-link active" aria-current="page" href="http://localhost/register/website.php"><b>HOME</b></a>
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


<!----------Welcome section---------------->
<Section id = "welcome">
 <div class = "container">
  <div class = "welcome text-center">
   <h1> Select Your Excercise </h1>
    <p> Pick you excercise and start workout.</p>
    </div>
    </div>
</section>

<form action = "exe.php" method = "post">
 <!-------------------------- About -------------------->
<section id = "about">
<div class="container">
<div class = "row">
<div class = "col-md-4 text-Center">
<img src = "back.png" class = "img-fluid">
</div>

<div class = "col-md-4 text-justified">
<h3> Back </h3>

<label class="container">&nbsp; Cable seated high rope face pull
  <input type="checkbox" name ="Cable" value="Cable">
  <span class="checkmark"></span>
 
</label>
<label class="container"> &nbsp; Cable seated low rope or V-bar
  <input type="checkbox" name="seated" value="seated">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Standing supported one-arm dumbbell
  <input type="checkbox" name="dumbbell" value="dumbbell">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Bent-over barbell row at 35-45 degrees
  <input type="checkbox" name="Bent-over" value="Bent-over">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Pull-ups and chin-ups 
  <input type="checkbox" name="Pull-ups" value="Pull-ups">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Plate-loaded machine pulls
  <input type="checkbox" name="Plate-loaded" value="Plate-loaded">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Heavy partial rack deadlift
  <input type="checkbox" name="Heavy" value="Heavy">
  <span class="checkmark"></span>
</label>
</div>

<div class = "col-md-4 text-Center">
<h3> Duration </h3>
<p style="text-align:center"><br>30 sec<br>
40 sec<br>
15 sec <br>
20 sec <br>
20 sec <br>
30 sec <br>
15 sec </p>
</div>

</div>
</div>
</section>

 <!-------------------------- About -------------------->
<section id = "new">
<div class="container">
<div class = "row">

<div class = "col-md-4 text-justified">
<h3> Shoulders <br></h3>
<h4>&nbsp</h4>
<label class="container">&nbsp; Outward round movement
  <input type="checkbox" name ="Outward" value="Outward">
  <span class="checkmark"></span>
 
</label>
<label class="container"> &nbsp; Standing barbell overhead press
  <input type="checkbox" name="barbell" value="barbell">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Standing single or double-kettlebell overhead press
  <input type="checkbox" name="single" value="single">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Plate front raise (anterior deltoids)
  <input type="checkbox" name="front" value="front">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Dumbbell lateral raise with slow negative 
  <input type="checkbox" name="lateral" value="lateral">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Bent-over single-arm
  <input type="checkbox" name="single-arm" value="single-arm">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Inward round movement
  <input type="checkbox" name="Inward" value="Inward">
  <span class="checkmark"></span>
</label>
</div>

<div class = "col-md-4 text-Center">
<h3> Duration </h3>
<p style="text-align:center"><br>20 sec<br>
5  sec<br>
15 sec <br>
20 sec <br>
10 sec <br>
20 sec <br>
15 sec </p>
</div>

<div class = "col-md-4 text-Center">
<img src = "shod.png" class = "img-fluid">
</div>



</div>
</div>
</section>

 <!-------------------------- About -------------------->
<section id = "more">
<div class="container">
<div class = "row">

<div class = "col-md-4 text-Center">
<img src = "chest.png" class = "img-fluid">
</div>

<div class = "col-md-4 text-justified">
<h3> Chest <br></h3>
<h4>&nbsp</h4>
<label class="container">&nbsp; Push-ups
  <input type="checkbox" name ="Push-ups" value="Push-ups">
  <span class="checkmark"></span>
</label>
<label class="container"> &nbsp; Dips
  <input type="checkbox" name="Dips" value="Dips">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Cable flyes
  <input type="checkbox" name="flyes" value="flyes">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Incline,wide-grip,(ROM) bench press
  <input type="checkbox" name="Incline" value="Incline">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Bench press
  <input type="checkbox" name="Bench" value="Bench">
  <span class="checkmark"></span>
</label>

</div>

<div class = "col-md-4 text-Center">
<h3> Duration </h3>
<p style="text-align:center"><br>30 sec<br>
20 sec<br>
10 sec <br>
10 sec <br>
20 sec <br> </p>
</div>
</div>
</div>
</section>

<!-------------------------- About -------------------->
<section id = "last">
<div class="container">
<div class = "row">

<div class = "col-md-4 text-justified">
<h3> Quadriceps <br> </h3>
<h4>&nbsp</h4>
<label class="container">&nbsp; Dumbbell or kettlebell goblet squat
  <input type="checkbox" name ="kettlebell" value="kettlebell">
  <span class="checkmark"></span>
</label>
<label class="container"> &nbsp; Double kettlebell squats 
  <input type="checkbox" name="Double" value="Double">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Box squat
  <input type="checkbox" name="squat" value="squat">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Barbell back squat
  <input type="checkbox" name="back" value="back">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp;Machine hack squat
  <input type="checkbox" name="Machine" value="Machine">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Leg press
  <input type="checkbox" name="Leg" value="Leg">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; Split squats
  <input type="checkbox" name="Split" value="Split">
  <span class="checkmark"></span>
</label>
</div>

<div class = "col-md-4 text-Center">
<h3> Duration </h3>
<p style="text-align:center"><br>10 sec<br>
15 sec<br>
10 sec <br>
20 sec <br>
30 sec <br>
20 sec <br>
15 sec  </p>
</div>

<div class = "col-md-4 text-Center">
<img src = "th.png" class = "img-fluid">
</div>

</div>
</div>
</section>

<!-------------------------- About -------------------->
<section id = "lastlast">
<div class="container">
<div class = "row">

<div class = "col-md-6 text-Center">
<img src = "food.png" class = "img-fluid">
</div>

<div class = "col-md-6 text-center">
<h3> Nutrition Intake </h3>
<h4>&nbsp</h4>
<p>Exercise only is not enough. we should also take a healthy diet in order to keep fit.
It is better to take about 700-800 calories per day. Follow the given chart and eat nutritious food.
Save your changes and start your workout.</p>
<button type = "submit" class = "btn home-btn">Save</button></form>
<p>If you want to remove the exercises you saved click on remove.</p>
<form action = "remov.php" method = "postt"><button type = "submit" class = "btn home-btn">Remove</button></form>
<p>If you want to start your work out right now click start else select home from the menu bar.</p>
<form action = "startwork.php" method = "postt"><button type = "submit" class = "btn home-btn">Start Workout</button></form>
</div>

</div>
</div>
</section>


</html>


