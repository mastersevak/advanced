<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property integer $company_id
 * @property string $company_naem
 * @property string $company_email
 * @property string $company_addres
 * @property string $company_creates_date
 * @property string $company_status
 */
class Companies extends \yii\db\ActiveRecord{
	/**
	 * @inheritdoc
	 */
	public static function tableName(){
		return 'companies';
	}

	/**
	 * @inheritdoc
	 */
	public function rules(){
		return [
			[['company_naem', 'company_email', 'company_addres', 'company_creates_date', 'company_status'], 'required'],
			[['company_creates_date', 'company_start_date'], 'safe'],
			[['company_status'], 'string'],
			[['company_naem', 'logo', 'company_email', 'company_addres'], 'string', 'max' => 100],

			// date validations
			['company_start_date', 'checkDate'],
		];
	}

	// date validation function
	public function checkDate($attribute, $params){
		$today			= date('Y-m-d');
		$selectedDate	= date($this->company_start_date);

		if( $selectedDate > $today )
			$this->addError($attribute, 'Company start date Must be smaller!');

	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels(){
		return [
			'company_id'			=> Yii::t('settings', 'Company ID'),
			'company_naem'			=> Yii::t('settings', 'Company Naem'),
			'company_email'			=> Yii::t('settings', 'Company Email'),
			'company_addres'		=> Yii::t('settings', 'Company Addres'),
			'logo'					=> Yii::t('settings', 'Logo'),
			'company_start_date'	=> Yii::t('settings', 'Company Start Date'),
			'company_creates_date'	=> Yii::t('settings', 'Company Creates Date'),
			'company_status'		=> Yii::t('settings', 'Company Status'),
		];
	}
}
