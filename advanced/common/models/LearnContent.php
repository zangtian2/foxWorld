<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "learn_content".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $content
 * @property string $create_time
 * @property string $update_time
 */
class LearnContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'learn_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'menu_id'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'content' => '内容',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
        ];
    }
}
