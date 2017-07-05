<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 16/05/2017
 * Time: 05:53 PM
 */

get_header()?>

    <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Galleries</h2>
                    <h3 class="section-subheading text-muted">The best pictures so far</h3>
                </div>
            </div>
            <div class="row">

                <?php

                $args=array('post_type'=>'galerias',
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
                                <h4><?php the_title() ?></h4>
                                <img src="<?php the_post_thumbnail_url('midium-thumbnail')?>" class="img-responsive " alt="">
                                <p><?php the_excerpt()?></p>

                                <a class="btn btn-primary" href="<?php the_permalink()?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

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
            </div>
        </div>



    </section>
<?php get_footer()?>