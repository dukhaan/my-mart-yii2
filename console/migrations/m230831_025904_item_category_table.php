<?php

use yii\db\Migration;

/**
 * Class m230831_025904_item_category_table
 */
class m230831_025904_item_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
    }
    
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('item_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'parent_category' => $this->integer(11),
        ]);

        
    }

    public function down()
    {
        echo "m230831_025904_item_category_table cannot be reverted.\n";

        return false;
    }
    
}
