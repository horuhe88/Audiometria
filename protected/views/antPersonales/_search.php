<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */
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
		<?php echo $form->label($model,'trat_farmacologico'); ?>
		<?php echo $form->textField($model,'trat_farmacologico',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trat_atuberculosis'); ?>
		<?php echo $form->textField($model,'trat_atuberculosis',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trat_aglucosidos'); ?>
		<?php echo $form->textField($model,'trat_aglucosidos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enf_ORL'); ?>
		<?php echo $form->textField($model,'enf_ORL',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumador'); ?>
		<?php echo $form->textField($model,'fumador',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_cigarrillos_dia'); ?>
		<?php echo $form->textField($model,'num_cigarrillos_dia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alcohol'); ?>
		<?php echo $form->textField($model,'alcohol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emf_afec_otica'); ?>
		<?php echo $form->textField($model,'emf_afec_otica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inter_quirurgica'); ?>
		<?php echo $form->textField($model,'inter_quirurgica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->