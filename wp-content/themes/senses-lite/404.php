<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Senses Lite
 */

 ?>
 
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <style>
html, body {
    height: 100%;
}
.main {
    height: 100%;
    width: 100%;
    display: table;
}
.wrapper {
    display: table-cell;
    height: 100%;
    vertical-align: middle;
}
</style>
</head>

<body id="error-page">
       

<div class="main">
<div class="wrapper">
  <div class="error-box">
  <p class="error404 text-center"><?php esc_html_e( '404', 'senses-lite' ); ?></p>
  <p class="error-title text-center"><?php esc_html_e( 'Page Not Found', 'senses-lite' ); ?></p>
  <p class="error-message text-center"><?php esc_html_e( 'It appears the page you were wanting to see is either missing, no longer available, or another problem has caused this error.', 'senses-lite' ); ?></p>
  <p class="text-center"><a class="error-button btn" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'senses-lite' ); ?></a></p>
  </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>