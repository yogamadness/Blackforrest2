<?php

require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6LcEjgATAAAAAEbDQyjSfbx96iqC5IApcXGzmZ_W";
$privatekey = "6LcEjgATAAAAAHNIxtoCqIri8b4DtAgV5JsnNfXr";

# the response from reCAPTCHA
$resp = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
	$resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);

	if ($resp->is_valid) {
		echo "success";
	} else {
		echo "failure";
	}
}
?>