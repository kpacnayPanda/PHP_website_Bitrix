<div class="hd_header">
                <table>
                    <tr>
                        <td rowspan="2" class="hd_companyname">
                            <h1><a href="">Мебельный магазин</a></h1>
                        </td>
                        <td rowspan="2" class="hd_txarea">
                            <span class="tel"><?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/phone.php"
    )
);?><br></span>  <br/>   
                            <?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>                       
                        </td>
                        <td style="width:232px">
                            <form action="">
                                <div class="hd_search_form" style="float:right;">
                                    <input placeholder="Поиск" type="text"/>
                                    <input type="submit" value=""/>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 11px;">
                            <span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
                            <div class="hd_loginform">
                                <span class="hd_title_loginform">Войти на сайт</span>
                                <form name="" method="" action="">
                    
                                    <input placeholder="Логин"  type="text">
                                    <input  placeholder="Пароль"  type="password">          
                                    <a href="/" class="hd_forgotpassword">Забыли пароль</a>
                                    
                                    <div class="head_remember_me" style="margin-top: 10px">
                                        <input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
                                        <label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
                                    </div>              
                                    <input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
                                    </form>
                                <span class="hd_close_loginform">Закрыть</span>
                            </div>
                            </span><br>
                            <a href="" class="hd_signup">Зарегистрироваться</a>
                        </td>
                    </tr>
                </table>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top_multi", Array(
    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
        "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
        "MENU_CACHE_TYPE" => "N",   // Тип кеширования
        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
        "MAX_LEVEL" => "2", // Уровень вложенности меню
        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
        "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
        "DELAY" => "N", // Откладывать выполнение шаблона меню
        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
    ),
    false
);?><br>
            </div>