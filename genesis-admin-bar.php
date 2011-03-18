<?php 
/*
Plugin Name: Genesis Admin Bar
Version: 0.1
Plugin URI: http://remkusdevries.com/plugins/genesis-admin-bar/
Description: The plugin adds resources links related the Genesis Framework to the admin bar .
Author: Remkus de Vries
Author URI: http://remkusdevries.com/
*/

function fst_genesis_admin_bar_menu() {
	global $wp_admin_bar;

	$wp_admin_bar->add_menu( array( 'id'		=> 'fst_genesis_admin_bar', 
									'title' 	=> __( 'Genesis' ), 
									'href'  	=> get_admin_url('#'), 
									)
							);
	$wp_admin_bar->add_menu( array( 'parent'	=> 'fst_genesis_admin_bar', 
									'id' 		=> 'fst-gen-support', 
									'title' 	=> __( 'Genesis Support' ), 
									'href' 		=> 'http://www.studiopress.com/support', 
									'meta' 		=> array( 'target' => '_blank' ) 
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst_genesis_admin_bar', 
									'id' 		=> 'fst-gen-dev', 
									'title' 	=> __( 'Genesis Codex' ), 
									'href' 		=> 'http://dev.studiopress.com', 
									'meta' 		=> array( 'target' => '_blank' ) 
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst_genesis_admin_bar', 
									'id' 		=> 'fst-gen-studiopress', 
									'title' 	=> __( 'StudioPress' ), 
									'href' 		=> 'http://www.studiopress.com', 
									'meta' 		=> array( 'target' => '_blank' )
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-dev', 
									'id' 		=> 'fst-gen-sitemap', 
									'title' 	=> __( 'Dev.StudioPress Sitemap' ), 
									'href' 		=> 'http://dev.studiopress.com/sitemap', 
									'meta' 		=> array( 'target' => '_blank' ) 
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-dev', 
									'id' 		=> 'fst-gen-hooks', 
									'title' 	=> __( 'Genesis Hooks' ), 
									'href' 		=> 'http://dev.studiopress.com/hook-reference', 
									'meta' 		=> array( 'target' => '_blank' ) 
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-dev', 
									'id' 		=> 'fst-gen-filters', 
									'title' 	=> __( 'Genesis Filters' ), 
									'href' 		=> 'http://dev.studiopress.com/filter-reference', 
									'meta' 		=> array( 'target' => '_blank' )
									)
							);	
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-dev', 
									'id' 		=> 'fst-gen-functions', 
									'title' 	=> __( 'Genesis Functions' ), 
									'href' 		=> 'http://dev.studiopress.com/function-reference', 
									'meta' 		=> array( 'target' => '_blank' ) 
									) 
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-dev', 
									'id' 		=> 'fst-gen-shortcodes', 
									'title' 	=> __( 'Genesis Shortcodes' ), 
									'href' 		=> 'http://dev.studiopress.com/shortcode-reference', 
									'meta' 		=> array( 'target' => '_blank' ) 
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-dev', 
									'id' 		=> 'fst-gen-visual', 
									'title' 	=> __( 'Visual Markup'), 
									'href' 		=> 'http://dev.studiopress.com/visual-markup-guide', 
									'meta'		=> array( 'target' => '_blank' )
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-studiopress', 
									'id' 		=> 'fst-gen-themes', 
									'title' 	=> __( 'StudioPress Themes' ), 
									'href' 		=> 'http://www.studiopress.com/themes', 	
									'meta'		=> array( 'target' => '_blank' )
									)
							);
	$wp_admin_bar->add_menu( array( 'parent' 	=> 'fst-gen-studiopress', 
									'id' 		=> 'fst-gen-plugins', 
									'title' 	=> __( 'StudioPress Plugins' ), 
									'href' 		=> 'http://www.studiopress.com/plugins', 
									'meta'		=> array( 'target' => '_blank' ) 
									) 
							);
			
}
add_action( 'admin_bar_menu', 'fst_genesis_admin_bar_menu', 96 );