<?php

use yii\db\Migration;


/**
 * Handles the creation of table `{{%post}}`.
 */
class m190309_145317_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'type' => $this->integer()->notNull()->comment('0 - Descriptive, 1 - Contact'),
            'company_name' => $this->string(50)->notNull(),
            'position' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
