<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $created
 * @property integer $id_creator
 * @property string $changed
 * @property integer $id_changer
 */
class Event extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'event';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['title', 'description'], 'required'],
			[['created', 'changed'], 'safe'],
			[['id_creator', 'id_changer'], 'integer'],
			[['title'], 'string', 'max' => 200],
			[['description'], 'string', 'max' => 500],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'created' => 'Created',
			'id_creator' => 'Id Creator',
			'changed' => 'Changed',
			'id_changer' => 'Id Changer',
		];
	}
}
