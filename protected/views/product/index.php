<?php
/* @var $this ProductController */

$this->breadcrumbs=array(
	'Products',
);
?>
<h1><?php echo "Products" ?></h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$models,
	'itemView'=>'_item',
)); ?>
<div class="clear"></div>