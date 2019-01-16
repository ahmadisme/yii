<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notulensi_ldk".
 *
 * @property int $idnotldk
 * @property string $tema
 * @property string $tanggal_rapat
 * @property string $notulensi
 */
class NotulensiLdk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notulensi_ldk';
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
            'idnotldk' => 'Idnotldk',
            'tema' => 'Tema',
            'tanggal_rapat' => 'Tanggal Rapat',
            'notulensi' => 'Notulensi',
        ];
    }
}
