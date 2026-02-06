<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div id="section_freeplugins" class="postbox">
	<div class="inside">
		<div id="design_customization_settings" class="format-settings">
			<div class="format-setting-wrap">

				<h2><?php esc_html_e( 'Free Install Plugins', 'gallery-lightbox-slider' ); ?></h2>
				<hr>
				<div style="height:250px;display:block;" class="glgloader glgloaderclass"><span
						style="font-size:12px;position:relative;top:145px;"><?php esc_html_e( 'Retrieving data from server, please wait...', 'gallery-lightbox-slider' ); ?></span>
				</div>
				<div style="display:none;" id="glg_free_plugins_page"></div>

			</div>
		</div>
	</div>
</div>
