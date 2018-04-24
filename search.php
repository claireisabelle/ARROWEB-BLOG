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
			
			<div class="post-category">
				<?php 
					$args = array( 'hide_empty=0' );

					$terms = get_terms( 'category', $args );
					
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
						$count = count( $terms );
						$i = 0;
						$term_list = '<p class="my_term-archive">Catégories : ';
					
						foreach ( $terms as $term ) {
						$i++;
						$term_list .= '<a style="background-color:'.get_field('couleur', $term).'" href="' . esc_url( get_term_link( $term ) ) . '">' . $term->name . '</a>';
							if ( $count != $i ) {
								$term_list .= ' &middot; ';
							}
							else {
								$term_list .= '</p>';
							}
						}
						echo $term_list;
					}
				?>

			</div>
			<!-- /.post-category -->

			<p>
				Votre recherche : "<?php the_search_query(); ?>"<br />
				<?php _e( 'Nombre de résultats trouvés : ', 'locale' ); ?> <?php echo $wp_query->found_posts; ?> 
			</p>

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
				<?php _e('<p>Aucun article trouvé.</p>'); ?>
			<?php endif; ?>



		</div>
		<!-- /.container -->
	</div>
	<!-- /.container-fluid bandeau2 -->
	
	
	
<?php get_footer(); ?>