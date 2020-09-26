<?php

use yii\db\Migration;

/**
 * Class m200926_174541_add_items
 */
class m200926_174541_add_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $command = \Yii::$app->db->createCommand();

        $command->batchInsert('item', ['name'], [
            ['Dog'],
            ['Cat'],
            ['Frog'],
            ['Cow'],
            ['Sheep'],
            ['Lion'],
            ['Pound'],
            ['Fish'],
            ['Foot'],
            ['Milk'],
            ['Super'],
            ['Heart']
        ])->execute();
    }
}
