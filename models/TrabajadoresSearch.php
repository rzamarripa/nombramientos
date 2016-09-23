<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trabajadores;

/**
 * TrabajadoresSearch represents the model behind the search form about `app\models\Trabajadores`.
 */
class TrabajadoresSearch extends Trabajadores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'numeroEmpleado', 'numeroHijos', 'estatus'], 'integer'],
            [['nombre', 'RFC', 'CURP', 'sexo', 'CUIP', 'nacionalidad', 'escolaridad', 'cedulaProfesional', 'domicilio'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Trabajadores::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'numeroEmpleado' => $this->numeroEmpleado,
            'numeroHijos' => $this->numeroHijos,
            'estatus' => $this->estatus,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'RFC', $this->RFC])
            ->andFilterWhere(['like', 'CURP', $this->CURP])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'CUIP', $this->CUIP])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'escolaridad', $this->escolaridad])
            ->andFilterWhere(['like', 'cedulaProfesional', $this->cedulaProfesional])
            ->andFilterWhere(['like', 'domicilio', $this->domicilio]);

        return $dataProvider;
    }
}
