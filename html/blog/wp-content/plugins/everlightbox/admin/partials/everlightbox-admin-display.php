<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.greentreelabs.net
 * @since      1.0.0
 *
 * @package    Everlightbox
 * @subpackage Everlightbox/admin/partials
 */

?>

<div class="wrap" id="everlightbox-settings">
	<h1>EverlightBox settings</h1>
	<?php echo cmb2_metabox_form($this->metabox_id, $this->option_key) ?>

	<div id="greentreelabs-plugins" style="display:none" class="el-tab-4 el-to-hide">
		<p>Try also our awesome galleries:</p>
		<div class="gtl-item">
			<img src="<?php echo plugin_dir_url( __FILE__ ) ?>../images/final-tiles.jpg">
			<div class="text">
				<h3>Final Tiles Gallery</h3>
				<p>Gallery plugin with 2 available layouts: <strong>Final Tiles</strong> 
					and <strong>Masonry</strong>. The only gallery with mixed image sizes.			
				</p>
				<a class="button" href="http://1.envato.market/c/288541/275988/4415?u=http%3A%2F%2Fcodecanyon.net%2Fitem%2Ffinal-tiles-grid-gallery-for-wordpress%2F5189351&utm_source=everlightbox&utm_medium=banner&utm_campaign=EverlightBox">Read more</a>
			</div>
		</div>
		<div class="gtl-item">
			<img src="<?php echo plugin_dir_url( __FILE__ ) ?>../images/modula.jpg">
			<div class="text">
				<h3>Modula Grid Gallery</h3>
				<p>Unique gallery plugin, it creates interesting grids with your images.			
				</p>
				<a class="button" href="http://modula.greentreelabs.net/?utm_source=everlightbox&utm_medium=banner&utm_campaign=EverlightBox">Read more</a>
			</div>
		</div>
		<div class="gtl-item">
			<img src="<?php echo plugin_dir_url( __FILE__ ) ?>../images/circles.jpg">
			<div class="text">
				<h3>Circles Gallery</h3>
				<p>Three plugins in one: not only an original gallery plugin for WordPress but also a 
					responsive multi-column layout for texts and a “Team members” plugin.
				</p>
				<a class="button" href="http://circles-gallery.com/?utm_source=everlightbox&utm_medium=banner&utm_campaign=EverlightBox">Read more</a>
			</div>
		</div>
	</div>
</div>

<p class="el-footer">
	<a href="https://wordpress.org/support/plugin/everlightbox/reviews/">Rate ⭐⭐⭐⭐⭐ if you liked this plugin, thanks!</a><br>
	<br>
	EverlightBox is a proudly developed by Diego Imbriani AKA <a href="http://www.greentreelabs.net">GreenTreeLabs</a>.<br>
	Please report bugs and suggestions.	
</p>