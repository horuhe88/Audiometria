<?php
/* @var $this IdentEmpresaController */
/* @var $data IdentEmpresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idf_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->idf_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_E')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_E); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT')); ?>:</b>
	<?php echo CHtml::encode($data->RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />


</div>