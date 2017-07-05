<?php get_header() ?>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-width="60" data-layout="box_count" data-action="like" data-show-faces="false"
     data-share="false"></div>

<!-- Services Section -->


<section id="campaing">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Campaign</h2>
                <h3 class="section-subheading text-muted">Paradise on fire is an action film about a man who wants to
                    realize his dreams to help his people.</h3>


            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tag fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Overview</h4>
                <p class="text-muted">The campaign for our movie project "Paradise on fire" is of great importance,
                    since it isn't only about raising funds to finish the film; it's also about unifying every person
                    who once had a dream of getting ahead and being successful no matter what sacrifice he or she has to
                    make. For that reason, many people could identify with the main character who must overcome various
                    obstacles to reach his paradise; "Paradise on fire".</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-question fa-stack-1x fa-inverse"></i>
                    </span>
                <?php if (get_theme_mod('quest-setting-title', true) != "") {
                    $quest_title = esc_attr(get_theme_mod('quest-setting-title', true)); ?>
                    <h4 class="service-heading"><?php echo $quest_title ?></h4>

                    <?php

                }
                if (get_theme_mod('quest-setting-excert', true) != "") {
                    $quest_excert = esc_attr(get_theme_mod('quest-setting-excert', true));
                } ?>

                <p class="text-muted"><?php echo $quest_excert ?></p>
                <a href="#campaing_modal2" class="movie-link" data-toggle="modal">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Read More<span
                                class="glyphicon glyphicon-chevron-right"></span></button>
                </a>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Perks</h4>
                <p class="text-muted">Be part of our dream, know about our perks</p>
                <a href="#campaing_modal3" class="movie-link" data-toggle="modal">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Read More<span
                                class="glyphicon glyphicon-chevron-right"></span></button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- movie Grid Section -->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About the Movie</h2>
                <h3 class="section-subheading text-muted">Paradise on fire is an action film about a man who wants to
                    realize his dreams to help his people</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 movie-item">

                <a href="#movieModal1" class="movie-link" data-toggle="modal">
                    <div class="movie-hover">
                        <img src="<?php echo site_url() ?>/wp-content/uploads/2017/04/paradiseposter.png"
                             class="img-responsive" alt="">

                    </div>
                </a>

                <div class="movie-caption">
                    <h4>Background of the movie</h4>
                    <p class="text-muted">with: Abelardo Destrade Mora</p>
                    <a href="#movieModal1" class="movie-link movie-hover" data-toggle="modal">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Read More<span
                                    class="glyphicon glyphicon-chevron-right"></span></button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 movie-item">
                <div class="col-md-12">
                    <a href="#movieModal2" class="movie-link movie-hover" data-toggle="modal">
                        <div class="movie-hover">
                            <img src="<?php echo site_url() ?>/wp-content/uploads/2017/04/16388423_1249522988450630_215382167126794937_n.jpg"
                                 class="img-responsive" alt="">
                        </div>

                    </a>

                    <div class="movie-caption">
                        <h4>Gallery</h4>
                        <p class="text-muted">The Best Photos So Far:</p>
                        <a href="#movieModal2" class="movie-link movie-hover" data-toggle="modal">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Read More<span
                                        class="glyphicon glyphicon-chevron-right"></span></button>
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12">
                    <a href="#movieModal4" class="movie-link movie-hover" data-toggle="modal">
                        <div class="movie-hover">
                            <img src="<?php echo site_url() ?>/wp-content/uploads/2017/05/10923333_858246340903712_6062967927483310479_n.jpg"
                                 class="img-responsive" alt="">
                        </div>


                    </a>

                    <div class="movie-caption">
                        <h4>Videos</h4>
                        <p class="text-muted">The Best Videos So Far:</p>
                        <a href="#movieModal4" class="movie-link movie-hover" data-toggle="modal">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Read More<span
                                        class="glyphicon glyphicon-chevron-right"></span></button>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 movie-item">
                <a href="#movieModal3" class="movie-link" data-toggle="modal">
                    <div class="movie-hover">
                        <img src="<?php echo site_url() ?>/wp-content/uploads/2017/04/paradis2.png"
                             class="img-responsive" alt="">

                    </div>
                </a>

                <div class="movie-caption">
                    <h4>Short Sumary</h4>
                    <p class="text-muted">Join us in this adventure</p>
                </div>
                <a href="#movieModal1" class="movie-link movie-hover" data-toggle="modal">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Read More<span
                                class="glyphicon glyphicon-chevron-right"></span></button>
                </a>
            </div>


        </div>
    </div>
</section>

<!-- About Section -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">We were born ready to win.</h3>
            </div>
        </div>
        <div id="content" class="row">
            <div id="contentinner">


                <?php
                $current_page = get_query_var('page')
                    ? get_query_var('page')
                    : 1;


                $args = array('post_type' => 'team',
                    'posts_per_page' => '12',
                    'order_by' => 'date',
                    'order' => 'ASC',
                    'paged' => $current_page
                );

                global $wp_query;

                $temp = $wp_query;

                $wp_query = null;

                $wp_query = new WP_Query($args);


                if ($wp_query->have_posts()) :
                    $i = 0;
                    while ($wp_query->have_posts()) :$wp_query->the_post();
                        $i++; ?>
                        <div id="my_team" class="col-sm-4">
                            <div class="team-member">

                                <img src="<?php the_post_thumbnail_url() ?>" class="img-responsive img-circle" alt="">
                                <h4><?php the_title() ?></h4>
                                <?php $custom = get_post_custom($post->ID);
                                $member_role = $custom['role'][0];
                                $fb_url = $custom['fb'][0];
                                $tw_url = $custom['tw'][0];
                                $instagram_url = $custom['in'][0];
                                $linkeding_url = $custom['lk'][0];
                                $youtube_url = $custom['yt'][0];
                                $pinterest = $custom['pt'][0];
                                $email = $custom['em'][0]?>
                                <p class="text-muted"><?php echo $member_role ?></p>
                                <ul class="list-inline social-buttons">
                                    <?php if ($tw_url) { ?>
                                        <li><a href="<?php echo $tw_url ?>"><i class="fa fa-twitter"></i></a>
                                        </li><?php } ?>
                                    <?php if ($fb_url) { ?>
                                        <li><a href="<?php echo $fb_url ?>"><i class="fa fa-facebook"></i></a>
                                        </li><?php } ?>
                                    <?php if ($instagram_url) { ?>
                                        <li><a href="<?php echo $instagram_url ?>"><i class="fa fa-instagram"></i></a>
                                        </li><?php } ?>
                                    <?php if ($linkeding_url) { ?>
                                        <li><a href="<?php echo $linkeding_url ?>"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($youtube_url) { ?>
                                        <li><a href="<?php echo $youtube_url ?>"><i class="fa fa-youtube"></i></a>
                                        </li><?php } ?>
                                    <?php if ($pinterest) { ?>
                                        <li><a href="<?php echo $pinterest ?>"><i class="fa fa-pinterest"></i></a>
                                        </li><?php } ?>
                                    <?php if ($email) { ?>
                                        <li><a href="mailto:<?php echo $email ?>"><i class="fa fa-envelope"></i></a>
                                        </li><?php } ?>
                                </ul>
                                <div class="my-read">
                                    <a class="btn btn-primary" href="<?php the_permalink() ?>">Read More <span
                                                class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>

                        </div>
                        <?php if ($i % 3 == 0) {
                            ?>
                            <div class="clearfix"></div>
                            <?php

                        }
                    endwhile; ?>
                    <div id="my-pagination" class="col-xs-12 text-center ">
                        <?php


                        if ($wp_query->max_num_pages > 1) : // custom pagination

                            echo paginate_links();
                        endif; ?>
                    </div>
                    <?php
                    $wp_query = null;
                    $wp_query = $temp;
                    wp_reset_query();


                else :
                    // fallback no content message here
                endif;

                wp_reset_postdata(); ?>
            </div>
        </div>


</section>

<!-- Team Section -->

<!-- Team Section -->
<section id="blog" class="bg-light-gray">
    <div class="container">
        <div id="blog_content" class="row">
            <div id="blog_contentinner">

                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">BLog</h2>
                    <h3 class="section-subheading text-muted">Follow our news.</h3>
                </div>

                <?php
                $current_page = get_query_var('page')
                    ? get_query_var('page')
                    : 1;
                $args = array(
                    'posts_per_page' => 12,
                    'order_by' => 'date',
                    'order' => 'ASC',
                    'paged' => $current_page
                );
                global $wp_query;

                $temp = $wp_query;

                $wp_query = null;

                $wp_query = new WP_Query($args);


                if ($wp_query->have_posts()) :
                    $i = 0;
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                        $i++ ?>

                        <div class="col-sm-3">
                            <div class="col-sm-12">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url('midium-thumbnail') ?>">
                            </div>
                            <div class="col-sm-12">
                                <h3><?php the_title() ?></h3>
                                <p><?php the_excerpt() ?></p>
                                <a class="btn btn-primary" href="<?php the_permalink() ?>">Read More <span
                                            class="glyphicon glyphicon-chevron-right"></span></a>

                            </div>
                        </div>


                        <?php
                        if ($i % 4 == 0) {
                            ?>
                            <div class="clearfix"></div>
                            <?php

                        }
                    endwhile; ?>
                    <div id="my-pagination1" class="col-xs-12 text-center ">
                        <?php


                        if ($wp_query->max_num_pages > 1) : // custom pagination

                            echo paginate_links();
                        endif; ?>
                    </div>
                    <?php
                    $wp_query = null;
                    $wp_query = $temp;
                    wp_reset_query();

                    wp_reset_postdata();
                endif;
                ?>


            </div>
        </div>
    </div>


</section>

<!-- Clients Aside -->


<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">


            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">If you want to take part in our project or you have any
                    special idea please contact us</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" action=" <?php home_url('/') ?> ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name *" id="name"
                                       required
                                       data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email *"
                                       id="email" required
                                       data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Your Phone *"
                                       id="phone" required
                                       data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="content" placeholder="Your Message *" id="message"
                                          required
                                          data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- movie Modals -->
<!-- Use the modals below to showcase details about your movie projects! -->

<!-- movie Modal 1 -->
<div class="movie-modal modal fade" id="movieModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Background of the movie</h2>

                        <p>The original idea of this film emerged from a true story where a group of young people wanted
                            to pursue their dream by emigrating to the United States. Unfortunately, only one person
                            survived.
                            Caught by this story, the main actor and his production team wanted to produce a movie to
                            honor all people who are trying to get ahead and follow their dreams no matter what the
                            sacrifice is.
                            A paradise can turn into flames. This phrase describes the genre of the film. Despite being
                            a fiction movie, it is based on three true stories and is best described as a comedy, action
                            and martial arts film.
                            The film exposes the culture and the beauty of the cities of the Caribbean countries such as
                            Cuba, Curacao and Aruba. In addition, some parts of the movie take place in United States
                            and The Netherlands.
                        </p>


                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- movie Modal 2 -->
<div class="movie-modal modal fade" id="movieModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Galleries</h2>
                    <h3 class="section-subheading text-muted">The best pictures so far</h3>
                </div>
            </div>
            <div id="gallery_content" class="row">
                <div id="gallery_conentinner">

                    <?php
                    $current_page = get_query_var('page')
                        ? get_query_var('page')
                        : 1;

                    $args = array('post_type' => 'galerias',
                        'posts_per_page' => 9,
                        'order_by' => 'date',
                        'order' => 'ASC',
                        'paged' => $current_page
                    );
                    global $wp_query;

                    $temp = $wp_query;

                    $wp_query = null;

                    $wp_query = new WP_Query($args);


                    if ($wp_query->have_posts()) :
                        $i = 0;
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                            $i++; ?>
                            <div class="col-sm-4">

                                <div class="team-member">
                                    <h4><?php the_title() ?></h4>
                                    <img src="<?php the_post_thumbnail_url('midium-thumbnail') ?>"
                                         class="img-responsive " alt="">
                                    <p><?php the_excerpt() ?></p>

                                    <a class="btn btn-primary" href="<?php the_permalink() ?>">Read More <span
                                                class="glyphicon glyphicon-chevron-right"></span></a>

                                </div>
                            </div>
                            <?php if ($i % 3 == 0) {
                                ?>
                                <div class="clearfix"></div>
                                <?php

                            }
                        endwhile; ?>
                        <div id="my-pagination2" class="col-xs-12 text-center ">
                            <?php


                            if ($wp_query->max_num_pages > 1) : // custom pagination

                                echo paginate_links();
                            endif; ?>
                        </div>
                        <div class="col-xs-12">
                            <hr>
                        </div>

                        <?php

                    else :
                        // fallback no content message here
                    endif;
                    $wp_query = null;
                    $wp_query = $temp;
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>
                    <div class="col-xs-12 text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- movie Modal 3 -->
<div class="movie-modal modal fade" id="movieModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Short Summary</h2>

                        <p>
                            Ricardo, a Cuban native and martial artist feels the need to emigrate to the United States
                            to pursue his dreams to achieve a better life for himself and his family. During this
                            journey to the United States, he loses five friends at sea. Ricardo is the only survivor and
                            has been picked up by a yacht heading to Curacao, The Dutch Antilles.
                            Upon his arrival at the island, Ricardo searches for a job in which he can earn enough money
                            to help support his family in Cuba. In his desperate need and naive choice of making easy
                            money, he gets involved with a gang of extortionists who wrongly accuse him of stealing from
                            them. This forces him to immediately flee to Cuba. His pursuers follow him and try to not
                            only extort him, but also his family.
                            Ricardo wants to know who is responsible for those actions. He returns to Curacao to take
                            revenge on the real culprit. Only the strong, like Ricardo, can sufficiently overcome all
                            these setbacks.

                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- movie Modal 4 -->
<div class="movie-modal modal fade" id="movieModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div id="video_content" class="row">
                <div id="video_contentinner">


                <?php
                $current_page = get_query_var('page')
                    ? get_query_var('page')
                    : 1;


                $datos = array("post_type" => "videos",
                    "posts_per_page" => 9,
                    "order_by" => "date",
                    "order" => "ASC",
                    'paged' => $current_page
                );
                global $wp_query;

                $temp = $wp_query;

                $wp_query = null;

                $wp_query = new WP_Query($args);



                $wp_query = new WP_Query($datos);
                if ($wp_query->have_posts()):;
                    $i = 0;
                    while ($wp_query->have_posts()):$wp_query->the_post();
                        $i++;
                        $custom = get_post_custom($post->ID);
                        $code = $custom['code'][0] ?>

                        <div class="col-sm-4">
                            <div class="embed-responsive embed-responsive-4by3">
                                <h3><?php echo get_the_title() ?></h3>
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/<?php echo $code ?>" ></iframe>
                            </div>
                        </div>
                       <?php if ($i % 3 == 0) {
                        ?>
                        <div class="clearfix"></div>
                        <?php

                    }

                     endwhile;?>
                    <div id="my-pagination3" class="col-xs-12 text-center ">
                        <?php


                        if ($wp_query->max_num_pages > 1) : // custom pagination

                            echo paginate_links();
                        endif; ?>
                    </div>

                <?php
                endif;
                $wp_query = null;
                $wp_query = $temp;
                wp_reset_query();
                wp_reset_postdata();
                ?>
                    <div class="col-xs-12">
                        <hr>
                    </div>
                <div class="col-xs-12 text-center">

                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>
                        Close
                    </button>
                </div>
            </div>


            </div>
        </div>
    </div>
</div>

<div class="movie-modal modal fade" id="campaing_modal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <?php
                        $perkAr = array();
                        $m = 0;
                        for ($i = 1; $i <= 13; $i++) {
                            if (get_theme_mod('perk-setting-amount' . $i, true) != "") {
                                $perkAr[$m]['perkAmount'] = esc_attr(get_theme_mod('perk-setting-amount' . $i, true));
                            }
                            if (get_theme_mod('perk-setting-currency' . $i, true) != "") {
                                $perkAr[$m]['perkCurrency'] = esc_attr(get_theme_mod('perk-setting-currency' . $i, true));
                            }
                            if (get_theme_mod('perk-setting-title' . $i, true) != "") {
                                $perkAr[$m]['perkTitle'] = esc_attr(get_theme_mod('perk-setting-title' . $i, true));
                            }
                            if (get_theme_mod('perk-setting-content' . $i, true) != "") {
                                $perkAr[$m]['perkContent'] = esc_attr(get_theme_mod('perk-setting-content' . $i, true));
                            }
                            $m++;
                        }
                        ?>
                        <h2>Perks</h2>
                        <?php
                        foreach ($perkAr as $perk) {
                            ?>
                            <h3><?php echo esc_attr($perk['perkAmount']) ?></h3>
                            <p class="item-intro text-muted"><?php echo esc_attr($perk['perkCurrency']) ?></p>
                            <h4><?php echo esc_attr($perk['perkTitle']) ?></h4>
                            <p><?php echo esc_attr($perk['perkContent']) ?></p>


                        <?php }
                        ?>


                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  campaing question-->
<div class="movie-modal modal fade" id="campaing_modal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <?php if (get_theme_mod('quest-setting-title', true) != "") {
                            $quest_title = esc_attr(get_theme_mod('quest-setting-title', true)); ?>
                            <h4 class="service-heading"><?php echo $quest_title ?></h4>

                            <?php

                        }
                        if (get_theme_mod('quest-setting-content', true) != "") {
                            $quest_content = get_theme_mod('kirki-setting-content', true);

                        } ?>
                        <p class="text-muted"><?php echo $quest_content ?></p>


                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 ">

    <a class="back-to-top" href="#"></a>
</div>



<?php get_footer() ?>

<!-- jQuery -->



