<?php get_header()?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php

        if (have_posts()) :
            while (have_posts()) : the_post();?>

                <div class="col-lg-12">
                    <p class="my-read">
                        <a href="<?php echo site_url()?>"><span class="glyphicon glyphicon-home"></span>-Back home</a>
                    </p>

                    <!-- Blog Post -->

                    <!-- Title -->
                    <h1><?php the_title()?></h1>

                    <!-- Author -->


                    <hr>

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span> <?php the_time('F j, Y g:i a'); ?></p>

                    <hr>
                    <?php $custom = get_post_custom($post->ID);
                    $gallery_code=$custom['gal_code'][0];
                     ?>
                    <p><?php echo do_shortcode($gallery_code); ?></p>


                    <!-- Preview Image -->


                    <hr>









                </div>


            <?php endwhile;

        else :
            echo '<p>No content found</p>';

        endif;

        ?>

        <!-- Blog Post Content Column -->






        </div>

    </div>
    <!-- /.row -->

    <hr>
    <?php get_footer() ?>


