<?php
/* @var $this ExRuidoELaboralController */
/* @var $model ExRuidoELaboral */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ex-ruido-elaboral-form',
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
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discoteca'); ?>
		<?php echo $form->textField($model,'discoteca',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'discoteca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'casa'); ?>
		<?php echo $form->textField($model,'casa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'casa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motociclismo'); ?>
		<?php echo $form->textField($model,'motociclismo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'motociclismo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rep_musica'); ?>
		<?php echo $form->textField($model,'rep_musica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'rep_musica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arma_fuego'); ?>
		<?php echo $form->textField($model,'arma_fuego',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'arma_fuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otro'); ?>
		<?php echo $form->textField($model,'otro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'otro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frec_exposicion'); ?>
		<?php echo $form->textField($model,'frec_exposicion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'frec_exposicion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->