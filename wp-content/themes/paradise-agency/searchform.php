<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 18/05/2017
 * Time: 01:57 PM
 */
?>

                    <h4>Blog Search</h4>
                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" id="s" placeholder="<?php the_search_query(); ?>">
                        <span class="input-group-btn">
                            <button  class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->


