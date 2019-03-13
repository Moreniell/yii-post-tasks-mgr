<?php

use yii\db\Migration;


/**
 * Handles the creation of table `{{%post_queue}}`.
 */
class m190309_174806_create_post_queue_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_queue}}', [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer()->notNull(),
            'post_at' => $this->timestamp()->notNull(),
            'notification_sent_at' => $this->timestamp()->notNull()
        ]);
        $this->addForeignKey(
            'post_queue_post_id_fk',
            '{{%post_queue}}',
            'post_id',
            '{{%post}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'post_queue_post_id_fk',
            '{{%post_queue}}'
        );

        $this->dropTable('{{%post_queue}}');
    }
}
