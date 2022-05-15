<!DOCTYPE html>
<html lang="en">

<style>
    .logo_{
        color:#F64C72;
        font-family: 'Bebas Neue';
        /*font-family: 'Source Sans Pro', sans-serif;*/
        letter-spacing: 2px;
        font-size: 1.78rem;
        margin: 0.5rem;
        align-content: center;
        alignment: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .fa-calendar{
        display: inline-block;
        alignment: center;
        align-items: center;
        align-content: center;
        align-self: center;
    }
    ul{
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
        padding: 1.5rem;
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
    }
    h2{
        font-family: "Bebas Neue";
        letter-spacing: 1px;
        font-size: 150%;
        color: white;
        /*margin-right: 300px;*/
    }
    h1{
        padding-top: 10px;
        /*mainPage-nél van beállítva, mert mindenhol behúzta, ahol h1 volt használva*/
        /*padding-left: 3%;*/
        text-align: left;
    }
    h2{
        /*mainPage-nél van beállítva, mert mindenhol behúzta, ahol h2 volt használva*/
        /*padding-left: 3%;*/
        text-align: left;
    }
    .cim{
        padding-top: 14%;
        display: inline-block;
        color: white;
        font-size: 48px;
        text-align: left;
        font-family: "Bebas Neue";
        letter-spacing: 2px;
        float: left;
        margin-bottom: 1%;
        /*mainPage-nél van beállítva
        /*margin-left: 2%;*/
    }
    .sablon_sz{
        outline: white;
        display: inline-block;
        font-size: 22px;
        letter-spacing: 1px;
        font-family: "Bebas Neue";
        clear: both;
        float: left;
        margin-bottom: 10%;
        /*mainPage-nél van beállítva*/
        /*margin-left: 2%;*/
    }
    .kep{
        -webkit-filter: drop-shadow(5px 5px 5px #222 );
        filter: drop-shadow(5px 5px 5px #222);
        /*width: 50%;*/
        float: right;
        right: 2%;
        padding-top: 8%;
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
        background-color: white;
        border-radius: 25px;
        font-size: 30px;
        font-family: "Bebas Neue";
        width: 300px;
        height: 50px;
        background-size: 180px;

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
    }
    .begin{
        cursor: pointer;
        display: block;isplay: inline-block;
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
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="logo2.png">
</head>

<header>
    <nav>
        <div class="logo_">
            <h4><i class="fa fa-calendar"></i>|Doodle</h4>
        </div>

        </div>

    </nav>
</header>
<body>


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
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
        <h1 style="text-align: left; padding-left: 3%" class="cim">Kormányzati időpontfoglaló</h1>
        <h2 style="text-align: left; padding-left: 3%" class="sablon_sz">Megkönnyítjük az életét, hogy jusson ideje az igazán fontos dolgokra</h2>
        <button class="begin" onclick="document.location='Index.html'" >Kezdjük</button>
    </div>
    <div class="column">
        <img class="kep" src="/images/calendarpic.png" style="width:100%">
    </div>


</div>


<div class="szoveg">

</div>
</body>
</html>
