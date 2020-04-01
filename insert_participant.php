
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body bgcolor="#D7BDE2">


  <?php
  include_once 'connection.php';

    $query1="select max(person_id)
             from person";
    $ab = oci_parse($con, $query1);
    $r = oci_execute($ab);
    $row1=oci_fetch_array($ab,OCI_RETURN_NULLS);
    $personid=$row1[0]+1;
    // Set session variables
      $_SESSION["personid"] = $personid;
      echo "person id is equal to =" . $_SESSION["personid"] . ".<br>";
    $b=$_POST["Name"];
    $c=$_POST["username"];
    $d=$_POST["password"];
    $e=$_POST["email"];
    $f=(int)$_POST["CNIC"];
    $g=(int)$_POST["contact_no"];
    $h=$_POST["address"];
    $i=(int)$_POST["Semester"];
    $j=$_POST["degree"];
    $k=$_POST["city"];
    $l=$_POST["university"];
    $query="insert into person (person_id, person_ ,username,password,email_id,cnic,contact_no,Address,Semester,Degree,city)
    values($personid,'$b','$c','$d','$e',$f,$g,'$h',$i,'$j','$k')";
    $z=oci_parse($con,$query);
    $run =oci_execute($z);

    $query2="insert into participant_uni (person_id, University_name)
    values($personid,'$l')";
    $a1 = oci_parse($con, $query2);
    $r2 = oci_execute($a1);

    if($run && $r2 && $r)
     {
             echo "<br>Your Record has been inserted into the database";
             echo "<br><br>Press the below Button to go to home.";
     }
     else
     {
             echo "<br><br><br>Error while inserting record in Database ";
         }
    if($con)
    {
        oci_close($con);
    }

?>
<form action="registration.html">
    <button type="submit"> Register Event</button>
 </form>
  </body>
</html>
