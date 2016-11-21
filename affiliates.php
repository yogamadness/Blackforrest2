<?php
include "./config/koneksi.php";

if (isset($_POST['firstName'])) {
	
	require_once('recaptchalib.php');
$privatekey = "6LftEfoSAAAAAO5BbmVmGFRgmNQ45Triw9Iz0Xsw";

$resp = recaptcha_check_answer(
            $privatekey,
            $_SERVER["REMOTE_ADDR"],
            $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]
        );

if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
	header("location: bukku.php");
    die( "The reCAPTCHA wasn't entered correctly. Go back and try it again." .
    "(reCAPTCHA said: " . $resp->error . ")" );
	
} else {
    // Your code here to handle a successful verification
}
			$findUs_array = $_POST['findUs'];
			foreach ($findUs_array as $one_findUs) 
			{
			$source.= $one_findUs.", ";
			}
			$findUs = substr($source, 0, -2);
    $firstName = mysql_real_escape_string($_POST['firstName']);
	$lastName = mysql_real_escape_string($_POST['lastName']);
	$dateOfBirth = mysql_real_escape_string($_POST['dateOfBirth']);
	$placeOfBirth = mysql_real_escape_string($_POST['placeOfBirth']);
	$idCardKTP = mysql_real_escape_string($_POST['idCardKTP']);
	$address = mysql_real_escape_string($_POST['address']);
	$city = mysql_real_escape_string($_POST['city']);
	$country = mysql_real_escape_string($_POST['country']);
	$postCode = mysql_real_escape_string($_POST['postCode']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$mobile = mysql_real_escape_string($_POST['mobile']);
	$email = mysql_real_escape_string($_POST['email']);
	$emailConf = mysql_real_escape_string($_POST['emailConf']);
	$status = mysql_real_escape_string($_POST['status']);
	$referredBy = mysql_real_escape_string($_POST['referredBy']);
	$other = mysql_real_escape_string($_POST['other']);
	$businessExp = mysql_real_escape_string($_POST['businessExp']);
	
	// Add the information into the database now
	$sql = mysql_query("INSERT INTO registration (firstName, lastName, dateOfBirth, placeOfBirth, idCardKTP, address, city, country, phone, mobile, email, emailConf, status, findUs, postCode, referredBy, other, businessExp, data_added) 
        VALUES('$firstName','$lastName','$dateOfBirth','$placeOfBirth','$idCardKTP','$address','$city','$country','$postCode','$phone','$mobile','$email','$emailConf','$status','$findUs','$referredBy','$other','$businessExp',now())") or die (mysql_error());
     
	header("location: affiliates.php"); 
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Black Forrest Creatives">
<meta name="Description" content="Beautiful Photobooks">
<title>Black Forrest Creatives</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" type="image/x-icon"  href="image/iconbfc.ico" />
<link rel="stylesheet" href="css/stylesheet-image-based.css">
<link href="css/switchbahasa.css" rel="stylesheet" />

<link rel="stylesheet" href="css/subscribe.css">
<link rel="stylesheet" href="css/twitter.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/style.css" type="text/css"/>


<link rel="stylesheet" href="css/animation.css"><!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->

<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" href="css/jquery.realperson.css">
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
		
<!--3css dibawah adalah main css-->
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/headergeneral.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/underlinenav.css" />

<link rel="stylesheet" href="css/footercss.css" type="text/css"/>

<style>

a {
	color: #888;
}

a:hover{
	color: #rgba(0,0,0,0.8);
}

footer{
	padding-top: 40px;
	padding-bottom: 40px;
}

.wrapradio {
				padding-bottom:8px;
				margin-top: -15px;
			}
			
			.checkboxwrap {
				padding-left:26px;
				margin-top: -4px;
				}
				
				#twitter-widget-0 {
	margin-left: 20px;
	}
	
	input, button, select, textarea {
		
		line-height: 16px;
	}
</style>

<script src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script src="js/jquery.plugin.js"></script>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2fXzEFBQDMvc7VvQqnEemadmmbVsY43C';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->

</head>

<body>

<?php include('header.php');?>
<script>
	$('#myTab a').click(function (e) {
  	e.preventDefault()
 	$(this).tab('show')
	})
</script>
<?php include('headerbawahform.php');?>

<div id="mainWrapper" class="mainWrapper" align="center">

  <div id="intro">
    <div class="introx">
          <img src="image/kobi-banner6.jpg" alt="Banner - Kobi Invitations' Black and White Collections" />
    </div>
  </div>
<br>
<br>
    <div id="about" class="kata" >
        <p>
        
        </p>
        <br><br>
        <span><img src="image/ribbon-aboutus.png" alt="About Us" style="height:50px; margin-bottom:3%; margin-left:38%;"></span>
    </div>
</div>  
 
		<div class="container">
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form  action="form.php" autocomplete="on" method="post"> 
								<div class="colleft">
                                <p> 
                                    <label for="firstName" >Your First Name</label>
                                    <input id="firstName" name="firstName" required="required" type="text" pattern=".{3,}" required title="3 characters minimum" placeholder="Type Your First Name Here" />
                                </p>
								
								<p> 
                                    <label for="lastName"  >Your Last Name</label>
                                    <input id="lastName" name="lastName" required="required" type="text" placeholder="Type Your Last Name Here" />
                                </p>
								<p>
									<label for="datetimepicker2"  >Date of Birth</label>
									<input id="datetimepicker2" name="dateOfBirth" required="required"type="text" autocomplete="off" placeholder="Choose Your Date of Birth Here"/>	
									
								</p>
								
								<p> 
                                    <label for="placeofbirth"  >Place of Birth</label>
                                    <input id="placeofbirth" name="placeOfBirth" required="required" type="text" placeholder="Type Your Place of Birth Here" />
                                </p>
								<p> 
                                    <label for="identnum"  >Identity Card No. (KTP)</label>
                                    <input id="identnum" name="idCardKTP" required="required" type="text" placeholder="Type Your Identity Card No. (KTP) Here" />
                                </p>
								<p> 
                                    <label for="address"  >Address</label>
                                    <input id="address" name="address" required="required" type="text" placeholder="Type Your Adress Here"/>
                                </p>
								<p> 
                                    <label for="city"  >City &nbsp; &nbsp;&nbsp;&nbsp;</label>
                                    <input id="city" name="city" required="required" type="text" placeholder="Type Your City Here" />
                                </p>
																
								<p> 
                                    <label for="country" class="country" >Country</label>
                                    <input id="country" name="country" required="required" type="text" placeholder="Type Your Country Here"/>
                                </p>
								<p> 
                                    <label for="postcode" class="postcode" >Postcode</label>
                                    <input id="postcode" name="postCode" required="required" type="text" pattern="[0-9]{5}" title="Input the right format postal code e.g 23445" placeholder="Type Your Postal Code Here e.g 23899"/>
                                </p>

								
                               <p> 
                                    <label for="phone" class="phone" >Phone Number</label>
                                    <input id="phone" name="phone" required="required" type="text" placeholder="Type Your Phone Number eg.(021-888888)" />
                                </p>
								
								<p> 
                                    <label for="mobile" class="mobile" >Mobile Number</label>
                                    <input id="mobile" name="mobile" required="required" type="text" placeholder="Type Your mobile Number eg.(+62-88000001111)" />
                                </p>
                                
                                </div>
								<div class="colright">
								
								 <p> 
                                    <label for="email" class="youmail" > Your Email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="Type Your Email Here"/> 
                                </p>
								<p> 
                                    <label for="emailconf" class="youmail" > Email Confirmation</label>
                                    <input id="emailconf" name="emailConf" required="required" type="email" placeholder="Confirmation Email Here"/> 
                                </p>
								
								<script type="text/javascript">
									window.onload = function () {
										document.getElementById("email").onchange = validateEmail;
										document.getElementById("emailconf").onchange = validateEmail;
									}
									function validateEmail(){
									var email2=document.getElementById("emailconf").value;
									var email1=document.getElementById("email").value;
									if(email1!=email2)
										document.getElementById("emailconf").setCustomValidity("Email Don't Match, Please make sure it's the same email you type before");
									else
										document.getElementById("emailconf").setCustomValidity('');  
									//empty string means no validation error
									}
								</script>
								
								
								
																<p>
									<label for="wrapradio" class="wrapradio" > Status</label>
										<div class="wrapradio">
											<input id="radio1" class="radiobutton" type="radio" name="status" value="single" checked="checked" style="width: 15px;"><label for="radio1">Single</label>
											<input id="radio2" class="radiobutton" type="radio" name="status" value="married" style="width: 15px;"><label for="radio2">Married</label>
											<input id="radio3" class="radiobutton" type="radio" name="status" value="divorce" style="width: 15px;"><label for="radio3">Divorce</label>
											<input id="radio4" class="radiobutton" type="radio" name="status" value="widow" style="width: 15px;"><label for="radio4">Widow</label>
										</div>
								</p>
                                <p>
									<label for="checkbox" class="checkbox" > How did you find out about us?</label>
									<div class= "checkboxwrap">
										<div>
												<input id="checkbox1" type="checkbox" name="findUs[]" value="seminar" ><label for="checkbox1">Seminar</label>
										</div>
										<div>
												<input id="checkbox2" type="checkbox" name="findUs[]" value="trade show"><label for="checkbox2">Trade Show</label>
										</div>
										<div>
												<input id="checkbox3" type="checkbox" name="findUs[]" value="advertisement"><label for="checkbox3">Advertisement</label>
										</div>	
										<div>
												<input id="checkbox4" type="checkbox" name="findUs[]" value="newsletter"><label for="checkbox4">Newsletter</label>
										</div>	
										<div>
												<input id="checkbox5" type="checkbox" name="findUs[]" value="friend"><label for="checkbox5">Friend</label>
										</div>
										<div>
											<label for="referredby">Referred by </label><input id="referredby" name="referredBy"  style="width: 30%;margin-left: 7px;height: 1px;padding: 10px 5px 10px 14px;"/>
										</div>
										<div>
											<label for="other">Other   </label><input id="other" name="other"  style="width: 30%;margin-left: 43px;height: 1px;padding: 10px 5px 10px 14px;"/>
										</div>
									</div>
								</p>
								<p> 
                                    <label for="businessexp" class="businessexp" >Tell us about your business experience </label>
                                    <textarea id="businessexp" name="businessExp" required="required" type="text" placeholder="Type Your Business Exprience Here"></textarea>
                                </p>
															
								<script type="text/javascript">
								 var RecaptchaOptions = {
									theme : 'clean'
								 };
								 </script>
								 <script type="text/javascript"
								   src="http://www.google.com/recaptcha/api/challenge?k=6LftEfoSAAAAAMWJWsU5zCgoKucGS56eFKVU3xoP">
								</script>

								<noscript>
								   <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LftEfoSAAAAAMWJWsU5zCgoKucGS56eFKVU3xoP"
									   height="300" width="500" ></iframe><br>
								   <textarea name="recaptcha_challenge_field" rows="3" cols="40">
								   </textarea>
								   <input type="hidden" name="recaptcha_response_field"
									   value="manual_challenge" >
								</noscript>
															
								
								<p class="trueinfor"> 
									<input type="checkbox" name="trueinformation" id="trueinformation" value="trueinformation" required="required" style="display: block;width: 1px;float: left;margin-top: 9px;margin-left: -17px;"/> 
									<label for="trueinformation" style="display: inline;padding-bottom: 7px;">I hereby declare that the information I have provided above is true. Please contact me to arrange for a meeting.</label>
								</p>
								
								
                                <p class="signin button"> 
									<input type="submit" name="buttonSubmit" id="buttonSubmit" value="SUBMIT"/> 
								</p>
								</div>
								
								
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
			
        </div>
        <?php include"footer.php"?>


</body>

<script src="js/jquery-2.1.1.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.datetimepicker.js"></script>

<script>
$('#datetimepicker2').datetimepicker({
	datepicker:true,
	lang:'en',
	timepicker:false,
	format:'d/m/Y',
});
</script>
