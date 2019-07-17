<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_developer".
 *
 * @property string $学号
 * @property string $专业
 * @property string $姓名
 * @property string $性别 男女之一
 */
class YiiDeveloper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_developer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['学号', '专业', '姓名', '性别'], 'required'],
            [['学号', '专业', '姓名'], 'string', 'max' => 20],
            [['性别'], 'string', 'max' => 10],
            [['学号'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '学号' => '学号',
            '专业' => '专业',
            '姓名' => '姓名',
            '性别' => '性别',
        ];
    }
}
