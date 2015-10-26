<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('kana_mei');
		echo $this->Form->input('kigou');
		echo $this->Form->input('bumon_mr_id', array('empty' => ''));
		echo $this->Form->input('mail_address');
		echo $this->Form->input('username');
		echo $this->Form->input('theme_mr_id', array('empty' => ''));
		echo $this->Form->input('torihikisaki_mr_id', array('empty' => ''));
		echo $this->Form->input('shokushu_kbn_id', array('empty' => ''));
		echo $this->Form->input('shounin_kengen_mr_id', array('empty' => ''));
		echo $this->Form->input('kaisi_nitiji');
		echo $this->Form->input('id_moto');
		echo $this->Form->input('kinsi_flg');
		echo $this->Form->input('shuuryou_nitiji');
		echo $this->Form->input('sakusei_user_id');
		echo $this->Form->input('kousin_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bumon Mrs'), array('controller' => 'bumon_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bumon Mr'), array('controller' => 'bumon_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Theme Mrs'), array('controller' => 'theme_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme Mr'), array('controller' => 'theme_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Torihikisaki Mrs'), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Torihikisaki Mr'), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shokushu Kbns'), array('controller' => 'shokushu_kbns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shokushu Kbn'), array('controller' => 'shokushu_kbns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shounin Kengen Mrs'), array('controller' => 'shounin_kengen_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shounin Kengen Mr'), array('controller' => 'shounin_kengen_mrs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<button id="buttonId">Ajax通信</button>
<div id="updateArea">ここがAjaxで更新される</div>
<?php echo $this->Html->script(array('jquery-1.6.4.min'));?>
<script type='text/javascript'>
$(function () {
    $("#buttonId").bind("click",
      function (event) {
        $.ajax({
          async:true,
          dataType:"html",
          success: function (data, textStatus) {
            $("#updateArea").html(data);
          },
          url:"\/cake2erp0\/torihikisaki_mrs\/ajaxget"
        });
        return false;
      });
  });
</script>

