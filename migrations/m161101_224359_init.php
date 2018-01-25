<?php

use yii\db\Migration;

class m161101_224359_init extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%template}}', [
            'id'=> $this->string()->unique(),
            'title' => $this->string()->notNull(),
            'placeholders' => $this->string(),
            'message' => $this->text(),
        ],$tableOptions);

        $this->addPrimaryKey('pk_template', '{{%template}}', 'id');

    }

    public function safeDown()
    {
        $this->dropPrimaryKey('pk_template', '{{%template}}');

        $this->dropTable('{{%template}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
