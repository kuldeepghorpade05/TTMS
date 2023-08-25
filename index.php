<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Toll Tax Management System</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/fav.png" />	
		
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		
		
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		
</head>
	<body>
		<!-----start-container----->
		<!-----header-section------>
		<div class="header-section">
			<!----- start-header---->
			<div id="home" class="header">
				<div class="container-fluid">
					<div class="top-header">
						<div class="logo">
							<a href="index.php"><img src="images/logonew.png" title="logo" /></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="index.php">Home </a></li>
								<li><a href="about.php">About </a></li>
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
			<!----- start-slider---->
			
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/tollSlider1.jpg" alt="" class="img-fluid">
			          <div class="caption text-center">
			          	<div class="slide-text-info">
			          		<h1><span> Toll Tax Management System.</span></h1>
			          		<h2>&nbsp; Latest Updates</h2>
			          		<div class="slide-text">
			          			<ul>
			          				<li><span> </span><a> Standard Operating Procedure for exempted category FASTag and Guidelines for issuance of FASTag </a></li>
			          				<li><span> </span><a> Year wise Toll Colelction since inception As per available data for all projects </a></li>
			          				<li><span> </span><a> The Pune Bengaluru National Highway4 in Kolhapur Shiroli area was closed for traffic movement </a></li>
			          			</ul>
			          		</div>
			          		
			          	</div>
			          </div>
			        </li>
			        
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End-slider---->
			</div>
			<div class="container" style="margin-top:50px; margin-bottom:50px;"> 
				<div class="row"> 
				<div class="col-lg-8">
				<h3><strong> NATIONAL HIGHWAYS AUTHORITY OF INDIA</strong></h3>
				
				<p>The National Highways Authority of India (NHAI) was constituted by an Act of Parliament, the National Highways Authority of India Act, 1988. It is responsible for the development, maintenance and management of National Highways entrusted to it and/or matters connected or incidental thereto. NHAI enters into Concession Agreements for design, construction, operation and maintenance of highways by DBFOT Concessionaires. The Concessionaire builds NH stretches and during operation and maintenance of the said stretch collects and retains the toll (user fee). In case of stretches developed on Govt. / NHAI Funds, NHAI engages OMT Concessionaire / User-Fee Collection Contractors.</p>
				<a class="btn btn-primary btn-lg" href="about.php" role="button">Read More</a>
				
				</div>
				
				
				<div class="col-lg-4"> 
					<img src="images/nhai.png" class="img-fluid" alt="...">
				</div>
				</div>
			</div>
			
			<footer>
			<div class="container-fluid" style="margin-top:20px; padding-bottom:20px; background-color:#c1c1c1;"> 
			 <hr/>
			 <p class="text-center">&copy; Copyright 2023 TollGate Management System || All Right Reserved. </p>
			</div>
			</footer>
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
		<script src="js/jquery.min.js"></script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
			<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
					height:300,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
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
	</body>
</html>

