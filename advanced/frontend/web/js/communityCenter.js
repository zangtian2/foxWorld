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

$(document).ready(function () {
    //展开主菜单
    $(".feng-drop-a").click(function () {
        $(this).next().slideToggle(250, function () {
        });
    });

});

