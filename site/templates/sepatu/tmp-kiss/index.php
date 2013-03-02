<?php defined('_JEXEC') or die;
/* =====================================================================
 * Template:		kwd-j-bootstrap :: for Joomla! 2.5
 * Author: 			Chris Jones-Gill - KISS Web Design
 * Version: 		1.0.1
 * Created: 		June 2012
 * This Version:	September 2012
 * Copyright:		KISS Web Design - (C) 2012 - All rights reserved
 * License:			Apache Version 2.0 http://www.apache.org/licenses/LICENSE-2.0
/* ===================================================================== */

// Load template logic
include_once (dirname(__FILE__).DS.'functions/logic.php');  
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<jdoc:include type="head" />

<?php 
// Now do the IE specific stuff 
?>

	<?php // Le HTML5 shim, for IE6-8 support of HTML5 elements ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!--[if (gte IE 6)&(lte IE 8)]>
  			<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/libs/selectivizr-min.js"></script>
	<![endif]-->
	<?php // Responsive images, for IE7-8 support of dynamic image resizing - doesn't work in IE6 ?>
	<!--[if (lt IE 9) & (gt IE 6) & (!IEMobile)]>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/mylibs/imgSizer.js"></script>
	<script>
		addLoadEvent(function() {
			imgSizer.collate();
		});

		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function() {
					if (oldonload) {
						oldonload();
					}
					func();
				}
			}
		}
	</script>
	<![endif]-->
<?php
// End of the IE specific stuff
?>

    <?php // Le touch icons ?>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
<?php if ($analytics != "UA-XXXXX-X") { ?>
<!-- http://mths.be/aab -->
<script>
			var _gaq=[['_setAccount','<?php echo htmlspecialchars($analytics); ?>'],['_trackPageview']]; 
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php } ?>
</head>

<body class="<?php echo htmlspecialchars($bodyFontFamily); ?>" data-spy="scroll" data-target="#scrollSpyNav" data-offset="120" >

<?php // Position nav-top ?>
<?php if ($navTop > 0) { ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
	        	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<i class="icon-arrow-down icon-white"></i>
				</button>
				<a class="brand" href="<?php echo $this->baseurl ?>/"><?php echo htmlspecialchars($app->getCfg('sitename'));?></a>
				<nav id="nav-top" role="navigation" class="nav-collapse collapse">
					<jdoc:include type="modules" name="nav-top" style="html5" />
				</nav>
			</div>
		</div>
	</div>
<?php } ?>
<noscript>JavaScript is unavailable or disabled. This site will still function, but some useful features will not work.</noscript>
<div id="outer-container">
<?php // Position nav-r1 ?>
<?php if ($navR1 > 0) { ?>
	<div id="navr1" class="spanall">
		<nav id="nav-r1" role="navigation" class="subnav">
			<jdoc:include type="modules" name="nav-r1" style="html5" />
		</nav>
	</div>
<?php } ?>

<?php // Row 2 positions ?>
<?php if ($row2Active > 0) { ?>
	<div id="row2" class="hero">
<div class="container">	
<?php /*		<div id="row2_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row2_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow2" data-toggle="collapse"><?php echo htmlspecialchars($rowTwoName) ?></a><br /><br />
		</div>
		<div id="collapserow2" class="collapserow2 collapse in">
*/ ?>			<header id="header-row" class="jumbotron">
				<?php // Position section-r2-1 - use as logo or header ?>
				<?php if ($sectionR2a > 0) { ?>
					<div id="section-r2-1">
						<?php if($r2aNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($logoCols); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($logoCols); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r2-1" style="html5" />
					    	</div>
					</div>
				<?php } ?>
			
				<?php // Position section-r2-2 - use as tagline (related to logo/header) ?>
				<?php if ($sectionR2b > 0) { ?>
					<aside id="section-r2-2">
						<?php if($r2bNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($taglineCols); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($taglineCols); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r2-2" style="html5" />
					    	</div>
					</aside>
				<?php } ?>
			
				<?php // Position section-r2-3 - use as search position ?>
				<?php if ($sectionR2c > 0) { ?>
					<div id="section-r2-2">
						<?php if($r2cNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($searchCols); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($searchCols); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r2-3" style="html5" />
					    	</div>
					</div>
				<?php } ?>
			
				<?php // Position section-r2-4 - no specified role ?>
				<?php if ($sectionR2d > 0) { ?>
					<div id="section-r2-4">
						<?php if($r2dNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR2d); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR2d); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r2-4" style="html5" />
					    	</div>
					</div>
				<?php } ?>
			</header>
		<?php // </div> ?>
</div>
	</div>
<?php } ?>

<?php // container for page contents ?>
<div class="container">


<?php // Position nav-r3 ?>
<?php if ($navR3 > 0) { ?>
<mmenu></mmenu>
	<div id="navr3" class="spanall">
		<div id="row3_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row3_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow3" data-toggle="collapse">Menu</a><br /><br />
		</div>
		<div id="collapserow3" class="collapserow3 collapse in">
			<nav id="scrollSpyNav" role="navigation" class="subnav">
				<jdoc:include type="modules" name="nav-r3" style="html5" />
			</nav>
		</div>
	</div>
<?php } ?>

<?php // Position section-r4 ?>
<?php if ($sectionR4 > 0) { ?>
	<div id="row4" class="spanall">
		<div id="row4_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row4_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow4" data-toggle="collapse"><?php echo htmlspecialchars($rowFourName) ?></a><br /><br />
		</div>
		<div id="collapserow4" class="collapserow4 collapse in">
			<div id="section-r4">
				<?php if($r4aNLM) { ?>
			    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR4); ?>">
			    <?php } else { ?>
			    	<div class="span<?php echo htmlspecialchars($sectionColsR4); ?>">
			    <?php } ?>
						<jdoc:include type="modules" name="section-r4" style="html5" />
			    	</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php // Position nav-r5 ?>
<?php if ($navR5 > 0) { ?>
	<div id="navr5" class="spanall">
		<nav id="nav-r5" role="navigation" class="subnav">
			<jdoc:include type="modules" name="nav-r5" style="html5" />
		</nav>
	</div>
<?php } ?>

<?php // Row 6 positions ?>
<?php if ($row6Active > 0) { ?>
	<div id="row6" class="spanall">
		<div id="row6_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row6_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow6" data-toggle="collapse"><?php echo htmlspecialchars($rowSixName) ?></a><br /><br />
		</div>
		<div id="collapserow6" class="collapserow6 collapse in">
		
			<?php // Position section-r6-1 ?>
			<?php if ($sectionR6a > 0) { ?>
				<div id="section-r6-1">
						<?php if($r6aNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR6a); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR6a); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r6-1" style="html5" />
					    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r6-2 ?>
			<?php if ($sectionR6b > 0) { ?>
				<div id="section-r6-2">
						<?php if($r6bNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR6b); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR6b); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r6-2" style="html5" />
					    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r6-3 ?>
			<?php if ($sectionR6c > 0) { ?>
				<div id="section-r6-3">
						<?php if($r6cNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR6c); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR6c); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r6-3" style="html5" />
					    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r6-4 ?>
			<?php if ($sectionR6d > 0) { ?>
				<div id="section-r6-4">
						<?php if($r6dNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR6d); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR6d); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r6-4" style="html5" />
					    	</div>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>

<?php // Row 7 positions ?>
<?php if ($row7Active > 0) { ?>
	<div id="row7" class="spanall">
		<div id="row7_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row7_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow7" data-toggle="collapse"><?php echo htmlspecialchars($rowSevenName) ?></a><br /><br />
		</div>
		<div id="collapserow7" class="collapserow7 collapse in">
	
			<?php // Position section-r7-1 ?>
			<?php if ($sectionR7a > 0) { ?>
				<div id="section-r7-1">
					<?php if($r7aNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR7a); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR7a); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r7-1" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r7-2 ?>
			<?php if ($sectionR7b > 0) { ?>
				<div id="section-r7-2">
					<?php if($r7bNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR7b); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR7b); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r7-2" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r7-3 ?>
			<?php if ($sectionR7c > 0) { ?>
				<div id="section-r7-3">
					<?php if($r7cNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR7c); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR7c); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r7-3" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r7-4 ?>
			<?php if ($sectionR7d > 0) { ?>
				<div id="section-r7-4">
					<?php if($r7dNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR7d); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR7d); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r7-4" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>

<?php // Position nav-r8 ?>
<?php if ($navR8 > 0) { ?>
	<div id="navr8" class="spanall">
		<nav id="nav-r8" role="navigation" class="subnav">
			<jdoc:include type="modules" name="nav-r8" style="html5" />
		</nav>
	</div>
<?php } ?>

<?php // Main content from Joomla ?>
<div id="mainRow" class="spanall">                               
	<?php // Position section-main-left ?>
	<?php if ($sectionMainLeft > 0) { ?>
		<div id="scrollSpyNav" class="noLeftMargin  span<?php echo htmlspecialchars($mainLeftCols); ?> onePxHigh" role="complementary">
			<jdoc:include type="modules" name="section-main-left" style="html5" />
		</div>
		<div id="section-main"role="main" class="span<?php echo htmlspecialchars($mainContentCols); ?> offset<?php echo htmlspecialchars($mainLeftCols); ?>">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
	<?php } else { ?>

		<?php // Position section-main ?>
		<div id="section-main" role="main" class="noLeftMargin span<?php echo htmlspecialchars($mainContentCols); ?>">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
	<?php } ?>

	<?php // Position section-main-right ?>
	<?php if ($sectionMainRight > 0) { ?>
		<?php if(($mainContentCols+$mainLeftCols) >= 12) { ?>
			<div id="section-main-right" class="noLeftMargin span<?php echo htmlspecialchars($mainRightCols); ?>" role="complementary">
				<jdoc:include type="modules" name="section-main-right" style="html5" />
			</div>
		<?php } else { ?>
			<div id="section-main-right" class="span<?php echo htmlspecialchars($mainRightCols); ?>" role="complementary">
				<jdoc:include type="modules" name="section-main-right" style="html5" />
			</div>
		<?php } ?>
		
	<?php } ?>
</div>


<?php // Row 10 positions ?>
<?php if ($row10Active > 0) { ?>
	<div id="row10" class="spanall">
		<div id="row10_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row10_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow10" data-toggle="collapse"><?php echo htmlspecialchars($rowTenName) ?></a><br /><br />
		</div>
		<div id="collapserow10" class="collapserow10 collapse in">
		
			<?php // Position section-r10-1 ?>
			<?php if ($sectionR10a > 0) { ?>
				<div id="section-r10-1">
					<?php if($r10aNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR10a); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR10a); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r10-1" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r10-2 ?>
			<?php if ($sectionR10b > 0) { ?>
				<div id="section-r10-2">
					<?php if($r10bNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR10b); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR10b); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r10-2" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r10-3 ?>
			<?php if ($sectionR10c > 0) { ?>
				<div id="section-r10-3">
					<?php if($r10cNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR10c); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR10c); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r10-3" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r10-4 ?>
			<?php if ($sectionR10d > 0) { ?>
				<div id="section-r10-4">
					<?php if($r10dNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR10d); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR10d); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r10-4" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>

<?php // Row 11 positions ?>
<?php if ($row11Active > 0) { ?>
	<div id="row11" class="spanall">
		<div id="row11_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row11_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow11" data-toggle="collapse"><?php echo htmlspecialchars($rowElevenName) ?></a><br /><br />
		</div>
		<div id="collapserow11" class="collapserow11 collapse in">
		
			<?php // Position section-r11-1 ?>
			<?php if ($sectionR11a > 0) { ?>
				<div id="section-r11-1">
					<?php if($r11aNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR11a); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR11a); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r11-1" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r11-2 ?>
			<?php if ($sectionR11b > 0) { ?>
				<div id="section-r11-2">
					<?php if($r11bNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR11b); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR11b); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r11-2" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r11-3 ?>
			<?php if ($sectionR11c > 0) { ?>
				<div id="section-r11-3">
					<?php if($r11cNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR11c); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR11c); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r11-3" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		
			<?php // Position section-r11-4 ?>
			<?php if ($sectionR11d > 0) { ?>
				<div id="section-r11-4">
					<?php if($r11dNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR11d); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR11d); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r11-4" style="html5" />
				    	</div>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>

<?php // Position section-r12 ?>
<?php if ($sectionR12 > 0) { ?>
	<div id="row12" class="spanall">
		<div id="row12_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row12_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow12" data-toggle="collapse"><?php echo htmlspecialchars($rowTwelveName) ?></a><br /><br />
		</div>
		<div id="collapserow12" class="collapserow12 collapse in">
		
			<div id="section-r12">
					<?php if($r12aNLM) { ?>
				    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR12); ?>">
				    <?php } else { ?>
				    	<div class="span<?php echo htmlspecialchars($sectionColsR12); ?>">
				    <?php } ?>
							<jdoc:include type="modules" name="section-r12" style="html5" />
				    	</div>
			</div>
		</div>
	</div>
<?php } ?>


<?php // Row 13 positions ?>
<?php if ($row13Active > 0) { ?>
	<div id="row13" class="spanall">
		<div id="row13_collapse_heading" class="accordion-heading visible-phone visible-tablet">
			<a id="row13_collapse_text" class="heading_hide btn btn-small-spanall" href="#collapserow13" data-toggle="collapse"><?php echo htmlspecialchars($rowThirteenName) ?></a><br /><br />
		</div>
		<div id="collapserow13" class="collapserow13 collapse in">
		
			<footer role="contentinfo" class="4modulefooter">
				<?php // Position section-r13-1 ?>
				<?php if ($sectionR13a > 0) { ?>
					<div id="section-r13-1">
						<?php if($r13aNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR13a); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR13a); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r13-1" style="html5" />
					    	</div>
					</div>
				<?php } ?>
		
				<?php // Position section-r13-2 ?>
				<?php if ($sectionR13b > 0) { ?>
					<div id="section-r13-2">
						<?php if($r13bNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR13b); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR13b); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r13-2" style="html5" />
					    	</div>
					</div>
				<?php } ?>
			
				<?php // Position section-r13-3 ?>
				<?php if ($sectionR13c > 0) { ?>
					<div id="section-r13-3">
						<?php if($r13cNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR13c); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR13c); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r13-3" style="html5" />
					    	</div>
					</div>
				<?php } ?>
			
				<?php // Position section-r13-4 ?>
				<?php if ($sectionR13d > 0) { ?>
					<div id="section-r13-4">
						<?php if($r13dNLM) { ?>
					    	<div class="noLeftMargin span<?php echo htmlspecialchars($sectionColsR13d); ?>">
					    <?php } else { ?>
					    	<div class="span<?php echo htmlspecialchars($sectionColsR13d); ?>">
					    <?php } ?>
								<jdoc:include type="modules" name="section-r13-4" style="html5" />
					    	</div>
					</div>
				<?php } ?>
			</footer>
		</div>
	</div>
<?php } ?>


<?php // Position nav-r14 ?>
<?php if ($navR14 > 0) { ?>
	<div id="navr14" class="spanall">
		<nav id="nav-r14" role="navigation" class="subnav">
			<jdoc:include type="modules" name="nav-r14" style="html5" />
		</nav>
	</div>
<?php } ?>


<?php // Position nav-bottom ?>
<?php if ($navBottom > 0) { ?>
	<div class="navbar navbar-fixed-bottom">
		<div class="navbar-inner">
			<div class="container">
	        	<button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a id="credit" class="brand" href="http://kisswebdesign.co.uk" title="KISS Web Design">KISS Web Design</a>
				<nav id="nav-bottom" role="navigation" class="nav-collapse collapse">
					<jdoc:include type="modules" name="nav-bottom" style="html5" />
				</nav>
			</div>
		</div>
	</div>
<?php } 
else { ?>
	<div id="credits" class="spanall">
		<footer id="credit" class="credit">
			<div class="spanall">
				<div class="custom">
					<hr>
					<div class="row-fluid">
						<div class="span6">
						</div>
						<div class="span6">	
							<p class="pull-right">
								This website is bought to you by <a href="http://kisswebdesign.co.uk" title="KISS Web Design">KISS Web Design</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
<?php } ?>
<noscript class="spanall">JavaScript is unavailable or disabled. This site will still function, but some useful features will not work.</noscript>
<jdoc:include type="modules" name="debug"/>

</div> <?php // container ?>
</div> <?php // outer-container ?>
<div id="scrollUp" class="btn btn-large" style="display: none;">Top</div>
<?php // Scripts ?>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/mylibs/plugins.js"></script>
    <?php // Le javascript
    // ================================================== ?>
    <?php // Placed at the end of the document so the pages load faster ?>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-affix.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/application.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/mylibs/kwd-j-bootstrap.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" charset="utf-8">
	  jQuery(document).ready(function(){
	    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
	  });
	</script>
 
</body>
</html>