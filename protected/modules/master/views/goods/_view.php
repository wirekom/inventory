<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_name')); ?>:</b>
	<?php echo CHtml::encode($data->goods_name); ?>
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