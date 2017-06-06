<?php

namespace common\models;
use common\models\NavLeft;
use Yii;

/**
 * This is the model class for table "topics".
 *
 * @property integer $id
 * @property integer $topic_id
 * @property string $description
 */
class Topics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id'], 'integer'],
            [['description'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic_id' => 'Topic ID',
            'description' => 'Description',
        ];
    }
    
    
    public function getNav()
    {
        return  $this->hasOne(NavLeft::className(), ['id' => 'topic_id']);
    }
    
    
   public static function getTopicDetail($topic_id)
    {
        return self::findOne(['topic_id'=>$topic_id]);
    }
}
