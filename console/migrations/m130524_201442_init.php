<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_init extends Migration {

	public function up(){

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%user}}', [
			'id'					=> Schema::TYPE_PK,
			'username'				=> Schema::TYPE_STRING	. '(250) COLLATE utf8_unicode_ci NOT NULL',
			'auth_key'				=> Schema::TYPE_STRING	. '(32)	COLLATE utf8_unicode_ci NOT NULL',
			'password_hash'			=> Schema::TYPE_STRING	. '(255) COLLATE utf8_unicode_ci NOT NULL',
			'password_reset_token'	=> Schema::TYPE_STRING	. '(255) COLLATE utf8_unicode_ci DEFAULT NULL',
			'email'					=> Schema::TYPE_STRING	. '(50)	COLLATE utf8_unicode_ci NOT NULL',
			'status'				=> Schema::TYPE_SMALLINT. '(6) NOT NULL DEFAULT 10',
			'created_at'			=> Schema::TYPE_INTEGER	. ' NOT NULL',
			'updated_at'			=> Schema::TYPE_INTEGER	. ' NOT NULL',
			'first_name'			=> Schema::TYPE_STRING	. '(50) COLLATE utf8_unicode_ci NOT NULL',
			'last_name'				=> Schema::TYPE_STRING	. '(50) COLLATE utf8_unicode_ci NOT NULL',
		], $tableOptions);
	}

	public function down(){
		$this->dropTable('{{%user}}');
	}
}
