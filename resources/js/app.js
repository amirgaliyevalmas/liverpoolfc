import './bootstrap';

//Файлы обнуления
import '../css/reset.css';
//Основной
import '../css/header.css';
import '../css/app.css';
//Версия для планшетов
import '../css/planchet/planshet.css';
// Версия для мобильных
import '../css/mobile/mnavigation.css';
import '../css/mobile/mobile.css'

//Пожлючение jquery
import $ from 'jquery';
window.$ = $;
//__________________
$('.burger__menu').click(function () {
    $('.burger__menu, .nav-wrapper').toggleClass('active');
    $('body').toggleClass('lock');
});

window.addEventListener('scroll', ev => {
    let navbar = document.getElementById('navbar').classList;
    let active_class = 'navbar_scrolled';

    let logo = document.getElementById('logo').classList;
    let head_text = document.getElementById('head_text').classList;

    let red_line = document.getElementById('header-line-white-first').classList;
    let second_line = document.getElementById('second_line').classList;
    let first_navbar = document.getElementById('first_navbar');

    if (pageYOffset > 70){
        navbar.add(active_class);
        second_line.add('second_line_hide');
        first_navbar.style.display = 'none';
    } else{
        navbar.remove(active_class);
        second_line.remove('second_line_hide');
        first_navbar.style.display = 'grid';

    }

    if (pageYOffset > 150){
        logo.add('remove_logo');
        head_text.add('remove_logo');
    } else{
        logo.remove('remove_logo');
        head_text.remove('remove_logo');

    }



    if(pageYOffset > 300) {
        red_line.add('remove_logo');
    }else {
        red_line.remove('remove_logo');
    }
});

        let news = document.querySelectorAll('#news');
        for(let i=0; i<news.length; i++){
            let news_preview = document.querySelectorAll('#news-preview')[i].classList;
            let news_text = document.querySelectorAll('.news-text')[i].classList;
            let news_date = document.querySelectorAll('.news-date')[i].classList;


            let news_text_add = 'news_text_add';
            let scale_class = 'news_scale';
            let news_date_add = 'news_date_add';

            news[i].addEventListener('mouseover', ev => {
                    news_preview.add(scale_class);
                    news_text.add(news_text_add);
                    news_date.add(news_date_add);

            });
            news[i].addEventListener('mouseout', ev => {
                news_preview.remove(scale_class);
                news_text.remove(news_text_add);
                news_date.remove(news_date_add);
            });
        }


