<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('user_userid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_userid),array('view','id'=>$data->user_userid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_username')); ?>:</b>
	<?php echo CHtml::encode($data->user_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_password')); ?>:</b>
	<?php echo CHtml::encode($data->user_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->user_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->user_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_phone')); ?>:</b>
	<?php echo CHtml::encode($data->user_phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_address); ?>
	<br />

	*/ ?>

</div>