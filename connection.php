<!DOCTYPE html>
<html>
<head>
	<title>Event Management System</title>

</head>
<body>
	<?php

		//$query = "SELECT COUNT(*) FROM patient";
		$db_sid = "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = orcl.16.50.205)
    )
  )";
		$db_user = 'hr';
		$db_pass = 'hr';
		$con = oci_connect($db_user,$db_pass,$db_sid);


		if($con){
			echo "<h1> DONE<h1>";
			echo "<h4> Done<h4>";
		}else{
			echo "<h1> not done <h1>";
		}

		// $query="select * from employees
		// 		where EMPLOYEE_ID=100 or EMPLOYEE_ID=102";
        // $a = oci_parse($con, $query);
        // $r = oci_execute($a);
		// while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
        //  	  {
		//
        //                      echo $row["EMPLOYEE_ID"]."    ";
        //                     echo "		";
   		// 	 echo $row["FIRST_NAME"]."	 ";
      	// 		 // echo $row["JOB"]." 	";
   		// 	 // echo $row["SAL"]." 	";
        //         // echo $row["COMM"]."   ";
        //         // echo $row["JOB"]."   " ;
        //                     echo "<br><br>";
		//
		//   }
		  // if($con){
			//   oci_close($con);
		  //}
	?>
</body>
</html>
