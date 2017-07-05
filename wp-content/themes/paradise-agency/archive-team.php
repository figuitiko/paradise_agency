<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 28/04/2017
 * Time: 11:17 AM
 */


get_header()?>

<section id="full-team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">We were born ready to win.</h3>
            </div>
        </div>
        <div class="row">

            <?php

            $args=array('post_type'=>'team',
                'post_per_page'=>9,
                'order_by'=>'date',
                'order'=>'ASC'
            );
            $team_members= new WP_Query($args);
            if ($team_members->have_posts()) :
                $i=0;
                while ($team_members->have_posts()) : $team_members->the_post();
                    $i++; ?>
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
                    <?php if($i%3==0){
                        ?>
                        <div class="clearfix"></div>
                        <?php

                    }
                endwhile;
                    echo paginate_links();

            else :
                // fallback no content message here
            endif;
           ?>



</section>
<?php get_footer()?>