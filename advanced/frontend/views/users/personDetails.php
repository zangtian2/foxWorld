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
         <h3 style="font-weight:bold">详细资料</h3>
         <hr>
               <div class="panel-body">
        <form enctype="multipart/form-data" novalidate="novalidate" class="simple_form edit_user" id="edit_user_12253" action="/setting" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="tzMof2NKakz92lB2s40WhO1t63Y4CaGA8Tbd0P+L++G4CZW+kwzNn9y2rDoud5ANoFdWg4mgxyhlVZ+OxK6hog==" />
        
        <input type="hidden" name="by" value="profile" />
          <div class="form-group string optional user_location"><label class="string optional control-label" for="user_location">城市</label><input class="form-control string optional" style="width: 200px" type="text" name="user[location]" id="user_location" /><p class="help-block">请用中文填写所在城市</p></div>
          <div class="form-group string optional user_company"><label class="string optional control-label" for="user_company">公司</label><input class="form-control string optional" style="width: 400px" type="text" name="user[company]" id="user_company" /></div>
        <div class="form-group">
          <label class="string optional control-label control-label" for="user_github">GitHub</label>
          <div class="input-group">
            <span class="input-group-addon">https://github.com/</span>
            <input class="form-control" placeholder="帐号" type="text" value="zangtian2" name="user[github]" id="user_github" />
          </div>
        </div>
        <div class="form-group">
          <label class="string optional control-label control-label" for="user_twitter">Twitter</label>
          <div class="input-group">
            <span class="input-group-addon">https://twitter.com/</span>
            <input class="form-control" placeholder="帐号" type="text" name="user[twitter]" id="user_twitter" />
          </div>
        </div>
          <div class="form-group string optional user_website"><label class="string optional control-label" for="user_website">个人主页</label><input class="form-control string optional" placeholder="http://" type="text" name="user[website]" id="user_website" /></div>

        <div class="form-group form-group-profile-field-alipay">
          <label class="control-label" for="user_profile_alipay">支付宝</label>
          <input class="form-control" type="text" value="" name="user[profiles][alipay]" id="user_profile_alipay">
          
        </div>
        <div class="form-group form-group-profile-field-paypal">
          <label class="control-label" for="user_profile_paypal">PayPal</label>
          <input class="form-control" type="text" value="" name="user[profiles][paypal]" id="user_profile_paypal">
          
        </div>
        <div class="form-group form-group-profile-field-qq">
          <label class="control-label" for="user_profile_qq">QQ</label>
          <input class="form-control" type="text" value="" name="user[profiles][qq]" id="user_profile_qq">
          
        </div>
        <div class="form-group form-group-profile-field-weibo">
          <label class="control-label" for="user_profile_weibo">微博</label>
            <div class="input-group">
              <span class="input-group-addon">https://weibo.com/</span>
          <input class="form-control" type="text" value="" name="user[profiles][weibo]" id="user_profile_weibo">
          </div>
        </div>
        <div class="form-group form-group-profile-field-wechat">
          <label class="control-label" for="user_profile_wechat">微信</label>
          <input class="form-control" type="text" value="" name="user[profiles][wechat]" id="user_profile_wechat">
          
        </div>
        <div class="form-group form-group-profile-field-douban">
          <label class="control-label" for="user_profile_douban">豆瓣</label>
            <div class="input-group">
              <span class="input-group-addon">https://www.douban.com/people/</span>
          <input class="form-control" type="text" value="" name="user[profiles][douban]" id="user_profile_douban">
          </div>
        </div>
        <div class="form-group form-group-profile-field-dingding">
          <label class="control-label" for="user_profile_dingding">钉钉</label>
          <input class="form-control" type="text" value="" name="user[profiles][dingding]" id="user_profile_dingding">
          
        </div>
        <div class="form-group form-group-profile-field-aliwangwang">
          <label class="control-label" for="user_profile_aliwangwang">旺旺</label>
          <input class="form-control" type="text" value="" name="user[profiles][aliwangwang]" id="user_profile_aliwangwang">
          
        </div>
        <div class="form-group form-group-profile-field-facebook">
          <label class="control-label" for="user_profile_facebook">Facebook</label>
            <div class="input-group">
              <span class="input-group-addon">https://facebook.com/</span>
          <input class="form-control" type="text" value="" name="user[profiles][facebook]" id="user_profile_facebook">
          </div>
        </div>
        <div class="form-group form-group-profile-field-instagram">
          <label class="control-label" for="user_profile_instagram">Instragram</label>
            <div class="input-group">
              <span class="input-group-addon">https://instagram.com/</span>
          <input class="form-control" type="text" value="" name="user[profiles][instagram]" id="user_profile_instagram">
          </div>
        </div>
        <div class="form-group form-group-profile-field-dribbble">
          <label class="control-label" for="user_profile_dribbble">Dribbble</label>
            <div class="input-group">
              <span class="input-group-addon">https://dribbble.com/</span>
          <input class="form-control" type="text" value="" name="user[profiles][dribbble]" id="user_profile_dribbble">
          </div>
        </div>
        <div class="form-group form-group-profile-field-battle_tag">
          <label class="control-label" for="user_profile_battle_tag">BattleTag</label>
            <div class="input-group">
              <span class="input-group-addon">#</span>
          <input class="form-control" type="text" value="" name="user[profiles][battle_tag]" id="user_profile_battle_tag">
          </div>
        </div>
        <div class="form-group form-group-profile-field-psn_id">
          <label class="control-label" for="user_profile_psn_id">PSN ID</label>
          <input class="form-control" type="text" value="" name="user[profiles][psn_id]" id="user_profile_psn_id">
          
        </div>
        <div class="form-group form-group-profile-field-steam_id">
          <label class="control-label" for="user_profile_steam_id">Stream ID</label>
          <input class="form-control" type="text" value="" name="user[profiles][steam_id]" id="user_profile_steam_id">
          
        </div>

          <div class="form-group string optional user_tagline"><label class="string optional control-label" for="user_tagline">签名</label><input class="form-control string optional" type="text" name="user[tagline]" id="user_tagline" /></div>
        <div class="form-actions hide-ios">
          <button type="submit" class="btn btn-lg btn-primary" data-disable-with="正在保存">更新资料</button>
        </div>
</form>      </div>
     </div>

    </div>
</div>



