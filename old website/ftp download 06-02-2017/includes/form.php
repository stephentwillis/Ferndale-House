<form id="enquiryform" name="enquiryform" action="../../feedback.php" method="post">
<!--<form id="enquiryform" name="enquiryform" action="../../verify.php" method="post">-->
		
			<table width="100%" border="0" cellpadding="3" cellspacing="0" summary="feedback form">
			
				<tr>
					<td colspan="2" align="center"><img src="/assets/images/contact_us.png" /></td>
				</tr>
				
				<tr>
					<td colspan="2" height="35"></td>
				</tr>
				
				<tr>
					<td class="contenttext_form" align="right"><b>Name:</b></td>			
					<td align="center"><input type="text" name="name" style="width: 150px;" /></td>
				</tr>
				
				<tr>
					<td class="contenttext_form" align="right" valign="top"><b>Address:<br />inc. postcode</b></td>			
					<td align="center"><textarea style="width: 150px; height: 75px;" name="address" cols="" rows=""></textarea></td>
				</tr>
				
				<tr>
					<td class="contenttext_form" align="right"><b>Tel:</b></td>			
					<td align="center"><input type="text" name="telephone" style="width: 150px;" /></td>
				</tr>
				
				<tr>
					<td class="contenttext_form" align="right"><b>Email address:</b></td>			
					<td align="center"><input type="text" name="email" style="width: 150px;" /></td>
				</tr>
				
				<tr>
					<td colspan="2" height="10"></td>
				</tr>
				
				<tr>
					<td class="contenttext_form" colspan="2" id="enquirylabel"><b>&nbsp;Enquiry:</b></td>
				</tr>
				
				<tr>
					<td class="contenttext_form" colspan="2" align="center"><textarea style="width: 265px; height: 150px;" name="enquiry" cols="" rows=""></textarea></td>
				</tr>
				
				<!--<tr>
					<td colspan="2" align="center" class="captcha">
						 <div id="recaptcha_widget" style="display:none">

						   <div id="recaptcha_image"></div>
						   <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
						
						   <span class="recaptcha_only_if_image">Enter the words above:</span>
						   <span class="recaptcha_only_if_audio">Enter the numbers you hear:</span>
						
						   <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
						
						   <div><a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a></div>
						   <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
						   <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
						
						   <div><a href="javascript:Recaptcha.showhelp()">Help</a></div>
						
						 </div>
						
						 <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6Lcxs8wSAAAAAPg4HB-qNau-7CuAxhK4Ur20E_TP">
						 </script>
						 
						 <noscript>
						   <iframe src="http://www.google.com/recaptcha/api/noscript?k=6Lcxs8wSAAAAAPg4HB-qNau-7CuAxhK4Ur20E_TP" height="300" width="280" frameborder="0"></iframe><br>
						   <textarea name="recaptcha_challenge_field" rows="3" cols="40">
						   </textarea>
						   <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
						 </noscript>
					</td>
				</tr>-->
				
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Submit Enquiry" /></td>
				</tr>
				
			</table>
			
		</form>
		
		<!-- OnSubmit="setTimeout('clear_form()', 200); return true"-->