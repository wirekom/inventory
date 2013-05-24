<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opnam-goodss-form',
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
		<?php echo $form->labelEx($model,'warehouse_id'); ?>
		<?php echo $form->textField($model,'warehouse_id'); ?>
		<?php echo $form->error($model,'warehouse_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_goods'); ?>
		<?php echo $form->textField($model,'stock_goods'); ?>
		<?php echo $form->error($model,'stock_goods'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office'); ?>
		<?php echo $form->textField($model,'office',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decsription'); ?>
		<?php echo $form->textArea($model,'decsription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'decsription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->