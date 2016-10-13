<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipomovimientodocumentacion".
 *
 * @property integer $id
 * @property integer $codigoTipoMovimiento_id
 * @property string $nombre
 * @property integer $estatus
 *
 * @property Tipomovimiento $codigoTipoMovimiento
 */
class Tipomovimientodocumentacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipomovimientodocumentacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigoTipoMovimiento_id', 'nombre', 'estatus'], 'required'],
            [['codigoTipoMovimiento_id', 'estatus'], 'integer'],
            [['nombre'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigoTipoMovimiento_id' => 'Codigo Tipo Movimiento ID',
            'nombre' => 'Nombre',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoMovimiento()
    {
        return $this->hasOne(Tipomovimiento::className(), ['codigo' => 'codigoTipoMovimiento_id']);
    }
}
