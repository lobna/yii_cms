<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	    public function accessRules() {
        $user_id = Yii::app()->user->getId();
        $controller_name = Yii::app()->getController()->getId();
        $action_name = Yii::app()->controller->action->id;   

    
        if ( $user_id >  0) {
            if(Yii::app()->user->isAdmin()){
                return array(
                    array('allow',
                        'controllers'=>array('admin/product','admin/slider','admin/category','admin/user','gii'),
                        'users'=>array('*'),
                    ),array('deny',  // deny all users
                        'controllers'=>array(/*'clientprofile'*/),
                        'users'=>array('*'),
                    )
                );
            }
            elseif(Yii::app()->user->isEditor()){
            	return array(
                    array('allow',
                        'controllers'=>array('*'),
                        'users'=>array('*'),
                    ),array('deny',  // deny all users
                        'controllers'=>array('admin/user'),
                        'users'=>array('*'),
                    )
                
                );
            }
            else{
            	 return array(
                    array('allow',
                        'controllers'=>array('site','products','gii'),
                        'users'=>array('*'),
                    )
                );
            }
            
        }
        
    }
}