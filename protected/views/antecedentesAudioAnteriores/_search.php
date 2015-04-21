<?php
/* @var $this AntecedentesAudioAnterioresController */
/* @var $model AntAudioAnter */
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
		<?php echo $form->label($model,'fecha_examen'); ?>
		<?php echo $form->textField($model,'fecha_examen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultado'); ?>
		<?php echo $form->textField($model,'resultado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_examen'); ?>
		<?php echo $form->textField($model,'lugar_examen',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exa_audio_complemen'); ?>
		<?php echo $form->textField($model,'exa_audio_complemen',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->