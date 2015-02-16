<?php

namespace api\modules\v1\models;

use \yii\db\ActiveRecord;

/**
 * Model class for table "point".
 *
 * @property integer $id
 * @property integer $organization_id
 * @property string $name
 * @property string $description
 * @property integer $status
 */
class Point extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%point}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'organization_id', 'name', 'status'], 'required'],
            [['id', 'organization_id', 'status'], 'integer']
        ];
    }
}
