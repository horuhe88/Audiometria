<?php
/* @var $this AntOtologicosController */
/* @var $data AntOtologicos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aculenos_tinilus')); ?>:</b>
	<?php echo CHtml::encode($data->aculenos_tinilus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_acu_tin')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_acu_tin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vertigo')); ?>:</b>
	<?php echo CHtml::encode($data->vertigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('af_pos_cabeza')); ?>:</b>
	<?php echo CHtml::encode($data->af_pos_cabeza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otalgia')); ?>:</b>
	<?php echo CHtml::encode($data->otalgia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oido')); ?>:</b>
	<?php echo CHtml::encode($data->oido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dolor')); ?>:</b>
	<?php echo CHtml::encode($data->dolor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otorrea')); ?>:</b>
	<?php echo CHtml::encode($data->otorrea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otorragia')); ?>:</b>
	<?php echo CHtml::encode($data->otorragia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otr_sint_otologicos')); ?>:</b>
	<?php echo CHtml::encode($data->otr_sint_otologicos); ?>
	<br />

	*/ ?>

</div>