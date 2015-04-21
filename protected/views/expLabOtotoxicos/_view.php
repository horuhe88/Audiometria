<?php
/* @var $this ExpLabOtotoxicosController */
/* @var $data ExpLabOtotoxicos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sol_organicos')); ?>:</b>
	<?php echo CHtml::encode($data->sol_organicos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quim_industriales')); ?>:</b>
	<?php echo CHtml::encode($data->quim_industriales); ?>
	<br />


</div>