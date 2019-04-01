<?php
function addreq($p,$conn)
{
//echo $p['no'];

 $sql="INSERT INTO ".PICKUP."(name, adr,phn_no,type)VALUES('".$p['name']."','".$p['adr']."','".$p['no']."','".$p['type']."')";

 if ($conn->query($sql) === TRUE) {
   $msg= "Your request has been generated";  	
} else {
    $msg= "Error: " . $sql . "<br>" . $conn->error;
}
//echo $msg;
//die;
return $msg;
}

?>