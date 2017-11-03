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
        $this->createTable('keyStorage_settings', [
            'key' => $this->string(255)->unique(),
            'value' => $this->text()->notNull(),
            'comment' => $this->text()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->addPrimaryKey('pk_keyStorage_settings_key', '{{%keyStorage_settings}}', 'key');
        $this->createIndex('idx_keyStorage_settings_key', '{{%keyStorage_settings}}', 'key', true);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('keyStorage_settings');
    }
}
