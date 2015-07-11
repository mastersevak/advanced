<?php

use yii\db\Schema;
use yii\db\Migration;

class m150530_215637_CT_AUTH_ASSIGNMENT_and_AUTH_ITEM_CHILD_and_AUTH_ITEM_and_AUTH_RULE extends Migration {

	public function up(){

		// create table `auth_rule`
		if ($this->db->schema->getTableSchema('auth_rule', true))
			$this->dropTable('{{%auth_rule}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%auth_rule}}', [
			'name'			=> Schema::TYPE_STRING . '(64) NOT NULL',
			'data'			=> Schema::TYPE_TEXT,
			'user_id'		=> Schema::TYPE_STRING . '(64) NOT NULL',
			'created_at'	=> Schema::TYPE_INTEGER,
			'updated_at'	=> Schema::TYPE_INTEGER,
			"primary key (`name`)",
		], $tableOptions);

		// create table `auth_item`
		if ($this->db->schema->getTableSchema('auth_item', true))
			$this->dropTable('{{%auth_item}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%auth_item}}', [
			'name'			=> Schema::TYPE_STRING . '(64) NOT NULL',
			'type'			=> Schema::TYPE_INTEGER,
			'description'	=> Schema::TYPE_TEXT,
			'rule_name'		=> Schema::TYPE_STRING . '(64) NOT NULL',
			'data'			=> Schema::TYPE_TEXT,
			'created_at'	=> Schema::TYPE_INTEGER,
			'updated_at'	=> Schema::TYPE_INTEGER,
			"PRIMARY KEY (`name`)",
			"KEY type (`type`)",
			"KEY rule_name (`rule_name`)",
		], $tableOptions);

		$this->addForeignKey('auth_item_ibfk_1', "{{%auth_item}}", 'rule_name', "{{%auth_rule}}", 'name', NULL, 'CASCADE');

		// create table `auth_item_child`
		if ($this->db->schema->getTableSchema('auth_item_child', true))
			$this->dropTable('{{%auth_item_child}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%auth_item_child}}', [
			'parent'	=> Schema::TYPE_STRING . '(64) NOT NULL',
			'child'		=> Schema::TYPE_STRING . '(64) NOT NULL',
			"primary key (`parent`, `child`)",
		], $tableOptions);

		$this->addForeignKey('auth_item_child_ibfk_2', "{{%auth_item_child}}", 'child',  "{{%auth_item}}", 'name', 'CASCADE', 'CASCADE');
		$this->addForeignKey('auth_item_child_ibfk_1', "{{%auth_item_child}}", 'parent', "{{%auth_item}}", 'name', 'CASCADE', 'CASCADE');

		// create table `auth_assignment`
		if ($this->db->schema->getTableSchema('auth_assignment', true))
			$this->dropTable('{{%auth_assignment}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';
		$this->createTable('{{%auth_assignment}}', [
			'item_name'		=> Schema::TYPE_STRING . '(64) NOT NULL',
			'user_id'		=> Schema::TYPE_STRING . '(64) NOT NULL',
			'created_at'	=> Schema::TYPE_INTEGER,
			"primary key (`item_name`, `user_id`)",
		], $tableOptions);

		$this->addForeignKey('auth_assignment_ibfk_1', "{{%auth_assignment}}", 'item_name', "{{%auth_item}}", 'name', 'CASCADE', 'CASCADE');
	}

	public function down(){
		$this->dropTable('{{%auth_assignment}}');
		$this->dropTable('{{%auth_item_child}}');
		$this->dropTable('{{%auth_item}}');
		$this->dropTable('{{%auth_rule}}');
	}
}
