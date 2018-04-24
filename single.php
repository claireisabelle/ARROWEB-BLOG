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
	<meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'medium')); ?>" />


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
				<p><a href="https://arroweb.net"><i class="fa fa-home" aria-hidden="true"></i> Arroweb</a> <i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a> <i class="fa fa-chevron-right" aria-hidden="true"></i> <?php the_title(); ?></p>
			</div>
			<!-- /.ariane -->

			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

					<div class="post-content">

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

						<div class="post-tags">
							<p><em><?php the_tags('Mots-clés : ', ' &bull; ','<br />'); ?></em></p>
						</div>
						<!-- /.post-tags -->


						<div class="social-media">		

							<!-- twitter -->
							<a href="http://twitter.com/share" class="twitter-share-button" 
							data-count="vertical" data-via="clairebourdale">Tweet</a>
							<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
							
							<!-- Linked -->
							<script type="text/javascript" src="http://platform.linkedin.com/in.js"></script>
							<script type="in/share"></script>

							<!-- Facebook -->
							
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>

							<div class="fb-like" data-href="<?php echo esc_url(get_permalink()); ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>

						</div>
						<!-- /.social-media -->

					</div>
					<!-- /.post-content -->

					<div class="post-read-more">
						<h3>Pour aller plus loin sur le sujet...</h3>
						<?php the_field('pour_aller_plus_loin'); ?>
					</div>
					<!-- /.post-read-more -->

					<div class="post-previous-next">
						<p>A lire également : <br />
						<?php previous_post_link('<strong>&#8592; %link</strong>'); ?> <br />
						<?php next_post_link('<strong>&#8594; %link</strong>'); ?></p>
					</div>
					<!-- /.post-previous-next -->

					<div class="post-comments-list">
						<h3><?php comments_number( 'Aucun commentaire posté.', '1 commentaire publié :', '% commentaires publiés :' ); ?></h3>
						<ul class="commentlist">
							<?php
								$comments = get_comments(array(
									'post_id' => $post->ID,
									'status'  => 'approve'		
								)); 

								wp_list_comments(array(
									'per_page' 			=> 10,
									'reverse_top_level' => false
								), $comments);
							?>
						</ul>
					</div>
					<!-- /.post-comments-list -->

					<div class="post-comment-form">
						<?php comment_form(); ?>
						<p>Votre commentaire sera publié après approbation.</p>
					</div>

				<?php endwhile; ?>

			<?php else : ?>
				<?php _e('<p>L\'article cherché n\'existe pas...</p>'); ?>
			<?php endif; ?>

		</div>
			<!-- /.container -->
	</div>
	<!-- /.container-fluid bandeau2 -->


<?php get_footer(); ?>