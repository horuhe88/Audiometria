<?php
/* @var $this AntMorbidosController */
/* @var $data AntMorbidos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hip_arterial')); ?>:</b>
	<?php echo CHtml::encode($data->hip_arterial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hip_colesterolemia')); ?>:</b>
	<?php echo CHtml::encode($data->hip_colesterolemia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hipotiroidismo')); ?>:</b>
	<?php echo CHtml::encode($data->hipotiroidismo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barotrauma')); ?>:</b>
	<?php echo CHtml::encode($data->barotrauma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diab_mellitus')); ?>:</b>
	<?php echo CHtml::encode($data->diab_mellitus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enf_renal')); ?>:</b>
	<?php echo CHtml::encode($data->enf_renal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('trauma_ac_agudo')); ?>:</b>
	<?php echo CHtml::encode($data->trauma_ac_agudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vibraciones')); ?>:</b>
	<?php echo CHtml::encode($data->vibraciones); ?>
	<br />

	*/ ?>

</div>