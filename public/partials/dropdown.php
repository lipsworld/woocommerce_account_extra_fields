<?php
$dropdown_field = get_user_meta( get_current_user_id(), 'billing_' . $this->generate_name( $field[ 'woocommerce_extra_fields_setting_id_name' ] ), TRUE );
?>
<p class="form-row form-row-<?php echo $field[ 'woocommerce_extra_fields_setting_id_position' ] ?>">
	<label for="reg_<?php echo $field_name ?>">
		<?php _e( $field[ 'woocommerce_extra_fields_setting_id_name' ], $this->text_domain ); ?>
		<?php if ( $field[ 'woocommerce_extra_fields_setting_id_required' ] == 'yes' ) : ?>
			<span class="required">*</span>
		<?php endif; ?>
	</label>
	<select name="billing_<?php echo $this->generate_name( $field[ 'woocommerce_extra_fields_setting_id_name' ] ) ?>"
	        id="">
		<option value=""><?php _e( 'Choose value', $this->text_domain ) ?></option>
		<?php foreach ( $field as $f ): ?>
			<?php if ( is_array( $f ) ): ?>
				<option
					value="<?php echo $f[ 'woocommerce_extra_fields_setting_name_value' ] ?>"
					<?php
					if ( isset( $dropdown_field ) )
						selected( $f[ 'woocommerce_extra_fields_setting_name_value' ], $dropdown_field )
					?>
					><?php echo $f[ 'woocommerce_extra_fields_setting_name_label' ] ?></option>
			<?php endif; ?>
		<?php endforeach; ?>
	</select>
</p>