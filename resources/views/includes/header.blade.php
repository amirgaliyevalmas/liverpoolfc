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
                    @foreach($menu as $menus)
                        <li class="menu is-active"><a href="{{$menus->url}}">{{mb_strtoupper($menus->title)}}</a></li>
                    @endforeach
                    <li class="nav-login"><a href="#"><svg width="26" height="26" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="7 2 17 2 17 17 7 17 7 16 16 16 16 3 7 3"></polygon><polygon points="9.1 13.4 8.5 12.8 11.28 10 4 10 4 9 11.28 9 8.5 6.2 9.1 5.62 13 9.5"></polygon></svg>
                        </a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
