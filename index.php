<?
	$inclPage = ($_REQUEST['page'] ? $_REQUEST['page'] : 'homepage');
	
	function nav(){       
		$nav = array(
			"Home" => "homepage",
			"Event" => "event",
			"Homecoming" => "homecoming",
			"Profile" => "profile",
			"Your Profile" => "your-profile"
		);
		
		$base = ($_REQUEST['page'] ? $_REQUEST['page'] : 'homepage');
		
		foreach($nav as $name => $page){
			if($base == $page){
				$navBuild .= "<li class=\"active\"><a href=\"./index.php?page=$page\">$name</a></li>\n";
			} else {
				$navBuild .= "<li><a href=\"./index.php?page=$page\">$name</a></li>\n";
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
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

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
							<li><a href="http://www.facebook.com">Facebook</a></li>
							<li><a href="http://www.twitter.com">Twitter</a></li>
							<li><a href="http://www.linkedin.com">LinkedIn</a></li>
							<li><a href="#rss">RSS</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<h1 class="brand"><a href="./index.php">University of Phoenix Alumni Association</a></h1>
			
			<nav id="site">
				<ul class="nav nav-pills">
					<?=nav();?>
				</ul>
			</nav>
			
		</header>

		<div class="container-fluid">
			<? include_once('pages/'.$inclPage.'.php'); ?>
		</div><!--/.fluid-container-->
		
		<footer>
			<p>&copy; Company 2012</p>
		</footer>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>

	</body>
</html>