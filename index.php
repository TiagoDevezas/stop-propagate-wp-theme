<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stop_PropagHate_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">


		<!-- Project tagline -->
		<div class="tagline bg-black">			
			<div class="tc f1-ns f2 lh-title b pt6 pb7 ph4 center mw8 white">
				Stop Propag<span class="dark-red">Hate</span> uses artificial intelligence to help detect and reduce <span class="dark-red">hate</span> speech in online news media.
			</div>
		</div>

		<!-- API form -->
		<div class="form-sph" style="margin-top: -200px;" id="try-it">
			<?php
			get_template_part('template-parts/sph-form');
			?>
		</div>

		<!-- About/Why section ** needs an /about page to get the content ** -->
		<?php
		$about_page = get_page_by_path('about', OBJECT, 'page');
		$content = apply_filters('the_content', $about_page->post_content); 
		if ($about_page) {
			?>
			<div id="about-section" class="bg-near-white">
				<div class="center mw8 pv4 ph2">
					<h2 class="f2 mt0 tc" id="why"><?# get_the_title($about_page) ?>Why?</h2>
					<div class="f2-ns f3 tc fw4 ph4 dark-gray lh-copy measure center"><?php echo $content ?></div>
				</div>
			</div>
			<?php
		}
		?>

		<!-- Opportunities section -->
		<?php 
		$args = array( 'category__and' => array(get_cat_ID("opportunities"), get_cat_ID("active")), 'post_type' =>  'post' ); 
		$catPost = get_posts($args);
		if (!empty($catPost)) { ?>
			<div class="center mw8 pv4 ph2">
				<h2 class="f2 mt0 tc" id="opportunities">Opportunities</h2>
				<div class="opportunities-wrapper center">
					<?php foreach ($catPost as $post) : setup_postdata($post); ?>
						<div class="flex justify-center pv3">
							<h2 class="mv0 pv2 ph3"><a href="<?php the_permalink(); ?>" class="f3 fw6 db dark-red link hover-black"><?php the_title(); ?></a></h2> 
							<p><?# the_content(); ?></p>
						</div>
					<?php  endforeach; ?>
					<?php
				} ?>
			</div>
		</div>


		<!-- Team widget section -->
		<div class="team-wrapper bg-near-white">
		<?php

		if ( is_active_sidebar( 'team-1' ) ) {

			?>
				<div class="mw8 center pt4 ph2" id="team-members-active">
					<h2 class="tc f2 mt0" id="team">Team</h2>
					<h3 class="tc f3 mv0 dark-gray">Current</h3>
					<hr class="mw3 bb bw1 b--black-10">
					<aside id="secondary-1" class="widget-area flex tc flex-wrap justify-around">
						<?php dynamic_sidebar( 'team-1' ); ?>
					</aside><!-- #secondary -->
				</div><!-- #team-members -->
			
		<?php } ?>

		<?php

		if ( is_active_sidebar( 'team-2' ) ) {

			?>
				<div class="mw8 center pb4 ph2" id="team-members-inactive">
					<h3 class="tc f3 mv0 dark-gray">Former</h3>
					<hr class="mw3 bb bw1 b--black-10">
					<aside id="secondary-2" class="widget-area flex tc flex-wrap justify-around">
						<?php dynamic_sidebar( 'team-2' ); ?>
					</aside><!-- #secondary -->
				</div><!-- #team-members -->
			
		<?php } ?>

		</div> <!-- .team-wrapper -->


			<?php /*
				$contact_page = get_page_by_path('contact', OBJECT, 'page');
				$content = apply_filters('the_content', $contact_page->post_content); 
				if ($contact_page) {
					?>
					<div id="contact-section" class="bg-white">
						<div class="center mw8 pv4 ph2">
							<h2 class="f2 tc mt0" id="contact"><?= get_the_title($contact_page) ?></h2>
							<div class="f4 lh-copy center measure-wide"><?php echo $content ?></div>
						</div>
					</div>
			<?php
				}
			?>

			<?php
			/*

			 if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				
			/*	while ( have_posts() ) :
					the_post();
					?>
					<div class="w-25 tc">
						<h2><?php the_title(); ?></h2>
						<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0]; ?>" alt="">
						<p><?php the_content() ?></p>
					</div>
					<?php

					// get_the_post_thumbnail();

					// if ( get_post_type( get_the_ID() ) == 'team-member' ) :
					// endif;

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					// get_template_part( 'template-parts/content', get_post_type() );

			/*	endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			*/ ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
