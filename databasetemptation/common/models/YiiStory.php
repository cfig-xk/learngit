<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_story".
 *
 * @property int $personid
 * @property int $historyid
 *
 * @property YiiHistory $history
 * @property YiiPerson $person
 */
class YiiStory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_story';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personid', 'historyid'], 'required'],
            [['personid', 'historyid'], 'integer'],
            [['personid', 'historyid'], 'unique', 'targetAttribute' => ['personid', 'historyid']],
            [['historyid'], 'exist', 'skipOnError' => true, 'targetClass' => YiiHistory::className(), 'targetAttribute' => ['historyid' => 'historyid']],
            [['personid'], 'exist', 'skipOnError' => true, 'targetClass' => YiiPerson::className(), 'targetAttribute' => ['personid' => 'personid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'personid' => 'Personid',
            'historyid' => 'Historyid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistory()
    {
        return $this->hasOne(YiiHistory::className(), ['historyid' => 'historyid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasOne(YiiPerson::className(), ['personid' => 'personid']);
    }
}
