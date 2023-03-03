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

$pf_text_quote = get_field( 'pf_text_quote' ) ?: esc_html__( 'Your quote text is here...', 'pifagor-blocks');
$pf_author_quote = get_field( 'pf_author_quote' );
$pf_text_color_quote = get_field( 'pf_text_color_quote' );
$pf_background_color_quote = get_field( 'pf_background_color_quote' );
$pf_color_author_quote = get_field( 'pf_color_author_quote' );
$pf_unique_id = get_field( 'pf_unique_id' );

if ( get_field('pf_icon_quote') == true ) {
	$pf_icon_display = 'pf_icon_display';
	} else {
	$pf_icon_display = 'pf_icon_display_none';
}

?>

<style type="text/css">
.custom-style-block-<?=$pf_unique_id?> {
	color: <?=$pf_text_color_quote?> !important;
    background: <?=$pf_background_color_quote?> !important;
}

.custom-style-author-<?=$pf_unique_id?> {
	color: <?=$pf_color_author_quote?> !important;
}
</style>

<div class="pf-quote-block custom-style-block-<?php echo $pf_unique_id; ?>">

	<div class="<?php echo $pf_icon_display; ?>">
		<svg class="brxe-svg" id="brxe-ogdswa" xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="none"
			viewBox="0 0 40 32">
			<path fill="#000FFF"
				d="M22.5 17.5V0H40v17.75c0 12-11.25 13.5-11.25 13.5l-1.5-3.5s5-.75 6-4.75c1-3-1-5.5-1-5.5H22.5ZM0 17.5V0h17.5v17.75c0 12-11.25 13.5-11.25 13.5l-1.5-3.5s5-.75 6-4.75c1-3-1-5.5-1-5.5H0Z">
			</path>
		</svg>
	</div>

	<div class="pf-quote-block__container" >
	<p class="pf-quote-block__content"><?php echo $pf_text_quote; ?></p>
	<p class="pf-quote-block__author custom-style-author-<?php echo $pf_unique_id; ?>"><?php echo $pf_author_quote; ?></p>
		</div>

	<svg class="pf-quote-block__line" id="brxe-gazqhj" xmlns="http://www.w3.org/2000/svg" width="175" height="9"
		viewBox="0 0 175 9" fill="none">
		<path d="M0 6H81L87.5 0L94 6H175V9H0V6Z" fill="#000FFF"></path>
	</svg>

</div>
