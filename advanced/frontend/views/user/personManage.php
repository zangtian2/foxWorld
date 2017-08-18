<?php
/* @var $this yii\web\View */

use yii\widgets\ListView;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/css/about.css");
AppAsset::addCss($this, "@web" . "/css/demo.css");
AppAsset::addCss($this, "@web" . "/css/style7.css");

$this->registerJs(
        'var $ = layui.jquery;'
);
//AppAsset::addScript($this, "@web" . "/js/userCenter.js");
?>



<style>
    .detail-box {
        margin: 15px;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        margin-top: 13px;
        padding: 0;  
    }    

    .showback  {
        width: 90%;
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
    }    
</style>

<div class="fly-panel detail-box" >    
    <div class="showback" >        
        <div style="margin-top: 25px">
            <div class="alert alert-warning">注意！更新密码以后需要重新登陆。</div>
            <form novalidate="novalidate" class="simple_form edit_user" id="edit_user_12253" action="/setting" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="IRJ9IJH3eO4FA4+Beax+F4nV5DE0fi7OoKEUubS8i0YuKMDhYbHfPSRvc83kVviexO9ZxIXXSGY0wlbnj5nRBQ==" />

                <input type="hidden" name="by" value="password" />
                <div class="form-group password optional user_current_password"><label class="password optional control-label" for="user_current_password">旧密码</label><input class="form-control password optional" type="password" name="user[current_password]" id="user_current_password" /></div>
                <div class="form-group password optional user_password"><label class="password optional control-label" for="user_password">密码</label><input class="form-control password optional" type="password" name="user[password]" id="user_password" /></div>
                <div class="form-group password optional user_password_confirmation"><label class="password optional control-label" for="user_password_confirmation">确认密码</label><input class="form-control password optional" type="password" name="user[password_confirmation]" id="user_password_confirmation" /></div>
                <div class="form-actions hide-ios">
                    <input type="submit" name="commit" value="修改密码" class="btn btn-lg btn-success" data-disable-with="正在保存" />
                </div>
            </form>  
        </div>

        <div style="margin-top: 25px">
            <h3 style="font-weight:bold">账户管理</h3>
            <div class="panel-body">
                <div class="heading">删除我的账号</div>

                <form action="/setting" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="delete" /><input type="hidden" name="authenticity_token" value="0ycrYR4ksMrBoo/ZFWjT+XQzm+qjesnuXxPRryZNI83cHZag7mIXGeDOc5WIklVwOQkmHxLTr0bLcJPxHWh5jg==" />

                    <input type="hidden" name="by" value="destroy" />
                    <div class="form-group">
                        <p>当然不在想使用这个账号的时候，可以选择删除账号。</p>
                        <p>删除以后数据将会保留，以匿名的方式存在，你的账号将无法再登陆。</p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="要删除账号，请输入你的密码" type="password" name="user[current_password]" />
                    </div>
                    <input type="submit" name="commit" value="确定删除我的账号" class="btn btn-danger" data-disable-with="正在提交" />
                </form>
                <div class="heading">绑定其他帐号用于登录</div>

                <ul class="list-group col-sm-6">
                    <li class="list-group-item">
                        GitHub
                        <a rel="twitsy nofollow" title="点击解除绑定" data-method="delete" href="/setting/auth/github"><i class="fa fa-remove"></i></a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    </div>




