<?php

use yii\db\Migration;

/**
 * Class m230914_022012_statistic
 */
class m230914_022012_statistic extends Migration
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
        echo "m230914_022012_statistic cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('statistic', [
            'id' => $this->primaryKey(),
            'access_time' => $this->dateTime(),
            'user_ip' => $this->string(20),
            'user_host' => $this->string(20),
            'path_info' => $this->string(50),
            'query_string' => $this->string(50),
        ]);
    }

    public function down()
    {
        echo "m230914_022012_statistic cannot be reverted.\n";

        return false;
    }
}
