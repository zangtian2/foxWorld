<?php

namespace common\models;

use Yii;
use common\models\NavLeft;

/**
 * This is the model class for table "learn_content".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $content
 * @property string $create_time
 * @property string $update_time
 */
class LearnContent extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'learn_content';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [[ 'menu_id'], 'integer'],
            [['content'], 'string'],
            [['content'], 'required'],
            [['create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'menu_id' => '对应菜单',
            'content' => '内容',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
        ];
    }

    public function getMenuName() {
        $model = NavLeft::find()->select(['name'])->where(['id' => $this->menu_id])->one();
        return $model->name;
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
