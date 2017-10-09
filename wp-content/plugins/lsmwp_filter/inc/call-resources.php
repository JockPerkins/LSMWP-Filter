<?php

function lsmwp_call_filer_resources() {
  wp_enqueue_style( 'lsmwp_filter', plugin_dir_url( FILE ) . 'lsmwp_filter/resources/styles.css' );
  wp_enqueue_script( 'lsmwp_filter', plugin_dir_url( FILE ) . 'lsmwp_filter/resources/scripts.js' );
}
