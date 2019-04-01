<?php 
	require_once "include/common_config.php" ;
	include "ftdfunction.php";
	$id=$_REQUEST['id'];
	$city=getstate_patid_en($conn,$id);
 $a=0; foreach($city as $key => $value){ ?>
                          <option value=<?php echo $value['id']; if($a==0)echo ' selected' ;$a++;?> ><?php echo $value['name'] ?></option>
<?php } ?>