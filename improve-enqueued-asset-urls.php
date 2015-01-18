<?php
/**
 * Plugin Name: Improve Enqueued Asset URLs
 * Plugin URI:
 * Description: Improve caching for browsers by improving enqueued asset URLs
 * Version: 1.0.0
 * Author: Timothy Wood (@codearachnid)
 * Author URI: http://www.codearachnid.com
 * Author Email: tim@imaginesimplicity.com
 * Text Domain: 'improved-enqueued-asset-urls'
 * License:
 *
 *     Copyright 2013 Imagine Simplicity (tim@imaginesimplicity.com)
 *     License: GNU General Public License v3.0
 *     License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @author codearachnid
 *
 */
 
if ( ! defined( 'ABSPATH' ) ) die( '-1' );

function improved_enqueued_asset_urls( $src ){
	
	$param_keys_to_remove = apply_filters( 'improved_enqueued_asset_urls_keys', array( 'ver' ) );
	$pattern = apply_filters( 'improved_enqueued_asset_urls_pattern', '/\?%1$s(=[^&]*)?|&%1$s(\=[^&]*)?(?=&|$)|^%1$s(\=[^&]*)?(&|$)/' );
	$patterns = array();

	foreach( $param_keys_to_remove as $key ){
		$patterns[] = sprintf( $pattern, $key );
	}

	return apply_filters( 'improved_enqueued_asset_urls', preg_replace($patterns, '', $src), $param_keys_to_remove, $pattern );
}

add_filter( 'script_loader_src', 'improved_enqueued_asset_urls', 100, 1 );
add_filter( 'style_loader_src', 'improved_enqueued_asset_urls', 100, 1 );
