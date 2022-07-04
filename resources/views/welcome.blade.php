<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bootstrap
                </div>

                <div class="links">
                    <a href="http://bootstrap/2">Уроки Bootstrap верстки / #2 - Верстка при помощи сеток (Grid-system)</a>
                    <br>
                    <a href="http://bootstrap/3">Уроки Bootstrap верстки / #3 - Система сеток и адаптивное меню</a>
                    <br>
                    <a href="http://bootstrap/4">Уроки Bootstrap верстки / #4 - Стили для текста</a>
                    <br>
                    <a href="http://bootstrap/5">Уроки Bootstrap верстки / #5 - Работа с таблицами</a>
                    <br>
                    <a href="http://bootstrap/6">Уроки Bootstrap верстки / #6 - Кнопки и группы кнопок</a>
                    <br>
                    <a href="http://bootstrap/7">Уроки Bootstrap верстки / #7 - Создание форм</a>
                    <br>
                    <a href="http://bootstrap/8">Уроки Bootstrap верстки / #8 - Иконочный шрифт и изображения</a>
                    <br>
                    <a href="http://bootstrap/9">Уроки Bootstrap верстки / #9 - Текстовые панели</a>
                    <br>
                    <a href="http://bootstrap/10">Уроки Bootstrap верстки / #10 - Выпадающее меню и списки</a>
                    <br>
                    <a href="http://bootstrap/11">Уроки Bootstrap верстки / #11 - JS Collapse</a>
                    <br>
                    <a href="http://bootstrap/12">Уроки Bootstrap верстки / #12 - modal.js (модальные окна)</a>
                    <br>
                    <a href="http://bootstrap/13">Уроки Bootstrap верстки / #13 - Создание вкладок, табов (tabs.js)</a>
                    <br>
                    <a href="http://bootstrap/14">Уроки Bootstrap верстки / #14 - tooltip.js (всплывающие подсказки)</a>
                    <br>
                    <a href="http://bootstrap/15">Уроки Bootstrap верстки / #15 - Создание сайта на Bootstrap</a>
                    <br>
                    <a href="http://bootstrap/Test">Тест</a>
                </div>
            </div>
        </div>
    </body>
</html>
