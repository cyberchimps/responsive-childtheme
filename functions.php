<?php

function responsive_mobile_top_social_icons( ) { ?>
	<div id="social-icons-container" class="header-social-icons">
		<?php echo responsive_mobile_get_social_icons() ?>
	</div><!-- #social-icons-container-->
<?php }
add_action( 'responsive_mobile_container_top', 'responsive_mobile_top_social_icons' );
