<fieldset id="4">
                               
                                
									<div class="row">
									<div class="col-sm-6">
			 
			    <div class="form-group">
                                    <label class="" for="pincode">Date</label>
                                    <input type="date" name="date" placeholder="Date" class="f1-google-plus form-control" id="date">
                                </div>
 				
			 </div>
									<div class="col-sm-6">
									<div class="form-group">
							 <label class="" for="time">Time Slot</label>
                        <select class="form-control"  name="time"  id="time">	
 				<?php $a=0; foreach($time as $key => $value){ ?>
                        <option value="<?php echo $value['id'];?>"><?php echo $value['ini']." - ".$value['end'];
												?></option>
              <?php } ?>
			 </select>	</div>	
			 </div>
                                </div>
								
                            
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous" onclick="$('#submit').attr('disabled','disabled');">Previous</button>
                                    <button type="submit" disabled class="btn btn-submit" id="submit">Submit</button>
                                </div>
                            </fieldset>