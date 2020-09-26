<?php

use yii\db\Migration;
/**
 * Class m200926_160005_add_admin
 */
class m200926_160005_add_admin extends Migration
{
    
    public function safeUp()
    {

        $command = \Yii::$app->db->createCommand();

        $command->insert('user', [
            'username' => 'admin',
            'auth_key' => 'AkjXmr-VcVECKOAEb3cSD8Pf2cphV1VA',
            'password_hash' => '$2y$13$NctmM9MnH4Ue57J2XVyq6eOSYJnW3lC/dFrNI2DTSd.HN9Ydzgp/W',
            'email' => 'admin@admin.com',
            'status' => 10,
        ])->execute();
    }
    
}
