<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

        </div>
    </div>
</section>

<footer>
    <div class="foot_info_bl">
        <div class="standart_width">
            <div class="top_head_logo">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/inc_logo.php"
                    )
                );?>
            </div>
            <div class="foot_menu">
                <ul>
                    <li><a href="">Каталог</a></li>
                    <li><a href="">Акции</a></li>
                    <li><a href="">Доставка</a></li>
                    <li><a href="">О компании</a></li>
                    <li><a href="">Новости</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </div>
            <div class="top_head_bt">
                <div class="foot_tel">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_phone.php"
                        )
                    );?>
                    <span>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/inc_operating_mode.php"
                            )
                        );?>
                    </span>
                </div>
                <a class="green_bt" data-fancybox data-src="#call_back" href="javascript:;">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_call_back.php"
                        )
                    );?>
                </a>
            </div>
        </div>
    </div>
    <div class="foot_prava_bl">
        <div class="standart_width">
            <div class="position_relative">
                <div class="foot_prava">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_copy.php"
                        )
                    );?>
                </div>
                <a class="foot_salavey" href="">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_dev.php"
                        )
                    );?>
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="popup" id="call_back" style="display:none;">
    <form>
        <div class="popup_tit">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/inc_call_back.php"
                )
            );?>
        </div>
        <div class="popup_form">
            <input type="text" placeholder="Ваше имя"/>
        </div>
        <div class="popup_form">
            <input class="error" type="email" placeholder="Email"/>
        </div>
        <div class="popup_form">
            <input class="true" type="tel" placeholder="Телефон"/>
        </div>
        <div class="popup_form">
            <textarea placeholder="Вопрос или сообщение"></textarea>
        </div>
        <div class="popup_form prava styler">
            <label>
                <input type="checkbox"/>
                <span>Я принимаю <a href="">условия передачи данных</a></span>
            </label>
        </div>
        <div>
            <a class="green_bt" href="">Отправить</a>
        </div>
    </form>
</div>
</body>
</html>