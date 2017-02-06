<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>Contact Us | Ferndale House Dental Practice | Chesterfield, UK</title>

<?php include("includes/head.php"); ?><!--global head include, all css & scripts located here-->
		
		<link rel="stylesheet" href="/assets/css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
		<script src="/assets/scripts/mootools.namespaced.js" type="text/javascript"></script>
		<script src="/assets/scripts/jd.gallery.namespaced.js" type="text/javascript"></script>
		
		<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAK_f-RFQA2bx-Ets3fsKVvxTNaoSpKm709oOBvuLGFlJqxUG4XRR5BhH9OlXPYkOXJii7w4ZvyrJIzQ" type="text/javascript"></script>

  <script type="text/javascript">

    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(53.2376180, -1.433523), 18);
        map.setMapType(G_HYBRID_MAP);
        map.setUIToDefault();
        map.enableRotation();
        
        var point = new GLatLng(53.2376180, -1.433523)
        map.addOverlay(new GMarker(point));
      }
    }

    </script>

</head>

<body onload="initialize()" onunload="GUnload()">

	<div id="wrap">
	
		<?php include("includes/page_header.php"); ?><!--global mast image-->
			
		<div id="main-content-wrap"><!--main content nav, span 100%-->
		
		<?php include("includes/global_nav.php"); ?>
			
		<div id="main-content-right">
		
		<div id="form"><!--placed first in-line due to float issues-->	
			<?php include("includes/form.php"); ?>		
		</div>
		
		<h2>Come and meet us by filling out the form above or give us a call on 01246 232634</h2>
				
		</div>				
		
			
		<div id="main-content-left">					
				
				<table id="OpeningTimesTable" cellspacing="0" cellpadding="0" width="50%">
      					<tr>
      					  <td width="100%" height="15" colspan="2" valign="middle" align="center" class="subheading3">Opening Times</td>
      					</tr>  					
            			            			
            			<!--<tr>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">Monday <br />Alternate Mondays</td>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">9.00am &ndash; 5.30pm<br />9.00am &ndash; 7.30pm</td>
            			</tr>-->
						
						<tr>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">Monday</td>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">9.00am &ndash; 7.30pm</td>
            			</tr>
            		           			
            			<tr>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">Tuesday</td>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">9.00am &ndash; 5.30pm</td>
            			</tr>
            			
            			<tr>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">Wednesday</td>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">9.00am &ndash; 5.30pm</td>
            			</tr>
            			
            			<tr>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">Thursday</td>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">9.00am &ndash; 5.30pm</td>
            			</tr>
            			
            			<tr>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">Friday</td>
			              <td width="15%" height="15"  rowspan="1" valign="middle" align="center" class="subheading3">9.00am &ndash; 5.30pm</td>
            			</tr>
            			
                   	</table>
               
                
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
				<br /><br />  	
                Parking is available at the Town Hall car parks.
                <br />
                (access from Rose Hill East).
                <br />
				Limited parking is available in front of the practice.
				</p>
				
				<div id="map_canvas" style="width: 655px; height: 400px; margin-top: -15px;"></div>				
						
		</div>	

		<div id="LastUpdate" style="font-weight: bold; font-size: 0.8em; margin-right: 5px;">
			<p>Site last updated: 11/01/2016</p>
		</div>
							
		</div><!--closes main content div-->	
	
	<div id="spacer"></div>
	
	<div id="logos">
			<?php include("includes/logos.php"); ?>
			</div><!--global partner logos-->
	
	<div id="footer">	
	<?php include("includes/footer.php"); ?><!--global footer-->
	</div>
	

<?php include("includes/analyticstracking.php") ?>

</body>
</html>