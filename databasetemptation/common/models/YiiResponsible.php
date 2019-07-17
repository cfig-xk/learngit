<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_responsible".
 *
 * @property int $workerid
 * @property int $activityid
 *
 * @property YiiActivity $activity
 * @property YiiWorker $worker
 */
class YiiResponsible extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_responsible';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['workerid', 'activityid'], 'required'],
            [['workerid', 'activityid'], 'integer'],
            [['workerid', 'activityid'], 'unique', 'targetAttribute' => ['workerid', 'activityid']],
            [['activityid'], 'exist', 'skipOnError' => true, 'targetClass' => YiiActivity::className(), 'targetAttribute' => ['activityid' => 'activityid']],
            [['workerid'], 'exist', 'skipOnError' => true, 'targetClass' => YiiWorker::className(), 'targetAttribute' => ['workerid' => 'workerid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'workerid' => 'Workerid',
            'activityid' => 'Activityid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(YiiActivity::className(), ['activityid' => 'activityid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(YiiWorker::className(), ['workerid' => 'workerid']);
    }
}
