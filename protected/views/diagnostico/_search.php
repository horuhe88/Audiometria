<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */
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
		<?php echo $form->label($model,'idf_diag_evaluador'); ?>
		<?php echo $form->textField($model,'idf_diag_evaluador',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer250'); ?>
		<?php echo $form->textField($model,'ADer250'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer250'); ?>
		<?php echo $form->textField($model,'ODer250'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq250'); ?>
		<?php echo $form->textField($model,'AIzq250'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq250'); ?>
		<?php echo $form->textField($model,'OIzq250'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer500'); ?>
		<?php echo $form->textField($model,'ADer500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer500'); ?>
		<?php echo $form->textField($model,'ODer500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq500'); ?>
		<?php echo $form->textField($model,'AIzq500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq500'); ?>
		<?php echo $form->textField($model,'OIzq500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer1000'); ?>
		<?php echo $form->textField($model,'ADer1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer1000'); ?>
		<?php echo $form->textField($model,'ODer1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq1000'); ?>
		<?php echo $form->textField($model,'AIzq1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq1000'); ?>
		<?php echo $form->textField($model,'OIzq1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer2000'); ?>
		<?php echo $form->textField($model,'ADer2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer2000'); ?>
		<?php echo $form->textField($model,'ODer2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq2000'); ?>
		<?php echo $form->textField($model,'AIzq2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq2000'); ?>
		<?php echo $form->textField($model,'OIzq2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer3000'); ?>
		<?php echo $form->textField($model,'ADer3000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer3000'); ?>
		<?php echo $form->textField($model,'ODer3000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq3000'); ?>
		<?php echo $form->textField($model,'AIzq3000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq3000'); ?>
		<?php echo $form->textField($model,'OIzq3000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer4000'); ?>
		<?php echo $form->textField($model,'ADer4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer4000'); ?>
		<?php echo $form->textField($model,'ODer4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq4000'); ?>
		<?php echo $form->textField($model,'AIzq4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq4000'); ?>
		<?php echo $form->textField($model,'OIzq4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer6000'); ?>
		<?php echo $form->textField($model,'ADer6000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer6000'); ?>
		<?php echo $form->textField($model,'ODer6000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq6000'); ?>
		<?php echo $form->textField($model,'AIzq6000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq6000'); ?>
		<?php echo $form->textField($model,'OIzq6000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADer8000'); ?>
		<?php echo $form->textField($model,'ADer8000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ODer8000'); ?>
		<?php echo $form->textField($model,'ODer8000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AIzq8000'); ?>
		<?php echo $form->textField($model,'AIzq8000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OIzq8000'); ?>
		<?php echo $form->textField($model,'OIzq8000'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->