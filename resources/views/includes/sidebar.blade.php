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
                <div class="away__logo"><img src="{{asset('img/logo_lester.png')}}" alt=""></div>
                <div class="away__text">ЛЕСТЕР СИТИ</div>
            </div>
        </div>
        <div class="last__match__under__line">

        </div>
        <div class="last__match_stadium">
            <div class="last__match__date">Премьер лига / 12.01.2023</div>
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
                <div class="away__logo"><img src="{{asset('img/logo_lester.png')}}" alt=""></div>
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
            @foreach($category as $cat)
                <ul class="category_tree">
                    <li>
                        <div class="category_root" id="category_root"
                             style="display: flex; justify-content: space-between">

                            <div>  <a href="#"> {{$cat['category_name']}} </a></div>
                            <div>
                               <i class="fa fa-angle-down" id="category_icon" style="font-size: 24px"></i></div>

                        </div>

                        @isset($cat['children'])
                            <ul class="subcategory_tree" id="subs">
                                @each('includes._forms.form_front_category', $cat['children'], 'category')
                            </ul>
                        @endisset
                    </li>
                </ul>
            @endforeach
        </div>

    </div>
</sidebar>
