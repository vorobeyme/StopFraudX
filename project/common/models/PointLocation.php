<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "point_location".
 *
 * @property integer $id
 * @property integer $point_id
 * @property double $latitude
 * @property double $longitude
 */
class PointLocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'point_location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['point_id'], 'integer'],
            [['latitude', 'longitude'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'point_id' => Yii::t('app', 'Point ID'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
        ];
    }
}
