<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BrasilienInKoln
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<title>Brasilien in Köln e.V</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brasilieninkoln' ); ?></a>

	<header>

		<?php if ( is_front_page() ) {	?>

		<div class="header-hero"> <!-- Header background -->

		<?php } ?>

			<section class="header-bar"> <!-- Header bar with navigation -->

				<div class="header-container wrapper grid-12">

					<h1 class="header-logo">BrasilienInKöln</h1> <!-- Logo image -->

					<!-- Responsive menu buttom -->
					<input class="menu-btn" type="checkbox" id="menu-btn" />
					<label class="menu-icon" for="menu-btn">
						<span class="navicon"></span>
					</label>

					<nav class="menu-complete">

						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>

						<ul class="sm-menu"> <!-- Social Media menu -->
							<li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/images/face.png" alt=""></a></li>
							<li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/images/insta.png" alt=""></a></li>                           
						</ul>

					</nav>

				</div>
				
			</section>

			<?php if ( is_front_page() ) {	?>				

			<section class="header-wel"> <!-- Header body with welcome -->

				<h1>Herzlich<br>Willkommen!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt elit sed justo sodales lacinia. Nunc convallis neque at arcu tempus volutpat. Donec bibendum imperdiet ex, ac venenatis diam blandit in. Nam dictum ex lorem, non pulvinar purus aliquam et. Sed laoreet pretium metus in sodales. Sed at purus vel nisi suscipit consectetur.</p>

			</section>			

		</div>

		<?php } ?>
		
	</header><!-- Header -->

	<div id="content" class="site-content">
