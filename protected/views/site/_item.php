<div class="item_view">

	<h4>
	  <?php echo CHtml::link( CHtml::encode($data->name) , $this->createUrl("product/view", array('id'=>$data->id) )  ) ?>
	</h4>

	<?php echo '<img src="'.Yii::app()->baseUrl ."/assets/upload/temp/". $data->image.'" width="230" />'; //thumbnail ?>
	

</div>