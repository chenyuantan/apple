<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $role_id
 * @property string $admin_name
 * @property string $password
 * @property integer $create_time
 * @property string $email
 * @property string $last_ip
 * @property string $is_del
 * @property integer $last_time
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'last_time'], 'integer'],
            [['admin_name', 'password'], 'string', 'max' => 30],
            [['email', 'last_ip'], 'string', 'max' => 50],
            [['is_del'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => 'Role ID',
            'admin_name' => 'Admin Name',
            'password' => 'Password',
            'create_time' => 'Create Time',
            'email' => 'Email',
            'last_ip' => 'Last Ip',
            'is_del' => 'Is Del',
            'last_time' => 'Last Time',
        ];
    }
}
