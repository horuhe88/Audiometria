<?php
/* @var $this AntOtologicosController */
/* @var $model AntOtologicos */
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
		<?php echo $form->label($model,'aculenos_tinilus'); ?>
		<?php echo $form->textField($model,'aculenos_tinilus',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_acu_tin'); ?>
		<?php echo $form->textField($model,'tipo_acu_tin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vertigo'); ?>
		<?php echo $form->textField($model,'vertigo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'af_pos_cabeza'); ?>
		<?php echo $form->textField($model,'af_pos_cabeza',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otalgia'); ?>
		<?php echo $form->textField($model,'otalgia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oido'); ?>
		<?php echo $form->textField($model,'oido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_continuo'); ?>
		<?php echo $form->textField($model,'d_continuo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_permanente'); ?>
		<?php echo $form->textField($model,'d_permanente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_superficial'); ?>
		<?php echo $form->textField($model,'d_superficial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_profundo'); ?>
		<?php echo $form->textField($model,'d_profundo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_trac_pabellon'); ?>
		<?php echo $form->textField($model,'d_trac_pabellon',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_pres_trago'); ?>
		<?php echo $form->textField($model,'d_pres_trago',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otorrea'); ?>
		<?php echo $form->textField($model,'otorrea',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otorragia'); ?>
		<?php echo $form->textField($model,'otorragia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otros'); ?>
		<?php echo $form->textField($model,'otros',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otr_sint_otologicos'); ?>
		<?php echo $form->textField($model,'otr_sint_otologicos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->