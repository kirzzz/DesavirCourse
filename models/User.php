<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "User".
 *
 * @property int $id
 * @property string $username
 * @property string|null $tel
 * @property string $email
 * @property string|null $name
 * @property string $role
 * @property string $authKey
 * @property string $passwordHash
 * @property string|null $passwordResetToken
 * @property int $status
 * @property string|null $ipLast
 * @property string|null $ipCreate
 * @property int $created_at
 * @property int $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'role', 'authKey', 'passwordHash', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'name'], 'string', 'max' => 50],
            [['tel', 'role'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
            [['authKey'], 'string', 'max' => 32],
            [['passwordHash', 'passwordResetToken', 'ipLast', 'ipCreate'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['tel'], 'unique'],
            [['passwordResetToken'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'tel' => 'Tel',
            'email' => 'Email',
            'name' => 'Name',
            'role' => 'Role',
            'authKey' => 'Auth Key',
            'passwordHash' => 'Password Hash',
            'passwordResetToken' => 'Password Reset Token',
            'status' => 'Status',
            'ipLast' => 'Ip Last',
            'ipCreate' => 'Ip Create',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSessions(): ActiveQuery
    {
        return $this->hasMany(Session::class, ['userId' => 'id']);
    }


}
