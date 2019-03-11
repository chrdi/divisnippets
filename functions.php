/******** Obscure login error ********/
function custom_wordpress_error_message(){
return 'Try again.';
}
add_filter( 'login_errors', 'custom_wordpress_error_message' );

/******** reduce revisions ********/
add_filter( 'wp_revisions_to_keep', 'divi_limit_revisions', 10, 2 );
function divi_limit_revisions( $num ) { 
$num = 3;
return $num;
}
