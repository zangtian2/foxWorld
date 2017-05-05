
/**
 项目JS主入口
 以依赖Layui的layer和form模块为例
 **/

//var $ = layui.jquery; //引入jquery,index中引入则在此不需要多次引入

$(document).ready(function () {
    //加载首页
    loadmd();
});

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

function dataReload(url, id) {
    index = layer.load(1);
    $.ajax({
        type: 'GET',
        url: url, //域名修改时需要重新修改
        data: {'menu_id': id},
        dataType: 'json',
        success: function (data) {
            if (typeof (wordsView) !== 'undefined') {
                wordsView.remove();
            }

            $("#learnData").append(data.text);
            loadmd();

            $('.feng-right').animate({scrollTop: 0}, 600);
            layer.close(index);
        },
        error: function (data) {
            console.log(data);
            layer.close(index);
            alert("读取数据 error!");
        }
    });
}


