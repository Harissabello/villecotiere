<?php
/**
 * The style "default" of the Socials
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.2
 */

$args = get_query_var('trx_addons_args_sc_socials');

$icon_present = '';
$socials_default = !is_array($args['icons']) || count($args['icons'])==0 || (count($args['icons'])==1 && count($args['icons'][0])==1)
						? trx_addons_get_socials_links()
						: '';
if ($socials_default || (is_array($args['icons']) && count($args['icons'])) > 0 && count($args['icons'][0]) > 1) {
	?><div <?php if (!empty($args['id'])) echo ' id="'.esc_attr($args['id']).'"'; ?> 
		class="sc_socials sc_socials_<?php
				echo esc_attr($args['type']);
				if (!empty($args['align'])) echo ' sc_align_'.esc_attr($args['align']);
				if (!empty($args['class'])) echo ' '.esc_attr($args['class']);
				?>"<?php
		if (!empty($args['css'])) echo ' style="'.esc_attr($args['css']).'"';
	?>><?php
	
		trx_addons_sc_show_titles('sc_socials', $args);
	
		?><div class="socials_wrap"><?php
	
		if ($socials_default) {
			trx_addons_show_layout($socials_default);
		} else {
			foreach ($args['icons'] as $item) {
				$icon = !empty($item['icon_type']) && !empty($item['icon_' . $item['icon_type']]) && $item['icon_' . $item['icon_type']] != 'empty' ? $item['icon_' . $item['icon_type']] : '';
				if (!empty($icon) && strpos($icon_present, $item['icon_type'])===false)
					$icon_present .= (!empty($icon_present) ? ',' : '') . $item['icon_type'];
				if (!empty($icon) && !empty($item['link'])) {
					?><span class="social_item<?php if (!empty($item['with_caption']) && (int)$item['with_caption'] == 1) echo ' '.esc_attr('social_item_with_caption'); ?>"><a href="<?php echo esc_url($item['link']); ?>" target="_blank" class="social_icons"><span class="<?php echo esc_attr($icon); ?>"></span><span class="social_item_caption"><?php if (((!empty($item['with_caption']) && $item['with_caption'] == 1)) && !empty($item['caption'])) trx_addons_show_layout($item['caption']); ?></span> </a></span><?php
				}
			}
		}
		
		?></div><!-- /.socials_wrap --><?php
	
		trx_addons_sc_show_links('sc_icons', $args);
	
	?></div><!-- /.sc_socials --><?php
	
	trx_addons_load_icons($icon_present);
}
?>