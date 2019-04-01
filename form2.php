<fieldset id=2>
                               
                                <div class="form-group">
									<div class="row">
									<div class="col-sm-6">
								   <label class="" for="state">State</label>
                                    <select class="form-control"  name="state"  id="state">	
 				<?php $a=0; foreach($state as $key => $value){ ?>
                          <option value=<?php echo $value['id']; if($a==0)echo ' selected' ;$a++;?> ><?php echo $value['name'] ?></option>
              <?php } ?>
			 </select>	</div>	
			 <div class="col-sm-6">
			 <label class="" for="state">City</label>
			    <select class="form-control"  name="city"  id="city">	
 				
			 </select></div></div>
                                </div>
								
                                <div class="form-group">
                                    <label class="sr-only" for="adr">Address</label>
                                    <textarea type="text" name="adr" placeholder="Address" class="f1-twitter form-control" id="adr"></textarea>
                                </div>
								<div class="row">
								<div class="col-sm-8">
                                <div class="form-group">
                                    <label class="sr-only" for="landmark">Landmark</label>
                                    <input type="text" name="landmark" placeholder="Landmark" class="f1-google-plus form-control" id="landmark">
                                </div>
								</div>
								<div class="col-sm-4">
                                <div class="form-group">
                                    <label class="sr-only" for="pincode">Pincode</label>
                                    <input type="Number" name="pincode" placeholder="Pincode" class="f1-google-plus form-control" id="pincode">
                                </div>
								</div>
								</div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous" onclick="$('#progress').hide()">Previous</button>
                                    <button type="button" class="btn btn-next" >Next</button>
                                </div>
</fieldset>