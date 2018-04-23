<?php get_header(); ?>

	<title><?php bloginfo('description'); ?></title>

<?php get_template_part('header-end'); ?>

	<div class="container-fluid bandeau2">
		<div class="container">
			<section class="contact">
				<h1>Mieux comprendre les concepts du web...</h1>
				<p>Notions clés, vocabulaire, origines, actualités... pour mieux appréhender cet univers !</p>
			</section>	

			<?php if(is_active_sidebar('search')) : ?>

				<?php dynamic_sidebar('search'); ?>     

			<?php endif; ?>

			<?php if(have_posts()) : ?>
			
			<div class="blog-index">

				<?php while(have_posts()) : the_post(); ?>

					<div class="blog-index-article">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="blog-index-article-img">
							<?php if(has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('thumbnail-home'); ?>
							<?php endif; ?>
						</div>
						<p><?php the_field('resume'); ?></p>
						<p><a href="<?php the_permalink(); ?>">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
					</div>
					<!-- /.blog-index-article -->

				<?php endwhile; ?>

			</div>
			<!-- /.blog-index -->

			<?php
			// Previous/next page navigation.
				the_posts_pagination(array(
					'screen_reader_text' => __( 'Pages', 'arroweb-blog' ),
					'prev_text' => __( '&laquo;', 'arroweb-blog' ),
					'next_text' => __( '&raquo;', 'arroweb-blog' ),
				));
			?>

			<?php else : ?>
				<?php e_('<p>Aucun article publié.</p>'); ?>
			<?php endif; ?>



		</div>
		<!-- /.container -->
	</div>
	<!-- /.container-fluid bandeau2 -->
	
	
	
<?php get_footer(); ?>