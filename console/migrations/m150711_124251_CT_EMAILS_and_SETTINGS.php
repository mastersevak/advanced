<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_124251_CT_EMAILS_and_SETTINGS extends Migration {

	public function up(){
		// create table `emails`
		if ($this->db->schema->getTableSchema('emails', true))
			$this->dropTable('{{%emails}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%emails}}', [
			'id'			=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'recever_name'	=> Schema::TYPE_STRING . '(50)',
			'recever_email'	=> Schema::TYPE_STRING . '(200)',
			'subject'		=> Schema::TYPE_STRING . '(250)',
			'content'		=> Schema::TYPE_TEXT,
			'attachment'	=> Schema::TYPE_STRING . '(250)',
			"primary key (id)",
		], $tableOptions);

		// create table `settings`
		if ($this->db->schema->getTableSchema('settings', true))
			$this->dropTable('{{%settings}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%settings}}', [
			'id'		=> Schema::TYPE_INTEGER. " UNSIGNED NOT NULL AUTO_INCREMENT",
			'title'		=> Schema::TYPE_STRING . '(255) CHARACTER SET utf8 DEFAULT NULL',
			'value'		=> Schema::TYPE_STRING . '(255) CHARACTER SET utf8 DEFAULT NULL',
			'code'		=> Schema::TYPE_STRING . '(255) CHARACTER SET utf8 DEFAULT NULL',
			'category'	=> Schema::TYPE_STRING . '(255) CHARACTER SET utf8 DEFAULT NULL',
			'pos'		=> Schema::TYPE_INTEGER. " UNSIGNED DEFAULT NULL",
			'created'	=> Schema::TYPE_DATETIME,
			'id_creator'=> Schema::TYPE_INTEGER. " UNSIGNED DEFAULT NULL",
			'changed'	=> Schema::TYPE_DATETIME,
			'id_changer'=> Schema::TYPE_INTEGER. " UNSIGNED DEFAULT NULL",
			'content'	=> Schema::TYPE_TEXT,
			"PRIMARY KEY	(id)",
			"KEY code 		(code)",
			"KEY category 	(category)",
			"KEY value 		(value)"
		], $tableOptions);
	}

	public function down(){
		if ($this->db->schema->getTableSchema('emails', true))
			$this->dropTable('{{%emails}}');

		if ($this->db->schema->getTableSchema('settings', true))
			$this->dropTable('{{%settings}}');
	}
}
