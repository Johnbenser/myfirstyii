<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property int $P_Id
 * @property string $name
 * @property string|null $description
 * @property int|null $created_by
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['P_Id', 'name'], 'required'],
            [['P_Id', 'created_by'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['P_Id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'P_Id' => 'P ID',
            'name' => 'Name',
            'description' => 'Description',
            'created_by' => 'Created By',
        ];
    }
}
