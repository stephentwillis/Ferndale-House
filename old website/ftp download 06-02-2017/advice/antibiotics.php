<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<?php include("../includes/head.php"); ?><!--global head include, all css & scripts located here-->
</head>

<body>

	<div id="wrap">
	
		<?php include("../includes/page_header.php"); ?><!--global mast image-->
			
		<div id="main-content-wrap"><!--main content nav, span 100%-->
		
		<?php include("../includes/global_nav.php"); ?>
		
		<div id="main-content-right"><!--placed first in-line due to float issues-->			
						
			<div id="form"><!--placed first in-line due to float issues-->	
				<?php include("../includes/form.php"); ?>		
			</div>
			
			<h2>Come and meet us by filling out the form above or give us a call on 01246 232634</h2>
		
		</div>
		
		<div id="main-content-left" >
						
				<h3>Antibiotics...</h3>
				
				<p>
    This leaflet is given to all patients receiving antibiotics as part of their dental treatment at Ferndale House.
    <br /><br />	
    Patients taking antibiotics should be aware that antibiotics can interfere with the absorption of other medicines, particular if the antibiotics trigger tummy upsets, vomiting or diarrhoea.
    <br /><br />
    For example:
    </p>
    
    <ul class="list">
	    <li>Oral medication for diabetes: the diabetes may become unstable.</li>
	    <li>Warfarin: the blood might not be thinned as much.</li>
	    <li>Blood pressure tablets: might not be as effective.</li>
	   	<li>Oral Contraceptive pill: You are advised to use additional precautions while taking the antibiotics, and for seven days after stopping.</li>
   	</ul>
   	
    <p>
    In all cases, do not stop taking your normal medication.
    <br /><br />
    Another occasional side effect of antibiotics is thrush. If you are affected, please talk to your Dentist or your Doctor.
    <br /><br />
    Please complete your course of antibiotics and keep your follow up appointments as arranged.
	</p>
		
		<div id="spacer"></div>
							
		</div><!--closes main content div-->	
	
	<div id="logos">
			<?php include("../includes/logos.php"); ?>
			</div><!--global partner logos-->
	
	<div id="footer">	
	<?php include("../includes/footer.php"); ?><!--global footer-->
	</div>
	
</div><!--closes main page div-->

<?php include_once("../includes/analyticstracking.php") ?>

</body>
</html>