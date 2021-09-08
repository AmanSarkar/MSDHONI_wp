<?php
/* Template Name: Homepage */

get_header();
?>


<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</main><!-- #main -->
	<br>
	<br>

    <div class="cards">
        <div class="card_item">
            <div class="card_image"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/ms1.jpg" width="300px" height="210px"></div>
            <h3>description yo yo</h3>
            <div class="card_link"><a href="google.com">Click me</a></div>
        </div>

        <div class="card_item">
            <div class="card_image"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/ms1.jpg" width="300px" height="210px"></div>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quis dolore natus aperiam. Doloremque ipsam obcaecati nihil quibusdam nisi eligendi modi nesciunt temporibus.</h3>
            <div class="card_link"><a href="google.com">Click me</a></div>
        </div>

        <div class="card_item">
            <div class="card_image"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/ms1.jpg" width="300px" height="210px"></div>
            <h3>description yo yo</h3>
            <div class="card_link"><a href="google.com">Click me</a></div>
        </div>

        <div class="card_item">
            <div class="card_image"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/ms1.jpg" width="300px" height="210px"></div>
            <h3>description yo yo</h3>
            <div class="card_link"><a href="google.com">Click me</a></div>
        </div>
    </div>
	<br>
	<br>
	
		

<?php
get_footer();
