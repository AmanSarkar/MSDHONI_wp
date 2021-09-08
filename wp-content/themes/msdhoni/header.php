<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package msdhoni
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resources/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resources/css/utils.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resources/css/carousel.css">
    <script src="<?php echo get_template_directory_uri(); ?>/resources/js/carousel.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
            <ul class="mypa">
                <li>Home</li>
                <li>Catagory</li>
                <li>About</li>
            </ul>
			</header>      
			<?php wp_body_open(); ?>		
