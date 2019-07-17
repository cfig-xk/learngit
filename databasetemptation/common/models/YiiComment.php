<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_comment".
 *
 * @property int $commentid
 * @property int $userid
 * @property string $发布时间
 * @property string $内容
 *
 * @property User $user
 */
class YiiComment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['commentid', 'userid', '发布时间', '内容'], 'required'],
            [['commentid', 'userid'], 'integer'],
            [['发布时间'], 'safe'],
            [['内容'], 'string', 'max' => 255],
            [['commentid'], 'unique'],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'commentid' => 'Commentid',
            'userid' => 'Userid',
            '发布时间' => '发布时间',
            '内容' => '内容',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userid']);
    }
}
