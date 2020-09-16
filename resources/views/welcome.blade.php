<head>
    <meta charset="UTF-8"/>
    <title></title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body >
<div class="cat_layer mhidden" id="cat_tree">
    <div class="cat_body">
        <a class="cat_back" href="#">Каталог</a>
        <a class="cat_sub" href="#" cid="1">Художественная литература</a>
        <a class="cat_sub" href="#" cid="110">Учебная литература</a>
        <a class="cat_sub" href="#" cid="15">Нехудожественная литература</a>
        <a class="cat_sub" href="#" cid="54">Бизнес пособия</a>
        <a class="cat_sub" href="#" cid="36">Детям и родителям</a>
        <a class="cat_sub" href="#" cid="239">Канцтовары</a>
        <a class="cat_sub" href="#" cid="236">Игры</a>
        <a href="https://amital.ru/Raznoye-c130.html">Разное</a>
        <a href="https://amital.ru/Tovary-pyervoy-nyeobhodimosti-c330.html">Товары первой необходимости</a>
        <a class="cat_sub" href="#" cid="331">Товары для хобби</a>
        <a href="https://amital.ru/Idyei-dlya-podarkov-c500.html">Идеи для подарков</a>
    </div>
</div>
<div class="subcats"></div>
<div class="body-wrap">
    <div class="full top-region">
        <div class="wrapper">
            <a href="https://amital.ru" class="logo-svg">
                <img src="image/data/logo.svg" class="logo-svg">
            </a>
            <div class="town">
                <a href="#cities_list" rel="modal:open" id="cityChange"><span id="ymaps_city">Выбрать город</span></a>
            </div>
            <a class="order-top" href="/index.php?route=information/information&information_id=39">Отслеживание</a>
            <a class="paragraph-top" href="/index.php?route=information/information&information_id=30">Пункт выдачи</a>
            <a href="tel:74732230002" class="top-phone"> <i class='ion-ios-telephone-outline'></i> +7 (473) 223-00-02
            </a>
            <a href="mailto:shop@amital.ru" class="top-mail"> <i class='ion-ios-email-outline'></i> shop@amital.ru </a>
        </div>
    </div>
    <div class="full header-region">
        <div class="wrapper">
            <a href="https://amital.ru">
                <img src="image/data/logo.svg" class="logo-svg">
            </a>
            <div class="mheader mvisible">
                <div class="menu">
                    <div class="menu_item">
                        <a class="menu_link" href="#cat_tree">
                            <div class="menu_img"><img src="catalog/view/theme/ami6/img/menu_cats.svg"></div>
                            <div class="menu_name">Каталог</div>
                        </a>
                    </div>
                    <div class="menu_item">
                        <a class="menu_link" href="/product/list/learn">
                            <div class="menu_img"><img src="catalog/view/theme/ami6/img/menu_school.svg"></div>
                            <div class="menu_name">Учебники</div>
                        </a>
                    </div>
                    <div class="menu_item">
                        <a class="menu_link" href="/index.php?route=information/information&information_id=28">
                            <div class="menu_img"><img src="catalog/view/theme/ami6/img/menu_address.svg"></div>
                            <div class="menu_name">Адреса</div>
                        </a>
                    </div>
                    <div class="menu_item">
                        <a class="menu_link" href="/index.php?route=account/login">
                            <div class="menu_img"><img src="catalog/view/theme/ami6/img/menu_account.svg"></div>
                            <div class="menu_name">Вход</div>
                        </a>
                    </div>
                    <div class="menu_item hcart">
                        <a class="menu_link" id="top_cart_open">
                            <div class="menu_img">
                                <i class="ion-android-cart"></i>
                                <span class="total_cart">0</span>
                            </div>
                            <div class="menu_name">Корзина</div>
                        </a>
                    </div>
                </div>
            </div>
            <form method="get" id="searchform" action="/index.php">
                <div class="">
                    <input class="form-control" id="searchinput"
                           autocomplete="off"
                           placeholder="Введите название, ISBN, автора или код товара" type="text" name="search"
                           value=""/>
                    <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="search-submit" id="search-submit">
                  <span>Поиск</span>
                </button>
                <input type="hidden" name="wildcard" value="true"/>
                <input type="hidden" name="route" value="product/search"/>
                </div>
            </form>
            <div class="login-block">
                <a href="/index.php?route=account/login">Вход</a>
                /
                <a class="reg" href="/index.php?route=account/login&registration=true">Регистрация</a>
            </div>
            <div class="cart-block"></div>
        </div>
    </div>
    <div class="full menu-region">
        <div class="wrapper">
            <ul>
                <li class="expand">
                    <a href="#">Каталог</a>
                    <ul>
                        <li>
                            <a href="/Hudozhyestvyennaya-lityeratura-c1.html">Художественная литература</a>
                        </li>
                        <li>
                            <a href="/Uchyebnaya-lityeratura-c110.html">Учебная литература</a>
                        </li>
                        <li>
                            <a href="/Kantstovary-c239.html">Канцтовары</a>
                        </li>
                        <li>
                            <a href="/Tovary-dlya-hobbi-c331.html">Товары для хобби</a>
                        </li>
                        <li>
                            <a href="/Nyehudozhyestvyennaya-lityeratura-c15.html">Нехудожественная литература </a>
                        </li>
                        <li>
                            <a href="/Biznyes-posobiya-c54.html">Бизнес пособия </a>
                        </li>
                        <li>
                            <a href="/Dyetyam-i-rodityelyam-c36.html">Детям и родителям </a>
                        </li>
                        <li>
                            <a href="/Igry-c236.html">Игры </a>
                        </li>
                        <li>
                            <a href="/Nyeprodovol-stvyennyye-tovary-c330.html">Непродовольственные товары </a>
                        </li>
                        <li>
                            <a href="/Raznoye-c130.html">Разное</a>
                        </li>
                    </ul>
                </li>
                <li class="expand">
                    <a href="#">Школам</a>
                    <ul>
                        <li>
                            <a href="/product/list/learn">Подбор учебников</a>
                        </li>
                        <li>
                            <a href="index.php?route=information/information&information_id=19">Информация для учителей</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/index.php?route=information/information&information_id=8">Доставка</a>
                </li>
                <li class="expand">
                    <a href="#">Скидки</a>
                    <ul>
                        <li>
                            <a href="index.php?route=product/list/discount">Товары со скидкой</a>
                        </li>
                        <li>
                            <a href="index.php?route=information/information&information_id=25">Система скидок интернет-магазина</a>
                        </li>
                        <li>
                            <a href="Unic-pred-i52.html">Программа лояльности розничной сети</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?route=information/information&information_id=28">Адреса магазинов</a>
                </li>
                <li class="dvisible dfest">
                    <a href="https://amital.ru/Festival-i115.html">Фестиваль детской книги 2019/2020</a>
                </li>
                <li class="dvisible">
                    <a href="https://opt.amital.ru">Корпоративным клиентам</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="full footer-region">
        <div class="wrapper">
            <div class="row amital">
                <h3 class="mhidden">Магазин Амиталь</h3>
                <ul class="about">
                    <li>
                        <a href="/O-kompanii-i11.html">О компании</a>
                    </li>
                    <li>
                        <a href="/Unic-pred-i52.html" target="_blank">Уникальные предложения</a>
                    </li>
                </ul>
                <h3 class="mhidden">Доставка и оплата</h3>
                <ul class="delivery">
                    <li>
                        <a href="/index.php?route=information/information&information_id=8">Методы доставки и оплаты</a>
                    </li>
                    <li>
                        <a href="/Publichnaya-ofyerta-i46.html">Публичная оферта</a>
                    </li>
                    <li>
                        <a href="/Punkty-vydachi-tovarov-i30.html">Пункты выдачи товаров</a>
                    </li>
                </ul>
                <h3 class="fcatalog mhidden">Развитие</h3>
                <ul class="fcatalog mhidden">
                    <li>
                        <a href="/Vakansii-i12.html">Вакансии</a>
                    </li>
                    <li>
                        <a href="/Price-list-i51.html" target="_blank">Прайс-лист</a>
                    </li>
                    <li>
                        <a href="/Korporativnym-kliyentam-i27.html">Корпоративным клиентам</a>
                    </li>
                </ul>
            </div>
            <div class="row fcatalog mhidden">
                <h3>Каталог</h3>
                <ul>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Klassichyeskaya-lityeratura-c1c95.html">Классическая литература</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Sovryemyennaya-lityeratura-c1c96.html">Современная литература</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Poeziya-dramaturgiya-c1c98.html">Поэзия, драматургия</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Istorichyeskaya-proza-c1c99.html">Историческая проза</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Hudozhyestvyennaya-publitsistika-c1c100.html">Художественная публицистика</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Fantastika-Mistika-c1c102.html">Фантастика. Мистика</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Syentimyental-nyy-roman-c1c104.html">Сентиментальный роман</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Knigi-po-komp-yutyernym-igram-c1c103.html">Книги по компьютерным играм</a>
                    </li>
                    <li>
                        <a href="/Hudozhyestvyennaya-lityeratura/Komiksy-c1c106.html">Комиксы</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Dom-Byt-Dosug-c15c119.html">Дом. Быт. Досуг</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Nauka-i-tyehnika-c15c117.html">Наука и техника</a>
                    </li>
                </ul>
            </div>
            <div class="row fcatalog mhidden">
                <h3>&nbsp;</h3>
                <ul>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Myeditsina-Zdorov-ye-Krasota-Mat-i-ditya-c15c112.html">Медицина. Здоровье. Красота. </a>
                    </li>
                    <li>
                        <a href="/Uchyebnaya-lityeratura/Obshchaya-pyedagogika-c110c172.html">Общая педагогика</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Komp-yutyernaya-lityeratura-c15c122.html">Компьютерная литература</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Psihologiya-c15c111.html">Психология</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Publitsistika-c15c113.html">Публицистика</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/YAzykoznaniye-c15c115.html">Языкознание</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Ryeligiya-Astrologiya-Magiya-c15c121.html">Религия. Астрология. Магия</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Muzyka-DMSH-Avtorskaya-pyesnya-c15c123.html">Музыка. ДМШ. Авторская песня</a>
                    </li>
                    <li>
                        <a href="/Nyehudozhyestvyennaya-lityeratura/Entsiklopyedii-c15c114.html">Энциклопедии</a>
                    </li>
                    <li>
                        <a href="/Biznyes-posobiya/Pravo-YUrisprudyentsiya-c54c124.html"> Право. Юриспруденция</a>
                    </li>
                    <li>
                        <a href="/Biznyes-posobiya/Spravochnaya-lityeratura-c54c125.html">Справочная литература</a>
                    </li>
                </ul>
            </div>
            <div class="row vfoit">
                <h3 class="mhidden">Социальные сети</h3>
                <ul class="social">
                    <li>
                        <a href="https://vk.com/amital_official" target="_blank">
                            <i class="fab fa-vk"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/amital.ru" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.ok.ru/amital" target="_blank">
                            <i class="fab fa-odnoklassniki"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/amital_company/" target="_blank">
                            <i class="ion-social-instagram-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/amitalvrn" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <h3 class="mhidden">События</h3>
                <ul class="mhidden">
                    <li>
                        <a href="https://amital.ru/Festival-i115.html" target="_blank">Фестиваль детской книги 2019/2020</a>
                    </li>
                </ul>
            </div>
            <div class="row copyright">
                <ul>
                    <li class="small">
                        &copy; 1991 - 2020, книготорговая компания Амиталь. Все права защищены, любое копирование информации возможно только с письменного разрешения владельца.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal" id="cities_list" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Выберите город:</h3>
                </div>
                <div class="modal-body">
                    <div class="short_list">
                        <ul>
                            <li class="city" data-city='Воронеж' data-city-id='139774'>
                                Воронеж            </li>
                            <li class="city" data-city='Липецк' data-city-id='127492'>
                                Липецк            </li>
                            <li class="city" data-city='Белгород' data-city-id='18436'>
                                Белгород            </li>
                            <li class="city" data-city='Богучар' data-city-id='88308'>
                                Богучар            </li>
                            <li class="city" data-city='Калач' data-city-id='30403'>
                                Калач            </li>
                            <li class="city" data-city='Лиски' data-city-id='47307'>
                                Лиски            </li>
                            <li class="city" data-city='Нововоронеж' data-city-id='90543'>
                                Нововоронеж            </li>
                            <li class="city" data-city='Поворино' data-city-id='126486'>
                                Поворино            </li>
                            <li class="city" data-city='Россошь' data-city-id='93644'>
                                Россошь            </li>
                            <li class="city" data-city='Старый Оскол' data-city-id='129617'>
                                Старый Оскол            </li>
                            <li class="city" data-city='Губкин' data-city-id='20065'>
                                Губкин            </li>
                            <li class="city" data-city='Курск' data-city-id='10575'>
                                Курск            </li>
                        </ul>
                    </div>
                    <div class="input-group">
                        <input id="city_search" placeholder="Введите город..." type="text" name="city_search" value="" hidefocus="true" autocomplete="off">
                        <button class="btn btn-default" id="search-city">Найти</button> </span>
                    </div>
                    <div class="cities_list"></div>
                </div>
            </div>
        </div>
    </div>





{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--  <head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width,initial-scale=1.0">--}}
{{--    <link rel="icon" href="<%= BASE_URL %>favicon.ico">--}}
{{--    <title><%= htmlWebpackPlugin.options.title %></title>--}}
{{--  </head>--}}
{{--  <body>--}}
{{--    <div id="app"></div>--}}
{{--  </body>--}}
{{--  <script src="{{ mix("js/app.js") }}"></script>--}}
{{--</html>--}}

