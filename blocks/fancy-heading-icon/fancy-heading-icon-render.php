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

$fancy_heading_icon_text = get_field( 'fancy_heading_icon_text' ) ?: 'Тут ваш заголовок...';
$fancy_heading_icon_dashicon = get_field( 'fancy_heading_icon_dashicon' );
?>

<div class="fancy_heading_icon">
	<h1><?php echo $fancy_heading_icon_text; ?></h1>
	<div class="line">
		<div class="icon"><span class="dashicons dashicons-<?php echo $fancy_heading_icon_dashicon; ?>"></span></div>
	</div>
</div>