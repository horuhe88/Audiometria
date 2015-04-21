<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Apellido'); ?>
		<?php echo $form->textField($model,'Nombre_Apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre_Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edad'); ?>
		<?php echo $form->textField($model,'Edad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
		<?php echo $form->textField($model,'Sexo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_de_nacimiento'); ?>
		<?php echo $form->textField($model,'Fecha_de_nacimiento'); ?>
		<?php echo $form->error($model,'Fecha_de_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Barrio'); ?>
		<?php echo $form->textField($model,'Barrio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ocupacion'); ?>
		<?php echo $form->textField($model,'Ocupacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Ocupacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Procedencia'); ?>
		<?php echo $form->textField($model,'Procedencia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Procedencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Realizacion'); ?>
		<?php echo $form->textField($model,'Fecha_Realizacion'); ?>
		<?php echo $form->error($model,'Fecha_Realizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->