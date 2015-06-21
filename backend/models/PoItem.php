<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "po_item".
 *
 * @property integer $id
 * @property integer $po_id
 * @property string $po_item_no
 * @property double $quantity
 *
 * @property Po $id0
 */
class PoItem extends \yii\db\ActiveRecord{
	/**
	 * @inheritdoc
	 */
	public static function tableName(){
		return 'po_item';
	}

	/**
	 * @inheritdoc
	 */
	public function rules(){
		return [
			[['po_item_no', 'quantity'], 'required'],
			[['po_id'], 'integer'],
			[['quantity'], 'number'],
			[['po_item_no'], 'string', 'max' => 10]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels(){
		return [
			'id' => Yii::t('backend', 'ID'),
			'po_id' => Yii::t('backend', 'Po ID'),
			'po_item_no' => Yii::t('backend', 'Po Item No'),
			'quantity' => Yii::t('backend', 'Quantity'),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getId0(){
		// return $this->hasMany(Po::className(), ['id' => 'po_id']);
		return $this->hasOne(Po::className(), ['id' => 'id']);
	}
}
