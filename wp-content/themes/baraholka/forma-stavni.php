<?php
/* Template Name: Stavni */
?>
<!doctype html>
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

<form>
  <div class="page-form">
    <h2>Форма заявки на участие в фестивале экспериментальной и современной хореографии "STAVni"</h2>
      <form id="stavni-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"  enctype="multipart/form-data" method="post" class="experiment">
    <div class="tabs">
        <input type="hidden" name="action" value="stavni_form">
      <ul class="tabs__caption">
        <li class="active">
          <span class="only"><i class="fas fa-info-circle"></i></span>
          <span class="nav-span">Информация о коллективе и руководителе</span>
        </li>
        <li>
          <span class="only"><i class="fas fa-camera"></i></span>
          <span class="nav-span">Фото коллектива</span>
        </li>
        <li>
          <span class="only"><i class="fas fa-music"></i></span>
          <span class="nav-span">Информация о танцевальной композиции</span>
        </li>
        <li>
          <span class="only"><i class="fas fa-video"></i></span>
          <span class="nav-span">Дополнительная информация</span>
        </li>
      </ul>

      <!--первый блок-->
      <div class="tabs__content active">
        <div class="tab-content animated fadeIn" id="tab-content1">
          <div class="name">
            <img class="profile" src="img/logo.png"/>
            <div class="information">
              <h3 class="user">Основная информация</h3>
              <h5 class="account">все поля обязательны для заполнения</h5>
            </div>
          </div>
          <div class="formcontainers">
            <div class="formfields">
              <input class="texter" type="text" name="stavni_nazv" id="stavni_nazv" placeholder="Название клуба, коллектива" required="required" /="/"/>
              <label class="formlabel">Название</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_gorod" id="stavni_gorod" placeholder="Страна, город" required="required" /="/"/>
              <label class="formlabel">Страна, город</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_ruk" id="stavni_ruk" placeholder="Руководитель (ФИО)" required="required" /="/"/>
              <label class="formlabel">Руководитель</label>
            </div>

            <div class="formfields">
              <input class="texter" type="text" name="stavni_e-mail" id="stavni_e-mail" placeholder="E-mail или соц.сети" required="required" /="/"/>
              <label class="formlabel">E-mail</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_tel" id="stavni_tel" placeholder="Телефон, контактный номер" required="required" /="/"/>
              <label class="formlabel">Телефон</label>
            </div>
            <button class="mountainbutton">Далее</button>
          </div>
        </div>
      </div>

      <div class="tabs__content">

        <!--второй блок-->
        <div class="tab-content animated fadeIn" id="tab-content2">
          <div class="information">
            <h3 class="user">Прикрепите, пожалуйста, фото коллектива</h3>
            <h5 class="account">допускается фото в тренировочной одежде</h5>
          </div>
          <input type="file" name="stavni_foto" class="baraholka-file">
<!--          <input type="submit" value="Отправить фото" class="otpravit">-->
          <button class="mountainbutton">Далее</button>
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
              <input class="texter" name="stavni_name-dance" id="stavni_name-dance"type="text" placeholder="Название танцевальной композиции" required="required" /="/"/>
              <label class="formlabel">Название номера</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_time" id="stavni_time" placeholder="Время танцевальной композиции" required="required" /="/"/>
              <label class="formlabel">Время композиции</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_kol" id="stavni_kol" placeholder="Количество человек" required="required" /="/"/>
              <label class="formlabel">Количество человек</label>
            </div>
            <button class="mountainbutton">Далее</button>
          </div>
        </div>
      </div>

        <div class="tabs__content">
      <!--четвертая вкладка-->
        <div class="tab-content animated fadeIn" id="tab-content4">
          <div class="name">
            <div class="information">
              <h3 class="user">Дополнительно</h3>
              <h5 class="account">Крайне важная информация для нас</h5>
            </div>
          </div>

          <h3>Прикрепите видео танцевальной композиции</h3>
          <input type="file" name="stavni_video" class="baraholka-file">
          <input type="submit" value="Отправить видео" class="otpravit">
          <button class="mountainbutton">Далее</button>
        </div>
      </div>
    </div>
</form>
  </div>
</body>
</html>
