<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();
        $pod_file = pods( 'stavni', get_the_ID() );
    ?>

    <h1><?= get_post_meta( get_the_ID(), 'stavni_nazv', true ); ?></h1>
    <h2><a href="<?= $pod_file->field('stavni_foto.guid'); ?>">фото</a></h2>

    <?php
    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
</div><!-- #primary -->
