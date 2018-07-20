<?php

use yii\db\Migration;

/**
 * Class m180719_204327_create_table_3
 */
class m180719_204327_create_table_3 extends Migration
{
    public function up()
    {
        $this->createTable('table3', [
            'id' => $this->primaryKey(),
            'table2_id' => $this->integer()->notNull(),
            'field1' => $this->string('255'),
            'field2' => $this->string('255'),
            'field3' => $this->string('255'),
        ]);

        $this->createIndex('idx-table3-table2_id', 'table3', 'table2_id');

        $this->addForeignKey(
            'fk-table3-table2_id',
            'table3',
            'table2_id',
            'table2',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('table3');
    }
}
