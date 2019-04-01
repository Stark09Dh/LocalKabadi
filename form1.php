<fieldset>
    <div class="form-group">
        <label class="sr-only" for="f1-first-name">Name</label>
        <input type="text" name="name" placeholder="Name" class="f1-first-name form-control" id="name">
    </div>
     
	 <div class="form-group">
        <label class="sr-only" for="phn">Phone Number</label>
		<input type="number" name="phn" placeholder="Phone Number" class="f1-last-name form-control" id="phn" >
    </div>
                               
	<div class="f1-buttons center center">
		<input  id="type" name="type" value="" style="display:none;"/> 
        <button type="button" class="btn btn-next" onclick="showProg(this)" value=0><i class="fas fa-rupee-sign"></i> &nbsp; Sell</button>
                     <strong>&nbsp;&nbsp;OR&nbsp;&nbsp;</strong>        
        <button type="button" onclick="showProg(this)" class="btn btn-next" value=1><i class="fas fa-gift "></i>&nbsp; Donate</button>
    </div>
</fieldset>
							