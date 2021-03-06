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
AppAsset::addScript($this, "@web" . "/js/communityCenter.js");


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
        /*width: 90%;*/
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
    }
    
.navin {
    line-height: 45px !important;
}
.navout .layui-this a {
    font-weight: bold;
    color: black;
}

.navout .layui-this::after {
    height:3px !important;
}

.navin a {
    font-weight: bold;
}
.navin a:hover {
    color:black !important;
    text-decoration: none;
}
.navin a:focus {
    text-decoration: none;
}

.list-group-item {
    border:0px
}
.navout .layui-nav-bar {
    top:42px !important;
    height: 3px !important;
}

.navout {
    border-bottom: 1px solid rgb(238, 238, 238);
background-color: rgb(255, 255, 255);
border-radius: 0px;margin-bottom: 0px;
padding:0px
}
</style>

<style>
/*搜索框*/
.d7:after {content:""; clear:both; display:table}
.d7 form {
  width: auto;
  float: right;
  margin-right: 30px;
}
.d7 input {
  color: rgb(66, 38, 32);
  width: 190px;
  padding-left: 15px;
  border: 0px;
  outline: none;
  position: relative;
  transition: .2s linear;
  height: 43px;
  border-bottom: 2px solid transparent;
}
.d7 input:focus {
  width: 250px;
  border-bottom: 2px solid #CC1C9E;
}
.d7 button {
  width: 45px;
  height: 45px;
  border: none;
  position: absolute;
  right: 0;
  color: grey;
background: transparent;
}

.d7 button:hover {
  color: blueviolet;
background: transparent;
}
/*搜索框*/
</style>
<div class="fly-panel detail-box" >    
    <div class="showback" >        
        
        <div style=""><ul class="layui-nav navout " lay-filter="more" style="">
             <li class="layui-nav-item navin">
                        <?= Html::a('&nbsp;&nbsp;&nbsp;全 部&nbsp;&nbsp;&nbsp;', '#', [
                            'id' =>'button-about',
                                'class' => '',                                                                
                                ]) 
        ?></li>
                
                    <li class="layui-nav-item navin">
                        <?= Html::a('&nbsp;&nbsp;&nbsp;更 多&nbsp;&nbsp;&nbsp;', '#', [
                            'id' =>'button-about',
                                'class' => '',
                                'data-toggle' => 'modal', 
                                'data-target' => '#about-modal'    //此处对应Modal组件中设置的id
                                ]) 
        ?></li>
                <li class="layui-nav-item navin"><a href="">USD/JAP</a></li>
                <li class="layui-nav-item layui-this navin"><a href="">USD/AUD</a></li>
                <li class="layui-nav-item navin"><a href="">USD/EUR</a></li>
                <li class="layui-nav-item navin">
                  <a href="javascript:;">USD/NZD</a>
                </li>
                <li class="layui-nav-item navin"><a href="">GOLD</a></li>
                <li class="layui-nav-item navin"><a href="">BMW</a></li>
                <li style="position: absolute;
display: inline-block;
*display: inline;
*zoom: 1;
vertical-align: middle;
right:0px;
line-height: 45px">
                    <form class="d7">
                        <input type="text" placeholder="搜索从这里开始...">
                        <button type="submit"><span class="ion-checkmark"></span></button>
                      </form>  
                
                </li>
              </ul>
                         
        </div>
        
     
    <div class="row">
        <div class="col-md-3 ">
            <div style="padding:15px;padding-right:0px">
            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>查找文章
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">                     
                            <input type="text" class="form-control" name="title"  placeholder="按标题">                                
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </li>
                </ul>
            </div>

            <div class="tagcloudbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>标签云
                    </li>
                    <li class="list-group-item">搜索框</li>
                </ul>
            </div>

            <div class="commentbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>最新回复
                    </li>
                    <li class="list-group-item">搜索框</li>
                </ul>
            </div>
            </div>
        </div>
        
        <div class="col-md-9" style="min-height:768px">

            <div class="main layui-clear">
                <div class="wrap">
                    <div class="" style="padding:20px">
                        <h2>交流中心</h2>
                        <br>
                        <p>Java实现LayIM后端的核心代码</p>
                        <hr>
                        <div class="fly-tab fly-tab-index" id="example">
                            <span>
                                <a href="jie/index.html">默认</a>
                                <a href="jie/index.html">最新</a>
                                <a href="jie/index.html">优质</a>
                                <a href="user/index.html">关注</a>
                            </span>
                            <a href="jie/add.html" class="layui-btn jie-add">投稿</a>
                        </div>
                        
                        <div >
                                                    <?=
                        ListView::widget([
                            'id' => 'postList',
                            'dataProvider' => $dataProvider,
                            'itemView' => '_listItem', //子视图，显示一篇文章的标题等内容
                            'layout' => '{items}{pager}',
                            'pager' => [
                                'maxButtonCount' => 10,
                                'nextPageLabel' => Yii::t('app', '下一页'),
                                'prevPageLabel' => Yii::t('app', '前一页'),
                            ]
                        ])
                        ?>                                                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>        

    </div>         
      
        </div>
    </div>

<?=$this->render('nodes');?>


<!--  <div class="edge">
    <div class="fly-panel leifeng-rank"> 
      <h3 class="fly-panel-title">近一月回答榜 - TOP 12</h3>
      <dl>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
        <dd>
          <a href="user/home.html">
            <img src="assets/images/avatar/default.png">
            <cite>纸飞机</cite>
            <i>159次回答</i>
          </a>
        </dd>
      </dl>
    </div>
    
    <dl class="fly-panel fly-list-one"> 
      <dt class="fly-panel-title">最近热帖</dt>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
        <span><i class="iconfont">&#xe60b;</i> 6087</span>
      </dd>
      <dd>
        <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
        <span><i class="iconfont">&#xe60b;</i> 767</span>
      </dd>
    </dl>
    
    <dl class="fly-panel fly-list-one"> 
      <dt class="fly-panel-title">近期热议</dt>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
      <dd>
        <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
        <span><i class="iconfont">&#xe60c;</i> 96</span>
      </dd>
    </dl>
    
    <div class="fly-panel fly-link"> 
      <h3 class="fly-panel-title">友情链接</h3>
      <dl>
        <dd>
          <a href="http://www.layui.com/" target="_blank">layui</a>
        </dd>
        <dd>
          <a href="http://layim.layui.com/" target="_blank">LayIM</a>
        </dd>
        <dd>
          <a href="http://layer.layui.com/" target="_blank">layer</a>
        </dd>
      </dl>
    </div>


  </div>-->


