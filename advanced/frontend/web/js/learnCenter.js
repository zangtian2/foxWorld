/* 
 * @Author: anchen
 * @Date:   2017-03-29 09:43:43
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-03-29 09:54:46
 */

/**
 项目JS主入口
 以依赖Layui的layer和form模块为例
 **/

//var $ = layui.jquery; //引入jquery,index中引入则在此不需要多次引入

$('.feng-nav-button').bind('click', function(){   
   buttons = document.querySelectorAll('.feng-nav-button.is-selected');
  Array.prototype.forEach.call(buttons, function (button) {
    button.classList.remove('is-selected')
  });
$(this).addClass('is-selected');
});


$(document).ready(function () {
    //展开主菜单
    $(".feng-drop-a").click(function () {
        $(this).next().slideToggle(250, function () {
        });
    });

});

//    editor.md 转html显示
//    $(document).ready(function () {
//        var wordsView;
//        wordsView = editormd.markdownToHTML("wordsView", {
//            htmlDecode: "style,script,iframe", // you can filter tags decode
//            emoji: true,
//            taskList: true,
//            tex: true, // 默认不解析
//            flowChart: true, // 默认不解析
//            sequenceDiagram: true, // 默认不解析
//        });
//
//    });




var wordsView;

function loadmd() {
    wordsView = editormd.markdownToHTML("wordsView", {
        htmlDecode: "style,script,iframe", // you can filter tags decode
        emoji: true,
        taskList: true,
        tex: true, // 默认不解析
        flowChart: true, // 默认不解析
        sequenceDiagram: true, // 默认不解析
    });
}

function dataReload(url) {
    $.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
            if (typeof (wordsView) !== 'undefined') {
                wordsView.remove();
            }
            $("#learnData").append(data);
            loadmd();
        },
        error: function (data) {
            alert("读取数据 error!");
        }
    });
}