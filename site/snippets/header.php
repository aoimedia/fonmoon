<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" itemscope itemtype="http://schema.org/"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/"> <!--<![endif]-->
<head>
	<!-- meta information -->
	<meta charset="utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta http-equiv="imagetoolbar" content="no" />

	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

	<!-- Meta tags -->
	<meta name="title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
	<meta name="author" content="<?php echo html($page->author()) ?>" />
	<meta name="publisher" content="<?php echo html($site->title()) ?>" />
	<meta name="copyright" content="<?php echo html($site->title()) ?>" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="robots" content="noindex,nofollow" />
	<meta name="language" content="en" />

	<!-- Open Graph -->
	<meta name="DC.Title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
	<meta name="DC.Creator" content="<?php echo html($page->author()) ?>" />
	<meta name="DC.Rights" content="<?php echo html($site->title()) ?>" />
	<meta name="DC.Publisher" content="<?php echo html($site->title()) ?>" />
	<meta name="DC.Description" content="<?php echo html($page->description()) ?>"/ >
	<meta name="DC.Language" content="en" />

	<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo html($site->url()) ?>" />
	<meta property="og:image" content="<?php echo url('assets/images/facebook.jpg') ?>" />
	<meta property="og:description" content="<?php echo html($page->description()) ?>" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="<?php echo html($site->twitter()) ?>">
	<meta name="twitter:creator" content="<?php echo html($page->author()) ?>">
	<meta name="twitter:url" content="<?php echo html($site->url()) ?>">
	<meta name="twitter:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
	<meta name="twitter:description" content="<?php echo html($page->description()) ?>">

	<!-- Microsoft Windows -->
	<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true">
	<meta name="application-name" content="<?php echo html($site->title()) ?>">
	<meta name="msapplication-starturl" content="<?php echo html($site->url()) ?>"/>
	<meta name="msapplication-navbutton-color" content="white"/>

	<!-- Direct: links, xml map and rss -->
	<link rel="canonical" href="<?php echo html($page->url()) ?>" />
	<link rel="sitemap" type="application/xml" title="Sitemap" href="<?php echo url('sitemap.xml') ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="RSS Feed" />

	<!-- Who worked on this? -->
	<link type="text/plain" rel="author" href="<?php echo url('humans.txt') ?>" />

	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Styling -->
	<?php echo css('assets/css/style.css') ?>

	<!-- Extra styling -->
	<?php foreach($page->files()->findByExtension('css') as $css): ?>
	<?php echo css($css->url()) ?>
	<?php endforeach ?>

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo url('assets/images/favicons/apple-touch-icon-114x114.png') ?>" />

	<!-- Favicon for old iThings and Android -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo url('assets/images/favicons/apple-touch-icon-72x72.png') ?>" />

	<!-- Favicon for Nokia -->
	<link rel="shortcut icon" href="<?php echo url('assets/images/favicons/apple-touch-icon-72x72.png') ?>" />

	<!-- Favicon for everything else -->
	<link rel="shortcut icon" href="<?php echo url('assets/images/favicons/favicon.ico') ?>" type="image/x-icon" />

	<!-- google analytics -->
	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-9111827-29']);
		_gaq.push(['_trackPageview']);
		_gaq.push(['_trackPageLoadTime']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<?php echo js('assets/js/vendor/modernizr.custom.js'); ?>

</head>
<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<section id="design">