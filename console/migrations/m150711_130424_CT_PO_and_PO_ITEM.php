<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_130424_CT_PO_and_PO_ITEM extends Migration {
	public function up() {
		// create table `po`
		if ($this->db->schema->getTableSchema('po', true))
			$this->dropTable('{{%po}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%po}}', [
			'id'			=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'po_no'			=> Schema::TYPE_STRING . '(10)',
			'description'	=> Schema::TYPE_TEXT,
			"PRIMARY KEY (id)",
		], $tableOptions);

		// create table `po_item`
		if ($this->db->schema->getTableSchema('po_item', true))
			$this->dropTable('{{%po_item}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%po_item}}', [
			'id'			=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'po_id'			=> Schema::TYPE_INTEGER,
			'po_item_no'	=> Schema::TYPE_STRING . '(10)',
			'quantity'		=> Schema::TYPE_DOUBLE,
			"primary key (id)",
		], $tableOptions);
	}

	public function down(){
		if ($this->db->schema->getTableSchema('po', true))
			$this->dropTable('{{%po}}');

		if ($this->db->schema->getTableSchema('po_item', true))
			$this->dropTable('{{%po_item}}');
	}
}
