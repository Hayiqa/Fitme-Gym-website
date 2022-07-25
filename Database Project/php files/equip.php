
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


if($_POST){
	$ID=$_POST['equip_id'];
	$Name= $_POST['name'];
	
	

	
 $sql_select="INSERT INTO equipment (equipment_id,Name)
 VALUES ('$ID','$Name')";

		  

		$query_id3 = oci_parse($con, $sql_select);
        	$runselect = oci_execute($query_id3);
			 if($runselect){
			 echo "Inserted Successfully";
			
		 }
		 else{
			 echo "Data not inserted";
		 }
	
}


		 
		
 




?>





<html>

<head>
<title>FitMe </title>


   <form action = "equip.php" method = "post">
   

   <p> Equipment_id </p>
	<input type="number" name="equip_id" value = "equip_id">
    <p> Name </p>
	<input type = "text" name="name">
	
 
	<input type="submit" name ="submit" value = "Create">
  
 </form>


  
</body>
</html>


