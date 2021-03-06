<?php

namespace backend\modules\settings\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\settings\models\Companies;

/**
 * CompaniesSearch represents the model behind the search form about `backend\modules\settings\models\Companies`.
 */
class CompaniesSearch extends Companies
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['company_id'], 'integer'],
			[['company_naem', 'company_email', 'company_addres', 'company_creates_date', 'company_status', 'company_start_date'], 'safe'],
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
		$query = Companies::find();

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
			'company_id' => $this->company_id,
			'company_creates_date' => $this->company_creates_date,
			'company_start_date' => $this->company_start_date,
		]);

		$query->andFilterWhere(['like', 'company_naem', $this->company_naem])
			->andFilterWhere(['like', 'company_email', $this->company_email])
			->andFilterWhere(['like', 'company_addres', $this->company_addres])
			->andFilterWhere(['like', 'company_status', $this->company_status]);

		return $dataProvider;
	}
}
