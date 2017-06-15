<?php

use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/plugin/editor.md/css/editormd.css");
$this->registerJs(
        'var $ = layui.jquery;'
);
//AppAsset::addScript($this, "@web" . "/plugin/barrager/dist/js/jquery.barrager.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/marked.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/prettify.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/raphael.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/underscore.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/sequence-diagram.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/flowchart.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/jquery.flowchart.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/editormd.js");
AppAsset::addScript($this, "@web" . "/js/learnCenter.js");
//AppAsset::addScript($this,"http://cdn.bootcss.com/vue/2.3.0/vue.js");
  

?>


<style>
    .detail-box {
        margin: 15px;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        margin-top: 13px;
    }    

    .showback {
        margin: 15px 5px;margin-top: 20px;padding-bottom: 30px;        
    }    

    .showback div{
        width: 90%;
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
    }
</style>

<div class="fly-panel detail-box" >    
    <div class="showback" >        
        <div  id='learnData' >            
            <?= $l_content ?>
        </div>        
    </div>            
</div>


<div class="fly-panel detail-box">    
    <div class="showback">
        <!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>
<!-- UY END -->
<!--        <div  id='tt' >     
                        <div style="padding:15px;border:1px solid #444">
                <h2>张三</h2>
                <p>teste</p>                
            </div>
            <hr>
            <div style="padding:15px;border:1px solid #444">
                <h2>张三</h2>
                <p>teste</p>                
            </div>
            <hr>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="评论..." id="msg-box">
                <span class="input-group-btn">
                    <button class="btn btn-info" type="button">Go!</button>
                </span>
            </div>
        </div>        -->

        <!--高速版-->
        <div id="SOHUCS" sid="请将此处替换为配置SourceID的语句" ></div>
        <script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
        <script type="text/javascript">
        window.changyan.api.config({
        appid: 'cysYM0Vnx',
        conf: 'prod_91f6e2794a02d86dc7878f2dae1e5c92'
        });
        </script>
    </div>
</div>

