<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nombramiento".
 *
 * @property integer $a
 * @property integer $folio
 * @property integer $quincena
 * @property integer $anio
 * @property integer $numeroEmpleado_id
 * @property integer $tipoMovimiento_id
 * @property string $vigenciaDel
 * @property string $vigenciaAl
 * @property integer $numeroPlaza_id
 * @property integer $unidadAdministrativa_id
 * @property integer $adscripcionPresupuestal_id
 * @property integer $adscripcionFisica_id
 * @property integer $servicio_id
 * @property integer $turno_id
 * @property integer $horario_id
 * @property integer $perceocionesMando
 * @property integer $perceocionesEnlaceAD
 * @property integer $perceocionesEnlace
 * @property integer $perceocionesOperativo
 * @property integer $perceocionesRamaMedica
 * @property integer $turnoOpcional
 * @property integer $perceocionesAdicional
 * @property integer $riegosProfesionales
 * @property string $observaciones
 *
 * @property Adscripcionfisica $adscripcionFisica
 * @property Adscripcionpresupuestal $adscripcionPresupuestal
 * @property Horario $horario
 * @property Trabajadores $numeroEmpleado
 * @property Plaza $numeroPlaza
 * @property Servicio $servicio
 * @property Tipomovimiento $tipoMovimiento
 * @property Turno $turno
 * @property User $unidadAdministrativa
 */
class Nombramiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nombramiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a', 'folio', 'quincena', 'anio', 'numeroEmpleado_id', 'tipoMovimiento_id', 'vigenciaDel', 'vigenciaAl', 'numeroPlaza_id', 'unidadAdministrativa_id', 'adscripcionPresupuestal_id', 'adscripcionFisica_id', 'servicio_id', 'turno_id', 'horario_id', 'perceocionesMando', 'perceocionesEnlaceAD', 'perceocionesEnlace', 'perceocionesOperativo', 'perceocionesRamaMedica', 'turnoOpcional', 'perceocionesAdicional', 'riegosProfesionales', 'observaciones'], 'required'],
            [['a', 'folio', 'quincena', 'anio', 'numeroEmpleado_id', 'tipoMovimiento_id', 'numeroPlaza_id', 'unidadAdministrativa_id', 'adscripcionPresupuestal_id', 'adscripcionFisica_id', 'servicio_id', 'turno_id', 'horario_id', 'perceocionesMando', 'perceocionesEnlaceAD', 'perceocionesEnlace', 'perceocionesOperativo', 'perceocionesRamaMedica', 'turnoOpcional', 'perceocionesAdicional', 'riegosProfesionales'], 'integer'],
            [['vigenciaDel', 'vigenciaAl'], 'safe'],
            [['observaciones'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a' => 'A',
            'folio' => 'Folio',
            'quincena' => 'Quincena',
            'anio' => 'Anio',
            'numeroEmpleado_id' => 'Numero Empleado ID',
            'tipoMovimiento_id' => 'Tipo Movimiento ID',
            'vigenciaDel' => 'Vigencia Del',
            'vigenciaAl' => 'Vigencia Al',
            'numeroPlaza_id' => 'Numero Plaza ID',
            'unidadAdministrativa_id' => 'Unidad Administrativa ID',
            'adscripcionPresupuestal_id' => 'Adscripcion Presupuestal ID',
            'adscripcionFisica_id' => 'Adscripcion Fisica ID',
            'servicio_id' => 'Servicio ID',
            'turno_id' => 'Turno ID',
            'horario_id' => 'Horario ID',
            'perceocionesMando' => 'Perceociones Mando',
            'perceocionesEnlaceAD' => 'Perceociones Enlace Ad',
            'perceocionesEnlace' => 'Perceociones Enlace',
            'perceocionesOperativo' => 'Perceociones Operativo',
            'perceocionesRamaMedica' => 'Perceociones Rama Medica',
            'turnoOpcional' => 'Turno Opcional',
            'perceocionesAdicional' => 'Perceociones Adicional',
            'riegosProfesionales' => 'Riegos Profesionales',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdscripcionFisica()
    {
        return $this->hasOne(Adscripcionfisica::className(), ['codigo' => 'adscripcionFisica_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdscripcionPresupuestal()
    {
        return $this->hasOne(Adscripcionpresupuestal::className(), ['codigo' => 'adscripcionPresupuestal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHorario()
    {
        return $this->hasOne(Horario::className(), ['id' => 'horario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNumeroEmpleado()
    {
        return $this->hasOne(Trabajadores::className(), ['id' => 'numeroEmpleado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNumeroPlaza()
    {
        return $this->hasOne(Plaza::className(), ['numeroPlaza' => 'numeroPlaza_id']);
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
    public function getTipoMovimiento()
    {
        return $this->hasOne(Tipomovimiento::className(), ['codigo' => 'tipoMovimiento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTurno()
    {
        return $this->hasOne(Turno::className(), ['id' => 'turno_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadAdministrativa()
    {
        return $this->hasOne(User::className(), ['id' => 'unidadAdministrativa_id']);
    }
}
