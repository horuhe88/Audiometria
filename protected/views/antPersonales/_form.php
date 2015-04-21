<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ant-personales-form',
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
		<?php echo $form->labelEx($model,'trat_farmacologico'); ?>
		<?php echo $form->textField($model,'trat_farmacologico',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'trat_farmacologico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trat_atuberculosis'); ?>
		<?php echo $form->textField($model,'trat_atuberculosis',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'trat_atuberculosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trat_aglucosidos'); ?>
		<?php echo $form->textField($model,'trat_aglucosidos',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'trat_aglucosidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enf_ORL'); ?>
		<?php echo $form->textField($model,'enf_ORL',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'enf_ORL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fumador'); ?>
		<?php echo $form->textField($model,'fumador',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fumador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_cigarrillos_dia'); ?>
		<?php echo $form->textField($model,'num_cigarrillos_dia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'num_cigarrillos_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alcohol'); ?>
		<?php echo $form->textField($model,'alcohol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alcohol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emf_afec_otica'); ?>
		<?php echo $form->textField($model,'emf_afec_otica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emf_afec_otica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inter_quirurgica'); ?>
		<?php echo $form->textField($model,'inter_quirurgica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'inter_quirurgica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->