<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>

        </style>
        <!-- Styles -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>

        </style>




    </head>

    <body>
    <header>
        <div class="wrapper">
                <div class="header-line-white-first" id="header-line-white-first">
                        <div class="logo">
                            <a href="#"><img src="{{asset('img/logo_liverpool.png')}}" alt="logo" id="logo"></a>
                        </div>
                    <div class="head_text" id="head_text"><h1>Сайт болельщиков «Ливерпуля»</h1></div>

                    <div class="first_navbar" id="first_navbar">
                        <ul class="first_navbar_list">
                            <li class="first_navbar_items user"><a href="#"><svg class="svg-icon" style="width: 26; height: 26;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M843.282963 870.115556c-8.438519-140.515556-104.296296-257.422222-233.908148-297.14963C687.881481 536.272593 742.4 456.533333 742.4 364.088889c0-127.241481-103.158519-230.4-230.4-230.4S281.6 236.847407 281.6 364.088889c0 92.444444 54.518519 172.183704 133.12 208.877037-129.611852 39.727407-225.46963 156.634074-233.908148 297.14963-0.663704 10.903704 7.964444 20.195556 18.962963 20.195556l0 0c9.955556 0 18.299259-7.774815 18.962963-17.73037C227.745185 718.506667 355.65037 596.385185 512 596.385185s284.254815 122.121481 293.357037 276.195556c0.568889 9.955556 8.912593 17.73037 18.962963 17.73037C835.318519 890.311111 843.946667 881.019259 843.282963 870.115556zM319.525926 364.088889c0-106.287407 86.186667-192.474074 192.474074-192.474074s192.474074 86.186667 192.474074 192.474074c0 106.287407-86.186667 192.474074-192.474074 192.474074S319.525926 470.376296 319.525926 364.088889z"  /></svg></a></li>
                            <li class="first_navbar_items login"><a href="#"><svg width="26" height="26" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="7 2 17 2 17 17 7 17 7 16 16 16 16 3 7 3"></polygon><polygon points="9.1 13.4 8.5 12.8 11.28 10 4 10 4 9 11.28 9 8.5 6.2 9.1 5.62 13 9.5"></polygon></svg>
                        </ul>
                    </div>
                </div>
            <div class="second-line" id="second_line"></div>
            <div class="navbar" id="navbar">
                <nav>
                        <div class="nav-menu">
                        <div class="burger__menu">
                                <span></span>
                            </div>
                        </div>
                        <div class="nav-logo"><a href="#">LFC</a></div>
                            <ul class="nav-wrapper">
                                <li class="menu is-active"><a href="#">ГЛАВНАЯ</a></li>
                                <li class="menu"><a href="#">НОВОСТИ</a></li>
                                <li class="menu"><a href="#">КОМАНДА</a></li>
                                <li class="menu"><a href="#">СЕЗОН</a></li>
                                <li class="menu"><a href="#">ИСТОРИЯ</a></li>
                                <li class="menu"><a href="#">ТРАНЦЛЯСИИ</a></li>
                                <li class="menu"><a href="#">МАРКЕТ</a></li>
                                <li class="menu"><a href="#">ФОРУМ</a></li>
                                <li class="nav-login"><a href="#"><svg width="26" height="26" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="7 2 17 2 17 17 7 17 7 16 16 16 16 3 7 3"></polygon><polygon points="9.1 13.4 8.5 12.8 11.28 10 4 10 4 9 11.28 9 8.5 6.2 9.1 5.62 13 9.5"></polygon></svg>
                                    </a></li>
                            </ul>
                    </nav>
                </div>
        </div>
    </header>


<section class="main-wrapper">
    <content class="wrapper__for_content">
            <div class="left">
                <div class="kafe">
                    <a href="#">
                        <div class="wrapper-virt-kafe">
                            <div class="label-for-img">
                                <img src="{{asset('img/virtual-kafe.jpeg')}}" alt="virtual-sport-bar">
                            </div>
                            <div class="kafe-text"></div>
                            <span class="kafe-text-span">Виртуальное спорткафе болельщиков «Ливерпуля»</span>
                        </div>
                    </a>
                </div>

                <div class="matchcenter">
                    <div class="info_table">
                        Информацинная доска!
                        <div class="info">
                            Уважаемые посетители! В данный момент сайт находится на реконструкции. Приносим свои извинения за временные неудобства.
                        </div>
                    </div>
                </div>
            </div>

        <div class="wrapper-content">
                <div class="news-wrapper">
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/1.png')}}" alt="" id="news-preview">
                            </div>
                            <div class="news-text">
                                <span class="news-date">12 января 2023 г.</span></br>
                                <p>Куметио досрочно вернулся в Ливерпуль</p>
                            </div>
                        </a>
                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/2.jpeg')}}" alt="" id="news-preview">
                            </div>
                            <div class="news-text">
                                <span class="news-date">12 января 2023 г.</span></br>
                                <span>Клопп: "Попасть в топ-4 будет безумно сложно"</span>
                            </div>
                        </a>

                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/3.jpeg')}}" alt="" id="news-preview">
                            </div>
                        <div class="news-text">
                            <span class="news-date">12 января 2023 г.</span></br>
                            <span>Фабиньо: "Коди почувствует себя здесь как дома"</span>
                        </div>
                        </a>
                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/4.png')}}" alt="" id="news-preview">
                            </div>
                        <div class="news-text">
                            <span class="news-date">12 января 2023 г.</span></br>
                            <span>Клопп: "Попасть в топ-4 будет безумно сложно"</span>
                        </div>
                        </a>
                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/2.jpeg')}}" alt="" id="news-preview">
                            </div>
                        <div class="news-text">
                            <span class="news-date">12 января 2023 г.</span></br>
                            <span>Клопп: "Попасть в топ-4 будет безумно сложно"</span>
                        </div>
                        </a>
                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/4.png')}}" alt="" id="news-preview">
                            </div>
                        <div class="news-text">
                            <span class="news-date">12 января 2023 г.</span></br>
                            <span>Клопп: "Попасть в топ-4 будет безумно сложно"</span>
                        </div>
                        </a>
                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/3.jpeg')}}" alt="" id="news-preview">
                            </div>
                            <div class="news-text">
                                <span class="news-date">12 января 2023 г.</span></br>
                                <span>Клопп: "Попасть в топ-4 будет безумно сложно"</span>
                            </div>
                        </a>
                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/4.png')}}" alt="" id="news-preview">
                            </div>
                            <div class="news-text">
                                <span class="news-date">12 января 2023 г.</span></br>
                                <span>Клопп: "Попасть в топ-4 будет безумно сложно"</span>
                            </div>
                        </a>
                    </div>
                    <div class="news" id="news">
                        <a href="#">
                            <div class="news-preview">
                                <img src="{{asset('img/4.png')}}" alt="" id="news-preview">
                            </div>
                            <div class="news-text">
                                <span class="news-date">12 января 2023 г.</span></br>
                                <span>Клопп: "Попасть в топ-4 будет безумно сложно"</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </content>

    <sidebar class="wrapper__for__sidebar">
        <div class="last__match">
            <div class="last__match__description">
                <div class="last__match__text">
                    Предыдущий матч:
                </div>
                <div class="last__match__under__line">

                </div>
            </div>
            <div class="last__match__logo">
                <div class="home">
                    <div class="home__logo">
                        <img src="{{asset('img/logo_liverpool.png')}}" alt="">
                    </div>
                    <div class="home__text">ЛИВЕРПУЛЬ</div>
                </div>
                <div class="last__match__result">3 - 2</div>
                <div class="away">
                    <div class="away__logo">  <img src="{{asset('img/logo_lester.png')}}" alt=""></div>
                    <div class="away__text">ЛЕСТЕР СИТИ</div>
                </div>
            </div>
            <div class="last__match__under__line">

            </div>
            <div class="last__match_stadium">
                <div class="last__match__date">Премьер лига / 12.01.2023 </div>
            </div>
        </div>

        <div class="last__match">
            <div class="last__match__description">
                <div class="last__match__text">
                    Следующии матч:
                </div>
                <div class="last__match__under__line">

                </div>
            </div>
            <div class="last__match__logo">
                <div class="home">
                    <div class="home__logo">
                        <img src="{{asset('img/logo_liverpool.png')}}" alt="">
                    </div>
                    <div class="home__text">ЛИВЕРПУЛЬ</div>
                </div>
                <div class="last__match__result">VS</div>
                <div class="away">
                    <div class="away__logo">  <img src="{{asset('img/logo_lester.png')}}" alt=""></div>
                    <div class="away__text">ЛЕСТЕР СИТИ</div>
                </div>
            </div>
            <div class="last__match__under__line">

            </div>
            <div class="last__match_stadium">
                <div class="last__match__date">Премьер лига / 12.01.2023 / 20:00 / Энфилд Роуд</div>
            </div>
        </div>

        <div class="category">
            <div class="category__text">Категории:</div>
            <div class="category__under__line"></div>
            <div class="category__label">
                <ul class="category__list">
                    <li class="category__name"><a href="#">Новости</a></li>
                    <li class="category__name"><a href="#">Анонсы матчей</a></li>
                    <li class="category__name"><a href="#">Матчи за сборные</a></li>
                    <li class="category__name"><a href="#">Видео обзоры</a></li>
                    <li class="category__name"><a href="#">Интервью</a></li>
                    <li class="category__name"><a href="#">Новости</a></li>
                    <li class="category__name"><a href="#">Анонсы матчей</a></li>
                    <li class="category__name"><a href="#">Матчи за сборные</a></li>
                    <li class="category__name"><a href="#">Видео обзоры</a></li>
                    <li class="category__name"><a href="#">Интервью</a></li>
                    <li class="category__name"><a href="#">Новости</a></li>
                    <li class="category__name"><a href="#">Анонсы матчей</a></li>
                    <li class="category__name"><a href="#">Матчи за сборные</a></li>
                    <li class="category__name"><a href="#">Видео обзоры</a></li>
                    <li class="category__name"><a href="#">Интервью</a></li>
                </ul>
            </div>

        </div>


    </sidebar>

</section>
<footer class="footer">

</footer>
    </body>
</html>