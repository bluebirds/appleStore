<?php require_once('Connections/connection.php'); ?>

<?php

if (!function_exists("GetSQLValueString")) {

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 

{

  if (PHP_VERSION < 6) {

    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  }



  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);



  switch ($theType) {

    case "text":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;    

    case "long":

    case "int":

      $theValue = ($theValue != "") ? intval($theValue) : "NULL";

      break;

    case "double":

      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";

      break;

    case "date":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;

    case "defined":

      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;

      break;

  }

  return $theValue;

}

}



$editFormAction = $_SERVER['PHP_SELF'];

if (isset($_SERVER['QUERY_STRING'])) {

  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);

}

$dob=$_POST['day']."-".$_POST['month']."-".$_POST['year'];

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "signup_form")) {

  $insertSQL = sprintf("INSERT INTO authors (authorName, email, password, gender, dob, phone, nationality, address, city, country, website) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",

                       GetSQLValueString($_POST['name'], "text"),

                       GetSQLValueString($_POST['email'], "text"),

                       GetSQLValueString($_POST['pass1'], "text"),

                       GetSQLValueString($_POST['gender'], "text"),

                       GetSQLValueString($dob, "text"),

                       GetSQLValueString($_POST['tele'], "text"),

                       GetSQLValueString($_POST['Nationality'], "text"),

                       GetSQLValueString($_POST['adress'], "text"),

                       GetSQLValueString($_POST['city'], "text"),

                       GetSQLValueString($_POST['country'], "text"),

                       GetSQLValueString($_POST['website'], "text"));



  mysql_select_db($database_connection, $connection);

  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());



  $insertGoTo = "signup.php";

  if (isset($_SERVER['QUERY_STRING'])) {

    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";

    $insertGoTo .= $_SERVER['QUERY_STRING'];

  }

  header(sprintf("Location: %s", $insertGoTo));

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



    <head>



        <title>CSS Registration Form</title>



        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



        <link rel="stylesheet" type="text/css" href="css/signup.css"/>

        	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

        <script type="text/javascript" src="js/formvalidation.js"></script>



    </head>



    <body>    



        <form method="POST" action="<?php echo $editFormAction; ?>" class="register" name="signup_form">



            <h1>Registration</h1>



            <fieldset class="row1">



                <legend>Account Details



                </legend>

			<div>

            <div id="email_avail" style="color:#B62427;display:none; margin-left: 150px;float: left;"></div>

                <p>



                    <label>Email *



                    </label>



                    <input name="email" id="email" type="text"/>



                    <label>Repeat email *



                    </label>



                    <input id="Repeat_email" type="text"/>



                </p>

                </div>

                <div id="email_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Email</div>

			<div>

                <p>



                    <label>Password*



                    </label>



                    <input name="pass1" id="pass1" type="text"/>



                    <label>Repeat Password*



                    </label>



                    <input name="re-pass" id="re-pass" type="text"/>



                    <label class="obinfo">* obligatory fields



                    </label>



                </p>

                </div>

                <div id="pass_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Email</div>

                



            </fieldset>



            <fieldset class="row2">



                <legend>Personal Details



                </legend>

			<div>

                <p>



                    <label>Name *



                    </label>



                    <input name="name" id="name" type="text" class="long"/>



                </p>

            </div>

            <div id="name_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Name Plz</div>

			<div>

                <p>



                    <label>Phone *



                    </label>



                    <input type="text" name="tele" id="tele" maxlength="10"/>



                </p>

                </div>

                <div id="tele_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Email Phone No</div>

				<div>

                <p>



                    <label>Address *



                    </label>



                    <input name="adress" id="adress" type="text" class="long"/>



                </p>

                </div>

                <div id="adress_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Email</div>

				<div>

                <p>



                    <label>City *



                    </label>



                    <input type="text" name="city" id="city" class="long"/>



                </p>

                </div>

                 <div id="city_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Email</div>

				<div>

                <p>



                    <label>Country *



                    </label>



                    <select name="country" id="country">



						<option value="default" selected="selected">Select</option>

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

                                                <option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>

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

                                                <option value="East Timor">East Timor</option>

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

                                                <option value="France, Metropolitan">France, Metropolitan</option>

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

                                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>

                                                <option value="Honduras">Honduras</option>

                                                <option value="Hong Kong">Hong Kong</option>

                                                <option value="Hungary">Hungary</option>

                                                <option value="Iceland">Iceland</option>

                                                <option value="India">India</option>

                                                <option value="Indonesia">Indonesia</option>

                                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

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

                                                <option value="Macau">Macau</option>

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

                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

                                                <option value="Saint Lucia">Saint Lucia</option>

                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>

                                                <option value="Samoa">Samoa</option>

                                                <option value="San Marino">San Marino</option>

                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>

                                                <option value="Saudi Arabia">Saudi Arabia</option>

                                                <option value="Senegal">Senegal</option>

                                                <option value="Seychelles">Seychelles</option>

                                                <option value="Sierra Leone">Sierra Leone</option>

                                                <option value="Singapore">Singapore</option>

                                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>

                                                <option value="Slovenia">Slovenia</option>

                                                <option value="Solomon Islands">Solomon Islands</option>

                                                <option value="Somalia">Somalia</option>

                                                <option value="South Africa">South Africa</option>

                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>

                                                <option value="Spain">Spain</option>

                                                <option value="Sri Lanka">Sri Lanka</option>

                                                <option value="St. Helena">St. Helena</option>

                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                                                <option value="Sudan">Sudan</option>

                                                <option value="Suriname">Suriname</option>

                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                                                <option value="Swaziland">Swaziland</option>

                                                <option value="Sweden">Sweden</option>

                                                <option value="Switzerland">Switzerland</option>

                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>

                                                <option value="Tajikistan">Tajikistan</option>

                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                                                <option value="Thailand">Thailand</option>

                                                <option value="Togo">Togo</option>

                                                <option value="Tokelau">Tokelau</option>

                                                <option value="Tonga">Tonga</option>

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

                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                                                <option value="Western Sahara">Western Sahara</option>

                                                <option value="Yemen">Yemen</option>

                                                <option value="Yugoslavia">Yugoslavia</option>

                                                <option value="Zambia">Zambia</option>

                                                <option value="Zimbabwe">Zimbabwe</option>



                    </select>



                </p>

                </div>

                <div id="country_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Email</div>



                <p>



                    <label class="optional">Website



                    </label>



                    <input class="long" type="text" value="http://" name="website"/>







                </p>



            </fieldset>



            <fieldset class="row3">



                <legend>Further Information



                </legend>



                <p>



                    <label>Gender *</label>



                    <input name="gender" type="radio" value="male" checked="checked"/>



                    <label class="gender">Male</label>



                    <input  type="radio" name="gender" value="female"/>



                    <label class="gender">Female</label>



                </p>

			<div>

                <p>



                    <label>Birthdate *



                    </label>



                    <select class="date" name="day">



                        <option value="1" selected="selected">01</option>



                        <option value="2">02



                        </option>



                        <option value="3">03



                        </option>



                        <option value="4">04



                        </option>



                        <option value="5">05



                        </option>



                        <option value="6">06



                        </option>



                        <option value="7">07



                        </option>



                        <option value="8">08



                        </option>



                        <option value="9">09



                        </option>



                        <option value="10">10



                        </option>



                        <option value="11">11



                        </option>



                        <option value="12">12



                        </option>



                        <option value="13">13



                        </option>



                        <option value="14">14



                        </option>



                        <option value="15">15



                        </option>



                        <option value="16">16



                        </option>



                        <option value="17">17



                        </option>



                        <option value="18">18



                        </option>



                        <option value="19">19



                        </option>



                        <option value="20">20



                        </option>



                        <option value="21">21



                        </option>



                        <option value="22">22



                        </option>



                        <option value="23">23



                        </option>



                        <option value="24">24



                        </option>



                        <option value="25">25



                        </option>



                        <option value="26">26



                        </option>



                        <option value="27">27



                        </option>



                        <option value="28">28



                        </option>



                        <option value="29">29



                        </option>



                        <option value="30">30



                        </option>



                        <option value="31">31



                        </option>



                    </select>



                    <select name="month">



                        <option value="1" selected="selected">January</option>





                        <option value="2">February



                        </option>



                        <option value="3">March



                        </option>



                        <option value="4">April



                        </option>



                        <option value="5">May



                        </option>



                        <option value="6">June



                        </option>



                        <option value="7">July



                        </option>



                        <option value="8">August



                        </option>



                        <option value="9">September



                        </option>



                        <option value="10">October



                        </option>



                        <option value="11">November



                        </option>



                        <option value="12">December



                        </option>



                    </select>



                    <input name="year" id="year" class="year" type="text" size="4" maxlength="4"/>e.g 1976



                </p>

                </div>

                <div id="year_val" style="color:#B62427;display:none; margin-left: 150px;float: left;">Enter Date Of Birth</div>

                

              

				<div>

                <p>



                    <label>Nationality *



                    </label>



                    <select name="Nationality" id="Nationality">



                        <option value="default" selected="selected">Select</option>

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

                                                <option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>

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

                                                <option value="East Timor">East Timor</option>

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

                                                <option value="France, Metropolitan">France, Metropolitan</option>

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

                                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>

                                                <option value="Honduras">Honduras</option>

                                                <option value="Hong Kong">Hong Kong</option>

                                                <option value="Hungary">Hungary</option>

                                                <option value="Iceland">Iceland</option>

                                                <option value="India">India</option>

                                                <option value="Indonesia">Indonesia</option>

                                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

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

                                                <option value="Macau">Macau</option>

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

                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

                                                <option value="Saint Lucia">Saint Lucia</option>

                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>

                                                <option value="Samoa">Samoa</option>

                                                <option value="San Marino">San Marino</option>

                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>

                                                <option value="Saudi Arabia">Saudi Arabia</option>

                                                <option value="Senegal">Senegal</option>

                                                <option value="Seychelles">Seychelles</option>

                                                <option value="Sierra Leone">Sierra Leone</option>

                                                <option value="Singapore">Singapore</option>

                                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>

                                                <option value="Slovenia">Slovenia</option>

                                                <option value="Solomon Islands">Solomon Islands</option>

                                                <option value="Somalia">Somalia</option>

                                                <option value="South Africa">South Africa</option>

                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>

                                                <option value="Spain">Spain</option>

                                                <option value="Sri Lanka">Sri Lanka</option>

                                                <option value="St. Helena">St. Helena</option>

                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                                                <option value="Sudan">Sudan</option>

                                                <option value="Suriname">Suriname</option>

                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                                                <option value="Swaziland">Swaziland</option>

                                                <option value="Sweden">Sweden</option>

                                                <option value="Switzerland">Switzerland</option>

                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>

                                                <option value="Tajikistan">Tajikistan</option>

                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                                                <option value="Thailand">Thailand</option>

                                                <option value="Togo">Togo</option>

                                                <option value="Tokelau">Tokelau</option>

                                                <option value="Tonga">Tonga</option>

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

                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                                                <option value="Western Sahara">Western Sahara</option>

                                                <option value="Yemen">Yemen</option>

                                                <option value="Yugoslavia">Yugoslavia</option>

                                                <option value="Zambia">Zambia</option>

                                                <option value="Zimbabwe">Zimbabwe</option>



                    </select>



                </p>

                </div>

                <div id="Nationality_val" style="display:none; margin-left: 150px;float: left;">Enter Date Of Birth</div>



                <div class="infobox"><h4>Helpful Information</h4>



                    <p>Here comes some explaining text, sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>



                </div>



            </fieldset>



            <fieldset class="row4">



                <legend>Terms and Mailing



                </legend>

				<div>

                <p class="agreement">



                    <input name="terms" id="terms" type="checkbox" value=""/>



                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>



                </p>

                </div>

                <div id="terms_val" style="color:#B62427;display:none; margin-left: 150px;float: left;"></div>



            </fieldset>



            <div id="subbut"><input type="submit" class="button" id="submit_form" value="Submit"/></div>

            <input type="hidden" name="MM_insert" value="signup_form" />

        </form>



    </body>



</html>























