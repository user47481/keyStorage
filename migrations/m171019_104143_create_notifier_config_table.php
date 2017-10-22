<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notifier_config`.
 */
class m171019_104143_create_notifier_config_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('settings', [
            'id' => $this->primaryKey(),
            'key' => $this->string(255)->unique(),
            'class' => $this->string(255)->notNull(),
            'value' => $this->text()->notNull(),
            'comment' => $this->text()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->addPrimaryKey('pk_key_storage_item_key', '{{%key_storage_item}}', 'key');
        $this->createIndex('idx_key_storage_item_key', '{{%key_storage_item}}', 'key', true);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('notifier_config');
    }
}
