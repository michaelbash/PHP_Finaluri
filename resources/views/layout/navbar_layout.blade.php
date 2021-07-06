<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .main{
        width: 100%;
        height: 100vh;
        position: relative;
        overflow: hidden;
        background: linear-gradient(to right, #000000, #ad1221);

    }
    nav{
        width: 90%;
        position: sticky ;
        margin: 10px auto;
        z-index: 1;
        display: flex;
        align-items: center;
    }

    .logo{
        flex-basis: 20%;
    }

    .logo img{
        width: 150px;
    }
    .nav-links{
        flex: 1;
        text-align: right;
    }
    .nav-links ul li{
        list-style: none;
        display: inline-block;
        margin: 0 20px ;
    }

    .nav-links ul li a{
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        text-transform: uppercase;
        letter-spacing: 4px;
        font-size: 14px;
        overflow: hidden;
        transition: 0.2s;
        color: #fff;
        text-decoration: none ;
    }
    a:hover{
        color: crimson;
        background: rgb(95, 92, 86);
        box-shadow: 0 0 10px black, 0 0 20px crimson;
    }

    .information{
        width: 1000px;
        height: 1000px;
        position: absolute;
        top: 50%;
        left: -10%;
        transform:translateY(-50%) ;
    }

    #circle{
        width: 1000px;
        height: 1000px;
        position: absolute ;
        top: 0;
        left: 0;
        border-radius: 50% ;
        transform: rotate(0deg) ;
        transition: 1s;
    }
    .feature img{
        width: 70px;
    }
    .feature{
        position: absolute;
        display: flex;
        color: #fff;
    }
    .feature div{
        margin-left: 20px;
    }
    .feature div p{
        margin-top: 8px;
    }

    .one{
        top: 475px;
        right: 80px;
    }
    .two{
        top: 150px;
        left: 370px;
        transform: rotate(-90deg);
    }
    .three{
        bottom: 470px;
        left: 70px;
        transform: rotate(-180deg);
    }
    .four{
        bottom: 180px;
        right: 400px;
        transform: rotate(-270deg);
    }
    .mobile{
        width: 500px;
        position: absolute;
        top: 50%;
        left: 15%;
        transform: translateY(-50%);
        z-index: 1;
    }
    .controls{
        position: absolute;
        right: 10%;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }
    .controls h3{
        margin: 15px 0;
        color: #fff;
    }
    .choose{
        position: absolute;
        right: 20%;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }
    .choose h3{
        margin: 15px 0;
        color: #fff;
    }


    #upBtn{
        width: 15px;
        cursor: pointer;
    }
    #downBtn{
        width: 15px;
        cursor: pointer;
        transform: rotate(180deg);
    }
    .overlay{
        width: 0;
        height: 0;
        border-top: 500px solid #fff;
        border-right: 500px solid transparent;
        border-bottom: 500px solid #fff;
        border-left: 500px solid #fff;
        position: absolute;
        left: 0;
        top: 0;
    }

    body {
        background-color: white;
    }

    .logout {
        position: absolute;
        top: 95%;
        left: 15%;
        transform: translate(-50%, -50%);
        padding: 0;
        margin: 0;
        display: flex;
    }


    .social-menu ul {
        position: absolute;
        top: 95%;
        left: 35%;
        transform: translate(-50%, -50%);
        padding: 0;
        margin: 0;
        display: flex;
    }
    .social-menu ul li {
        list-style: none;
        margin: 0 10px;
    }
    .social-menu ul li .fa {
        color: #000000;
        font-size: 25px;
        line-height: 50px;
        transition: .5s;
    }
    .social-menu ul li .fa:hover {
        color: white;
    }
    .social-menu ul li a {
        position: relative;
        display: block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: crimson;
        text-align: center;
        transition: 0.5s;
        transform: translate(0,0px);
        box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
    }
    .social-menu ul li a:hover {
        transform: rotate(0deg) skew(0deg) translate(0, -10px);
    }
    .social-menu ul li:nth-child(1) a:hover {
        background-color: #3b5999;
    }
    .social-menu ul li:nth-child(2) a:hover {
        background-color: hsla(206, 82%, 63%, 0.178);
    }
    .social-menu ul li:nth-child(3) a:hover {
        background-color: hsla(216, 75%, 57%, 0.089);
    }
</style>

<body>
<div class="main">
    <nav>
        <div class="logo">
            <img src="https://lh3.googleusercontent.com/proxy/EF1BqbagACe5iWowabZkUc3vca0LZ6XH69wTn8VJRP0Lcaj05_qFug8h55K9AY4gdcGvFUyfZHRgMVtf4ytdYMqkNsm5G_7oqmS8o8YksCCq_CyRundM5h8l17cm4axT9AucyJMebgynMXY6">
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Card</a></li>
            </ul>
        </div>
    </nav>

    <div class="information">
        <div class="overlay"></div>
        <img src="https://i.ebayimg.com/images/g/28cAAOSwDrVbE8Pc/s-l640.jpg" class="mobile" alt=".Y700.png">
        <div id="circle">
            <div class="feature one">
                <img src="">
                <div>
                    <h1>Camera</h1>
                    <p>2MP,1080P camera</p>
                </div>
            </div>
            <div class="feature two">
                <img src="../../../public/img/processor.png" alt="">
                <div>
                    <h1>Processor</h1>
                    <p>Intel I7-6700HQ,
                        Quad-Core
                    </p>
                </div>
            </div>
            <div class="feature three">
                <img src="../../../public/img/display.png" alt="">
                <div>
                    <h1>Display</h1>
                    <p>15.6" FHD </p>
                </div>
            </div>
            <div class="feature four">
                <img src="../../../public/img/battery.png" alt="">
                <div>
                    <h1>Battery</h1>
                    <p>4hour battery life</p>
                </div>
            </div>
        </div>
    </div>
    <div class="controls">
        <img src="https://w7.pngwing.com/pngs/711/104/png-transparent-computer-icons-arrow-down-arrow-up-right-left-up-up-arrow-angle-triangle-black.png" id="upBtn">
        <h3>Features</h3>
        <img src="https://w7.pngwing.com/pngs/711/104/png-transparent-computer-icons-arrow-down-arrow-up-right-left-up-up-arrow-angle-triangle-black.png" id="downBtn">

    </div>

    <div class="choose">
        <img src="https://w7.pngwing.com/pngs/711/104/png-transparent-computer-icons-arrow-down-arrow-up-right-left-up-up-arrow-angle-triangle-black.png" id="upBtn">
        <h3>Laptops</h3>
        <img src="https://w7.pngwing.com/pngs/711/104/png-transparent-computer-icons-arrow-down-arrow-up-right-left-up-up-arrow-angle-triangle-black.png" id="downBtn">

    </div>
</div>


<div class="social-menu">
    <ul>
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
    </ul>
</div>
<div class="logout">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <form method="post" action="{{route('logout')}}">
                @csrf
                <button type="submit" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z"/>
                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                    </svg>
                </button>
            </form>
        </li>
    </ul>
</div>

<script>
    var circle = document.getElementById("circle");
    var upBtn = document.getElementById("upBtn");
    var downBtn = document.getElementById("downBtn");

    var rotateValue = circle.style.transform;
    var rotateSum;

    upBtn.onclick = function () {
        rotateSum = rotateValue + "rotate(-90deg)";
        circle.style.transform = rotateSum;
        rotateValue = rotateSum;

    }
    downBtn.onclick = function () {
        rotateSum = rotateValue + "rotate(90deg)";
        circle.style.transform = rotateSum;
        rotateValue = rotateSum;
    }
</script>
</body>
</html>
