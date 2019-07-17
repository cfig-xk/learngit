<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_activity".
 *
 * @property int $activityid
 * @property int $collegeid
 * @property string $名称
 * @property string $地点
 * @property string $时间
 * @property string $内容
 *
 * @property YiiOrganization $college
 * @property YiiResponsible[] $yiiResponsibles
 * @property YiiWorker[] $workers
 */
class YiiActivity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activityid', 'collegeid', '名称', '地点', '时间', '内容'], 'required'],
            [['activityid', 'collegeid'], 'integer'],
            [['时间'], 'safe'],
            [['名称', '地点'], 'string', 'max' => 20],
            [['内容'], 'string', 'max' => 255],
            [['activityid'], 'unique'],
            [['collegeid'], 'exist', 'skipOnError' => true, 'targetClass' => YiiOrganization::className(), 'targetAttribute' => ['collegeid' => 'collegeid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activityid' => 'Activityid',
            'collegeid' => 'Collegeid',
            '名称' => '名称',
            '地点' => '地点',
            '时间' => '时间',
            '内容' => '内容',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollege()
    {
        return $this->hasOne(YiiOrganization::className(), ['collegeid' => 'collegeid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYiiResponsibles()
    {
        return $this->hasMany(YiiResponsible::className(), ['activityid' => 'activityid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(YiiWorker::className(), ['workerid' => 'workerid'])->viaTable('yii_responsible', ['activityid' => 'activityid']);
    }
}
