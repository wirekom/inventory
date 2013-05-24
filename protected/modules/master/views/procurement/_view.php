<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->suplier_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_order')); ?>:</b>
	<?php echo CHtml::encode($data->type_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_id')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_id); ?>
	<br />


</div>