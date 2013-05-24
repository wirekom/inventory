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
		<?php echo $form->label($model,'goods_id'); ?>
		<?php echo $form->textField($model,'goods_id'); ?>
	</div>	
	
	<div class="row">
		<?php echo $form->label($model,'warehouse_id'); ?>
		<?php echo $form->textField($model,'warehouse_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'component_qty'); ?>
		<?php echo $form->textField($model,'component_qty',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->