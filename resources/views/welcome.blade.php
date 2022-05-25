<!DOCTYPE html>
<html lang="en">
<!-- Teljes welcomepage stílusa -->
<style>

    body {
        margin:0;
        padding:0;
        background:#ccc;
        font-family: 'Roboto Condensed', sans-serif;

    }

    .social {
        position:absolute;
        top:86%;
        left:10%;
        /*transform:translate(-50%, -50%);*/
        display:flex;
        margin:0;
        padding:0;
    }

    .social li {
        list-style:none;
        margin:0 5px;
    }

    .social li a .fa {
        font-size: 40px;
        color: #262626;
        line-height:40px;
        transition: .5s;
    }

    .social li a span {
        padding:0;
        margin:0;
        position:absolute;
        top: 30px;
        color: #262626;
        letter-spacing: 4px;
        transition: .5s;
    }

    .social li a {
        text-decoration: none;
        /*display:absolute;*/
        display:block;
        width:80px;
        height:80px;
        background: #fff;
        text-align:center;
        border-radius: 3rem;

        /*padding-left: 20px;*/
        transition:.5s;
    }


    .social li a:hover {
    }

    .social li:hover .fa {
        color:#fff;
    }

    .social li:hover span {
        color:#fff;
    }

    .social li:hover:nth-child(1) a{
        background: #1778F2;
    }

    .social li:hover:nth-child(2) a{
        background: #00aced;
    }

    .social li:hover:nth-child(3) a{
        background: black;
    }

    .social li:hover:nth-child(4) a{
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        box-shadow: 0px 3px 10px rgba(0,0,0,.25);
    }


    .logo_{
        color:#F64C72;
        font-family: 'Bebas Neue';
        /*font-family: 'Source Sans Pro', sans-serif;*/
        letter-spacing: 11px;
        font-size: 4rem;
        /*margin: 0.5rem;*/
        align-content: center;
        alignment: center;
        display: flex;
        justify-content: center;
        align-items: center;
        max-height: 11rem;
        /*border: 10px;*/
    }
    .fa-calendar{
        display: inline-block;
        alignment: center;
        align-items: center;
        align-content: center;
        align-self: center;
    }
    .social{
        margin: 0;
        padding: 0;
        display: flex;
    }
    li{
        list-style: none;
        display: flex;
        justify-content: space-around;
    }
    li a{
        text-decoration: none;
        color: white;
        display: block;
        padding: 1.2rem;
        font-family: "Bebas Neue";
        /*font-family: 'Source Sans Pro', sans-serif;*/
    }
    .button_{
        position: absolute;
        right: 1rem;
        top:.75rem;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;
    }
    .button_ .bar{
        height: 3px;
        width: 100%;
        background-color: white;
        border-radius: 10px;
    }
    body{
        text-align: center;
        background-image: linear-gradient(
            270deg,
            #BC3B71 10%,
            #4d4dcb 70%
        );

    }
    h1{
        font-family: "Bebas Neue";
        letter-spacing: 1px;
        font-size: 300%;
        color: white;
        padding-top: 10px;
        text-align: left;
    }
    h2{
        font-family: "Bebas Neue";
        letter-spacing: 1px;
        font-size: 12rem;
        color: white;
        /*margin-right: 300px;*/
        text-align: left;

    }


    .cim{
        padding-top: 14%;
        padding-left: 3%;
        display: inline-block;
        color: white;
        font-size: 4rem;
        text-align: left;
        font-family: "Bebas Neue";
        letter-spacing: 5px;
        float: left;
        margin-bottom: 1%;
    }
    .sablon_sz{
        outline: white;
        padding-left: 3%;
        display: inline-block;
        font-size: 2rem;
        letter-spacing: 3px;
        font-family: "Bebas Neue";
        clear: both;
        float: left;
        margin-bottom: 10%;

    }
    .kep{
        -webkit-filter: drop-shadow(5px 5px 5px #222 );
        filter: drop-shadow(5px 5px 5px #222);
        /*width: 50%;*/
        float: right;
        right: 2%;
        padding-top: 8%;
        width: 80%;
    }


    * {
        box-sizing: border-box;
    }


    .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column {
        flex: 50%;
        max-width: 50%;
        padding: 0 4px;
    }
    .column img {
        margin-top: 8px;
        margin-right: 3%;
        vertical-align: middle;
    }

    .main_page_links{
        height: 3px;
        width: 100%;
        background-color: #F64C72;
        border-radius: 10rem;
        font-size: 30px;
        font-family: "Bebas Neue";
        width: 300px;
        height: 50px;
        padding: 14px 17px;
        color: white;
        letter-spacing: 2px;

    }
    a:link {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    a:active {
        text-decoration: none;
    }



    @media (max-width: 768px) {
        .column {
            flex: 100%;
            max-width: 100%;
        }

        .navbar_links {
            display: flex;
        }
        nav{
            display: inline-block;
        }
        .cim{
            font-size: 3rem;
            text-align: center;
            float: none;
        }
        .sablon_sz{
            font-size: 1.5rem;
            text-align: center;
        }
        .social{
            position:static;
            bottom: 10%;
            left:50%;
            justify-content: center;
            padding-bottom: 8%;
        }
        .main_page_links{
            font-size: 22px;
        }
        .kep{
            -webkit-filter: drop-shadow(5px 5px 5px #222 );
            filter: drop-shadow(5px 5px 5px #222);
            float: none;
            /*right: 2%;*/
            padding-top: 8%;
            width: 85%;
            padding-bottom: 10%;
        }

    }
    .begin{
        cursor: pointer;
        display: block;
        clear: both;
        width: 180px;
        height: 50px;
        border: none;
        border-radius: 25px;
        background-color:#F64C72;
        font-size: 22px;
        letter-spacing: 2px;
        font-family: "Bebas Neue";
        color: white;
        margin-left: 30%;
    }
</style>

<head>
    <title>Doodle Főoldal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Felhasznált linkek, amik importálják a logot, text-family. -->
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">


{{--    <link rel="stylesheet" href="Style.css">--}}
    <link rel="icon" href="logo2.png">
</head>

<header>
    <nav>
        <div class="logo_">
            <!-- Használjuk a logot, amit linkeltünk -->
            <h4><i class="fa fa-calendar"></i>|Doodle</h4>
        </div>

        </div>

    </nav>
</header>
<body>


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="word-spacing: 2rem;max-height: 10rem">
    @if (Route::has('login'))
        <div   class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a class="main_page_links" href="{{ url('/foglalas') }}" >Foglalás</a>
            @else
                <a class="main_page_links" href="{{ route('login') }}" >Bejelentkezés</a>

                @if (Route::has('register'))
                    <a class="main_page_links" href="{{ route('register') }}" >Regisztráció</a>
                @endif
            @endauth
        </div>
    @endif

</div>


<!-- Photo Grid -->
<div class="row">
    <div class="column">
        <h1   class="cim">Kormányzati időpontfoglaló</h1>
        <h2   class="sablon_sz">Megkönnyítjük az életét, hogy jusson ideje az igazán fontos dolgokra</h2>

    </div>

    <div class="column">
        <img class="kep" src="/images/calendarpic.png" >
    </div>


</div>
<div class="social">
{{--<ul>--}}
    <!--Social gombok-->
    <li>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
    </li>
    <li>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
    </li>
    <li>
        <a href="https://github.com/Jazzay-lgtm/Temalab_Doodle/tree/main">
            <i class="fa fa-github" aria-hidden="true"></i>
        </a>
    </li>
    <li>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
    </li>
{{--</ul>--}}
</div>
</body>
</html>
