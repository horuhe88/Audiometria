<?php
/* @var $this PacienteController */
/* @var $model Paciente */
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
		<?php echo $form->label($model,'Nombre_Apellido'); ?>
		<?php echo $form->textField($model,'Nombre_Apellido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edad'); ?>
		<?php echo $form->textField($model,'Edad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sexo'); ?>
		<?php echo $form->textField($model,'Sexo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_de_nacimiento'); ?>
		<?php echo $form->textField($model,'Fecha_de_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Barrio'); ?>
		<?php echo $form->textField($model,'Barrio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ocupacion'); ?>
		<?php echo $form->textField($model,'Ocupacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Procedencia'); ?>
		<?php echo $form->textField($model,'Procedencia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Realizacion'); ?>
		<?php echo $form->textField($model,'Fecha_Realizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->