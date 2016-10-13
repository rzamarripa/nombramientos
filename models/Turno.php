<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turno".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $estatus
 *
 * @property Nombramiento[] $nombramientos
 */
class Turno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'turno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'estatus'], 'required'],
            [['estatus'], 'integer'],
            [['nombre'], 'string', 'max' => 20]
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNombramientos()
    {
        return $this->hasMany(Nombramiento::className(), ['turno_id' => 'id']);
    }
}
