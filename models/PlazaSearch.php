<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Plaza;

/**
 * PlazaSearch represents the model behind the search form about `app\models\Plaza`.
 */
class PlazaSearch extends Plaza
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroPlaza', 'clasificacion', 'integracionSalarial', 'zonaEconomica', 'estatusPlaza'], 'integer'],
            [['codigoPuesto', 'nivelSubnivel', 'grupoGradoNivelSalarial', 'denominacionPuesto', 'tipoPlaza', 'ocupacion', 'tipoTabulador'], 'safe'],
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
        $query = Plaza::find();

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
            'numeroPlaza' => $this->numeroPlaza,
            'clasificacion' => $this->clasificacion,
            'integracionSalarial' => $this->integracionSalarial,
            'zonaEconomica' => $this->zonaEconomica,
            'estatusPlaza' => $this->estatusPlaza,
        ]);

        $query->andFilterWhere(['like', 'codigoPuesto', $this->codigoPuesto])
            ->andFilterWhere(['like', 'nivelSubnivel', $this->nivelSubnivel])
            ->andFilterWhere(['like', 'grupoGradoNivelSalarial', $this->grupoGradoNivelSalarial])
            ->andFilterWhere(['like', 'denominacionPuesto', $this->denominacionPuesto])
            ->andFilterWhere(['like', 'tipoPlaza', $this->tipoPlaza])
            ->andFilterWhere(['like', 'ocupacion', $this->ocupacion])
            ->andFilterWhere(['like', 'tipoTabulador', $this->tipoTabulador]);

        return $dataProvider;
    }
}
