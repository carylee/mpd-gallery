<div class="projects">
<?php echo $this->Form->create('Project',array('url'=>array('action'=>'edit')));?>
	<fieldset>
		<legend><?php __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('mpd_class');
		echo $this->Form->input('date_presented');
		echo $this->Form->input('patent_number');
	?>
	</fieldset>
		<fieldset>
		<legend><?php __('Edit Pictures'); ?></legend>
	<?php $j=0;
	     foreach ($project['Picture'] as $picture): $j++?>
            <tr><td><div class="product_box margin_r_10"><?php echo $this->Html->image('projects/' . $picture['filename']);?></div></td>
		    <td class="actions">
			<?php echo $this->Html->link(__('View', true), array('controller'=>'pictures','action' => 'view', $picture['Picture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller'=>'pictures','action' => 'edit', $picture['Picture']['id'])); ?>
            <?php// echo $this->Html->link(__('Set as Cover',true),array('controller'=>'projects','action'=>'setCover',$project['Project']['id'],$j));
  			 echo $this->Html->link(__('Set as Cover',true),array('controller'=>'projects','action'=>'setCover',$project['Project']['id'],$picture['Picture']['id']));?>
			<?php echo $this->Html->link(__('Delete', true), array('controller'=>'pictures','action' => 'delete', $picture['Picture']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $picture['Picture']['id'])); ?>
		     </td></tr>
      <?php endforeach; ?>
	  </fieldset>
	  <fieldset>
		<legend><?php __('Add Pictures'); ?></legend>
	<?php
	    for ($i=0;$i<(4-$j);$i++)
		{
        echo $this->Form->input('Picture.'.$i.'.images', array('type' => 'file')); 
    }
	?>
	</fieldset>
<?php echo $this->Html->link('Cancel', array('action'=>'view', $project['Project']['id'])); ?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
