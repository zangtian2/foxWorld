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

function displayAbout () {
  document.querySelector('#about-modal').classList.add('is-shown')
}

$('#button-about').bind('click', function () {
    displayAbout();
 });
   
$('#get-started').bind('click', function () {
 document.querySelector('.modal.is-shown').classList.remove('is-shown')
 });

//start
function dataReload(url, id) {
    window.location.href=url+'&PostsSearch[topic_id]='+id;
}
 
 var element = layui.element();
element.on('nav(tttt)', function(elem){
  console.log(this.innerText); //当前Tab标题所在的原始DOM元素
   $('.tab-content').empty();
   $('.tab-content').append(this.innerText);
//  console.log(data.index); //得到当前Tab的所在下标
//  console.log(data.elem); //得到当前的Tab大容器
});


$(function(){
        var index = 0;  
        var i = 10;  //定义每个面板显示8个菜单
        var len = $(".u .scrol li").length;  //获得LI元素的个数
        var page = 1;
        var maxpage = Math.ceil(len/i);
        var scrollWidth = $(".u").width();
        $(".vright").click(function(e){
            if(!$(".u .scrol").is(":animated")){
            if(page == maxpage ){
                $(".u .scrol").stop();
                $("#div1").css({
                    "top": (e.pageY + 20) +"px",
                    "left": (e.pageX + 20) +"px",
                    "opacity": "0.9"
                
                }).stop(true,false).fadeIn(800).fadeOut(800);
                
            }else{
                $(".u .scrol").animate({left : "-=" + scrollWidth +"px"},2000);
                page++;
            }
            }
        });
        $(".vleft").click(function(){
        if(!$(".u .scrol").is(":animated")){
            if(page == 1){
            $(".u .scrol").stop();
            }else{
            $(".u .scrol").animate({left : "+=" + scrollWidth +"px"},2000);
            page--;
            }
            }
        });
        
    });
    
    
    


