<?php
 require('../Connections/connection.php');
 require_once('Includes/Classes/Messages.php');
 if($_REQUEST['command']=="command"){
	 extract($_REQUEST);
	 $sqlUpdate = "UPDATE `authors` SET  `authorName` =  '$authorName',`email` =  '$email',`password` =  '$password',`gender` =  '$opinions',`phone` =  '$phone',`nationality` =  '$nationality',`address` =  '$address',`city` =  '$city',`country` =  '$country',`creditCard` = '$creditCard', bankAccount = '$bankAccount' WHERE  `authors`.`id` = 12";
	 $query = mysql_query($sqlUpdate);
	 if($query){
		  $msg = "sucess";
		 }else{
			 $msg = "error";
			
			 }
	 } 
$password = "";
$authorName = "";
$password = "";
$phone = "";
$nationality = "";
$address = "";
$city ="";
$country = "";
$creditCard ="";
$email = "";
$bankAccount = "";
$authorId = "12";


	 $sql = "SELECT a.authorName, a.id, a.email, a.`password`, a.gender, a.dob, a.phone,a.nationality,a.address,a.city,a.country,a.creditCard,bankAccount,a.website,a.`status` FROM `authors` AS a where a.id = '$authorId'";

	$query = mysql_query($sql); 
	$profile = mysql_fetch_array($query);
	extract($profile);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>



		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<meta name="description" content="" />

		<meta name="keywords" content="" />

		

		<title>admin panel</title>

		<!-- Link shortcut icon-->

		<link rel="shortcut icon" type="image/ico" href="images/favicon2.html" /> 

		<!-- Link css-->

		<link rel="stylesheet" type="text/css" href="css/zice.style.css"/>

		<link rel="stylesheet" type="text/css" href="css/icon.css"/>

		<link rel="stylesheet" type="text/css" href="css/ui-custom.css"/>

		<link rel="stylesheet" type="text/css" href="css/timepicker.css"  />

		<link rel="stylesheet" type="text/css" href="components/colorpicker/css/colorpicker.css"  />

		<link rel="stylesheet" type="text/css" href="components/elfinder/css/elfinder.css" />

		<link rel="stylesheet" type="text/css" href="components/datatables/dataTables.css"  />

		<link rel="stylesheet" type="text/css" href="components/validationEngine/validationEngine.jquery.css" />

		

		<link rel="stylesheet" type="text/css" href="components/jscrollpane/jscrollpane.css" media="screen" />

		<link rel="stylesheet" type="text/css" href="components/fancybox/jquery.fancybox.css" media="screen" />

		<link rel="stylesheet" type="text/css" href="components/tipsy/tipsy.css" media="all" />

		<link rel="stylesheet" type="text/css" href="components/editor/jquery.cleditor.css"  />

		<link rel="stylesheet" type="text/css" href="components/chosen/chosen.css" />

		<link rel="stylesheet" type="text/css" href="components/confirm/jquery.confirm.css" />

		<link rel="stylesheet" type="text/css" href="components/sourcerer/sourcerer.css"/>

		<link rel="stylesheet" type="text/css" href="components/fullcalendar/fullcalendar.css"/>

		<link rel="stylesheet" type="text/css" href="components/Jcrop/jquery.Jcrop.css"  />

		 

		

		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="components/flot/excanvas.min.js"></script><![endif]-->

		

		<script type="text/javascript" src="js/jquery.min.js"></script>

		<script type="text/javascript" src="components/ui/jquery.ui.min.js"></script> 

		<script type="text/javascript" src="components/ui/jquery.autotab.js"></script>

		<script type="text/javascript" src="components/ui/timepicker.js"></script>

		<script type="text/javascript" src="components/colorpicker/js/colorpicker.js"></script>

		<script type="text/javascript" src="components/checkboxes/iphone.check.js"></script>

		<script type="text/javascript" src="components/elfinder/js/elfinder.full.js"></script>

		<script type="text/javascript" src="components/datatables/dataTables.min.js"></script>

		<script type="text/javascript" src="components/scrolltop/scrolltopcontrol.js"></script>

		<script type="text/javascript" src="components/fancybox/jquery.fancybox.js"></script>

		<script type="text/javascript" src="components/jscrollpane/mousewheel.js"></script>

		<script type="text/javascript" src="components/jscrollpane/mwheelIntent.js"></script>

		<script type="text/javascript" src="components/jscrollpane/jscrollpane.min.js"></script>

		<script type="text/javascript" src="components/spinner/ui.spinner.js"></script>

		<script type="text/javascript" src="components/tipsy/jquery.tipsy.js"></script>

		<script type="text/javascript" src="components/editor/jquery.cleditor.js"></script>

		<script type="text/javascript" src="components/chosen/chosen.js"></script>

		<script type="text/javascript" src="components/confirm/jquery.confirm.js"></script>

		<script type="text/javascript" src="components/validationEngine/jquery.validationEngine.js" ></script>

		<script type="text/javascript" src="components/validationEngine/jquery.validationEngine-en.js" ></script>

		<script type="text/javascript" src="components/vticker/jquery.vticker-min.js"></script>

		<script type="text/javascript" src="components/sourcerer/sourcerer.js"></script>

		<script type="text/javascript" src="components/fullcalendar/fullcalendar.js"></script>

		<script type="text/javascript" src="components/flot/flot.js"></script>

		<script type="text/javascript" src="components/flot/flot.pie.min.js"></script>

		<script type="text/javascript" src="components/flot/flot.resize.min.js"></script>

		<script type="text/javascript" src="components/flot/graphtable.js"></script>



		<script type="text/javascript" src="components/uploadify/swfobject.js"></script>

		<script type="text/javascript" src="components/uploadify/uploadify.js"></script>		

		<script type="text/javascript" src="components/checkboxes/customInput.jquery.js"></script>

		<script type="text/javascript" src="components/effect/jquery-jrumble.js"></script>

		<script type="text/javascript" src="components/filestyle/jquery.filestyle.js" ></script>

		<script type="text/javascript" src="components/placeholder/jquery.placeholder.js" ></script>

		<script type="text/javascript" src="components/Jcrop/jquery.Jcrop.js" ></script>

		<script type="text/javascript" src="components/imgTransform/jquery.transform.js" ></script>

		<script type="text/javascript" src="components/webcam/webcam.js" ></script>

		<script type="text/javascript" src="components/rating_star/rating_star.js"></script>

		<script type="text/javascript" src="components/dualListBox/dualListBox.js"  ></script>

		<script type="text/javascript" src="components/smartWizard/jquery.smartWizard.min.js"></script>

		<script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/zice.custom.js"></script>
        <script type="text/javascript">
        function validate(){
			profile.command.value = "command";
			profile.submit();
			
			}
        
        </script>

		</head>		

		<body class="dashborad">		

		<div id="alertMessage" class="error"></div> 

<?php if($msg == "sucess"){
	 $showMessage->sucessMessage("profile sucessfully update");
	}else if($msg == "error"){
		 $showMessage->errorMessage("profile not update sucessfully");
		}?>

	   <?php include 'header.php'; ?> <!--//  header -->

			<div id="shadowhead"></div>

			<div id="hide_panel"> 

				  <a class="butAcc" rel="0" id="show_menu"></a>

				  <a class="butAcc" rel="1" id="hide_menu"></a>

				  <a class="butAcc" rel="0" id="show_menu_icon"></a>

				  <a class="butAcc" rel="1" id="hide_menu_icon"></a>

			</div>		   

	  

				  <?php include 'navi.php'; ?>

				  

			<div id="content">

				<div class="inner">

					<?php include("Includes/topColumn.php"); 
					
					?>
					<div class="clear"></div> 

					  

					<div class="onecolumn" >

						<div class="header"><span><span class="ico gray administrator"></span>Profile Setting</span></div>

						<div class="clear"></div>

						<div class="content" >
		 
		
		  
		 
					<div class="boxtitle min">Take a picture with Webcam</div>

							<form id="validation_demo" name="profile" action="#"> 
                            <input type="hidden" name="command" value="" />

							<div  class="grid1">

									<div class="profileSetting" >
											<div class="avartar"><img src="images/avartarB.jpg" width="200" height="200" alt="avatar" /></div>

										   <div class="avartar">


										   <input type="file" class="fileupload" />

										   <p align="center"><span> OR </span>Take a picture with <a class="takeWebcam">Webcam</a></p>

										   </div>

									</div>

							</div>

							<div  class="grid3">

									<div class="section webcam">

									<label> Take a picture<small>With  webcam</small></label>   

									<div> 

												  <div id="screen"></div>

												  <div class="buttonPane">

													  <a id="takeButton" class="uibutton">Take Me</a> <a id="closeButton" class="uibutton special">Close</a>

												  </div>

												  <div class="buttonPane hideme">

													  <a id="uploadAvatar" class="uibutton confirm">Upload Avartar</a> <a id="retakeButton" class="uibutton special">Retake</a> 

									  </div>

									</div>

									</div>

                                    <div class="section ">

									<label> Full name<small>Text custom</small></label>   

									<div> 

									<input type="text" class="validate[required] large" name="authorName"value="<?php echo $authorName; ?>" id="f_required">

									</div>

									</div>

                                    

									<div class="section ">
									<label> Email<small>Text custom</small></label>   

									<div> 

									<input type="text" class="validate[required,custom[email]]  large" value="<?php echo $email; ?>"name="email" id="e_required">

									</div>

									</div>
                                    
                                    	<div class="section ">

									<label> Password<small>Text custom</small></label>   

									<div>

									<input type="password" placeholder="Password" class="validate[required,minSize[3]] medium" value="<?php echo $password; ?>" name="password" id="password"  />

									</div>

									</div>
                                    <!-- end section-->
                                    
                                   	<div class="section ">

									<label> Phone<small></small></label>   

									<div> 

									<input type="text" class="validate[required] large" name="phone" value="<?php echo $phone; ?>" id="f_required">

									</div>

									</div>
                                    <!-- nationality-->
                                    <div class="section ">

									<label> Nationality<small></small></label>   

									<div> 

									<input type="text" class="validate[required] large"  value="<?php echo $nationality; ?>" name="nationality" id="f_required">

									</div>

									</div>
                                    
                                     <!-- address-->
                                    <div class="section ">

                                        <label> Address<small></small></label>   
    
                                        <div> 
    
        	                                <input type="text" class="validate[required] large" name="address" value="<?php echo $address; ?>" id="f_required">
		    
                                        </div>

									</div>
                                      <!-- city-->
                                    <div class="section ">

                                        <label> city<small></small></label>   
    
                                        <div> 
    
        	                                <input type="text" onfocus="showInfo('<?php echo $message;?> ',3000);" class="validate[required] large" name="city" value="<?php echo $city; ?>" id="f_required">
		    
                                        </div>

									</div>
                                    
                                       <!-- country	-->
                                    <div class="section ">

                                        <label> country	<small></small></label>   
    
                                        <div>
                              	  <select data-placeholder="Choose a Country..." class="chzn-select" tabindex="2" >
                                  <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                                   <option selected="selected" value=""></option>
                                  <option value="United States">United States</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="Afghanistan">Afghanistan</option> 
                                  <option value="Albania">Albania</option> 
                                  <option value="Algeria">Algeria</option> 
                                  <option value="American Samoa">American Samoa</option> 
                                  <option value="Andorra">Andorra</option> 
                                  <option value="Angola">Angola</option> 
                                  <option value="Anguilla">Anguilla</option> 
                                  <option value="Antarctica">Antarctica</option> 
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                  <option value="Argentina">Argentina</option> 
                                  <option value="Armenia">Armenia</option> 
                                  <option value="Aruba">Aruba</option> 
                                  <option value="Australia">Australia</option> 
                                  <option value="Austria">Austria</option> 
                                  <option value="Azerbaijan">Azerbaijan</option> 
                                  <option value="Bahamas">Bahamas</option> 
                                  <option value="Bahrain">Bahrain</option> 
                                  <option value="Bangladesh">Bangladesh</option> 
                                  <option value="Barbados">Barbados</option> 
                                  <option value="Belarus">Belarus</option> 
                                  <option value="Belgium">Belgium</option> 
                                  <option value="Belize">Belize</option> 
                                  <option value="Benin">Benin</option> 
                                  <option value="Bermuda">Bermuda</option> 
                                  <option value="Bhutan">Bhutan</option> 
                                  <option value="Bolivia">Bolivia</option> 
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                  <option value="Botswana">Botswana</option> 
                                  <option value="Bouvet Island">Bouvet Island</option> 
                                  <option value="Brazil">Brazil</option> 
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                  <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                  <option value="Bulgaria">Bulgaria</option> 
                                  <option value="Burkina Faso">Burkina Faso</option> 
                                  <option value="Burundi">Burundi</option> 
                                  <option value="Cambodia">Cambodia</option> 
                                  <option value="Cameroon">Cameroon</option> 
                                  <option value="Canada">Canada</option> 
                                  <option value="Cape Verde">Cape Verde</option> 
                                  <option value="Cayman Islands">Cayman Islands</option> 
                                  <option value="Central African Republic">Central African Republic</option> 
                                  <option value="Chad">Chad</option> 
                                  <option value="Chile">Chile</option> 
                                  <option value="China">China</option> 
                                  <option value="Christmas Island">Christmas Island</option> 
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                  <option value="Colombia">Colombia</option> 
                                  <option value="Comoros">Comoros</option> 
                                  <option value="Congo">Congo</option> 
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                  <option value="Cook Islands">Cook Islands</option> 
                                  <option value="Costa Rica">Costa Rica</option> 
                                  <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                  <option value="Croatia">Croatia</option> 
                                  <option value="Cuba">Cuba</option> 
                                  <option value="Cyprus">Cyprus</option> 
                                  <option value="Czech Republic">Czech Republic</option> 
                                  <option value="Denmark">Denmark</option> 
                                  <option value="Djibouti">Djibouti</option> 
                                  <option value="Dominica">Dominica</option> 
                                  <option value="Dominican Republic">Dominican Republic</option> 
                                  <option value="Ecuador">Ecuador</option> 
                                  <option value="Egypt">Egypt</option> 
                                  <option value="El Salvador">El Salvador</option> 
                                  <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                  <option value="Eritrea">Eritrea</option> 
                                  <option value="Estonia">Estonia</option> 
                                  <option value="Ethiopia">Ethiopia</option> 
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                  <option value="Faroe Islands">Faroe Islands</option> 
                                  <option value="Fiji">Fiji</option> 
                                  <option value="Finland">Finland</option> 
                                  <option value="France">France</option> 
                                  <option value="French Guiana">French Guiana</option> 
                                  <option value="French Polynesia">French Polynesia</option> 
                                  <option value="French Southern Territories">French Southern Territories</option> 
                                  <option value="Gabon">Gabon</option> 
                                  <option value="Gambia">Gambia</option> 
                                  <option value="Georgia">Georgia</option> 
                                  <option value="Germany">Germany</option> 
                                  <option value="Ghana">Ghana</option> 
                                  <option value="Gibraltar">Gibraltar</option> 
                                  <option value="Greece">Greece</option> 
                                  <option value="Greenland">Greenland</option> 
                                  <option value="Grenada">Grenada</option> 
                                  <option value="Guadeloupe">Guadeloupe</option> 
                                  <option value="Guam">Guam</option> 
                                  <option value="Guatemala">Guatemala</option> 
                                  <option value="Guinea">Guinea</option> 
                                  <option value="Guinea-bissau">Guinea-bissau</option> 
                                  <option value="Guyana">Guyana</option> 
                                  <option value="Haiti">Haiti</option> 
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                  <option value="Honduras">Honduras</option> 
                                  <option value="Hong Kong">Hong Kong</option> 
                                  <option value="Hungary">Hungary</option> 
                                  <option value="Iceland">Iceland</option> 
                                  <option value="India">India</option> 
                                  <option value="Indonesia">Indonesia</option> 
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                  <option value="Iraq">Iraq</option> 
                                  <option value="Ireland">Ireland</option> 
                                  <option value="Israel">Israel</option> 
                                  <option value="Italy">Italy</option> 
                                  <option value="Jamaica">Jamaica</option> 
                                  <option value="Japan">Japan</option> 
                                  <option value="Jordan">Jordan</option> 
                                  <option value="Kazakhstan">Kazakhstan</option> 
                                  <option value="Kenya">Kenya</option> 
                                  <option value="Kiribati">Kiribati</option> 
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                  <option value="Korea, Republic of">Korea, Republic of</option> 
                                  <option value="Kuwait">Kuwait</option> 
                                  <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                  <option value="Latvia">Latvia</option> 
                                  <option value="Lebanon">Lebanon</option> 
                                  <option value="Lesotho">Lesotho</option> 
                                  <option value="Liberia">Liberia</option> 
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                  <option value="Liechtenstein">Liechtenstein</option> 
                                  <option value="Lithuania">Lithuania</option> 
                                  <option value="Luxembourg">Luxembourg</option> 
                                  <option value="Macao">Macao</option> 
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                  <option value="Madagascar">Madagascar</option> 
                                  <option value="Malawi">Malawi</option> 
                                  <option value="Malaysia">Malaysia</option> 
                                  <option value="Maldives">Maldives</option> 
                                  <option value="Mali">Mali</option> 
                                  <option value="Malta">Malta</option> 
                                  <option value="Marshall Islands">Marshall Islands</option> 
                                  <option value="Martinique">Martinique</option> 
                                  <option value="Mauritania">Mauritania</option> 
                                  <option value="Mauritius">Mauritius</option> 
                                  <option value="Mayotte">Mayotte</option> 
                                  <option value="Mexico">Mexico</option> 
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                  <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                  <option value="Monaco">Monaco</option> 
                                  <option value="Mongolia">Mongolia</option> 
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option> 
                                  <option value="Morocco">Morocco</option> 
                                  <option value="Mozambique">Mozambique</option> 
                                  <option value="Myanmar">Myanmar</option> 
                                  <option value="Namibia">Namibia</option> 
                                  <option value="Nauru">Nauru</option> 
                                  <option value="Nepal">Nepal</option> 
                                  <option value="Netherlands">Netherlands</option> 
                                  <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                  <option value="New Caledonia">New Caledonia</option> 
                                  <option value="New Zealand">New Zealand</option> 
                                  <option value="Nicaragua">Nicaragua</option> 
                                  <option value="Niger">Niger</option> 
                                  <option value="Nigeria">Nigeria</option> 
                                  <option value="Niue">Niue</option> 
                                  <option value="Norfolk Island">Norfolk Island</option> 
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                  <option value="Norway">Norway</option> 
                                  <option value="Oman">Oman</option> 
                                  <option value="Pakistan">Pakistan</option> 
                                  <option value="Palau">Palau</option> 
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                  <option value="Panama">Panama</option> 
                                  <option value="Papua New Guinea">Papua New Guinea</option> 
                                  <option value="Paraguay">Paraguay</option> 
                                  <option value="Peru">Peru</option> 
                                  <option value="Philippines">Philippines</option> 
                                  <option value="Pitcairn">Pitcairn</option> 
                                  <option value="Poland">Poland</option> 
                                  <option value="Portugal">Portugal</option> 
                                  <option value="Puerto Rico">Puerto Rico</option> 
                                  <option value="Qatar">Qatar</option> 
                                  <option value="Reunion">Reunion</option> 
                                  <option value="Romania">Romania</option> 
                                  <option value="Russian Federation">Russian Federation</option> 
                                  <option value="Rwanda">Rwanda</option> 
                                  <option value="Saint Helena">Saint Helena</option> 
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                  <option value="Saint Lucia">Saint Lucia</option> 
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                  <option value="Samoa">Samoa</option> 
                                  <option value="San Marino">San Marino</option> 
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                  <option value="Saudi Arabia">Saudi Arabia</option> 
                                  <option value="Senegal">Senegal</option> 
                                  <option value="Serbia">Serbia</option> 
                                  <option value="Seychelles">Seychelles</option> 
                                  <option value="Sierra Leone">Sierra Leone</option> 
                                  <option value="Singapore">Singapore</option> 
                                  <option value="Slovakia">Slovakia</option> 
                                  <option value="Slovenia">Slovenia</option> 
                                  <option value="Solomon Islands">Solomon Islands</option> 
                                  <option value="Somalia">Somalia</option> 
                                  <option value="South Africa">South Africa</option> 
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                  <option value="South Sudan">South Sudan</option> 
                                  <option value="Spain">Spain</option> 
                                  <option value="Sri Lanka">Sri Lanka</option> 
                                  <option value="Sudan">Sudan</option> 

                                  <option value="Suriname">Suriname</option> 
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                  <option value="Swaziland">Swaziland</option> 
                                  <option value="Sweden">Sweden</option> 
                                  <option value="Switzerland">Switzerland</option> 
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
                                  <option value="Tokelau">Tokelau</option> 
                                  <option value="Tonga">Tonga</option> 
                                  <option value="Tajikistan">Tajikistan</option> 
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                  <option value="Thailand">Thailand</option> 
                                  <option value="Timor-leste">Timor-leste</option> 
                                  <option value="Togo">Togo</option> 
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                  <option value="Tunisia">Tunisia</option> 
                                  <option value="Turkey">Turkey</option> 
                                  <option value="Turkmenistan">Turkmenistan</option> 
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                  <option value="Tuvalu">Tuvalu</option> 
                                  <option value="Uganda">Uganda</option> 
                                  <option value="Ukraine">Ukraine</option> 
                                  <option value="United Arab Emirates">United Arab Emirates</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="United States">United States</option> 
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                  <option value="Uruguay">Uruguay</option> 
                                  <option value="Uzbekistan">Uzbekistan</option> 
                                  <option value="Vanuatu">Vanuatu</option> 
                                  <option value="Venezuela">Venezuela</option> 
                                  <option value="Viet Nam">Viet Nam</option> 
                                  <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                  <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                  <option value="Western Sahara">Western Sahara</option> 
                                  <option value="Yemen">Yemen</option> 
                                  <option value="Zambia">Zambia</option> 
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select>       
                        </div>

									</div>
                                    <div> Payment Detaile </div>
                                      <!-- Card Number	-->
                                    <div class="section ">

                                        <label> Credit Card Number<small></small></label>   
    
                                        <div> 
    
        	                                <input type="text" class="validate[required] large" name="creditCard" value="<?php echo $creditCard; ?>" id="f_required">
		    
                                        </div>
                                        </div>
                                       
                                         <!-- Bank Account Number	-->
                                    <div class="section">

                                        <label> Bank Account Number<small></small></label>   
    
                                        <div> 
    
        	                                <input type="text" class="validate[required] large" name="bankAccount" value="<?php echo $bankAccount; ?>" id="f_required">
		    
                                        </div>
                                        </div>
                                       
                                    <div class="section ">

									<label>gender<small>Text custom</small></label>   

									<div> 
									<?PHP
									echo $msg;
									 ?>
                                    <?php if($gender == "male"){
									?>

                                     
									  <div>

										  <input type="radio" name="opinions" id="radio-1" value="male"  class="ck" checked="checked" />

										  <label for="radio-1">Male</label>
                                      <?php ?>

									  </div>

									  <div>

										  <input type="radio" name="opinions" id="radio-2" value="female"  class="ck" />

										  <label for="radio-2" >Female</label>

									  </div>
                                      <?php }else{
										  ?>
                                            <div>

										  <input type="radio" name="opinions" id="radio-1" value="male"  class="ck" />

										  <label for="radio-1">Male</label>
                                      <?php ?>

									  </div>

									  <div>

										  <input type="radio" name="opinions" id="radio-2" value="female"  class="ck" checked="checked" />

										  <label for="radio-2" >Female</label>

									  </div>
										  
										  
										 <?php  } ?>

									</div>

									</div>

													

								   

									<div class="section last">

									<div>

									  <a  onclick="validate()" class="uibutton submit_form" >submitForm</a>

								   </div>

								   </div>

							  

							</div>

							</form>

							<div class="clear"></div>





						</div>

					</div>

					<!-- // End onecolumn -->

					

					<div class="clear"></div>

					<?php include 'footer.php'; ?>

				</div> <!--// End inner -->

			</div> <!--// End content --> 

</body>

</html>  
  