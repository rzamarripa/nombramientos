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
 * @property string $tipoTabulador
 * @property string $turnoOpcional
 * @property string $percepcionAdicional
 * @property string $riesgoProfesional
 * @property string $unidadAdministrativa_id
 * @property string $adscripcionPresupuestal_id
 * @property string $adscripcionFisica_id
 * @property integer $servicio_id
 * @property integer $turno_id
 * @property integer $jornada
 * @property integer $horario_id
 * @property integer $estatus
 *
 * @property PlantillaAutorizada[] $plantillaAutorizadas
 * @property AdscripcionFisica $adscripcionFisica
 * @property Horario $horario
 * @property Servicio $servicio
 * @property Turno $turno
 * @property AdscripcionPresupuestal $adscripcionPresupuestal
 * @property UnidadAdministrativa $unidadAdministrativa
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
            [['numeroPlaza', 'clasificacion', 'integracionSalarial', 'zonaEconomica', 'servicio_id', 'turno_id', 'horario_id', 'estatus'], 'required'],
            [['numeroPlaza', 'clasificacion', 'integracionSalarial', 'zonaEconomica', 'servicio_id', 'turno_id', 'jornada', 'horario_id', 'estatus'], 'integer'],
            [['turnoOpcional', 'percepcionAdicional', 'riesgoProfesional'], 'number'],
            [['codigoPuesto'], 'string', 'max' => 20],
            [['nivelSubnivel'], 'string', 'max' => 5],
            [['grupoGradoNivelSalarial', 'unidadAdministrativa_id', 'adscripcionPresupuestal_id', 'adscripcionFisica_id'], 'string', 'max' => 10],
            [['denominacionPuesto', 'ocupacion'], 'string', 'max' => 100],
            [['tipoPlaza', 'tipoTabulador'], 'string', 'max' => 1],
            [['numeroPlaza'], 'unique', 'message'=>'El {attribute} "{value}" ya existe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'numeroPlaza' => 'Numero de Plaza',
            'codigoPuesto' => 'Codigo Puesto',
            'nivelSubnivel' => 'Nivel Subnivel',
            'grupoGradoNivelSalarial' => 'Grupo Grado Nivel Salarial',
            'clasificacion' => 'Clasificacion',
            'integracionSalarial' => 'Integracion Salarial',
            'denominacionPuesto' => 'Denominacion Puesto',
            'zonaEconomica' => 'Zona Economica',
            'tipoPlaza' => 'Tipo Plaza',
            'ocupacion' => 'Ocupacion',
            'tipoTabulador' => 'Tipo Tabulador',
            'turnoOpcional' => 'Turno Opcional',
            'percepcionAdicional' => 'Percepcion Adicional',
            'riesgoProfesional' => 'Riesgo Profesional',
            'unidadAdministrativa_id' => 'Unidad Administrativa ID',
            'adscripcionPresupuestal_id' => 'Adscripcion Presupuestal ID',
            'adscripcionFisica_id' => 'Adscripcion Fisica ID',
            'servicio_id' => 'Servicio ID',
            'turno_id' => 'Turno ID',
            'jornada' => 'Jornada',
            'horario_id' => 'Horario ID',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlantillaAutorizadas()
    {
        return $this->hasMany(PlantillaAutorizada::className(), ['numeroPlaza_id' => 'numeroPlaza']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdscripcionFisica()
    {
        return $this->hasOne(AdscripcionFisica::className(), ['codigo' => 'adscripcionFisica_id']);
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
    public function getServicio()
    {
        return $this->hasOne(Servicio::className(), ['codigo' => 'servicio_id']);
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
    public function getAdscripcionPresupuestal()
    {
        return $this->hasOne(AdscripcionPresupuestal::className(), ['codigo' => 'adscripcionPresupuestal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadAdministrativa()
    {
        return $this->hasOne(UnidadAdministrativa::className(), ['codigo' => 'unidadAdministrativa_id']);
    }
}
