<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notes`.
 */
class m190117_091251_create_notes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('notes', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'note' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('notes');
    }
}
