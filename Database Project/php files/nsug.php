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
    if($_POST)
   {
	   if( $_POST['name1']==1 || $_POST['name2']== 1)
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
        if( $_POST['name1']==2|| $_POST['name2']== 2)
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
	    if( $_POST['name1']==3 || $_POST['name2']== 3)
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
	   if( $_POST['name1']==4 || $_POST['name2']== 4)
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
	   if( $_POST['name1']==5 || $_POST['name2']== 5)
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
	    if( $_POST['name1']==6 || $_POST['name2']== 6)
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
	    if($_POST['name1']==7 || $_POST['name2']== 7 )
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
	   if($_POST['name1']==8 || $_POST['name2']== 8 || $_POST['name3']== 8)
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
	   if( $_POST['name1']==9 || $_POST['name2']== 9)
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
	   if( $_POST['name1']==10 || $_POST['name2']== 10)
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
	   if( $_POST['name1']==11 || $_POST['name2']== 11 || $_POST['name3']== 11)
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
	   if( $_POST['name1']==12 || $_POST['name2']== 12)
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
	   if($_POST['name1']==13 || $_POST['name2']== 13 || $_POST['name2']== 13)
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
	   if( $_POST['name1']==14 || $_POST['name2']== 14)
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
	   if($_POST['name1']==15 || $_POST['name2']== 15)
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
	   if( $_POST['name1']==16 || $_POST['name2']== 16)
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
	   if( $_POST['name1']==17 || $_POST['name2']== 17)
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
	   if( $_POST['name1']==18 || $_POST['name2']== 18)
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
	   if( $_POST['name1']==19 || $_POST['name2']== 19)
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
	   if($_POST['name1']==20 || $_POST['name2']== 20)
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
	  if($_POST['name1']==21 || $_POST['name2']== 21)
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
	   if($_POST['name1']==22 || $_POST['name2']== 22)
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
	   if($_POST['name1']==23 || $_POST['name2']== 23)
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
	   if( $_POST['name1']==24 || $_POST['name2']== 24)
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
	    if( $_POST['name1']==25 || $_POST['name2']== 25)
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
	   if( $_POST['name1']==26 || $_POST['name2']== 26)
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

<link rel = "stylesheet" href="n.css">
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
          <a class="nav-link active" href="http://localhost/website.php"><b>HOME</b></a>
        </li>
      </ul>
    </div>
</nav>

</section>

<!---------- New section ------------------>
<Section id = "welcome">
 <div class = "container">
  <div class = "welcome text-center">
    <h1> Select your Exercise </h1>
    <p> Once you have saved the changes press Log button to take your Logs.
	Or select home from menu bar.</p>
	<form action = "log.php" method = "post"><button type = "submit" class = "btn home-btn">Log</button></form>
    </div>
    </div>
</section>	

<h1>   </h1>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

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

	$ex1=$_SESSION['superhero1'];
    $ex2=$_SESSION['superhero2'];
    $ex3=$_SESSION['superhero3'];
    echo "$ex1";	
	echo "<br>";
	echo "$ex2";
	echo "<br>";
	echo "$ex3";

?>
  </div>
  
  <div class="column" style="background-color:#bbb;">
    <h2>Enter Execise ID </h2>
     <br>
   <form action = "nsug.php" post = "method">
   <input type="text" name="name1">
   <input type="text" name="name2" >
   <input type="text" name="name3" >
    <input type="text" name="name4">
   <input type="text" name="name5" >
   <input type="text" name="name6" >
</div>
</div>
<div class = "button">
<br>
<input type="submit" name ="submit" value = "Save"></form>
</div>

</body>
</form>
</html>

