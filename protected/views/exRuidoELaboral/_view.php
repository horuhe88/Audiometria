<?php
/* @var $this ExRuidoELaboralController */
/* @var $data ExRuidoELaboral */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discoteca')); ?>:</b>
	<?php echo CHtml::encode($data->discoteca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casa')); ?>:</b>
	<?php echo CHtml::encode($data->casa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motociclismo')); ?>:</b>
	<?php echo CHtml::encode($data->motociclismo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rep_musica')); ?>:</b>
	<?php echo CHtml::encode($data->rep_musica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arma_fuego')); ?>:</b>
	<?php echo CHtml::encode($data->arma_fuego); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('otro')); ?>:</b>
	<?php echo CHtml::encode($data->otro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frec_exposicion')); ?>:</b>
	<?php echo CHtml::encode($data->frec_exposicion); ?>
	<br />

	*/ ?>

</div>