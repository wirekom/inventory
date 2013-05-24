<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('component_name')); ?>:</b>
	<?php echo CHtml::encode($data->component_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piece_id')); ?>:</b>
	<?php echo CHtml::encode($data->piece_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_price')); ?>:</b>
	<?php echo CHtml::encode($data->rate_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_stock')); ?>:</b>
	<?php echo CHtml::encode($data->min_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />


</div>