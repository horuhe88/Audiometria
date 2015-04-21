<?php
/* @var $this HLaboralExpAController */
/* @var $model HLaboralExpA */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hlaboral-exp-a-form',
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
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base'); ?>
		<?php echo $form->textField($model,'base',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seguimiento'); ?>
		<?php echo $form->textField($model,'seguimiento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'seguimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmacion'); ?>
		<?php echo $form->textField($model,'confirmacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'confirmacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_ser_empresa'); ?>
		<?php echo $form->textField($model,'t_ser_empresa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'t_ser_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_trabajo'); ?>
		<?php echo $form->textField($model,'sec_trabajo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sec_trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exp_ruido'); ?>
		<?php echo $form->textField($model,'exp_ruido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'exp_ruido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_servicio'); ?>
		<?php echo $form->textField($model,'t_servicio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'t_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_diar_trabajo'); ?>
		<?php echo $form->textField($model,'t_diar_trabajo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'t_diar_trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_prot_auditiva'); ?>
		<?php echo $form->textField($model,'e_prot_auditiva',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'e_prot_auditiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utilizacion'); ?>
		<?php echo $form->textField($model,'utilizacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'utilizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_protector'); ?>
		<?php echo $form->textField($model,'tipo_protector',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_protector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tr_anterior_ruido'); ?>
		<?php echo $form->textField($model,'tr_anterior_ruido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tr_anterior_ruido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tr_ruido'); ?>
		<?php echo $form->textField($model,'tr_ruido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tr_ruido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->