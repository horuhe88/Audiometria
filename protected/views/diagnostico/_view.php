<?php
/* @var $this DiagnosticoController */
/* @var $data Diagnostico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idf_diag_evaluador')); ?>:</b>
	<?php echo CHtml::encode($data->idf_diag_evaluador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADer250')); ?>:</b>
	<?php echo CHtml::encode($data->ADer250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODer250')); ?>:</b>
	<?php echo CHtml::encode($data->ODer250); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq250')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq250')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq250); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADe500')); ?>:</b>
	<?php echo CHtml::encode($data->ADe500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODe500')); ?>:</b>
	<?php echo CHtml::encode($data->ODe500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq500')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq500')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq500); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADe1000')); ?>:</b>
	<?php echo CHtml::encode($data->ADe1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODe1000')); ?>:</b>
	<?php echo CHtml::encode($data->ODe1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq1000')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq1000')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq1000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADer2000')); ?>:</b>
	<?php echo CHtml::encode($data->ADer2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODer2000')); ?>:</b>
	<?php echo CHtml::encode($data->ODer2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq2000')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq2000')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq2000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADer3000')); ?>:</b>
	<?php echo CHtml::encode($data->ADer3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODer3000')); ?>:</b>
	<?php echo CHtml::encode($data->ODer3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq3000')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq3000')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq3000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADer4000')); ?>:</b>
	<?php echo CHtml::encode($data->ADer4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODer4000')); ?>:</b>
	<?php echo CHtml::encode($data->ODer4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq4000')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq4000')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq4000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADer6000')); ?>:</b>
	<?php echo CHtml::encode($data->ADer6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODer6000')); ?>:</b>
	<?php echo CHtml::encode($data->ODer6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq6000')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq6000')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq6000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADer8000')); ?>:</b>
	<?php echo CHtml::encode($data->ADer8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ODer8000')); ?>:</b>
	<?php echo CHtml::encode($data->ODer8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AIzq8000')); ?>:</b>
	<?php echo CHtml::encode($data->AIzq8000); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OIzq8000')); ?>:</b>
	<?php echo CHtml::encode($data->OIzq8000); ?>
	<br />

	*/ ?>

</div>