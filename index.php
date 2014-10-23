<?php defined('_JEXEC') or die;
require_once(JPATH_THEMES.'/blank_j3/_php/blank_j3.php');
JHtmlBootstrap::loadCss(false);
$params = $this->params;

$doc = JFactory::getDocument();
$doc->addStyleSheet('templates/blank_j3/css/reset.min.css');
if ($params->get('enable_full_bootstrap', 0)){
	$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
}
else{
	$doc->addStyleSheet('templates/blank_j3/css/bootstrap.min.css');
}
$doc->addStyleSheet('templates/blank_j3/css/typo.css');
$doc->addStyleSheet('templates/blank_j3/css/modules.css');
$doc->addStyleSheet('templates/blank_j3/css/template.css');
$doc->addScript('templates/blank_j3/js/vendor/bootstrap.min.js');
// $doc->addScript('templates/blank_j3/js/lib/jquery.magnific-popup.min.js');
$doc->addScript("//cdn.jsdelivr.net/jquery.slick/1.3.7/slick.min.js");
$doc->addScript("//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js");
$doc->addScript('templates/blank_j3/js/application.js');

$blankj3_helper = new blank_j3($this);

$menu = JFactory::getApplication()->getMenu();
$active_menu = $menu->getActive();
$default_menu = $menu->getDefault();
$frontpage = ($active_menu->id == $default_menu->id);
?>
<!DOCTYPE html>
<html dir="<?php echo $this->direction; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<?php if ($params->get('enable_full_bootstrap', 0)): ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<?php endif; ?>

		<!-- Use of Google Font -->
		<?php if ($params->get('googleFontName', '')): ?>
			<link href='//fonts.googleapis.com/css?family=<?php echo $params->get('googleFontName'); ?>' rel='stylesheet' type='text/css' />
		<?php endif; ?>

		<jdoc:include type="headj3" />

		<!--[if IE]>
			<script type="text/javascript" src="templates/blank_j3/js/lib/PIE.js"></script>
		<![endif]-->
		<!--[if lt IE 7]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body <?php if($frontpage) echo 'class="frontpage"'; ?>>
		<?php if($blankj3_helper->show_top || $blankj3_helper->show_top_left || $blankj3_helper->show_center || $blankj3_helper->show_right): ?>
		<header>
			<?php if($blankj3_helper->show_top): ?>
			<section id="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="top-modules-wrapper">
								<jdoc:include type="modules" name="top" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php endif; ?>

			<?php if($blankj3_helper->show_top_left || $blankj3_helper->show_top_center || $blankj3_helper->show_top_right): ?>
			<section id="top-blocks">
				<div class="container">
					<div class="row">
						<?php if($blankj3_helper->show_top_left): ?>
							<div class="<?php echo $blankj3_helper->class_top_left; ?>">
								<div id="top-left">
									<jdoc:include type="modules" name="top-left" />
								</div>
							</div>
						<?php endif; ?>

						<?php if($blankj3_helper->show_top_center): ?>
							<div class="<?php echo $blankj3_helper->class_top_center; ?>">
								<div id="top-center">
									<jdoc:include type="modules" name="top-center" />
								</div>
							</div>
						<?php endif; ?>

						<?php if($blankj3_helper->show_top_right): ?>
							<div class="<?php echo $blankj3_helper->class_top_right; ?>">
								<div id="top-right">
									<jdoc:include type="modules" name="top-right" />
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php endif; ?>
		</header>
		<?php endif; ?>

		<?php if($blankj3_helper->show_user1): ?>
		<section id="user1" class="<?php echo $blankj3_helper->class_user1; ?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="user1-modules-wrapper">
							<jdoc:include type="modules" name="user1" style="none"/>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if($blankj3_helper->show_user2): ?>
		<section id="user2" class="<?php echo $blankj3_helper->class_user2; ?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="user2-modules-wrapper">
							<jdoc:include type="modules" name="user2" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if($blankj3_helper->show_user3): ?>
		<section id="user3" class="<?php echo $blankj3_helper->class_user3; ?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="user3-modules-wrapper">
							<jdoc:include type="modules" name="user3" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		
		<main>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<section id="messages">
							<jdoc:include type="message" />
						</section>
					</div>

					<?php if($blankj3_helper->show_left): ?>
					<div class="<?php echo $blankj3_helper->class_left; ?>">
						<section id="left">
								<jdoc:include type="modules" name="left" />
						</section>
					</div>
					<?php endif; ?>
					
					<div class="<?php echo $blankj3_helper->getContentClass(); ?>">
						<div class="row">
							<?php if($blankj3_helper->show_content_header): ?>
							<div class="col-md-12">
								<section id="content-header">
										<jdoc:include type="modules" name="content-header" />
								</section>
							</div>
							<?php endif; ?>
							
							<div class="col-md-12">
								<article id="content">
									<jdoc:include type="component" />
								</article>
							</div>

							<?php if($blankj3_helper->show_content_footer): ?>
							<div class="col-md-12">
								<section id="content-footer">
										<jdoc:include type="modules" name="content-footer" />
								</section>
							</div>
							<?php endif; ?>
						</div>
					</div>

					<?php if($blankj3_helper->show_right): ?>
					<div class="<?php echo $blankj3_helper->class_right; ?>">
						<section id="right">
								<jdoc:include type="modules" name="right" />
						</section>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</main>
		
		<?php if($blankj3_helper->show_bottom_left || $blankj3_helper->show_bottom_center || $blankj3_helper->show_bottom_right): ?>
		<section id="bottom-blocks">
			<?php if($blankj3_helper->show_bottom_left): ?>
				<div id="bottom-left">
					<div class="container">
						<div class="row">
							<div class="<?php echo $blankj3_helper->class_bottom_left; ?>">
								<jdoc:include type="modules" name="bottom-left" />
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if($blankj3_helper->show_bottom_center): ?>
				<div id="bottom-center">
					<div class="container">
						<div class="row">
							<div class="<?php echo $blankj3_helper->class_bottom_center; ?>">
								<jdoc:include type="modules" name="bottom-center" />
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if($blankj3_helper->show_bottom_right): ?>
				<div id="bottom-right">
					<div class="container">
						<div class="row">
							<div class="<?php echo $blankj3_helper->class_bottom_right; ?>">
								<jdoc:include type="modules" name="bottom-right" />
							</div>
						</div>
					</div>	
				</div>
			<?php endif; ?>
		</section>
		<?php endif; ?>

		<?php if($blankj3_helper->show_bottom): ?>
		<section id="bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="bottom-modules-wrapper">
							<jdoc:include type="modules" name="bottom" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if($blankj3_helper->show_bottom_socials): ?>
		<section id="bottom-socials">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="bottom-socials-modules-wrapper">
							<jdoc:include type="modules" name="bottom-socials" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if($blankj3_helper->show_footer): ?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="footer-modules-wrapper">
							<jdoc:include type="modules" name="footer" />
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php endif; ?>
		<?php if($params->get('disable_scripts')): ?>
			<jdoc:include type="footj3" />
		<?php endif; ?>
	
		<!-- Counters -->
		<?php echo $blankj3_helper->getYandexMetrika(); ?>
		<?php echo $blankj3_helper->getGoogleAnalytics(); ?>
	</body>
</html>
