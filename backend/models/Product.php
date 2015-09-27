<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer	$id
 * @property integer	$id_category
 * @property integer	$id_brand
 * @property integer	$viewed
 * @property string		$article
 * @property string		$name
 * @property double		$min_price
 * @property double		$price_old
 * @property double		$price
 * @property integer	$status
 * @property integer	$has_photo
 * @property integer	$delivery
 * @property string		$description
 * @property string		$created
 * @property integer	$id_creator
 * @property string		$changed
 * @property integer	$id_changer
 */
class Product extends \yii\db\ActiveRecord {

	/**
	 * @inheritdoc
	 */
	public static function tableName(){
		return 'product';
	}

	/**
	 * @inheritdoc
	 */
	public function rules(){
		return [
			[['id_category', 'id_brand', 'viewed', 'status', 'has_photo', 'delivery', 'id_creator', 'id_changer'], 'integer'],
			[['article', 'name', 'description'], 'required'],
			[['min_price', 'price_old', 'price'], 'number'],
			[['created', 'changed'], 'safe'],
			[['article'], 'string', 'max' => 500],
			[['name'], 'string', 'max' => 1500],
			[['description'], 'string', 'max' => 800],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'			=> Yii::t('product', 'ID'),
			'id_category'	=> Yii::t('product', 'Id Category'),
			'id_brand'		=> Yii::t('product', 'Id Brand'),
			'viewed'		=> Yii::t('product', 'Viewed'),
			'article'		=> Yii::t('product', 'Article'),
			'name'			=> Yii::t('product', 'Name'),
			'min_price'		=> Yii::t('product', 'Min price'),
			'price_old'		=> Yii::t('product', 'Old price'),
			'price'			=> Yii::t('product', 'Price'),
			'status'		=> Yii::t('product', 'Status'),
			'has_photo'		=> Yii::t('product', 'Has Photo'),
			'delivery'		=> Yii::t('product', 'Delivery'),
			'description'	=> Yii::t('product', 'Description'),
			'created'		=> Yii::t('product', 'Created'),
			'id_creator'	=> Yii::t('product', 'Id Creator'),
			'changed'		=> Yii::t('product', 'Changed'),
			'id_changer'	=> Yii::t('product', 'Id Changer'),
		];
	}
}
