var layer = layui.layer;
function dataEcon(url) {
    console.log(url);
    layer.open({
        type: 2,
        title: 'iframe父子操作',
        skin: 'layui-layer-lan',
        maxmin: true,
        shade: 0.7,
        shadeClose: true, //点击遮罩关闭层
        area: ['1150px', '650px'],
        content: url,
    });

}


var $ = layui.jquery;
$('.feng-nav-button').bind('click', function () {
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