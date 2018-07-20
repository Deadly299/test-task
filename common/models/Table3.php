<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table3".
 *
 * @property int $id
 * @property int $table2_id
 * @property string $field1
 * @property string $field2
 * @property string $field3
 *
 * @property Table2 $table2
 */
class Table3 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table3';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['table2_id'], 'required'],
            [['table2_id'], 'integer'],
            [['field1', 'field2', 'field3'], 'string', 'max' => 255],
            [['table2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Table2::className(), 'targetAttribute' => ['table2_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'table2_id' => 'Table2 ID',
            'field1' => 'Field1',
            'field2' => 'Field2',
            'field3' => 'Field3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTable2()
    {
        return $this->hasOne(Table2::className(), ['id' => 'table2_id']);
    }
}
