<?php

namespace common\models;

use Yii;
use common\models\NavLeft;


/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $user_id
 * @property integer $topic_id
 * @property integer $status
 * @property integer $watch_num
 * @property integer $created_time
 * @property integer $update_time
 */
class Posts extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'content', 'user_id'], 'required'],
            [['content'], 'string'],
            [['user_id', 'topic_id', 'status', 'watch_num', 'created_time', 'update_time'], 'integer'],
            [['title'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'user_id' => '作者',
            'topic_id' => '专题',
            'status' => '发布状态',
            'watch_num' => '查看次数',
            'created_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }

    public function getCommentCount() {
        return Comment::find()->where(['post_id' => $this->id, 'status' => 2])->count();
    }

    public function getBeginning($length = 128) {
        $tmpStr = strip_tags($this->content);
        $tmpLen = mb_strlen($tmpStr);

        $tmpStr = mb_substr($tmpStr, 0, $length, 'utf-8');
        return $tmpStr . ($tmpLen > $length ? '...' : '');
    }

    public function getUrl() {
        return Yii::$app->urlManager->createUrl([
                    'posts/detail',
                    'id' => $this->id,
                    'title' => $this->title,
        ]);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor() {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    public function getTopic() {
        return $this->hasOne(NavLeft::className(), ['id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments() {
        return $this->hasMany(Comment::className(), ['post_id' => 'id']);
    }

    


}
