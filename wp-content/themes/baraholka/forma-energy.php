<?php
/* Template Name: Energy */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="танцевальный проект, барахолка,
    танцевальный батл">
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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <title>Форма заявки</title>
</head>

<body>
<div class="page-form">
    <h2>Форма заявки на участие в фестивале-конкурсе "Энергия искусств"</h2>
    <form id="energy-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"  enctype="multipart/form-data" method="post" class="experiment">
        <input type="hidden" name="action" value="energy_form">
        <div class="tabs">
            <input type="radio" name="tabs" id="tab1" checked="checked"/>
            <label class="nav-label" for="tab1">
                <span class="only"><i class="fas fa-info-circle"></i></span>
                <span class="nav-span">Информация о коллективе и руководителе</span>
            </label>
            <input type="radio" name="tabs" id="tab2"/>
            <label class="nav-label" for="tab2" id="two">
                <span class="only"><i class="fas fa-camera"></i></span>
                <span class="nav-span">Фото коллектива</span>
            </label>
            <input type="radio" name="tabs" id="tab3"/>
            <label class="nav-label" for="tab3" id="three">
                <span class="only"><i class="fas fa-music"></i></i></span>
                <span class="nav-span">Информация о танцевальной композиции</span>
            </label>
            <input type="radio" name="tabs" id="tab4"/>
            <label class="nav-label" id="nobottom" for="tab4">
                <span class="only" id="lastone"><i class="fas fa-video"></i></span>
                <span class="nav-span">Дополнительная информация</span>
            </label>

            <!--вкладка 1 -->

            <div class="tab-content" id="tab-content1">
                <div class="name">
                    <img class="profile" src="img/logo.png"/>
                    <div class="information">
                        <h3 class="user">Основная информация</h3>
                        <h5 class="account">все поля обязательны для заполнения</h5>
                    </div>
                </div>
                <div class="formcontainers">
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_nazv" placeholder="Название клуба, коллектива" required="required" />
                        <label class="formlabel">Название</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_gorod" placeholder="Страна, город" required="required" />
                        <label class="formlabel">Страна, город</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_ruk" placeholder="Руководитель (ФИО)" required="required"/>
                        <label class="formlabel">Руководитель</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_ped" placeholder="Педагог(и)" required="required" />
                        <label class="formlabel">Педагог(и)</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_sopr" placeholder="Сопровождающие" required="required" />
                        <label class="formlabel">Сопровождающие</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_adres" placeholder="Адрес" required="required" />
                        <label class="formlabel">Адрес</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_e-mail" placeholder="E-mail" required="required" />
                        <label class="formlabel">E-mail</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_tel" placeholder="Телефон, контактный номер" required="required" />
                        <label class="formlabel">Телефон</label>
                    </div>
                    <button class="mountainbutton">Далее</button>
                </div>
            </div>

            <!--вкладка2-->

            <div class="tab-content" id="tab-content2">
                <div class="information">
                    <h3 class="user">Прикрепите, пожалуйста, фото коллектива</h3>
                    <h5 class="account">допускается фото в тренировочной одежде</h5>
                </div>
                <input type="file" name="energy_foto" class="baraholka-file">
                <!--<input type="submit" value="Отправить фото" class="otpravit">-->
                <button class="mountainbutton">Далее</button>
            </div>

            <!--вкладка3-->

            <div class="tab-content" id="tab-content3">
                <div class="information">
                    <h3 class="user">Информация о номере</h3>
                    <h5 class="account">все поля обязательны для заполнения</h5>
                </div>
                <div class="formcontainers">
                    <div class="formfields">
                        <input class="texter" name="energy_nom" type="text" placeholder="Номинация" required="required" />
                        <label class="formlabel">Номинация</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_kat" placeholder="Категория" required="required" />
                        <label class="formlabel">Категория</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_name-dance" placeholder="Название танцевальной композиции" required="required" />
                        <label class="formlabel">Название номера</label>
                    </div>
                    <div class="formfields">
                        <input class="texter" type="text" name="energy_time" placeholder="Время танцевальной композиции" required="required" />
                        <label class="formlabel">Время композиции</label>
                    </div>
                    <button class="mountainbutton">Далее</button>
                </div>
            </div>
            <!--вкладка 4-->

            <div class="tab-content" id="tab-content4">
                <div class="name">
                    <img class="profile" src="http://charlesmarcotte.me/images/12977238_10156780503205082_9096884707636244771_o.jpg"/>
                    <div class="information">
                        <h3 class="user">Дополнительно</h3>
                        <h5 class="account">Крайне важная информация для нас</h5>
                    </div>
                </div>
                <h3 class="h3-center">Приложите полный список участников с расшифровкой по номинациям и категориям</h3>
                <button class="obrazec">Скачать образец</button>
                <input type="file" name="energy_spisok" class="baraholka-file">
                <!--<input type="submit" value="Отправить список" class="otpravit">-->
                <button class="mountainbutton">Далее</button>
                <h3>Прикрепите видео танцевальной композиции</h3>
                <input type="file" name="energy_video" class="baraholka-file">
                <!--<input type="submit" value="Отправить видео" class="otpravit">-->
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function(){
        // $(".nav-label").click(function () {
        //     return false;
        // });
        //
        // $(".mountainbutton").click(function() {
        //     var valid = true;
        //     var i = 0;
        //     var $inputs = $(this).closest(".tab-content").find("input");
        //
        //     $inputs.each(function() {
        //         if (!validator.element(this) && valid) {
        //             valid = false;
        //         }
        //     });
        //
        //     if (valid) {
        //         $("#tabs").tabs("select", this.hash);
        //     }
        // });
        //
        // $("#energy-form").validate({
        //
        //     rules:{
        //         energy_nazv:{
        //             required: true
        //         }
        //     },
        //
        //     messages:{
        //         energy_nazv:{
        //             required: "Это поле обязательно для заполнения"
        //         }
        //     }
        // });
    });
</script>
</body>
</html>
