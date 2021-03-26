<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Levasseur_warren
 */

?>
	<div class="col-12 col-md-4 mb-4">
		<article>
			<div class="content-area overlay-blue">
				<?php
					$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
            		$cadena = substr(get_the_content(), 0, 140);
				?>
				<a href="<?php echo get_permalink(); ?>">
					<img src="<?php echo $src[0]; ?>" alt="choaching" class="img-fluid">
					<div class="description-area p-2 border">
						<h2 class="h4 mt-2 mb-2"><?php echo get_the_title(); ?></h2>
						<p><?php echo $cadena; ?></p>
					</div>
				</a>
			</div>
		</article>
	</div>
