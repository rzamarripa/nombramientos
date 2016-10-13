<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidadadministrativa".
 *
 * @property string $codigo
 * @property string $denominacion
 * @property integer $estatus
 */
class Unidadadministrativa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidadadministrativa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'denominacion', 'estatus'], 'required'],
            [['estatus'], 'integer'],
            [['codigo'], 'string', 'max' => 10],
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
}
