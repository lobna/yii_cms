<?php
/* @var $this ProductController */

?>
<div id="login">

</div>
<h1><?php echo "Our Products" ?></h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$models,
	'itemView'=>'_item',
)); ?>
<div class="clear"></div>