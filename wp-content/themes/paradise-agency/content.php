<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 28/04/2017
 * Time: 02:17 PM
 */?>


<div class="row">

    <div class="col-md-4">
        <a href="#">
            <img class="img-responsive"  src="<?php the_post_thumbnail_url('midium-thumbnail')?>" alt="" >
        </a>
    </div>
    <div class="col-md-3_5">
        <h3><?php the_title()?></h3>

        <p><?php the_excerpt()?></p>
        <a class="btn btn-primary" href="<?php the_permalink()?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

    <div class="col-lg-12">
    <hr>
    </div>


</div>