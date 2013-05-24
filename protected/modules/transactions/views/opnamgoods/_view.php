<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warehouse_id')); ?>:</b>
	<?php echo CHtml::encode($data->warehouse_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_goods')); ?>:</b>
	<?php echo CHtml::encode($data->stock_goods); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office')); ?>:</b>
	<?php echo CHtml::encode($data->office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decsription')); ?>:</b>
	<?php echo CHtml::encode($data->decsription); ?>
	<br />


</div>