<div class="publishers index">
	<h2><?php echo __('Publishers'); ?></h2>
	<div>
		<ul class="nav nav-pills">
			<li class="disabled"><a href="#">Sort By:</a></li>
			<?php
				echo $this->Txt->paginateSort('name');
			?>
		</ul>
	</div>

	<ul class="list-group">
		<?php foreach ($publishers as $publisher): ?>
			<li class="list-group-item">
				<span class="badge"><?php echo $info['Publisher'][$publisher['Publisher']['id']]['count']; ?></span>
				<?php echo $this->Html->link($publisher['Publisher']['name'], array('action' => 'view', $publisher['Publisher']['id']), array()); ?>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php echo $this->element('Paginator/footer'); ?>
</div>
