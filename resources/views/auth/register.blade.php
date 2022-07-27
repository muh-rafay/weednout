<x-guest-layout>
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class=" shadow-success border-radius-lg py-3 pe-1"  style="background-color: green">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">WeedNOut</h4>
                    <div class="row mt-3">
                      <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign up</h4>
                      <!-- <div class="col-2 text-center ms-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-facebook text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center px-1">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-github text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center me-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-google text-white text-lg"></i>
                        </a>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="card-body">
                     <form method="POST" action="{{ route('register') }}">
                          @csrf

                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Name</label>
                      <input id="name"  type="text" name="name" :value="old('name')" required autofocus  class="form-control">
                    </div>
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Email</label>
                      <input id="email"  type="email" name="email" :value="old('email')" required  class="form-control">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender" id="exampleFormControlSelect2">
                            <option class="form-control" selected></option>
                          <option class="form-control" value="Male">Male</option>
                          <option class="form-control" value="Female">Female</option>
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nationalty</label>
                        <select class="form-control" name="nationality" id="exampleFormControlSelect2" required>
                                <option ></option>
                                <option value="AFGHAN">AFGHAN</option>
                                <option value="ALBANIAN">ALBANIAN</option>
                                <option value="ALGERIAN">ALGERIAN</option>
                                <option value="AMERICAN">AMERICAN</option>
                                <option value="ANDORRAN">ANDORRAN</option>
                                <option value="ANGOLAN">ANGOLAN</option>
                                <option value="ANTIGUANS">ANTIGUANS</option>
                                <option value="ARGENTINEAN">ARGENTINEAN</option>
                                <option value="ARMENIAN">ARMENIAN</option>
                                <option value="AUSTRALIAN">AUSTRALIAN</option>
                                <option value="AUSTRIAN">AUSTRIAN</option>
                                <option value="AZERBAIJANI">AZERBAIJANI</option>
                                <option value="BAHAMIAN">BAHAMIAN</option>
                                <option value="BAHRAINI">BAHRAINI</option>
                                <option value="BANGLADESHI">BANGLADESHI</option>
                                <option value="BARBADIAN">BARBADIAN</option>
                                <option value="BARBUDANS">BARBUDANS</option>
                                <option value="BATSWANA">BATSWANA</option>
                                <option value="BELARUSIAN">BELARUSIAN</option>
                                <option value="BELGIAN">BELGIAN</option>
                                <option value="BELIZEAN">BELIZEAN</option>
                                <option value="BENINESE">BENINESE</option>
                                <option value="BHUTANESE">BHUTANESE</option>
                                <option value="BOLIVIAN">BOLIVIAN</option>
                                <option value="BOSNIAN">BOSNIAN</option>
                                <option value="BRAZILIAN">BRAZILIAN</option>
                                <option value="BRITISH">BRITISH</option>
                                <option value="BRUNEIAN">BRUNEIAN</option>
                                <option value="BULGARIAN">BULGARIAN</option>
                                <option value="BURKINABE">BURKINABE</option>
                                <option value="BURMESE">BURMESE</option>
                                <option value="BURUNDIAN">BURUNDIAN</option>
                                <option value="CAMBODIAN">CAMBODIAN</option>
                                <option value="CAMEROONIAN">CAMEROONIAN</option>
                                <option value="CANADIAN">CANADIAN</option>
                                <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                                <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                                <option value="CHADIAN">CHADIAN</option>
                                <option value="CHILEAN">CHILEAN</option>
                                <option value="CHINESE">CHINESE</option>
                                <option value="COLOMBIAN">COLOMBIAN</option>
                                <option value="COMORAN">COMORAN</option>
                                <option value="CONGOLESE">CONGOLESE</option>
                                <option value="COSTA RICAN">COSTA RICAN</option>
                                <option value="CROATIAN">CROATIAN</option>
                                <option value="CUBAN">CUBAN</option>
                                <option value="CYPRIOT">CYPRIOT</option>
                                <option value="CZECH">CZECH</option>
                                <option value="DANISH">DANISH</option>
                                <option value="DJIBOUTI">DJIBOUTI</option>
                                <option value="DOMINICAN">DOMINICAN</option>
                                <option value="DUTCH">DUTCH</option>
                                <option value="EAST TIMORESE">EAST TIMORESE</option>
                                <option value="ECUADOREAN">ECUADOREAN</option>
                                <option value="EGYPTIAN">EGYPTIAN</option>
                                <option value="EMIRIAN">EMIRIAN</option>
                                <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                                </option>
                                <option value="ERITREAN">ERITREAN</option>
                                <option value="ESTONIAN">ESTONIAN</option>
                                <option value="ETHIOPIAN">ETHIOPIAN</option>
                                <option value="FIJIAN">FIJIAN</option>
                                <option value="FILIPINO">FILIPINO</option>
                                <option value="FINNISH">FINNISH</option>
                                <option value="FRENCH">FRENCH</option>
                                <option value="GABONESE">GABONESE</option>
                                <option value="GAMBIAN">GAMBIAN</option>
                                <option value="GEORGIAN">GEORGIAN</option>
                                <option value="GERMAN">GERMAN</option>
                                <option value="GHANAIAN">GHANAIAN</option>
                                <option value="GREEK">GREEK</option>
                                <option value="GRENADIAN">GRENADIAN</option>
                                <option value="GUATEMALAN">GUATEMALAN</option>
                                <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                                <option value="GUINEAN">GUINEAN</option>
                                <option value="GUYANESE">GUYANESE</option>
                                <option value="HAITIAN">HAITIAN</option>
                                <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                                <option value="HONDURAN">HONDURAN</option>
                                <option value="HUNGARIAN">HUNGARIAN</option>
                                <option value="ICELANDER">ICELANDER</option>
                                <option value="INDIAN">INDIAN</option>
                                <option value="INDONESIAN">INDONESIAN</option>
                                <option value="IRANIAN">IRANIAN</option>
                                <option value="IRAQI">IRAQI</option>
                                <option value="IRISH">IRISH</option>
                                <option value="ISRAESLI">ISRAELI</option>
                                <option value="ITALIAN">ITALIAN</option>
                                <option value="IVORIAN">IVORIAN</option>
                                <option value="JAMAICAN">JAMAICAN</option>
                                <option value="JAPANESE">JAPANESE</option>
                                <option value="JORDANIAN">JORDANIAN</option>
                                <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                                <option value="KENYAN">KENYAN</option>
                                <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                                </option>
                                <option value="KUWAITI">KUWAITI</option>
                                <option value="KYRGYZ">KYRGYZ</option>
                                <option value="LAOTIAN">LAOTIAN</option>
                                <option value="LATVIAN">LATVIAN</option>
                                <option value="LEBANESE">LEBANESE</option>
                                <option value="LIBERIAN">LIBERIAN</option>
                                <option value="LIBYAN">LIBYAN</option>
                                <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                                <option value="LITHUANIAN">LITHUANIAN</option>
                                <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                                <option value="MACEDONIAN">MACEDONIAN</option>
                                <option value="MALAGASY">MALAGASY</option>
                                <option value="MALAWIAN">MALAWIAN</option>
                                <option value="MALAYSIAN">MALAYSIAN</option>
                                <option value="MALDIVAN">MALDIVAN</option>
                                <option value="MALIAN">MALIAN</option>
                                <option value="MALTESE">MALTESE</option>
                                <option value="MARSHALLESE">MARSHALLESE</option>
                                <option value="MAURITANIAN">MAURITANIAN</option>
                                <option value="MAURITIAN">MAURITIAN</option>
                                <option value="MEXICAN">MEXICAN</option>
                                <option value="MICRONESIAN">MICRONESIAN</option>
                                <option value="MOLDOVAN">MOLDOVAN</option>
                                <option value="MONACAN">MONACAN</option>
                                <option value="MONGOLIAN">MONGOLIAN</option>
                                <option value="MOROCCAN">MOROCCAN</option>
                                <option value="MOSOTHO">MOSOTHO</option>
                                <option value="MOTSWANA">MOTSWANA</option>
                                <option value="MOZAMBICAN">MOZAMBICAN</option>
                                <option value="NAMIBIAN">NAMIBIAN</option>
                                <option value="NAURUAN">NAURUAN</option>
                                <option value="NEPALESE">NEPALESE</option>
                                <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                                <option value="NI-VANUATU">NI-VANUATU</option>
                                <option value="NICARAGUAN">NICARAGUAN</option>
                                <option value="NIGERIEN">NIGERIEN</option>
                                <option value="NORTH KOREAN">NORTH KOREAN</option>
                                <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                                <option value="NORWEGIAN">NORWEGIAN</option>
                                <option value="OMANI">OMANI</option>
                                <option value="PAKISTANI">PAKISTANI</option>
                                <option value="PALAUAN">PALAUAN</option>
                                <option value="PANAMANIAN">PANAMANIAN</option>
                                <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                                <option value="PARAGUAYAN">PARAGUAYAN</option>
                                <option value="PERUVIAN">PERUVIAN</option>
                                <option value="POLISH">POLISH</option>
                                <option value="PORTUGUESE">PORTUGUESE</option>
                                <option value="QATARI">QATARI</option>
                                <option value="ROMANIAN">ROMANIAN</option>
                                <option value="RUSSIAN">RUSSIAN</option>
                                <option value="RWANDAN">RWANDAN</option>
                                <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                                <option value="SALVADORAN">SALVADORAN</option>
                                <option value="SAMOAN">SAMOAN</option>
                                <option value="SAN MARINESE">SAN MARINESE</option>
                                <option value="SAO TOMEAN">SAO TOMEAN</option>
                                <option value="SAUDI">SAUDI</option>
                                <option value="SCOTTISH">SCOTTISH</option>
                                <option value="SENEGALESE">SENEGALESE</option>
                                <option value="SERBIAN">SERBIAN</option>
                                <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                                <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                                <option value="SINGAPOREAN">SINGAPOREAN</option>
                                <option value="SLOVAKIAN">SLOVAKIAN</option>
                                <option value="SLOVENIAN">SLOVENIAN</option>
                                <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                                <option value="SOMALI">SOMALI</option>
                                <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                                <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                                <option value="SPANISH">SPANISH</option>
                                <option value="SRI LANKAN">SRI LANKAN</option>
                                <option value="SUDANESE">SUDANESE</option>
                                <option value="SURINAMER">SURINAMER</option>
                                <option value="SWAZI">SWAZI</option>
                                <option value="SWEDISH">SWEDISH</option>
                                <option value="SWISS">SWISS</option>
                                <option value="SYRIAN">SYRIAN</option>
                                <option value="TAIWANESE">TAIWANESE</option>
                                <option value="TAJIK">TAJIK</option>
                                <option value="TANZANIAN">TANZANIAN</option>
                                <option value="THAI">THAI</option>
                                <option value="TOGOLESE">TOGOLESE</option>
                                <option value="TONGAN">TONGAN</option>
                                <option value="TUNISIAN">TUNISIAN</option>
                                <option value="TURKISH">TURKISH</option>
                                <option value="TUVALUAN">TUVALUAN</option>
                                <option value="UGANDAN">UGANDAN</option>
                                <option value="UKRAINIAN">UKRAINIAN</option>
                                <option value="URUGUAYAN">URUGUAYAN</option>
                                <option value="UZBEKISTANI">Uzbekistani</option>
                                <option value="VENEZUELAN">VENEZUELAN</option>
                                <option value="VIETNAMESE">VIETNAMESE</option>
                                <option value="WELSH">WELSH</option>
                                <option value="YEMENITE">YEMENITE</option>
                                <option value="ZAMBIAN">ZAMBIAN</option>
                                <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Age</label>
                        <input id="age"  type="number" name="age"  required  class="form-control">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Zip Code</label>
                        <input id="zipcode"  type="number" name="zipcode"  required  class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Height</label>
                                <input id="age"  type="number" name="height"  required  class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Weight</label>
                                <input id="age"  type="number" name="weight"  required  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Hair Color</label>
                        <select class="form-control" name="haircolor" id="exampleFormControlSelect2">
                            <option class="form-control" selected></option>
                            <option class="form-control" value="Brown">Brown</option>
                            <option class="form-control"  value="Black">Black</option>
                            <option class="form-control"  value="White">White</option>
                            <option class="form-control"  value="Sandy">Sandy</option>
                            <option class="form-control"  value="Gray or Partially Gray">Gray or Partially Gray</option>
                            <option class="form-control"  value="Red/Auburn">Red/Auburn</option>
                            <option class="form-control"  value="Blond/Strawberry">Blond/Strawberry</option>
                            <option class="form-control"  value="Green">Green</option>
                            <option class="form-control"  value="Orange">Orange</option>
                            <option class="form-control"  value="Pink">Pink</option>
                            <option class="form-control"  value="Purple">Purple</option>
                            <option class="form-control"  value="Partly or Completely Bald">Partly or Completely Bald</option>
                        </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                        <input id="password"  type="password"
                                  name="password"
                                  required autocomplete="new-password"  class="form-control">
                        </div>
                      <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Confirm Password</label>
                      <input id="password_confirmation"  type="password"
                                   type="password"
                                  name="password_confirmation" required  class="form-control">
                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn  w-100 my-4 mb-2" style="background-color: green;color: #fff;">Sign up</button>

                    </div>
                    <p class="mt-4 text-sm text-center">
                      Already registered?
                      <a href="{{ route('login') }}" class="text-success text-gradient font-weight-bold">Login</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</x-guest-layout>
