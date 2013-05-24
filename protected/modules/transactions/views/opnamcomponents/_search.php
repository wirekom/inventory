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
		<?php echo $form->label($model,'component_id'); ?>
		<?php echo $form->textField($model,'component_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warehouse_id'); ?>
		<?php echo $form->textField($model,'warehouse_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_component'); ?>
		<?php echo $form->textField($model,'stock_component'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'office'); ?>
		<?php echo $form->textField($model,'office',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'decsription'); ?>
		<?php echo $form->textArea($model,'decsription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->