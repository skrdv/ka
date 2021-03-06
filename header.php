<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="360">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" href="/favicon.png" sizes="32x32">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<?php
if(is_single()):
	$pre = 'case';
	$slug = $post->post_name;
elseif(is_home()):
	$pre = 'home';
	$slug = '';
else:
	$pre = '';
	$slug = '';
endif;
?>
<body <?php body_class($slug); ?> >
	<div class="preloader"></div>
	<header class="header" role="banner">
		<nav class="nav container" role="navigation">
			<a class="logo" href="<?php echo get_site_url(); ?>">
				<?php include( 'library/svg/logo.svg' ); ?>
			</a>
			<button class="browse">
				<span class="browse-inner"></span>
				<span class="text">Меню</span>
			</button>
			<div class="menu">
				<a class="item" href="/#portfolio">Проекты</a>
				<a class="item" href="/#services">Услуги</a>
				<a class="item" href="/#team">Мы</a>
				<a class="item" href="/#contact">Контакты</a>
			</div>
			<a class="phone" href="tel:+78124020029" >+7 (812) 402-00-29</a>
		</nav>
	</header>