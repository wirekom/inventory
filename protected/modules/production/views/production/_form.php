<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'production-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_id'); ?>
		<?php echo $form->textField($model,'goods_id'); ?>
		<?php echo $form->error($model,'goods_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'components_qty'); ?>
		<?php echo $form->textField($model,'components_qty'); ?>
		<?php echo $form->error($model,'components_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warehouse_id'); ?>
		<?php echo $form->textField($model,'warehouse_id'); ?>
		<?php echo $form->error($model,'warehouse_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->