<div class="orderStatuses form">
<?php echo $this->Form->create('OrderStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Order Status'); ?></legend>
	<?php
		echo $this->Form->input('status');
		echo $this->Form->input('status_slug');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Order Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Track Orders'), array('controller' => 'track_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track Order'), array('controller' => 'track_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
