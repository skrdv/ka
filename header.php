<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="360">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ec008c">
	<meta name="theme-color" content="#ec008c">
	<?php wp_head(); ?>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-81026057-1', 'auto');
	ga('send', 'pageview');
	</script>
	<script type="text/javascript">
	(function (d, w, c) {
				(w[c] = w[c] || []).push(function() {
							try {
									w.yaCounter38590155 = new Ya.Metrika({
											id:38590155,
											clickmap:true,
											trackLinks:true,
											accurateTrackBounce:true,
											webvisor:true,
											trackHash:true
									});
							} catch(e) { }
					});

					var n = d.getElementsByTagName("script")[0],
							s = d.createElement("script"),
							f = function () { n.parentNode.insertBefore(s, n); };
					s.type = "text/javascript";
					s.async = true;
					s.src = "https://mc.yandex.ru/metrika/watch.js";

					if (w.opera == "[object Opera]") {
							d.addEventListener("DOMContentLoaded", f, false);
					} else { f(); }
			})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/38590155" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1623387591306408');
	fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1623387591306408&ev=PageView&noscript=1"
	/></noscript>

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
							<?php include( 'library/svg/logo_80.svg' ); ?>
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
						<div class="right phone hidden">
							<div class="item">
								<a href="tel:+78124020029">+7 (812) 402-00-29</a>
							</div>
						</div>
					</div>
				</nav>

		</header>
