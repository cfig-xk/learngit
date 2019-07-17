<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_person".
 *
 * @property int $personid
 * @property string $性别 男女之一
 * @property string $姓名
 * @property string $简介
 *
 * @property YiiStory[] $yiiStories
 * @property YiiHistory[] $histories
 */
class YiiPerson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personid', '性别', '姓名'], 'required'],
            [['personid'], 'integer'],
            [['性别', '姓名'], 'string', 'max' => 10],
            [['简介'], 'string', 'max' => 1024],
            [['personid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'personid' => 'Personid',
            '性别' => '性别',
            '姓名' => '姓名',
            '简介' => '简介',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYiiStories()
    {
        return $this->hasMany(YiiStory::className(), ['personid' => 'personid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistories()
    {
        return $this->hasMany(YiiHistory::className(), ['historyid' => 'historyid'])->viaTable('yii_story', ['personid' => 'personid']);
    }
}
