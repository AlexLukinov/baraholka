<?php
/* Template Name: Home */
?>
<!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.lettering.js"></script>
<!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/js/jquery.fullpage.min.js"></script>-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollify.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.textillate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/anime.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/path-slider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

    <!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/js/jquery.validate.min.js"></script>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/css/jquery.fullpage.min.css">-->
    <title>Главная</title>
</head>
<body>
        <div class="section inter ">
            <header>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logotype" width="100%">
                </div>
                <div class="pre">
                    <div class="sp-container">
                        <div class="sp-content">
                            <div class="sp-globe"></div>
                            <h2 class="frame-1">Этой осенью</h2>
                            <h2 class="frame-2">6000+ танцоров всех стилей и направлений</h2>
                            <h2 class="frame-3">на одной dance-площадке</h2>
                            <h2 class="frame-4">cтань частью</h2>
                            <h2 class="frame-5">
                                <span>Baraholka Battle,</span>
                                <span>Энергия искусств,</span>
                                <span>STAVни.</span>
                            </h2>
                            <a class="sp-circle-link" href="#">season 4</a>
                        </div>
                    </div>
                </div>

                <div class="info">
                    <div class="number_tel">8-800-000-00-00</div>
                    <div class="soc_icons">
                        <ul>
                            <li class="vkontakte"><a href="https://vk.com/stavbloxa"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/baraholka_battle/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <!--меню для мобильной версии -->
                        <div class="menu_mobile">
                            <div class="hamburgerIcon"></div>
                        </div>

                    </div>
                </div>
            </header>
            <?php
            if (isset($_SESSION['success_message'] )) {
                ?>
                <p class="alert alert-danger"><?php echo $_SESSION['success_message']; ?></p>
                <?php unset($_SESSION['success_message']); ?>
            <?php } ?>
            <div class="page_begin">
                <nav>
                    <a href="#sponsori-yakor">Спонсоры</a>
                    <a href="#stavni-yakor">STAVни</a>
                    <a href="#energi-yakor" class="nav-a-energi">Энергия искусств</a>
                    <a href="#battle-yakor">Baraholka Battle</a>
                    <a href="index.html">Главная</a>
                </nav>
                <div id="menu-mobile" class="animated fadeIn" style="display: none">
                    <a href="index.html">Главная</a>
                    <a href="#">Baraholka Battle</a>
                    <a href="#">Энергия искусств</a>
                    <a href="#">STAVни</a>
                    <a href="#">Спонсоры</a>
                </div>
                <div class="home">
                    <div class="caption">
                        <h1 class="caption_h1 animated zoomIn">БАРАХОЛКА</h1>
                        <h2 class="caption_h2">Всероссийский танцевальный проект</h2>
                    </div>
                    <div class="meropriyatiya">
                        <div class="page_content">
                            <div class="content-right content-dn">
                                <p>Танцевальная битва, или попросту батл, самый популярный способ для
                                    определения победителя среди танцоров в режиме "живого" соперничества
                                </p>
                            </div>
                            <div class="content-left content-fixed">
                                <h3>«Baraholka Battle»</h3>
                                <div class="divader"></div>
                                <h3>3/11/2018 7:00</h3>
                                <div class="btn from-top"><a href="https://vk.com/battle_baraholka">Стать частью</a></div>
                            </div>
                        </div>
                        <div class="page_content">
                            <div class="content-right content-dn">
                                <p>Всероссийский фестиваль-конкурс среди детских, юношеских и взрослых ансамблей танца
                                    «Энергия искусств», пожалуй,
                                    самое зрелищное мероприятие Всероссийского танцевального проекта «Барахолка».
                                </p>
                            </div>
                            <div class="content-left content-fixed">
                                <h3>«"Энергия искусств»</h3>
                                <div class="divader"></div>
                                <h3>4/11/2018 07:00</h3>
                                <div class="btn from-left"><a href="/energy-form">Стать частью</a></div>
                            </div>
                        </div>
                        <div class="page_content">
                            <div class="content-right content-dn">
                                <p>Фестиваль экспериментального танца «STAVни» - это более 100 перфомансов,
                                    16 танцевальных спектаклей от лучших команд России,
                                    мастер-классы, лекции и практик
                                </p>
                            </div>
                            <div class="content-left content-fixed">
                                <h3>«STAVни»</h3>
                                <div class="divader"></div>
                                <h3>2-3/11/2018</h3>
                                <div class="btn from-right"><a href="/stavni-form">Стать частью</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section inter  page-battle" id="battle-yakor">
            <div class="column-content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                <div class="info">
                    <div class="soc_icons">
                        <ul>
                            <li class="vkontakte"><a href="https://vk.com/battle_baraholka"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/baraholka_battle/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-battle-container">
                <div class="content-left">
                    <h2 class="text-color">Baraholka Battle</h2>
                    <h3 class="text-color">Направления: Hih-hop House Dancehall Breacking Lady Style Experimental</h3>
                    <h3 class="text-color">Возрастная категория участников: 4-60лет</h3>
                    <h3 class="text-color">Стоимость участия - 350руб.</h3>
                    <p>* * * Стоимость участия указана с учётом регистрации в группе, регистрация в
                        день мероприятия 450 рублей с человека, каждая дополнительная номинация
                        400 рублей с человека.
                        Оплата осуществляется, либо на месте проведения баттла, либо до
                        мероприятия переводом на карту.
                        Вход для зрителей на финалы баттла - 100 рублей</p>
                    <div class="btn from-left btn-align"><a href="#">скачать положение</a></div>
                    <div class="btn from-middle btn-align"><a href="#">Подать заявку</a></div>
                </div>
                <div class="content-right">
                    <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/img/battle.png" alt="Baraholka Battle">
                    <p class="tiser">Площадка проведения баттла - «Молодежное пространство «Лофт»»,
                        Ставропольский дворец культуры и спорта, г. Ставрополь, ул. Ленина 251
                        или Северо-Кавказский федеральный университет, г. Ставрополь, проспект
                        Кулакова, 2 (9 корпус) концертный зал</p>
                </div>
            </div>
        </div>
        <div class="section inter  page-energi" id="energi-yakor">
            <div class="column-content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                <div class="info">
                    <div class="soc_icons">
                        <ul>
                            <li class="vkontakte"><a href="https://vk.com/artenergy_stv"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/baraholka_battle/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-energi-container">
                <div class="content-right">
                    <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/img/energi.png" alt="Энергия искусств">
                    <p>Обмен опытом между ведущими специалистами в сфере
                        танцевального искусства и участниками фестиваля-конкурса, развитие и
                        поддержка творческих контактов руководителей коллективов, создание
                        условий для реализации творческого потенциала среди детей и подростков,
                        повышение уровня исполнительского мастерства участников
                        художественной самодеятельности
                    </p>
                </div>
                <div class="content-left">
                    <h2>Энергия искусств</h2>
                    <h3>Танцевальные дисциплины: Street Dance Эстрадный танец Спортивная хореография Lady Style
                        Оригинальный жанр Народная стилизация Народный танец Современная хореография</h3>
                    <h3>Сумма участия по предварительной оплате: <br>соло - 700руб <br> дуэт - 1400руб.<br>
                        малая форма - 1400руб (не зависимо от кол-ва участников в постановке)<br>
                        ансамбль - 9000руб (не зависимо от кол-ва участников в постановке)<br>
                        Дополнительный взнос в размере 100 руб. – Страхование жизни и здоровья
                        участника. (Обязательно)
                    </h3>
                    <div class="btn from-left btn-align"><a href="#">скачать положение</a></div>
                    <div class="btn from-top btn-align"><a href="/energy-form">Подать заявку</a></div>
                </div>
            </div>
        </div>
        <div class="section inter  page-battle page-stavni" id="stavni-yakor">
            <div class="column-content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                <div class="info">
                    <div class="soc_icons">
                        <ul>
                            <li class="vkontakte"><a href="https://vk.com/stavni_fest"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/baraholka_battle/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-battle-container page-stavni-container">
                <div class="content-left">
                    <h2 class="text-color">STAVни</h2>
                    <h3 class="text-color">Категории: Performance MINI Performance MAXI Battles</h3>
                    <h3 class="text-color">Стоимость участия:<br> Performance MINI-5000руб <br>Performance MAXI-10000руб <br>Battles-350руб</h3>
                    <h3 class="text-color">Возрастная категория участников: 4-60лет</h3>
                    <p>* * * Стоимость участия указана с учётом предварительной регистрации на мероприятие, регистрация в
                        день мероприятия 450 рублей с человека. Дополнительный взнос в размере 100 руб. – Страхование жизни и здоровья
                        участника. (Обязательно)
                    </p>
                    <div class="btn from-left btn-align"><a href="#">скачать положение</a></div>
                    <div class="btn from-middle btn-align"><a href="#">Подать заявку</a></div>
                </div>
                <div class="content-right">
                    <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/img/stavni.png" alt="Baraholka Battle">
                    <!--<img class="content-img" src="img/logo.png" alt="Baraholka Battle">-->
                    <p class="tiser">Фестиваль современной и экспериментальной хореографии «STAVни»
                        - это платформа для новых материалов и экспериментов, это фестиваль
                        воплощенного искусства, демонстрирующий новые идеи и исследования в
                        хореографии, театре, музыке и исполнении. «STAVни» 2018 включает в себя
                        более 100 перфомансов от лучших команд России, мастер-классы, лекции и
                        практики</p>
                </div>
            </div>
        </div>
        <div class="section inter  page_begin_decoration">
            <h2 class="org">Над проектом работают</h2>
            <div class="path-slider">
                <!-- Slider items -->
                <a href="#" class="path-slider__item path-slider__item--1"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--2"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--3"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--4"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--5"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--6"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--7"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--8"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--9"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--10"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
                <a href="#" class="path-slider__item path-slider__item--11"><i class="fas fa-angle-double-right"></i><div class="item__circle"></div></a>
            </div>
        </div>
        <div class="section inter  sponsori" id="sponsori-yakor">
            <h2 class="org">Если вы станете спонсором мероприятия, мы разместим ваш логотип здесь</h2>
            <div class="sponsori-tabl">
                <div class="sponsori-tabl_item"></div>
                <div class="sponsori-tabl_item"></div>
                <div class="sponsori-tabl_item"></div>
                <div class="sponsori-tabl_item"></div>
                <div class="sponsori-tabl_item"></div>
                <div class="sponsori-tabl_item"></div>
            </div>
            <div class="btn from-middle btn-align">скачать комерчесское предложение</div>
            <div class="btn from-middle btn-align">стать спонсорoм</div>
        </div>
        <div class="section"></div>
    <script>
        $(document).ready(function() {
            // $('#fullpage').fullpage({
            //     //options here
            //     autoScrolling:true,
            // });
            $(function() {
                $.scrollify({
                    section : ".section",
                    // sectionName : "section inter -name",
                    interstitialSection : ".inter"
                });
            });

            //methods
            // $.fn.fullpage.setAllowScrolling(false);
        });
    </script>
</body>
<footer>
    <p>Designed &amp; Developed by
        <a href="https://vk.com/ekaterinalukinova">Ekaterina Lukinova</a> exclusively for
        <a href="https://vk.com/idgaryaninae">Elena Yushkova</a>
    </p>
    <a href="#"><i class="fas fa-arrow-up"></i></a>
    <a href="#" class='btn open-modal' data-modal="#modal1">Open Modal</a>

    <div class='modal' id='modal1'>
        <div class='content'>
            <h2 class='title'>Благодарим!</h2>
            <p>
                Ваша заявка принята и будет рассмотрена в течение небольшого промежутка времени.<br> С Вами свяжется наш специалист!
            </p>
            <a class='btn close-modal' data-modal="#modal1" href="#">ok</a>
        </div>
    </div>
</footer>



