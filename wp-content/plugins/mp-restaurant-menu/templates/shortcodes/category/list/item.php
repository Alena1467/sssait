<?php global $mprm_view_args, $mprm_term;

$icon = mprm_get_category_icon();
$featured_image = mprm_get_feat_image();
$image_is_available = mprm_has_category_image() && !empty($mprm_view_args['feat_img']);
$category_image_src = mprm_get_category_image('mprm-big');
$sub_categories = mprm_get_term_children($mprm_term->term_id, $mprm_term->taxonomy);

?>
<div class="mprm-menu-category <?php echo esc_attr( get_column_class($mprm_view_args['col']) );?>">
	<?php if ($image_is_available && $category_image_src): ?>
		<a href="<?php echo esc_url( get_term_link($mprm_term) ); ?>" class="mprm-link">
			<img class="mprm-category-list-image mprm-columns mprm-five" src="<?php echo esc_url( $category_image_src );?>">
		</a>
	<?php endif; ?>
	<div class="mprm-category-content <?php echo ($image_is_available && $category_image_src) ? 'mprm-columns mprm-seven' : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">
		<a href="<?php echo esc_url( get_term_link($mprm_term) ); ?>" class="mprm-link">
			<h2 class="mprm-title">
				<?php if (!empty($icon) && !empty($mprm_view_args['categ_icon'])): ?><i class="mprm-icon  <?php echo esc_attr( $icon );?>"></i><?php endif;
				if (!empty($mprm_view_args['categ_name'])) : echo esc_html( $mprm_term->name ); endif; ?>
			</h2>
		</a>
		<?php if (!empty($mprm_view_args['categ_descr'])) {
			$desc_length = isset($mprm_view_args['desc_length']) ? $mprm_view_args['desc_length'] : -1;
			$description = mprm_cut_str($desc_length, $mprm_term->description);
			if (!empty($description)) { ?>
				<p class="mprm-category-description"><?php echo wp_kses_post( $description ); ?></p>
			<?php }
		}
		if (!empty($sub_categories)) { ?>
			<div class="<?php echo esc_attr( apply_filters('mprm-category-children-class', 'mprm-category-children-wrapper mprm-category-children') ); ?>">
				<?php $category_array = array();

				foreach ($sub_categories as $key => $category) {
					$category_array[$key] = '<a href="' . esc_url( get_term_link($category) ) . '" class="' . 'mprm-child-term-' . esc_attr( $category->slug ) . '">' . esc_html( $category->name ) . '</a>';
				}

				echo implode(", ", $category_array); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
			</div>
		<?php } ?>
	</div>
</div>