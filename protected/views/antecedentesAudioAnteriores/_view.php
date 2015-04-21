<?php
/* @var $this AntecedentesAudioAnterioresController */
/* @var $data AntAudioAnter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_examen')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_examen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultado')); ?>:</b>
	<?php echo CHtml::encode($data->resultado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_examen')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_examen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exa_audio_complemen')); ?>:</b>
	<?php echo CHtml::encode($data->exa_audio_complemen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>