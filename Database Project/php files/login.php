

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
   if($con) 
      { echo "Oracle Connection Successful."; } 
   else 
      { die('Could not connect to Oracle: '); } 
      

	$option='1';
if($_POST){
	
	 $user=$_POST['username'];
	 $pass=$_POST['password'];
	 
	 

session_start();
   $_SESSION['superhero'] =$user;
		  
$sql_select="SELECT username,password FROM members WHERE username = '$user' AND password = '$pass'";
				  

		         $query_id3 = oci_parse($con, $sql_select);
        	     $runselect = oci_execute($query_id3);
               
		 
	          while($row = oci_fetch_array($query_id3, OCI_BOTH+OCI_RETURN_NULLS)) 
			  {
				  
                  if($row["USERNAME"] && $row["PASSWORD"]){
					$option= '2';
				  }					  
					
                  
                } 
		   



}
?>




<?php if($option=='1'): ?>

<html>

<head>
<title>Login Form </title>
 <link rel="stylesheet" type="text/css" href="style.css">
<body>
  <div class = "loginbox">
  <img src="avatar1.png" class="avatar">
  <h1> Login Here </h1>
  <form action = "login.php" method = "post">
    <p> Username </p>
	<input type = "text" name="username" placeholder="Enter Username" required>
	<p>Password</p>
	<input type="Password" name="password" placeholder="Enter Password" required>
	<input type="submit" name ="login" value = "Login">
	<a href="http://localhost/register/register.php">Don't have an account yet? </a>
	</form>
  </div>
  
</body>
</html>
<?php elseif($option=='2') : ?>





<html>
<head>
<title>FitMe</title>
<link rel = "stylesheet" href="web.css">
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
<!-------------------------- Welcome -------------------->
<Section id = "welcome">
 <div class = "container">
  <div class = "welcome text-center">
   <h1> Welcome <?php  echo "<strong>".$_SESSION['superhero']."</strong>"; ?> </h1>
    <p> Thankyou for becoming a member of Fitme.Fitme welcomes you 
        to the club. Fitme offers you alot of things like your 
        daily workout plan, what excersices to do and many more.
        Explore our website now!! </p>
	<button type = "submit" class = "btn home-btn">Explore</button>
    </div>
    </div>
</section>	
 
 <!-------------------------- About -------------------->
<section id = "about">
<div class="container">
<div class = "row">
<div class = "col-md-6 text-center">
<img src = "run.jpg" class = "img-fluid">
</div>

<div class = "col-md-6 text-justify">
<h3> Knowledge, Skills & Hard work </h3>
<p>To be Fit we must have the knowledge of what we should eat,
<br>excersice  etc. 
 Its  all  about our hardwork. If we remain <br>determinant
on our goal we can be slim and fit in no time.</p>
<p> Lets keep this goal in mind and get fit together with fit me.
<br>We provide trained staff which will help you reach your goal.<br>Or 
you can choose your workout plan your self </p> 
</div>

<div class = "col-md-6 text-justify">
<h3> Hard Work in Silence </h3>
<p>Lets work hard in this quarantine and dont let anyone know
about it.So once we go out,the people will see the new you.
In only 15 days you'll observe the change in you. 
<br> Even if it gets hard just remember we are working 
out for ourselves. Remember no pain <br> no gain so 
keep up the hard work and achieve our goal.</p>

</div>
<div class = "col-md-6 text-center">
<div class = "embed-responsive embed-responsive-16by9">
<iframe class = "embed-responsive-item"
src="https://www.youtube.com/embed/LhL5SNZfnQs" 
title="YouTube video player" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; 
encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</div>
</div>
</section>
 <!-------------------------- Services-------------------->
<section id = "Services">
<div class = "Container">
<div class = "row">
<div class = "col-md-4">
<img src = "mma.png">
<h4>Mixed Martial Arts</h4>
<p>Fit me gym offers many services. We have mixed martial
arts. Our trainers will help you learn martial arts. Not only
for adults but also for kids.</p>
</div>
<div class = "col-md-4">
<img src = "gym.png">
<h4>GYM</h4>
<p>Fit my gym has many excersice equipments to help you 
reach you goal.The gym is open from 9 am to 11 pm. The website
is functional 24/7. Meet our trainers and get started.</p>
</div>
<div class = "col-md-4">
<img src = "boxing.png">
<h4>Boxing</h4>
<p>We also offer boxing at the gym. Many international players
have been trained at Fit me gym. Its up to you what you choose.</p>
</div>
</div>
</div>
</section>
 <!-------------------------- Features-------------------->
<section id = "features">
<div class = "Container">
<div class = "row">

<div class = "col-md-6">
<img src = "feature.png" class = "img-fluid">
</div>

<div class = "col-md-6">
<div class = "feature-box">
<div class = "feature-left">
</div>
<div class = "feature-right">
<h4> Certified Trainers </h4>
<p>Fit me gym provides our members with certified Trainers.
The trainers guide the members of what excersice they need
according to their weight and what nutritions must be taken.</p>
</div>
</div>

<div class = "feature-box">
<div class = "feature-left">
</div>
<div class = "feature-right">
<br>
<h4> Free Consultation </h4>
<p>FitMe offers free consultation. We are always open and 
welcome you any time. If there is any problem we are here
waiting for you.</p>
</div>
</div>

<div class = "feature-box">
<div class = "feature-left">
</div>
<div class = "feature-right">
<br>
<h4> Flexible Time </h4>
<p>There are no timing issues. Whenever you have time
come to gym. The timings for both girls and boys are same.
The gym also offers seperate gym for girls.</p>
</div>
</div>

</div>
</div>
</div>
</div>
</section>

 <!-------------------------- test-------------------->
<section id = "test">
<div class = "container">
<h1 class = "text-center"> Meet our Users </h1>
<p class = "text-center">Get to know our members and 
<br>their experience at the gym.</p>
<div class = "row">

<div class = "col-md-4">
<p class = "reviews">I had a great experience at the Fit me
gym. The staff and everything was really good.
<span> @username </span></p>
<img src = "user1.jpg">
</div>

<div class = "col-md-4">
<p class = "reviews">Really love the FitMe gym. I am
very happy bieng their member.<br>
<span> @username </span></p>
<img src = "user2.jpg">
</div>

<div class = "col-md-4">
<p class = "reviews">Fit Me really provides great Trainers.
Must become a member and enjoy the fit.
<span> @username </span></p>
<img src = "user3.jpg">
</div>
</div>
</div>
</section>

 <!-------------------------- footer section-------------------->
 <section id = "footer">
 <div class = "container">
 <div class = "row">

 <div class = "col-md-3">
 <img src = "blue.png" class = "footer-logo">
 </div>
 
 <div class = "col-md-3">
 <h1> Follow Us on </h1>
 <p></i> Facebook </p>
  <p> YouTube </p>
   <p> Linkedin </p>
   <p> Twitter </p>
 </div>
 
 <div class = "col-md-3">
 <h1> Features </h1>
 <p>Certified Trainers </p>
 <p>Free Consultation </p>
 <p>Flexible Time </p>
 <p>Free Days </p>
 </div>
 
  <div class = "col-md-3">
 <h1> Quick Contact </h1>
 <p> +92 3015146246 </p>
  <p> contact@fitme.com </p>
   <p> F-7/1 Markaz</p>
    <p> Islamabad </p>
 </div>
 
  
 
 
 
 </div>
 </div>
</body>
</html>

  
 

<?php endif; ?>