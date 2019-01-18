<?php

use yii\db\Migration;

/**
 * Handles the creation of table `meetings`.
 */
class m190117_092625_create_meetings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('meetings', [
            'id' => $this->primaryKey(),
            'date' => $this->datetime(),
            'title' => $this->string(),
            'note_id' => $this->integer(),
            'room_id' => $this->integer(),
            'user_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);

        $this->addForeignKey('fk_note', 'meetings', 'note_id', 'notes', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_room', 'meetings', 'room_id', 'room', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user', 'meetings', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('meetings');
    }
}
