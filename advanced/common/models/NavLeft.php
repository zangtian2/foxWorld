<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "nav_left".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parentId
 * @property string $serial
 * @property string $area
 */
class NavLeft extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nav_left';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'sort'], 'integer'],
            [['pid', 'sort'], 'required'],
            [['title', 'page'], 'string', 'max' => 255],
            [['title'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '栏目名称',
            'pid' => '父级名称',
            'sort' => '排序',
            'page' => '区域',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentName() {
        if($this->parentId!=0){
            return $this->find()->select(['title'])->where(['id'=>$this->parentId])->one()->name;
        }        
    }

        /*
      * 获取缓存中地区
      */
     public static function getRnames($name){
         $dis_city = Yii::$app->cache->get("cache_rname");
         if(!$dis_city){
              $dis_city = self::find()->where(['page'=>$name,'pid'=>0])->orderBy('sort')->asArray()->all();
             Yii::$app->cache->set("cache_dis", $dis_city, 86400*30);
         }
         return $dis_city;
     }
     
     /*
      * 获取缓存中地区
      */
     public static function getCnames($name){
         $dis_city = Yii::$app->cache->get("cache_cname");
         if(!$dis_city){
              $dis_city = self::find()->where(['and',['=', 'page', $name],['!=', 'pid', 0],])->orderBy('sort')->asArray()->all();
             Yii::$app->cache->set("cache_dis", $dis_city, 86400*30);
         }         
         return $dis_city;
     }
     
     
       public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                if (!$this->area){
                    $this->area = $this->findOne(['id'=>$this->parentId])->area;      
                }                          
            } 
            return True;
        } else {
            return False;
        }
    }
    
    public function afterDelete() {
        parent::afterDelete();
        if ($this->parentId==0){            
            $this->deleteAll(['pid'=>$this->id]);
        }
    }
}
