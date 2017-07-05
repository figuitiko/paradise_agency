<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="container">
		
		<!-- main-column -->
        <div class="row">
		<div class="col-lg-12">
			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content', 'page');

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
		</div><!-- /main-column -->
        </div>


		
	</div><!-- /site-content -->
	
	<?php get_footer();

?>