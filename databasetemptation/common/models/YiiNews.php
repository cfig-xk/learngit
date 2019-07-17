<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_news".
 *
 * @property int $newsid
 * @property string $标题
 * @property string $内容
 * @property string $发布时间
 */
class YiiNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['newsid', '标题', '内容', '发布时间'], 'required'],
            [['newsid'], 'integer'],
            [['发布时间'], 'safe'],
            [['标题', '内容'], 'string', 'max' => 255],
            [['newsid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'newsid' => 'Newsid',
            '标题' => '标题',
            '内容' => '内容',
            '发布时间' => '发布时间',
        ];
    }
}
