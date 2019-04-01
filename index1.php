<?php 
require_once "configs/common_config.php" ;

if (!empty($_POST)){
	
	$param = $_POST;
	//echo "<pre>".print_r($param)."</pre>";
	//die;
	if(!empty($param)){
		$query = addreq($param,$conn);
		if($query)
		{	echo "<script>
	function	mytrig() 
	{		 console.log('ajax click'),
		alert('".$query."')
	// document.getElementById('msg').click();
	  
	
		}
	
window.onload=mytrig();	
</script>";
	
	}
	
}

}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LocalKabadi.com</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
<button data-toggle="modal" data-target="#msg" id="msg_bt" style="display:none;" ></button>
		<!-- Top menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><!--img src="assets/img/newlogo.jpg"/--></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="active">
						<span class="li-text ">
						<a data-toggle="modal" data-target="#pricelist">Price List</a> 
						</span>&emsp;
						</li>
						<li>
						<span class="li-text">
						<a data-toggle="modal" data-target="#uc">Sign In</a> 
						</span>&emsp;
						</li>
						<li>
						<span class="li-text">
						<a data-toggle="modal" data-target="#uc">Sign Up</a> 
						</span>&emsp;
						</li>
						<li>
						<span class="li-text">
						<a data-toggle="modal" data-target="#uc"Blog</a> 
						</span>&emsp;
						</li>
						<li>
						<span class="li-text">
						<a data-toggle="modal" data-target="#uc">Tie Ups</a> 
						</span>&emsp;
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                <div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h1 class="text"><strong>Call Us: <a href="tel:<?php echo PHN;?>" ><?php echo PHN;?></a></strong></h1>				
					</div>
				</div>
                <div class="row">
						
				   <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><img src="assets/img/newlogo@2x.png" />&nbsp;<strong>LocalKabadi</strong></h1>
                        <!--div class="description">
                       	    <p>
							<h3>
                               Welcome to Online <strong>Kabadiwala..!</strong> 
							   </h3>
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
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active" style="display:none;">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>about</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>account</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>social</p>
                    			</div>
                    		</div>
                    		<fieldset>
                    		 			<div class="form-group">
                    			   <input type="text" name="name" placeholder="Name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group">
								<i class="fas fa-mobile-alt"></i>
                                    <input type="number" name="phn" placeholder="Phone No" class="form-control" id="phn" required>
                                </div>
                                
                                <div class="f1-buttons right">
                                    <button type="button" class="btn btn-next" id="type" onclick="$('#progress').show()" name="type" value=0><i class="fas fa-rupee-sign"></i> &nbsp; Sell</button>
                                </div>
								<div class="f1-buttons">
                                    <button type="button" onclick="$('#progress').show()" class="btn btn-next" id="type" name="type" value=1><i class="fas fa-gift "></i>&nbsp; Donate</button>
                                </div>
                            </fieldset>
						
                            <fieldset>
                                <h4>Set up your account:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email</label>
                                    <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Password</label>
                                    <input type="password" name="f1-password" placeholder="Password..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                    <input type="password" name="f1-repeat-password" placeholder="Repeat password..." 
                                                        class="f1-repeat-password form-control" id="f1-repeat-password">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous" onclick="$('#progress').hide()">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
							
                            <fieldset>
                                <h4>Social media profiles:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Facebook</label>
                                    <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-twitter">Twitter</label>
                                    <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Google plus</label>
                                    <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>
<!-- Footer -->


     <footer style="background:#0000;">
            
                <div class="col-md-12 col-lg-12 col-xs-12 col-xl-12">
		<div class="row">		
                   <div class="footer">
<div class="container">

	<div class="clearfix"></div>  
	 <ul class="footer-link">
       
	 
		  <li class="">
          <a  data-toggle="modal" data-target="#uc">Vendor</a>
        </li>
		<li >
          <a data-toggle="modal" data-target="#uc" >FAQ</a>
        </li>
			<li class="">
          <a data-toggle="modal" data-target="#uc" >T&amp;C</a>
        </li>
			<li class="">
          <a data-toggle="modal" data-target="#uc" >Privacy</a>
        </li>
		<li class="">
          <a data-toggle="modal" data-target="#uc">Policy</a>
        </li>
		<li class="">
          <a data-toggle="modal" data-target="#uc">About</a>
        </li>
		<li class="">
          <a data-toggle="modal" data-target="#uc">Contact Us</a>
        </li>
      </ul> 
<div class="clearfix"></div>
© -2018 LocalKabadi

</div>
<div class="clearfix"></div>abcd
</div>
                </div>
            </div>
        </footer>
		
<?php include "model_foot_head.php" ;?>		
        <!-- Javascript -->
       
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
       
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
