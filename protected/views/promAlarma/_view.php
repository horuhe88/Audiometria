<?php
/* @var $this PromAlarmaController */
/* @var $data PromAlarma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_Paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Diagnoctico')); ?>:</b>
	<?php echo CHtml::encode($data->id_Diagnoctico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('val_der')); ?>:</b>
	<?php echo CHtml::encode($data->val_der); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('val_izq')); ?>:</b>
	<?php echo CHtml::encode($data->val_izq); ?>
	<br />


</div>