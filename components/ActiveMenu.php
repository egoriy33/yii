<?

//namespace app\components;
namespace components;

use yii\bootstrap\Nav;

class ActiveMenu extends Nav
{

    public function init()
    {
        // Here we define query conditions.
		$query = new \yii\db\Query();
		
		$items = $query->select('*')
		->where(['status' => 1])
		->from('menu')
		->orderby('position', 'ASC')
		->All();
		
		//arsort($items);
		
        foreach ($items as $item)
            $this->items[] = array('label'=>$item['label'], 'url'=>'?r='.$item['url']);
			//array_unshift($this->items, array('label'=>$item['label'], 'url'=>'?r='.$item['url']));
				
		parent::init();
    }

}