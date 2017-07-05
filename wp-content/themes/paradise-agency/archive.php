<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 28/04/2017
 * Time: 11:22 AM
 */
get_header()?>

<section>
    <div class="row">
        <div class="col-lg-12">
            <h1 >Blog
                <small>Catch up with us</small>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) :
                ?>


                <?php
                while (have_posts()) : the_post();
                    ?>

                    <?php

                    get_template_part('content','blog');

                endwhile;

            else :
                echo '<p>No content found</p>';

            endif;

            ?>
        </div>
    </div>
</section>
<?php get_footer()?>