<?php get_header(); ?>

	<title><?php bloginfo('description'); ?></title>

<?php get_template_part('header-end'); ?>

	<div class="container-fluid bandeau2">
		<div class="container">
			<section class="contact">
				<h1>Mieux comprendre les concepts du web...</h1>
				<p>...quand vous êtes perdu dans le web... mais que vous voulez être présent sur le web...</p>
			</section>	

			<?php if(is_active_sidebar('search')) : ?>

				<?php dynamic_sidebar('search'); ?>     

			<?php endif; ?>

			<div class="blog-index">
				<div class="blog-index-article">
					<h2>Fausse idée : l'emailing, ça ne coûte rien </h2>
					<div class="blog-index-article-img">
						<img src="https://etriganedotcom.files.wordpress.com/2017/12/pyre-logo.jpg" alt="" width="300px" height="140px">
					</div>
					<p>Le résumé de mon article. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat doloribus, minima adipisci! Modi amet vel ex porro molestiae eveniet, cum!</p>
					<p><a href="">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
				</div>
				<!-- /.blog-index-article -->


				<div class="blog-index-article">
					<h2>Fausse idée : l'emailing, ça ne coûte rien </h2>
					<div class="blog-index-article-img">
						<img src="https://etriganedotcom.files.wordpress.com/2017/12/pyre-logo.jpg" alt="" width="300px" height="140px">
					</div>
					<p>Le résumé de mon article. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat doloribus, minima adipisci! Modi amet vel ex porro molestiae eveniet, cum!</p>
					<p><a href="">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
				</div>
				<!-- /.blog-index-article -->


				<div class="blog-index-article">
					<h2>Fausse idée : l'emailing, ça ne coûte rien </h2>
					<div class="blog-index-article-img">
						<img src="https://etriganedotcom.files.wordpress.com/2017/12/pyre-logo.jpg" alt="" width="300px" height="140px">
					</div>
					<p>Le résumé de mon article. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat doloribus, minima adipisci! Modi amet vel ex porro molestiae eveniet, cum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, nemo!</p>
					<p><a href="">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
				</div>
				<!-- /.blog-index-article -->


				<div class="blog-index-article">
					<h2>Fausse idée : l'emailing, ça ne coûte rien </h2>
					<div class="blog-index-article-img">
						<img src="https://etriganedotcom.files.wordpress.com/2017/12/pyre-logo.jpg" alt="" width="300px" height="140px">
					</div>
					<p>Le résumé de mon article. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat doloribus, minima adipisci! Modi amet vel ex porro molestiae eveniet, cum!</p>
					<p><a href="">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
				</div>
				<!-- /.blog-index-article -->

			</div>
			<!-- /.blog-index -->

		</div>
		<!-- /.container -->
	</div>
	<!-- /.container-fluid bandeau2 -->
	
	
	
<?php get_footer(); ?>