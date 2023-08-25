
<!DOCTYPE HTML>
<html>
	<head>
		<title>Toll Tax Management System</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" href="images/fav.png" />	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
</head>
	<body>
		<!-----start-container----->
		<!-----header-section------>
		<div class="header-section">
			<!----- start-header---->
			<div id="home" class="header">
				<div class="container">
					<div class="top-header">
						<div class="logo">
							<a href="index.php"><img src="images/logonew.png" title="logo" /></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="index.php">Home </a></li>
								<li class="active"><a href="about.php">About </a></li>
								<li><a href="contact.php">Feedback </a></li>
								<li><a href="staffs/index.php">Staff Login</a></li>
								<li ><a href="admin/index.php">Admin Login</a></li>
								
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			
			</div>
			
			<div class="container-fluid" style="margin-top:50px; margin-bottom:50px; margin-left:50px;"> 
			<div class="row"> 
				<h3 style="margin-left:15px;"><strong> NATIONAL HIGHWAYS AUTHORITY OF INDIA</strong></h3>
				<div class="col-lg-8">
				<p>The National Highways Authority of India (NHAI) was constituted by an Act of Parliament, the National Highways Authority of India Act, 1988. It is responsible for the development, maintenance and management of National Highways entrusted to it and/or matters connected or incidental thereto. NHAI enters into Concession Agreements for design, construction, operation and maintenance of highways by DBFOT Concessionaires. The Concessionaire builds NH stretches and during operation and maintenance of the said stretch collects and retains the toll (user fee). In case of stretches developed on Govt. / NHAI Funds, NHAI engages OMT Concessionaire / User-Fee Collection Contractors.</p>
				<p>During operation and maintenance of tolled stretches of National Highways (NHs), the DBFOT Concessionaires/ OMT Concessionaires / User Fee Collection Contractors have been mandated to collect user fee (toll) from road users. The applicable user-fee (toll) rates for various categories of vehicles shall be displayed at the respective Toll Plaza. Toll Information System (TIS) has been devised to put in place a mechanism, whereby the road users can ascertain through public domain the exact user fee (toll) rates for a particular plaza OR a particular journey between two stations through a selected route. In addition it will also help disseminate information about the concessions/ discounts to local and frequent users, provision of various facilities on toll road, important telephone numbers, etc.</p>
				
				</div>
				
				
				<div class="col-lg-4"> 
					<img src="images/nhai.png" class="img-fluid" alt="..." style="padding: 4px; border: 10px solid #097b5d; border-radius: 10px; max-width: 100%; margin: 0;">
				</div>
				</div>
				
				<div class="row"> 
				<div class="col-lg-6">
				<h2><strong>ROAD WING</strong></h2>
				<p>Deals with matter relating to Road Transport :</p>
				 <h3>MAIN RESPONSIBILITIES </h3>
				 <ul>
					<li><span> Planning, development and maintenance of National Highways in the country.</span></li>
					<li><span> Extends technical and financial support to State Governments for the development of state roads and the roads of inter-state connectivity and economic importance</span></li>
					<li><span> Evolves standard specifications for roads and bridges in the country.</span></li>
					<li><span> Serves as a repository of technical knowledge on roads and bridges.</span></li>
				 </ul>
				</div>
				
				<div class="col-lg-6"> 				
				<h2><strong>TRANSPORT WING</strong></h2>
				<p>Deals with development and maintenance of National Highway in the country: </p>
				 <h3>MAIN RESPONSIBILITIES </h3>
				 <ul>
					<li><span> Administration of the Road Transport Corporations Act, 1950.</span></li>
					<li><span> Administration of the Motor Vehicles Act, 1988.</span></li>
					<li><span> Evolves road safety standards in the form of a National Policy on Road Safety and by preparing and implementing the Annual Road Safety Plan.</span></li>
					<li><span> Provides grants-in-aid to Non-Governmental Organisations in accordance with the laid down guidelines.</span></li>
				 </ul>
				
				</div>
				</div>
				</div>
			
			<footer>
			<div class="container-fluid" style="margin-top:20px; padding-bottom:20px; background-color:#c1c1c1;"> 
			 <hr/>
			 <p class="text-center">&copy; Copyright 2023 TollGate Management System || All Right Reserved. </p>
			</div>
			</footer>
			
			
	</body>
</html>

