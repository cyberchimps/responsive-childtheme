<?php
/**
 * Single Widget Template
 *
 *
 * @file           sidebar-single-widget.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-single-widget.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div class="widgets single-widget grid col-940">
		<?php responsive_widgets(); // above widgets hook ?>

				<?php if (is_active_sidebar('single-widget')) : ?>

				<?php dynamic_sidebar('single-widget'); ?>

			<?php endif; //end of single-widget ?>

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of .widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>