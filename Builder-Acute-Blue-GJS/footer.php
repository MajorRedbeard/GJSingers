<?php


function render_footer() {
	$ithemes_link = '<a href="http://wavelengthmedia.ca/" title="Wavelength Media">Wavelength Media</a>';
	
	$footer_credit = sprintf( __( 'Created by %2$s', 'it-l10n-Builder' ), $builder_link, $ithemes_link );
	$footer_credit = apply_filters( 'builder_footer_credit', $footer_credit );
	
?>
	<div class="alignleft">
		<strong><?php bloginfo( 'name' ); ?></strong><br />
		<?php printf( __( 'Copyright &copy; %s All Rights Reserved', 'it-l10n-Builder' ), date( 'Y' ) ); ?>
	</div>
	<div class="alignright">
		<?php echo $footer_credit; ?>
	</div>
	<?php wp_footer(); ?>
<?php
	
}

add_action( 'builder_layout_engine_render_footer', 'render_footer' );

?>