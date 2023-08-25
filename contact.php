
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
								<li><a href="about.php">About </a></li>
								<li class="active"><a href="contact.php">Feedback </a></li>
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
				<div class="col-lg-3"> 
					</div>
					
				<div class="col-lg-6">
			<form id ="contact-form" name="contact-form" action="mail.php" method="POST"> <br/>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
									
                                        <label for="email" class="">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div> <br/>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control">
                                </div>
                            </div>
                        </div> <br/>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" class="form-control"></textarea>
                                </div>

                            </div>
                        </div> <br/>
                        <!--Grid row-->

                    </form>
					 <div class="center-on-small-only">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div> <br/>
            </div>
				
				<div class="col-lg-3"> 				
			
				
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

