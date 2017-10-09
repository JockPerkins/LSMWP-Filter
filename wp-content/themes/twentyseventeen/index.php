<?php
/**
 * Home page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/post/content', get_post_format());
                endwhile;

                the_posts_pagination(array(
                    'prev_text' => twentyseventeen_get_svg(array('icon' => 'arrow-left' )),
                    'next_text' => twentyseventeen_get_svg(array('icon' => 'arrow-right')),
                ));
            else :
                get_template_part('template-parts/post/content', 'none');
            endif;
            ?>
        </main>
    </div>
</div>

<?php get_footer();
