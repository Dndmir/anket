<?php

namespace kouosl\anket\models;

use Yii;

/**
 * This is the model class for table "anket".
 *
 * @property int $id
 * @property string $Anket
 * @property int $olumlu_yanit
 * @property int $olumsuz_yanit
 * @property int $sure
 * @property string $tarih_saat
 * @property string $sonuc
 */
class Anket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Anket', 'olumlu_yanit', 'olumsuz_yanit', 'sure', 'tarih_saat', 'sonuc'], 'required'],
            [['olumlu_yanit', 'olumsuz_yanit', 'sure'], 'integer'],
            [['tarih_saat'], 'safe'],
            [['Anket'], 'string', 'max' => 100],
            [['sonuc'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Anket' => 'Anket',
            'olumlu_yanit' => 'Olumlu Yanit',
            'olumsuz_yanit' => 'Olumsuz Yanit',
            'sure' => 'Sure',
            'tarih_saat' => 'Tarih Saat',
            'sonuc' => 'Sonuc',
        ];
    }
}
