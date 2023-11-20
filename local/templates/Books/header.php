<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html>

<head>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <?
    $APPLICATION->SetAdditionalCSS("./css/screen.css");
    $APPLICATION->SetAdditionalCSS("./font/font.css");
    $APPLICATION->SetAdditionalCSS("./css/jquery.fancybox.css");
    $APPLICATION->SetAdditionalCSS("./css/jquery.bxslider.css");
    $APPLICATION->SetAdditionalCSS("./css/jquery.formstyler.css");
    $APPLICATION->SetAdditionalCSS("./css/jquery.formstyler.theme.css");
    ?>

    <?
    $APPLICATION->AddHeadScript("./js/jquery-3.1.1.min.js");
    $APPLICATION->AddHeadScript("./js/jquery.fancybox.min.js");
    $APPLICATION->AddHeadScript("./js/jquery.bxslider.min.js");
    $APPLICATION->AddHeadScript("./js/jquery.formstyler.min.js");
    $APPLICATION->AddHeadScript("./js/main.js");
    ?>

<!--    <link href="./css/screen.css" rel="stylesheet" type="text/css" >-->
<!--    <link href="./font/font.css" rel="stylesheet" type="text/css" >-->
<!--    <link href="./css/jquery.fancybox.css" rel="stylesheet" type="text/css" >-->
<!--    <link href="./css/jquery.bxslider.css" rel="stylesheet" type="text/css" >-->
<!--    <link href="./css/jquery.formstyler.css" rel="stylesheet" type="text/css" >-->
<!--    <link href="./css/jquery.formstyler.theme.css" rel="stylesheet" type="text/css" >-->
<!---->
<!---->
<!--    <script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>-->
<!--    <script type="text/javascript" src="./js/jquery.fancybox.min.js"></script>-->
<!--    <script type="text/javascript" src="./js/jquery.bxslider.min.js"></script>-->
<!--    <script type="text/javascript" src="./js/jquery.formstyler.min.js"></script>-->
<!--    <script type="text/javascript" src="./js/main.js"></script>-->

</head>
<body>
<header>
    <div class="top_head_white_bl">
        <div class="standart_width">
            <div class="top_head_logo"><a href="/"><img src="./img/logo.png" alt=""/></a></div>
            <div class="top_head_tel_bl">
                <div class="top_head_tel">
                    <a href="tel:+79003002010">8 (900) 300-20-10</a>
                    <span>  с 8:00 до 20:00 (Мск)</span>
                </div>
            </div>
            <div class="top_head_favor_bl">
                <div class="top_head_favor">
                    <a href="">Избранное</a><span>10</span>
                </div>
            </div>
            <div class="top_head_bt"><a class="green_bt" data-fancybox data-src="#call_back" href="javascript:;">Обратный звонок</a></div>
        </div>
    </div>
    <div class="blue_head_info_bl">
        <div class="standart_width clear_after">
            <div class="header_menu_bl">
                <ul class="header_menu">
                    <li>
                        <a class="menu_lvl1_bt arrow active" href=""><span>Каталог</span></a>
                        <ul class="menu_lvl2">
                            <li>
                                <a class="menu_lvl2_bt arrow active" href="">Учебная литература</a>
                                <ul class="menu_lvl3">
                                    <li><a href="">Для школьников</a></li>
                                    <li><a class="active" href="">Дополнительное образование</a></li>
                                    <li><a href="">Книги для дошкольников</a></li>
                                    <li><a href="">Подготовка к ЕГЭ</a></li>
                                    <li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
                                    <li><a href="">Словари и разговорники</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="menu_lvl2_bt arrow" href="">Детская литература</a>
                                <ul class="menu_lvl3">
                                    <li><a href="">Для школьников</a></li>
                                    <li><a href="">Дополнительное образование</a></li>
                                    <li><a href="">Книги для дошкольников</a></li>
                                    <li><a href="">Подготовка к ЕГЭ</a></li>
                                    <li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
                                    <li><a href="">Словари и разговорники</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="menu_lvl2_bt arrow" href="">Художественная литература</a>
                                <ul class="menu_lvl3">
                                    <li><a href="">Для школьников</a></li>
                                    <li><a href="">Дополнительное образование</a></li>
                                    <li><a href="">Книги для дошкольников</a></li>
                                    <li><a href="">Подготовка к ЕГЭ</a></li>
                                    <li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
                                    <li><a href="">Словари и разговорники</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="menu_lvl2_bt arrow" href="">Бизнес-литература</a>
                                <ul class="menu_lvl3">
                                    <li><a href="">Для школьников</a></li>
                                    <li><a href="">Дополнительное образование</a></li>
                                    <li><a href="">Книги для дошкольников</a></li>
                                    <li><a href="">Подготовка к ЕГЭ</a></li>
                                    <li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
                                    <li><a href="">Словари и разговорники</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu_lvl1_bt" href=""><span>Акции</span></a></li>
                    <li><a class="menu_lvl1_bt" href=""><span>Доставка</span></a></li>
                    <li><a class="menu_lvl1_bt" href=""><span>О компании</span></a></li>
                    <li><a class="menu_lvl1_bt" href=""><span>Новости</span></a></li>
                    <li><a class="menu_lvl1_bt" href=""><span>Контакты</span></a></li>
                </ul>
            </div>
            <div class="head_search_bl">
                <form>
                    <input type="text" placeholder="Поиск ..."/>
                    <input type="submit" value="найти"/>
                </form>
            </div>
        </div>
    </div>
    <div class="index_slider_bl">
        <ul class="index_slider">
            <li>
                <div class="index_slider_el" style="background-image:url(./img/index_slider_bg.png);">
                    <div class="standart_width index_slider_cont">
                        <div class="ind_slid_txt_bl">
                            <div class="ind_slid_tit">Осенний ценопад</div>
                            <div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
                            <a class="red_bt" href="">Узнать подробнее</a>
                        </div>
                        <div class="ind_slid_img"><img src="./img/index_slider1.png" alt=""/></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="index_slider_el" style="background-image:url(./img/index_slider_bg.png);">
                    <div class="standart_width index_slider_cont">
                        <div class="ind_slid_txt_bl">
                            <div class="ind_slid_tit">Осенний ценопад</div>
                            <div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
                            <a class="red_bt" href="">Узнать подробнее</a>
                        </div>
                        <div class="ind_slid_img"><img src="./img/index_slider1.png" alt=""/></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<section>
    <div class="gray_bg">
        <div class="standart_width">
            <div class="title">Популярные товары</div>
            <div class="catalog_list">
                <div class="catalog_el">
                    <div class="cat_el_img">
                        <a href=""><img src="./img/produce1.png" alt=""/></a>
                        <div class="cat_el_status">
                            <div class="red">акция</div>
                            <div class="green">новинка</div>
                            <div class="blue">бестселлер</div>
                        </div>
                    </div>
                    <div class="cat_el_star">
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_gray.png" alt=""/>
                    </div>
                    <div class="cat_el_price">
                        <div class="cat_price">221 руб.</div>
                        <div class="cat_old_price">
                            <div class="price">287 руб.</div>
                            <div class="sale">-22%</div>
                        </div>
                    </div>
                    <div class="cat_el_name">
                        <div class="cat_el_tit"><a href="">Красная Книга</a></div>
                        <div class="cat_el_avtor">Константин  Красновский</div>
                    </div>
                    <a class="favor_bt" href="">В избранное</a>
                </div>
                <div class="catalog_el">
                    <div class="cat_el_img">
                        <a href=""><img src="./img/produce2.png" alt=""/></a>
                    </div>
                    <div class="cat_el_star">
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_gray.png" alt=""/>
                    </div>
                    <div class="cat_el_price">
                        <div class="cat_price">221 руб.</div>
                    </div>
                    <div class="cat_el_name">
                        <div class="cat_el_tit"><a href="">Зеленая Книга</a></div>
                        <div class="cat_el_avtor">Зенаид Зеленовский</div>
                    </div>
                    <a class="favor_bt active" href="">В избранное</a>
                </div>
                <div class="catalog_el">
                    <div class="cat_el_img">
                        <a href=""><img src="./img/produce3.png" alt=""/></a>
                    </div>
                    <div class="cat_el_star">
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_gray.png" alt=""/>
                    </div>
                    <div class="cat_el_price">
                        <div class="cat_price">90 руб.</div>
                        <div class="cat_old_price">
                            <div class="price">100 руб.</div>
                            <div class="sale">-10%</div>
                        </div>
                    </div>
                    <div class="cat_el_name">
                        <div class="cat_el_tit"><a href="">Фиолетовая книга</a></div>
                        <div class="cat_el_avtor">Филипп Фиолетов</div>
                    </div>
                    <a class="favor_bt" href="">В избранное</a>
                </div>
                <div class="catalog_el">
                    <div class="cat_el_img">
                        <a href=""><img src="./img/produce4.png" alt=""/></a>
                    </div>
                    <div class="cat_el_star">
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_gray.png" alt=""/>
                    </div>
                    <div class="cat_el_price">
                        <div class="cat_price">450 руб.</div>
                    </div>
                    <div class="cat_el_name">
                        <div class="cat_el_tit"><a href="">Серая Книга</a></div>
                        <div class="cat_el_avtor">Сергей Серый</div>
                    </div>
                    <a class="favor_bt" href="">В избранное</a>
                </div>
                <div class="catalog_el">
                    <div class="cat_el_img">
                        <a href=""><img src="./img/produce5.png" alt=""/></a>
                    </div>
                    <div class="cat_el_star">
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_gray.png" alt=""/>
                    </div>
                    <div class="cat_el_price">
                        <div class="cat_price">900 000 руб.</div>
                    </div>
                    <div class="cat_el_name">
                        <div class="cat_el_tit"><a href="">Цвет настроения синий</a></div>
                        <div class="cat_el_avtor">Филипп Киркоров</div>
                    </div>
                    <a class="favor_bt" href="">В избранное</a>
                </div>
                <div class="catalog_el">
                    <div class="cat_el_img">
                        <a href=""><img src="./img/produce6.png" alt=""/></a>
                    </div>
                    <div class="cat_el_star">
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_orange.png" alt=""/>
                        <img src="./img/star_gray.png" alt=""/>
                    </div>
                    <div class="cat_el_price">
                        <div class="cat_price">653 руб.</div>
                    </div>
                    <div class="cat_el_name">
                        <div class="cat_el_tit"><a href="">Blackstar</a></div>
                        <div class="cat_el_avtor">Тимур Ильдарович</div>
                    </div>
                    <a class="favor_bt" href="">В избранное</a>
                </div>
            </div>
        </div>
    </div>
    <div class="white_bg">
        <div class="standart_width">