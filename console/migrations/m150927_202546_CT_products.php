<?php

use yii\db\Schema;
use yii\db\Migration;

class m150927_202546_CT_products extends Migration {

	public function up(){
		// create table `product`
		if ($this->db->schema->getTableSchema('product', true))
			$this->dropTable('{{%product}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%product}}', [
			'id'			=> Schema::TYPE_INTEGER . " AUTO_INCREMENT",
			'id_category'	=> Schema::TYPE_INTEGER,
			'id_brand'		=> Schema::TYPE_INTEGER,
			'article'		=> Schema::TYPE_STRING . '(500) NOT NULL',
			'name'			=> Schema::TYPE_STRING . '(1500) NOT NULL',
			'min_price'		=> Schema::TYPE_DOUBLE . '(10,2) DEFAULT NULL',
			'price_old'		=> Schema::TYPE_DOUBLE . '(9,2) DEFAULT NULL',
			'price'			=> Schema::TYPE_DOUBLE . '(10,2) DEFAULT NULL',
			'status'		=> Schema::TYPE_SMALLINT,
			'has_photo'		=> Schema::TYPE_SMALLINT,
			'viewed'		=> Schema::TYPE_INTEGER,
			'delivery'		=> Schema::TYPE_INTEGER,
			'description'	=> Schema::TYPE_STRING . '(800) NOT NULL',
			'created'		=> Schema::TYPE_DATETIME,
			'id_creator'	=> Schema::TYPE_INTEGER,
			'changed'		=> Schema::TYPE_DATETIME,
			'id_changer'	=> Schema::TYPE_INTEGER,
			'PRIMARY KEY	(id)',
			'KEY article	(article)',
			'KEY id_category (id_category)',
			'KEY viewed		(viewed)',
			'KEY changed	(changed)',
			'KEY price		(price)',
			'KEY min_price	(min_price)',
			'KEY status 	(status)',
			'KEY has_photo	(has_photo)',
			'KEY price_old	(price_old)'
		], $tableOptions);
	}

	public function down() {
		if ($this->db->schema->getTableSchema('product', true))
			$this->dropTable('{{%product}}');
	}
}
