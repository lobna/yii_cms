<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="home_slider"><?php $this->actionSlider(); ?></div>
<div class="header_ad"> Ads Zone</div>
<div class="clear"></div>
<div class="products"> <?php $this->renderPartial('list_products', array("models"=>$products)) ?> </div>
<div class="clear"></div>