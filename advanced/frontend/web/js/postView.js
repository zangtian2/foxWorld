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