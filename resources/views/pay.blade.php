<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Checkout</title>
</head>

<body>
    <div class="form-container">

        <form class="checkout-form">
            <div class="input-line">
                <div class="form-title">
                    <h3>Contact information</h3>
                    <p>Already have an account? <a href="#" target="_blank">Log in</a></p>
                </div>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div>
                <input type="checkbox" id="checkbox" name="checkbox">
                <label for="checkbox">Email me with news and offers</label>

            </div>
            <h3>Shipping address</h3>
            <div class="input-line grid">
                <input type="text" name="First_name" id="First_name" placeholder="First name">
                <input type="text" name="Last_name" id="Last_name" placeholder="Last name">
            </div>
            <div class="input-line">
                <input type="text" name="Company" id="Company"
                    placeholder="Company(required for business addresses)">
            </div>
            <div class="input-line">
                <input type="text" name="Address" id="Address" placeholder="Address">
            </div>
            <div class="input-line">
                <input type="text" name="Address2" id="Address2" placeholder="Apartment, suite, etc (optionalS)">
            </div>
            <div class="input-line">
                <input type="text" name="City" id="City" placeholder="City">
            </div>
            <div class="input-line select">
                <select>
                    <option label="Albania" value="AL">
                        Albania</option>
                    <option label="Algeria" value="DZ">
                        Algeria</option>
                    <option label="Andorra" value="AD">
                        Andorra</option>
                    <option label="Angola" value="AO">
                        Angola</option>
                    <option label="Anguilla" value="AI">
                        Anguilla</option>
                    <option label="Antigua &amp; Barbuda" value="AG">Antigua &amp; Barbuda
                    </option>
                    <option label="Argentina" value="AR">Argentina</option>
                    <option label="Armenia" value="AM">
                        Armenia</option>
                    <option label="Aruba" value="AW">
                        Aruba</option>
                    <option label="Australia" value="AU">Australia</option>
                    <option label="Austria" value="AT">
                        Austria</option>
                    <option label="Azerbaijan" value="AZ">Azerbaijan</option>
                    <option label="Bahamas" value="BS">
                        Bahamas</option>
                    <option label="Bahrain" value="BH">
                        Bahrain</option>
                    <option label="Barbados" value="BB">
                        Barbados</option>
                    <option label="Belarus" value="BY">
                        Belarus</option>
                    <option label="Belgium" value="BE">
                        Belgium</option>
                    <option label="Belize" value="BZ">
                        Belize</option>
                    <option label="Benin" value="BJ">
                        Benin</option>
                    <option label="Bermuda" value="BM">
                        Bermuda</option>
                    <option label="Bhutan" value="BT">
                        Bhutan</option>
                    <option label="Bolivia" value="BO">
                        Bolivia</option>
                    <option label="Bosnia &amp; Herzegovina" value="BA">Bosnia &amp;
                        Herzegovina</option>
                    <option label="Botswana" value="BW">
                        Botswana</option>
                    <option label="Brazil" value="BR">
                        Brazil</option>
                    <option label="British Virgin Islands" value="VG">British Virgin
                        Islands</option>
                    <option label="Brunei" value="BN">
                        Brunei</option>
                    <option label="Bulgaria" value="BG">
                        Bulgaria</option>
                    <option label="Burkina Faso" value="BF">Burkina Faso</option>
                    <option label="Burundi" value="BI">
                        Burundi</option>
                    <option label="Cambodia" value="KH">
                        Cambodia</option>
                    <option label="Cameroon" value="CM">
                        Cameroon</option>
                    <option label="Canada" value="CA">
                        Canada</option>
                    <option label="Cape Verde" value="CV">Cape Verde</option>
                    <option label="Cayman Islands" value="KY">Cayman Islands
                    </option>
                    <option label="Chad" value="TD">Chad
                    </option>
                    <option label="Chile" value="CL">
                        Chile</option>
                    <option label="China" value="C2">
                        China</option>
                    <option label="Colombia" value="CO">
                        Colombia</option>
                    <option label="Comoros" value="KM">
                        Comoros</option>
                    <option label="Congo - Brazzaville" value="CG">Congo - Brazzaville
                    </option>
                    <option label="Congo - Kinshasa" value="CD">Congo - Kinshasa
                    </option>
                    <option label="Cook Islands" value="CK">Cook Islands</option>
                    <option label="Costa Rica" value="CR">Costa Rica</option>
                    <option label="Côte d’Ivoire" value="CI">Côte d’Ivoire
                    </option>
                    <option label="Croatia" value="HR">
                        Croatia</option>
                    <option label="Cyprus" value="CY">
                        Cyprus</option>
                    <option label="Czech Republic" value="CZ">Czech Republic
                    </option>
                    <option label="Denmark" value="DK">
                        Denmark</option>
                    <option label="Djibouti" value="DJ">
                        Djibouti</option>
                    <option label="Dominica" value="DM">
                        Dominica</option>
                    <option label="Dominican Republic" value="DO">Dominican Republic
                    </option>
                    <option label="Ecuador" value="EC">
                        Ecuador</option>
                    <option label="Egypt" value="EG">
                        Egypt</option>
                    <option label="El Salvador" value="SV">El Salvador</option>
                    <option label="Eritrea" value="ER">
                        Eritrea</option>
                    <option label="Estonia" value="EE">
                        Estonia</option>
                    <option label="Ethiopia" value="ET">
                        Ethiopia</option>
                    <option label="Falkland Islands" value="FK">Falkland Islands
                    </option>
                    <option label="Faroe Islands" value="FO">Faroe Islands
                    </option>
                    <option label="Fiji" value="FJ">Fiji
                    </option>
                    <option label="Finland" value="FI">
                        Finland</option>
                    <option label="France" value="FR">
                        France</option>
                    <option label="French Guiana" value="GF">French Guiana
                    </option>
                    <option label="French Polynesia" value="PF">French Polynesia
                    </option>
                    <option label="Gabon" value="GA">
                        Gabon</option>
                    <option label="Gambia" value="GM">
                        Gambia</option>
                    <option label="Georgia" value="GE">
                        Georgia</option>
                    <option label="Germany" value="DE">
                        Germany</option>
                    <option label="Gibraltar" value="GI">Gibraltar</option>
                    <option label="Greece" value="GR">
                        Greece</option>
                    <option label="Greenland" value="GL">Greenland</option>
                    <option label="Grenada" value="GD">
                        Grenada</option>
                    <option label="Guadeloupe" value="GP">Guadeloupe</option>
                    <option label="Guatemala" value="GT">Guatemala</option>
                    <option label="Guinea" value="GN">
                        Guinea</option>
                    <option label="Guinea-Bissau" value="GW">Guinea-Bissau
                    </option>
                    <option label="Guyana" value="GY">
                        Guyana</option>
                    <option label="Honduras" value="HN">
                        Honduras</option>
                    <option label="Hong Kong SAR China" value="HK">Hong Kong SAR China
                    </option>
                    <option label="Hungary" value="HU">
                        Hungary</option>
                    <option label="Iceland" value="IS">
                        Iceland</option>
                    <option label="India" value="IN">
                        India</option>
                    <option label="Indonesia" value="ID">Indonesia</option>
                    <option label="Ireland" value="IE">
                        Ireland</option>
                    <option label="Israel" value="IL">
                        Israel</option>
                    <option label="Italy" value="IT">
                        Italy</option>
                    <option label="Jamaica" value="JM">
                        Jamaica</option>
                    <option label="Japan" value="JP">
                        Japan</option>
                    <option label="Jordan" value="JO">
                        Jordan</option>
                    <option label="Kazakhstan" value="KZ">Kazakhstan</option>
                    <option label="Kenya" value="KE">
                        Kenya</option>
                    <option label="Kiribati" value="KI">
                        Kiribati</option>
                    <option label="Kuwait" value="KW">
                        Kuwait</option>
                    <option label="Kyrgyzstan" value="KG">Kyrgyzstan</option>
                    <option label="Laos" value="LA">Laos
                    </option>
                    <option label="Latvia" value="LV">
                        Latvia</option>
                    <option label="Lesotho" value="LS">
                        Lesotho</option>
                    <option label="Liechtenstein" value="LI">Liechtenstein
                    </option>
                    <option label="Lithuania" value="LT">Lithuania</option>
                    <option label="Luxembourg" value="LU">Luxembourg</option>
                    <option label="Macedonia" value="MK">Macedonia</option>
                    <option label="Madagascar" value="MG">Madagascar</option>
                    <option label="Malawi" value="MW">
                        Malawi</option>
                    <option label="Malaysia" value="MY">
                        Malaysia</option>
                    <option label="Maldives" value="MV">
                        Maldives</option>
                    <option label="Mali" value="ML">Mali
                    </option>
                    <option label="Malta" value="MT">
                        Malta</option>
                    <option label="Marshall Islands" value="MH">Marshall Islands
                    </option>
                    <option label="Martinique" value="MQ">Martinique</option>
                    <option label="Mauritania" value="MR">Mauritania</option>
                    <option label="Mauritius" value="MU">Mauritius</option>
                    <option label="Mayotte" value="YT">
                        Mayotte</option>
                    <option label="Mexico" value="MX">
                        Mexico</option>
                    <option label="Micronesia" value="FM">Micronesia</option>
                    <option label="Moldova" value="MD">
                        Moldova</option>
                    <option label="Monaco" value="MC">
                        Monaco</option>
                    <option label="Mongolia" value="MN">
                        Mongolia</option>
                    <option label="Montenegro" value="ME">Montenegro</option>
                    <option label="Montserrat" value="MS">Montserrat</option>
                    <option label="Morocco" value="MA">
                        Morocco</option>
                    <option label="Mozambique" value="MZ">Mozambique</option>
                    <option label="Namibia" value="NA">
                        Namibia</option>
                    <option label="Nauru" value="NR">
                        Nauru</option>
                    <option label="Nepal" value="NP">
                        Nepal</option>
                    <option label="Netherlands" value="NL">Netherlands</option>
                    <option label="Netherlands Antilles" value="AN">Netherlands Antilles
                    </option>
                    <option label="New Caledonia" value="NC">New Caledonia
                    </option>
                    <option label="New Zealand" value="NZ">New Zealand</option>
                    <option label="Nicaragua" value="NI">Nicaragua</option>
                    <option label="Niger" value="NE">
                        Niger</option>
                    <option label="Nigeria" value="NG">
                        Nigeria</option>
                    <option label="Niue" value="NU">Niue
                    </option>
                    <option label="Norfolk Island" value="NF">Norfolk Island
                    </option>
                    <option label="Norway" value="NO">
                        Norway</option>
                    <option label="Oman" value="OM">Oman
                    </option>
                    <option label="Palau" value="PW">
                        Palau</option>
                    <option label="Panama" value="PA">
                        Panama</option>
                    <option label="Papua New Guinea" value="PG">Papua New Guinea
                    </option>
                    <option label="Paraguay" value="PY">
                        Paraguay</option>
                    <option label="Peru" value="PE">Peru
                    </option>
                    <option label="Philippines" value="PH">Philippines</option>
                    <option label="Pitcairn Islands" value="PN">Pitcairn Islands
                    </option>
                    <option label="Poland" value="PL">
                        Poland</option>
                    <option label="Portugal" value="PT">
                        Portugal</option>
                    <option label="Qatar" value="QA">
                        Qatar</option>
                    <option label="Réunion" value="RE">
                        Réunion</option>
                    <option label="Romania" value="RO">
                        Romania</option>
                    <option label="Russia" value="RU">
                        Russia</option>
                    <option label="Rwanda" value="RW">
                        Rwanda</option>
                    <option label="Samoa" value="WS">
                        Samoa</option>
                    <option label="San Marino" value="SM">San Marino</option>
                    <option label="São Tomé &amp; Príncipe" value="ST">São Tomé &amp;
                        Príncipe</option>
                    <option label="Saudi Arabia" value="SA">Saudi Arabia</option>
                    <option label="Senegal" value="SN">
                        Senegal</option>
                    <option label="Serbia" value="RS">
                        Serbia</option>
                    <option label="Seychelles" value="SC">Seychelles</option>
                    <option label="Sierra Leone" value="SL">Sierra Leone</option>
                    <option label="Singapore" value="SG">Singapore</option>
                    <option label="Slovakia" value="SK">
                        Slovakia</option>
                    <option label="Slovenia" value="SI">
                        Slovenia</option>
                    <option label="Solomon Islands" value="SB">Solomon Islands
                    </option>
                    <option label="Somalia" value="SO">
                        Somalia</option>
                    <option label="South Africa" value="ZA">South Africa</option>
                    <option label="South Korea" value="KR">South Korea</option>
                    <option label="Spain" value="ES">
                        Spain</option>
                    <option label="Sri Lanka" value="LK">Sri Lanka</option>
                    <option label="St. Helena" value="SH">St. Helena</option>
                    <option label="St. Kitts &amp; Nevis" value="KN">St. Kitts &amp; Nevis
                    </option>
                    <option label="St. Lucia" value="LC">St. Lucia</option>
                    <option label="St. Pierre &amp; Miquelon" value="PM">St. Pierre &amp;
                        Miquelon</option>
                    <option label="St. Vincent &amp; Grenadines" value="VC">St. Vincent &amp;
                        Grenadines</option>
                    <option label="Suriname" value="SR">
                        Suriname</option>
                    <option label="Svalbard &amp; Jan Mayen" value="SJ">Svalbard &amp; Jan
                        Mayen</option>
                    <option label="Swaziland" value="SZ">Swaziland</option>
                    <option label="Sweden" value="SE">
                        Sweden</option>
                    <option label="Switzerland" value="CH">Switzerland</option>
                    <option label="Taiwan" value="TW">
                        Taiwan</option>
                    <option label="Tajikistan" value="TJ">Tajikistan</option>
                    <option label="Tanzania" value="TZ">
                        Tanzania</option>
                    <option label="Thailand" value="TH">
                        Thailand</option>
                    <option label="Togo" value="TG">Togo
                    </option>
                    <option label="Tonga" value="TO">
                        Tonga</option>
                    <option label="Trinidad &amp; Tobago" value="TT">Trinidad &amp; Tobago
                    </option>
                    <option label="Tunisia" value="TN">
                        Tunisia</option>
                    <option label="Turkmenistan" value="TM">Turkmenistan</option>
                    <option label="Turks &amp; Caicos Islands" value="TC">Turks &amp; Caicos
                        Islands</option>
                    <option label="Tuvalu" value="TV">
                        Tuvalu</option>
                    <option label="Uganda" value="UG">
                        Uganda</option>
                    <option label="Ukraine" value="UA">
                        Ukraine</option>
                    <option label="United Arab Emirates" value="AE">United Arab Emirates
                    </option>
                    <option label="United Kingdom" value="GB">United Kingdom
                    </option>
                    <option label="United States" value="US" selected="selected">
                        United States</option>
                    <option label="Uruguay" value="UY">
                        Uruguay</option>
                    <option label="Vanuatu" value="VU">
                        Vanuatu</option>
                    <option label="Vatican City" value="VA">Vatican City</option>
                    <option label="Venezuela" value="VE">Venezuela</option>
                    <option label="Vietnam" value="VN">
                        Vietnam</option>
                    <option label="Wallis &amp; Futuna" value="WF">Wallis &amp; Futuna
                    </option>
                    <option label="Yemen" value="YE">
                        Yemen</option>
                    <option label="Zambia" value="ZM">
                        Zambia</option>
                    <option label="Zimbabwe" value="ZW">
                        Zimbabwe</option>
                </select>

                <select>
                    <option value="" selected="selected">
                        State
                    </option>
                    <option label="Alabama" value="string:AL">
                        Alabama
                    </option>
                    <option label="Alaska" value="string:AK">
                        Alaska
                    </option>
                    <option label="American Samoa" value="string:AS">
                        American
                        Samoa
                    </option>
                    <option label="Arizona" value="string:AZ">
                        Arizona
                    </option>
                    <option label="Arkansas" value="string:AR">
                        Arkansas
                    </option>
                    <option label="Armed Forces Americas" value="string:AA">
                        Armed
                        Forces
                        Americas
                    </option>
                    <option label="Armed Forces Europe" value="string:AE">
                        Armed
                        Forces
                        Europe
                    </option>
                    <option label="Armed Forces Pacific" value="string:AP">
                        Armed
                        Forces
                        Pacific
                    </option>
                    <option label="California" value="string:CA">
                        California
                    </option>
                    <option label="Colorado" value="string:CO">
                        Colorado
                    </option>
                    <option label="Connecticut" value="string:CT">
                        Connecticut
                    </option>
                    <option label="Delaware" value="string:DE">
                        Delaware
                    </option>
                    <option label="District of Columbia" value="string:DC">
                        District
                        of
                        Columbia
                    </option>
                    <option label="Federated States of Micronesia" value="string:FM">
                        Federated
                        States
                        of
                        Micronesia
                    </option>
                    <option label="Florida" value="string:FL">
                        Florida
                    </option>
                    <option label="Georgia" value="string:GA">
                        Georgia
                    </option>
                    <option label="Guam" value="string:GU">
                        Guam
                    </option>
                    <option label="Hawaii" value="string:HI">
                        Hawaii
                    </option>
                    <option label="Idaho" value="string:ID">
                        Idaho
                    </option>
                    <option label="Illinois" value="string:IL">
                        Illinois
                    </option>
                    <option label="Indiana" value="string:IN">
                        Indiana
                    </option>
                    <option label="Iowa" value="string:IA">
                        Iowa
                    </option>
                    <option label="Kansas" value="string:KS">
                        Kansas
                    </option>
                    <option label="Kentucky" value="string:KY">
                        Kentucky
                    </option>
                    <option label="Louisiana" value="string:LA">
                        Louisiana
                    </option>
                    <option label="Maine" value="string:ME">
                        Maine
                    </option>
                    <option label="Marshall Islands" value="string:MH">
                        Marshall
                        Islands
                    </option>
                    <option label="Maryland" value="string:MD">
                        Maryland
                    </option>
                    <option label="Massachusetts" value="string:MA">
                        Massachusetts
                    </option>
                    <option label="Michigan" value="string:MI">
                        Michigan
                    </option>
                    <option label="Minnesota" value="string:MN">
                        Minnesota
                    </option>
                    <option label="Mississippi" value="string:MS">
                        Mississippi
                    </option>
                    <option label="Missouri" value="string:MO">
                        Missouri
                    </option>
                    <option label="Montana" value="string:MT">
                        Montana
                    </option>
                    <option label="Nebraska" value="string:NE">
                        Nebraska
                    </option>
                    <option label="Nevada" value="string:NV">
                        Nevada
                    </option>
                    <option label="New Hampshire" value="string:NH">
                        New
                        Hampshire
                    </option>
                    <option label="New Jersey" value="string:NJ">
                        New
                        Jersey
                    </option>
                    <option label="New Mexico" value="string:NM">
                        New
                        Mexico
                    </option>
                    <option label="New York" value="string:NY">
                        New York
                    </option>
                    <option label="North Carolina" value="string:NC">
                        North
                        Carolina
                    </option>
                    <option label="North Dakota" value="string:ND">
                        North
                        Dakota
                    </option>
                    <option label="Northern Mariana Islands" value="string:MP">
                        Northern
                        Mariana
                        Islands
                    </option>
                    <option label="Ohio" value="string:OH">
                        Ohio
                    </option>
                    <option label="Oklahoma" value="string:OK">
                        Oklahoma
                    </option>
                    <option label="Oregon" value="string:OR">
                        Oregon
                    </option>
                    <option label="Palau" value="string:PW">
                        Palau
                    </option>
                    <option label="Pennsylvania" value="string:PA">
                        Pennsylvania
                    </option>
                    <option label="Puerto Rico" value="string:PR">
                        Puerto
                        Rico
                    </option>
                    <option label="Rhode Island" value="string:RI">
                        Rhode
                        Island
                    </option>
                    <option label="South Carolina" value="string:SC">
                        South
                        Carolina
                    </option>
                    <option label="South Dakota" value="string:SD">
                        South
                        Dakota
                    </option>
                    <option label="Tennessee" value="string:TN">
                        Tennessee
                    </option>
                    <option label="Texas" value="string:TX">
                        Texas
                    </option>
                    <option label="Utah" value="string:UT">
                        Utah
                    </option>
                    <option label="Vermont" value="string:VT">
                        Vermont
                    </option>
                    <option label="Virgin Islands" value="string:VI">
                        Virgin
                        Islands
                    </option>
                    <option label="Virginia" value="string:VA">
                        Virginia
                    </option>
                    <option label="Washington" value="string:WA">
                        Washington
                    </option>
                    <option label="West Virginia" value="string:WV">
                        West
                        Virginia
                    </option>
                    <option label="Wisconsin" value="string:WI">
                        Wisconsin
                    </option>
                    <option label="Wyoming" value="string:WY">
                        Wyoming
                    </option>

                </select>

                <input type="text" name="Code" id="Code" placeholder=" ZIP Code">
            </div>
            <div class="input-line">

                <input type="phone" name="Phone" id="Phone" placeholder="Phone (optional)">

            </div>

            <input type="submit" value="Continue to shipping">
        </form>
    </div>
</body>

</html>
