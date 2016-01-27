<?php

namespace backend;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_category', 'id_brand', 'viewed', 'status', 'has_photo', 'delivery', 'id_creator', 'id_changer'], 'integer'],
            [['article', 'name', 'description', 'created', 'changed'], 'safe'],
            [['min_price', 'price_old', 'price'], 'number'],
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
        $query = Product::find();

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
            'id_category' => $this->id_category,
            'id_brand' => $this->id_brand,
            'viewed' => $this->viewed,
            'min_price' => $this->min_price,
            'price_old' => $this->price_old,
            'price' => $this->price,
            'status' => $this->status,
            'has_photo' => $this->has_photo,
            'delivery' => $this->delivery,
            'created' => $this->created,
            'id_creator' => $this->id_creator,
            'changed' => $this->changed,
            'id_changer' => $this->id_changer,
        ]);

        $query->andFilterWhere(['like', 'article', $this->article])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
