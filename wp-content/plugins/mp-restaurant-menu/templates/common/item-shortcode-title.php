<?php global $mprm_view_args; ?>

<?php if (mprm_get_template_mode() == "theme") { ?>
	<div class="mprm-content-container mprm-title">
		<?php if (!empty($mprm_view_args['link_item'])) { ?>
			<a href="<?php echo esc_url( get_permalink($mprm_menu_item->ID) );?>"><?php echo esc_html( $mprm_menu_item->post_title )?></a>
		<?php } else { ?>
			<b><?php echo esc_html( $mprm_menu_item->post_title );?></b>
		<?php } ?>
	</div>
<?php } else { ?>
	<h3 class="mprm-title">
		<?php if (!empty($mprm_view_args['link_item'])) { ?>
			<a href="<?php echo esc_url( get_permalink($mprm_menu_item->ID) ); ?>"><?php echo esc_html( $mprm_menu_item->post_title );?></a>
		<?php } else { ?>
			<?php echo esc_html( $mprm_menu_item->post_title );?>
		<?php } ?>

	</h3>
<?php } ?>

