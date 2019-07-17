<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii_donation".
 *
 * @property int $moneyid
 * @property string $捐款人姓名
 * @property string $单位
 * @property int $金额
 * @property string $用途
 */
class YiiDonation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_donation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['moneyid', '金额'], 'required'],
            [['moneyid', '金额'], 'integer'],
            [['捐款人姓名'], 'string', 'max' => 20],
            [['单位', '用途'], 'string', 'max' => 50],
            [['moneyid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'moneyid' => 'Moneyid',
            '捐款人姓名' => '捐款人姓名',
            '单位' => '单位',
            '金额' => '金额',
            '用途' => '用途',
        ];
    }
}
