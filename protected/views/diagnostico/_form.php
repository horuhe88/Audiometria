<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diagnostico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<td>
			<h2>Oido Derecho</h2>
			<h3>Via Aerea</h3>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer250'); ?>
				<?php echo $form->textField($model,'ADer250'); ?>
				<?php echo $form->error($model,'ADer250'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer500'); ?>
				<?php echo $form->textField($model,'ADer500'); ?>
				<?php echo $form->error($model,'ADer500'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer1000'); ?>
				<?php echo $form->textField($model,'ADer1000'); ?>
				<?php echo $form->error($model,'ADer1000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer2000'); ?>
				<?php echo $form->textField($model,'ADer2000'); ?>
				<?php echo $form->error($model,'ADer2000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer3000'); ?>
				<?php echo $form->textField($model,'ADer3000'); ?>
				<?php echo $form->error($model,'ADer3000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer4000'); ?>
				<?php echo $form->textField($model,'ADer4000'); ?>
				<?php echo $form->error($model,'ADer4000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer6000'); ?>
				<?php echo $form->textField($model,'ADer6000'); ?>
				<?php echo $form->error($model,'ADer6000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ADer8000'); ?>
				<?php echo $form->textField($model,'ADer8000'); ?>
				<?php echo $form->error($model,'ADer8000'); ?>
			</div>
			<h3>Via Osea</h3>
			<div class="row">
				<?php echo $form->labelEx($model,'ODer250'); ?>
				<?php echo $form->textField($model,'ODer250'); ?>
				<?php echo $form->error($model,'ODer250'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ODer500'); ?>
				<?php echo $form->textField($model,'ODer500'); ?>
				<?php echo $form->error($model,'ODer500'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ODer1000'); ?>
				<?php echo $form->textField($model,'ODer1000'); ?>
				<?php echo $form->error($model,'ODer1000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ODer2000'); ?>
				<?php echo $form->textField($model,'ODer2000'); ?>
				<?php echo $form->error($model,'ODer2000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ODer3000'); ?>
				<?php echo $form->textField($model,'ODer3000'); ?>
				<?php echo $form->error($model,'ODer3000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ODer4000'); ?>
				<?php echo $form->textField($model,'ODer4000'); ?>
				<?php echo $form->error($model,'ODer4000'); ?>
			</div>
<!-- 			<div class="row">
				<php echo $form->labelEx($model,'ODer6000'); ?>
				<php echo $form->textField($model,'ODer6000'); ?>
				<php echo $form->error($model,'ODer6000'); ?>
			</div>
			<div class="row">
				<php echo $form->labelEx($model,'ODer8000'); ?>
				<php echo $form->textField($model,'ODer8000'); ?>
				<php echo $form->error($model,'ODer8000'); ?>
			</div> -->
		</td>

		<td style="width:10%"></td>	

		<td>
			<h2>Oido Izquierdo</h2>
			<h3>Via Aerea</h3>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq250'); ?>
				<?php echo $form->textField($model,'AIzq250'); ?>
				<?php echo $form->error($model,'AIzq250'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq500'); ?>
				<?php echo $form->textField($model,'AIzq500'); ?>
				<?php echo $form->error($model,'AIzq500'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq1000'); ?>
				<?php echo $form->textField($model,'AIzq1000'); ?>
				<?php echo $form->error($model,'AIzq1000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq2000'); ?>
				<?php echo $form->textField($model,'AIzq2000'); ?>
				<?php echo $form->error($model,'AIzq2000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq3000'); ?>
				<?php echo $form->textField($model,'AIzq3000'); ?>
				<?php echo $form->error($model,'AIzq3000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq4000'); ?>
				<?php echo $form->textField($model,'AIzq4000'); ?>
				<?php echo $form->error($model,'AIzq4000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq6000'); ?>
				<?php echo $form->textField($model,'AIzq6000'); ?>
				<?php echo $form->error($model,'AIzq6000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'AIzq8000'); ?>
				<?php echo $form->textField($model,'AIzq8000'); ?>
				<?php echo $form->error($model,'AIzq8000'); ?>
			</div>
			<h3>Via Osea</h3>
			<div class="row">
				<?php echo $form->labelEx($model,'OIzq250'); ?>
				<?php echo $form->textField($model,'OIzq250'); ?>
				<?php echo $form->error($model,'OIzq250'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'OIzq500'); ?>
				<?php echo $form->textField($model,'OIzq500'); ?>
				<?php echo $form->error($model,'OIzq500'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'OIzq1000'); ?>
				<?php echo $form->textField($model,'OIzq1000'); ?>
				<?php echo $form->error($model,'OIzq1000'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'OIzq2000'); ?>
				<?php echo $form->textField($model,'OIzq2000'); ?>
				<?php echo $form->error($model,'OIzq2000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'OIzq3000'); ?>
				<?php echo $form->textField($model,'OIzq3000'); ?>
				<?php echo $form->error($model,'OIzq3000'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'OIzq4000'); ?>
				<?php echo $form->textField($model,'OIzq4000'); ?>
				<?php echo $form->error($model,'OIzq4000'); ?>
			</div>
<!-- 			<div class="row">
				<php echo $form->labelEx($model,'OIzq6000'); ?>
				<php echo $form->textField($model,'OIzq6000'); ?>
				<php echo $form->error($model,'OIzq6000'); ?>
			</div>
			<div class="row">
				<php echo $form->labelEx($model,'OIzq8000'); ?>
				<php echo $form->textField($model,'OIzq8000'); ?>
				<php echo $form->error($model,'OIzq8000'); ?>
			</div> -->
		</td>

	</table>	

			<div class="row">
				<?php echo $form->labelEx($model,'Nivel de Exposición de Ruido'); ?>
				<?php echo $form->textField($model,'nvl_exp_ruido'); ?>
				<?php echo $form->error($model,'nvl_exp_ruido'); ?>
			</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->