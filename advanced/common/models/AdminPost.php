<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin_post".
 *
 * @property integer $update_time
 * @property integer $create_time
 * @property integer $status
 * @property string $tags
 * @property string $content
 * @property string $title
 * @property string $nickname
 * @property integer $id
 * @property integer $author_id
 */
class AdminPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['update_time', 'create_time', 'status', 'id', 'author_id'], 'integer'],
            [['status', 'content', 'title', 'nickname', 'author_id'], 'required'],
            [['tags', 'content'], 'string'],
            [['title', 'nickname'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'update_time' => 'Update Time',
            'create_time' => 'Create Time',
            'status' => 'Status',
            'tags' => 'Tags',
            'content' => 'Content',
            'title' => 'Title',
            'nickname' => 'Nickname',
            'id' => 'ID',
            'author_id' => 'Author ID',
        ];
    }
    
    
    public function search($params) {
        $query = self::find();
        // grid filtering conditions
        
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'author_id' => $this->author_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
                ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'tags', $this->tags])
                ->andFilterWhere(['like', 'nickname', $this->nickname]);

       
       $dataProvider =  $query->offset($params['offset'])->limit($params['limit'])->asArray()->all();
        
        return $dataProvider;
    }
}
