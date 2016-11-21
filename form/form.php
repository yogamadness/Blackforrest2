<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form Blackforest Creatives</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />

        <meta name="author" content="Codrops" />
		
		<!--<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" href="../footer/footercss.css" type="text/css"/>
		

		<link rel="stylesheet" href="stylesheet-image-based.css">
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" href="jquery.realperson.css">

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
		
		
		<style>
			.wrapradio {
				padding-bottom:8px;
				margin-top: -15px;
			}
			
			.checkboxwrap {
				padding-left:26px;
				margin-top: -4px;
				}
			
		</style>
		
    </head>
    <body>
		
        <div class="container">
           
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                   
                    <a class="hiddenanchor" id="tologin"></a>
					 <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
								<div class="colleft">
                                <p> 
                                    <label for="firstname" class="fname">Your First Name</label>
                                    <input id="firstname" name="firstname" required="required" type="text" placeholder="Type Your First Name Here" />
                                </p>
								
								<p> 
                                    <label for="lastname" class="lname" >Your Last Name</label>
                                    <input id="lastname" name="lastname" required="required" type="text" placeholder="Type Your Last Name Here" />
                                </p>
								<p>
									<label for="datetimepicker2" class="lname" >Date of Birth</label>
									<input id="datetimepicker2" name="datetimepicker2" required="required"type="text" placeholder="Choose Your Date of Birth Here"/>	
									
								</p>
								<p> 
                                    <label for="placeofbirth" class="lname" >Place of Birth</label>
                                    <input id="placeofbirth" name="placeofbirth" required="required" type="text" placeholder="Type Your Place of Birth Here" />
                                </p>
								<p> 
                                    <label for="identnum" class="lname" >Identity Card No. (KTP)</label>
                                    <input id="identnum" name="identnum" required="required" type="text" placeholder="Type Your Identity Card No. (KTP) Here" />
                                </p>
								<p> 
                                    <label for="address" class="address" >Address</label>
                                    <input id="address" name="adress" required="required" type="text" placeholder="Type Your Adress Here"/>
                                </p>
								<p> 
                                    <label for="city" class="city" >City &nbsp; &nbsp;&nbsp;&nbsp;</label>
                                    <input id="city" name="city" required="required" type="text" placeholder="Type Your City Here" />
                                </p>
																
								<p> 
                                    <label for="Country" class="Country" >Country</label>
                                    <input id="Country" name="Country" required="required" type="text" placeholder="Type Your Country Here"/>
                                </p>
								<p> 
                                    <label for="Postcode" class="Postcode" >Postcode</label>
                                    <input id="Postcode" name="Postcode" required="required" type="text" placeholder="Type Your Postcode Here"/>
                                </p>
								
                               <p> 
                                    <label for="phone" class="phone" >Phone Number</label>
                                    <input id="phone" name="phone" required="required" type="text" placeholder="Type Your Phone Number eg.(021-888888)" />
                                </p>
								</div>
								<div class="colright">
								<p> 
                                    <label for="mobile" class="mobile" >Mobile Number</label>
                                    <input id="mobile" name="mobile" required="required" type="text" placeholder="Type Your mobile Number eg.(+62-88000001111)" />
                                </p>
								
								 <p> 
                                    <label for="email" class="youmail" > Your Email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="Type Your Email Here"/> 
                                </p>
								<p> 
                                    <label for="emailconf" class="youmail" > Email Confirmation</label>
                                    <input id="emailconf" name="emailconf" required="required" type="email" placeholder="Confirmation Email Here"/> 
                                </p>
								
																<p>
									<label for="wrapradio" class="wrapradio" > Status</label>
										<div class="wrapradio">
											<input id="radio1" type="radio" name="radio" value="1" checked="checked" style="width: 15px;"><label for="radio1">Single</label>
											<input id="radio2" type="radio" name="radio" value="2" style="width: 15px;"><label for="radio2">Married</label>
											<input id="radio3" type="radio" name="radio" value="3" style="width: 15px;"><label for="radio3">Divorce</label>
											<input id="radio4" type="radio" name="radio" value="4" style="width: 15px;"><label for="radio4">Widow</label>
										</div>
								</p>
                                <p>
									<label for="checkbox" class="checkbox" > How did you find out about us?</label>
									<div class= "checkboxwrap">
										<div>
												<input id="checkbox1" type="checkbox" name="checkbox" value="1" checked="checked"><label for="checkbox1">Seminar</label>
										</div>
										<div>
												<input id="checkbox2" type="checkbox" name="checkbox" value="2"><label for="checkbox2">trade show</label>
										</div>
										<div>
												<input id="checkbox3" type="checkbox" name="checkbox" value="3"><label for="checkbox3">advertisement</label>
										</div>	
										<div>
												<input id="checkbox4" type="checkbox" name="checkbox" value="4"><label for="checkbox4">newsletter</label>
										</div>	
										<div>
												<input id="checkbox5" type="checkbox" name="checkbox" value="5"><label for="checkbox5">friend</label>
										</div>
										<div>
											<input id="checkbox6" type="checkbox" name="checkbox" value="6"><label for="checkbox6">referred by </label><input for="checkbox6" id="referredby" name="referredby"  style="width: 30%;margin-left: 7px;height: 1px;padding: 10px 5px 10px 14px;"/>
										</div>
										<div>
											<input id="checkbox7" type="checkbox" name="checkbox" value="7"><label for="checkbox6">Other : </label><input for="checkbox7" id="other" name="other"  style="width: 30%;margin-left: 34px;height: 1px;padding: 10px 5px 10px 14px;"/>
										</div>
									</div>
								</p>
								<p> 
                                    <label for="businessexp" class="businessexp" >Tell us about your business experience </label>
                                    <textarea id="businessexp" name="businessexp" required="required" type="text" placeholder="Type Your Business Exprience Here"></textarea>
                                </p>
								<p><label style="display: inherit;padding-bottom: 10px;">Please enter the letters displayed:</label>
									<input type="text" id="defaultReal" name="defaultReal" required="required" style="width: 30%;margin-left: 34px;height: 1px;padding: 13px 5px 13px 14px;">
								</p>
								
								<p class="trueinfor"> 
									<input type="checkbox" name="trueinformation" id="trueinformation" value="trueinformation" required="required" style="display: block;width: 1px;float: left;margin-top: 9px;margin-left: -17px;"/> 
									<label for="trueinformation" style="display: inline;padding-bottom: 3px;">I hereby declare that the information I have provided above is true. Please contact me to arrange for a meeting. Submit box</label>
								</p>
								
								
                                <p class="signin button"> 
									<input type="submit" value="SUBMIT"/> 
								</p>
								</div>
								<div class="goandlogin">
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
								</div>
								
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
	<script src="./jquery.js"></script>
<script src="./jquery.datetimepicker.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jquery.plugin.js"></script>
<script src="jquery.realperson.js"></script>
<script>
$(function() {
	$('#defaultReal').realperson();
});
</script>
<script>
$('#datetimepicker2').datetimepicker({
	datepicker:true,
	lang:'en',
	timepicker:false,
	format:'d/m/Y',
	
	
});
</script>
</html>