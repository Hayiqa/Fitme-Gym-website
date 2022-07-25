<?php  // creating a database connection 

   $db_sid = 
   "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = LAPTOP-63D4ST3P)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = Hayiqa)
    )
  )";            // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
  
   $db_user = "system";   // Oracle username e.g "scott"
   $db_pass = "dudepe12";    // Password for user e.g "1234"
   $con = oci_connect($db_user,$db_pass,$db_sid); 
   if($con) 
      { echo "Oracle Connection Successful."; 
		} 
   else 
      { die('Could not connect to Oracle: '); } 
  
  session_start();
 $user=$_SESSION['superhero'];
 $date1= $_POST["st"];
 $date2= $_POST["end"];
 function SetServerOutput($c, $p)
{
    if ($p)
      $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
    else
      $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
    $s = oci_parse($c, $s);
    $r = oci_execute($s);
    oci_free_statement($s);
    return $r;
}


// Returns an array of dbms_output lines, or false.
function GetDbmsOutput($c)
{
    $res = false;
    $s = oci_parse($c, "BEGIN DBMS_OUTPUT.GET_LINE(:LN, :ST); END;");
    if (oci_bind_by_name($s, ":LN", $ln, 255) &&
    oci_bind_by_name($s, ":ST", $st)) {
    $res = array();
    while (($succ = oci_execute($s)) && !$st)
      $res[] = $ln;
        if (!$succ)
         $res = false;
        }
    oci_free_statement($s);
    return $res;
}
 
 SetServerOutput($con,true);
 // Create some output
 
 $sqlStatement="Declare
v_date1 logs.day%TYPE;
v_date2 logs.day%TYPE;
v_user logs.username%TYPE;
v_weight logs.weight%TYPE;
v_weight1  logs.weight%TYPE;
v_weight2  logs.weight%TYPE;

BEGIN
v_user := '$user';
v_date1 := '$date1';
v_date2 := '$date2';

Select weight 
INTO v_weight1
from logs
where day= v_date1 AND username=v_user;

Select weight 
INTO v_weight2
from logs
where day= v_date2 AND username=v_user;

v_weight:=v_weight1-v_weight2;
DBMS_OUTPUT.PUT_LINE('The  weight lost is '||v_weight||'kgs');

Exception
When others Then
DBMS_OUTPUT.PUT_LINE('No data found');


END;
 ";
$s = oci_parse($con, $sqlStatement);
oci_execute($s);

// Display the output
$output = GetDbmsOutput($con);
foreach ($output as $line)
  echo "$line<br>";
  
		
?>