<!DOCTYPE html>
<html>

<body bgcolor="#D7BDE2">


  <?php
  include_once 'connection.php';

    $d=$_POST["password"];
    $e=$_POST["email"];

    $query3="select person_id from person
    where email_id='$e' and password='$d'   ";
    $ab = oci_parse($con, $query3);
    $r = oci_execute($ab);
    $row1=oci_fetch_array($ab,OCI_RETURN_NULLS);
    $personid=$row1[0];
    echo "Your person id = $personid<br>";

    $query4="select event_id from particpant_event
            where participant_id=$personid";
    $a4 = oci_parse($con, $query4);
    $r4 = oci_execute($a4);
    $row4 = oci_fetch_array($a4, OCI_BOTH+OCI_RETURN_NULLS);
    echo "event id = $row4[0] ";





    if($r)
     {
            echo "<br> success";
     }
     else
     {
             echo "<br><br><br>Error  ";
         }
    if($con)
    {
        oci_close($con);
    }

?>
<form action="Home.html">
    <button type="submit"> HOME</button>
 </form>
  </body>
</html>
