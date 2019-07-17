<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_organization".
 *
 * @property int $collegeid
 * @property string $校区
 * @property string $名称 津南、八里台、泰达之一
 * @property int $人数
 *
 * @property YiiActivity[] $yiiActivities
 * @property YiiWorker[] $yiiWorkers
 */
class YiiOrganization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_organization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['collegeid', '校区', '名称'], 'required'],
            [['collegeid', '人数'], 'integer'],
            [['校区', '名称'], 'string', 'max' => 20],
            [['collegeid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'collegeid' => 'Collegeid',
            '校区' => '校区',
            '名称' => '名称',
            '人数' => '人数',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYiiActivities()
    {
        return $this->hasMany(YiiActivity::className(), ['collegeid' => 'collegeid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYiiWorkers()
    {
        return $this->hasMany(YiiWorker::className(), ['collegeid' => 'collegeid']);
    }
}
