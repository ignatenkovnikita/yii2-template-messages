<?php

use yii\db\Migration;

/**
 * Class m190330_174816_add_column_settings
 */
class m190330_174816_add_column_settings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%template}}', 'widget_options', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190330_174816_add_column_settings cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190330_174816_add_column_settings cannot be reverted.\n";

        return false;
    }
    */
}
