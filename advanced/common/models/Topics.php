<?php

namespace common\models;

use Yii;
use common\models\NavLeft;
/**
 * This is the model class for table "topics".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $manager_id
 * @property integer $follow_num
 * @property integer $post_num
 * @property integer $created_time
 * @property integer $update_time
 */
class Topics extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'topics';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['description'], 'string'],
            [['manager_id', 'follow_num', 'post_num', 'created_time', 'update_time'], 'integer'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'manager_id' => 'Manager ID',
            'follow_num' => 'Follow Num',
            'post_num' => 'Post Num',
            'created_time' => 'Created Time',
            'update_time' => 'Update Time',
        ];
    }

    public function getNav() {
        return $this->hasOne(NavLeft::className(), ['id' => 'id']);
    }

    public static function getTopicDetail($topic_id) {
        return self::findOne(['id' => $topic_id]);
    }

}
