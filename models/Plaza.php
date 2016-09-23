<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plaza".
 *
 * @property integer $numeroPlaza
 * @property string $codigoPuesto
 * @property string $nivelSubnivel
 * @property string $grupoGradoNivelSalarial
 * @property integer $clasificacion
 * @property integer $integracionSalarial
 * @property string $denominacionPuesto
 * @property integer $zonaEconomica
 * @property string $tipoPlaza
 * @property string $ocupacion
 * @property integer $estatus
 * @property string $tipoTabulador
 */
class Plaza extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plaza';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroPlaza', 'codigoPuesto', 'nivelSubnivel', 'grupoGradoNivelSalarial', 'clasificacion', 'integracionSalarial', 'denominacionPuesto', 'zonaEconomica', 'tipoPlaza', 'ocupacion', 'estatus', 'tipoTabulador'], 'required'],
            [['numeroPlaza', 'clasificacion', 'integracionSalarial', 'zonaEconomica', 'estatus'], 'integer'],
            [['codigoPuesto'], 'string', 'max' => 20],
            [['nivelSubnivel'], 'string', 'max' => 5],
            [['grupoGradoNivelSalarial'], 'string', 'max' => 10],
            [['denominacionPuesto', 'ocupacion'], 'string', 'max' => 100],
            [['tipoPlaza', 'tipoTabulador'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'numeroPlaza' => 'Numero Plaza',
            'codigoPuesto' => 'Codigo Puesto',
            'nivelSubnivel' => 'Nivel Subnivel',
            'grupoGradoNivelSalarial' => 'Grupo Grado Nivel Salarial',
            'clasificacion' => 'Clasificacion',
            'integracionSalarial' => 'Integracion Salarial',
            'denominacionPuesto' => 'Denominacion Puesto',
            'zonaEconomica' => 'Zona Economica',
            'tipoPlaza' => 'Tipo Plaza',
            'ocupacion' => 'Ocupacion',
            'estatus' => 'Estatus',
            'tipoTabulador' => 'Tipo Tabulador',
        ];
    }
}
