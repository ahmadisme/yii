<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notulensi_dpm".
 *
 * @property int $idnotdpm
 * @property string $tema
 * @property string $tanggal_rapat
 * @property int $notulensi
 */
class NotulensiDpm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notulensi_dpm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tema', 'tanggal_rapat', 'notulensi'], 'required'],
            [['tema'], 'string'],
            [['tanggal_rapat'], 'safe'],
            [['notulensi'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idnotdpm' => 'Idnotdpm',
            'tema' => 'Tema',
            'tanggal_rapat' => 'Tanggal Rapat',
            'notulensi' => 'Notulensi',
        ];
    }
}
