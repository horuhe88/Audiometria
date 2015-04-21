<?php
/* @var $this Valor_DiagnosticoController */
/* @var $model ValDiagnostico */
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
		<?php echo $form->label($model,'oido'); ?>
		<?php echo $form->textField($model,'oido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frecuencia'); ?>
		<?php echo $form->textField($model,'frecuencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'via_aerea'); ?>
		<?php echo $form->textField($model,'via_aerea',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'via_osea'); ?>
		<?php echo $form->textField($model,'via_osea',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->