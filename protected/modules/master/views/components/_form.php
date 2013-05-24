<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'components-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'component_name'); ?>
		<?php echo $form->textField($model,'component_name',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'component_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'piece_id'); ?>
		<?php echo $form->dropDownlist($model,'piece_id',CHtml::listData(Piece::model()->findAll(),'id','piece_name'),array('empty'=>'-- select piece --'))?>
		<?php echo $form->error($model,'piece_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_price'); ?>
		<?php echo $form->textField($model,'rate_price'); ?>
		<?php echo $form->error($model,'rate_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_stock'); ?>
		<?php echo $form->textField($model,'min_stock'); ?>
		<?php echo $form->error($model,'min_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->