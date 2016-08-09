<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="360">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
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

		<!-- Facebook Pixel Code -->
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
		<!-- End Facebook Pixel Code -->

		<?php // end analytics ?>

	</head>

	<?php if (isset($post->post_name)) { $slug = $post->post_name; } else { $slug = ''; } ?>

	<body <?php body_class($slug); ?> id="page-<?php echo($slug); ?>">

		<header role="banner">

				<nav id="nav" class="ui fixed menu" role="navigation">
					<div class="ui container">
						<a class="item logo" href="/">
							<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5,49.5c0.6,0,1.1,0,1.7,0C19.1,49.1,17.8,49.2,17.5,49.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.6,41.6c-0.3,0-0.6-0.1-0.7,0.2C16.1,41.7,16.6,41.9,16.6,41.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24.1,49.3c0.3,0.1,0.6-0.6,0.1-0.6C24.1,48.8,24.1,49,24.1,49.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20.7,48.5c0-0.4,0.2-0.7-0.1-0.9C20.6,47.9,20.5,48.4,20.7,48.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24,47.1c0.5,0.1,0.4-0.9,0.2-1C24.1,46.3,24,46.7,24,47.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.6,36.9c-0.1,1.4,0.1,2.7,0.1,4.1c1.3,0,3.2-0.2,4.6-0.4
									c-0.1-1.3-0.1-2.3-0.3-3.4C17.7,36.9,16,37,14.6,36.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.3,36.5c-0.1,0.6-0.3,2,0.1,2.4C13.4,38,13.6,37.3,13.3,36.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.2,40c-0.1,0.3-0.2,1,0.2,1.2C14.3,40.8,14.6,40,14.2,40z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5,42.9c-1.4,0-2.9,0-4.3,0c-0.5,1.4-0.3,4.1-0.3,5.7c1.4,0.2,3.4,0.1,4.7-0.1
									C19.8,46.7,19.6,44.6,19.5,42.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.6,48.6c0.1-0.3,0.2-1.4-0.1-1.6C13.6,47.5,13.4,48.2,13.6,48.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M27.7,44.8c0.7,0,1.8,0.3,2-0.1C29.2,44.5,28.1,44.6,27.7,44.8z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M32.2,46.9c0.1-0.1,0.3-0.9-0.1-0.9C32.1,46.3,31.9,46.8,32.2,46.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.2,32.9C5,33,4.9,33.4,4.8,33.7C5.1,33.5,5.1,33.2,5.2,32.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M31.4,50c-0.4-1.4-0.7-3-0.9-4.6c-1.2-0.1-2.9,0.2-4.5,0.1
									c-0.6,1.3-0.6,3.1-1.2,4.5H31.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.6,30.9c-0.3,0.4-0.4,0.8-0.5,1.4C5.3,31.9,5.5,31.5,5.6,30.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.5,32.1c0,0.2,0.1,0.4,0.2,0.6C7.9,32.6,7.7,32.1,7.5,32.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.8,32.1c0.1-0.1,0-0.4-0.2-0.4C7.6,31.9,7.7,32,7.8,32.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M32.5,48.7c0.2,0.4,0,1.1,0.6,1.2C32.9,49.5,33,48.9,32.5,48.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M26.4,43.5c1,0.1,2.6,0.3,3.4,0.3c-0.3-2.2-0.7-4.4-1.3-6.4c-0.3,0-0.5,0-0.8,0
									C27.2,39.3,26.8,41.4,26.4,43.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M26,42.4c0,0.5-0.5,1.4-0.1,1.6C25.9,43.5,26.3,42.6,26,42.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.7,42.3c-0.4,0.4-0.2,1.7-0.1,2.3"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M28.2,35.4c0.5,0,0.9,0,1.2,0.1C29.4,34.9,28.3,35,28.2,35.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M29.8,39.7c0.1,0.7,0.2,1.5,0.6,2C30.4,40.9,30.4,40.1,29.8,39.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M35.1,11.4c-0.2-0.1-1.1,0-1.4,0.1C34,11.6,35,11.8,35.1,11.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M35.6,7.5c-0.1-0.7-0.3-1.3-0.6-1.8C35,6.5,35.1,7.2,35.6,7.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M18.3,8.9c0.3,0,0.7,0,1,0C19.4,8.6,18.2,8.6,18.3,8.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M33.6,1.4c-0.1,0-0.3,0-0.4,0c-1,2.7-1.7,5.6-2.4,8.4c1.6,0.1,2.5-0.3,4-0.2
									C34.3,6.9,33.9,4.1,33.6,1.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M25,2c-1.9-0.2-4.8-0.1-7.2-0.1c-0.2,0-0.2,0.3-0.4,0.3C17.7,3.9,17.7,6,18,7.7
									c2.3-0.4,5-0.4,7.2-0.9C25.1,5.2,25.3,3.3,25,2z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M26.4,2.5c0-0.3,0-0.6,0-0.9c-0.4,0.1-0.3-0.2-0.6-0.2c0,0.2,0,0.4,0,0.7
									C26.4,1.9,26.1,2.5,26.4,2.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M46.9,5.4c0,0.4-0.7,1.2-0.1,1.4C46.7,6.4,47.2,5.8,46.9,5.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24.5,7.6c-0.1,0.5,1.2,0.3,1.4-0.1C25.5,7.5,24.8,7.4,24.5,7.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M42.4,17.3c0.5,0,1,0,1.3-0.2C43.2,17.1,42.5,16.9,42.4,17.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M41.6,7.4c0.4,2.7,0.8,5.5,1.2,8.2c0.1,0,0.3,0,0.4,0c1-2.7,1.7-5.5,2.4-8.4
									C44,7.1,43.1,7.5,41.6,7.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M42.6,5.5c-0.3-0.1-1.3-0.3-1.4,0.1C41.5,5.7,42.3,5.7,42.6,5.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M40.7,9.5c0.1,0.7,0.3,1.3,0.6,1.8C41.3,10.5,41.3,9.8,40.7,9.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M39.8,8.1c-0.2-0.4,0-1.1-0.5-1.1C39.3,7.5,39.5,7.8,39.8,8.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.4,4.3c0.4-0.2,1-0.8,0.8-1.2C6,3.6,5.4,3.6,5.4,4.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.5,48.4c2.6,0,4.9-0.2,7.1-0.5c0.5-2.9-0.1-6.3,0.1-9.6
									c-2.1-0.3-5.3-0.2-7.3-0.2C1.6,41.6,1.1,45.1,1.5,48.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2,37c0.7,0.1,2.1,0.4,2.7,0C4,36.9,2.6,36.9,2,37z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.6,1.9c0-0.4,0.1-1-0.2-1.1C1.4,1.1,1.2,1.8,1.6,1.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.4,49.6c0.1-0.1,0.2-0.2,0.1-0.5c-0.4-0.1-0.5,0.2-0.5,0.5
									C5.2,49.6,5.3,49.6,5.4,49.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.1,15.6c0,0.2,0,0.4,0,0.6C1.5,16.4,1.5,15.5,1.1,15.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.5,41.3c-0.3,0.2-0.3,1.1-0.1,1.6C9.8,42.7,9.7,41.6,9.5,41.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2,11.8c0,0.4-0.3,1.3,0.1,1.4C2,12.7,2.6,12,2,11.8z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.3,47.1c-0.2,0.1-0.3,0.5-0.1,0.6C10.6,47.6,10.4,47.3,10.3,47.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1,5.1c0,0.6-0.2,1.2,0.1,1.7C1,6.2,1.3,5.4,1,5.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.4,0c0.1,2.1,0,4.4,0.4,6.2c1.9-1.8,3-4.4,4.9-6.2H2.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.4,7.1C4.6,6.7,5.3,6.4,5.1,6C4.9,6.3,4.2,6.7,4.4,7.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M18.1,16.9c0.6-0.1,0.3-1.3-0.1-1.4C18,16,17.9,16.6,18.1,16.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M36.5,8.9c0.2,0.4,0,1.1,0.5,1.1C37.1,9.5,36.8,9.2,36.5,8.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9,24.8c0,0.4,0.2,0.7,0.4,1C9.6,25.6,9.5,24.8,9,24.8z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1,33.4c0.2,0.1,1,0,1.4-0.1C12.4,33.2,11,33.1,11.1,33.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.1,26.9c0.4-0.1,0-1.1-0.4-1.2C8.7,26.2,9,26.5,9.1,26.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M29.7,12.6c0,0.6-0.6,1.2-0.3,1.7C29.4,13.7,30.4,13,29.7,12.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M3.3,26.1c0.6-0.9,1-1.9,1.1-3.1C3.8,23.9,3.4,24.9,3.3,26.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.8,12.3c0.2,0.6,0.5,1.2,1,1.4C6.7,13,6.2,12.7,5.8,12.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M29.6,10.2c0,0.5-0.5,1.1-0.1,1.4C29.4,11.2,30.2,10.4,29.6,10.2z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21.1,45.1c0,0.6-0.2,0.9,0.1,1.4C21.1,46,21.4,45.4,21.1,45.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M3.4,27.6c-0.3,0.2-0.6,1.1-0.7,1.7C3.2,28.9,3.2,28.2,3.4,27.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M47.7,33.8c0-2.7,0.6-4.8,0.6-7.6c-2.1,0.1-4.3,0.2-6.5,0.2
									c-0.3,2.4,0.1,5.4-0.2,7.8c-0.7-0.1-1.6,0.1-2-0.1c0-4.8-0.2-10.5,0.2-15.2c0.6,0.1,1.2-0.3,1.6-0.2c1.4,0.4,0.1,4,0.3,5.3
									c1.8,0.5,4.5,0.3,6.7,0.5c0.1-1.5,0.2-4.1,0.1-5.6c0.4-0.1,1-0.1,1.5-0.1V0h-0.1c-1.6,6-3.3,11.9-5.1,17.9c-1.6,0-2.4,0-3.9,0
									c-1-6.2-2.4-12-3.7-17.9h-1.8c1,6.1,2.4,11.9,3.7,17.7c-0.5,0.1-2.1,0.3-2.4-0.1c-1-1.4-0.9-3.8-1.4-5.7c-1.6,0.1-2.9-0.2-4.5-0.1
									c-0.8,1.6-1.1,3.5-1.7,5.2c-0.7,0.1-1.8,0.5-2.8,0.2c1.6-5.8,3.2-11.6,4.9-17.3h-9.9c2,0,4.1,0.1,6.1,0c0,3.2-0.2,6.2-0.3,9.3
									L25,9.5c-0.6,0-1.2,0.1-1.8,0.1L18.8,10c-0.2,0-0.5,0-0.8,0.1c-0.2,2.4,0.6,4.8,0.7,7.2c-0.7,0-1.1,0.4-2,0.2
									C15.9,11.6,15.4,5.8,14.5,0c0.2,0,0.4,0,0.6,0h-4.8C8.3,2.8,6.2,5.5,4,8.1c2.2,3.4,5.3,5.8,8,8.8c-1.2,0.1-2.3,0.5-3.2,0.2
									c-1-0.3-2.3-2.5-3-3.3c-1.1-1.3-2.1-2.5-3-3.3c-0.4,2.3,0.6,4.7,0.4,6.9c-0.8,0.1-1.9,0.1-2.4,0C0.6,11.5,0.4,5.7,0,0h0v32.9
									c1.8-4.7,3.5-9.6,5.2-14.4c1.4,0,2.7,0,4.1,0c1.1,5.3,2.8,10.7,4.1,15.5c-0.7,0.2-2.3,0.2-2.8-0.1C9.3,29.7,8.4,25.2,7.2,21
									c-1.5,4.2-2.7,8.5-4.5,12.4c-0.8,0.1-1.9,0.3-2.7,0.1v2.3c3.3-0.1,7.6-0.1,11.1,0c-0.1,4.7-0.1,9.8-0.2,14.1H13
									c-0.1-4.7-0.1-10.3,0-14.6c2.2-0.3,4.9-0.3,6.9,0.1c1.3,0.9,1.9,5.3,0.4,6.5c0.3,0.5,1.1,0.7,1.3,1.3c0.6,1.4,0.3,6.1-0.7,6.8
									c0,0,0,0-0.1,0h1.4c1.4-5.1,3.1-9.9,4.4-15c1-0.2,2.5-0.4,3.5-0.1C31.4,40,32.7,45,34,50h16V33.7C49.5,33.9,48.4,34,47.7,33.8z
									 M7.9,34.1c-0.3-1.3-0.7-2.7-1-4c-0.5,1.3-0.9,2.7-1.4,4H4.1c0.6-1.7,1.2-3.4,1.9-5.2h1.8c0.4,1.7,0.9,3.5,1.3,5.2H7.9z M13.5,12
									c-0.3-2-0.4-4.6-0.9-6.2c-0.7,2.1-1,4.5-1.7,6.5c-0.7,0.1-1.6,0.3-2.3,0.3c-0.5-2-0.7-4.7-1-6.8c-0.1-0.4-0.2-0.8,0-1.1
									c0.4,0,0.8,0,1.2,0c0.5,2,0.3,4.6,1.1,6.5c0.8-2,1.2-4.2,1.7-6.4c0.7-0.2,1.4-0.1,2.1-0.2c0.5,2.3,0.7,4.9,1.1,7.3
									C14.5,11.9,13.9,12,13.5,12z M24.3,34.1c-3.3-0.1-7-0.3-10.1-0.2c-0.2-5,0-10.4,0.1-15.5c3.2,0.1,6.7,0,9.8,0.3
									c0.2,0.5,0,1.4-0.1,1.9c-2.6,0.2-5.2-0.4-7.4,0c-0.5,1.3-0.3,3.4-0.3,5.1c2.1,0.5,5,0.2,7.2,0.6c-0.1,0.7,0.2,1.1,0.2,1.7
									c-2.2,0.3-4.6,0-6.8-0.1c-0.5,1-0.3,2.6-0.3,3.9c2.1,0.5,5.7,0.2,7.8,0.2C24.7,32.7,24.5,33.6,24.3,34.1z M29.1,18.8
									C30,19,31.1,19,32.2,19c0,0.1,0,0.1,0,0.2c-0.3,0-0.6,0.1-0.7,0.2c0.2,0,0.5,0,0.7,0c0,0.3,0,0.5,0,0.8c-1,0-2.1,0.1-3.2,0.1
									C29.1,19.8,29.1,19.3,29.1,18.8z M37.9,34.1c-0.6,0.1-1.7,0-2.3-0.1c-0.1-4.2,0.2-8.6-0.1-12.6c-2.1,4-4,8.2-6,12.3
									c-1.2-0.1-2.6,0.1-3.5,0c-0.3-4.8-0.2-9.8-0.2-14.9c0.7-0.2,1.7-0.1,2.2,0.1c0.1,3.4,0,7.8,0.5,11.3c2.1-3.7,4-7.6,6-11.5
									c1.1,0,2.4-0.2,3.3-0.1c0.1,0,0.2,0,0.2,0C37.8,23.5,38,29.3,37.9,34.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M49.1,1.1c-0.1,0.1-0.6,0.7,0,0.7C48.9,1.5,49.5,1.2,49.1,1.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.7,32.6c-0.4,0-0.4,0.2-0.4,0.5c0.1,0,0.3,0,0.4,0C2.7,32.9,2.7,32.7,2.7,32.6z
									"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4,37.2c0-0.1-0.1-0.1-0.2-0.1c0,0.5,0,1,0.1,1.4
									C20.4,39.4,20.4,37.6,20.4,37.2z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M40.5,20.4c0.4,0.1,0.5-0.6,0.1-0.5C40.5,20,40.5,20.1,40.5,20.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M42.7,25.9c0.2,0.1,1.1,0.2,1.1-0.1C43.5,25.9,42.9,25.7,42.7,25.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M30.5,4.6c-0.2,1.2-1,2.5-0.8,3.7C30,7.1,30.8,5.9,30.5,4.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M40.2,24.3c0.1-0.1,0.3-1-0.1-1C39.8,23.6,40,24.1,40.2,24.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,5.5C8.5,5.5,8.6,5.9,8.7,6C8.8,5.9,8.7,5.6,8.7,5.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M40.2,21.5C40,21.6,40,21.8,40,22.1C40.4,22.2,40.3,21.5,40.2,21.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M48,24.8c-0.7-0.1-2-0.3-2.4,0.2C46.5,25,47.4,25,48,24.8z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M39.9,0c0.7,1.4,0.7,3.4,1.1,5.1c1.6-0.1,2.9,0.2,4.5,0.1
									c0.8-1.5,1.1-3.4,1.7-5.2H39.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M49.4,21.5c-0.1,0.7-0.1,1.5-0.1,2.3C49.7,23.2,49.5,22.2,49.4,21.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M27.3,15.9c0.1-0.1,0.6-0.7,0-0.7C27.4,15.6,26.9,15.8,27.3,15.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M38.6,17.3c-0.3-0.1-1.4-0.3-1.5,0.1C37.4,17.6,38.2,17.4,38.6,17.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M49.5,30.3c0.1-0.4,0.5-1.3,0-1.6C49.6,29.3,49.1,29.9,49.5,30.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M48,33.3c0.2,0,0.7,0.4,0.7,0C48.7,33.1,48,33.1,48,33.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M46.9,2.7c0,0.5-1,1.3-0.3,1.7C46.6,3.8,47.2,3.2,46.9,2.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17.7,27.4c-0.2,0.1-0.6-0.1-0.6,0.1C17.2,27.6,17.7,27.6,17.7,27.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5,9.7c0.3-0.3-0.1-0.8-0.1-1.1C13.3,8.8,13.4,9.4,13.5,9.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.7,11.6c0.2,0,0.5,0,0.6-0.1C14.2,11.4,13.7,11.5,13.7,11.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9,33c0,0.1,0.1,0.2,0.1,0.3c0.8-0.2,2,0.1,2.5-0.3
									C18.8,32.8,17.5,32.8,16.9,33z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7,20.5c0,0.6-0.1,1.1,0.1,1.7C14.8,21.8,15.3,20.8,14.7,20.5z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7,29.4c-0.1,0.2-0.3,1.3,0.1,1.3C15.7,30.3,15.9,29.6,15.7,29.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,11.7c0.1-0.2,0.1-0.4,0.1-0.7C8.7,11.1,8.7,11.4,8.7,11.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M37.2,32.7c0.5-0.1,0.2-0.9,0.1-1.2C37,31.7,37.3,32.3,37.2,32.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,7.8c-0.3,0.1,0,0.5-0.1,0.8C8.8,8.5,8.8,8,8.7,7.8z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12,7c0.2-0.1,0.1-0.4,0.1-0.6C12.1,6.6,12,6.7,12,7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1,11c0.2-0.1,0.1-0.4,0.1-0.6C11.1,10.6,11.1,10.8,11.1,11z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7,4.7c-0.2,0.2,0.5,0.1,0.7,0.1C13.4,4.5,12.8,4.8,12.7,4.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M31.6,26.1c0.5-0.1,0.3-0.8,0.7-1C31.9,24.9,31.7,25.7,31.6,26.1z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M32.9,25.3c0.5-0.2,0.6-0.8,0.9-1.2C33.3,24,33,24.8,32.9,25.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M36,29.6c0.4-0.8,0.3-1.9,0.3-3C35.7,27.1,36.2,28.6,36,29.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M37.2,24.7c0.4-0.1,0.2-0.6,0.2-1C37,23.8,37.3,24.4,37.2,24.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M37,21.3c0-0.5,0-1-0.2-1.3C36.6,20.3,36.4,21.4,37,21.3z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M29.6,19.9c0.1,0.1,0.7,0.1,0.8-0.1C30.1,19.9,29.7,19.8,29.6,19.9z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21.8,33.6c0.4,0,0.7,0.2,1.2,0.1C23.1,33.2,21.9,33.3,21.8,33.6z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M45.9,12.4c0.2-1.2,1-2.5,0.8-3.7C46.3,9.9,45.5,11.1,45.9,12.4z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M27.4,21c-0.2,0-0.2,0.1-0.4,0.1c0.1,0.4-0.1,1,0.4,1.2
									C27.4,21.9,27.4,21.5,27.4,21z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M27.4,27.7c0.3,0,0.2-0.3,0.2-0.6C27.2,27.1,27.5,27.5,27.4,27.7z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M26.6,25.4c0.3-0.1,0-0.6,0-0.8C26,24.7,26.6,25.2,26.6,25.4z"/>
							</g>
							</svg>
						</a>
						<div class="item browse">
							<span class="close"></span>
							<span class="text">Меню</span>
						</div>
						<div class="menu">
							<a class="item" href="/#portfolio">Работы</a>
							<a class="item" href="/#services">Услуги</a>
							<?php /* <a class="item" href="/#team">Мы</a> */ ?>
							<a class="item" href="/#contact">Контакты</a>
						</div>
						<div class="item right phone"><a href="tel:+78124020029">+7 (812) 402-00-29</a></div>
					</div>
				</nav>

		</header>
