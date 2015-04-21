<?php
/* @var $this AntMorbidosController */
/* @var $model AntMorbidos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hip_arterial'); ?>
		<?php echo $form->textField($model,'hip_arterial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hip_colesterolemia'); ?>
		<?php echo $form->textField($model,'hip_colesterolemia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hipotiroidismo'); ?>
		<?php echo $form->textField($model,'hipotiroidismo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barotrauma'); ?>
		<?php echo $form->textField($model,'barotrauma',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diab_mellitus'); ?>
		<?php echo $form->textField($model,'diab_mellitus',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enf_renal'); ?>
		<?php echo $form->textField($model,'enf_renal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trauma_ac_agudo'); ?>
		<?php echo $form->textField($model,'trauma_ac_agudo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vibraciones'); ?>
		<?php echo $form->textField($model,'vibraciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->