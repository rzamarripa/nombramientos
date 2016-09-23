<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipomovimiento".
 *
 * @property integer $codigo
 * @property string $tipoMovimiento
 * @property string $movimientoEspecifico
 * @property string $definicion
 * @property integer $estatus
 *
 * @property Nombramiento[] $nombramientos
 * @property Tipomovimientodocumentacion[] $tipomovimientodocumentacions
 */
class Tipomovimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipomovimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'tipoMovimiento', 'movimientoEspecifico', 'definicion', 'estatus'], 'required'],
            [['codigo', 'estatus'], 'integer'],
            [['definicion'], 'string'],
            [['tipoMovimiento'], 'string', 'max' => 50],
            [['movimientoEspecifico'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'tipoMovimiento' => 'Tipo Movimiento',
            'movimientoEspecifico' => 'Movimiento Especifico',
            'definicion' => 'Definicion',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNombramientos()
    {
        return $this->hasMany(Nombramiento::className(), ['tipoMovimiento_id' => 'codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipomovimientodocumentacions()
    {
        return $this->hasMany(Tipomovimientodocumentacion::className(), ['codigoTipoMovimiento_id' => 'codigo']);
    }
}
