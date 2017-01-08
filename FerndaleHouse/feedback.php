<?php

// ------------- CONFIGURABLE SECTION ------------------------

// $mailto - set to the email address you want the form
// sent to, eg
//$mailto		= "youremailaddress@example.com" ;

$mailto = 'enquiries@ferndaledental.co.uk' ;

// $subject - set to the Subject line of the email, eg
//$subject	= "Feedback Form" ;

$subject = "Enquiry" ;

// the pages to be displayed, eg
//$formurl		= "http://www.example.com/feedback.html" ;
//$errorurl		= "http://www.example.com/error.html" ;
//$thankyouurl	= "http://www.example.com/thankyou.html" ;

$formurl = "" ;
$errorurl = "http://www.ferndaledental.co.uk/oops.php" ;
$thankyouurl = "http://www.ferndaledental.co.uk/thx.php" ;

$email_is_required = 1;
$name_is_required = 1;
$address_is_required = 1;
$telephone_is_required = 1;
$enquiry_is_required = 1;
$uself = 1;
$use_envsender = 0;
$use_sendmailfrom = 1;
$use_webmaster_email_for_from = 1;
$use_utf8 = 1;
$my_recaptcha_private_key = '' ;

// -------------------- END OF CONFIGURABLE SECTION ---------------

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;
if (!isset( $use_envsender )) { $use_envsender = 0 ; }
if (isset( $use_sendmailfrom ) && $use_sendmailfrom) {
	ini_set( 'sendmail_from', $mailto );
}
$envsender = "-f$mailto" ;
$name = (isset($_POST['name']))? $_POST['name'] : $_POST['name'] ;
$address = $_POST['address'] ;
$telephone = $_POST['telephone'] ;
$email = $_POST['email'] ;
$enquiry = $_POST['enquiry'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
	header( "Location: $formurl" );
	exit ;
}
if (($email_is_required && (empty($email) || !preg_match('/@/', $email))) || ($name_is_required && empty($name)) || ($enquiry_is_required && empty($enquiry))) {
	header( "Location: $errorurl" );
	exit ;
}
if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ) {
	header( "Location: $errorurl" );
	exit ;
}

// STW Oct 2013
// Add regex validation to the enquiry and address fields
$customPattern = "/^[a-zA-Z0-9\s\&\-\.\,\?\£\!]+$/";
if ( !preg_match( $customPattern, $enquiry ) || !preg_match( $customPattern, $address ) ) {
    header( "Location: $errorurl" );
    exit ;
}

if (strlen( $my_recaptcha_private_key )) {
	require_once( 'recaptchalib.php' );
	$resp = recaptcha_check_answer ( $my_recaptcha_private_key, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field'] );
	if (!$resp->is_valid) {
		header( "Location: $errorurl" );
		exit ;
	}
}
if (empty($email)) {
	$email = $mailto ;
}
$fromemail = (!isset( $use_webmaster_email_for_from ) || ($use_webmaster_email_for_from == 0)) ? $email : $mailto ;

if (function_exists( 'get_magic_quotes_gpc' ) && get_magic_quotes_gpc()) {
	$enquiry = stripslashes( $enquiry );
}

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"Name of Sender: $name\n" .
	"Address of Sender: $address\n" .
	"Tel. Number of Sender: $telephone\n" .
	"Email of Sender: $email\n" .
	"------------------------- COMMENTS -------------------------\n\n" .
	$enquiry .
	"\n\n------------------------------------------------------------\n" ;

$headers =
	"From: \"$fullname\" <$fromemail>" . $headersep . "Reply-To: \"$fullname\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.15.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

if ($use_envsender) {
	mail($mailto, $subject, $messageproper, $headers, $envsender );
}
else {
	mail($mailto, $subject, $messageproper, $headers );
}
header( "Location: $thankyouurl" );
exit ;

?>