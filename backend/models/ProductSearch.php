<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

class ProductSearch extends Product {
	/**
	 * @inheritdoc
	 */
	public function rules(){
		return [
			// [['id_category', 'id_brand', 'viewed', 'status', 'has_photo', 'delivery', 'id_creator', 'id_changer'], 'integer'],
			// [['article', 'name', 'description'], 'required'],
			// [['min_price', 'price_old', 'price'], 'number'],
			// [['created', 'changed'], 'safe'],
			// [['article'], 'string', 'max' => 500],
			// [['name'], 'string', 'max' => 1500],
			// [['description'], 'string', 'max' => 800],
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
	public function search($params){
echo "<pre>"; print_r( $params ); echo "</pre>";exit;
		// $query = Product::find();

		// $dataProvider = new ActiveDataProvider([
		// 	'query' => $query,
		// ]);


		// $query->andFilterWhere([
		// 	'id'			=> $this->id,
		// 	'id_category'	=> $this->id_category,
		// 	'id_brand'		=> $this->id_brand,
		// ]);

		// $query->andFilterWhere(['like', 'name', $this->name]);

		// return $dataProvider;
	}
}
