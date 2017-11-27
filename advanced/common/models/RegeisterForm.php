<?php
namespace common\models;

use Yii;
use yii\base\Model;
use common\models\Users;

/**
 * Login form
 */
class RegeisterForm extends Model
{
    public $email;
    public $password;
    public $repassword;
    public $rememberMe = true;
    private $_user;


    //注意这里的规则由你自己定义有几个地段哈
    public function rules()
    {
         return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required','message' => '邮箱不能为空'],
            
            ['email', 'email'],
             ['email', 'string', 'max' => 255],
             ['email', 'unique', 'targetClass' => '\common\models\Users', 'message' => '此邮箱已注册'],
             


            ['password', 'required','message' => '密码不能为空'],
            ['password', 'string', 'min' => 6,'tooShort' => '密码至少填写6位'],
             ['repassword', 'required','message' => '请再次输入'],
             ['repassword', 'compare', 'compareAttribute' => 'password','message'=>'两次输入的密码不一致！'],
        ];
    }

    //注意这个方法里user表的字段
    public function signup()
    {

        if (!$this->validate()) {
            return null;
        }
        $user = new Users();
        $user->email = $this->email;            
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->created_time = time();       
        return $user->save() ? $user : null;;
    }


    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = Users::findByEmail($this->email);
        }
        return $this->_user;
    }
}
