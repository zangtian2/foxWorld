var layer = layui.layer;
function dataEcon(url) {
    console.log(url);
    layer.open({
        type: 2,
        title: 'iframe父子操作',
        skin: 'layui-layer-lan',
        maxmin: true,
        shade: 0.8,
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


/*******************************************************
 *************** 左侧导航栏小按钮 ********************
 *******************************************************/

//隐藏或显示左侧导航栏
function hideLeftNav(){
    $(".feng-nav").toggleClass("collapsed");
    $(".feng-right").toggleClass("feng-right-left");
    $(".hb").toggleClass("db");
}

//浏览器全屏设置
function btnSetScreen(){
    if(!f_IsFullScreen()){
        fullscreen();
    }else{
        exitFullscreen();
    }
}

//--------------------------------------------------
//判断浏览器是否全屏 
function f_IsFullScreen() { 
return (document.body.scrollHeight == window.screen.height && document.body.scrollWidth == window.screen.width); 
} 

//浏览器全屏
function fullscreen(){      
    elem=document.body;  
    if(elem.webkitRequestFullScreen){  
        elem.webkitRequestFullScreen();     
    }else if(elem.mozRequestFullScreen){  
        elem.mozRequestFullScreen();  
    }else if(elem.requestFullScreen){  
        elem.requestFullscreen();  
    }else{  
        alert("浏览器不支持全屏API或已被禁用")
    }  
}  

//退出浏览器全屏
function exitFullscreen(){  
    var elem=document;  
    if(elem.webkitCancelFullScreen){  
        elem.webkitCancelFullScreen();      
    }else if(elem.mozCancelFullScreen){  
        elem.mozCancelFullScreen();  
    }else if(elem.cancelFullScreen){  
        elem.cancelFullScreen();  
    }else if(elem.exitFullscreen){  
        elem.exitFullscreen();  
    }else{  
        alert("浏览器不支持全屏API或已被禁用");
    }  
}  

//搜索
function btnSearch(){
    $(".st-menu").toggleClass("st-menu-open");
}

//--------------------------------------------------
//var scrolling = false;        
//$('.feng-right').on('scroll',function(){
//    h = $(".feng-right").scrollTop() ;
//    if( h > 60 ){
//
//    }
//     
//});
      
      
      



