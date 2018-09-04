<?php
/* Template Name: List */
?>

<?php
$args = array(
    'post_type'   => ['energy', 'stavni'],
    'post_status' => 'publish',
    'order' => 'DESC',
    'posts_per_page' => 500
);
$data = new WP_Query( $args );
$count = 0;

?>
<div>
    <table>
        <thead>
            <tr>№</tr>
            <tr>Название</tr>
            <tr>Вид</tr>
        </thead>
        <tbody>
        <?php
        if( $data->have_posts() ) :
            ?>
            <?php
            while( $data->have_posts() ) :
                $data->the_post();
                $count++;
                ?>
            <tr>
                <td><?= $count ?></td>
                <?php if (get_post_type(get_the_ID()) == 'energy') {?>
                    <td><a href="<?= get_post_permalink(); ?>"><?= get_post_meta( get_the_ID(), 'energy_nazv', true ); ?></a></td>
                    <td>Энергия</td>
                <?php } else { ?>
                    <td><a href="<?= get_post_permalink(); ?>"><?= get_post_meta( get_the_ID(), 'stavni_nazv', true ); ?></a></td>
                    <td>Stavni</td>
                <?php } ?>
            </tr>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        <?php
        endif;
        ?>
        </tbody>
    </table>
</div>
