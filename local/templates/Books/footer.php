<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

        </div>
    </div>
</section>

<footer>
    <div class="foot_info_bl">
        <div class="standart_width">
            <div class="top_head_logo">
                <?php $APPLICATION->IncludeComponent(
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
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
            <div class="top_head_bt">
                <div class="foot_tel">
                    <?php $APPLICATION->IncludeComponent(
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
                        <?php $APPLICATION->IncludeComponent(
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
                    <?php $APPLICATION->IncludeComponent(
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
                    <?php $APPLICATION->IncludeComponent(
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
                    <?php $APPLICATION->IncludeComponent(
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
            <?php $APPLICATION->IncludeComponent(
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