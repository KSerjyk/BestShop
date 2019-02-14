<?php

use yii\db\Migration;

/**
 * Class m190211_142358_table_userImage_images
 */
class m190211_142358_table_userImage_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('idx-users-image_id',
            '{{%users}}',
            'image_id');
        $this->addForeignKey('fk-user_images-image_id',
            '{{%users}}',
            'image_id',
            '{{%images}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-users-image_id', '{{%users}}');
        $this->dropIndex('idx-users-image_id', '{{%users}}');
        echo "m190211_142358_table_userImage_images cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190211_142358_table_userImage_images cannot be reverted.\n";

        return false;
    }
    */
}
