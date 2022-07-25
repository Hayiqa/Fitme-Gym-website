<html>
<head>
<title>FitMe</title>
<link rel = "stylesheet" href="sug.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>

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
   $option='0';
   
  if($_POST)
    {
		if($_POST['back'] && ($_POST['dur'] == '30'))
	    {
			$_SESSION['superhero1']="1  Cable seated high rope face pull";
			$_SESSION['superhero2']="6  Plate-loaded machine pull-downs as a pull-up";
			$option='1';
		}
		if($_POST['back'] && ($_POST['dur'] == '40'))
	    {
			$_SESSION['superhero1']= "2  Cable seated low rope or V-bar";
			$option='1';
		}
		if($_POST['back'] && ($_POST['dur'] == '15'))
	    {
			$_SESSION['superhero1']= "3  Standing supported one-arm dumbbell";
			$_SESSION['superhero2']= "7  Heavy partial rack deadlift";
			$option='1';
		}
		if($_POST['back'] && ($_POST['dur'] == '20'))
	    {
			$_SESSION['superhero1'] = "4  Bent-over barbell row at 35-45 degrees";
			$_SESSION['superhero2'] = "5  Pull-ups and chin-ups";
			$option='1';
		}
		if($_POST['Shoulders'] && ($_POST['dur'] == '20'))
	    {
			$_SESSION['superhero1'] = "8  Outward round movement";
			$_SESSION['superhero2'] = "11 Plate front raise (anterior deltoids)";
			$_SESSION['superhero3'] = "13 Bent-over single-arm";
			$option='1';
		}
		if($_POST['Shoulders'] && ($_POST['dur'] == '5'))
	    {
			$_SESSION['superhero1']= "9  Standing barbell overhead press";
			$option='1';
		}
		if($_POST['Shoulders'] && ($_POST['dur'] == '15'))
	    {
			$_SESSION['superhero1']= "10  Standing single or double-kettlebell overhead press";
			$_SESSION['superhero2']= "14  Inward round movement";
			$option='1';
		}
		if($_POST['Shoulders'] && ($_POST['dur'] == '10'))
	    {
			$_SESSION['superhero1']= "12 Dumbbell lateral raise with slow negative";
			$option='1';
		}
		if($_POST['Chest'] && ($_POST['dur'] == '10'))
	    {
			$_SESSION['superhero1']= "17 Cable Flyes";
			$_SESSION['superhero2']= "18 Incline,wide-grip,(ROM) bench press";
			$option='1';
		}
		if($_POST['Chest'] && ($_POST['dur'] == '20'))
	    {
			$_SESSION['superhero1']= "16 Dips";
			$_SESSION['superhero2']= "19 Bench Press";
			$option='1';
		}
		if($_POST['Chest'] && ($_POST['dur'] == '30'))
	    {
			$_SESSION['superhero1']= "15 Push-ups";
			$option='1';
		}
		if($_POST['Quadriceps'] && ($_POST['dur'] == '30'))
	    {
			$_SESSION['superhero1']= "24 Machine hack squat";
			$option='1';
		}
		if($_POST['Quadriceps'] && ($_POST['dur'] == '10'))
	    {
			$_SESSION['superhero1']= "20 Dumbbell or kettlebell goblet squat";
			$_SESSION['superhero2']= "22 Box squat";
			$option='1';
		}
		if($_POST['Quadriceps'] && ($_POST['dur'] == '15'))
	    {
			$_SESSION['superhero1']= "21 Double kettlebell squats";
			$_SESSION['superhero2']= "26 Split squats";
			$option='1';
		}
		if($_POST['Quadriceps'] && ($_POST['dur'] == '20'))
	    {
			$_SESSION['superhero1']= "23 Barbell back squat";
			$_SESSION['superhero2']= "25 Leg press";
			$option='1';
		}
    }
   
?>
 

<!-------------------------- Header -------------------->

<?php if($option=='0') : ?>
<section id = "header">
</section>

  <div class = "suggestion">
  <h1> Enter Required Information </h1>
   <form action = "sug.php" method = "post">
    <p> Weight </p>
	<input type = "float" name="weight" required>
	<p> Height</p>
	<input type="float" name="height" required>
	<p> Age </p>
	<input type="number" name="age" required>
	<p> Daily Duration </p>
	<input type="number" name="dur" placeholder = "eg.35 min" required>
	<p> No of Days for Exercise </p>
	<input type="text" name="days" required>
	<p> Target Muscle Group </p>
<label class="container">&nbsp; &nbsp; &nbsp;Back
  <input type="checkbox" name ="back" value="Cable">
  <span class="checkmark"></span>
 
</label>
<label class="container"> &nbsp; &nbsp;&nbsp;Shoulders 
  <input type="checkbox" name="Shoulders" value="seated">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; &nbsp;&nbsp; Chest 
  <input type="checkbox" name="Chest" value="dumbbell">
  <span class="checkmark"></span>
</label>
<label class="container">&nbsp; &nbsp;&nbsp;Quadriceps
  <input type="checkbox" name="Quadriceps" value="Bent-over">
  <span class="checkmark"></span>
</label>
	<input type="submit" name ="save" value = "Save">
	</form>
  </div>
  
</html>



<?php elseif($option=='1') : ?>

<html>

<head>
<title>FitMe </title>
 <link rel="stylesheet" type="text/css" href="goto1.css">
<body>
  <div class = "loginbox">
  <h1> RECOMMED </h1>
  <form action = "nsug.php" method = "post"><input type="submit" name ="Yes" value = "Yes"></form>
  </div>
  
</body>
</html>
<?php endif; ?>