<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plantillaReal".
 *
 * @property integer $id
 * @property integer $numeroTrabajador_id
 * @property integer $turno_id
 * @property integer $servicio_id
 * @property integer $periodoDelDia
 * @property integer $periodoDelMes
 * @property integer $periodoDelAnio
 * @property integer $periodoAlDia
 * @property integer $periodoAlMes
 * @property integer $periodoAlAnio
 * @property string $fecha
 * @property integer $Oficio
 *
 * @property Servicio $servicio
 * @property Trabajadores $numeroTrabajador
 * @property Turno $turno
 */
class PlantillaReal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plantillaReal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroTrabajador_id', 'turno_id', 'servicio_id', 'periodoDelDia', 'periodoDelMes', 'periodoDelAnio', 'periodoAlDia', 'periodoAlMes', 'periodoAlAnio'], 'required'],
            [['numeroTrabajador_id', 'turno_id', 'servicio_id', 'periodoDelDia', 'periodoDelMes', 'periodoDelAnio', 'periodoAlDia', 'periodoAlMes', 'periodoAlAnio', 'Oficio'], 'integer'],
            [['fecha'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numeroTrabajador_id' => 'Numero Trabajador ID',
            'turno_id' => 'Turno ID',
            'servicio_id' => 'Servicio ID',
            'periodoDelDia' => 'Periodo Del Dia',
            'periodoDelMes' => 'Periodo Del Mes',
            'periodoDelAnio' => 'Periodo Del Anio',
            'periodoAlDia' => 'Periodo Al Dia',
            'periodoAlMes' => 'Periodo Al Mes',
            'periodoAlAnio' => 'Periodo Al Anio',
            'fecha' => 'Fecha',
            'Oficio' => 'Oficio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicio()
    {
        return $this->hasOne(Servicio::className(), ['codigo' => 'servicio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrabajador()
    {
        return $this->hasOne(Trabajadores::className(), ['id' => 'numeroTrabajador_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTurno()
    {
        return $this->hasOne(Turno::className(), ['id' => 'turno_id']);
    }
}
