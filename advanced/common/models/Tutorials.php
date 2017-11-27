<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tutorials".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $create_time
 * @property integer $update_time
 */
class Tutorials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tutorials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['create_time', 'update_time'], 'integer'],
            [['title'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '题目',
            'content' => '内容',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }
    
   public function getBeginning() {
        $tmpStr = strip_tags($this->content);
        $tmpLen = mb_strlen($tmpStr);
        return mb_substr($tmpStr, 0, 50, 'utf-8') . (($tmpLen > 50) ? '...' : '');
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->create_time = time();
                $this->update_time = time();
            } else {
                $this->update_time = time();
            }
            return True;
        } else {
            return False;
        }
    }
}
