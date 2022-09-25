@extends('auth.layouts.app')

@section('auth')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}

<main class="main" id="top">
    <div class="container-fluid">
        <div class="row justify-content-center pt-4">
            <div class="col-sm-10 col-lg-7 col-xxl-5"><a class="d-flex flex-center mb-4"
                    href="/"><img class="me-2"
                        src="{{asset('admin/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="45" /><span
                        class="font-sans-serif fw-bolder fs-4 d-inline-block">falcon</span></a>
                <div class="card theme-wizard" id="wizard">
                    <div class="card-header bg-light pt-1 pb-1">
                        <ul class="nav justify-content-between nav-wizard">
                            <li class="nav-item"><a class="nav-link active fw-semi-bold"
                                    href="#bootstrap-wizard-tab1" data-bs-toggle="tab"
                                    data-wizard-step="data-wizard-step"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="fas fa-lock"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Account</span></a></li>
                            <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2"
                                    data-bs-toggle="tab" data-wizard-step="data-wizard-step"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="fas fa-user"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Personal</span></a></li>
                            <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab3"
                                    data-bs-toggle="tab" data-wizard-step="data-wizard-step"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="fas fa-dollar-sign"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Billing</span></a></li>
                            <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4"
                                    data-bs-toggle="tab" data-wizard-step="data-wizard-step"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="fas fa-thumbs-up"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Done</span></a></li>
                        </ul>
                    </div>
                    <div class="card-body py-4" id="wizard-controller">
                        <div class="tab-content">
                            <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                <form class="needs-validation" novalidate="novalidate">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="bootstrap-wizard-wizard-name">Nama
                                        </label>
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Nama lengkap" id="bootstrap-wizard-wizard-name" required="require"/>
                                        <div class="invalid-feedback">Masukan nama!</div>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                    <p class="pt-3 text-white">Have an account?<br><a
                                            class="btn btn-outline-light mt-2 px-4" href="/login">Log In</a></p>
                                </div>
                            </div>
                                        <div class="col-6">
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-confirm-password">Confirm
                                                    Password*</label><input class="form-control" type="password"
                                                    name="confirmPassword" placeholder="Confirm Password"
                                                    required="required"
                                                    id="bootstrap-wizard-wizard-confirm-password"
                                                    data-wizard-validate-confirm-password="true" />
                                                <div class="invalid-feedback">Password tidak sama</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            name="terms" required="required" checked="checked"
                                            id="bootstrap-wizard-wizard-checkbox" /><label
                                            class="form-check-label" for="bootstrap-wizard-wizard-checkbox">I
                                            accept the <a href="#!">terms </a>and <a href="#!">privacy
                                                policy</a></label></div>
                                </form>
                            </div>
                            <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
                                <form>
                                    <div class="mb-3">
                                        <div class="row" data-dropzone="data-dropzone"
                                            data-options='{"maxFiles":1,"data":[{"name":"avatar.png","size":"54kb","url":"../../assets/img/team"}]}'>
                                            <div class="fallback"><input type="file" name="file" /></div>
                                            <div class="col-md-auto">
                                                <div class="dz-preview dz-preview-single">
                                                    <div
                                                        class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0">
                                                        <div class="avatar avatar-4xl"><img
                                                                class="rounded-circle"
                                                                src="../../assets/img/team/avatar.png" alt="..."
                                                                data-dz-thumbnail="data-dz-thumbnail" /></div>
                                                        <div class="dz-progress"><span class="dz-upload"
                                                                data-dz-uploadprogress=""></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="dz-message dropzone-area px-2 py-3"
                                                    data-dz-message="data-dz-message">
                                                    <div class="text-center"><img class="me-2"
                                                            src="../../assets/img/icons/cloud-upload.svg"
                                                            width="25" alt="" />Upload your profile picture<p
                                                            class="mb-0 fs--1 text-400">Upload a 300x300 jpg
                                                            image with <br />a maximum size of 400KB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-gender">Gender</label><select
                                            class="form-select" name="gender" id="bootstrap-wizard-gender">
                                            <option value="">Select your gender ...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select></div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-wizard-phone">Phone</label><input
                                            class="form-control" type="text" name="phone" placeholder="Phone"
                                            id="bootstrap-wizard-wizard-phone" /></div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-wizard-datepicker">Date of Birth</label><input
                                            class="form-control datetimepicker" type="text" placeholder="d/m/y"
                                            data-options='{"dateFormat":"d/m/y","disableMobile":true}'
                                            id="bootstrap-wizard-wizard-datepicker" /></div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-wizard-address">Address</label><textarea
                                            class="form-control" rows="4"
                                            id="bootstrap-wizard-wizard-address"></textarea></div>
                                </form>
                            </div>
                            <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab3" id="bootstrap-wizard-tab3">
                                <form class="form-validation">
                                    <div class="row g-2">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-card-number">Card Number</label><input
                                                    class="form-control" placeholder="XXXX XXXX XXXX XXXX"
                                                    type="text" id="bootstrap-wizard-card-number" /></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-card-name">Name on Card</label><input
                                                    class="form-control" placeholder="John Doe" name="cardName"
                                                    type="text" id="bootstrap-wizard-card-name" /></div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-card-holder-country">Country</label><select
                                                    class="form-select" name="customSelectCountry"
                                                    id="bootstrap-wizard-card-holder-country">
                                                    <option value="">Select your country ...</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda
                                                    </option>
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
                                                    <option value="Bosnia and Herzegowina">Bosnia and
                                                        Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British
                                                        Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African
                                                        Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                        Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, the Democratic Republic of the">Congo,
                                                        the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic
                                                    </option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                        (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France Metropolitan
                                                    </option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories</option>
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
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and Mc Donald Islands">Heard and Mc
                                                        Donald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See
                                                        (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran (Islamic Republic of)">Iran (Islamic
                                                        Republic of)</option>
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
                                                    <option value="Korea, Democratic People's Republic of">
                                                        Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of
                                                    </option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao, People's Democratic Republic">Lao,
                                                        People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                        Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">
                                                        Macedonia, The Former Yugoslav Republic of</option>
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
                                                    <option value="Micronesia, Federated States of">Micronesia,
                                                        Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of
                                                    </option>
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
                                                    <option value="Netherlands Antilles">Netherlands Antilles
                                                    </option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana
                                                        Islands</option>
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
                                                    <option value="Russian Federation">Russian Federation
                                                    </option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint
                                                        Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia (Slovak Republic)">Slovakia (Slovak
                                                        Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option
                                                        value="South Georgia and the South Sandwich Islands">
                                                        South Georgia and the South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miquelon">St. Pierre and
                                                        Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and
                                                        Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic
                                                    </option>
                                                    <option value="Taiwan, Province of China">Taiwan, Province
                                                        of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania,
                                                        United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago
                                                    </option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos
                                                        Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United
                                                        States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands
                                                        (British)</option>
                                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)
                                                    </option>
                                                    <option value="Wallis and Futuna Islands">Wallis and Futuna
                                                        Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select></div>
                                        </div>
                                        <div class="mb-3"><label class="form-label" for="card-email">Email
                                                address</label><input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="row gx-2">
                                            <div class="mb-3 col-sm-6"><label class="form-label"
                                                    for="card-password">Password</label><input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-sm-6"><label class="form-label"
                                                    for="card-confirm-password">Confirm Password</label><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                                    autocomplete="new-password">
                                                </div>
                                        </div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                                id="card-register-checkbox" /><label class="form-label"
                                                for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a
                                                    href="#!">privacy policy</a></label></div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3"
                                                type="submit" name="submit">Register</button></div>
                                    </form>
                                    <div class="position-relative mt-4">
                                        <hr class="bg-300" />
                                        <div class="divider-content-center">or register with</div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col-sm-6"><a
                                                class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span
                                                    class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span>
                                                google</a></div>
                                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                                                href="#"><span class="fab fa-facebook-square me-2"
                                                    data-fa-transform="grow-8"></span> facebook</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
