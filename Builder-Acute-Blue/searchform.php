<form role="search" method="get" id="searchform" action="<?php echo get_option( 'home' ); ?>/">
	<div>
		<input type="text" value="<?php echo esc_attr( apply_filters( 'the_search_query', get_search_query() ) ); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="<?php echo esc_attr__( 'Search', 'it-l10n-Builder-Acute-Blue' ); ?>" />
	</div>
</form>
