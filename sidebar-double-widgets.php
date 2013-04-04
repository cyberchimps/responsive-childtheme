<?php
/**
 * Double Widgets Template
 *
 *
 * @file           sidebar-double-widgets.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-double-widgets.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div class="widgets double-widgets">

		<div class="grid col-460">
		<?php responsive_widgets(); // above widgets hook ?>

			<?php if (is_active_sidebar('double-widget-1')) : ?>

				<?php dynamic_sidebar('double-widget-1'); ?>

			<?php endif; //end of double-widget-1 ?>

		<?php responsive_widgets_end(); // responsive after widgets hook ?>
		</div><!-- end of .col-460 -->

		<div class="grid col-460 fit">
		<?php responsive_widgets(); // responsive above widgets hook ?>
			
			<?php if (is_active_sidebar('double-widget-2')) : ?>

				<?php dynamic_sidebar('double-widget-2'); ?>

			<?php endif; //end of double-widget-2 ?>
			
		<?php responsive_widgets_end(); // after widgets hook ?>
		</div><!-- end of .col-460 fit -->

	</div><!-- end of .widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>