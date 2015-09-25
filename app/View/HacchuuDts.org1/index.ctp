<div class="hacchuuDts index">
	<h2><?php echo __('Hacchuu Dts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('bi'); ?></th>
			<th><?php echo $this->Paginator->sort('torihikisaki_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bumon_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nouki'); ?></th>
			<th><?php echo $this->Paginator->sort('bikou'); ?></th>
			<th><?php echo $this->Paginator->sort('juchuu_dt_id'); ?></th>
			<th><?php echo $this->Paginator->sort('basho_tana_souko_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kingaku_goukei'); ?></th>
			<th><?php echo $this->Paginator->sort('shouhizei_kingaku'); ?></th>
			<th><?php echo $this->Paginator->sort('utizei_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('matome_kazei_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('kaisi_nitiji'); ?></th>
			<th><?php echo $this->Paginator->sort('id_moto'); ?></th>
			<th><?php echo $this->Paginator->sort('kinsi_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('shuuryou_nitiji'); ?></th>
			<th><?php echo $this->Paginator->sort('sakusei_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('kousin_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hacchuuDts as $hacchuuDt): ?>
	<tr>
		<td><?php echo h($hacchuuDt['HacchuuDt']['id']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['code']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['bi']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuDt['TorihikisakiMr']['name'], array('controller' => 'torihikisaki_mrs', 'action' => 'view', $hacchuuDt['TorihikisakiMr']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hacchuuDt['User']['name'], array('controller' => 'users', 'action' => 'view', $hacchuuDt['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hacchuuDt['BumonMr']['name'], array('controller' => 'bumon_mrs', 'action' => 'view', $hacchuuDt['BumonMr']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['nouki']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['bikou']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuDt['JuchuuDt']['code'], array('controller' => 'juchuu_dts', 'action' => 'view', $hacchuuDt['JuchuuDt']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hacchuuDt['BashoTanaSoukoMr']['name'], array('controller' => 'basho_tana_souko_mrs', 'action' => 'view', $hacchuuDt['BashoTanaSoukoMr']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['kingaku_goukei']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['shouhizei_kingaku']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['utizei_flg']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['matome_kazei_flg']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['kaisi_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['id_moto']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['kinsi_flg']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['shuuryou_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['sakusei_user_id']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['created']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['kousin_user_id']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuDt['HacchuuDt']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hacchuuDt['HacchuuDt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hacchuuDt['HacchuuDt']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hacchuuDt['HacchuuDt']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hacchuuDt['HacchuuDt']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hacchuu Dt'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Torihikisaki Mrs'), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Torihikisaki Mr'), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bumon Mrs'), array('controller' => 'bumon_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bumon Mr'), array('controller' => 'bumon_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juchuu Dts'), array('controller' => 'juchuu_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juchuu Dt'), array('controller' => 'juchuu_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Basho Tana Souko Mrs'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Basho Tana Souko Mr'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hacchuu Meisai Dts'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hacchuu Meisai Dt'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>
