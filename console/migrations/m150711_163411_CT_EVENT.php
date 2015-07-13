<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_163411_CT_EVENT extends Migration {

	public function up(){
		// create table `event`
		if ($this->db->schema->getTableSchema('event', true))
			$this->dropTable('{{%event}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%event}}', [
			'id'			=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'id_user'		=> Schema::TYPE_INTEGER,
			'title'			=> Schema::TYPE_STRING . '(200) NOT NULL',
			'description'	=> Schema::TYPE_STRING . '(500) NOT NULL',
			'created'		=> Schema::TYPE_DATETIME,
			'id_creator'	=> Schema::TYPE_INTEGER,
			'changed'		=> Schema::TYPE_DATETIME,
			'id_changer'	=> Schema::TYPE_INTEGER,
			"PRIMARY KEY (id)",
		], $tableOptions);
	}

	public function down() {
		if ($this->db->schema->getTableSchema('event', true))
			$this->dropTable('{{%event}}');
	}
}
