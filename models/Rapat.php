<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rapat".
 *
 * @property int $id
 * @property string $nama
 * @property string $ruangan
 * @property string $tanggal
 * @property string $email
 */
class Rapat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rapat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'ruangan', 'tanggal', 'email'], 'required'],
            [['id'], 'integer'],
            [['tanggal'], 'safe'],
            [['email'], 'string'],
            [['nama', 'ruangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'ruangan' => 'Ruangan',
            'tanggal' => 'Tanggal',
            'email' => 'Email',
        ];
    }
}
