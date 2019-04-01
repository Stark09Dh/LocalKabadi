	<footer style="background:#0000;">
            
                <div class="col-md-12 col-lg-12 col-xs-12 col-xl-12">
		<div class="row">		
                   <div class="footer">
<div class="container">

	<div class="clearfix"></div>  
	 <ul class="footer-link">
       
	 	<li >
          <a data-toggle="modal" data-target="#faq" href="" >FAQ</a>
        </li>
			<li class="">
          <a data-toggle="modal" data-target="#tc" href="" >T&amp;C</a>
        </li>
			<li class="">
          <a data-toggle="modal" data-target="#pripol" href="" >Privacy &amp; Policy</a>
        </li>
		<li class="">
          <a href="about.php">About</a>
        </li>
		<li class="">
          <a data-toggle="modal" data-target="#uc" href="">Contact Us</a>
        </li>
      </ul> 
<div class="clearfix"></div>
© -2018 LocalKabadi

</div>
<div class="clearfix"></div>Made By : <a href="https://www.facebook.com/jay.patel.10004694"  style="color: #888;">J.Patel</a> &amp; <a href="https://www.facebook.com/himanshu.kotnala99" style="color: #888;" >H.Kotnala</a>
</div>
                </div>
            </div>
        </footer>
		<?php include "model_foot_head.php" ;?>	
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/add_row_mat.js"></script>
		<script src="assets/js/get_city.js"></script>
        <script>
			function enable_sub()
			{
					window.setTimeout(function(){
					if ($('#4').css('display') == 'block')
				{
					$("#submit").removeAttr('disabled');
					}		
				},500)
			}
			
			function showProg(objButton)
			{	window.setTimeout(function(){
				if ($('#2').css('display') == 'block')
				{
				   $('#progress').show();
				   var type=objButton.value;
				  console.log("->"+type);
				   $('#type').val(type);
				
				}
				},500)
				
					
			}
			
			
		
		</script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>