<?php
/* @var $this HLaboralExpAController */
/* @var $data HLaboralExpA */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base')); ?>:</b>
	<?php echo CHtml::encode($data->base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguimiento')); ?>:</b>
	<?php echo CHtml::encode($data->seguimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmacion')); ?>:</b>
	<?php echo CHtml::encode($data->confirmacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_ser_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->t_ser_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->sec_trabajo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('exp_ruido')); ?>:</b>
	<?php echo CHtml::encode($data->exp_ruido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->t_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_diar_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->t_diar_trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_prot_auditiva')); ?>:</b>
	<?php echo CHtml::encode($data->e_prot_auditiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilizacion')); ?>:</b>
	<?php echo CHtml::encode($data->utilizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_protector')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_protector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tr_anterior_ruido')); ?>:</b>
	<?php echo CHtml::encode($data->tr_anterior_ruido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tr_ruido')); ?>:</b>
	<?php echo CHtml::encode($data->tr_ruido); ?>
	<br />

	*/ ?>

</div>