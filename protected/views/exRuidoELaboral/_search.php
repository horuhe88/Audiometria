<?php
/* @var $this ExRuidoELaboralController */
/* @var $model ExRuidoELaboral */
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
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discoteca'); ?>
		<?php echo $form->textField($model,'discoteca',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'casa'); ?>
		<?php echo $form->textField($model,'casa',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motociclismo'); ?>
		<?php echo $form->textField($model,'motociclismo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rep_musica'); ?>
		<?php echo $form->textField($model,'rep_musica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arma_fuego'); ?>
		<?php echo $form->textField($model,'arma_fuego',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otro'); ?>
		<?php echo $form->textField($model,'otro',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frec_exposicion'); ?>
		<?php echo $form->textField($model,'frec_exposicion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->