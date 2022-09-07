<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title() ?></title>

    <?php wp_head() ?>
</head>
<?php global $redux_demo; ?>
<body>

<div id="p_prldr">
	<div class="contpre">
		<span class="svg_anm"></span><br>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo.png" width="100%" height="100%" alt="logo">
		Зачекайте<br>
		<small>йде, завантаження ...</small>
	</div>
</div>

<header class="container-fluid p-0">
    <div class="d-flex flex-column fixed-nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg_blue">
            <a class="navbar-brand" href="http://novobud/">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo.png" alt="logo">
                <pre class="break cancel"><?php bloginfo('name'); ?></pre>
            </a>
            <div class="justify-content-end telephone">
<!--                <p><a href="tel:+380983906419">+38(098)-390-64-19</a></p>-->
                <p><a href="tel:+380983906419"><?php echo $redux_demo['phone-number']; ?></a></p>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav mr-auto"></div>

	            <?php
	            if( has_nav_menu( 'head_menu' )) {

		            wp_nav_menu( array(
			            'theme_location' => 'head_menu',
			            'container'      => false,
			            'menu_class'     => 'navbar-nav text-center',
//			            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
			            'depth' => 2,
//			            'walker' => new My_Nav(),

		            ) );
	            }
	            ?>

            </div>
        </nav>
    </div>
</header>
