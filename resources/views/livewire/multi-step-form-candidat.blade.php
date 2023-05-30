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
                                background: #0071FF;
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
                                background: #0071FF;
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
                                border: 2px solid #0071FF;
                            }

                            .current-item .progress-count {
                                color: #0071FF;
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
                        <section class="step-wizard">
                            <ul class="step-wizard-list current-item">
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">About You</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Your background</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">More</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">Finished</span>
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
                                    <input type="file" id="file" accept="image/*"  wire:model="image">
                                           @error('image')
                                                {{ $message }}
                                            @enderror
                                    {{-- <div class="img-area" data-img="">
                                        <i class='bx bxs-cloud-upload icon'></i>
                                        <h3>Upload Image</h3>
                                        <p>Image size must be less than <span>2MB</span></p>
                                    </div> --}}
                                    {{-- <a href="#" class="select-image">SELECT</a> --}}
                                    <button class="select-image" type="button">Select Image</button>
                                    {{-- <script>
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
                                    </script> --}}
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">

                                    </div>
                                </div>
                            </div>

                            <div class="row ">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="">Middle name</label>
                                        <input type="text" class="form-control" wire:model="middle_name"
                                            disabled>
                                        {{-- <input type="text" class="form-control" wire:model="middle_name" value="" disabled> --}}
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
                                        <input type="number" class="form-control" pattern="[0-9]+" min="0"
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
                                background: #0071FF;
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
                                background: #0071FF;
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
                                border: 2px solid #0071FF;
                            }

                            .current-item .progress-count {
                                color: #0071FF;
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
                                    <span class="progress-label">About You</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Your background</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">More</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">Finished</span>
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
                                background: #0071FF;
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
                                background: #0071FF;
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
                                border: 2px solid #0071FF;
                            }

                            .current-item .progress-count {
                                color: #0071FF;
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
                                    <span class="progress-label">About You</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Your background</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">More</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">Finished</span>
                                </li>
                            </ul>
                        </section>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Passport number or HKID</label>
                                        <input type="text" class="form-control" wire:model="passport_number">
                                        <span class="text-danger">
                                            @error('passport_number')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Visa expiry date (if you have one)</label>
                                        <input type="date" class="form-control" wire:model="visa_expiry_date">
                                        <span class="text-danger">
                                            @error('visa_expiry_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- <div class="form-group"> --}}
                                    <style>
                                        .section-items {
                                            display: flex;
                                            justify-content: space-between;
                                            /* width: 100vmin;
                                            height: 100vh; */
                                            /* position: absolute; */
                                            /* transform: translate(-50%, -50%); */
                                            /* left: 50%;
                                            top: 50%; */
                                            /* align-items: center;
                                            flex-wrap: wrap;
                                            gap: 20px; */
                                        }

                                        .tile {
                                            height: 200px;
                                            width: 270px;
                                            position: relative;
                                            text-align: center;
                                        }

                                        input[type="checkbox"] {
                                            -webkit-appearance: none;
                                            position: relative;
                                            height: 100%;
                                            width: 100%;
                                            background-color: #ffffff;
                                            border-radius: 10px;
                                            cursor: pointer;
                                            border: 3px solid transparent;
                                            outline: none;
                                            box-shadow: 15px 15px 25px rgba(2, 28, 53, 0.05);
                                        }

                                        input[type="checkbox"]:after {
                                            position: absolute;
                                            font-family: "Font Awesome 5 Free";
                                            font-weight: 400;
                                            content: "\f111";
                                            font-size: 22px;
                                            top: 10px;
                                            left: 10px;
                                            color: #e2e6f3;
                                        }

                                        input[type="checkbox"]:hover {
                                            transform: scale(1.08);
                                        }

                                        input[type="checkbox"]:checked {
                                            border: 3px solid #478bfb;
                                        }

                                        input[type="checkbox"]:checked:after {
                                            font-weight: 900;
                                            content: "\f058";
                                            color: #478bfb;
                                        }

                                        .tile label {
                                            display: flex;
                                            flex-direction: column;
                                            align-items: center;
                                            justify-content: center;
                                            gap: 20px;
                                            height: 80%;
                                            width: 100%;
                                            position: absolute;
                                            bottom: 0;
                                            cursor: pointer;
                                        }

                                        label .fas {
                                            font-size: 60px;
                                            color: #2c2c51;
                                        }

                                        input[type="checkbox"]:checked+label .fas {
                                            animation: grow 0.5s;
                                        }

                                        @keyframes grow {
                                            50% {
                                                font-size: 80px;
                                            }
                                        }

                                        .tile label h6 {
                                            font-family: "Poppins", sans-serif;
                                            font-size: 15px;
                                            font-weight: 400;
                                            color: #7b7b93;
                                        }
                                    </style>
                                    <section class="section-items mt-5">
                                        <div class="tile">
                                            <input type="checkbox" name="sports" id="sport1"  value="Driving license" wire:model="driving_license">
                                            <label for="sport1">
                                                {{-- <i class="fas fa-basketball-ball"></i> --}}
                                                <i class="fas fa-id-card"></i>
                                                <h6>Driving license valid</h6>
                                            </label>
                                        </div>
                                        <div class="tile">
                                            <input type="checkbox" name="sports" id="sport2"  value="Access to a car" wire:model="access_to_a_car">
                                            <label for="sport2">
                                                {{-- <i class="fas fa-swimmer"></i> --}}
                                                <i class="fas fa-car"></i>
                                                <h6>Access to a car</h6>
                                            </label>
                                        </div>
                                        <div class="tile">
                                            <input type="checkbox" name="sports" id="sport3"  value="First Aid training" wire:model="first_Aid_training">
                                            <label for="sport3">
                                                {{-- <i class="fas fa-quidditch"></i> --}}
                                                <i class="fas fa-kit-medical"></i>
                                                <h6>First Aid training</h6>
                                            </label>
                                        </div>
                                    </section>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- BUTTONS --}}
            <div class="action-buttons d-flex justify-content-between pt-2 pb-2">

                @if ($currentStep == 1)
                    <div></div>
                @endif

                @if ($currentStep == 2 || $currentStep == 3 )
                    <button type="button" class="btn btn-md btn-danger" wire:click="decreaseStep()"><i
                            class="fa-sharp fa-solid fa-arrow-left"></i></button>
                @endif

                @if ($currentStep == 1 || $currentStep == 2)
                    <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()"><i
                            class="fa-sharp fa-solid fa-arrow-right"></i></button>
                @endif

                @if ($currentStep == 3)
                    <button type="submit" class="btn btn-md btn-primary"><i class="fa-solid fa-check"></i></button>
                @endif
            </div>
        </form>
    </div>
</div>
