<?php
/* @var $this UsersController */
/* @var $model Users */
?>

<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_userid=>array('view','id'=>$model->user_userid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->user_userid)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

    <h1>Update Users <?php echo $model->user_userid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>