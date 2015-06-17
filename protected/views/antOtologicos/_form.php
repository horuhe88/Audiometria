<?php
/* @var $this AntOtologicosController */
/* @var $model AntOtologicos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ant-otologicos-form',
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
		<?php echo $form->labelEx($model,'aculenos_tinilus'); ?>
		<?php echo $form->textField($model,'aculenos_tinilus',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'aculenos_tinilus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_acu_tin'); ?>
		<?php echo $form->textField($model,'tipo_acu_tin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_acu_tin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vertigo'); ?>
		<?php echo $form->textField($model,'vertigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'vertigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'af_pos_cabeza'); ?>
		<?php echo $form->textField($model,'af_pos_cabeza',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'af_pos_cabeza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otalgia'); ?>
		<?php echo $form->textField($model,'otalgia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'otalgia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oido'); ?>
		<?php echo $form->textField($model,'oido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'oido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_continuo'); ?>
		<?php echo $form->textField($model,'d_continuo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'d_continuo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_permanente'); ?>
		<?php echo $form->textField($model,'d_permanente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'d_permanente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_superficial'); ?>
		<?php echo $form->textField($model,'d_superficial',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'d_superficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_profundo'); ?>
		<?php echo $form->textField($model,'d_profundo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'d_profundo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_trac_pabellon'); ?>
		<?php echo $form->textField($model,'d_trac_pabellon',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'d_trac_pabellon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_pres_trago'); ?>
		<?php echo $form->textField($model,'d_pres_trago',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'d_pres_trago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otorrea'); ?>
		<?php echo $form->textField($model,'otorrea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'otorrea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otorragia'); ?>
		<?php echo $form->textField($model,'otorragia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'otorragia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->textField($model,'otros',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otr_sint_otologicos'); ?>
		<?php echo $form->textField($model,'otr_sint_otologicos',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'otr_sint_otologicos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->