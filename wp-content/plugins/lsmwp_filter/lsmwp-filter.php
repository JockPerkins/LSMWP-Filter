<?php
   /*
   Plugin Name: LSMWP Filter
   Plugin URI: http://www.littlestarmedia.com
   Description: filters posts by category
   Version: 0.1
   Author: Jock Perkins
   License: GPL2
   */

// Implement the styles and scripts
include( 'inc/call-resources.php' );
// Create filter bar
include( 'inc/filter-bar.php' );

if ( ! is_admin() ) {
  lsmwp_call_filer_resources();
  lsmwp_create_filter_bar();
}
