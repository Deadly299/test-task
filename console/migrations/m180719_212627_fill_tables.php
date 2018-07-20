<?php

use yii\db\Migration;

/**
 * Class m180719_212627_fill_tables
 */
class m180719_212627_fill_tables extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('table1', ['name' => 'first item table1']);
        $this->insert('table1', ['name' => 'second item table1']);

        $this->insert('table2', ['name' => 'first item table2 table1', 'table1_id' => 1]);
        $this->insert('table2', ['name' => 'second item table2 table1', 'table1_id' => 1]);
        $this->insert('table2', ['name' => 'second item table2 table1', 'table1_id' => 2]);


        $this->insert('table3', [
            'table2_id' => 1,
            'field1' => 'text field 1.1',
            'field2' => 'text field 2.1',
            'field3' => 'text field 3.1',
        ]);
        $this->insert('table3', [
            'table2_id' => 1,
            'field1' => 'text field 1.2',
            'field2' => 'text field 2.2',
            'field3' => 'text field 3.2',
        ]);
        $this->insert('table3', [
            'table2_id' => 2,
            'field1' => 'text field 1.2',
            'field2' => 'text field 2.2',
            'field3' => 'text field 3.2',
        ]);
    }

    public function down()
    {
        return false;
    }

}
