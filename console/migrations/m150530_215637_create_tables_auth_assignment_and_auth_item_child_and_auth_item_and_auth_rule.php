<?php

use yii\db\Schema;
use yii\db\Migration;

class m150530_215637_create_tables_auth_assignment_and_auth_item_child_and_auth_item_and_auth_rule extends Migration {

	public function up(){
		// create table `auth_rule`(
		// 	`name` varchar(64) not null,
		// 	`data` text,
		// 	`created_at` integer,
		// 	`updated_at` integer, primary key (`name`)
		// ) engine InnoDB;

		// create table `auth_item`(
		// 	`name` varchar(64) not null,
		// 	`type` integer not null,
		// 	`description` text,
		// 	`rule_name` varchar(64),
		// 	`data` text,
		// 	`created_at` integer,
		// 	`updated_at` integer,
		// 	primary key (`name`),
		// 	foreign key (`rule_name`) references `auth_rule` (`name`) on delete set null on update cascade,
		// 	key `type` (`type`)
		// ) engine InnoDB;

		// create table `auth_item_child`(
		// 	`parent` varchar(64) not null,
		// 	`child` varchar(64) not null,
		// 	primary key (`parent`, `child`),
		// 	foreign key (`parent`) references `auth_item` (`name`) on delete cascade on update cascade,
		// 	foreign key (`child`) references `auth_item` (`name`) on delete cascade on update cascade
		// ) engine InnoDB;

		// create table `auth_assignment`(
		// 	`item_name` varchar(64) not null,
		// 	`user_id` varchar(64) not null,
		// 	`created_at` integer,
		// 	primary key (`item_name`, `user_id`),
		// 	foreign key (`item_name`) references `auth_item` (`name`) on delete cascade on update cascade
		// ) engine InnoDB;

		// Table auth_rule
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



		// Table auth_item
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
			"KEY rule_name (`rule_name`)",
			"KEY type (`type`)",
		], $tableOptions);
		// CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
		$this->addForeignKey('auth_item_ibfk_1', 'auth_rule', 'name', 'auth_rule', 'name');




		// Table auth_item_child
		if (!$this->db->schema->getTableSchema('auth_item_child', true))
			$this->dropTable('{{%auth_item_child}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%auth_item_child}}', [
			'parent'	=> Schema::TYPE_STRING . ' NOT NULL',
			'child'		=> Schema::TYPE_STRING . ' NOT NULL',
			"primary key (`parent`, `child`)",
		], $tableOptions);

			// CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
		$this->addForeignKey('auth_item_child_ibfk_1', 'KEY', 'parent', 'auth_item', 'name');

			// CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
		$this->addForeignKey('auth_item_child_ibfk_2', 'KEY', 'child', 'auth_item', 'name');



		// Table auth_assignment
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
			// "foreign key (`item_name`) references `auth_item` (`name`) on delete cascade on update cascade",
			// CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
		$this->addForeignKey('auth_assignment_ibfk_1', 'KEY', 'item_name', 'auth_item', 'name');
	}

	public function down(){
		$this->dropTable('{{%auth_assignment}}');
		$this->dropTable('{{%auth_item_child}}');
		$this->dropTable('{{%auth_item}}');
		$this->dropTable('{{%auth_rule}}');
	}
}
