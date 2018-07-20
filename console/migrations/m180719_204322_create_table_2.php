<?php

use yii\db\Migration;

/**
 * Class m180719_204322_create_table_2
 */
class m180719_204322_create_table_2 extends Migration
{
    public function up()
    {
        $this->createTable('table2', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255'),
            'table1_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex('idx-table2-table1_id', 'table2', 'table1_id');

        $this->addForeignKey(
            'fk-table2-table1_id',
            'table2',
            'table1_id',
            'table1',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        $this->dropTable('table2');
    }
}
