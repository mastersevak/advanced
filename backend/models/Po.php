<?php

namespace backend\models;

use Yii;
use common\helpers\Globals;

/**
 * This is the model class for table "po".
 *
 * @property integer $id
 * @property string $po_no
 * @property string $description
 *
 * @property PoItem $poItem
 */
class Po extends \yii\db\ActiveRecord{
	/**
	 * @inheritdoc
	 */
	public static function tableName(){
		return 'po';
	}

	/**
	 * @inheritdoc
	 */
	public function rules(){
		return [
			[['description'], 'string'],
			[['po_no'], 'string', 'max' => 10]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels(){
		return [
			'id' => Yii::t('backend', 'ID'),
			'po_no' => Yii::t('backend', 'Po No'),
			'description' => Yii::t('backend', 'Description'),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPoItem(){
// Globals::dump( $this->hasOne(PoItem::className(), ['id' => 'id'] ) , true);

		return $this->hasMany(PoItem::className(), ['po_id' => 'id']);

		// return $this->hasOne(PoItem::className(), ['id' => 'id']);
	}
}
