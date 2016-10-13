<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adscripcionfisica".
 *
 * @property integer $codigo
 * @property string $denominacion
 * @property integer $estatus
 *
 * @property Nombramiento[] $nombramientos
 */
class Adscripcionfisica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adscripcionfisica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'denominacion', 'estatus'], 'required'],
            [['codigo', 'estatus'], 'integer'],
            [['denominacion'], 'string', 'max' => 100],
            [['codigo'], 'unique', 'message'=>'El {attribute} "{value}" ya existe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'denominacion' => 'Denominacion',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNombramientos()
    {
        return $this->hasMany(Nombramiento::className(), ['adscripcionFisica_id' => 'codigo']);
    }
}
