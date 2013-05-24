<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'component-suplier-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'suplier_id'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Suplier(),			
            'attribute' => 'suplier_name',
			'sourceUrl'=>array('/master/componentSuplier/ceksuplier'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
                        $(\'#hospital_id\').val(-1);
                       }',
                        'select' => 'js:function(event, ui){
							document.getElementById(\'ComponentSuplier_suplier_id\').value = ui.item.id;
                        }',
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:25px;width:200px;padding:0px 5px;',
                        'class' => 'mf'
            ),		    
		    'htmlOptions'=>array(
		        'style'=>'width:50%;', 
            	'value'=>($model->isNewRecord) ? '' : $model->suplier->suplier_name,
		    ),
		)); ?>
		
		<?php echo $form->hiddenField($model,'suplier_id'); ?>
		<?php echo $form->error($model,'suplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'component_id'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Components(),			
            'attribute' => 'component_name',
			'sourceUrl'=>array('/master/componentSuplier/cekcomponents'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
                        $(\'#hospital_id\').val(-1);
                       }',
                        'select' => 'js:function(event, ui){
                        	document.getElementById(\'ComponentSuplier_component_id\').value = ui.item.id;
                        }',
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:25px;width:200px;padding:0px 5px;',
                        'class' => 'mf'
            ),		    
		    'htmlOptions'=>array(
		        'style'=>'width:50%;', 
            	'value'=>($model->isNewRecord) ? '' : $model->component->component_name,
		    ),
		));?>
		<?php echo $form->hiddenField($model,'component_id'); ?>
		<?php echo $form->error($model,'component_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->