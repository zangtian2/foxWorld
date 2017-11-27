<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Posts;

/**
 * PostSearch represents the model behind the search form about `common\models\Post`.
 */
class PostsSearch extends Posts {

    public function attributes() {
        return array_merge(parent::attributes(), ['authorName']);
    }

    /**
     * @inheritdoc
     */

    public function rules() {
        return [
                [['id', 'status', 'created_time', 'update_time', 'user_id','watch_num','topic_id'], 'integer'],
                [['title','content', 'authorName'], 'safe'],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function scenarios() {
        // bypass scenarios() implementation in the parent class 作废
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params,$tag=true) {
        $query = Posts::find();
        // grid filtering conditions

        $dataProvider = new ActiveDataProvider([
                 'query' => $query,
                 'pagination' => ['pageSize' => 10],
                 'sort' => [
                     'defaultOrder' => [
                         'id' => SORT_DESC,
                     ],
                     'attributes' => ['id', 'title'],
                 ]
             ]);

            $this->load($params);

             if (!$this->validate()) {
                 // uncomment the following line if you do not want to return any records when validation fails
                 // $query->where('0=1');
                 return $dataProvider;
             }        
        $query->andFilterWhere([
            'posts.id' => $this->id,
            'status' => $this->status,
            'watch_num' => $this->watch_num,
            'created_time' => $this->created_time,
            'update_time' => $this->update_time,
            'author_id' => $this->user_id,      
            'topic_id' => $tag?$this->topic_id:"",
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
                ->andFilterWhere(['like', 'content', $this->content]);

        $query->join('INNER JOIN', 'Users', 'posts.user_id = users.id');
//        $query->andFilterWhere(['like', 'Users.nickname', $this->authorName]);

        
        
//            $dataProvider->sort->attributes['authorName'] = [
//                          'asc' => ['Users.nickname' => SORT_ASC],
//                           'desc' => ['Users.nickname' => SORT_DESC],
//              ];
//       $dataProvider =  $query->offset($offset)->limit($limit)->all();
        
        return $dataProvider;
    }

}
