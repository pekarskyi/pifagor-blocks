<?php
/**
 * Template for Quote block.
 *
 * Renders both in editor and frontend.
 *
 * @package ACF Guten Blocks
 */

if ( empty( $block['id'] ) ) {
	return;
}

$fancy_heading_text = get_field( 'fancy_heading_text' ) ?: 'Тут ваш заголовок...';
?>

<h2 class="fancyheading"><?php echo $fancy_heading_text; ?></h2>