<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edad')); ?>:</b>
	<?php echo CHtml::encode($data->Edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sexo')); ?>:</b>
	<?php echo CHtml::encode($data->Sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_de_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_de_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Barrio')); ?>:</b>
	<?php echo CHtml::encode($data->Barrio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->Ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Procedencia')); ?>:</b>
	<?php echo CHtml::encode($data->Procedencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Realizacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Realizacion); ?>
	<br />

	*/ ?>

</div>