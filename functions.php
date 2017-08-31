<?php

/*
Plugin Name: Display Post ID
GitHub Plugin URI: https://github.com/nwcybersolutions/display-post-id/
Description: Displays Column Containing Post ID for Pages, Posts, and Custom Post Types.
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.2
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Display Post ID
Domain Path: /languages
*/
add_filter( 'manage_posts_columns', 'revealid_add_id_column', 5 );
add_action( 'manage_posts_custom_column', 'revealid_id_column_content', 5, 2 );


function revealid_add_id_column( $columns ) {
   $columns['revealid_id'] = 'ID';
   return $columns;
}

function revealid_id_column_content( $column, $id ) {
  if( 'revealid_id' == $column ) {
    echo $id;
  }
}
