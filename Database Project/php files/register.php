
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
	$Name= $_POST['name'];
	$Username=$_POST['username'];
	$Pass= $_POST['password'];
	$email= $_POST['email'];
	$Gender=$_POST['gender'];
	$Age=$_POST['Age'];
	$Phone=$_POST['phone_number'];
	

	
 $sql_select="INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('$Username','$Pass','$email','$Name',$Age,'$Gender',$Phone)";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			 
			$option= '2';
		 }
		 else{
			 echo "Data not inserted";
		 }
	
}


		 
		
 




?>












<?php if($option=='1'): ?>



<html>

<head>
<title>FitMe </title>
<link rel = "stylesheet" href="reg.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
<body>

<section id = "register">
 <div class = "contain">
 <div class = "row">
 <h1> Register Here </h1>
   <style>
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
       margin: 0; 
  </style>
   <form action = "register.php" method = "post">
   
  <div class = "col-md-4">
   <p>Name </p>
	<input type="text" name="name" placeholder="Enter Name" required>
    <p> Username </p>
	<input type = "text" name="username" placeholder="Enter Username" required>
	<p>Password</p>
	<input type="Password" name="password" placeholder="Enter Password" required>
	<p>Email_ID</p>
	<input type="text" name="email" placeholder="eg. fitme@fitme.com" required>
 </div>
 
  <div class = "col-md-4">
  <p> Gender </p>
	<input type = "text" name="gender" placeholder="female/male" required>
	<p>Age</p>
	<input type="number" name="Age" placeholder="Enter Age" required>
	<p>Contact</p>
	<input type="number" name="phone_number" placeholder="Enter cell number" required>
	</div>
	
	<input type="submit" name ="submit" value = "Create">
   <a href="http://localhost/register/login.php">&nbsp;&nbsp;&nbsp;&nbsp Already Registered? </a>
 </form>
 </div>
 
  
 </div>
</section>


  
</body>
</html>


<?php elseif($option=='2') : ?>


<html>

<head>
<title>FitMe </title>
 <link rel="stylesheet" type="text/css" href="goto.css">
<body>
  <div class = "loginbox">
  <h1> Successfuly Registered!! </h1>
  <form action = "login.php" method = "post"><input type="submit" name ="login" value = "Login"></form>
  </div>
  
</body>
</html>
  
 

<?php endif; ?>