<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();
        $pod_file = pods( 'energy', get_the_ID() );
    ?>
<h1>Содержание заявки</h1>

    <h2><?= get_post_meta( get_the_ID(), 'energy_nazv', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_gorod', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_ruk', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_ped', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_sopr', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_adress', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_e-mail', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_tel', true ); ?></h2>
    <h2><a href="<?= $pod_file->field('energy_foto.guid'); ?>">фото</a></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_nom', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_kat', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_name-dance', true ); ?></h2>
    <h2><?= get_post_meta( get_the_ID(), 'energy_time', true ); ?></h2>
    <h2><a href="<?= $pod_file->field('energy_spisok.guid'); ?>">Список участников</a></h2>
    <h2><a href="<?= $pod_file->field('energy_video.guid'); ?>">Видео</a></h2>

    <?php
    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
</div><!-- #primary -->
