<?php

use yii\db\Migration;

/**
 * Class m200926_210648_add_items
 */
class m200926_210648_add_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $command = \Yii::$app->db->createCommand();

        $command->batchInsert('item', ['name', 'category', 'position'], [
            ['Dog', 'dark', 0],
            ['Cat', 'dark', 1],
            ['Frog', 'dark', 2],
            ['Cow', 'dark', 3],
            ['Sheep', 'dark', 4],
            ['Lion', 'dark', 5],
            ['Pound', 'light', 0],
            ['Fish', 'light', 1],
            ['Foot', 'light', 2],
            ['Milk', 'light', 3],
            ['Super', 'light', 4],
            ['Heart', 'light', 5]
        ])->execute();
    }   
}
