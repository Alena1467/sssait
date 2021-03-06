<?php
global $mprm_login_redirect;
if (!is_user_logged_in()) : ?>
	<?php
	mprm_print_errors(); ?>
	<form id="mprm_login_form" class="mprm_form" action="" method="post">
		<fieldset>
			<p><span><legend><?php esc_html_e('Log into Your Account', 'mp-restaurant-menu'); ?></legend></span></p>
			<?php do_action('mprm_login_fields_before'); ?>
			<div class="mprm-login-fields">
				<p>
					<label for="mprm_user_login"><?php esc_html_e('Username or Email', 'mp-restaurant-menu'); ?></label>
					<input name="mprm_user_login" id="mprm_user_login" class="required mprm-input" required type="text" title="<?php esc_attr_e('Username or Email', 'mp-restaurant-menu'); ?>"/>
				</p>
				<p>
					<label for="mprm_user_pass"><?php esc_html_e('Password', 'mp-restaurant-menu'); ?></label>
					<input name="mprm_user_pass" id="mprm_user_pass" class="password required mprm-input" required type="password"/>
				</p>
				<p>
					<input type="hidden" name="redirect" value="<?php echo esc_url($mprm_login_redirect); ?>"/>
					<input type="hidden" name="mprm_login_nonce" value="<?php echo wp_create_nonce('mprm-login-nonce'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>"/>
					<input type="hidden" name="mprm_action" value="user_login"/>
					<input id="mprm_login_submit" type="submit" class="mprm_submit" value="<?php esc_attr_e('Log In', 'mp-restaurant-menu'); ?>"/>
				</p>
			</div>
			<p class="mprm-lost-password">
				<a href="<?php echo wp_lostpassword_url(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" title="<?php esc_attr_e('Lost Password', 'mp-restaurant-menu'); ?>">
					<?php esc_html_e('Lost Password?', 'mp-restaurant-menu'); ?>
				</a>
			</p>
			<?php do_action('mprm_login_fields_after'); ?>
		</fieldset>
	</form>
<?php else : ?>
	<p class="mprm-logged-in"><?php esc_html_e('You are already logged in', 'mp-restaurant-menu'); ?></p>
<?php endif; ?>