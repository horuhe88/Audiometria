<?php
/* @var $this AntPersonalesController */
/* @var $data AntPersonales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trat_farmacologico')); ?>:</b>
	<?php echo CHtml::encode($data->trat_farmacologico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trat_atuberculosis')); ?>:</b>
	<?php echo CHtml::encode($data->trat_atuberculosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trat_aglucosidos')); ?>:</b>
	<?php echo CHtml::encode($data->trat_aglucosidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enf_ORL')); ?>:</b>
	<?php echo CHtml::encode($data->enf_ORL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumador')); ?>:</b>
	<?php echo CHtml::encode($data->fumador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_cigarrillos_dia')); ?>:</b>
	<?php echo CHtml::encode($data->num_cigarrillos_dia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alcohol')); ?>:</b>
	<?php echo CHtml::encode($data->alcohol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emf_afec_otica')); ?>:</b>
	<?php echo CHtml::encode($data->emf_afec_otica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inter_quirurgica')); ?>:</b>
	<?php echo CHtml::encode($data->inter_quirurgica); ?>
	<br />

	*/ ?>

</div>