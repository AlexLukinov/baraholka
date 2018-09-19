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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>Форма заявки</title>
</head>
<body>
  <div class="page-form">
      <a href="/" class="back"><i class="fas fa-arrow-left"></i></a>
      <div class="form_caption">
          <h2>Форма заявки на участие в фестивале экспериментальной и современной хореографии "STAVni"</h2>
          <p>!!!перед заполнением рекомендуем еще раз внимательно ознакомиться с положением!!!</p>
          <div class="btn from-left btn-align"><a href="<?= wp_upload_dir()['baseurl'].'/PolozhenieFET.docx'; ?>">скачать положение</a></div>
      </div>
  <form id="stavni-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"  enctype="multipart/form-data" method="post" class="experiment">
    <div class="tabs">
      <input type="hidden" name="action" value="stavni_form">
      <ul id="stavni-tabs" class="tabs__caption">
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
              <h5 class="account">Для более удобной обработки информации на один танцевальный номер подается одна заявка</h5>
            </div>
          </div>
          <div class="formcontainers">
            <div class="formfields">
              <input class="texter" type="text" name="stavni_nazv" id="stavni_nazv" placeholder="Название клуба, коллектива" required="required" /="/"/>
              <label class="formlabel">Название</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_gorod" id="stavni_gorod" placeholder="Страна, город"  /="/"/>
              <label class="formlabel">Страна, город</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_ruk" id="stavni_ruk" placeholder="Руководитель (ФИО)" /="/"/>
              <label class="formlabel">Руководитель</label>
            </div>

            <div class="formfields">
              <input class="texter" type="text" name="stavni_e-mail" id="stavni_e-mail" placeholder="E-mail или соц.сети" /="/"/>
              <label class="formlabel">E-mail</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_tel" id="stavni_tel" placeholder="Телефон, контактный номер" required="required" /="/"/>
              <label class="formlabel">Телефон</label>
            </div>
            <button type="button" class="next-button mountainbutton">Далее</button>
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
              <input class="texter" name="stavni_name-dance" id="stavni_name-dance"type="text" placeholder="Название танцевальной композиции" />
              <label class="formlabel">Название номера</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_time" id="stavni_time" placeholder="Время танцевальной композиции" required="required" />
              <label class="formlabel">Время композиции</label>
            </div>
            <div class="formfields">
              <input class="texter" type="text" name="stavni_kol" id="stavni_kol" placeholder="Количество человек" />
              <label class="formlabel">Количество человек</label>
            </div>
            <button type="button" class="next-button mountainbutton">Далее</button>
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
<!--          <input type="submit" value="Отправить видео" class="otpravit">-->
            <label for="sogl"><input type="checkbox" name="sogl" required="required">
                Я подтверждаю согласие на обработку
                <a href="#modal-sogl">персональных данных</a>
            </label>
            <div id="modal-sogl" class="modal-sogl">
                <div>
                    <a href="#close-sogl" title="Закрыть" class="close-sogl">Oк</a>
                    <h2>Согласие на обработку персональных данных</h2>
                    <p>Пользователь, регистрируясь на данном сайте, обязуется принять
                        Согласие на обработку персональных данных (далее – Согласие).
                        Принятием (акцептом) оферты настоящего Согласия является регистрация
                        Пользователя на Сайте. Пользователь дает свое согласие организаторам проекта,
                        на обработку своих персональных данных со следующими условиями:
                    </p>
                    <p>Согласие дается на обработку необходимых в связи с полноценной регистрацией участников,
                        обеспечения личной безопасности, следующих персональных данных: </p>
                    <p>
                        фамилия, имя, отчество; номера телефонов, адрес электронной почты;
                    </p>
                    <p>Я уведомлен(а) о
                        своем праве отозвать согласие путем подачи ОПЕРАТОРУ письменного заявления.
                        Подтверждаю, что я ознакомлен(а) с Федеральным законом от 27.07.2006 No152-ФЗ «О персональных данных»,
                        с моими правами и обязанностями в области защиты персональных данных,
                        в том числе с возможными последствиями в случае моего отказа от согласия
                        на обработку персональных данных.</p>
                </div>
            </div>

            <input type="submit" id="submit-button" value="Сохранить" class="mountainbutton">
<!--          <button class="mountainbutton">Далее</button>-->
        </div>
      </div>
    </div>
</form>
  </div>
</body>
</html>
