<?php get_header(); ?>

<main>
	<article>
		
<?php 
	if (have_post() ) {
		while ( have_post() ) {
			the_post();
?>
	<div class="single-imovel-tumbnail">
	<?php the_post_thumbnail(); ?>
	</div>
	<div class="container">
		<section class="chamada-principal">
			<?php the_title(); ?>
		</section>

		<section class="single-imovel-geral">
			<?php the_content(); ?>
		</section>

		<span class="single-imovel-data">
			<?php the_date(); ?>
		</span>
	</div>

<?php
		}
	}
 ?>

 	</article>
</main>

<?php get_footer(); ?>