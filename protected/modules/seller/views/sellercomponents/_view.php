<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_trans')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_trans), array('view', 'id'=>$data->id_trans)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decsription')); ?>:</b>
	<?php echo CHtml::encode($data->decsription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('component_id')); ?>:</b>
	<?php echo CHtml::encode($data->component_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_order')); ?>:</b>
	<?php echo CHtml::encode($data->type_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sender_name')); ?>:</b>
	<?php echo CHtml::encode($data->sender_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>