<?php
namespace frontend\models;

use backend\models\AuthAssignment;
use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model{

	public $username;
	public $email;
	public $password;
	public $first_name, $last_name;
	public $permissions;

	/**
	 * @inheritdoc
	 */
	public function rules(){

		return [
			['username', 'filter', 'filter' => 'trim'],

			['username', 'required'],
			['first_name', 'required'],
			['last_name', 'required'],

			['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
			['username', 'string', 'min' => 2, 'max' => 255],

			['email', 'filter', 'filter' => 'trim'],
			['email', 'required'],
			['email', 'email'],
			['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

			['password', 'required'],
			['password', 'string', 'min' => 4],
		];
	}

	/**
	 * Signs user up.
	 *
	 * @return User|null the saved model or null if saving fails
	 */
	public function signup(){

		if ($this->validate()) {
			$user = new User();
			$user->first_name	= $this->first_name;
			$user->last_name	= $this->last_name;
			$user->username		= $this->username;
			$user->email		= $this->email;
			$user->setPassword($this->password);
			$user->generateAuthKey();
			$user->save();

			// lets add the permissions
			$permissionList = $_POST['SignupForm']['permissions'];

			if(!empty($permissionList) ){

				foreach ($permissionList as  $permission) {

					$newPermission = new AuthAssignment;
					$newPermission->user_id		= $user->id;
					$newPermission->item_name	= $permission;
					$newPermission->save();
				}
			}

			return $user;
		}

		return null;
	}
}
