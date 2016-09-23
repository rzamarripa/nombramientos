<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property integer $id
 * @property integer $codigo
 * @property string $deInicio
 * @property string $aInicio
 * @property string $deFinal
 * @property string $aFinal
 * @property integer $estatus
 *
 * @property Nombramiento[] $nombramientos
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'deInicio', 'aInicio', 'deFinal', 'aFinal', 'estatus'], 'required'],
            [['codigo', 'estatus'], 'integer'],
            [['deInicio', 'aInicio', 'deFinal', 'aFinal'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo' => 'Codigo',
            'deInicio' => 'De Inicio',
            'aInicio' => 'A Inicio',
            'deFinal' => 'De Final',
            'aFinal' => 'A Final',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNombramientos()
    {
        return $this->hasMany(Nombramiento::className(), ['horario_id' => 'id']);
    }
}
