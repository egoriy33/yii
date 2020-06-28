<?
use yii\bootstrap\Nav;

namespace app\MyMenus {

//Yii::import('zii.widgets.CMenu', true);
//Yii::$app->runAction('controller/action', $params)

class ActiveMenu extends Nav

{

    public function init()

    {

        // Here we define query conditions.

        $criteria = new CDbCriteria;

        $criteria->condition = '`status` = 1';

        $criteria->order = '`position` ASC';


        $items = MenuModel::model()->findAll($criteria);


        foreach ($items as $item)

            $this->items[] = array('label'=>$item->label, 'url'=>$item->url);

		//var_dump($this->items);
		
		parent::init();

    }

}
	}