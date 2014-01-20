<?php
/* @var $this SliderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Homepage Sliders',
);

$this->menu=array(
	array('label'=>'Create Image', 'url'=>array('create')),
	array('label'=>'Manage Image', 'url'=>array('admin')),
);
?>

<h1>Sliders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
