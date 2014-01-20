<?php
// $this->widget('ext.JCarousel.JCarousel', array(
//     'dataProvider' => $dataProvider,
//     'thumbUrl' => 'Yii::app()->baseUrl."/assets/upload/slider/".$data->image',
//     'imageUrl' => 'Yii::app()->baseUrl."/assets/upload/slider/".$data->image',
//     'target' => 'big-gallery-item',
// ));
//Yii::app()->clientScript->registerCoreScript('jquery'); 
/*$array=array();
foreach ($data as $val){
	$array[]=array("image_url"=> Yii::app()->baseUrl."/assets/upload/slider/".$val["image"],
					"thumb_url" => Yii::app()->baseUrl."/assets/upload/slider/".$val["image"],
					'title' => $val["title"],
                    'link' => $val["link"],
                    'alt' => $val["title"]
				);
}
$this->widget('ext.adGallery.AdGallery',
        array(
            'imageList' => $array
        )
    );*/

?>

<?php /*$this->beginWidget('Galleria');?>
    <img src= "<?php echo Yii::app()->baseUrl?>/assets/upload/slider/layer-funny.jpg" alt="Description of image" title="Title of image" />
    <img src= "<?php echo Yii::app()->baseUrl?>/assets/upload/slider/layer-funny.jpg" alt="Description of image" title="Title of image" />
    <img src= "<?php echo Yii::app()->baseUrl?>/assets/upload/slider/layer-funny.jpg" alt="Description of image" title="Title of image" />
    <img src= "<?php echo Yii::app()->baseUrl?>/assets/upload/slider/layer-funny.jpg" alt="Description of image" title="Title of image" />
<?php $this->endWidget();*/?>

<?php 
/*	$this->widget('Galleria', array(
	    'dataProvider' => $dataProvider,
	    // 'dataProvider' => $data,
	    'binding' => array(
	        'image' => 'image',
	    ),
	));*/
?>
<?php 

$this->widget('Galleria', array(
	'id'=>'galleria',
    'dataProvider' => $dataProvider,
    'imagePrefixSeparator' => '-',//if set 'imagePrefix' => '' in behaviors; separate - imagePrefix{Separator}image
    'srcPrefix' => Yii::app()->baseUrl.'/assets/upload/slider/',

    'options' => array(//galleria options
        'transition' => 'fade'
            )
));
?>