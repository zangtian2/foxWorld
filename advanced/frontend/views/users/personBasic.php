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


     <div style="min-height:768px;margin-top: 25px">
         <h3 style="font-weight:bold">基础资料</h3>
         <hr>
      <div class="panel-body">
        <form enctype="multipart/form-data" novalidate="novalidate" class="simple_form edit_user" id="edit_user_12253" action="/setting" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="EPVhRU673UKApgxqLxziyzYXVku1CiQ4zSeu+QGVot0fz9yEvv16kaHK8Cay5mRCey3rvgSjQpBZROynOrD4ng==" />
        
        <div class="row">
          <div class="col-sm-9">
            <div class="form-group string optional user_name"><label class="string optional control-label" for="user_name">名字</label><input class="form-control string optional" style="width: 200px" type="text" value="" name="user[name]" id="user_name" /></div>
            <div class="form-group email optional user_email"><label class="email optional control-label" for="user_email">Email</label><input class="form-control string email optional" type="email" value="github+20548146@example.com" name="user[email]" id="user_email" /><p class="help-block">保存以后就不可以改了哦！</p></div>
            <div class="form-group">
              <div class="checkbox">
                <label for="user_email_public" class="checkbox"><input name="user[email_public]" type="hidden" value="0" /><input type="checkbox" value="1" name="user[email_public]" id="user_email_public" /> 公开 Email</label>
              </div>
            </div>
            <div class="form-group file optional user_avatar"><label class="file optional control-label" for="user_avatar">头像</label><input class="form-control file optional" type="file" name="user[avatar]" id="user_avatar" /></div>
            <div class="form-group text optional user_bio"><label class="text optional control-label" for="user_bio">个人介绍</label><textarea class="form-control text optional xxlarge" rows="6" name="user[bio]" id="user_bio">
</textarea></div>
          </div>
          <div class="col-sm-3">
            <div class="form-group avatar-preview" style="text-align: center;">
              <img class="media-object avatar-96" src="//upload.jianshu.io/collections/images/39/332293730045332541.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/240/h/240" alt="12253" />
            </div>
          </div>
        </div>
        <div class="form-actions hide-ios">
          <button type="submit" class="btn btn-lg btn-primary" data-disable-with="正在保存">更新资料</button>
        </div>
</form>      </div>
     </div>

    </div>
</div>



