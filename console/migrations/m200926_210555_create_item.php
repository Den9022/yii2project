<?php

use yii\db\Migration;

/**
 * Class m200926_210555_create_item
 */
class m200926_210555_create_item extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{%item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'position' => $this->smallInteger()->notNull()->defaultValue(0),
            'category' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%item}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200926_210555_create_item cannot be reverted.\n";

        return false;
    }
    */
}
