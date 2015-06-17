<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<h2>Datos Personales</h2>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Apellido'); ?>
		<?php echo $form->textField($model,'Nombre_Apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre_Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
		<?php echo $form->radioButtonList($model,'Sexo',array('Mujer'=>'Mujer','Hombre'=>'Hombre'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
        <?php echo $form->error($model,'Sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_de_nacimiento'); ?>
		<?php echo $form->textField($model,'Fecha_de_nacimiento',array('size'=>45,'maxlength'=>45)); ?>
<!-- 		<php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'language'=>'es',
			'model'=>$model, 				// Model object
			'attribute'=>'Fecha_de_nacimiento', // Attribute name
			'options'=>array(
				'dateFormat'=>'yy-mm-dd'
			), 			// jquery plugin options
			'htmlOptions'=>array('readonly'=>true) // HTML options
		)); ?> -->
		<?php echo $form->error($model,'Fecha_de_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Barrio'); ?>
		<?php echo $form->textField($model,'Barrio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ocupacion'); ?>
		<?php echo $form->textField($model,'Ocupacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Ocupacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Procedencia'); ?>
		<?php echo $form->textField($model,'Procedencia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Procedencia'); ?>
	</div>

<!-- 	<div class="row">
		<php echo $form->labelEx($model,'Fecha_Realizacion'); ?>
		<php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'language'=>'es',
			'model'=>$model, 				// Model object
			'attribute'=>'Fecha_Realizacion', // Attribute name
			'options'=>array(
				'dateFormat'=>'yy-mm-dd'
			), 			// jquery plugin options
			'htmlOptions'=>array('readonly'=>true) // HTML options
		)); ?>
		<php echo $form->error($model,'Fecha_Realizacion'); ?>
	</div> -->


	<h2>Identificación Empresa</h2>

	<div class="row">
		<?php echo $form->labelEx($empresa,'Nombre_E'); ?>
		<?php echo $form->textField($empresa,'Nombre_E',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($empresa,'Nombre_E'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($empresa,'RUT'); ?>
		<?php echo $form->textField($empresa,'RUT',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($empresa,'RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($empresa,'Direccion'); ?>
		<?php echo $form->textField($empresa,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($empresa,'Direccion'); ?>
	</div>


	<h2>Historia Laboral - Exposición Actual</h2>

	<li> Motivo de la evaluación Auditiva </li>
	
	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'base'); ?>
		<?php echo $form->textField($exposicionActual,'base',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'seguimiento'); ?>
		<?php echo $form->textField($exposicionActual,'seguimiento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'seguimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'confirmacion'); ?>
		<?php echo $form->textField($exposicionActual,'confirmacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'confirmacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'t_ser_empresa'); ?>
		<?php echo $form->textField($exposicionActual,'t_ser_empresa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'t_ser_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'sec_trabajo'); ?>
		<?php echo $form->textField($exposicionActual,'sec_trabajo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'sec_trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'exp_ruido'); ?>
		<?php echo $form->radioButtonList($exposicionActual,'exp_ruido',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionActual,'exp_ruido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'t_servicio'); ?>
		<?php echo $form->textField($exposicionActual,'t_servicio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'t_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'t_diar_trabajo'); ?>
		<?php echo $form->textField($exposicionActual,'t_diar_trabajo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'t_diar_trabajo'); ?>
	</div>

	<li> Medidas de Control </li>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'e_prot_auditiva'); ?>
		<?php echo $form->radioButtonList($exposicionActual,'e_prot_auditiva',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionActual,'e_prot_auditiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'utilizacion'); ?>
		<?php echo $form->textField($exposicionActual,'utilizacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'utilizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'tipo_protector'); ?>
		<?php echo $form->DropDownList($exposicionActual,'tipo_protector',array(
		'Tapones'=>'Tapones',
		'Orejeras'=>'Orejeras',
		'Otros'=>'Otros'
		),  array('options' => array($exposicionActual->tipo_protector=>array('selected'=>true))));?>
		<?php echo $form->error($exposicionActual,'tipo_protector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'tr_anterior_ruido'); ?>
		<?php echo $form->radioButtonList($exposicionActual,'tr_anterior_ruido',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionActual,'tr_anterior_ruido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionActual,'tr_ruido'); ?>
		<?php echo $form->textField($exposicionActual,'tr_ruido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionActual,'tr_ruido'); ?>
	</div>

	<h2>Exposición a Ruido Extra Laboral</h2>

	<div class="row">
		<?php echo $form->labelEx($exposicionRuidoExtra,'discoteca'); ?>
		<?php echo $form->radioButtonList($exposicionRuidoExtra,'discoteca',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionRuidoExtra,'discoteca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionRuidoExtra,'casa'); ?>
		<?php echo $form->radioButtonList($exposicionRuidoExtra,'casa',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionRuidoExtra,'casa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionRuidoExtra,'motociclismo'); ?>
		<?php echo $form->radioButtonList($exposicionRuidoExtra,'motociclismo',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionRuidoExtra,'motociclismo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionRuidoExtra,'rep_musica'); ?>
		<?php echo $form->radioButtonList($exposicionRuidoExtra,'rep_musica',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionRuidoExtra,'rep_musica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionRuidoExtra,'arma_fuego'); ?>
		<?php echo $form->radioButtonList($exposicionRuidoExtra,'arma_fuego',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($exposicionRuidoExtra,'arma_fuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionRuidoExtra,'otro'); ?>
		<?php echo $form->textField($exposicionRuidoExtra,'otro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionRuidoExtra,'otro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionRuidoExtra,'frec_exposicion'); ?>
		<?php echo $form->DropDownList($exposicionRuidoExtra,'frec_exposicion',array(
		'Diaria'=>'Diaria',
		'Semanal'=>'Semanal',
		'Mensual'=>'Mensual',
		'Otras'=>'Otras'
		),  array('options' => array($exposicionRuidoExtra->frec_exposicion=>array('selected'=>true))));?>
		<?php echo $form->error($exposicionRuidoExtra,'frec_exposicion'); ?>

	</div>


	<h2>Exposición Laboral a Ototoxicos</h2>

	<div class="row">
		<?php echo $form->labelEx($exposicionLaboral,'sol_organicos'); ?>
		<?php echo $form->checkBoxList($exposicionLaboral,'sol_organicos',array(
		'tolueno'=>'tolueno',
		'xileno'=>'xileno',
		'estireno'=>'estireno'
		),array('labelOptions' =>array('style' => "display: inline-block")));?>
		<?php echo $form->error($exposicionLaboral,'sol_organicos'); ?>

<!-- 	<php
	echo $form->checkBoxList($model,'name',array('1'=>'One','2'=>'Two'));
	//OR
	$type_list=CHtml::listData(Types::model()->findAll(),'id','type');
	echo $form->checkBoxList($model,'name',$type_list);
	?>
 -->
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionLaboral,'otroSO'); ?>
		<?php echo $form->textField($exposicionLaboral,'otroSO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionLaboral,'otroSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionLaboral,'quim_industriales'); ?>
		<?php echo $form->checkBoxList($exposicionLaboral,'quim_industriales',array(
		'plomo'=>'plomo',
		'mercurio'=>'mercurio',
		'monoxido de carbono'=>'monoxido de carbono'
		),array('labelOptions' =>array('style' => "display: inline-block")));?>
		<?php echo $form->error($exposicionLaboral,'quim_industriales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($exposicionLaboral,'otroQI'); ?>
		<?php echo $form->textField($exposicionLaboral,'otroQI',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($exposicionLaboral,'otroQI'); ?>
	</div>

	<h2>Antecedentes Personales</h2>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'trat_farmacologico'); ?>
		<?php echo $form->radioButtonList($antecedentes,'trat_farmacologico',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentes,'trat_farmacologico'); ?>
	</div>

	<div> <?php  echo 'En caso afirmativo indicar' ?> </div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'trat_atuberculosis'); ?>
		<?php echo $form->radioButtonList($antecedentes,'trat_atuberculosis',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentes,'trat_atuberculosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'trat_aglucosidos'); ?>
		<?php echo $form->radioButtonList($antecedentes,'trat_aglucosidos',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentes,'trat_aglucosidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'dosis'); ?>
		<?php echo $form->textField($antecedentes,'dosis',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentes,'dosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'enf_ORL'); ?>
		<?php echo $form->radioButtonList($antecedentes,'enf_ORL',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentes,'enf_ORL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'detallar'); ?>
		<?php echo $form->textField($antecedentes,'detallar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentes,'detallar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'fumador'); ?>
		<?php echo $form->radioButtonList($antecedentes,'fumador',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentes,'fumador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'num_cigarrillos_dia'); ?>
		<?php echo $form->textField($antecedentes,'num_cigarrillos_dia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentes,'num_cigarrillos_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'alcohol'); ?>
		<?php echo $form->radioButtonList($antecedentes,'alcohol',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentes,'alcohol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'emf_afec_otica'); ?>
		<?php echo $form->checkBoxList($antecedentes,'emf_afec_otica',array(
		'traumatismo craneal'=>'traumatismo craneal',
		'paperas'=>'paperas',
		'tuberculosis pulmonar'=>'tuberculosis pulmonar',
		'sarampion'=>'sarampion',
		'rubeola'=>'rubeola',
		'fiebre tifoidea'=>'fiebre tifoidea'
		),array('labelOptions' =>array('style' => "display: inline-block")));?>
		<?php echo $form->error($antecedentes,'emf_afec_otica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentes,'inter_quirurgica'); ?>
		<?php echo $form->textField($antecedentes,'inter_quirurgica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentes,'inter_quirurgica'); ?>
	</div>

	<h2>Antecedentes Morbidos</h2>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'hip_arterial'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'hip_arterial',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'hip_arterial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'hip_colesterolemia'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'hip_colesterolemia',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'hip_colesterolemia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'hipotiroidismo'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'hipotiroidismo',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'hipotiroidismo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'barotrauma'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'barotrauma',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'barotrauma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'diab_mellitus'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'diab_mellitus',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'diab_mellitus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'enf_renal'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'enf_renal',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'enf_renal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'trauma_ac_agudo'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'trauma_ac_agudo',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'trauma_ac_agudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesMorbidos,'vibraciones'); ?>
		<?php echo $form->radioButtonList($antecedentesMorbidos,'vibraciones',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesMorbidos,'vibraciones'); ?>
	</div>


	<h2>Antecedentes Otologicos</h2>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'aculenos_tinilus'); ?>
		<?php echo $form->radioButtonList($antecedentesOtologicos,'aculenos_tinilus',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesOtologicos,'aculenos_tinilus'); ?>
	</div>

	<div> <?php  echo 'En caso afirmativo indicar' ?> </div>

	<div class="row">
		<?php echo $form->radioButtonList($antecedentesOtologicos,'tipo_acu_tin',array('Unilateral'=>'Unilateral','Bilateral'=>'Bilateral'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->labelEx($antecedentesOtologicos,'tipo_acu_tin'); ?>
		<?php echo $form->textField($antecedentesOtologicos,'tipo_acu_tin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentesOtologicos,'tipo_acu_tin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'vertigo'); ?>
		<?php echo $form->radioButtonList($antecedentesOtologicos,'vertigo',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesOtologicos,'vertigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'af_pos_cabeza'); ?>
		<?php echo $form->checkBoxList($antecedentesOtologicos,'af_pos_cabeza',array(
		'acostado'=>'acostado',
		'levantarse rapido'=>'levantarse rapido',
		'direccion al caerse'=>'direccion al caerse',
		'movimiento vertical'=>'movimiento vertical',
		'movimiento horizontal'=>'movimiento horizontal',
		'circulos'=>'circulos'
		),array('labelOptions' =>array('style' => "display: inline-block")));?>
		<?php echo $form->error($antecedentesOtologicos,'af_pos_cabeza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'hora_aparicion'); ?>
		<?php echo $form->textField($antecedentesOtologicos,'hora_aparicion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentesOtologicos,'hora_aparicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBoxList($antecedentesOtologicos,'hora_aparicion',array(
		'continuo'=>'continuo',
		'episodico'=>'episodico',
		'incapacitante'=>'incapacitante'
		),array('labelOptions' =>array('style' => "display: inline-block")));?>
		<?php echo $form->error($antecedentesOtologicos,'hora_aparicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'otalgia'); ?>
		<?php echo $form->radioButtonList($antecedentesOtologicos,'otalgia',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesOtologicos,'otalgia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'oido'); ?>
		<?php echo $form->textField($antecedentesOtologicos,'oido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentesOtologicos,'oido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'dolor'); ?>
		<?php echo $form->checkBox($antecedentesOtologicos,'d_continuo', array('label' => 'Option one is this and that—be sure to include why it\'s great')); ?>
		<?php echo $form->labelEx($model, 'dolor continuo'); ?>
		<?php echo $form->checkBox($antecedentesOtologicos,'d_permanente'); ?>
		<?php echo $form->labelEx($model, 'dolor permanente'); ?>
		<?php echo $form->checkBox($antecedentesOtologicos,'d_superficial');?>
		<?php echo $form->labelEx($model, 'dolor superficial'); ?>
		<?php echo $form->checkBox($antecedentesOtologicos,'d_profundo');?>
		<?php echo $form->labelEx($model, 'dolor profundo'); ?>
		<?php echo $form->checkBox($antecedentesOtologicos,'d_trac_pabellon');?>
		<?php echo $form->labelEx($model, 'dolor a traccion de pabellon'); ?>
		<?php echo $form->checkBox($antecedentesOtologicos,'d_pres_trago');?>
		<?php echo $form->labelEx($model, 'dolor a presion trago'); ?>
		

<!-- 		<php echo $form->checkBoxList($antecedentesOtologicos,'dolor',array(
		'continuo'=>'continuo',
		'permanente'=>'permanente',
		'superficial'=>'superficial',
		'profundo'=>'profundo',
		'dolor a traccion del pabellon'=>'dolor a traccion del pabellon',
		'dolor a presion trago'=>'dolor a presion trago'
		),array('labelOptions' =>array('style' => "display: inline-block")));?>
		<php echo $form->error($antecedentesOtologicos,'dolor'); ?> 
		<php echo $form->checkBox($model,'estado',  array('checked'=>'checked')); ?>
		-->
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'otorrea'); ?>
		<?php echo $form->radioButtonList($antecedentesOtologicos,'otorrea',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesOtologicos,'otorrea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'otorragia'); ?>
		<?php echo $form->radioButtonList($antecedentesOtologicos,'otorragia',array('Si'=>'Si','No'=>'No'),array('labelOptions' =>array('style' => "display: inline-block"))); ?>
		<?php echo $form->error($antecedentesOtologicos,'otorragia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'otros'); ?>
		<?php echo $form->textField($antecedentesOtologicos,'otros',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentesOtologicos,'otros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antecedentesOtologicos,'otr_sint_otologicos'); ?>
		<?php echo $form->textField($antecedentesOtologicos,'otr_sint_otologicos',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antecedentesOtologicos,'otr_sint_otologicos'); ?>


		<?php echo $form->labelEx($antecedentesOtologicos,'otr_sint_otologicos'); ?>
		<?php echo $form->checkBoxList($antecedentesOtologicos,'otr_sint_otologicos',array(
		'Antecedentes de infecciones'=>'Antecedentes de infecciones',
		'perforacion timpanica'=>'perforacion timpanica',
		'cirugias'=>'cirugias'
		),array('labelOptions' =>array('style' => "display: inline-block")));?>
		<?php echo $form->error($antecedentesOtologicos,'otr_sint_otologicos'); ?>

	</div>

	<h2>Antecedentes de Audiometria Anteriores</h2>
	
	<div class="row">
		<?php echo $form->labelEx($antAudioAnter,'fecha_examen'); ?>
		<?php echo $form->textField($antAudioAnter,'fecha_examen'); ?>
		<?php echo $form->error($antAudioAnter,'fecha_examen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antAudioAnter,'resultado'); ?>
		<?php echo $form->textField($antAudioAnter,'resultado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antAudioAnter,'resultado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antAudioAnter,'lugar_examen'); ?>
		<?php echo $form->textField($antAudioAnter,'lugar_examen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antAudioAnter,'lugar_examen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antAudioAnter,'exa_audio_complemen'); ?>
		<?php echo $form->textField($antAudioAnter,'exa_audio_complemen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antAudioAnter,'exa_audio_complemen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($antAudioAnter,'observaciones'); ?>
		<?php echo $form->textField($antAudioAnter,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($antAudioAnter,'observaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->