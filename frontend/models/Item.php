<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $name
 * @property int $position
 * @property string $category
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category'], 'required'],
            [['position'], 'integer'],
            [['name', 'category'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'position' => 'Position',
            'category' => 'Category',
        ];
    }

    public function updateOrder($new_order, $category)
    {

        $new_order = explode(',', $new_order);

        $items = Item::find()->where(['category' => $category])->all();

        foreach ($items as $item) {

            for ($i = 0; $i < count($new_order); $i++) {

                if ($item->position == $i && $item->name != $new_order[$i]) {


                    $item->name = $new_order[$i];
                    $item->save();
                }
            }
        }
    }
}
