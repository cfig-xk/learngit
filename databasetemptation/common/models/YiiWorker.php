<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_worker".
 *
 * @property int $workerid
 * @property int $collegeid
 * @property string $姓名
 * @property string $电话
 * @property string $地址
 * @property string $邮箱
 * @property string $身份
 *
 * @property YiiResponsible[] $yiiResponsibles
 * @property YiiActivity[] $activities
 * @property YiiOrganization $college
 */
class YiiWorker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['workerid', 'collegeid', '姓名'], 'required'],
            [['workerid', 'collegeid'], 'integer'],
            [['姓名', '电话'], 'string', 'max' => 20],
            [['地址', '邮箱', '身份'], 'string', 'max' => 100],
            [['workerid'], 'unique'],
            [['collegeid'], 'exist', 'skipOnError' => true, 'targetClass' => YiiOrganization::className(), 'targetAttribute' => ['collegeid' => 'collegeid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'workerid' => 'Workerid',
            'collegeid' => 'Collegeid',
            '姓名' => '姓名',
            '电话' => '电话',
            '地址' => '地址',
            '邮箱' => '邮箱',
            '身份' => '身份',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYiiResponsibles()
    {
        return $this->hasMany(YiiResponsible::className(), ['workerid' => 'workerid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(YiiActivity::className(), ['activityid' => 'activityid'])->viaTable('yii_responsible', ['workerid' => 'workerid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollege()
    {
        return $this->hasOne(YiiOrganization::className(), ['collegeid' => 'collegeid']);
    }
}
