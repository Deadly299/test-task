<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table2".
 *
 * @property int $id
 * @property string $name
 * @property int $table1_id
 *
 * @property Table1 $table1
 * @property Table3[] $table3s
 */
class Table2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['table1_id'], 'required'],
            [['table1_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['table1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Table1::className(), 'targetAttribute' => ['table1_id' => 'id']],
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
            'table1_id' => 'Table1 ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTable1()
    {
        return $this->hasOne(Table1::className(), ['id' => 'table1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTable3s()
    {
        return $this->hasMany(Table3::className(), ['table2_id' => 'id']);
    }
}
