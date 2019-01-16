<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notulensi_bem".
 *
 * @property int $idnotbem
 * @property string $tema
 * @property string $tanggal_rapat
 * @property string $notulensi
 */
class NotulensiBem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notulensi_bem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tema', 'tanggal_rapat', 'notulensi'], 'required'],
            [['tema', 'notulensi'], 'string'],
            [['tanggal_rapat'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idnotbem' => 'Idnotbem',
            'tema' => 'Tema',
            'tanggal_rapat' => 'Tanggal Rapat',
            'notulensi' => 'Notulensi',
        ];
    }
}
