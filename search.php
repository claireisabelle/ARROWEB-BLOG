<h1 class="search-title">
Votre recherche : "<?php the_search_query(); ?>"<br />
<?php _e( 'Nombre de résultats trouvés : ', 'locale' ); ?> <?php echo $wp_query->found_posts; ?> 
</h1>