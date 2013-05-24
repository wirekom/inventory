<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_trans'); ?>
		<?php echo $form->textField($model,'id_trans'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'decsription'); ?>
		<?php echo $form->textArea($model,'decsription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balance_history'); ?>
		<?php echo $form->textField($model,'balance_history',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'component_id'); ?>
		<?php echo $form->textField($model,'component_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_type'); ?>
		<?php echo $form->textField($model,'transaction_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_id'); ?>
		<?php echo $form->textField($model,'goods_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_t_id'); ?>
		<?php echo $form->textField($model,'goods_t_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->