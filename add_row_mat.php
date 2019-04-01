<?php
	require_once "include/common_config.php" ;
	include "ftdfunction.php";
	
	$mat=getmaterial_en($conn);
	$id=$_REQUEST['id'];
?>
<tr id="tr_<?php echo $id;?>">
	<td>
		<select class="form-control material" name="mat_nm_<?php echo $id;?>"  id="mat_nm_<?php echo $id;?>" data-value=<?php echo $id;?> >	
			<?php $a=0; foreach($mat as $key => $value){ ?>
					<option value=<?php echo $value['id']; if($a==0)echo ' selected' ;$a++;?> data-rate=<?php echo $value['rate'];?> ><?php echo $value['name'] ?></option>
			<?php } ?>
		</select>
	</td>

	<td name="mat_rt_<?php echo $id;?>"  id="mat_rt_<?php echo $id;?>"></td>

	<td style="width:40%;">
		<div class="form-group" >
			<label class="sr-only" for="mat_qty_<?php echo $id;?>">kg or piece</label>
			<input type="number"   name="mat_qty_<?php echo $id;?>" placeholder="kg or piece" data-value=<?php echo $id;?> value=1 class="f1-password form-control qty" id="mat_qty_<?php echo $id;?>">
		</div>
	</td>
					
	<td name="mat_ttl_<?php echo $id;?>" class="total"  id="mat_ttl_<?php echo $id;?>"></td>
</tr>
 <script src="assets/js/mat_form.js"></script>