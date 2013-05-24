<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcomponents-in-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decsription'); ?>
		<?php echo $form->textArea($model,'decsription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'decsription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balance_history'); ?>
		<?php echo $form->textField($model,'balance_history',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'balance_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'component_id'); ?>
		<?php echo $form->textField($model,'component_id'); ?>
		<?php echo $form->error($model,'component_id'); ?>
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($model,'warehouse_from'); ?>
		<?php echo $form->textField($model,'warehouse_from'); ?>
		<?php echo $form->error($model,'warehouse_from'); ?>
	</div>
	
	<!--div class="row">
		<?php echo $form->labelEx($model,'warehouse_to'); ?>
		<?php echo $form->textField($model,'warehouse_to'); ?>
		<?php echo $form->error($model,'warehouse_to'); ?>
	</div>-->
	
	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->