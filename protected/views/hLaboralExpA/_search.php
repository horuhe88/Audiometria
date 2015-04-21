<?php
/* @var $this HLaboralExpAController */
/* @var $model HLaboralExpA */
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
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base'); ?>
		<?php echo $form->textField($model,'base',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seguimiento'); ?>
		<?php echo $form->textField($model,'seguimiento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'confirmacion'); ?>
		<?php echo $form->textField($model,'confirmacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_ser_empresa'); ?>
		<?php echo $form->textField($model,'t_ser_empresa',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_trabajo'); ?>
		<?php echo $form->textField($model,'sec_trabajo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exp_ruido'); ?>
		<?php echo $form->textField($model,'exp_ruido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_servicio'); ?>
		<?php echo $form->textField($model,'t_servicio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_diar_trabajo'); ?>
		<?php echo $form->textField($model,'t_diar_trabajo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_prot_auditiva'); ?>
		<?php echo $form->textField($model,'e_prot_auditiva',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilizacion'); ?>
		<?php echo $form->textField($model,'utilizacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_protector'); ?>
		<?php echo $form->textField($model,'tipo_protector',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tr_anterior_ruido'); ?>
		<?php echo $form->textField($model,'tr_anterior_ruido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tr_ruido'); ?>
		<?php echo $form->textField($model,'tr_ruido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->