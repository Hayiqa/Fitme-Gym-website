<html>
<head>
<title>FitMe</title>
<link rel = "stylesheet" href="workout.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>

<section id = "header">
 <a class="navbar-brand" href="#">
 <img src = "logo-fit.png"></a>
</section>

<Section id = "welcome">
 <div class = "container">
  <div class = "welcome text-center">
   <h1> Lets Start Workout </h1>
    <p> FitMe offers you to make you own workout plan or you can follow
        the work out plan made by members of FitMe. Click on any of the option and start your workout.</p>
    </div>
    </div>
</section>
 
 <!-------------------------- About -------------------->
<section id = "about">
<div class="container">
<div class = "row">
<div class = "col-md-6 text-Center">
<h3> Members Workout Plan </h3>
<p>To view workout plan already made by FitMe members click View. </p> 
<form action = "viewmem.php" method = "post"><button type = "submit" class = "btn home-btn">View</button></form>
</div>

<div class = "col-md-6 text-center">
<h3> Your Workout Plan </h3>
<p>Male your own workout plan click Start!!</p> 
<form action = "exe.php" method = "post"><button type = "submit" class = "btn home-btn">Start</button></form>
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
