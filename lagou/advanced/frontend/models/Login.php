<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property integer $create_time
 * @property integer $end_time
 * @property string $ip
 * @property integer $info_id
 * @property string $email
 * @property string $status
 * @property integer $type
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'end_time', 'info_id', 'type'], 'integer'],
            [['username', 'email'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 32],
            [['ip'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'create_time' => 'Create Time',
            'end_time' => 'End Time',
            'ip' => 'Ip',
            'info_id' => 'Info ID',
            'email' => 'Email',
            'status' => 'Status',
            'type' => 'Type',
        ];
    }
}
