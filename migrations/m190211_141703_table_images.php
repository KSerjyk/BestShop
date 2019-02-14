<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190211_141703_table_images
 */
class m190211_141703_table_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($tableOptions === null) {
            $tableOptions = 'CHARSET utf8 COLLATE utf8_unicode_ci ENGINE=INNODB';
        }
        $this->createTable('{{%images}}', [
            'id' => Schema::TYPE_PK,
            'title' => $this->string(),
            'path' => $this->string()->notNull(),
            'alt' => $this->string()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%images}}');
        echo "m190211_141703_table_images cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190211_141703_table_images cannot be reverted.\n";

        return false;
    }
    */
}
