<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'component_name'); ?>
		<?php echo $form->textField($model,'component_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'piece_id'); ?>
		<?php echo $form->textField($model,'piece_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate_price'); ?>
		<?php echo $form->textField($model,'rate_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_stock'); ?>
		<?php echo $form->textField($model,'min_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->