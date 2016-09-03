<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="360">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" href="/favicon.png" sizes="32x32">
	<?php wp_head(); ?>
	</head>
	<?php if (isset($post->post_name)) { $slug = $post->post_name; } else { $slug = 'other'; } ?>
	<body <?php body_class($slug); ?> id="page" >

		<div id="preloader">
			<div class="ui active dimmer">
    		<div class="ui large loader"></div>
  		</div>
		</div>

		<header role="banner">

				<nav id="nav" class="ui fixed menu" role="navigation">
					<div class="ui container">
						<a class="logo" href="<?php echo get_site_url(); ?>">
							<?php include( 'library/svg/logo.svg' ); ?>
						</a>
						<div class="item">
							<button class="browse">
                <span class="browse-inner"></span>
                <span class="text">Меню</span>
            	</button>
						</div>
						<div class="menu">
							<a class="item" href="/#portfolio">Работы</a>
							<a class="item" href="/#services">Услуги</a>
							<a class="item" href="/#team">Мы</a>
							<a class="item" href="/#contact">Контакты</a>
						</div>
						<a class="item right phone" href="tel:+78124020029" >+7 (812) 402-00-29</a>
					</div>
				</nav>

		</header>
