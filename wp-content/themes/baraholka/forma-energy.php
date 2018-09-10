<?php
/* Template Name: Energy */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="танцевальный проект, барахолка, танцевальный батл">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.lettering.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.textillate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/anime.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/path-slider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/js/jquery.validate.min.js"></script>-->
<!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/js/jquery-ui.min.js"></script>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>Форма заявки</title>
</head>

<body>
<div class="page-form">
    <a href="#" class="back"><i class="fas fa-arrow-left"></i></a>
    <h2>Форма заявки на участие в фестивале-конкурсе "Энергия искусств"</h2>
    <form id="energy-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"  enctype="multipart/form-data" method="post" class="experiment">
        <input type="hidden" name="action" value="energy_form">
        <div class="tabs">
            <ul id="energy-tabs" class="tabs__caption">
                <li id="first-tab" class="active">
                    <span class="only"><i class="fas fa-info-circle"></i></span>
                    <span class="nav-span">Информация о коллективе и руководителе</span>
                </li>
                <li id="second-tab">
                    <span class="only"><i class="fas fa-camera"></i></span>
                    <span class="nav-span">Фото коллектива</span>
                </li>
                <li id="third-tab">
                    <span class="only"><i class="fas fa-music"></i></span>
                    <span class="nav-span">Информация о танцевальной композиции</span>
                </li>
                <li id="fourth-tab">
                    <span class="only"><i class="fas fa-video"></i></span>
                    <span class="nav-span">Дополнительная информация</span>
                </li>
            </ul>


            <!--первый блок-->
            <div class="tabs__content active">
                <div class="tab-content animated fadeIn" id="tab-content1">
                    <div class="name">
                        <img class="profile" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"/>
                        <div class="information">
                            <h3 class="user">Основная информация</h3>
                            <h5 class="account">Будьте внимательны при заполнении</h5>
                        </div>
                    </div>
                    <div class="formcontainers">
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_nazv" name="energy_nazv" placeholder="Название клуба, коллектива" required="required" />
                            <label class="formlabel">Название</label>
                        </div>
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_gorod" name="energy_gorod" placeholder="Страна, город" />
                            <label class="formlabel">Страна, город</label>
                        </div>
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_ruk" name="energy_ruk" placeholder="Руководитель (ФИО)" />
                            <label class="formlabel">Руководитель</label>
                        </div>
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_ped" name="energy_ped" placeholder="Педагог(и)" />
                            <label class="formlabel">Педагог(и)</label>
                        </div>
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_sopr" name="energy_sopr" placeholder="Сопровождающие"  />
                            <label class="formlabel">Сопровождающие</label>
                        </div>
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_adres" name="energy_adres" placeholder="Адрес"  />
                            <label class="formlabel">Адрес</label>
                        </div>
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_e-mail" name="energy_e-mail" placeholder="E-mail" />
                            <label class="formlabel">E-mail</label>
                        </div>
                        <div class="formfields">
                            <input class="texter" type="text" id="energy_tel" name="energy_tel" placeholder="Телефон, контактный номер" required="required" />
                            <label class="formlabel">Телефон</label>
                        </div>
                        <button type="button" class="next-button mountainbutton">Далее</button>
                    </div>
                </div>
            </div>

            <div class="tabs__content">

                <!--второй блок-->
                <div class="tab-content animated fadeIn" id="tab-content2" >
                    <div class="information">
                        <h3 class="user">Прикрепите, пожалуйста, фото коллектива</h3>
                        <h5 class="account">допускается фото в тренировочной одежде</h5>
                    </div>
                    <input type="file" name="energy_foto" class="baraholka-file">
                    <button type="button" class="next-button mountainbutton">Далее</button>
                </div>
            </div>

            <!--третий блок-->
            <div class="tabs__content">
                <div class="tab-content animated fadeIn" id="tab-content3">
                    <div class="information">
                        <h3 class="user">Информация о номере</h3>
                        <h5 class="account">все поля обязательны для заполнения</h5>
                    </div>
                    <div class="formcontainers">
                        <div class="formfields">
                            <select id="energy_nom" class="texter" name="energy_nom" required="required">
                                <option disabled>Выберите номинацию</option>
                                <option value="Народный танец">Народный танец</option>
                                <option selected value="Народная стилизация">Народная стилизация</option>
                                <option value="Street Dance">Street Dance</option>
                                <option value="Эстрадный танец">Эстрадный танец</option>
                                <option value="Современная хореография">Современная хореография</option>
                                <option value=" Шоу на основе бальной хореографии"> Шоу на основе бальной хореографии</option>
                                <option value="Спортивная хореография">Спортивная хореография</option>
                                <option value="Lady Style">Lady Style</option>
                                <option value="Оригинальный жанр">Оригинальный жанр</option>
                            </select>
                            <label class="formlabel">Номинация</label>
                        </div>
                        <div class="formfields">
                            <input id="energy_kat" class="texter" type="text" name="energy_kat" placeholder="Категория" required="required" />
                            <label class="formlabel">Категория</label>
                        </div>
                        <div class="formfields">
                            <input id="energy_name-dance" class="texter" type="text" name="energy_name-dance" placeholder="Название танцевальной композиции" required="required" />
                            <label class="formlabel">Название номера</label>
                        </div>
                        <div class="formfields">
                            <input id="energy_time" class="texter" type="text" name="energy_time" placeholder="Время танцевальной композиции" required="required" />
                            <label class="formlabel">Время композиции</label>
                        </div>
                        <button type="button" class="next-button mountainbutton">Далее</button>
                    </div>
                </div>
            </div>

            <!--четвертая вкладка-->
            <div class="tabs__content">
                <div class="tab-content animated fadeIn" id="tab-content4">
                    <div class="name">
                        <img class="profile" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"/>
                        <div class="information">
                            <h3 class="user">Дополнительно</h3>
                            <h5 class="account">Крайне важная информация для нас</h5>
                        </div>
                    </div>
                    <h3 class="h3-center">Приложите полный список участников с расшифровкой по номинациям и категориям</h3>
                    <button class="obrazec">Скачать образец</button>
                    <input type="file" name="energy_spisok" class="baraholka-file">
                    <h3>Прикрепите видео танцевальной композиции</h3>
                    <input type="file" name="energy_video" class="baraholka-file">
                    <input type="submit" id="submit-button" value="Сохранить" class="mountainbutton">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
