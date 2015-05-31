<?php

namespace backend\models;

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

	const CREATE_COMPANY = 'create-company';

	/**
	 * @inheritdoc
	 */
	public $file;
	public static function tableName(){
		return 'companies';
	}

	/**
	 * @inheritdoc
	 */
	public function rules(){
		return [
			[['company_id'], 'integer'],
			[['company_naem', 'company_email', 'company_addres', 'company_creates_date', 'company_status'], 'required'],
			[['company_creates_date'], 'safe'],
			[['company_status'], 'string'],
			[['file'], 'file'],
			[['company_naem', 'company_email', 'company_addres'], 'string', 'max' => 100]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels(){
		return [
			'company_id'			=> 'Company ID',
			'company_naem'			=> 'Company Name',
			'company_email'			=> 'Company Email',
			'company_addres' 		=> 'Company Addres',
			'file' => Yii::t('settings', 'Logo'),
			'company_creates_date'	=> 'Company Creates Date',
			'company_status' 		=> 'Company Status',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getBranches(){
		return $this->hasMany(Branches::className(), ['companies_company_id' => 'company_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getDepartments(){
		return $this->hasMany(Departments::className(), ['companies_company_id' => 'company_id']);
	}
}
