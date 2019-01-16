    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Theme</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
              integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <script src="/js/app.js" type="text/javascript"></script>

</head>
<body class="theme-body-padding">
<div id="header" class="d-flex flex-column flex-md-row align-items-center">
    <div>
        <a href="#" class="left-nav-icon">
            <img src="/image/header/theme_icon_1.png" width="40%" height="40%"/>
        </a>
    </div>

    <div class="nav-line">
        <img src="/image/header/theme_line.png">
    </div>

    <div class="header-right-actions clearfix">
        <div class="language-switcher">
            <a class="language-switcher-item language-active" href="#">EN</a>
            <span class="language-switcher-separator">|</span>
            <a class="language-switcher-item" href="#">VN</a>
        </div>
        <div class="auth-button">
            <a href="#">
                <img src="/image/header/theme_sign_in_button.png" width="150">
            </a>
            <a href="#" class="sign-up-btn">
                <img src="/image/header/theme_sign_up_button.png" width="150">
            </a>
        </div>
    </div>
</div>
<div class="theme-body-middle clearfix">
    <div class="middle-left">
        <div class="text-body">
            <h3 class="top">FOR</h3>
            <h3 class="bot"><b>ADVERTISER</b></h3>
            <p>BETTER INFLUECER MAKETING PLATFROM<br>YEAH1 NETWORK PROVIDES THE LEADING INFLUENCER<br>MAKETING PLATFROM
                TO HELP ADVERTISERS GROW<br>BUSINESSES BY POTENTIAL INFLUENCERS WITH SMART<br>TRUE VIEW ARTIFICIAL
                INTELLIGENT</p>
            <a href="#" class="join-button">
                <img src="/image/header/theme_19.png" width="225" height="62">
            </a>
        </div>
    </div>
    <div class="middle-right">
        <img src="/image/header/theme_16.png">
    </div>
</div>
<div class="theme-body-bottom clearfix">
    <div class="bottom-left">
        <a href="#">
            <img src="/image/header/theme_24.png" width="70" height="70">
        </a>
    </div>
    <div class="bottom-right">
        <p class="font-top"><b>PLEASE COMPLETE
                <br>THE FROM BELOW</b></p>
        <p class="font-bot">We will actively contact you when you submit the <br>form below & we will not let you have
            to wait long.</p>
        <form class="contact-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="the name of  the representative">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Company name">
            </div>
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option selected>Scale members</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone">
            </div>
            <div class="bottom-button">
                <a href="#">
                    <img src="/image/header/theme_22.png">
                </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
