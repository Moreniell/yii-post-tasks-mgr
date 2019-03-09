<?php

use yii\db\Migration;


/**
 * Handles the creation of table `{{%contact_post}}`.
 */
class m190309_172123_create_contact_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact_post}}', [
            'post_id' => $this->primaryKey(),
            'contact_name' => $this->string(50)->notNull(),
            'contact_email' => $this->string(50)->notNull()
        ]);
        $this->addForeignKey(
            'contact_post_post_id_fk',
            '{{%contact_post}}',
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
            'contact_post_post_id_fk',
            '{{%contact_post}}'
        );

        $this->dropTable('{{%contact_post}}');
    }
}
