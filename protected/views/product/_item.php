<div class="item_view">

	<h4>
	  <?php echo CHtml::link( CHtml::encode($data->name) , $this->createUrl("product/view", array('id'=>$data->id) )  ) ?>
	</h4>

	<?php echo '<img src="'.$data->image.'" width="300" />'; //thumbnail ?>
	

</div>