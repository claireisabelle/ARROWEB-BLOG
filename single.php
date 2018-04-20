<?php get_header(); ?>

	<title><?php the_field('title_seo'); ?></title>
	<meta name="description" content="<?php the_field('description_seo'); ?>" />

	<!-- Card Twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@clairebourdale" />
	<meta name="twitter:creator" content="@clairebourdale" />
	<meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:description" content="<?php the_field('description_seo'); ?>" />
	<meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'thumbnail')); ?>" />

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

			<div class="ariane">
				<p><a href=""><i class="fa fa-home" aria-hidden="true"></i> Arroweb</a> <i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a> <i class="fa fa-chevron-right" aria-hidden="true"></i> <?php the_title(); ?></p>
			</div>
			<!-- /.ariane -->

			<div class="post-content">

				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>

						<div class="post-category">
							<p>Catégorie(s) :
								<?php
									foreach((get_the_category()) as $category) {

										echo '<a href="'.get_category_link($category->cat_ID).'" style="background-color:'.get_field('couleur', $category).'">'. $category->cat_name. '</a> ';

									};
								?>
							 </p>
						</div>

						<h1><?php the_title(); ?></h1>

						<?php if(has_post_thumbnail()) : ?>
							<div class="post-thumbnail">
								<p class="text-center"><?php the_post_thumbnail('thumbnail-single'); ?></p>
							</div>
							<!-- /.post-thumbnail -->
						<?php endif; ?>

						<?php the_content(); ?>

					<?php endwhile; ?>

				<?php else : ?>
					<?php e_('<p>L\'article cherché n\'existe pas...</p>'); ?>
				<?php endif; ?>
			</div>
			<!-- /.post-content -->

		</div>
			<!-- /.container -->
	</div>
	<!-- /.container-fluid bandeau2 -->


<?php get_footer(); ?>