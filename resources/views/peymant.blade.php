<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: uppercase;
        }

        .container {
            min-height: 100vh;
            background: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
            padding-bottom: 60px;
        }

        .container form {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, .1);
            padding: 20px;
            width: 600px;
            padding-top: 160px;
        }

        .container form .inputBox {
            margin-top: 20px;
        }

        .container form .inputBox span {
            display: block;
            color: #999;
            padding-bottom: 5px;
        }

        .container form .inputBox input,
        .container form .inputBox select {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, .3);
            color: #444;
        }

        .container form .flexbox {
            display: flex;
            gap: 15px;
        }

        .container form .flexbox .inputBox {
            flex: 1 1 150px;
        }

        .container form .submit-btn {
            width: 100%;
            background: linear-gradient(45deg, #00b074, blueviolet);
            margin-top: 20px;
            padding: 10px;
            font-size: 20px;
            color: #fff;
            border-radius: 10px;
            cursor: pointer;
            transition: .2s linear;
        }

        .container form .submit-btn:hover {
            letter-spacing: 2px;
            opacity: .8;
        }

        .container .card-container {
            margin-bottom: -150px;
            position: relative;
            height: 250px;
            width: 400px;
        }

        .container .card-container .front {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            /* background: linear-gradient(45deg, blueviolet, deeppink); */
            background: linear-gradient(45deg, blueviolet, #00b074);
            border-radius: 5px;
            backface-visibility: hidden;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .2);
            padding: 20px;
            transform: perspective(1000px) rotateY(0deg);
            transition: transform .4s ease-out;
        }

        .container .card-container .front .image {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 10px;
        }

        .container .card-container .front .image img {
            height: 50px;
        }

        .container .card-container .front .card-number-box {
            padding: 30px 0;
            font-size: 22px;
            color: #fff;
        }

        .container .card-container .front .flexbox {
            display: flex;
        }

        .container .card-container .front .flexbox .box:nth-child(1) {
            margin-right: auto;
        }

        .container .card-container .front .flexbox .box {
            font-size: 15px;
            color: #fff;
        }

        .container .card-container .back {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(45deg, blueviolet, #00b074);
            border-radius: 5px;
            padding: 20px 0;
            text-align: right;
            backface-visibility: hidden;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .2);
            transform: perspective(1000px) rotateY(180deg);
            transition: transform .4s ease-out;
        }

        .container .card-container .back .stripe {
            background: #000;
            width: 100%;
            margin: 10px 0;
            height: 50px;
        }

        .container .card-container .back .box {
            padding: 0 20px;
        }

        .container .card-container .back .box span {
            color: #fff;
            font-size: 15px;
        }

        .container .card-container .back .box .cvv-box {
            height: 50px;
            padding: 10px;
            margin-top: 5px;
            color: #333;
            background: #fff;
            border-radius: 5px;
            width: 100%;
        }

        .container .card-container .back .box img {
            margin-top: 30px;
            height: 30px;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="card-container">

            <div class="front">
                <div class="image">
                    <img src="{{ asset('img/chip.png') }}" alt="">
                    <img src="{{ asset('img/visa.png') }}" alt="">
                </div>
                <div class="card-number-box">#### #### #### ####</div>
                <div class="flexbox">
                    <div class="box">
                        <span>card holder</span>
                        <div class="card-holder-name">full name</div>
                    </div>
                    <div class="box">
                        <span>expires</span>
                        <div class="expiration">
                            <span class="exp-month">mm</span>
                            <span class="exp-year">yy</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="back">
                <div class="stripe"></div>
                <div class="box">
                    <span>cvv</span>
                    <div class="cvv-box"></div>
                    <img src="image/visa.png" alt="">
                </div>
            </div>

        </div>

        <form action="{{ route('single.charge') }}" method="POST" id="subscribe-form">
            <div class="inputBox">
                @csrf
                <div class="form-row">
                    <div id="card-element" class="form-control"
                        style="border: 1px solid #b2b2b2;border-radius: 5px;padding: 10px;">
                    </div>
                    <div id="card-errors" role="alert"></div>
                </div>
                <div class="stripe-errors"></div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="inputBox">
                <span>card holder</span>

                <input id="card-holder-name" type="text" class="card-holder-input" maxlength="30"
                    onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.key==' '">
            </div>
            <input id="card-button" type="submit" data-secret="{{ $intent->client_secret }}" value="submit"
                class="submit-btn">
        </form>

    </div>





    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            hidePostalCode: true,
            style: style
        });
        card.mount('#card-element');
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {

            e.preventDefault();
            console.log("attempting");
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                paymentMethodHandler(setupIntent.payment_method);
            }
        });

        function paymentMethodHandler(payment_method) {
            var form = document.getElementById('subscribe-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>

    <script>
        document.querySelector('#card-element').oninput = () => {
            document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
        }
        

        document.querySelector('.card-holder-input').oninput = () => {
            document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
        }

        document.querySelector('.month-input').oninput = () => {
            document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
        }

        document.querySelector('.year-input').oninput = () => {
            document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
        }

        document.querySelector('.cvv-input').onmouseenter = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
        }

        document.querySelector('.cvv-input').onmouseleave = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
        }

        document.querySelector('.cvv-input').oninput = () => {
            document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
        }
    </script>



    {{-- <script>
        const form = document.querySelector("#credit-card");

        const cardNumber = document.querySelector(".card-number-input");
        const cardHolder = document.querySelector("#name-text");
        const cardExpiration = document.querySelector("#valid-thru-text");
        const cardCVV = document.querySelector("#cvv-text");

        const cardNumberText = document.querySelector(".card-number-input");
        const cardHolderText = document.querySelector(".name-vl");
        const cardExpirationText = document.querySelector(".expiration-vl");
        const cardCVVText = document.querySelector(".cvv-vl");

        cardNumber.addEventListener("keyup", (e) => {
            if (!e.target.value) {
                cardNumberText.innerText = "1234 5678 9101 1121";
            } else {
                const valuesOfInput = e.target.value.replaceAll(" ", "");

                if (e.target.value.length > 14) {
                    e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
                    cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/,
                        "$1 $2 $3 $4");
                } else if (e.target.value.length > 9) {
                    e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
                    cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
                } else if (e.target.value.length > 4) {
                    e.target.value = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
                    cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
                } else {
                    cardNumberText.innerHTML = valuesOfInput
                }
            }
        })
    </script> --}}





</body>

</html>
