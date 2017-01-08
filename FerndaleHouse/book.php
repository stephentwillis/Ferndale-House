<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<?php include("includes/head.php"); ?><!--global head include, all css & scripts located here-->
</head>

<body>

	<div id="wrap">
	
		<?php include("includes/page_header.php"); ?><!--global mast image-->
			
		<div id="main-content-wrap"><!--main content nav, span 100%-->
		
		<?php include("includes/global_nav.php"); ?>
		
		
			<div id="main-content">
            <br />
						
                <div id="OpenDayForm">
<form id="enquiryform" name="enquiryform" action="/register.php" method="post">
		
			<table width="100%" border="0" cellpadding="3" cellspacing="5" summary="Booking form">
				
                <tr>
                    <td colspan="2" align="center">
                        <h3>Book your smile consultation</h3>
                    </td>
                </tr>
               
				<tr>
					<td align="right"><b>Name:</b></td>			
					<td align="center"><input type="text" name="name" style="width: 150px;" /></td>
				</tr>
				
                <tr>
					<td colspan="2" height="10"></td>
				</tr>
                
				<tr>
					<td align="right" style="vertical-align: middle;"><b>Address:<br />inc. postcode</b></td>			
					<td align="center"><textarea style="width: 150px; height: 75px;" name="address" cols="" rows=""></textarea></td>
				</tr>
				
                <tr>
					<td colspan="2" height="10"></td>
				</tr>
                
				<tr>
					<td align="right"><b>Tel:</b></td>			
					<td align="center"><input type="text" name="telephone" style="width: 150px;" /></td>
				</tr>
				
                <tr>
					<td colspan="2" height="10"></td>
				</tr>
                
				<tr>
					<td align="right"><b>Email address:</b></td>			
					<td align="center"><input type="text" name="email" style="width: 150px;" /></td>
				</tr>
				
				<tr>
					<td colspan="2" height="30"></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Book Now" class="form-button" /></td>
				</tr>
				
			</table>
			
		</form>
        
        </div>
        
        <br /><br />
							
		    </div><!--closes main content div-->	
	
	    <div id="logos">
			<?php include("includes/logos.php"); ?>
		</div><!--global partner logos-->
	
	<div id="footer">	
	<?php include("includes/footer.php"); ?><!--global footer-->
	</div>
	
</div><!--closes main page div-->

</body>
</html>