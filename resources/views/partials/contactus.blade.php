<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/home/css/reset.css" rel="stylesheet" />
    <title>Contact Us</title>
    <style>
        .main {
            width: 100%;
            height: 850px;
        }

        .container {
            width: 100%;
            height: 400px;
            background-color: #00ACEE;
            display: flex;
            justify-content: space-around;
            font-family: 'Montserrat', sans-serif;
        }

        .left-side {
            width: 30%;
            height: 100%;
            padding: 70px 0px 0px 20px;
            box-sizing: border-box;
        }

        .h2 {
            font-size: 44px;
            line-height: 1.5;
            font-family: tahoma;
            color: white;
            text-transform: capitalize;
        }

        .para {
            line-height: 2;
            text-align: justify;
            font-family: tahoma;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }

        .para p a {
            color: white;
            font-size: 18px;
            font-family: 'Montserrat', sans-serif;
        }

        .right-side {
            width: 60%;
            height: 100%;
            box-sizing: border-box;
            padding: 50px 0px 0px 70px;
        }

        .inner-right {
            width: 95%;
            height: 720px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.3);

        }

        .inp {
            width: 100%;
            height: 90px;
            display: flex;
            padding: 30px 0px 0px 30px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        .inp1 {
            width: 100%;
            height: 180px;
        }

        .inp-left {
            width: 30%;

        }

        .inp-left label {
            font-family: 'Montserrat', sans-serif;
            color: rgba(13, 14, 16, 0.7);
        }

        .inp-right {
            width: 60%;
        }

        .inp-right input {
            width: 100%;
            padding: 18px 18px;
            box-sizing: border-box;
            border: 2px solid rgba(47, 45, 43, 0.2);
            ;
            outline: 0px;
            border-radius: 4px;
        }

        .inp-right textarea {
            width: 100%;
            border: 2px solid rgba(47, 45, 43, 0.2);
            ;
            outline: 0px;
            border-radius: 4px;
            padding: 18px 18px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        .inp-right select {
            width: 100%;
            border: 2px solid rgba(47, 45, 43, 0.2);
            ;
            outline: 0px;
            border-radius: 4px;
            padding: 18px 18px;
            box-sizing: border-box;
        }

        .btn {
            width: 100%;
            height: 70px;
            text-align: center;
            padding: 20px 75px 0px 0px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;

        }

        .btn1 {
            width: 140px;
            height: 50px;
            background-color: #00ACEE;
            color: white;
            font-weight: bold;
            font-family: tahoma;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
        }


        /* Media queries for screens smaller than 768px */
        @media screen and (max-width: 820px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .left-side,
            .right-side {
                width: 100%;
                padding: 0;
            }

            .right-side {
                padding: 30px 20px;
            }

            .inner-right {
                width: 100%;
                height: auto;
            }

            .inp {
                flex-direction: column;
                align-items: flex-start;
            }

            .inp-left {
                width: 100%;
                margin-bottom: 10px;
            }

            .inp-right {
                width: 100%;
            }

            .inp-right input,
            .inp-right textarea,
            .inp-right select {
                width: calc(100% - 20px);
                padding: 12px;
                margin-bottom: 15px;
                box-sizing: border-box;
            }

            .btn {
                padding: 20px 0;
            }

            .h2 {
                font-size: 24px;
                text-align: center;
                margin-bottom: 15px;
            }

            .para {
                font-size: 16px;
                text-align: center;
                margin-bottom: 20px;
                padding: 0px 30px 0px 30px;
            }
        }

        /* Media queries for screens smaller than 576px */
        @media screen and (max-width: 576px) {
            .h2 {
                font-size: 20px;
            }

            .para {
                font-size: 14px;
                line-height: 1.6;
                text-align: center;
                margin-bottom: 15px;
            }

            .para p a {

                font-size: 14px;
            }

            .inp-right input,
            .inp-right textarea,
            .inp-right select {
                font-size: 16px;
                padding: 10px;
                margin-bottom: 15px;
            }

            .btn1 {
                width: 100%;
                padding: 15px;
            }
        }

        /* Media queries for screens smaller than 480px */
        @media screen and (max-width: 480px) {
            .h2 {
                font-size: 18px;
            }

            .para {
                font-size: 12px;
                line-height: 1.5;
                text-align: center;
                margin-bottom: 10px;
            }

            .para p a {

                font-size: 12px;
            }

            .inp-right input,
            .inp-right textarea,
            .inp-right select {
                font-size: 14px;
                padding: 8px;
                margin-bottom: 12px;
            }

            .btn1 {
                font-size: 16px;
                padding: 12px;
            }
        }

        /* Media queries for screens smaller than 375px */
        @media screen and (max-width: 375px) {
            .h2 {
                font-size: 16px;
            }

            .para {
                font-size: 10px;
                line-height: 1.4;
                text-align: center;
                margin-bottom: 8px;
            }

            .inp-right input,
            .inp-right textarea,
            .inp-right select {
                font-size: 12px;
                padding: 6px;
                margin-bottom: 8px;
            }

            .btn1 {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    
    <div class="main">
        <div class="container">
            <div class="left-side">
                <div class="h2">
                    <h2>Talk with our team</h2>
                </div>
                <div class="para">
                    <p> Fill out your information and an CommuinQA representative will reach out to you. Have a simple question? <a href="#">Check out our FAQ.</a>
                    </p>
                </div>
            </div>

            <div class="right-side">
                <div class="inner-right">
                    <form>
                        <div class="inp">
                            <div class="inp-left inp-start">
                                <label for="fname">First name*</label>
                            </div>
                            <div class="inp-right">
                                <input type="text" id="fname" name="fname" placeholder="e.g., Aiza" required>
                            </div>
                        </div>

                        <div class="inp">
                            <div class="inp-left">
                                <label for="Lname">Last name*</label>
                            </div>
                            <div class="inp-right">
                                <input type="text" id="lname" name="lname" placeholder="Wahab" required>
                            </div>
                        </div>

                        <div class="inp">
                            <div class="inp-left">
                                <label for="email">Email*</label>
                            </div>
                            <div class="inp-right">
                                <input type="email" id="email" name="email" placeholder="example@domain.com" required>
                            </div>
                        </div>
                        <div class="inp">
                            <div class="inp-left">
                                <label for="country">Country*</label>
                            </div>
                            <div class="inp-right">
                                <select>
                                    <option value="Select">SELECT......</option>
                                    <option value="United States">United States</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
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
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of
                                    </option>
                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                    </option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
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
                                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic
                                        of
                                        the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaçao">Curaçao</option>
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
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands
                                    </option>
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
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former
                                        Yugoslav Republic of</option>
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
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
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
                                    <option value="Palestine, State of">Palestine, State of</option>
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
                                    <option value="Réunion">Réunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Barthélemy">Saint Barthélemy</option>
                                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension
                                        and
                                        Tristan da Cunha</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                        South
                                        Sandwich Islands</option>
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
                                    <option value="Taiwan, Province of China">Taiwan </option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
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
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of
                                    </option>
                                    <option value="Vietnam">Vietnam</option>
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

                        <div class="inp">
                            <div class="inp-left">
                                <label for="number">Phone number*</label>
                            </div>
                            <div class="inp-right">
                                <input type="number" id="pnumber" name="pnumber" placeholder="+1 555 655 5656" required>
                            </div>
                        </div>

                        <div class="inp inp1">
                            <div class="inp-left">
                                <label for="discuss">What would you like to discuss?*</label>
                            </div>
                            <div class="inp-right">
                                <textarea rows="7"
                                    placeholder="Tell us about your query or give feedback about CommuniQa."></textarea>
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>