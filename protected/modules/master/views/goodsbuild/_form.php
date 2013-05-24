<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-build-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::label('Goods',''); ?>
		<?php echo $model->goods->goods_name;?>
		<?php echo $form->hiddenField($model,'goods_id',array('value'=>$model->goods_id)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'components_id'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Components(),			
            'attribute' => 'component_name',
			'sourceUrl'=>array('/master/goodsbuild/cekcomponents'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
                        $(\'#hospital_id\').val(-1);
                       }',
                        'select' => 'js:function(event, ui){
                        	document.getElementById(\'GoodsBuild_components_id\').value = ui.item.id;
                        }',
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:25px;width:200px;padding:0px 5px;',
                        'class' => 'mf'
            ),		    
		    'htmlOptions'=>array(
		        'style'=>'width:50%;',  
				'value'=>($model->isNewRecord) ? '' : $model->components->component_name,
		    ),
		));?>
		<?php echo $form->hiddenField($model,'components_id'); ?>
		<?php echo $form->error($model,'components_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'component_qty'); ?>
		<?php echo $form->textField($model,'component_qty',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'component_qty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->