<?php defined('_JEXEC') or die; 

JHtml::_('bootstrap.framework');
JHtmlBootstrap::loadCss(false);

$doc = JFactory::getDocument();
$doc->addStyleSheet('templates/blank_j3/css/jcss.php');
$doc->addScript('templates/blank_j3/js/application.js');

$params = $this->params;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
	<?php if ($params->get('wrap-edges')) : ?>	
		<div class="wrapper wrap-border">
	<?php else : ?>
		<div class="wrapper">
	<?php endif ?>	
			<div class="container">
				<?php if ($this->countModules('top')) : ?>
				<div class="row">
					<div class="span12 drop" id="top">
						<jdoc:include type="modules" name="top" style="none"/>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if ($this->countModules('top-left or top-center or top-right')) : ?>
					<div class="row">
				<?php endif; ?>
				<?php if ($this->countModules('top-left')) : ?>
					<div class="<?php echo $params->get('top-left-size', 'span3'); ?> drop" id="top-left">
						<jdoc:include type="modules" name="top-left" style="none"/>
					</div>
				<?php endif; ?>
				<?php if ($this->countModules('top-center')) : ?>
					<div class="<?php echo $params->get('top-center-size', 'span5'); ?> drop" id="top-center">
						<jdoc:include type="modules" name="top-center" style="none"/>
					</div>
				<?php endif; ?>
				<?php if ($this->countModules('top-right')) : ?>
					<div class="<?php echo $params->get('top-right-size', 'span4'); ?> drop" id="top-right">
						<jdoc:include type="modules" name="top-right" style="none"/>
					</div>
				<?php endif; ?>
				<?php if ($this->countModules('top-left or top-center or top-right')) : ?>
					</div>
				<?php endif; ?>
				
				<?php if ($this->countModules('menu-top')) : ?>
				<div class="row">
					<div class="span12">
						<div class="navbar navbar-static-top">
							<div class=""id="navbar-inner">
								<jdoc:include type="modules" name="menu-top" style="none"/>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>

				<?php if ($this->countModules('slider')) : ?>
				<div class="row">
					<div class="span12 drop" id="slider">
						<jdoc:include type="modules" name="slider" style="none"/>
					</div>
				</div>
				<?php endif ?>
				
				<?php if ($this->countModules('menu-bottom')) : ?>
				<div class="row">
					<div class="span12">
						<div class="navbar navbar-static-top">
							<div class=""id="navbar-inner">
								<jdoc:include type="modules" name="menu-bottom" style="none"/>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>

				<?php if ($this->countModules('breadcrumbs')) : ?>
				<div class="breadcrumbs">
					<div class=""id="breadcrumbs-inner">
						<jdoc:include type="modules" name="breadcrumbs" style="none"/>
					</div>
				</div>
				<?php endif; ?>
				
				<!--  CONTENT -->
				<div class="row">
					<?php if ($this->countModules('left and right')) : ?>
						<div class="span3 drop" id="left">
					<?php elseif ($this->countModules('left')) : ?>
						<div class="span4 drop" id="left">
					<?php else : ?>
						<div class="span0 drop" id="left">
					<?php endif; ?>						
							<jdoc:include type="modules" name="left" style="default"/>
						</div>
					<?php if ($this->countModules('left and right')) : ?>
						<div class="span6">
					<?php elseif ($this->countModules('left or right')) : ?>
						<div class="span8">
					<?php else : ?>
						<div class="span12">
					<?php endif; ?>
							<jdoc:include type="message" />
							<?php if ($this->countModules('content-header')) : ?>
								<div class= drop""id="content-header">
									<jdoc:include type="modules" name="content-header" style="default"/>
								</div>
							<?php endif; ?>
							<jdoc:include type="component" />
							<?php if ($this->countModules('content-footer')) : ?>
								<div class= drop""id="content-footer">
									<jdoc:include type="modules" name="content-footer" style="default"/>
								</div>
							<?php endif; ?>
						</div>
					<?php if ($this->countModules('left and right')) : ?>
						<div class="span3 drop" id="right">
					<?php elseif ($this->countModules('right')) : ?>
						<div class="span4 drop" id="right">
					<?php else : ?>
						<div class="span0 drop" id="right">
					<?php endif; ?>	
							<jdoc:include type="modules" name="right" style="default"/>
						</div>
				</div>					
				<!-- !CONTENT -->

				<?php if ($this->countModules('bottom1 and bottom2 and bottom3')) : ?>
				<div class="row bottom">
					<div class="span4 drop" id="bottom1">
						<jdoc:include type="modules" name="bottom1" style="default"/>
					</div>
					<div class="span4 drop" id="bottom2">
						<jdoc:include type="modules" name="bottom2" style="default"/>
					</div>
					<div class="span4 drop" id="bottom3">
						<jdoc:include type="modules" name="bottom3" style="default"/>
					</div>
				<?php elseif($this->countModules('bottom1 and bottom2')) :?>
					<div class="span4 drop" id="bottom1">
						<jdoc:include type="modules" name="bottom1" style="default"/>
					</div>
					<div class="span8 drop" id="bottom2">
						<jdoc:include type="modules" name="bottom2" style="default"/>
					</div>
				<?php elseif($this->countModules('bottom2 and bottom3')) :?>
					<div class="span6 drop" id="bottom2">
						<jdoc:include type="modules" name="bottom2" style="default"/>
					</div>
					<div class="span6 drop" id="bottom3">
						<jdoc:include type="modules" name="bottom3" style="default"/>
					</div>
				<?php elseif($this->countModules('bottom1 and bottom3')) :?>
					<div class="span8 drop" id="bottom1">
						<jdoc:include type="modules" name="bottom1" style="default"/>
					</div>
					<div class="span4 drop" id="bottom3">
						<jdoc:include type="modules" name="bottom3" style="default"/>
					</div>
				</div>
				<?php elseif($this->countModules('bottom1')) :?>
					<div class="span12 drop" id="bottom1">
						<jdoc:include type="modules" name="bottom1" style="default"/>
					</div>
				<?php elseif($this->countModules('bottom2')) :?>
					<div class="span12 drop" id="bottom2">
						<jdoc:include type="modules" name="bottom2" style="default"/>
					</div>
				<?php elseif($this->countModules('bottom3')) :?>
					<div class="span12 drop" id="bottom3">
						<jdoc:include type="modules" name="bottom3" style="default"/>
					</div>
				<?php endif; ?>

				<?php if ($this->countModules('footer')) : ?>
				<div class="row">
					<div class="span12 drop" id="footer">
						<jdoc:include type="modules" name="footer" style="none"/>
					</div>
				</div>
				<?php endif; ?>

				<!--new! -->
				<?php if ($params->get('socialButtons')) : ?>
					<div class="row">
						<div class="span12 social-buttons">
							<?php $p = $params->get('twitter'); if (!empty($p)) : ?>
								<a href="<?php echo $params->get('twitter'); ?>" class="social-btn" id="twitter">twitter</a>
							<?php endif; ?>

							<?php $p = $params->get('facebook'); if (!empty($p)) : ?>
								<a href="<?php echo $params->get('facebook'); ?>" class="social-btn" id="facebook">facebook</a>
							<?php endif; ?>

							<?php $p = $params->get('vk'); if (!empty($p)) : ?>
								<a href="<?php echo $params->get('vk'); ?>" class="social-btn" id="vk">vk</a>
							<?php endif; ?>

							<?php $p = $params->get('youtube'); if (!empty($p)) : ?>
								<a href="<?php echo $params->get('youtube'); ?>" class="social-btn" id="youtube">youtube</a>
							<?php endif; ?>

							<?php $p = $params->get('skype'); if (!empty($p)) : ?>
								<a href="skype:<?php echo $params->get('skype'); ?>" class="social-btn" id="skype"><?php echo $params->get('skype'); ?></a>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
	</body>
</html>