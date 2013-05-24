<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_name'); ?>
		<?php echo $form->textField($model,'goods_name',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'goods_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_price'); ?>
		<?php echo $form->textField($model,'rate_price'); ?>
		<?php echo $form->error($model,'rate_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_stock'); ?>
		<?php echo $form->textField($model,'min_stock',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'min_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->