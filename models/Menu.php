<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string|null $label
 * @property string|null $view_page
 * @property string|null $url
 * @property string|null $description
 * @property int|null $status
 * @property int|null $position
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status', 'position'], 'integer'],
            [['label', 'view_page', 'url'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'label' => 'Label',
            'view_page' => 'View Page',
            'url' => 'Url',
            'description' => 'Description',
            'status' => 'Status',
            'position' => 'Position',
        ];
    }
}
