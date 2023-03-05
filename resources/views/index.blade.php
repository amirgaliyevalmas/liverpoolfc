@extends('layouts.index')

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
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
                            Уважаемые посетители! В данный момент сайт находится на реконструкции. Приносим свои
                            извинения за временные неудобства.
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
        @include('includes.sidebar')
    </section>

@endsection
