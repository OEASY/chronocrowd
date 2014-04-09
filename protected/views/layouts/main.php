<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php Yii::app()->bootstrap->register(); ?>
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
<?php echo TbHtml::tabs(array(
    array('label' => 'Home', 'url' => array('Site/Index'), 'active' => true),
    array('label' => 'Contact', 'url' => array('Site/Contact')),
    array('label' => 'login', 'url' => array('Site/Login')),
    array('label' => 'Registration', 'url' => array('Users/Create')),
    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout')),
)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Yogesh Bansal.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
