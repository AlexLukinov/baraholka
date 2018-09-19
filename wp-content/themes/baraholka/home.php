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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollify.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.textillate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/anime.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/path-slider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>Главная</title>
</head>
<body>
<?//= var_dump(wp_upload_dir()); die();?>
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
                    <div class="number_tel">8-928-968-35-13</div>
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
                <script>
                    $(document).ready(function () {
                       setTimeout(function () {
                           showModal($('.modal').first());
                       }, 500);
                    });
                </script>
                <?php unset($_SESSION['success_message']); ?>
            <?php } ?>
            <div class="page_begin">
                <nav>
                    <a href="#sponsori-yakor">Спонсоры</a>
                    <a href="#stavni-yakor">STAVни</a>
                    <a href="#energi-yakor" class="nav-a-energi">Энергия искусств</a>
                    <a href="#battle-yakor">Baraholka Battle</a>
                    <a href="#home">Главная</a>
                </nav>
                <div id="menu-mobile" class="animated fadeIn" style="display: none">
<!--                    <a href="#home">Главная</a>-->
                    <a href="#battle-yakor">Baraholka Battle</a>
                    <a href="#energi-yakor">Энергия искусств</a>
                    <a href="#stavni-yakor">STAVни</a>
                    <a href="#sponsori-yakor">Спонсоры</a>
                </div>
                <div class="home" id="home">
                    <div class="caption">
<!--                        <h1 class="caption_h1 animated zoomIn">БАРАХОЛКА</h1>-->
                        <h1 class="caption_h1 animated zoomIn">Baraholka</h1>
                        <h2 class="caption_h2">Всероссийский танцевальный проект</h2>
                    </div>
                    <div class="meropriyatiya">
                        <div class="page_content">
                            <div class="content-right content-dn">
                                <p>Танцевальная битва, или попросту батл, самый популярный способ для
                                    определения победителя среди танцоров в режиме "живого" соперничества
                                </p>
                            </div>
                            <div id="battle-nav" class="content-left content-fixed">
                                <h3>«Baraholka Battle»</h3>
                                <div class="divader"></div>
                                <h3>10/11/2018 7:00</h3>
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
                            <div id="energy-nav" class="content-left content-fixed">
                                <h3>«Энергия искусств»</h3>
                                <div class="divader"></div>
                                <h3>11/11/2018 07:00</h3>
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
                            <div id="stavni-nav" class="content-left content-fixed">
                                <h3>«STAVни»</h3>
                                <div class="divader"></div>
                                <h3>18/11/2018</h3>
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
                    <h3 class="text-color">Направления:<br> Hih-hop :: House<br> Dancehall :: Breacking<br> Lady Style :: Experimental</h3>
                    <h3 class="text-color">Стоимость участия - от 350руб.</h3>
                    <p>* * * Дополнительная номинация будет стоить 250 руб. с человека, при оплате
                        до мероприятия и регистрации в группе. При оплате на месте дополнительная номинация 350 руб. с человека.
                        Стоимость участия указана с учетом регистрации в группе, регистрация в день мероприятия - 450 руб. с человека.
                        Вход для зрителей на финалы баттла - 100 рублей</p>
                    <div class="btn from-left btn-align"><a href="<?= wp_upload_dir()['baseurl'].'/POLOZhENIE_battl_BARAKhOLKA_2018_1.pdf'; ?>">скачать положение</a></div>
                    <div class="btn from-middle btn-align"><a href="https://vk.com/battle_baraholka">Подать заявку</a></div>
                </div>
                <div class="content-right">
                    <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/img/battle.png" alt="Baraholka Battle">
                    <p class="tiser">Площадка проведения баттла - «Молодежное пространство «Лофт»»,
                        Ставропольский дворец культуры и спорта, г. Ставрополь, ул. Ленина 251
                    </p>
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
                        условий для реализации творческого потенциала среди детей и подростков.
                    </p>
                </div>
                <div class="content-left">
                    <h2>Энергия искусств</h2>
                    <h3>Танцевальные дисциплины:<br> Street Dance :: Эстрадный танец <br>
                        Спортивная хореография :: Lady Style<br>
                        Народный танец:: Народная стилизация<br>
                        Оригинальный жанр :: Современная хореография
                    </h3>
                    <h3>Сумма участия по предварительной оплате: <br>соло - 700руб <br> дуэт - 1400руб.<br>
                        малая форма - 1400руб (не зависимо от кол-ва участников в постановке)<br>
                        ансамбль - 9000руб (не зависимо от кол-ва участников в постановке)
                    </h3>
                    <div class="btn from-left btn-align"><a href="<?= wp_upload_dir()['baseurl'].'/Polozhenie_Energia_iskusstv_2018.pdf'; ?>">скачать положение</a></div>
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
                    <h3 class="text-color">Категории: Performance MINI :: Performance MAXI :: Battles</h3>
                    <h3 class="text-color">Стоимость участия:<br> Performance MINI-5000руб <br>Performance MAXI-10000руб <br>Battles-350руб</h3>
                    <h3 class="text-color">Возрастная категория участников: от 4-х лет</h3>
                    <p>* * * Стоимость участия указана с учётом предварительной регистрации на мероприятие, регистрация в
                        день мероприятия 450 рублей с человека. Дополнительный взнос в размере 100 руб. – Страхование жизни и здоровья
                        участника. (Обязательно)
                    </p>
                    <div class="btn from-left btn-align"><a href="<?= wp_upload_dir()['baseurl'].'/PolozhenieFET.docx'; ?>">скачать положение</a></div>
                    <div class="btn from-middle btn-align"><a href="/stavni-form">Подать заявку</a></div>
                </div>
                <div class="content-right">
                    <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/img/stavni.png" alt="Baraholka Battle">
                    <p class="tiser">Фестиваль современной и экспериментальной хореографии «STAVни»
                        - это платформа для новых материалов и экспериментов, это фестиваль
                        воплощенного искусства, демонстрирующий новые идеи и исследования в
                        хореографии, театре, музыке и исполнении.</p>
                </div>
            </div>
        </div>
        <div class="section inter  page_begin_decoration">
            <h2 class="org">Над проектом работают</h2>
            <div id="container">
                <ul id="slides">
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель Всероссийского танцевального<br> проекта «Барахолка» - <br>Юшкова Елена</span>           </span>
                        </div>
                        <h1 class="title"><span class="title-text">Елена</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель штаба<br>танцевального проекта -<br>Гречман Иннесса</span>
                        </div>
                        <h1 class="title"><span class="title-text">Иннеса</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель Всероссийского <br>"Baraholka Battle" <br>- Кищенко Елена</span>
                        </div>
                        <h1 class="title"><span class="title-text">Елена</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель пресс-центра<br> - Сопрун Анна</span>
                        </div>
                        <h1 class="title"><span class="title-text">Анна</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/5.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель службы по работе<br> с жюри и официальными гостями<br> - Мамонова Елена</span>
                        </div>
                        <h1 class="title"><span class="title-text">Елена</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/6.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель фестиваля-конкурса <br>«Энергия искусств» - <br>Стаценко Дарья</span>
                        </div>
                        <h1 class="title"><span class="title-text">Дарья</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/7.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель службы по работе <br>с партнёрами - <br>Швачко Дарья </span>
                        </div>
                        <h1 class="title"><span class="title-text">Дарья</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/8.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель фестиваля современной <br>и экспериментальной хореографии «STAVни» -<br> Гарянина Анастасия</span>
                        </div>
                        <h1 class="title"><span class="title-text">Анастасия</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/9.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>IT-менеджер</span>
                        </div>
                        <h1 class="title"><span class="title-text">Екатерина</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/10.jpg"/></div>
                        <div class="slide-partial slide-right">
                            <span>Руководитель службы награждения - <br> Перминова Ольга</span>
                        </div>
                        <h1 class="title"><span class="title-text">Ольга</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="<?php echo get_template_directory_uri(); ?>/img/11.jpg"/></div>
                        <div class="slide-partial slide-right"><span>Здесь должны быть <br>слова про дружный<br> сплоченный коллектив профессионалов</span></div>
                    </li>
                </ul>
                <ul id="slide-select">
                    <li class="btn prev"><</li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="btn next">></li>
                </ul>
            </div>
        </div>
        <div class="section inter  sponsori" id="sponsori-yakor">
            <h2 class="org">Если вы станете спонсором мероприятия, мы разместим ваш логотип здесь</h2>
            <div class="sponsori-tabl">
                <a href="https://www.instagram.com/batut_1_stav/" class="sponsori-tabl_item sponsori-tabl_item1"></a>
                <a href="#" class="sponsori-tabl_item sponsori-tabl_item2"></a>
                <a href="#" class="sponsori-tabl_item sponsori-tabl_item3"></a>
                <a href="#" class="sponsori-tabl_item sponsori-tabl_item4"></a>
                <a href="#" class="sponsori-tabl_item sponsori-tabl_item5"></a>
                <a href="#" class="sponsori-tabl_item sponsori-tabl_item6"></a>
            </div>

            <div class="btn from-middle btn-align"><a href="<?= wp_upload_dir()['baseurl'].'/Kommercheskoe_predlozhenie_dlya_sponsorov.doc'; ?>">скачать комерчесское предложение</a></div>
        </div>
        <div class="section"></div>
</body>
<footer>
    <p>Designed &amp; Developed by
        <a href="https://vk.com/ekaterinalukinova">Ekaterina Lukinova</a> exclusively for
        <a href="https://vk.com/idgaryaninae">Elena Yushkova</a>
    </p>
    <a href="#"><i class="fas fa-arrow-up"></i></a>
<!--    <a href="#" class='btn open-modal' data-modal="#modal1">Open Modal</a>-->

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



