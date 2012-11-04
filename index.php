<?
	if (!empty($_SERVER['SUBDOMAIN_DOCUMENT_ROOT'])) {
		$_SERVER['DOCUMENT_ROOT'] = $_SERVER['SUBDOMAIN_DOCUMENT_ROOT'];
	}
	
	$inclPage = ($_REQUEST['page'] ? $_REQUEST['page'] : 'homepage');
	
	function nav(){       
		$nav = array(
			"Home" => "homepage",
			"Events" => "event",
			"Homecoming" => "homecoming",
			"Your Profile" => "your-profile",
			"Components" => "components",
			"Login" => "login"
		);
		
		$base = ($_REQUEST['page'] ? $_REQUEST['page'] : 'homepage');
		
		$last_item = end($nav);
		$last_item = each($nav);
		reset($nav);
		
		foreach($nav as $name => $page){
			$lastIndicator = "not-last";
			if($page == $last_item['value'] && $name == $last_item['key']){
				$lastIndicator = "last";
			}
			
			if($base == $page){
				$navBuild .= "<li class=\"active $lastIndicator\"><a href=\"./index.php?page=$page\">$name</a></li>\n";
			} else {
				$navBuild .= "<li class=\"$lastIndicator\"><a href=\"./index.php?page=$page\">$name</a></li>\n";
			}
		}
		
		return $navBuild;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Alumni Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="/statics/alumni/global/css/bootstrap.css" rel="stylesheet">
		<!--<link href="/css/bootstrap-responsive.css" rel="stylesheet">-->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="../assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		
		<!-- Stylesheet includes to be concatenated into global.css, or included conditionally. Must load after Bootstrap. -->
		<link href="/statics/alumni/global/css/core.css" rel="stylesheet">
		<link href="/statics/alumni/global/css/typography.css" rel="stylesheet">
		<link href="/statics/alumni/global/css/frame.css" rel="stylesheet">
		<link href="/statics/alumni/global/css/components/style.css" rel="stylesheet">
		<link href="/statics/alumni/global/css/components/modules.css" rel="stylesheet">
		<link href="/statics/alumni/global/css/components/carousel.css" rel="stylesheet">
		<link href="/statics/alumni/global/css/components/events.css" rel="stylesheet">
		<link href="/statics/alumni/global/css/components/forms.css" rel="stylesheet">
	</head>

	<body>
		
		<header>
			<nav id="toolbar">
				<div class="navbar">
					<div class="navbar-inner">
						<form class="navbar-search pull-right">
							<input type="text" class="search-query" placeholder="Search">
						</form>
						<ul class="nav nav-pills pull-right">
							<li class="active"><a href="#">Login</a></li>
							<li><a href="#about">Register</a></li>
							<li><a href="#contact">Contact Us</a></li>
							<li><a href="http://www.facebook.com"><img src="/statics/alumni/global/img/icon-tool_facebook.png" alt="Facebook" /></a></li>
							<li><a href="http://www.twitter.com"><img src="/statics/alumni/global/img/icon-tool_twitter.png" alt="Twitter" /></a></li>
							<li><a href="http://www.linkedin.com"><img src="/statics/alumni/global/img/icon-tool_li.png" alt="LinkedIn" /></a></li>
							<li class="last"><a href="#rss"><img src="/statics/alumni/global/img/icon-tool_rss.png" alt="RSS" /></a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<div class="container">
			<h1 class="brand"><a href="./index.php">University of Phoenix Alumni Association</a></h1>
			
			<nav id="site">
				<ul class="nav nav-pills">
					<?=nav();?>
				</ul>
			</nav>
			</div>
		</header>

		<div class="container">
			<? include_once($_SERVER['DOCUMENT_ROOT'].'/pages/'.$inclPage.'.php'); ?>
		</div><!--/.fluid-container-->
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="span6">
						<div class="wrap-shim">
							<p>
							&copy;2012 University of Phoenix, Inc. All rights reserved.<br />
							Users of this site agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
							</p>
							<div itemscope itemtype="//schema.org/Organization">
								<span itemprop="name">University of Phoenix Alumni Association</span>
								<span itemprop="telephone">800.795.2586 <strong>Phone</strong></span><br />
								<span itemprop="faxNumber">602.643.0552 <strong>Fax</strong></span><br />
								<span itemprop="email"><a href="mailto:alumni@phoenix.edu">alumni@phoenix.edu</a></span>
							</div>
						</div>
					</div>
					<div class="span7 offset3">
						<nav id="footer">
							<ul class="nav nav-pills pull-right">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">UOPX</a></li>
								<li><a href="#">FAQ</a></li>
								<li class="last"><a href="#">eCampus Library</a></li>
							</ul>
						</nav>
						<nav id="footer-social">
							<ul class="nav nav-pills pull-right">
								<li><a id="fb" href="http://www.facebook.com">Facebook</a></li>
								<li><a id="twitter" href="http://www.twitter.com">Twitter</a></li>
								<li><a id="linkedin" href="http://www.linkedin.com">LinkedIn</a></li>
								<li><a id="rss" href="#">RSS</a></li>
								<li class="last"><a id="phx-connect" href="#">Phoenix Connect</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</footer>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="/statics/alumni/global/js/bootstrap.js"></script>
		<script src="/statics/alumni/global/js/custom.js"></script>

	</body>
</html>