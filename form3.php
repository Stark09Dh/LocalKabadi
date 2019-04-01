
<fieldset >
  <br>  
	 <div class="table-responsive">
		<table class="table table-bordered">
			<thead class="">
				<tr>
					<th>Material</th>
					<th>Rate</th>
					<th>Quantity(per kg or pcs)</th>
					<th>Total</th>
				</tr>
			</thead>
		<tbody style="text-align:left;" id="mat_table">
		
		</tbody>
		<tr>
		<td colspan=2>Total</td>
		<td id="qty_total"></td>
		<td id="net_total"></td>
		</tr>
		</table>
      </div>
	  	<div class="form-group">
	<button id="add"  type="button"  style="background: #fff; border: 1px solid #118C4E; color: #118C4E; ">
	<i class="fas fa-plus-square fa-large " >ADD</i>
	</button>	
	<button id="remove"  type="button" class="right" style="background: #fff; border: 1px solid #f35b3f; color: #f35b3f; ">
	<i class="fas fa-minus-square fa-large " >Remove</i>
	</button>&nbsp;
	
	</div>
	<input style="display:none;" id="add_in" value=1 name="add_in"/>
    
    
	<div class="f1-buttons">
        <button type="button" class="btn btn-previous"  >Previous</button>
        <button type="button" class="btn btn-next" onclick="enable_sub()">Next</button>
    </div>
</fieldset>
