<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--META-->
	<meta name="viewport" content="width=device-width initial-scale=1.0">

	<!--FONT-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,300italic,500,700,600,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!--CSS
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="se-pre-con">
		<div id="spinningTextG"><div id="spinningTextG_1" class="spinningTextG">L</div><div id="spinningTextG_2" class="spinningTextG">o</div><div id="spinningTextG_3" class="spinningTextG">a</div><div id="spinningTextG_4" class="spinningTextG">d</div><div id="spinningTextG_5" class="spinningTextG">i</div><div id="spinningTextG_6" class="spinningTextG">n</div><div id="spinningTextG_7" class="spinningTextG">g</div></div>
	</div>

	<header id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="logo">
            <a href="<?php echo home_url(); ?>" data-scroll><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="quotes logo"></a>
					</div>

	<?php
					wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'container',
							'container_id'      => '',
							'menu_class'        => 'nav-collapse',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker())
					);
			?>
				</div>
			</div>
		</div>
	</header>
