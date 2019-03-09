<?php

use yii\db\Migration;


/**
 * Handles the creation of table `{{%descriptive_post}}`.
 */
class m190309_173921_create_descriptive_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%descriptive_post}}', [
            'post_id' => $this->primaryKey(),
            'position_description' => $this->text()->notNull(),
            'salary' => $this->integer()->notNull(),
            'starts_at' => $this->timestamp()->notNull(),
            'ends_at' => $this->timestamp()->notNull()
        ]);
        $this->addForeignKey(
            'descriptive_post_post_id_fk',
            '{{%descriptive_post}}',
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
            'descriptive_post_post_id_fk',
            '{{%descriptive_post}}'
        );

        $this->dropTable('{{%descriptive_post}}');
    }
}
