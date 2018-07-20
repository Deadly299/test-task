<?php

use yii\db\Migration;

/**
 * Class m180719_204317_create_table_1
 */
class m180719_204317_create_table_1 extends Migration
{
    public function up()
    {
        $this->createTable('table1', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255'),
        ]);
    }

    public function down()
    {
        $this->dropTable('table1');
    }
}
