<?php get_header()?>

    <!-- Page Content -->
<section>
    <div class="container">

        <div class="row">
            <?php

            if (have_posts()) :
                while (have_posts()) : the_post();?>

                    <div class="col-md-9">
                        <p class="my-read">
                            <a href="<?php echo site_url()?>"><span class="glyphicon glyphicon-home"></span>-Back home</a>
                        </p>

                        <!-- Blog Post -->

                        <!-- Title -->
                        <h1><?php the_title()?></h1>

                        <!-- Author -->
                        <p class="lead">
                            by <a href="#"><?php the_author()?></a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p><span class="glyphicon glyphicon-time"></span> <?php the_time('F j, Y g:i a'); ?></p>

                        <hr>

                        <!-- Preview Image -->
                        <img class="img-responsive" src="<?php the_post_thumbnail_url('banner-image')?>" alt="">
                         <hr>


                        <!-- Post Content -->
                        <div class="my-read">
                        <p class="lead"> <?php echo get_the_content()?></p>
                        </div>

                        <hr>

                            <h3>Comments</h3>

                        <!-- Blog Comments -->
                        <?php comments_template()?>


                        <!-- Comments Form -->




                        <!-- Posted Comments -->

                        <!-- Comment -->


                        <!-- Comment -->


                    </div>


                <?php endwhile;

            else :
                echo '<p>No content found</p>';

            endif;

            ?>

            <!-- Blog Post Content Column -->


            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3 well">

                <!-- Blog Search Well -->
                <?php get_search_form()?>


                <!-- Blog Categories Well -->


                <!-- Side Widget Well -->


            </div>

        </div>
        <!-- /.row -->


    </div>
</section>
        <?php get_footer() ?>


