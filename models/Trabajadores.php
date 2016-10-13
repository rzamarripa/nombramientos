<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trabajadores".
 *
 * @property integer $id
 * @property integer $numeroEmpleado
 * @property string $nombre
 * @property string $RFC
 * @property string $CURP
 * @property string $sexo
 * @property string $CUIP
 * @property string $nacionalidad
 * @property integer $numeroHijos
 * @property string $escolaridad
 * @property string $cedulaProfesional
 * @property string $domicilio
 * @property integer $estatus
 */
class Trabajadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trabajadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroEmpleado', 'nombre'], 'required'],
            [['numeroEmpleado', 'numeroHijos', 'estatus'], 'integer'],
            [['nombre', 'domicilio'], 'string', 'max' => 200],
            [['RFC', 'nacionalidad'], 'string', 'max' => 20],
            [['CURP', 'escolaridad', 'cedulaProfesional'], 'string', 'max' => 30],
            [['sexo'], 'string', 'max' => 10],
            [['CUIP'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numeroEmpleado' => 'Numero Empleado',
            'nombre' => 'Nombre',
            'RFC' => 'Rfc',
            'CURP' => 'Curp',
            'sexo' => 'Sexo',
            'CUIP' => 'Cuip',
            'nacionalidad' => 'Nacionalidad',
            'numeroHijos' => 'Numero Hijos',
            'escolaridad' => 'Escolaridad',
            'cedulaProfesional' => 'Cedula Profesional',
            'domicilio' => 'Domicilio',
            'estatus' => 'Estatus',
        ];
    }
}
