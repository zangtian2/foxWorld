<?php

use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/plugin/editor.md/css/editormd.css");
$this->registerJs(
        'var $ = layui.jquery;'
);
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
//AppAsset::addScript($this,"http://v2.uyan.cc/code/uyan.js");
AppAsset::addScript($this, "@web" . "/js/bootstrap.min.js");
AppAsset::addScript($this, "@web" . "/js/matrix.chat.js");


?>

<link rel="stylesheet" href="css/matrix-style_1.css" />
<div class="fly-panel detail-box" style="margin: 15px;
     border: 1px solid rgb(192, 200, 212);
     box-shadow: 0px 3px 5px rgb(170, 178, 189);
     margin-top: 13px;">
    
    <div class="showback"  style="margin: 15px 5px;margin-top: 20px;padding-bottom: 30px;">
        
        <div style=" width: 90%;
             margin: 0 auto;
             margin-left: auto!important;
             margin-right: auto!important;" id='learnData' >
        </div>
        
    </div>        
    
</div>

<div class="fly-panel detail-box" style="margin: 15px;
     border: 1px solid rgb(192, 200, 212);
     box-shadow: 0px 3px 5px rgb(170, 178, 189);
     margin-top: 13px;">
    
    <div class="showback"  style="margin: 15px 5px;margin-top: 20px;padding-bottom: 30px;">
                    
        <div style=" width: 90%;
             margin: 0 auto;
             margin-left: auto!important;
             margin-right: auto!important;" id='tt' >


        <div class="widget-box widget-chat">
          <div class="widget-title"> 
            <h5>与本文相关的评论</h5>
          </div>
          <div class="widget-content nopadding">
              <div class="chat-content" style="height:auto">
              <div class="chat-messages" id="chat-messages">
                <div id="chat-messages-inner"></div>
              </div>
                  <hr>
                      <div class="input-group chat-message">
                        <input type="text" class="form-control" placeholder="评论..." id="msg-box">
                        <span class="input-group-btn">
                          <button class="btn btn-info" type="button">Go!</button>
                        </span>
                      </div>
            </div>
          </div>
        </div>
      
    </div>        
    
</div>



