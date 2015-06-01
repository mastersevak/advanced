<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property integer $id
 * @property string $recever_name
 * @property string $recever_email
 * @property string $subject
 * @property string $content
 * @property string $attachment
 */
class Emails extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'emails';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'recever_name', 'recever_email', 'subject', 'content', 'attachment'], 'required'],
			[['id'], 'integer'],
			[['content'], 'string'],
			[['recever_name'], 'string', 'max' => 50],
			[['recever_email'], 'string', 'max' => 200],
			[['subject', 'attachment'], 'string', 'max' => 255]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => Yii::t('email', 'ID'),
			'recever_name' => Yii::t('email', 'Recever Name'),
			'recever_email' => Yii::t('email', 'Recever Email'),
			'subject' => Yii::t('email', 'Subject'),
			'content' => Yii::t('email', 'Content'),
			'attachment' => Yii::t('email', 'Attachment'),
		];
	}
}
