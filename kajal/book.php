<!DOCTYPE html>
<html>
<head>
<title>Book now</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="style1.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row" style="background:#f6f7f8;">
                    <h1 class="plan-trip text-center">Let's Plan your Trip</h1>
                                        <div class="col-md-6 col-sm-6">
                        <input type="text" placeholder="Name" class="form-control" name="name" value="">
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                        <input type="text" placeholder="Email" class="form-control" name="email" value="">
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                        	<select id="countryCombo" class="form-control" name="country" onchange="getISDCode(this.value); document.queryform.Phone.focus()">
                                 <option selected="selected" value="">Country of Residence</option>
                                 <script type="text/javascript">AddCountryOption();</script><option value="Afghanistan">Afghanistan</option>
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
<option value="Ascension">Ascension</option>
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
<option value="Brazil">Brazil</option>
<option value="British Virgin Islands">British Virgin Islands</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde Islands">Cape Verde Islands</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chatham Island (New Zealand)">Chatham Island (New Zealand)</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Diego Garcia">Diego Garcia</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Easter Island">Easter Island</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Antilles">French Antilles</option>
<option value="French Guyana">French Guyana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="Fyrom (Macedonia)">Fyrom (Macedonia)</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada and Carriacuou">Grenada and Carriacuou</option>
<option value="Grenadin Islands">Grenadin Islands</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guantanamo Bay">Guantanamo Bay</option>
<option value="Guatemala">Guatemala</option>
<option value="Guiana">Guiana</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jerusalem">Jerusalem</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="South Korea">South Korea</option>
<option value="Kuwait">Kuwait</option>
<option value="Kygyzstan">Kygyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Mariana Islands">Mariana Islands</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia,  Federated States">Micronesia,  Federated States</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Miquelon">Miquelon</option>
<option value="Moldova">Moldova</option>
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
<option value="Neth. Antilles">Neth. Antilles</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="North Korea">North Korea</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Principe">Principe</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion Island">Reunion Island</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Kitts">St. Kitts</option>
<option value="St. Lucia">St. Lucia</option>
<option value="St Pierre et Miquelon">St Pierre et Miquelon</option>
<option value="St. Vincent">St. Vincent</option>
<option value="Saipan">Saipan</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome">Sao Tome</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal Republic">Senegal Republic</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
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
<option value="Uruguay">Uruguay</option>
<option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican city">Vatican city</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futuna Islands">Wallis &amp; Futuna Islands</option>
<option value="Western Samoa">Western Samoa</option>
<option value="Yemen">Yemen</option>
<option value="Yugoslavia">Yugoslavia</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zanzibar">Zanzibar</option>
<option value="Zimbabwe">Zimbabwe</option>

                            </select>
                    </div>
                
					<div class="col-md-6 col-sm-6">
                    	<div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <input type="text" placeholder="Code" readonly="readonly" class="form-control" name="code" value="">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control" placeholder="Phone" name="Phone" value="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="check_in" id="check_in" placeholder="Arrival" 
						class="form-control" value="" autocomplete="nope" readonly="true" style="background: white; cursor: pointer;">
                    </div>                    
                    <div class="col-md-6 col-sm-6">
                       	<input type="text" name="check_out" id="check_out" value="" placeholder="Departure" class="form-control" autocomplete="nope" readonly="true" style="background: white; cursor: pointer;">
                    </div>
                    <div class="col-md-6 col-sm-6">
                    	<div class="row">
                        
                    		<div class="col-md-6 col-sm-6 col-xs-6">
                                <select class="form-control" name="adults">
                                    <option selected="selected" value="">Adult</option>
                                    	<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>                                </select>
                            </div>
                                    
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select class="form-control" name="children">
                                    <option selected="selected" value="">Children</option>
                                    <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>                                </select>
                            </div>	
                    
                        </div>
                    </div>
                            
                    <div class="col-md-6 col-sm-6">
                    	<select class="form-control" name="accom">
                        	<option selected="selected" value="null">Select Accommodation</option>
                            <option value="Luxury">Luxury</option>
                            <option value="5 Star">5 Star</option>
                            <option value="4 Star">4 Star</option> 
                            <option value="3 Star">3 Star</option>
                            <option value="Budget">Budget</option>
                        </select>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 reqfd">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4">
                            	<label style="padding-top:9px;">Services Required: </label>
                            </div>
                            
                            <div class="col-lg-9 col-md-8 col-sm-8">
                                <ul class="list-inline checkbox">
                                    <li>
                                        <label>
                                         	<input name="Services[]" value="Hotel-Booking" type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> <span class="checkbox-text">Hotels</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input name="Services" value="Tour-Package" type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> <span class="checkbox-text"> Tour</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input name="Services" id="flight" value="Air-booking" type="checkbox" onchange="$('#flight_txt').toggle()"> 
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> <span class="checkbox-text"> Flight</span> 
                                        </label>	
                                    </li>    
                                    <li>
                                        <label>
                                            <input name="Services" id="car" value="Car-Booking" type="checkbox" onchange="$('#car_txt').toggle()"> 
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> <span class="checkbox-text"> Car Rental</span>
                                        </label>	
                                    </li>   
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 ntfld" id="flight_txt" style="display:none">
                    	<label>Flight Booking:</label>
                        <div class="row">
                        	<div class="col-md-12">
                            	<ul class="list-inline checkbox">
                                    <li><input name="flightchoice" type="radio" value="Round Trip"> Round trip</li>
                                    <li><input name="flightchoice" type="radio" value="One Way"> One way</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 ntbfd">
                                <div class="form-group">
                               		<input type="text" name="leaving_from" value="" class="form-control" placeholder="Leaving From">
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-6 ntbfd">
                                <div class="form-group">
                                	<input type="text" name="going_to" value="" class="form-control" placeholder="Going To">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 ntfld" id="car_txt" style="display:none">
                    	<label>Car Rental:</label>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 ntbfd">
                                <div class="form-group">
                                	<input type="text" name="pick_up_from" value="" class="form-control" placeholder="Pick up From">
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-6 ntbfd">
                                <div class="form-group">
                                	<input type="text" name="pick_up_to" value="" class="form-control" placeholder="Drop To">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                        <textarea rows="3" class="form-control" name="add_info" placeholder="Message" 
						style="height:95px;"></textarea>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                               <img width="65" height="25" alt="" src="https://www.tourism-of-india.com/captcha.php?1556002953" style="margin-top:13px;">
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <button aria-required="true" type="submit" name="submit"
							class="btn btn-lg btn-default pull-left book" style="margin-top:10px;">Submit</button>
                            </div>
                        </div>
                    </div>
                    
                 </div>
				 </div>
				 </body>
				 </html>
				 
				 <?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"tourism");

if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$country=$_POST["country"];
$phone=$_POST["Phone"];
$check_in=$_POST["check_in"];
$check_out=$_POST["check_out"];
$adults=$_POST["adults"];
$children=$_POST["children"];
$accom=$_POST["accom"];
$services=$_POST["Services"];
$add_info=$_POST["add_info"];
$query="insert into booking(name,email,country,phone,arrival,departure,adult,children,accommodation,service,message)
 values('$name','$email','$country','$phone','$check_in','$check_out','$adults','$children','$accom','$service','$add_info')";
mysqli_query($con,$query);
}
?>
				 