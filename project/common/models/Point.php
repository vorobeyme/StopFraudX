<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%point}}".
 *
 * @property integer $id
 * @property integer $organization_id
 * @property string $name
 * @property string $description
 * @property integer $status
 */
class Point extends \yii\db\ActiveRecord
{
    const STATUS_FAKE = 0;
    const STATUS_VERIFIED = 1;
    const STATUS_PENDING = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'point';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_id', 'name', 'status'], 'required'],
            [['organization_id', 'status'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['status'], 'in', 'range' => [self::STATUS_FAKE, self::STATUS_PENDING]]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'organization_id' => Yii::t('app', 'Organization ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_time' => Yii::t('app', 'Created time'),
            'updated_time' => Yii::t('app', 'Updated time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPointLocation()
    {
        return $this->hasOne(PointLocation::className(), ['point_id' => 'id']);
    }
}
