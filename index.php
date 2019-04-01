<?php 
	require_once "include/common_config.php" ;
	include "ftdfunction.php";
	$state=getstate_patid_en($conn,0);
	
	$time=gettime_en($conn);
	//print_r($mat)
	if (!empty($_POST))
	{

		$param = $_POST;
		/*echo "<pre>";
		print_r($param);
		echo "</pre>";
		die;*/
		if(!empty($param))
		{ 
			$query = add_pickup($param,$conn);
			//echo $query ;
			//die;
			if($query)
			{
				
				echo "<script>alert('".$query."')</script>";
			}
		}
	}
	$title="LocalKabadi.com";
	include "header.php";
?>
<?php //include "modelboxes.php";?>
<!--button style="display:none;" id="trigger" data-toggle="modal" data-target="#msg"></button-->

<!-- Top content -->
    <div class="top-content">
        <div class="container">
            <div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h1 class="text">
						<strong><a href="tel:<?php echo PHN;?>" >Call Us: <?php echo PHN;?></a></strong>
					</h1>				
				</div>
			</div>
            
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text">
                    <h1>
						<img src="assets/img/logo.png" />&nbsp;
						<strong style="font-family:keplt;color: #118C4E;">LocalKabadi</strong>
					</h1>
                    <!--div class="description">
						<p>
							<h3>Welcome to Online <strong>Kabadiwala..!</strong> </h3>
                        </p>
                    </div-->
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                   	<form role="form" action="" method="post" class="f1">
                   		
						<h3>Sell or Donate your scrap</h3>
                    	<div class="f1-steps" id="progress" style="display:none;">
                    		<div class="f1-progress">
                    		    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="4" style="width: 16.66%;"></div>
                    		</div>
                    	
							<div class="f1-step active" style="display:none;"> 
                    			<div class="f1-step-icon"><i class="fas fa-user"></i></div>
                    			<p>about</p>
                    		</div>
                    		
							<div class="f1-step">
								<div class="f1-step-icon">
									<i class="fas fa-address-card"></i>
								</div>
								<p>Address</p>
                    		</div>
							
							<div class="f1-step">
                    			<div class="f1-step-icon"><i class="fas fa-trash-alt"></i></div>
                    			<p>Materials</p>
                    		</div>
                    		
							
							<div class="f1-step">
                    			<div class="f1-step-icon">
									<i class="fas fa-hourglass-half"></i>
								</div>
                    			<p>Pick Up Time</p>
                    		</div>
                    	</div>
                    	<?php 
							include "form1.php";// name and no
							include "form2.php";//material
							include "form3.php";//address
							include "form4.php";//pickup time
						?>
                                                  
                    	
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
	include "footer.php" ;
?>