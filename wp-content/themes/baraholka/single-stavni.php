<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();
        $pod_file = pods( 'stavni', get_the_ID() );
    ?>

        <h1>Содержание заявки</h1>

        <h2><?= get_post_meta( get_the_ID(), 'stavni_nazv', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_gorod', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_ruk', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_e-mail', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_tel', true ); ?></h2>
        <h2><a href="<?= $pod_file->field('stavni_foto.guid'); ?>">фото</a></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_name-dance', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_kat', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_name-dance', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_time', true ); ?></h2>
        <h2><?= get_post_meta( get_the_ID(), 'stavni_kol', true ); ?></h2>
        <h2><a href="<?= $pod_file->field('stavni_video.guid'); ?>">Видео</a></h2>

    <?php
    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
</div><!-- #primary -->
