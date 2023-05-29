<div>

    {{-- Success is as dangerous as failure. --}}

    <div>
        <form wire:submit.prevent="register">
            {{-- page 1 --}}
            @if ($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                        <style>
                            .step-wizard {
                                /* background-color: #21d4fd; */
                                /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                /* height: 100vh; */
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .step-wizard-list {
                                background: #fff;
                                /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                                color: #333;
                                list-style-type: none;
                                border-radius: 10px;
                                display: flex;
                                padding: 20px 10px;
                                position: relative;
                                z-index: 10;
                            }

                            .step-wizard-item {
                                padding: 0 20px;
                                flex-basis: 0;
                                -webkit-box-flex: 1;
                                -ms-flex-positive: 1;
                                flex-grow: 1;
                                max-width: 100%;
                                display: flex;
                                flex-direction: column;
                                text-align: center;
                                min-width: 170px;
                                position: relative;
                            }

                            .step-wizard-item+.step-wizard-item:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 19px;
                                background: #007bff;
                                width: 100%;
                                height: 2px;
                                transform: translateX(-50%);
                                z-index: -10;
                            }

                            .progress-count {
                                height: 40px;
                                width: 40px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                font-weight: 600;
                                margin: 0 auto;
                                position: relative;
                                z-index: 10;
                                color: transparent;
                            }

                            .progress-count:after {
                                content: "";
                                height: 40px;
                                width: 40px;
                                background: #007bff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                border-radius: 50%;
                                z-index: -10;
                            }

                            .progress-count:before {
                                content: "";
                                height: 10px;
                                width: 20px;
                                border-left: 3px solid #fff;
                                border-bottom: 3px solid #fff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -60%) rotate(-45deg);
                                transform-origin: center center;
                            }

                            .progress-label {
                                font-size: 14px;
                                font-weight: 600;
                                margin-top: 10px;
                            }

                            .current-item .progress-count:before,
                            .current-item~.step-wizard-item .progress-count:before {
                                display: none;
                            }

                            .current-item~.step-wizard-item .progress-count:after {
                                height: 10px;
                                width: 10px;
                            }

                            .current-item~.step-wizard-item .progress-label {
                                opacity: 0.5;
                            }

                            .current-item .progress-count:after {
                                background: #fff;
                                border: 2px solid #007bff;
                            }

                            .current-item .progress-count {
                                color: #007bff;
                            }

                            @media (max-width: 480px) {
                                .step-wizard {
                                    /* background-color: #21d4fd; */
                                    /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                    /* height: 100vh; */
                                    width: 10%;
                                    display: flex;
                                    justify-content: center;
                                    margin: 0 auto;
                                    align-items: center;
                                }

                                .step-wizard-item {
                                    padding: 0 20px;
                                    flex-basis: 0;
                                    -webkit-box-flex: 1;
                                    -ms-flex-positive: 1;
                                    flex-grow: 1;
                                    max-width: 60%;
                                    display: flex;
                                    flex-direction: column;
                                    text-align: center;
                                    min-width: 100px;
                                    position: relative;
                                }

                                .progress-label {
                                    font-size: 10px;
                                    font-weight: 600;
                                    margin-top: 10px;
                                }
                            }

                            .card {
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                border: none;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            .card-header {
                                text-align: center;
                                font-weight: 900;
                                width: 100%;
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                margin: 0 auto;
                                height: 50px;
                            }

                            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

                            :root {
                                --blue: #0071FF;
                                --light-blue: #B6DBF6;
                                --dark-blue: #005DD1;
                                --grey: #f2f2f2;
                            }

                            .img-area {
                                position: relative;
                                width: 100%;
                                height: 240px;
                                background: var(--grey);
                                margin-bottom: 30px;
                                border-radius: 15px;
                                overflow: hidden;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                flex-direction: column;
                            }

                            .img-area .icon {
                                font-size: 100px;
                            }

                            .img-area h3 {
                                font-size: 20px;
                                font-weight: 500;
                                margin-bottom: 6px;
                            }

                            .img-area p {
                                color: #999;
                            }

                            .img-area p span {
                                font-weight: 600;
                            }

                            .img-area img {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                object-position: center;
                                z-index: 100;
                            }

                            .img-area::before {
                                content: attr(data-img);
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                background: rgba(0, 0, 0, .5);
                                color: #fff;
                                font-weight: 500;
                                text-align: center;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                pointer-events: none;
                                opacity: 0;
                                transition: all .3s ease;
                                z-index: 200;
                            }

                            .img-area.active:hover::before {
                                opacity: 1;
                            }

                            .select-image {
                                display: block;
                                width: 100%;
                                padding: 16px 0;
                                border-radius: 15px;
                                background: var(--blue);
                                color: #fff;
                                font-weight: 500;
                                font-size: 16px;
                                border: none;
                                cursor: pointer;
                                transition: all .3s ease;
                            }

                            .select-image:hover {
                                background: var(--dark-blue);
                            }
                        </style>


                        <div class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                            Define your needs</div>
                        <section class="step-wizard ">
                            <ul class="step-wizard-list">
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">ABOUT YOU</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Your background</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">STEP THREE</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">STEP FOUR</span>
                                </li>
                            </ul>
                        </section>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{-- <label for="">Middle name 1</label>
                                        <input type="text" class="form-control" wire:model="middle_name">
                                        <span class="text-danger">
                                            @error('middle_name')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <input type="file" id="file" accept="image/*" hidden>
                                    <div class="img-area" data-img="">
                                        <i class='bx bxs-cloud-upload icon'></i>
                                        <h3>Upload Image</h3>
                                        <p>Image size must be less than <span>2MB</span></p>
                                    </div>
                                    {{-- <a href="#" class="select-image">SELECT</a> --}}
                                    <button class="select-image" type="button">Select Image</button>
                                    <script>
                                        const selectImage = document.querySelector('.select-image');
                                        const inputFile = document.querySelector('#file');
                                        const imgArea = document.querySelector('.img-area');

                                        selectImage.addEventListener('click', function() {
                                            inputFile.click();
                                        })

                                        inputFile.addEventListener('change', function() {
                                            const image = this.files[0]
                                            if (image.size < 2000000) {
                                                const reader = new FileReader();
                                                reader.onload = () => {
                                                    const allImg = imgArea.querySelectorAll('img');
                                                    allImg.forEach(item => item.remove());
                                                    const imgUrl = reader.result;
                                                    const img = document.createElement('img');
                                                    img.src = imgUrl;
                                                    imgArea.appendChild(img);
                                                    imgArea.classList.add('active');
                                                    imgArea.dataset.img = image.name;
                                                }
                                                reader.readAsDataURL(image);
                                            } else {
                                                alert("Image size more than 2MB");
                                            }
                                        })
                                    </script>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{-- <label for="">Middle name 1</label>
                                        <input type="text" class="form-control" wire:model="middle_name">
                                        <span class="text-danger">
                                            @error('middle_name')
                                                {{ $message }}
                                            @enderror
                                        </span> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row ">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="">Middle name</label>
                                        <input type="text" class="form-control" wire:model="middle_name">
                                        <span class="text-danger">
                                            @error('middle_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Number of children</label>
                                        <input type="number" class="form-control" pattern="[0-9]+"
                                            wire:model="number_of_children">
                                        <span class="text-danger">
                                            @error('number_of_children')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Date of birth *</label>
                                        <input type="date" class="form-control" wire:model="date_of_birth"
                                            max="<?php echo date('Y-m-d'); ?>">
                                        <span class="text-danger">
                                            @error('date_of_birth')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select class="form-select" wire:model="gender">
                                            <option value="" selected>Select</option>
                                            <option value="Sunday">Female</option>
                                            <option value="Moday">Male</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nationality</label>
                                        <!-- Country names and Country Name -->
                                        <select class="form-select" id="country" wire:model="country">
                                            <option value="">-- select one --</option>
                                            <option value="afghan">Afghan</option>
                                            <option value="albanian">Albanian</option>
                                            <option value="algerian">Algerian</option>
                                            <option value="american">American</option>
                                            <option value="andorran">Andorran</option>
                                            <option value="angolan">Angolan</option>
                                            <option value="antiguans">Antiguans</option>
                                            <option value="argentinean">Argentinean</option>
                                            <option value="armenian">Armenian</option>
                                            <option value="australian">Australian</option>
                                            <option value="austrian">Austrian</option>
                                            <option value="azerbaijani">Azerbaijani</option>
                                            <option value="bahamian">Bahamian</option>
                                            <option value="bahraini">Bahraini</option>
                                            <option value="bangladeshi">Bangladeshi</option>
                                            <option value="barbadian">Barbadian</option>
                                            <option value="barbudans">Barbudans</option>
                                            <option value="batswana">Batswana</option>
                                            <option value="belarusian">Belarusian</option>
                                            <option value="belgian">Belgian</option>
                                            <option value="belizean">Belizean</option>
                                            <option value="beninese">Beninese</option>
                                            <option value="bhutanese">Bhutanese</option>
                                            <option value="bolivian">Bolivian</option>
                                            <option value="bosnian">Bosnian</option>
                                            <option value="brazilian">Brazilian</option>
                                            <option value="british">British</option>
                                            <option value="bruneian">Bruneian</option>
                                            <option value="bulgarian">Bulgarian</option>
                                            <option value="burkinabe">Burkinabe</option>
                                            <option value="burmese">Burmese</option>
                                            <option value="burundian">Burundian</option>
                                            <option value="cambodian">Cambodian</option>
                                            <option value="cameroonian">Cameroonian</option>
                                            <option value="canadian">Canadian</option>
                                            <option value="cape verdean">Cape Verdean</option>
                                            <option value="central african">Central African</option>
                                            <option value="chadian">Chadian</option>
                                            <option value="chilean">Chilean</option>
                                            <option value="chinese">Chinese</option>
                                            <option value="colombian">Colombian</option>
                                            <option value="comoran">Comoran</option>
                                            <option value="congolese">Congolese</option>
                                            <option value="costa rican">Costa Rican</option>
                                            <option value="croatian">Croatian</option>
                                            <option value="cuban">Cuban</option>
                                            <option value="cypriot">Cypriot</option>
                                            <option value="czech">Czech</option>
                                            <option value="danish">Danish</option>
                                            <option value="djibouti">Djibouti</option>
                                            <option value="dominican">Dominican</option>
                                            <option value="dutch">Dutch</option>
                                            <option value="east timorese">East Timorese</option>
                                            <option value="ecuadorean">Ecuadorean</option>
                                            <option value="egyptian">Egyptian</option>
                                            <option value="emirian">Emirian</option>
                                            <option value="equatorial guinean">Equatorial Guinean</option>
                                            <option value="eritrean">Eritrean</option>
                                            <option value="estonian">Estonian</option>
                                            <option value="ethiopian">Ethiopian</option>
                                            <option value="fijian">Fijian</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="finnish">Finnish</option>
                                            <option value="french">French</option>
                                            <option value="gabonese">Gabonese</option>
                                            <option value="gambian">Gambian</option>
                                            <option value="georgian">Georgian</option>
                                            <option value="german">German</option>
                                            <option value="ghanaian">Ghanaian</option>
                                            <option value="greek">Greek</option>
                                            <option value="grenadian">Grenadian</option>
                                            <option value="guatemalan">Guatemalan</option>
                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                            <option value="guinean">Guinean</option>
                                            <option value="guyanese">Guyanese</option>
                                            <option value="haitian">Haitian</option>
                                            <option value="herzegovinian">Herzegovinian</option>
                                            <option value="honduran">Honduran</option>
                                            <option value="hungarian">Hungarian</option>
                                            <option value="icelander">Icelander</option>
                                            <option value="indian">Indian</option>
                                            <option value="indonesian">Indonesian</option>
                                            <option value="iranian">Iranian</option>
                                            <option value="iraqi">Iraqi</option>
                                            <option value="irish">Irish</option>
                                            <option value="israeli">Israeli</option>
                                            <option value="italian">Italian</option>
                                            <option value="ivorian">Ivorian</option>
                                            <option value="jamaican">Jamaican</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="jordanian">Jordanian</option>
                                            <option value="kazakhstani">Kazakhstani</option>
                                            <option value="kenyan">Kenyan</option>
                                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                                            <option value="kuwaiti">Kuwaiti</option>
                                            <option value="kyrgyz">Kyrgyz</option>
                                            <option value="laotian">Laotian</option>
                                            <option value="latvian">Latvian</option>
                                            <option value="lebanese">Lebanese</option>
                                            <option value="liberian">Liberian</option>
                                            <option value="libyan">Libyan</option>
                                            <option value="liechtensteiner">Liechtensteiner</option>
                                            <option value="lithuanian">Lithuanian</option>
                                            <option value="luxembourger">Luxembourger</option>
                                            <option value="macedonian">Macedonian</option>
                                            <option value="malagasy">Malagasy</option>
                                            <option value="malawian">Malawian</option>
                                            <option value="malaysian">Malaysian</option>
                                            <option value="maldivan">Maldivan</option>
                                            <option value="malian">Malian</option>
                                            <option value="maltese">Maltese</option>
                                            <option value="marshallese">Marshallese</option>
                                            <option value="mauritanian">Mauritanian</option>
                                            <option value="mauritian">Mauritian</option>
                                            <option value="mexican">Mexican</option>
                                            <option value="micronesian">Micronesian</option>
                                            <option value="moldovan">Moldovan</option>
                                            <option value="monacan">Monacan</option>
                                            <option value="mongolian">Mongolian</option>
                                            <option value="moroccan">Moroccan</option>
                                            <option value="mosotho">Mosotho</option>
                                            <option value="motswana">Motswana</option>
                                            <option value="mozambican">Mozambican</option>
                                            <option value="namibian">Namibian</option>
                                            <option value="nauruan">Nauruan</option>
                                            <option value="nepalese">Nepalese</option>
                                            <option value="new zealander">New Zealander</option>
                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                            <option value="nicaraguan">Nicaraguan</option>
                                            <option value="nigerien">Nigerien</option>
                                            <option value="north korean">North Korean</option>
                                            <option value="northern irish">Northern Irish</option>
                                            <option value="norwegian">Norwegian</option>
                                            <option value="omani">Omani</option>
                                            <option value="pakistani">Pakistani</option>
                                            <option value="palauan">Palauan</option>
                                            <option value="panamanian">Panamanian</option>
                                            <option value="papua new guinean">Papua New Guinean</option>
                                            <option value="paraguayan">Paraguayan</option>
                                            <option value="peruvian">Peruvian</option>
                                            <option value="polish">Polish</option>
                                            <option value="portuguese">Portuguese</option>
                                            <option value="qatari">Qatari</option>
                                            <option value="romanian">Romanian</option>
                                            <option value="russian">Russian</option>
                                            <option value="rwandan">Rwandan</option>
                                            <option value="saint lucian">Saint Lucian</option>
                                            <option value="salvadoran">Salvadoran</option>
                                            <option value="samoan">Samoan</option>
                                            <option value="san marinese">San Marinese</option>
                                            <option value="sao tomean">Sao Tomean</option>
                                            <option value="saudi">Saudi</option>
                                            <option value="scottish">Scottish</option>
                                            <option value="senegalese">Senegalese</option>
                                            <option value="serbian">Serbian</option>
                                            <option value="seychellois">Seychellois</option>
                                            <option value="sierra leonean">Sierra Leonean</option>
                                            <option value="singaporean">Singaporean</option>
                                            <option value="slovakian">Slovakian</option>
                                            <option value="slovenian">Slovenian</option>
                                            <option value="solomon islander">Solomon Islander</option>
                                            <option value="somali">Somali</option>
                                            <option value="south african">South African</option>
                                            <option value="south korean">South Korean</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="sri lankan">Sri Lankan</option>
                                            <option value="sudanese">Sudanese</option>
                                            <option value="surinamer">Surinamer</option>
                                            <option value="swazi">Swazi</option>
                                            <option value="swedish">Swedish</option>
                                            <option value="swiss">Swiss</option>
                                            <option value="syrian">Syrian</option>
                                            <option value="taiwanese">Taiwanese</option>
                                            <option value="tajik">Tajik</option>
                                            <option value="tanzanian">Tanzanian</option>
                                            <option value="thai">Thai</option>
                                            <option value="togolese">Togolese</option>
                                            <option value="tongan">Tongan</option>
                                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian
                                            </option>
                                            <option value="tunisian">Tunisian</option>
                                            <option value="turkish">Turkish</option>
                                            <option value="tuvaluan">Tuvaluan</option>
                                            <option value="ugandan">Ugandan</option>
                                            <option value="ukrainian">Ukrainian</option>
                                            <option value="uruguayan">Uruguayan</option>
                                            <option value="uzbekistani">Uzbekistani</option>
                                            <option value="venezuelan">Venezuelan</option>
                                            <option value="vietnamese">Vietnamese</option>
                                            <option value="welsh">Welsh</option>
                                            <option value="yemenite">Yemenite</option>
                                            <option value="zambian">Zambian</option>
                                            <option value="zimbabwean">Zimbabwean</option>
                                        </select>

                                        <span class="text-danger">
                                            @error('country')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Phone number</label>
                                        <input type="text" class="form-control" wire:model="phone"
                                            placeholder="(+1) 123-456-789">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Type of Employment</label>
                                        <select class="form-select" wire:model="type_of_employment">
                                            <option value="" selected>Choose</option>
                                            <option value="full_time">Full time (Foreign Domestic Helper)</option>
                                            <option value="part_time ">Part time (Local Domestic Helper)</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('type_of_employment')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- STEP 2 --}}

            @if ($currentStep == 2)
                <div class="step-two">
                    <div class="card">
                        <style>
                            .step-wizard {
                                /* background-color: #21d4fd; */
                                /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                /* height: 100vh; */
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .step-wizard-list {
                                background: #fff;
                                /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                                color: #333;
                                list-style-type: none;
                                border-radius: 10px;
                                display: flex;
                                padding: 20px 10px;
                                position: relative;
                                z-index: 10;
                            }

                            .step-wizard-item {
                                padding: 0 20px;
                                flex-basis: 0;
                                -webkit-box-flex: 1;
                                -ms-flex-positive: 1;
                                flex-grow: 1;
                                max-width: 100%;
                                display: flex;
                                flex-direction: column;
                                text-align: center;
                                min-width: 170px;
                                position: relative;
                            }

                            .step-wizard-item+.step-wizard-item:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 19px;
                                background: #00B074;
                                width: 100%;
                                height: 2px;
                                transform: translateX(-50%);
                                z-index: -10;
                            }

                            .progress-count {
                                height: 40px;
                                width: 40px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                font-weight: 600;
                                margin: 0 auto;
                                position: relative;
                                z-index: 10;
                                color: transparent;
                            }

                            .progress-count:after {
                                content: "";
                                height: 40px;
                                width: 40px;
                                background: #00B074;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                border-radius: 50%;
                                z-index: -10;
                            }

                            .progress-count:before {
                                content: "";
                                height: 10px;
                                width: 20px;
                                border-left: 3px solid #fff;
                                border-bottom: 3px solid #fff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -60%) rotate(-45deg);
                                transform-origin: center center;
                            }

                            .progress-label {
                                font-size: 14px;
                                font-weight: 600;
                                margin-top: 10px;
                            }

                            .current-item .progress-count:before,
                            .current-item~.step-wizard-item .progress-count:before {
                                display: none;
                            }

                            .current-item~.step-wizard-item .progress-count:after {
                                height: 10px;
                                width: 10px;
                            }

                            .current-item~.step-wizard-item .progress-label {
                                opacity: 0.5;
                            }

                            .current-item .progress-count:after {
                                background: #fff;
                                border: 2px solid #00B074;
                            }

                            .current-item .progress-count {
                                color: #00B074;
                            }

                            .card {
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                border: none;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            .card-header {
                                text-align: center;
                                font-weight: 900;
                                width: 100%;
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                margin: 0 auto;
                                height: 50px;
                            }
                        </style>

                        <div
                            class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                            Define your needs</div>
                        <section class="step-wizard">
                            <ul class="step-wizard-list">
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">STEP ONE</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">STEP TWO</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">STEP THREE</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">STEP FOUR</span>
                                </li>
                            </ul>
                        </section>
                        <div class="card-body">
                            {{-- <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Expected start date</label>
                                        <input type="date" class="form-control" wire:model="expected_start_date"
                                            min="<?php echo date('Y-m-d'); ?>">
                                        <span class="text-danger">
                                            @error('expected_start_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                            </div> --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Education Level</label>
                                        <select class="form-select" wire:model="education_level">
                                            <option value="" selected>Select</option>
                                            <option value="O level">O level</option>
                                            <option value="A level">A level</option>
                                            <option value="1 university year">1 university year</option>
                                            <option value="2 university years">2 university years</option>

                                        </select>
                                        <span class="text-danger">
                                            @error('education_level')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Religion</label>
                                        <select class="form-select" wire:model="religion">
                                            <option value="" selected>Select</option>
                                            <option value="Live_In">Muslim</option>
                                            <option value="Live_Out">Buddihst</option>
                                            <option value="Live_Out">Other</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('religion')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Native Language</label>
                                        <select class="form-select" id="languages" name="languages"
                                            wire:model="languages">
                                            <option>Select</option>
                                            <option value="af">Afrikaans</option>
                                            <option value="sq">Albanian - shqip</option>
                                            <option value="am">Amharic - አማርኛ</option>
                                            <option value="ar">Arabic - العربية</option>
                                            <option value="an">Aragonese - aragonés</option>
                                            <option value="az">Azerbaijani - azərbaycan dili</option>
                                            <option value="eu">Basque - euskara</option>
                                            <option value="be">Belarusian - беларуская</option>
                                            <option value="bn">Bengali - বাংলা</option>
                                            <option value="bs">Bosnian - bosanski</option>
                                            <option value="br">Breton - brezhoneg</option>
                                            <option value="bg">Bulgarian - български</option>
                                            <option value="ca">Catalan - català</option>
                                            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                            <option value="zh">Chinese - 中文</option>
                                            <option value="hr">Croatian - hrvatski</option>
                                            <option value="da">Danish - dansk</option>
                                            <option value="nl">Dutch - Nederlands</option>
                                            <option value="en">English</option>
                                            <option value="et">Estonian - eesti</option>
                                            <option value="fo">Faroese - føroyskt</option>
                                            <option value="fil">Filipino</option>
                                            <option value="fi">Finnish - suomi</option>
                                            <option value="fr">French - français</option>
                                            <option value="de">German - Deutsch</option>
                                            <option value="el">Greek - Ελληνικά</option>
                                            <option value="gn">Guarani</option>
                                            <option value="gu">Gujarati - ગુજરાતી</option>
                                            <option value="ha">Hausa</option>
                                            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                            <option value="he">Hebrew - עברית</option>
                                            <option value="hi">Hindi - हिन्दी</option>
                                            <option value="hu">Hungarian - magyar</option>
                                            <option value="is">Icelandic - íslenska</option>
                                            <option value="id">Indonesian - Indonesia</option>
                                            <option value="ia">Interlingua</option>
                                            <option value="ga">Irish - Gaeilge</option>
                                            <option value="it">Italian - italiano</option>
                                            <option value="ja">Japanese - 日本語</option>
                                            <option value="ko">Korean - 한국어</option>
                                            <option value="ku">Kurdish - Kurdî</option>
                                            <option value="la">Latin</option>
                                            <option value="lt">Lithuanian - lietuvių</option>
                                            <option value="mk">Macedonian - македонски</option>
                                            <option value="ms">Malay - Bahasa Melayu</option>
                                            <option value="ml">Malayalam - മലയാളം</option>
                                            <option value="mt">Maltese - Malti</option>
                                            <option value="mr">Marathi - मराठी</option>
                                            <option value="mn">Mongolian - монгол</option>
                                            <option value="ne">Nepali - नेपाली</option>
                                            <option value="no">Norwegian - norsk</option>
                                            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                            <option value="oc">Occitan</option>
                                            <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                            <option value="om">Oromo - Oromoo</option>
                                            <option value="ps">Pashto - پښتو</option>
                                            <option value="fa">Persian - فارسی</option>
                                            <option value="pl">Polish - polski</option>
                                            <option value="pt">Portuguese - português</option>
                                            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)
                                            </option>
                                            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                            <option value="qu">Quechua</option>
                                            <option value="ro">Romanian - română</option>
                                            <option value="ru">Russian - русский</option>
                                            <option value="gd">Scottish Gaelic</option>
                                            <option value="sr">Serbian - српски</option>
                                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                            <option value="sn">Shona - chiShona</option>
                                            <option value="sd">Sindhi</option>
                                            <option value="si">Sinhala - සිංහල</option>
                                            <option value="sk">Slovak - slovenčina</option>
                                            <option value="sl">Slovenian - slovenščina</option>
                                            <option value="so">Somali - Soomaali</option>
                                            <option value="st">Southern Sotho</option>
                                            <option value="es">Spanish - español</option>
                                            <option value="su">Sundanese</option>
                                            <option value="sw">Swahili - Kiswahili</option>
                                            <option value="sv">Swedish - svenska</option>
                                            <option value="tg">Tajik - тоҷикӣ</option>
                                            <option value="ta">Tamil - தமிழ்</option>
                                            <option value="tt">Tatar</option>
                                            <option value="te">Telugu - తెలుగు</option>
                                            <option value="th">Thai - ไทย</option>
                                            <option value="ti">Tigrinya - ትግርኛ</option>
                                            <option value="to">Tongan - lea fakatonga</option>
                                            <option value="tr">Turkish - Türkçe</option>
                                            <option value="tk">Turkmen</option>
                                            <option value="tw">Twi</option>
                                            <option value="uk">Ukrainian - українська</option>
                                            <option value="ur">Urdu - اردو</option>
                                            <option value="ug">Uyghur</option>
                                            <option value="uz">Uzbek - o‘zbek</option>
                                            <option value="vi">Vietnamese - Tiếng Việt</option>
                                            <option value="wa">Walloon - wa</option>
                                            <option value="cy">Welsh - Cymraeg</option>
                                            <option value="fy">Western Frisian</option>
                                            <option value="xh">Xhosa</option>
                                            <option value="yi">Yiddish</option>
                                            <option value="yo">Yoruba - Èdè Yorùbá</option>
                                            <option value="zu">Zulu - isiZulu</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('languages')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            {{-- STEP 3 --}}
            @if ($currentStep == 3)
                <div class="step-two">
                    <div class="card">
                        <style>
                            .step-wizard {
                                /* background-color: #21d4fd; */
                                /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                /* height: 100vh; */
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .step-wizard-list {
                                background: #fff;
                                /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                                color: #333;
                                list-style-type: none;
                                border-radius: 10px;
                                display: flex;
                                padding: 20px 10px;
                                position: relative;
                                z-index: 10;
                            }

                            .step-wizard-item {
                                padding: 0 20px;
                                flex-basis: 0;
                                -webkit-box-flex: 1;
                                -ms-flex-positive: 1;
                                flex-grow: 1;
                                max-width: 100%;
                                display: flex;
                                flex-direction: column;
                                text-align: center;
                                min-width: 170px;
                                position: relative;
                            }

                            .step-wizard-item+.step-wizard-item:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 19px;
                                background: #00B074;
                                width: 100%;
                                height: 2px;
                                transform: translateX(-50%);
                                z-index: -10;
                            }

                            .progress-count {
                                height: 40px;
                                width: 40px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                font-weight: 600;
                                margin: 0 auto;
                                position: relative;
                                z-index: 10;
                                color: transparent;
                            }

                            .progress-count:after {
                                content: "";
                                height: 40px;
                                width: 40px;
                                background: #00B074;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                border-radius: 50%;
                                z-index: -10;
                            }

                            .progress-count:before {
                                content: "";
                                height: 10px;
                                width: 20px;
                                border-left: 3px solid #fff;
                                border-bottom: 3px solid #fff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -60%) rotate(-45deg);
                                transform-origin: center center;
                            }

                            .progress-label {
                                font-size: 14px;
                                font-weight: 600;
                                margin-top: 10px;
                            }

                            .current-item .progress-count:before,
                            .current-item~.step-wizard-item .progress-count:before {
                                display: none;
                            }

                            .current-item~.step-wizard-item .progress-count:after {
                                height: 10px;
                                width: 10px;
                            }

                            .current-item~.step-wizard-item .progress-label {
                                opacity: 0.5;
                            }

                            .current-item .progress-count:after {
                                background: #fff;
                                border: 2px solid #00B074;
                            }

                            .current-item .progress-count {
                                color: #00B074;
                            }

                            .card {
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                border: none;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            .card-header {
                                text-align: center;
                                font-weight: 900;
                                width: 100%;
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                margin: 0 auto;
                                height: 50px;
                            }
                        </style>

                        <div
                            class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                            Define your needs</div>
                        <section class="step-wizard">
                            <ul class="step-wizard-list">
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">STEP ONE</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">STEP TWO</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">STEP THREE</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">STEP FOUR</span>
                                </li>
                            </ul>
                        </section>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Title of my offer* (30-60 characters)</label>
                                        <input type="text" class="form-control" wire:model="title_of_offer">
                                        <span class="text-danger">
                                            @error('title_of_offer')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="">Define your needs</label>
                                        <textarea class="form-control customtextarea" rows="6"
                                            placeholder="Example:
We are a family of 3 members, 2 kids 10 and 12 years old and an elderly requiring special needs. Looking for a helper with at least 4 years of experience and good recommendations. We would like someone warm, friendly and kind to help with day-to-day tasks, experienced, flexible - priority is looking after our children, a great cook and super organised who can manage all things related to cooking and housekeeping (cleaning, laundry, ironing) with ease…"
                                            wire:model="define_needs"></textarea>
                                        <span class="text-danger">
                                            @error('define_needs')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nationality</label>
                                        <!-- Country names and Country Name -->
                                        <select class="form-select" id="country" wire:model="country">
                                            <option value="">country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
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
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                                                and Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean
                                                Territory</option>
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
                                            <option value="Congo, Democratic Republic of the Congo">Congo, Democratic
                                                Republic of the Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
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
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
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
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                            </option>
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
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the
                                                Former Yugoslav Republic of</option>
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
                                            <option value="Micronesia, Federated States of">Micronesia, Federated
                                                States of</option>
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
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                Occupied</option>
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
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                            </option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia
                                                and the South Sandwich Islands</option>
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
                                            <option value="Taiwan, Province of China">Taiwan, Province of China
                                            </option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
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
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>

                                        <span class="text-danger">
                                            @error('country')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" wire:model="address">
                                        <span class="text-danger">
                                            @error('address')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Phone number</label>
                                        <input type="text" class="form-control" wire:model="phone">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- page 4 --}}

            @if ($currentStep == 4)
                <div class="step-one">
                    <div class="card">
                        <style>
                            .step-wizard {
                                /* background-color: #21d4fd; */
                                /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                /* height: 100vh; */
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .step-wizard-list {
                                background: #fff;
                                /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                                color: #333;
                                list-style-type: none;
                                border-radius: 10px;
                                display: flex;
                                padding: 20px 10px;
                                position: relative;
                                z-index: 10;
                            }

                            .step-wizard-item {
                                padding: 0 20px;
                                flex-basis: 0;
                                -webkit-box-flex: 1;
                                -ms-flex-positive: 1;
                                flex-grow: 1;
                                max-width: 100%;
                                display: flex;
                                flex-direction: column;
                                text-align: center;
                                min-width: 170px;
                                position: relative;
                            }

                            .step-wizard-item+.step-wizard-item:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 19px;
                                background: #00B074;
                                width: 100%;
                                height: 2px;
                                transform: translateX(-50%);
                                z-index: -10;
                            }

                            .progress-count {
                                height: 40px;
                                width: 40px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                font-weight: 600;
                                margin: 0 auto;
                                position: relative;
                                z-index: 10;
                                color: transparent;
                            }

                            .progress-count:after {
                                content: "";
                                height: 40px;
                                width: 40px;
                                background: #00B074;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                border-radius: 50%;
                                z-index: -10;
                            }

                            .progress-count:before {
                                content: "";
                                height: 10px;
                                width: 20px;
                                border-left: 3px solid #fff;
                                border-bottom: 3px solid #fff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -60%) rotate(-45deg);
                                transform-origin: center center;
                            }

                            .progress-label {
                                font-size: 14px;
                                font-weight: 600;
                                margin-top: 10px;
                            }

                            .current-item .progress-count:before,
                            .current-item~.step-wizard-item .progress-count:before {
                                display: none;
                            }

                            .current-item~.step-wizard-item .progress-count:after {
                                height: 10px;
                                width: 10px;
                            }

                            .current-item~.step-wizard-item .progress-label {
                                opacity: 0.5;
                            }

                            .current-item .progress-count:after {
                                background: #fff;
                                border: 2px solid #00B074;
                            }

                            .current-item .progress-count {
                                color: #00B074;
                            }

                            @media (max-width: 480px) {
                                .step-wizard {
                                    /* background-color: #21d4fd; */
                                    /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                    /* height: 100vh; */
                                    width: 10%;
                                    display: flex;
                                    justify-content: center;
                                    margin: 0 auto;
                                    align-items: center;
                                }

                                .step-wizard-item {
                                    padding: 0 20px;
                                    flex-basis: 0;
                                    -webkit-box-flex: 1;
                                    -ms-flex-positive: 1;
                                    flex-grow: 1;
                                    max-width: 60%;
                                    display: flex;
                                    flex-direction: column;
                                    text-align: center;
                                    min-width: 100px;
                                    position: relative;
                                }

                                .progress-label {
                                    font-size: 10px;
                                    font-weight: 600;
                                    margin-top: 10px;
                                }
                            }

                            .card {
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                border: none;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            .card-header {
                                text-align: center;
                                font-weight: 900;
                                width: 100%;
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                margin: 0 auto;
                                height: 50px;
                            }
                        </style>
                        <div
                            class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                            Define your needs</div>
                        <section class="step-wizard ">
                            <ul class="step-wizard-list">
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">STEP ONE</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">STEP TWO</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">STEP THREE</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">STEP FOUR</span>
                                </li>
                            </ul>
                        </section>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nationality</label>
                                        <!-- Country names and Country Name -->
                                        <select class="form-select" id="country" wire:model="helper_nationality">
                                            <option value="">country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
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
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                                                and Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean
                                                Territory</option>
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
                                            <option value="Congo, Democratic Republic of the Congo">Congo, Democratic
                                                Republic of the Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
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
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
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
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                            </option>
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
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the
                                                Former Yugoslav Republic of</option>
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
                                            <option value="Micronesia, Federated States of">Micronesia, Federated
                                                States of</option>
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
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                Occupied</option>
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
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                            </option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia
                                                and the South Sandwich Islands</option>
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
                                            <option value="Taiwan, Province of China">Taiwan, Province of China
                                            </option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
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
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('helper_nationality')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select class="form-select" wire:model="gender">
                                            <option value="" selected>Select</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Religion</label>
                                        <select class="form-select" wire:model="religion">
                                            <option value="" selected>Select</option>
                                            <option value="christian">Christian</option>
                                            <option value="muslim">Muslim</option>
                                            <option value="buddist">Buddist</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('religion')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Minimum education level</label>
                                        <select class="form-select" wire:model="education_level">
                                            <option value="" selected>Choose</option>
                                            <option value="primary">Primary</option>
                                            <option value="secondary">Secondary</option>
                                            <option value="high school">High school</option>
                                            <option value="university">University</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('education_level')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Contract situation</label>
                                        <select class="form-select" wire:model="contract_situation">
                                            <option value="" selected>Choose</option>
                                            <option value="finished">Finished / about to finish</option>
                                            <option value="break">Broken contract</option>
                                            <option value="terminated_relocation">Terminated (relocation/financial)
                                            </option>
                                            <option value="terminated_other">Terminated (other reasons)</option>
                                            <option value="unemployed">Unemployed / abroad</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('contract_situation')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="">Monthly salary</label>
                                        <input type="text" class="form-control" wire:model="monthly_salary">
                                        <span class="text-danger">
                                            @error('monthly_salary')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Currency</label>
                                        <select class="form-select" id="currency" wire:model="currency_coin">
                                            <option value="">currency</option>
                                            <option value="MAD">MAD - Moroccan Dirham</option>
                                            <option value="USD">USD - US Dollar</option>
                                            <option value="SAR">SAR - Saudi Riyal</option>
                                            <option value="HKD">HKD - Hong Kong Dollar</option>
                                            <option value="SGD">SGD - Singapore Dollar</option>
                                            <option value="AED">AED - United Arab Emirates Dirham</option>
                                            <option value="KWD">KWD - Kuwaiti Dinar</option>
                                            <option value="NPR">NPR - Nepalese Rupee</option>
                                            <option value="INR">INR - Indian Rupee</option>
                                            <option value="TRY">TRY - Turkish Lira</option>
                                            <option value="PKR">PKR - Pakistani Rupee</option>
                                            <option value="OMR">OMR - Omani Rial</option>
                                            <option value="PHP">PHP - Philippine Peso</option>
                                            <option value="JPY">JPY - Japanese Yen</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('currency_coin')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>


                            </div>

                            {{-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Make sure you offer at least the minimum salary it is
                                            applicable in your country</label>
                                        <select class="form-select" wire:model="expected_duties">
                                            <option value="" selected>Choose</option>
                                            <option value="Age of children the candidate has experience with">Age of children the candidate has experience with
                                            </option>
                                            <option value="Age of the candidates">Age of the candidates</option>
                                            <option value="Spoken languages by the candidate">Spoken languages by the candidate
                                            </option>
                                            <option value="Expected duties">Expected duties</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('expected_duties')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endif

            {{-- BUTTONS --}}
            <div class="action-buttons d-flex justify-content-between pt-2 pb-2">

                @if ($currentStep == 1)
                    <div></div>
                @endif

                @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                    <button type="button" class="btn btn-md btn-danger" wire:click="decreaseStep()"><i
                            class="fa-sharp fa-solid fa-arrow-left"></i></button>
                @endif

                @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                    <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()"><i
                            class="fa-sharp fa-solid fa-arrow-right"></i></button>
                @endif

                @if ($currentStep == 4)
                    <button type="submit" class="btn btn-md btn-primary"><i
                            class="fa-solid fa-check"></i></button>
                @endif
            </div>
        </form>
    </div>
</div>
