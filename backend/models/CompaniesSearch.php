<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Companies;

/**
 * CompaniesSearch represents the model behind the search form about `backend\models\Companies`.
 */
class CompaniesSearch extends Companies {

	public $globalSearch;

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['company_id'], 'integer'],
			[['globalSearch', 'company_naem', 'company_email', 'company_addres', 'company_creates_date', 'company_status'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios(){
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
		// pakum enq globalSearch grelu hamar
		// $query->andFilterWhere([
		// 	'company_id' => $this->company_id,
		// 	'company_creates_date' => $this->company_creates_date,
		// ]);

		$query	->orFilterWhere(['like', 'company_naem',			$this->globalSearch])
				->orFilterWhere(['like', 'company_email',			$this->globalSearch])
				->orFilterWhere(['like', 'company_addres',			$this->globalSearch])
				->orFilterWhere(['like', 'company_status',			$this->globalSearch])
				->orFilterWhere(['like', 'company_creates_date',	$this->globalSearch]);

		return $dataProvider;
	}
}
