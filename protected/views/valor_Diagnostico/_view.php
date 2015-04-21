<?php
/* @var $this Valor_DiagnosticoController */
/* @var $data ValDiagnostico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oido')); ?>:</b>
	<?php echo CHtml::encode($data->oido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frecuencia')); ?>:</b>
	<?php echo CHtml::encode($data->frecuencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('via_aerea')); ?>:</b>
	<?php echo CHtml::encode($data->via_aerea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('via_osea')); ?>:</b>
	<?php echo CHtml::encode($data->via_osea); ?>
	<br />


</div>