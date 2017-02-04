<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Contact Us | Ferndale House Dental Practice | The Patient People | Dentist in Chesterfield</title>

	<?php include("assets/includes/master-css.php"); ?>
</head>

<body>
	<div class="wrapper">
		<!--=== Header v4 ===-->
		<?php include("assets/includes/header.php"); ?>
		<!--=== End Header v4 ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row magazine-page">
				<!-- Begin Content -->
                <div class="col-md-12">
                    <h2>Contact us</h2>
                </div>

				<div class="col-md-8">

					<!-- Magazine News -->
					<div class="magazine-news">
						<div class="row">
							<div class="col-md-6">	
                                <div id="address">							
    								<p>
                                        Ferndale House Dental Practice
                                        <br />
                                        90 Saltergate 
                                        <br />
                                        Chesterfield 
                                        <br />
                                        S40 1LG 
                                        <br />
                                        T: 01246 232634 
                                        <br />
                                        E: <a href="mailto:enquiries@ferndaledental.co.uk">enquiries@ferndaledental.co.uk</a>
                                    </p>
                                </div>
							</div>
                            <div class="col-md-6">
                                <div id="opening-times" class="text-center">                                    
                                    <h5>We are delighted to receive our patients between...</h5>
                                    <p>
                                        Monday 9.00am - 7.30pm
                                        <br />
                                        Tuesday 9.00am - 5.30pm
                                        <br />
                                        Wednesday 9.00am - 5.30pm
                                        <br />
                                        Thursday 9.00am - 5.30pm
                                        <br />
                                        Friday 9.00am - 5.30pm
                                    </p>
                                </div>
                            </div>
						</div>
					</div>
					<!-- End Magazine News -->		

                    <!-- Magazine News -->
                    <div class="magazine-news">
                        <div class="row">                            
                            <div class="col-md-12">
                                <div id="map-canvas"></div> 
                                <div id="last-update">
                                    <p>Site last updated: 04-02-2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Magazine News -->				
				</div>
				<!-- End Content -->

				<!-- Begin Sidebar -->
				<div class="col-md-4">
                    <?php include("assets/includes/form.php"); ?>
                </div>
				<!-- End Sidebar -->
			</div>
		</div><!--/container-->
		<!-- End Content Part -->

		<!--=== Owl Clients v1 ===-->
		<?php include("assets/includes/logos.php"); ?>
		<!--=== End Owl Clients v1 ===-->

		<!--=== Footer Version 1 ===-->
		<?php include("assets/includes/footer.php"); ?>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->

	<?php include("assets/includes/master-js.php"); ?>

	<script type="text/javascript">    
	    function initMap() {
	        var ferndaleHouse = { lat: 53.2376180, lng: -1.433523 }; 

	        var options = {
	            center: ferndaleHouse,
	            zoom: 18,
	            mapTypeId: google.maps.MapTypeId.ROADMAP
	        };

	        var map = new google.maps.Map(document.getElementById("map-canvas"), options);

	        var marker = new google.maps.Marker({
	            position: ferndaleHouse,
	            map: map
	        });
	    }    
	</script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAHiwc-N43Us8jf8jPnPfgDTFvi6mHTSPo&callback=initMap" async defer></script>

	<?php include_once("assets/includes/analytics.php") ?>
</body>
</html>
