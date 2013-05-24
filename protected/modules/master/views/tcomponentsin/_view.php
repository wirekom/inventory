<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_trans')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_trans), array('view', 'id'=>$data->id_trans)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decsription')); ?>:</b>
	<?php echo CHtml::encode($data->decsription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balance_history')); ?>:</b>
	<?php echo CHtml::encode($data->balance_history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('component_id')); ?>:</b>
	<?php echo CHtml::encode($data->component_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>