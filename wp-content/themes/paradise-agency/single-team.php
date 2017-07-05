<?php get_header()?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php

        if (have_posts()) :
            while (have_posts()) : the_post();?>

                <div class="col-lg-12">

                    <!-- Blog Post -->
        <p class="my-read">
            <a href="<?php echo site_url()?>"><span class="glyphicon glyphicon-home"></span>-Back home</a>
        </p>

                    <!-- Title -->
                    <h1><?php the_title()?></h1>

                    <!-- Author -->


                    <hr>


                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span><?php the_time('F j, Y g:i a'); ?></p>


                    <hr>
                    <div class="col-sm-4">
                        <div class="team-member">

                            <img src="<?php the_post_thumbnail_url()?>" class="img-responsive img-circle" alt="">
                            <h4><?php the_title() ?></h4>
                            <?php    $custom = get_post_custom($post->ID);
                            $member_role = $custom['role'][0];
                            $fb_url=$custom['fb'][0];
                            $tw_url=$custom['tw'][0];
                            $instagram_url=$custom['in'][0];
                            $linkeding_url=$custom['lk'][0];
                            $youtube_url=$custom['yt'][0] ?>
                            <p class="text-muted"><?php echo $member_role ?></p>
                            <ul class="list-inline social-buttons">
                                <?php if($tw_url){?>
                                    <li><a href="<?php echo $tw_url ?>"><i class="fa fa-twitter"></i></a>
                                    </li><?php } ?>
                                <?php if($fb_url){?>
                                    <li><a href="<?php echo $fb_url ?>"><i class="fa fa-facebook"></i></a>
                                    </li><?php } ?>
                                <?php if($linkeding_url){?>
                                    <li><a href="<?php echo $linkeding_url ?>"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                <?php } ?>
                                <?php if($instagram_url){?>
                                    <li><a href="<?php echo $instagram_url ?>"><i class="fa fa-instagram"></i></a>
                                    </li><?php } ?>
                                <?php if($youtube_url){?>
                                    <li><a href="<?php echo $youtube_url ?>"><i class="fa fa-youtube"></i></a>
                                    </li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3_5">
                        <p class="lead"> <?php echo get_the_content()?></p>
                    </div>



                    <!-- Post Content -->





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


    </div>
    <!-- /.row -->

    <hr>
    <?php get_footer() ?>


