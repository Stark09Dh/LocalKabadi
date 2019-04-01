<?php

function add_pickup($p,$conn)
{
		$text='';
	//print_r($p);
	for($i=1;$i<$p['add_in'];$i++)	
		$text.=$p['mat_nm_'.$i].','.$p['mat_qty_'.$i].';';
	//$text+=$p['mat_nm_'.$i].','.$p['mat_qty_'.$i].';';
//echo $text;
//die();
	 $sql="INSERT INTO ".PICKUP."(name, city_id,adr,landmark,pincode,date,time_id,phn_no,type,material)VALUES('".$p['name']."','".$p['city']."','".$p['adr']."','".$p['landmark']."','".$p['pincode']."','".$p['date']."','".$p['time']."','".$p['phn']."','".$p['type']."','".$text."')";
	
	if ($conn->query($sql) === TRUE) {
	  $msg = "Request succesfully registered";  	
	} 
	else {
		$msg = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $msg;
}



function getmaterial_en($conn){
	 
	$sql = "SELECT id,name,rate FROM ".MAT." where switch=1";
	$result = $conn->query($sql);
	$option=[];
	//print_r($result);
	if ($result->num_rows > 0){
		while ($row=mysqli_fetch_array($result))
		{
			$option[] = array( 
				'id' => $row['id'],
				'name' => $row['name'],
				'rate' => $row['rate'],
			
			);
		}
	}
	return $option;
}

function getstate_patid_en($conn,$id)
	{
	 
		 $sql = "SELECT id,name FROM ".STATE." where parent_id=$id and switch=1";
		 $result = $conn->query($sql);
		 $option=[];
		 //print_r($result);
		 if ($result->num_rows > 0) 
		 {
			 while ($row=mysqli_fetch_array($result))
			{
				$option[] = array( 
				'id' => $row['id'],
				'name' => $row['name'],
				
				);
			}
		 }
		return $option;
	}

 function gettime_en($conn)
	{
	 
		 $sql = "SELECT ini,end,id FROM ".TIME." where switch=1";
		 $result = $conn->query($sql);
		 $option=[];
		 //print_r($result);
		 if ($result->num_rows > 0) 
		 {
			 while ($row=mysqli_fetch_array($result))
			{
				$option[] = array( 
				'ini' => $row['ini'],
				'end' => $row['end'],
				'id' => $row['id'],
				);
			}
		 }
		return $option;
	} 
 ?>