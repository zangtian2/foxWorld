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

var $ = layui.jquery; //重点处

$(document).ready(function () {
    //展开主菜单
    $(".drop-show").click(function () {
        if (!$(".feng-left").hasClass('small-bar')) {
            $(this).children(".drop-list").slideToggle(250, function () {
            });
            // $(this).siblings('li').children(".drop-list").slideUp();
        }
    });
});
