<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table1".
 *
 * @property int $id
 * @property string $name
 *
 * @property Table2[] $table2s
 */
class Table1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTable2s()
    {
        return $this->hasMany(Table2::className(), ['table1_id' => 'id']);
    }
}
