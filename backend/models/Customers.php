<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $customer_id
 * @property string $customer_name
 * @property string $zip_code
 * @property string $city
 * @property string $province
 */
class Customers extends \yii\db\ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName(){
		return 'customers';
	}

	/**
	 * @inheritdoc
	 */
	public function rules(){
		return [
			[['customer_name', 'zip_code', 'city', 'province'], 'required'],
			[['customer_name', 'city', 'province'], 'string', 'max' => 100],
			[['zip_code'], 'string', 'max' => 20]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'customer_id' 	=> Yii::t('customers', 'Customer ID'),
			'customer_name' => Yii::t('customers', 'Customer Name'),
			'zip_code' 		=> Yii::t('customers', 'Zip Code'),
			'city' 			=> Yii::t('customers', 'City'),
			'province' 		=> Yii::t('customers', 'Province'),
		];
	}
}
