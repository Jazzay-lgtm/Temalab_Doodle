<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rólunk') }}
        </h2>
    </x-slot>

    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;594&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            display: flex;
            justify-content: center;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        .card {
            text-align: center;
            color: white;
            font-family: "Bebas Neue";
            width: 40%;
            margin: auto;
            display: block;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
            border-radius: 0.5rem;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }
        img{
            border-radius: 0.5rem;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            text-align: center;
            color: yellow;
            font-size: 25px;

        }
        h2{
            font-size: 35px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .text_{
            font-size: 25px;
        }
        .email{
            font-size: 20px;
        }
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
            .card{
                width:97%;
                display:block;

            }
        }

        .outer{
            /*border: 1px solid #000;*/
            display:flex;
            justify-content: center;
        }
        .outer > div {
        }
    </style>
    <div class="about-us-section">
        <h2 style="font-family: 'Bebas Neue'; text-align: center; color: white;font-size: 50px" >
            Rólunk
        </h2>

        <h2 style="font-size: 40px; color: white; text-align: center;font-family: 'Bebas Neue'">
            Mi követtük el ezt az oldalt
        </h2>
    </div>

        <div class="column">
            <div class="card">
                <img src="/images/kenny.jpg" alt="Cash" style="width:100%">
                <div class="container">
                    <h2>Cash</h2>
                    <p class="title">Vice President</p>
                    <p class="text_">Let's see Paul Allen's about us page</p>
                    <p class="email">doodle.ad23@gmail.com</p>

                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/images/randy.jpg"  alt="Eos Ricsi" style="width:100%">
                <div class="container">
                    <h2>Eos Ricsi</h2>
                    <p class="title">Creative Director</p>
                    <p class="text_">Let's see Paul Allen's about us page</p>
                    <p class="email">doodle.ad23@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/images/cartman.jpg" alt="Jazzay" style="width:100%">
                <div class="container">
                    <h2>Jazzay</h2>
                    <p class="title">Vice President</p>
                    <p class="text_">Let's see Paul Allen's about us page</p>
                    <p class="email">doodle.ad23@gmail.com</p>
                </div>
            </div>
        </div>


        <div class="column">
            <div class="card">
                <img src="/images/wendy.jpg" alt="Shayni" style="width:100%">
                <div class="container">
                    <h2>Shayni</h2>
                    <p class="title">Vice President</p>
                    <p class="text_">Let's see Paul Allen's about us page</p>
                    <p class="email">doodle.ad23@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="/images/stan.jpg" alt="Ati" style="width:100%">
                <div class="container">
                    <h2>Ati</h2>
                    <p class="title">Creative Director</p>
                    <p class="text_">Let's see Paul Allen's about us page</p>
                    <p class="email">doodle.ad23@gmail.com</p>
                </div>
            </div>
        </div>


</x-app-layout>

