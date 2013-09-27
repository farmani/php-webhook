<?php

class m130927_133747_create_new_table extends CDbMigration
{
	public function up()
    {
        $this->createTable('tbl_users', array(
            'id' => 'pk',
            'username' => 'VARCHAR(255) NOT NULL',
            'password' => 'VARCHAR(255) NOT NULL',
        ));
    }
 
    public function down()
    {
        $this->dropTable('tbl_news');
    }

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}