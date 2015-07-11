<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_104342_CT_COMPANIES_BRANCHES_CUSTOMERS_DEPARTMENTS_LOCATIONS extends Migration {

	public function up(){
		// create table `companies`
		if ($this->db->schema->getTableSchema('companies', true))
			$this->dropTable('{{%companies}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%companies}}', [
			'company_id'			=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'company_naem'			=> Schema::TYPE_STRING . '(100)',
			'company_email'			=> Schema::TYPE_STRING . '(100)',
			'company_addres'		=> Schema::TYPE_STRING . '(100)',
			'logo'					=> Schema::TYPE_STRING . '(200)',
			'company_creates_date'	=> Schema::TYPE_DATETIME,
			'company_status'		=> "ENUM('active', 'inactive') NOT NULL DEFAULT 'active'",
			'company_start_date'	=> Schema::TYPE_DATE,

			"primary key (company_id)",
		], $tableOptions);

		// create table `branches`
		if ($this->db->schema->getTableSchema('branches', true))
			$this->dropTable('{{%branches}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%branches}}', [
			'branch_id'				=> Schema::TYPE_INTEGER. " NOT NULL AUTO_INCREMENT",
			'companies_company_id'	=> Schema::TYPE_INTEGER,
			'branch_name'			=> Schema::TYPE_STRING . '(100)',
			'branch_address'		=> Schema::TYPE_STRING . '(100)',
			'branch_created_date'	=> Schema::TYPE_DATETIME,
			'branch_start_date'		=> Schema::TYPE_DATE,
			'branch_status'			=> "ENUM('active', 'inactive') NOT NULL DEFAULT 'active'",
			"primary key (branch_id)",
		], $tableOptions);

		// create table `customers`
		if ($this->db->schema->getTableSchema('customers', true))
			$this->dropTable('{{%customers}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%customers}}', [
			'customer_id'	=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'customer_name'	=> Schema::TYPE_STRING . '(100)',
			'zip_code'		=> Schema::TYPE_STRING . '(20)',
			'city'			=> Schema::TYPE_STRING . '(100)',
			'province'		=> Schema::TYPE_STRING . '(100)',
			"primary key (customer_id)",
		], $tableOptions);

		// create table `departments`
		if ($this->db->schema->getTableSchema('departments', true))
			$this->dropTable('{{%departments}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%departments}}', [
			'department_id'				=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'branches_branch_id'		=> Schema::TYPE_INTEGER,
			'companies_company_id'		=> Schema::TYPE_INTEGER,
			'department_name'			=> Schema::TYPE_STRING . '(100)',
			'department_created_date'	=> Schema::TYPE_DATETIME,
			'department_status'			=> "ENUM('active', 'inactive') NOT NULL DEFAULT 'active'",
			"primary key (department_id)",
		], $tableOptions);

		// create table `locations`
		if ($this->db->schema->getTableSchema('locations', true))
			$this->dropTable('{{%locations}}');

		$tableOptions = null;
		if ($this->db->driverName === 'mysql') $tableOptions = 'ENGINE=InnoDB';

		$this->createTable('{{%locations}}', [
			'location_id'	=> Schema::TYPE_INTEGER. " AUTO_INCREMENT",
			'zip_code'		=> Schema::TYPE_STRING . '(20)',
			'city'			=> Schema::TYPE_STRING . '(100)',
			'province'		=> Schema::TYPE_STRING . '(100)',
			"primary key (location_id)",
		], $tableOptions);
	}

	public function down(){
		if ($this->db->schema->getTableSchema('companies', true))
			$this->dropTable('{{%companies}}');

		if ($this->db->schema->getTableSchema('branches', true))
			$this->dropTable('{{%branches}}');

		if ($this->db->schema->getTableSchema('customers', true))
			$this->dropTable('{{%customers}}');

		if ($this->db->schema->getTableSchema('departments', true))
			$this->dropTable('{{%departments}}');

		if ($this->db->schema->getTableSchema('locations', true))
			$this->dropTable('{{%locations}}');
	}
}
