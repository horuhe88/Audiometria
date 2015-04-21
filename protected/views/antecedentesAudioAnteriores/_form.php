<?php
/* @var $this AntecedentesAudioAnterioresController */
/* @var $model AntAudioAnter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ant-audio-anter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_examen'); ?>
		<?php echo $form->textField($model,'fecha_examen'); ?>
		<?php echo $form->error($model,'fecha_examen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultado'); ?>
		<?php echo $form->textField($model,'resultado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'resultado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_examen'); ?>
		<?php echo $form->textField($model,'lugar_examen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lugar_examen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exa_audio_complemen'); ?>
		<?php echo $form->textField($model,'exa_audio_complemen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'exa_audio_complemen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->