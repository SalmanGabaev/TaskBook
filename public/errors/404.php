<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Страница не найдена</title>
</head>

<style>
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        padding: 0;
        margin: 0;
    }

    #notfound {
        position: relative;
        height: 100vh;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 767px;
        width: 100%;
        line-height: 1.4;
        padding: 0px 15px;
    }

    .notfound .notfound-404 {
        position: relative;
        height: 150px;
        line-height: 150px;
        margin-bottom: 25px;
    }

    .notfound .notfound-404 h1 {
        font-family: 'Titillium Web', sans-serif;
        font-size: 186px;
        font-weight: 900;
        margin: 0px;
        text-transform: uppercase;
        -webkit-text-fill-color: red;
        background-size: cover;
        background-position: center;
    }

    .notfound h2 {
        font-family: 'Titillium Web', sans-serif;
        font-size: 26px;
        font-weight: 700;
        margin: 0;
    }

    .notfound p {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 0px;
        text-transform: uppercase;
    }

    .notfound a {
        font-family: 'Titillium Web', sans-serif;
        display: inline-block;
        text-transform: uppercase;
        color: #fff;
        text-decoration: none;
        border: none;
        background: #5c91fe;
        padding: 10px 40px;
        font-size: 14px;
        font-weight: 700;
        border-radius: 1px;
        margin-top: 15px;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .notfound a:hover {
        opacity: 0.8;
    }

    @media only screen and (max-width: 767px) {
        .notfound .notfound-404 {
            height: 110px;
            line-height: 110px;
        }
        .notfound .notfound-404 h1 {
            font-size: 120px;
        }
    }

</style>

<body>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>404</h1>
        </div>
        <h2>К сожалению! Эта страница не может быть найдена</h2>
        <p>ИЗВИНИТЕ, НО СТРАНИЦА, КОТОРУЮ ВЫ ИЩЕТЕ, НЕ СУЩЕСТВУЕТ, БЫЛА УДАЛЕНА. ИМЯ ИЗМЕНЕНО ИЛИ ВРЕМЕННО НЕДОСТУПНО</p>
        <a href="<? PATH ?>">Вернуться на главную</a>
    </div>
</div>
</body>
</html>
