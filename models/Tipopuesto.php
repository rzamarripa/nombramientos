<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipopuesto".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $estatus
 */
class Tipopuesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipopuesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'estatus'], 'required'],
            [['estatus'], 'integer'],
            [['nombre'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'estatus' => 'Estatus',
        ];
    }
}
