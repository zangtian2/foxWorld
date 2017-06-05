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
            [['parentId', 'serial'], 'integer'],
            [['parentId', 'serial'], 'required'],
            [['name', 'area'], 'string', 'max' => 255],
            [['name'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '栏目名称',
            'parentId' => '父级名称',
            'serial' => '排序',
            'area' => '区域',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentName() {
        if($this->parentId!=0){
            return $this->find()->select(['name'])->where(['id'=>$this->parentId])->one()->name;
        }        
    }

        /*
      * 获取缓存中地区
      */
     public static function getRnames($name){
         $dis_city = Yii::$app->cache->get("cache_rname");
         if(!$dis_city){
              $dis_city = self::find()->where(['area'=>$name,'parentId'=>0])->orderBy('serial')->asArray()->all();
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
              $dis_city = self::find()->where(['and',['=', 'area', $name],['!=', 'parentId', 0],])->orderBy('serial')->asArray()->all();
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
            $this->deleteAll(['parentId'=>$this->id]);
        }
    }
}
