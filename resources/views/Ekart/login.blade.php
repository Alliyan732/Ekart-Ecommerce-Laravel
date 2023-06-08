<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekart Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .formError{
            color: red;
            font-size: 14px;
            font-weight: 500;
            margin-left: 20px;
        }
        .sformError{
            color: red;
            font-size: 14px;
            font-weight: 500;
            margin-left: 20px;
        }

        .imageslider{
            background-image: url("/images/png1.png");
            height: 70%;
            width: 70%;
            background-size: 100% 100%;
            margin: auto;
            animation: changeImage 20s linear infinite;
        }
        @keyframes changeImage{
            0%{
                background-image: url("/images/png1.png");
            }
            25%{
                background-image: url("/images/png2.png");
            }
            50%{
                background-image: url("/images/png3.png");
            }
            75%{
                background-image: url("/images/png4.png");
            }
            100%{
                background-image: url("/images/png5.png");
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="d-none d-md-flex a">
        <img src="/images/loginpic.jpg" alt="" class="img-fluid" style="opacity: 80%; min-height: 100vh">
        <div class="centered text-white">
            <p>Lorem ipsum dolor sit amet consectetur, adipipeimus assumenda necessitatibus laborum sed tempora, odio
                facere a voluptatum inventore alias et veritatis amet officia quibusdam omnis.</p>
        </div>
        <div class="centered"><a href="#inputEmail"><button class="btn-hover signinbutton"
                    style="margin-top: 150px;">Sign in to continue!</button></a> </div>
    </div>
    <div class="container-fluid">


        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-lg-6 col-md-6 d-none d-md-flex">
                <!-- <img src="img/kongping.png" alt="" height="500px" style="margin-top: 100px; margin-left: 50px;"> -->
                <!-- carosol -->
                <div class="imageslider" >

                </div>
            </div>


            <!-- The content half -->
            <div class="col-lg-6 col-md-6 bg-light">
                <div>
                    <i class="fa fa-user-circle-o"
                        style="font-size:20px; position: absolute; right: 0px; top: 40px; right: 40px;"><a href=""
                            data-toggle="modal" data-target="#myModal"> Register Now!</a></i>

                    <!-- registeration form modal -->
                    <div class="modal hide fade" id="myModal" data-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" style="color: rgba(27, 106, 223, 0.75);"> Registeration
                                        Form!</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="/Ekart/login" name="signupForm" onsubmit="return SvalidateForm();" id="frmRegisteration">
                                    
                                    @csrf    
                                    <div class="form-group mb-3" id="sname">
                                            <input id="inputRname" name="rName" type="Text" placeholder="Enter your name" required
                                                autofocus class="form-control rounded-pill border-0 shadow-sm px-4"><span class="sformError"></span>
                                        </div>
                                        <div class="form-group mb-3" id="semail">
                                            <input id="inputRemail" name="rEmail" type="email" placeholder="Email address" required
                                                autofocus class="form-control rounded-pill border-0 shadow-sm px-4">
                                                <span class="sformError"></span>
                                            </div>
                                        <div class="form-group mb-3" id="spass">
                                            <input id="inputRpassword" name="rPass" type="password" placeholder="Password"
                                                required=""
                                                class="form-control rounded-pill border-0 shadow-sm px-4 text-primary"><span class="sformError"></span>
                                        </div>
                                        <div class="form-group mb-3" id="scpass">
                                            <input id="inputConfermPassword" type="password"
                                                placeholder="Conferm Password" name="rcPass" required autofocus
                                                class="form-control rounded-pill border-0 shadow-sm px-4 text-success"><span class="sformError"></span>
                                        </div>
                                        <!-- <div class="form-group mb-3" id="scountry">
                                            <input id="inputCountry" name="country" type="Text" placeholder="Country" required
                                                autofocus class="form-control rounded-pill border-0 shadow-sm px-4"><span class="sformError"></span>
                                        </div> -->
                                        <div class="mb-4" id="scountry">         
                                                <select id="country" name="country" class="form-control rounded-pill border-0 shadow-sm px-4 text-success" ><span class="sformError"></span>
                                                    <option value="Select your Country" disabled selected>Select your Country</option>
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
                                                    <option value="Guernsey">Guernsey</option>
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
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
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
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                        </div>
                                        <div class="form-group mb-3" id="sage">
                                            <input id="inputAge" name="age" type="number" placeholder="Enter your age" required
                                                autofocus class="form-control rounded-pill border-0 shadow-sm px-4"><span class="sformError"></span>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input id="customCheck1" type="checkbox" checked
                                                class="custom-control-input">
                                            <label for="customCheck1" class="custom-control-label">I agree with terms
                                                and conditions</label>
                                        </div>
                                            <input class="btn-hover signinbutton" type="submit" value="Register" id="btnRegister">
                                        <button type="button" class="btn-hover signinbutton"
                                            data-dismiss="modal">CLOSE</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">Login!</h3>
                                <p class="text-muted mb-4">Login to Ekart to fill your Cart.</p>
                                <!-- login form  -->
                                <form method="post" action="/Ekart/home" name="loginForm" onsubmit="return validateForm()">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    
                                    @csrf
                                    <div class="form-group mb-3" id="email">
                                        <input type="email" id="inputEmail" class="form-control rounded-pill border-0 shadow-sm px-4" name="femail" placeholder="Email address" required autofocus><span class="formError"></span>
                                    </div>
                                    <div class="form-group mb-3" id="pass">
                                        <input type="password" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" name="fpass" placeholder="Password" required autofocus><span class="formError"></span>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div>
                                    <div>
                                        <input class="btn-hover signinbutton" type="submit" value="SIGN IN">
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div><!-- End -->

                    <!-- The Modal -->
                </div>
            </div><!-- End -->

        </div>
    </div>

    <script>
        // login form validation

        function clearErrors(){
             errors = document.getElementsByClassName('formError');
             // clears all errors
             for(let item of errors){
                 item.innerHTML = "";
             }
         }
     
         function seterror(id, error){
             //sets error inside tag of id 
             element = document.getElementById(id);
             element.getElementsByClassName('formError')[0].innerHTML = error;   
         }
     
         function validateForm(){
             var returnval = true;
             clearErrors();
     
             var email = document.forms['loginForm']["femail"].value;
             if (email.length > 30){
                 seterror("email", "*Email length is too long!");
                 returnval = false; // if return val is false, form will not submit
             }
     
     
     
             var password = document.forms['loginForm']["fpass"].value;
             if (password.length < 6){
     
                 seterror("pass", "*Password should be atleast 6 characters!");
                 returnval = false;
             }
     
     
             return returnval;
         } 
        
        // Sign up form validation 
        function clearSerrors(){
             errors = document.getElementsByClassName('sformError');
             for(let item of errors){
                 item.innerHTML = "";
             }
         }
     
         function setSerror(id, error){
             //sets error inside tag of id 
             element = document.getElementById(id);
             element.getElementsByClassName('sformError')[0].innerHTML = error;   
         }
     
        function SvalidateForm(){
             var returnval = true;
             clearSerrors();
     
     
     
            var name = document.forms['signupForm']["rName"].value;
            if (name.length < 3){
                setSerror("sname", "*Name length is too Short!");
                returnval = false;
            }
            
            var email = document.forms['signupForm']["rEmail"].value;
            if (email.length > 30){
                setSerror("semail", "*Email length is too Long!");
                returnval = false;          
            }

            var password = document.forms['signupForm']["rPass"].value;
                if (password.length < 6){
                    setSerror("spass", "*Password should be atleast 6 characters!");
                    returnval = false;
                }           
            
                   
            var cpassword = document.forms['signupForm']["rcPass"].value;
            if (cpassword != password){
                setSerror("scpass", "*Password and Confirm password should match!");
                returnval = false;
            }

            // var str = document.forms['signupForm']["country"].value;
            // if (str == "Select your Country"){
            //     setSerror("scountry", "*Please Select your Country!");
            //     returnval = false;          
            // }

            return returnval;
        }


     
     </script>
    
</body>


</html>