<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 22/04/2017
 * Time: 02:02 PM
 */
get_header();
?>

<section>
    <div class="row">

        <div class="col-sm-9 text-center">
            <h2 class="section-heading">Search Results</h2>

        </div>
        <div class="col-sm-3">
            <?php get_search_form()?>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) :
                    ?>


                    <?php
                    while (have_posts()) : the_post();
                        ?>

                        <?php

                        get_template_part('content');

                    endwhile;

                else :
                    echo '<p>No content found</p>';

                endif;

                ?>
            </div>
        </div>
</section><!-- /site-content -->


<?php get_footer();

?>
