<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%audit}}`.
 */
class m190917_171507_create_audit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%audit_go}}', [
            'id' => $this->primaryKey(),
            'audit_key' => $this->string()->notNull()->unique(),
            'audit_name' => $this->string()->notNull(),
            'audit_start_date' => $this->date(),
            'audit_closed_date' => $this->date(),
            ]);

        $this->createTable('{{%auditors}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string()->notNull()->unique(),
            'tab_number' => $this->string()->notNull()->unique(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auditors}}');
        $this->dropTable('{{%audit_go}}');
    }
}
