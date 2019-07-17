<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_history".
 *
 * @property int $historyid
 * @property string $概要
 * @property string $时间
 * @property string $内容
 *
 * @property YiiStory[] $yiiStories
 * @property YiiPerson[] $people
 */
class YiiHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['historyid', '概要', '时间', '内容'], 'required'],
            [['historyid'], 'integer'],
            [['时间'], 'safe'],
            [['概要', '内容'], 'string', 'max' => 255],
            [['historyid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'historyid' => 'Historyid',
            '概要' => '概要',
            '时间' => '时间',
            '内容' => '内容',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYiiStories()
    {
        return $this->hasMany(YiiStory::className(), ['historyid' => 'historyid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(YiiPerson::className(), ['personid' => 'personid'])->viaTable('yii_story', ['historyid' => 'historyid']);
    }
}
