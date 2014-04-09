<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_userid',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_username',array('span'=>5,'maxlength'=>50)); ?>

                            <?php echo $form->textFieldControlGroup($model,'user_firstname',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_lastname',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_email',array('span'=>5,'maxlength'=>75)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_phone',array('span'=>5,'maxlength'=>20)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_address',array('span'=>5,'maxlength'=>150)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->