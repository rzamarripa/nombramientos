<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "puesto".
 *
 * @property integer $id
 * @property string $codigo
 * @property string $nivel
 * @property string $denominacion
 * @property string $sueldoZEII
 * @property string $compensacionZEII
 * @property string $totalZEII
 * @property string $sueldoZEIII
 * @property string $compensacionZEIII
 * @property string $totalZEIII
 * @property integer $tipoPuesto_id
 * @property integer $estatus
 *
 * @property Tipopuesto $tipoPuesto
 */
class Puesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'puesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'nivel', 'denominacion', 'sueldoZEII', 'compensacionZEII', 'totalZEII', 'sueldoZEIII', 'compensacionZEIII', 'totalZEIII', 'estatus'], 'required'],
            [['sueldoZEII', 'compensacionZEII', 'totalZEII', 'sueldoZEIII', 'compensacionZEIII', 'totalZEIII'], 'number'],
            [['estatus'], 'integer'],
            [['codigo', 'nivel'], 'string', 'max' => 15],
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
            'id' => 'ID',
            'codigo' => 'Codigo',
            'nivel' => 'Nivel',
            'denominacion' => 'Denominacion',
            'sueldoZEII' => 'Sueldo Zeii',
            'compensacionZEII' => 'Compensacion Zeii',
            'totalZEII' => 'Total Zeii',
            'sueldoZEIII' => 'Sueldo Zeiii',
            'compensacionZEIII' => 'Compensacion Zeiii',
            'totalZEIII' => 'Total Zeiii',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoPuesto()
    {
        
    }
}
